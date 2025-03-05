<?php
include("db.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Check if passwords match
    if ($password !== $confirm_password) {
        echo "<p>Passwords do not match. Please try again.</p>";
    } else {
        // Hash password
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);

        // Prevent SQL injection
        $username = mysqli_real_escape_string($conn, $username);
        $email = mysqli_real_escape_string($conn, $email);

        // Check if email already exists
        $query = "SELECT * FROM users WHERE email = '$email'";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {
            echo "<p>Email already registered. <a href='login.php'>Login here</a></p>";
        } else {
            // Insert new user with username
            $insert_query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hashed_password')";
            if (mysqli_query($conn, $insert_query)) {
                echo "<p>Registration successful! <a href='login.php'>Login here</a></p>";
                header("Location: login.php");
                exit();
            } else {
                echo "<p>Error: " . mysqli_error($conn) . "</p>";
            }
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - eBook Library</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav>
            <ul>
            <li class="logo"><a href="index.php" class="logo"><img src="logo.png" alt="Bookify"></a></li>
            <li><a href="login.php">Login</a></li>
            </ul>
        </nav>
    </header>

    <section id="register">
    <h2>Create Your Account</h2>
    <form action="register.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required placeholder="Enter your username" />

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required placeholder="Enter your email" />

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required placeholder="Enter your password" />

        <label for="confirm_password">Confirm Password:</label>
        <input type="password" name="confirm_password" id="confirm_password" required placeholder="Confirm your password" />

        <button type="submit">Register</button>
    </form>
</section>

    </section>

    <footer>
        <p>&copy; 2025 eBook Library. All Rights Reserved.</p>
    </footer>
</body>
</html>
