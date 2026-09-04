<?php

require_once __DIR__ . '/../dbc.php';

$query = "SELECT 
            employee.name AS employee_name,
            manager.name AS manager_name
        FROM employees AS employee
        LEFT JOIN employees AS manager
            ON employee.manager_id = manager.id";

$result = mysqli_query($connection, $query);
$employees = mysqli_fetch_all($result, MYSQLI_ASSOC);

include __DIR__ . '/../inc/header.php';
?>

<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Employee_Name</th>
            <th>Manager_Name</th>
        </tr>
    </thead>

    <tbody>
        <?php
        $i = 1;
        foreach ($employees as $employee) {
        ?>
            <tr>
                <td><?= $i++ ?></td>
                <td><?= $employee['employee_name'] ?></td>
                <td><?= $employee['manager_name'] ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<?php

include __DIR__ . '/../inc/footer.php';
