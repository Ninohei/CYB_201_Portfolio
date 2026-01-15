<?php
/*
    Name: Sinamban, Harvey Jireh C.
    Section: CYB-201
    Date: January 15, 2026
*/
include 'classes/Account.php';
include 'classes/Customer.php';

$accounts = [
    new Account(9284051736482, "Savings Account", 25000.75),
    new Account(7402859163248, "Checking Account", -15000.50),
    new Account(1593847260537, "Time Deposit", 50000.00),
    new Account(5831620479104, "Salary Account", 25000.25)
];

$customer = new Customer("Harvey", "Sinamban", "personal.harveyjireh@gmail.com", "hellodweb", $accounts);

include 'includes/header.php';

?>

<h1>Account Dashboard: <?php echo $customer->getFullName(); ?></h1>

<h2>Account Summary</h2>

<table>
    <tr>
        <th>Account Number</th>
        <th>Account Type</th>
        <th>Balance (PHP)</th>
    </tr>

    <?php
    foreach ($customer->accounts as $account) {

        $balance = $account->getBalance();
        $formattedBalance = "₱" . number_format($balance, 2);
        echo "<tr>";
        echo "<td>{$account->number}</td>";
        echo "<td>{$account->type}</td>";

        if ($balance >= 0) {
            echo "<td class='credit'>{$formattedBalance}</td>";
        } else {
            echo "<td class='overdrawn'>{$formattedBalance}</td>";
        }

        echo "</tr>";
    }
    ?>

    <tr></tr>

    <tr>
        <td colspan="2">
            <strong>Total Balance:</strong>
        </td>
    <!-- I added the Total Balance for Transparency :) -->
        <td>
            <?php
            $totalBalance = 0;
            foreach ($customer->accounts as $account) {
                $totalBalance += $account->getBalance();
            }
            echo "₱" . number_format($totalBalance, 2);
            ?>
        </td>
    </tr>
</table>

<?php
include 'includes/footer.php';
?>