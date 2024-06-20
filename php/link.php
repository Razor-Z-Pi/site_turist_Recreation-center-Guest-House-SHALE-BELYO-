<?php
function connect() {
    try {
        $user = "root";
        $password = "";
        return $db = new PDO('mysql:host=localhost;dbname=shale-bale', $user, $password);
    } catch (PDOException $e) {
       echo "Произошла ошибка подключение бд!!!";
    } 
}
?>