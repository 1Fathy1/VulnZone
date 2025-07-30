<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
include 'navbar.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>VulnZone - Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="login-container">
    <h1 class="app-title">👋 Welcome to VulnZone</h1>
    <div class="form-box">
        <h2>Hello, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
        <p>This is your vulnerable playground. Use the navbar above to explore.</p>
    </div>
</div>
</body>
</html>
