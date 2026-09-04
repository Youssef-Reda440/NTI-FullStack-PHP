<?php

require_once __DIR__ . '/../dbc.php';

if (isset($_GET['submit'])) {

    $id = (int) $_GET['id'];

    $query = "SELECT * FROM customers WHERE id = $id";
    $result = mysqli_query($connection, $query);

    if (mysqli_num_rows($result) == 0) {
        header('Location:customer-details.php');
        exit();
    } else {
        $customer = mysqli_fetch_assoc($result);
    }
} else {
    exit();
}

include __DIR__ . '/../inc/header.php';
?>

<div class="card text-center">
    <div class="card-header">
        Customer Details
    </div>

    <div class="card-body">
        <h5 class="card-title">Customer name: <?= $customer['name'] ?></h5>
        <h5 class="card-title">Customer city: <?= $customer['city'] ?></h5>
        <h5 class="card-title">Customer salary: <?= $customer['salary'] ?></h5>
    </div>
</div>

<?php

include __DIR__ . '/../inc/footer.php';
