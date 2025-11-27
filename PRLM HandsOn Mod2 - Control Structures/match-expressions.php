<?php
// Name: Harvey Jireh C. Sinamban
// Section: CYB-201

    $pageTitle = "Match Expression Example";
    include 'header.php';

    $device = "laptop";

    $price = match($device) {
        "laptop" => 600,
        "desktop" => 750,
        "tablet" => 400,
    };

    $urgency = "express";

    $multiplier = match($urgency) {
        "express" => 2.0,
        "same-day" => 1.5,
        "standard" => 1.0,
    };

    $totalPrice = $price * $multiplier;
?>

<html>
<body>
<div class="container">
    <h2>Service Rates with Match</h2>
    
    <h3>Device: <?php echo $device; ?></h3>
    <p><strong>Base Price:</strong> ₱<?php echo $price; ?></p>
    
    <h3>Urgency: <?php echo $urgency; ?></h3>
    <p><strong>Multiplier:</strong> <?php echo $multiplier; ?>x</p>
    <p><strong>Total Price:</strong> ₱<?php echo $totalPrice; ?></p>
    
</div>
    <?php include 'footer.php'; ?>
</body>
</html>