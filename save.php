<?php
session_start();
include 'db_connect.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $phone = $_POST["phone"];
    $name = $_POST["name"];
    $sql = "INSERT INTO tickets (name, phone) VALUES ('$name', '$phone')";
    if ($conn->query($sql) === TRUE) {
        header ("Location: ../templates/main-page.php");
    } else {
        echo "Error: " . $conn->error;
    }
}
?>