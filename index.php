<?php
session_start();
$password_lenght = $_GET["password-lenght"] ?? "";
if (!empty($password_lenght)) {
    $_SESSION["password-lenght"] = $password_lenght;
}
include __DIR__ . '/functions.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator 2.0</title>
</head>

<body>

    <main>
        <form action="index.php" method="GET">
            <div>
                <label for="passowrd-lenght">Lunghezza password :</label>
                <input type="number" id="password-lenght" name="password-lenght">
                <button type="submit">Genera</button>
            </div>
        </form>
    </main>

</body>

</html>