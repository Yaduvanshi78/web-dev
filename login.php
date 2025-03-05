<?php
session_start();
include("db.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prevent SQL injection
    $email = mysqli_real_escape_string($conn, $email);
    $password = mysqli_real_escape_string($conn, $password);

    $query = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        if (password_verify($password, $user['password'])) {
            // Store user session
            $_SESSION['user'] = $user['username'];
            header("Location: index.php"); // Redirect to home after login
            exit();
        } else {
            echo "<script>alert('Incorrect password. Please try again.'); window.location.href='login.php';</script>";
        }
    } else {
        echo "<script>alert('Incorrect email. Please try again.'); window.location.href='login.php';</script>";
    }
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - eBook Library</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
        <nav>
            <ul>
            <li class="logo"><a href="index.php" class="logo"><img src="logo.png" alt="Bookify"></a></li>
            <li><a href="catalogue.php">Catalogue</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="loginphp">Login</a></li>
            </ul>
        </nav>
    </header>

    <section id="login">
    <h2>Login to Your Account</h2>
    <form id="loginForm" action="login.php" method="POST">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required placeholder="Enter your email" />
        <p id="emailError" class="error-message"></p> <!-- Email Error Message -->

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required placeholder="Enter your password" />
        <p id="passwordError" class="error-message"></p> <!-- Password Error Message -->

        <button type="submit">Login</button>
    </form>

    <p>Don't have an account? <a href="register.php">Register here</a></p>
</section>


<br><br><br><br><br><br><br><br><br>
    <footer>
        <p>&copy; 2025 eBook Library. All Rights Reserved.</p>
    </footer>
</body>
</html>

