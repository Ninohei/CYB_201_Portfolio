<?php 
// Name: Harvey Jireh C. Sinamban
// Section: CYB-201 
    
    $servicesOffered = [
        "Basic Clean" => 400,
        "Deep Clean" => 750,
        "Virus Removal" => 600,
    ];
    include 'header.php';
?>

<html>
<body>
<div class="container">
    <h2>Services Offered:</h2>

    <table>
        <?php foreach ($servicesOffered as $serviceName => $price) { ?>
            <tr>
                <td><?= $serviceName ?></td>
                <td> ------------------------- ₱<?= $price ?></td>
            </tr>
        <?php } ?>
    </table>

    <h3>Prices might vary depending on unit's condition.</h3>
</div>

<?php include 'footer.php'; ?>
</body>
</html>
