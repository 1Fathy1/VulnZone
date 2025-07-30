<?php
session_start();
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>VulnZone - Login</title>
    <link rel="stylesheet" href="style.css">
   
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>

<div class="login-container">
    <h1 class="app-title"><i class="fas fa-shield-alt"></i> VulnZone</h1>

    <div class="form-box">
        <h2><i class="fas fa-lock"></i> Login</h2>
        <form method="POST">
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="username" placeholder="Username" required>
            </div>
            <div class="input-group">
                <i class="fas fa-key"></i>
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <input type="submit" value="Login" class="btn">
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $user = $_POST['username'];
            $pass = $_POST['password'];

            $query = "SELECT * FROM users WHERE username = '$user' AND password = '$pass'";
            $result = mysqli_query($conn, $query);  

            if (mysqli_num_rows($result)) {
                while($row = mysqli_fetch_array($result)){
                    $user = $row['username'] ; 
                }
                $_SESSION['username'] = $user; // Set session variable
                echo "<p class='success'>✅ Welcome <strong>$user</strong> to VulnZone!</p>";
                // Optionally redirect to dashboard:
                header("Location: dashboard.php");
        
            } else {
                echo "<p class='error'>❌ Invalid username or password</p>";
            }
        }
        ?>
    </div>
</div>

</html>