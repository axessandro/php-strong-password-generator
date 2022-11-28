<?php
session_start();
$alphabet_lower = 'abcdefghijklmnopqrstuvwxyz';
$alpabet_upper = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
$symbols = '!#$%&)*+,-./:;=?@[\]^_`{(}';

if ($_SESSION["password-lenght"]) {
    $password = '';
    while (strlen($password) < $_SESSION["password-lenght"]) {

        $password .= $alphabet_lower[rand(0, 25)];

        if (strlen($password) < $_SESSION["password-lenght"]) {
            $password .= rand(0, 9);
        };

        if (strlen($password) < $_SESSION["password-lenght"]) {
            $password .= $symbols[rand(0, 25)];
        };

        if (strlen($password) < $_SESSION["password-lenght"]) {
            $password .= $alpabet_upper[rand(0, 25)];
        };
    }
}
