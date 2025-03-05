<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Bookify</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* Google Font */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    background-color: #928dab;
    color: #333;
}

.about-section {
    background: linear-gradient(to right, #928dab, #928dab);
    color: #fff;
    padding: 60px 20px;
    text-align: center;
}

.container {
    max-width: 800px;
    margin: auto;
}

h2 {
    font-size: 2.5rem;
    font-weight: 600;
}

h2 span {
    color: #FFD700;
}

p {
    font-size: 1.1rem;
    margin: 15px 0;
    line-height: 1.6;
}

.features h3 {
    font-size: 1.8rem;
    margin-top: 30px;
}

.features h3 span {
    color: #FFD700;
}

.about-section ul   {
    list-style: none;
    margin-top: 10px;
}

.about-section ul li {
    font-size: 1rem;
    background: rgba(255, 255, 255, 0.2);
    padding: 10px;
    border-radius: 5px;
    margin: 5px 0;
    transition: 0.3s;
}

.about-section ul li:hover  {
    background: rgba(255, 255, 255, 0.4);
}

.cta-button {
    display: inline-block;
    margin-top: 20px;
    background: #FFD700;
    color: #333;
    padding: 12px 25px;
    font-size: 1.2rem;
    font-weight: 600;
    text-decoration: none;
    border-radius: 25px;
    transition: 0.3s;
}

.cta-button:hover {
    background: #FFC107;
}

    </style>
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
    <section class="about-section">
        <div class="container">
            <h2>About <span>Bookify</span></h2>
            <p>Welcome to <strong>Bookify</strong>, your ultimate destination for discovering, reading, and enjoying eBooks across all genres! Whether you're a passionate reader, a casual book lover, or someone looking for knowledge on the go, Bookify brings you a seamless digital reading experience.</p>

            <p>At Bookify, we believe in the power of stories and knowledge to inspire, educate, and entertain. Our extensive collection of eBooks spans fiction, non-fiction, self-help, academic resources, and more. With an easy-to-use platform, you can explore new releases, bestsellers, and hidden gems—all at your fingertips.</p>

            <div class="features">
                <h3>Why Choose <span>Bookify?</span></h3>
                <ul>
                    <li>📚 <strong>Vast eBook Library</strong> – Explore thousands of titles from various genres.</li>
                    <li>📖 <strong>User-Friendly Interface</strong> – Enjoy a seamless reading experience with our intuitive design.</li>
                    <li>🔖 <strong>Bookmark & Personalize</strong> – Save your favorite books and pick up where you left off.</li>
                    <li>📱 <strong>Anytime, Anywhere Access</strong> – Read on any device, anytime you want.</li>
                </ul>
            </div>

            <a href="#" class="cta-button">Start Reading Now</a>
        </div>
    </section>
    <footer>
        <p>&copy; 2025 eBook Library</p>
    </footer>

    <script src="script.js"></script>

</body>
</html>
