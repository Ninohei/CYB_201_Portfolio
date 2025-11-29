<?php include 'header.php'; ?>
<?php
    $name = "Harvey";
    $store_name = "The Christmas Decoration Store";
    $promo_message = "Holiday Sale - Up to 25% OFF!";
    
    $featured_categories = [
        'Christmas Trees',
        'Lights & Illumination',
        'Wreaths & Garlands',
        'Ornaments & Baubles',
        'Stockings & Accessories',
        'Outdoor Decorations',
    ];
    
    $featured_products = [
        'Premium Pine Christmas Tree' => 2500,
        'LED String Lights (200 bulbs)' => 350,
        'Handcrafted Wreath (24-inch)' => 450,
        'Glass Ornament Set (24pcs)' => 180,
        'Velvet Christmas Stockings' => 120,
        'Candy Cane Gift Pack' => 85,
    ];
?>
    
    <h2>Welcome to <?= $store_name ?>, <?= $name ?>!</h2>
    <p><?= $promo_message ?></p>
    <p>Your one-stop shop for all your Christmas decoration needs. Make this holiday season magical!</p>
    <p>--------------------------------------------------</p>
    <p><strong>Shop by Category:</strong></p>
    <ul>
        <?php foreach ($featured_categories as $category): ?>
            <li><?= $category ?></li>
        <?php endforeach; ?>
    </ul>
    <p>--------------------------------------------------</p>
    <p><strong>Featured Products:</strong></p>
    <table>
        <tr>
            <th>Product</th>
            <th>Price</th>
        </tr>
        <?php foreach ($featured_products as $product => $price): ?>
            <tr>
                <td><?= $product ?></td>
                <td>P<?= number_format($price, 2) ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <p>--------------------------------------------------</p>
    <p><strong>Why Shop With Us?</strong></p>
    <p>✨ Premium quality decorations</p>
    <p>🎁 Free shipping on orders over P1,000</p>
    <p>🎄 Satisfaction guaranteed</p>
    <p>💝 Gift wrapping available</p>
    <p><a href="Products&Deals.php" class="button">Start Shopping</a></p>
    <br><br>

<?php include 'footer.php'; ?>