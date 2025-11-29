<?php include 'header.php'; ?>
<?php
    $customer_name = "Harvey";
    $order_id = "20620552";
    $purchase_date = "November 29, 2025";
    $purchase_time = "11:00 PM";
    
    $orders = [
        ['item' => 'Premium Pine Christmas Tree (6ft)', 'quantity' => '1', 'cost' => 2000],
        ['item' => 'LED String Lights Set (200 bulbs)', 'quantity' => '2', 'cost' => 200],
        ['item' => 'Handcrafted Wreaths (24-inch)', 'quantity' => '3', 'cost' => 450],
        ['item' => 'Glass Ornament Set (24pcs)', 'quantity' => '5', 'cost' => 180],
        ['item' => 'Premium Garlands (15ft)', 'quantity' => '4', 'cost' => 120],
    ];
    
    $grand_subtotal = 0;
    
    $day = "Saturday";
    $discount_rate = 0;
    $discount_label = '';
    
    switch ($day) {
        case 'Friday':
            $discount_rate = 15;
            $discount_label = 'Weekend Special';
            break;
        default:
            $discount_rate = 5;
            $discount_label = 'Regular Discount';
    }
?>

    <h2>ORDER RECEIPT</h2>
    <p><strong>Order ID:</strong> <?= $order_id ?></p>
    <p><strong>Customer Name:</strong> <?= $customer_name ?></p>
    <p><strong>Date:</strong> <?= $purchase_date ?> at <?= $purchase_time ?></p>
    
    <table>
        <tr>
            <th>Item Description</th>
            <th>Qty</th>
            <th>Unit Price</th>
            <th>Amount</th>
        </tr>
        <?php foreach ($orders as $order): ?>
            <?php
                $subtotal = $order['cost'] * $order['quantity'];
                $grand_subtotal += $subtotal;
            ?>
            <tr>
                <td><?= $order['item'] ?></td>
                <td><?= $order['quantity'] ?></td>
                <td>P<?= number_format($order['cost'], 2) ?></td>
                <td>P<?= number_format($subtotal, 2) ?></td>
            </tr>
        <?php endforeach; ?>
        <?php
            $tax = $grand_subtotal / 100 * 12;
            $discount = ($grand_subtotal + $tax) * ($discount_rate / 100);
            $final_total = $grand_subtotal + $tax - $discount;
        ?>
        <tr>
            <td></td>
            <td></td>
            <td><strong>Subtotal:</strong></td>
            <td><strong>P<?= number_format($grand_subtotal, 2) ?></strong></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><strong>Tax (12%):</strong></td>
            <td><strong>P<?= number_format($tax, 2) ?></strong></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><strong><?= $discount_label ?> (<?= $discount_rate ?>%):</strong></td>
            <td><strong>-P<?= number_format($discount, 2) ?></strong></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><strong>TOTAL AMOUNT DUE:</strong></td>
            <td><strong>P<?= number_format($final_total, 2) ?></strong></td>
        </tr>
    </table>
    
    <p><strong>Payment Method:</strong> Credit Card (****1234)</p>
    <p><strong>Status:</strong> PAID</p>
    <br>
    <p>Thank you for shopping with us, <?= $customer_name ?>!</p>
    <p>Your order will be processed and shipped within 2-3 business days.</p>
    <p>For questions or concerns, please contact our customer service.</p>
    <p><a href="Home.php" class="button">Back to Home</a></p>
    <br><br>
    
<?php include 'footer.php'; ?>