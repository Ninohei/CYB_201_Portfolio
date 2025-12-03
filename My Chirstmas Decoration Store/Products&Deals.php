<?php include 'header.php'; ?>
<?php
    $name = "Harvey";
    $price = 20;
    $discount = 25;
    $offers = [
        'Christmas Tree' => 2000,
        'Lights' => 200,
        'Wreaths' => 20,
        'Garlands' => 50,
        'Candies' => 10,
        'Ornaments' => 35,
        'Stockings' => 15,
    ];
    
    $discounted_offers = [];
    foreach ($offers as $item => $original_price) {
        $discounted_offers[$item] = $original_price - ($original_price * $discount / 100);
    }
?>
    
    <h2>Welcome <?= $name ?>!</h2>
    <p>You can buy Christmas Decorations for as low as P<?= $price ?>! What are you waiting for? Grab yours now.</p>
    <p>----------------------------------------------------------------------------------</p>
    <p><strong>Current Offers with <?= $discount ?>% Discount:</strong></p>
    <table>
        <tr>
            <th>Item</th>
            <th>Original Price</th>
            <th>Discounted Price</th>
            <th>You Save</th>
        </tr>
        <?php foreach ($offers as $item => $original_price): ?>
            <?php 
                $discounted_price = $discounted_offers[$item];
                $savings = $original_price - $discounted_price;
            ?>
            <tr>
                <td><?= $item ?></td>
                <td>P<?= number_format($original_price, 2) ?></td>
                <td>P<?= number_format($discounted_price, 2) ?></td>
                <td>P<?= number_format($savings, 2) ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <p>----------------------------------------------------------------------------------</p>
    <p>There is a <?= $discount ?>% discount on all items until November 15!</p>
    <p><a href="Availability.php" class="button">Check All Items</a></p>
    <br><br>

<?php include 'footer.php'; ?>