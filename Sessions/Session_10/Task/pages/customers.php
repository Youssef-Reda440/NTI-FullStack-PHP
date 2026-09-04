<?php

require_once __DIR__ . '/../dbc.php';

$query = "SELECT * FROM customers WHERE salary > 20000";

$result = mysqli_query($connection, $query);
$customers = mysqli_fetch_all($result, MYSQLI_ASSOC);

include __DIR__ . '/../inc/header.php';
?>

<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>City</th>
            <th>Salary</th>
        </tr>
    </thead>

    <tbody>
        <?php
        $i = 1;
        foreach ($customers as $customer) {
        ?>
            <tr>
                <td><?= $i++ ?></td>
                <td><?= $customer['name'] ?></td>
                <td><?= $customer['city'] ?></td>
                <td><?= $customer['salary'] ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<?php

include __DIR__ . '/../inc/footer.php';
