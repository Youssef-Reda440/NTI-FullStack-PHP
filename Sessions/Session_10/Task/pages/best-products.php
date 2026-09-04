<?php

require_once __DIR__ . '/../dbc.php';

$query = "SELECT 
            products.name,
            SUM(order_items.quantity) AS total_pieces,
            SUM(order_items.quantity * order_items.price) AS total_earned
        FROM products
        JOIN order_items
            ON products.id = order_items.product_id
        GROUP BY products.id, products.name
        ORDER BY total_pieces DESC";

$result = mysqli_query($connection, $query);
$prodcuts = mysqli_fetch_all($result, MYSQLI_ASSOC);

include __DIR__ . '/../inc/header.php';
?>

<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>total_pieces</th>
            <th>total_earned</th>
        </tr>
    </thead>

    <tbody>
        <?php
        $i = 1;
        foreach ($prodcuts as $prodcut) {
        ?>
            <tr>
                <td><?= $i++ ?></td>
                <td><?= $prodcut['name'] ?></td>
                <td><?= $prodcut['total_pieces'] ?></td>
                <td><?= $prodcut['total_earned'] ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<?php

include __DIR__ . '/../inc/footer.php';
