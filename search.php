<?php
session_start();
include 'navbar.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>VulnZone - XSS Search</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="login-container">
    <h1 class="app-title">🔍 XSS Search</h1>
    <div class="form-box">
        <form method="GET">
            <input type="text" name="query" placeholder="Search..." class="btn" style="background:#222;">
            <input type="submit" value="Go" class="btn">
        </form>
        <?php
        if (isset($_GET['query'])) {
            $search = $_GET['query'];
            echo "<p>Results for: <strong>$search</strong></p>"; // ثغرة XSS هنا
        }
        ?>
    </div>
</div>
</body>
</html>
