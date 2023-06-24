<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $newsletter = isset($_POST["newsletter"]) ? "Так" : "Ні";
    $gender = $_POST["gender"];
    $color = $_POST["color"];

    echo "Ім'я користувача: " . htmlspecialchars($username) . "<br>";
    echo "Пароль: " . htmlspecialchars($password) . "<br>";
    echo "Підписатися на розсилку: " . $newsletter . "<br>";
    echo "Стать користувача: " . $gender . "<br>";
    echo "Улюблений колір: " . $color;
}
?>
