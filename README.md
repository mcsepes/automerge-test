Ветка `main`:

`util.php`:
```php
<?php
function capitalizeName($str) {
    return ucfirst(strtolower($str));
}
```

`name.php`:
```php
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
```

Из `main` создаются 2 ветки: `rename-func` и `add-city`.

В `rename-func` переименовываем `capitalizeName()` в `capitalizeString()` и в `util.php`, и в `name.php`. Пушим, создаём PR, автомерджим без ошибок.

В `add-city` создаём новый файл `city.php`:
```php
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
```
Пушим, создаём PR, автомерджим без ошибок.

Итог: в `main` в файле `city.php` вызов уже не существующей функции `capitalizeName()`. Никакой автомердж этого не заметил, никаких конфликтов слияния не было.
