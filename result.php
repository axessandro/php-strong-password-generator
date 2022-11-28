<?php
include __DIR__ . '/functions.php';
session_start();

$password_lenght = $_GET["password-lenght"] ?? "";

getRandomPassword($password_lenght);

echo $_SESSION["password"];
