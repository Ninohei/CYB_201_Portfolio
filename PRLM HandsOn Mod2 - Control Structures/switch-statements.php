<?php
// Name: Harvey Jireh C. Sinamban
// Section: CYB-201

    $pageTitle = "Switch Statement Example";
    include 'header.php';

    $serviceType = "deep-clean";
    $day = "Monday";
?>

<html>
<body>
<div class="container">
    <h2>Service Details</h2>
    
    <h3>Selected Service: <?php echo $serviceType; ?></h3>
    
    <?php
    switch ($serviceType) {
        case "basic-clean":
            echo "<p><strong>Price:</strong> ₱400</p>";
            echo "<p><strong>Duration:</strong> 30 minutes</p>";
            break;
        case "deep-clean":
            echo "<p><strong>Price:</strong> ₱750</p>";
            echo "<p><strong>Duration:</strong> 2 hours</p>";
            break;
        case "virus-removal":
            echo "<p><strong>Price:</strong> ₱600</p>";
            echo "<p><strong>Duration:</strong> 1.5 hours</p>";
            break;
    }
    ?>
    
    <h3>Operating Hours - <?php echo $day; ?></h3>
    
    <?php
    switch ($day) {
        case "Monday":
        case "Tuesday":
        case "Wednesday":
        case "Thursday":
        case "Friday":
        case "Saturday":
            echo "<p>10:00 AM - 6:00 PM</p>";
            break;
        case "Sunday":
            echo "<p>Closed</p>";
            break;
    }
    ?>
</div>
    <?php include 'footer.php'; ?>
</body>
</html>