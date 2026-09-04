<?php

include __DIR__ . '/../inc/header.php';

?>

<form action="search-customer-result.php" method="post" class="w-75 m-auto mt-4">
    <label for="cus_name" class="form-label">Name</label>
    <br>
    <input type="text" name="name" class="form-control" id="cus_name" required>
    <br>
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>

<?php

include __DIR__ . '/../inc/footer.php';
