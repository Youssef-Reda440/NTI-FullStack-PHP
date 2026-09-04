<?php

require_once __DIR__ . '/../dbc.php';

$query = "SELECT 
            customers.name,
            COUNT(orders.id) AS orders_count
        FROM customers
        LEFT JOIN orders
            ON customers.id = orders.customer_id
        GROUP BY customers.id, customers.name
        ORDER BY orders_count DESC";

$result = mysqli_query($connection, $query);
$orders = mysqli_fetch_all($result, MYSQLI_ASSOC);

include __DIR__ . '/../inc/header.php';
?>

<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>orders_count</th>
        </tr>
    </thead>

    <tbody>
        <?php
        $i = 1;
        foreach ($orders as $order) {
        ?>
            <tr>
                <td><?= $i++ ?></td>
                <td><?= $order['name'] ?></td>
                <td><?= $order['orders_count'] ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<?php

include __DIR__ . '/../inc/footer.php';
