<?php
session_start();
include("db.php");

// Check if user is logged in
$username = isset($_SESSION['user']) ? $_SESSION['user'] : "Guest";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Bookify </title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

</head>
<body>
<header>
        <nav>
            <ul>
                <li class="logo"><a href="index.php" class="logo"><img src="logo.png" alt="Bookify"></a></li>
                
                <li><a href="catalogue.php">Catalogue</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                
                 <?php if (isset($_SESSION['user'])): ?>
                    <li><a href="logout.php">Logout</a></li>
                <?php else: ?>
                    <li><a href="login.php">Login</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </header>

    <section id="hero"  >
        <div class="bg-image"></div>
    <div class="main-heading">
    <h1 class="user_name">Welcome, <?php echo htmlspecialchars($username); ?>!</h1>
        <h2>It's my eBook Library</h2>
        <p>Explore a vast collection of eBooks and start reading today!</p>
        <button class="btn"><a href="catalogue.php" >Browse Books</a></button>
    </div>
    </section>

    <section id="categories">
        <h2>Explore Our Categories</h2>
        <div class="category-container">
            <div class="category">
                <a href="https://www.inkitt.com/genres/adventure" target="blank"><img src="adventure.jpg" alt="Adventure">
                <h3>Adventure</h3></a>
            </div>
            <div class="category">
                <a href="https://www.inkitt.com/genres/horror" target="blank">
                    <img src="horror.jpg" alt="Horror">
                    <h3>Horror</h3>
                </a>
            </div>
            <div class="category">
                <a href="https://www.matrubharti.com/book/read/content/19889650/radha-krishna-1" target="blank">
                    <img src="love.jpg" alt="Love">
                    <h3>Love</h3>
                </a>
            </div>
            <div class="category">
            <a href="https://www.free-ebooks.net/games" target="blank">
                <img src="gaming.jpg" alt="Gaming">
                <h3>Gaming</h3>
            </a>
            </div>
            <div class="category">
            <a href="https://www.goodreads.com/shelf/show/free-online-fiction" target="blank">
                <img src="fiction.jpg" alt="fiction">
                <h3>Fiction</h3>
            </a>
            </div>
            <div class="category">
            <a href="https://www.inkitt.com/genres/mystery" target="blank">
                <img src="Mystery.jpg" alt="Mystery">
                <h3>Mystery</h3>
            </a>
            </div>
            <div class="category">
            <a href="https://www.inkitt.com/genres/fantasy" target="blank">
                <img src="Fantasy.jpg" alt="Fantasy">
                <h3>Fantasy</h3>
            </a>
            </div>
            <div class="category">
            <a href="https://manybooks.net/categories/PSY" target="blank">
                <img src="Science.jpg" alt="Science">
                <h3>Science</h3>
            </a>
            </div>
        </div>
    </section>
    
    <footer>
        <p>&copy; 2025 eBook Library</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>
