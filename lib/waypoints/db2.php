<?php
include 'db.php';

$stmt = $conn->prepare("INSERT INTO users (name, email) VALUES (:name, :email)");
$stmt->bindParam(':name', $name);
$stmt->bindParam(':email', $email);

$name = "sana";
$email = "sana@example.com";

$stmt->execute();