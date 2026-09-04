<?php

include __DIR__ . '/../inc/header.php';

?>

<form action="customer-details-result.php" method="get" class="w-75 m-auto mt-4">
    <label for="cus_id" class="form-label">ID</label>
    <br>
    <input type="number" name="id" class="form-control" id="cus_id" required>
    <br>
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>

<?php

include __DIR__ . '/../inc/footer.php';
