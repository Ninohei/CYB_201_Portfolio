<?php
// Name: Harvey Jireh C. Sinamban
// Section: CYB-201

    $pageTitle = "Ternary Operator Example";
    include 'header.php';

    $isWeekend = true;
    $price = $isWeekend ? 800 : 600;

    $age = 65;
    $discount = ($age >= 60) ? "20% Senior Discount" : "Regular Price";

    $deviceType = "laptop";
    $serviceFee = ($deviceType == "laptop") ? 500 : 700;
?>

<html>
<body>
<div class="container">
    <h2>Service Pricing</h2>
    
    <h3>Weekend Service</h3>
    <p>Service Price: ₱<?php echo $price; ?></p>
    
    <h3>Discount Status</h3>
    <p><?php echo $discount; ?></p>
    
    <h3>Device Cleaning</h3>
    <p><?php echo $deviceType; ?> service: ₱<?php echo $serviceFee; ?></p>
</div>
    <?php include 'footer.php'; ?>
</body>
</html>

