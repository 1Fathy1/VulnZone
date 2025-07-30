<?php
session_start();
include 'navbar.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>VulnZone - File Upload</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="login-container">
    <h1 class="app-title">📤 File Upload</h1>
    <div class="form-box">
        <form method="POST" enctype="multipart/form-data">
            <input type="file" name="file" class="btn"><br><br>
            <input type="submit" name="upload" value="Upload" class="btn">
        </form>
        <?php
        if (isset($_POST['upload'])) {
            $target = "uploads/" . basename($_FILES['file']['name']);
            if (move_uploaded_file($_FILES['file']['tmp_name'], $target)) {
                echo "<p class='success'>✅ File uploaded: <a href='$target' style='color:lime;'>$target</a></p>";
            } else {
                echo "<p class='error'>❌ Upload failed</p>";
            }
        }
        ?>
    </div>
</div>
</body>
</html>
