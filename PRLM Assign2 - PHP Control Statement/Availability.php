<?php include 'header.php'; ?>
<?php
    $items = [
        ['name' => 'Candies', 'stock' => 1000, 'wanted' => 20, 'deliver' => true],
        ['name' => 'Christmas Tree', 'stock' => 5, 'wanted' => 2, 'deliver' => true],
        ['name' => 'Lights', 'stock' => 0, 'wanted' => 10, 'deliver' => false],
        ['name' => 'Wreaths', 'stock' => 50, 'wanted' => 5, 'deliver' => true],
        ['name' => 'Garlands', 'stock' => 8, 'wanted' => 3, 'deliver' => true],
    ];
?>
    
    <h2>ORDER DETAILS</h2>
    <p>Check availability and order status for all Christmas decoration items</p>

    
    <table>
        <tr>
            <th>Item</th>
            <th>Stock</th>
            <th>Stock Status</th>
            <th>Ordered</th>
            <th>Delivery</th>
            <th>Can Buy</th>
        </tr>
        <?php foreach ($items as $item): ?>
            <?php
                $can_buy = (($item['wanted'] <= $item['stock']) && ($item['deliver'] == true));
                
                if ($item['stock'] >= 100) {
                    $stock_message = 'Excellent availability';
                } elseif ($item['stock'] >= 10) {
                    $stock_message = 'Good availability';
                } elseif ($item['stock'] >= 1) {
                    $stock_message = 'Low stock';
                } else {
                    $stock_message = 'Out of stock';
                }
                
                $delivery_status = $item['deliver'] ? 'Available' : 'Not Available';
            ?>
            <tr>
                <td><?= $item['name'] ?></td>
                <td><?= $item['stock'] ?></td>
                <td><?= $stock_message ?></td>
                <td><?= $item['wanted'] ?></td>
                <td><?= $delivery_status ?></td>
                <td><?= $can_buy ? 'TRUE' : 'FALSE' ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    
    <p>You may now proceed to checkout before the promo ends!</p>
    <p><a href="OrderSummary.php" class="button">Proceed to Checkout</a></p>
    <br><br>

<?php include 'footer.php'; ?>