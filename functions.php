<?php
include __DIR__ . '/index.php';
session_start();
function getRandomPassword($password_lenght)
{
    $alphabet_lower = 'abcdefghijklmnopqrstuvwxyz';
    $alpabet_upper = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $symbols = '!#$%&)*+,-./:;=?@[\]^_`{(}';
    if (!empty($password_lenght)) {
        $password = '';
        while (strlen($password) < $password_lenght) {

            $password .= $alphabet_lower[rand(0, 25)];

            if (strlen($password) < $password_lenght) {
                $password .= rand(0, 9);
            };

            if (strlen($password) < $password_lenght) {
                $password .= $symbols[rand(0, 25)];
            };

            if (strlen($password) < $password_lenght) {
                $password .= $alpabet_upper[rand(0, 25)];
            };
        }
        echo $password;
        $_SESSION["password"] = $password;
    }
}
