<?php
session_start();
include 'db.php'; // Database connection

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];

// Fetch user-specific favorite books
$query = "SELECT * FROM favorites WHERE user_id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Collection - Bookify</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="catalogue.php">Catalogue</a></li>
            <li><a href="collection.php">My Collection</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>
</header>

<section id="collection">
    <h2>My Favorite Books</h2>
    <div id="favorites-list" class="book-container">
        <?php
        if ($result->num_rows > 0) {
            while ($book = $result->fetch_assoc()) {
                echo "
                    <div class='book'>
                        <img src='{$book['book_image']}' alt='{$book['book_title']}'>
                        <div class='book-title'>{$book['book_title']}</div>
                        <div class='book-author'>{$book['book_author']}</div>
                        <a href='{$book['book_link']}' target='_blank'>Read Now</a>
                        <button class='remove-btn' data-id='{$book['id']}'>Remove</button>
                    </div>
                ";
            }
        } else {
            echo "<p>No favorite books added yet.</p>";
        }
        ?>
    </div>
</section>

<script src="script.js"></script>
</body>
</html>
