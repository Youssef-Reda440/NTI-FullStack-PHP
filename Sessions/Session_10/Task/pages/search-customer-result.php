<?php

require_once __DIR__ . '/../dbc.php';

if (isset($_POST['submit'])) {

    $name = $_POST['name'];

    $query = "SELECT * FROM customers WHERE name LIKE '%$name%'";
    $result = mysqli_query($connection, $query);

    if (mysqli_num_rows($result) == 0) {
        header('Location:../index.html');
        exit();
    } else {
        $customers = mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
} else {
    exit();
}

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
