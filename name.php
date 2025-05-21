<?php
require_once 'util.php';

$name = '';
if (isset($_POST['name'])) {
    $name = capitalizeName($_POST['name']);
    echo "Hello, $name!";
}
?>

<form method="POST">
    Name: <input type="text" name="name">
    <button type="submit">Submit</button>
</form>
