<?php 
declare(strict_types=1);
include 'header.php'; 

$christmas_products = [
    'Christmas Tree' => ['price' => 2000.00, 'stock' => 5],
    'Lights' => ['price' => 200.00, 'stock' => 0],
    'Wreaths' => ['price' => 20.00, 'stock' => 50],
    'Garlands' => ['price' => 50.00, 'stock' => 8],
    'Candies' => ['price' => 10.00, 'stock' => 1000],
    'Ornaments' => ['price' => 35.00, 'stock' => 15],
    'Stockings' => ['price' => 15.00, 'stock' => 25],
    'Nativity Set' => ['price' => 1200.00, 'stock' => 3],
    'Tree Skirt' => ['price' => 380.00, 'stock' => 12],
    'Angel Topper' => ['price' => 550.00, 'stock' => 7],
    'Gift Boxes' => ['price' => 95.00, 'stock' => 200],
    'Snow Spray' => ['price' => 120.00, 'stock' => 45],
    'Bells Set' => ['price' => 220.00, 'stock' => 30],
];

$tax_rate = 12;

function get_reorder_message(int $stock): string {
    return ($stock < 10) ? 'Yes' : 'No';
}

function get_total_value(float $price, int $quantity): float {
    return $price * $quantity;
}

function get_tax_due(float $price, int $quantity, int $tax_rate = 0): float {
    return ($price * $quantity) * ($tax_rate / 100);
}
?>
    
    <h2>AVAILABILITY DETAILS</h2>
    <p>Check availability and stock information for all Christmas decoration items</p>

    <table>
        <tr>
            <th>Product Name</th>
            <th>Stock Level</th>
            <th>Reorder?</th>
            <th>Total Value (₱)</th>
            <th>Tax Due (₱)</th>
        </tr>
        <?php 
        foreach ($christmas_products as $product_name => $data): 
        ?>
            <tr>
                <td><?= $product_name ?></td>
                <td><?= $data['stock'] ?></td>
                <td><?= get_reorder_message($data['stock']) ?></td>
                <td>₱<?= number_format(get_total_value($data['price'], $data['stock']), 2) ?></td>
                <td>₱<?= number_format(get_tax_due($data['price'], $data['stock'], $tax_rate), 2) ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    
    <p>You may now proceed to checkout before the promo ends!</p>
    <p><a href="OrderSummary.php" class="button">Proceed to Checkout</a></p>
    <br><br>

<?php include 'footer.php'; ?>