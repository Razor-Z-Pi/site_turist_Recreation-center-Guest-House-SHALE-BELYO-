<?php
require_once "link.php";

$data = connect();

if (!empty($_POST)) {
    $user = $_POST["user"];
    $email = $_POST["email"];
    $title = $_POST["title"];
    $text = $_POST["text"];

    $query = "INSERT INTO user(name, email, title, text) VALUES('$user', '$email', '$title', '$text')";
    $data -> exec($query) or die("Ошибка записи!!!");

    header("Location: ../index.php");
}

?>