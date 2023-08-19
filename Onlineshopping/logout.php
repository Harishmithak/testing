<?php
include("connect.php");
session_start();

if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];

    $logout_time = date('Y-m-d H:i:s');
    $sql = "UPDATE UserLog SET logout_time = '$logout_time' WHERE id = ?";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $userId);
    $stmt->execute();

    $stmt->close();
}

session_destroy();
?>

