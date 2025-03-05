<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogue - eBook Library</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li class="logo"><a href="index.php"><img src="logo.png" alt="Bookify"></a></li>
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

    <main>
    <section id="catalogue">
        <h2>Our eBook Collection</h2>
        <div id="book-list" class="book-container"></div>
                    
        <div class="pagination">
            <button id="prevBtn" class="nav-button" disabled>Previous</button>
            <span id="pageNumber">Page 1</span>
            <button id="nextBtn" class="nav-button">Next</button>
        </div>
    </section>
    </main>

    <footer>
        <p>&copy; 2025 eBook Library</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>
