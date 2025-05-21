<?php
require_once 'util.php';

$city = '';
if (isset($_POST['city'])) {
    $city = capitalizeName($_POST['city']);
    echo "You are from $city!";
}
?>

<form method="POST">
    City: <input type="text" name="city">
    <button type="submit">Submit</button>
</form>
