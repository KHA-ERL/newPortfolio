<?php
session_start();

if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $userIp = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $userIp = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $userIp = $_SERVER['REMOTE_ADDR'];
}

if (!isset($_SESSION['uniqueId'])) {
    // Generate a unique identifier based on the user's IP and store it in the session
    $uniqueId = hash('sha256', $userIp); // Use only IP for consistency
    $_SESSION['uniqueId'] = $uniqueId;
} else {
    // Reuse the existing unique identifier from the session
    $uniqueId = $_SESSION['uniqueId'];
}
?>