<?php
// Name: Harvey Jireh C. Sinamban
// Section: CYB-201

    $counter = 1;
    $purchase = 10;
    $discount = 20;

    include 'header.php';
?>

<html>
<body>
<div class="container">
    <h2>Loyalty Discount</h2>

    <?php
    while ($counter <= $purchase) {
        echo $counter;
        echo ' existing purchase will give a discount of ₱';
        echo $discount * $counter;
        echo '<br>';
        $counter++;
    }
    ?>

    <br><h3>Thank you for your support!</h3>
    
</div>
    <?php include 'footer.php'; ?>
</body>
</html>