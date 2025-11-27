<?php
// Name: Harvey Jireh C. Sinamban
// Section: CYB-201

    $pageTitle = "If-ElseIf Statement Example";
    include 'header.php';

    $budget = 1000;
?>

<html>
<body>
<div class="container">
    <h2>Service Packages</h2>
    
    <h3>Your Budget: ₱<?php echo $budget; ?></h3>
    
    <?php
    if ($budget >= 1500) {
        echo "<p><strong>Recommended: Premium Package (₱1,500)</strong></p>";
        echo "<p>Includes: Deep cleaning + virus removal + warranty</p>";
    } elseif ($budget >= 1000) {
        echo "<p><strong>Recommended: Standard Package (₱1,000)</strong></p>";
        echo "<p>Includes: Basic cleaning + malware scan</p>";
    } elseif ($budget >= 500) {
        echo "<p><strong>Recommended: Basic Package (₱500)</strong></p>";
        echo "<p>Includes: External cleaning only</p>";
    } else {
        echo "<p><strong>Recommended: Consultation (₱250)</strong></p>";
        echo "<p>We can assess your needs</p>";
    }
    ?>
</div>
    <?php include 'footer.php'; ?>
</body>
</html>