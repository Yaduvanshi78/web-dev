<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
        /* Import Google Font */
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

.container {
    max-width: 800px;
    margin: auto;
    padding: 20px;
    text-align: center;
}

/* Contact Section */
.contact-section {
    padding: 50px 20px;
}

h2 {
    font-size: 2rem;
    margin-bottom: 10px;
}

p {
    font-size: 1.1rem;
    color: #555;
    margin-bottom: 20px;
}

/* Contact Info */
.contact-info {
    display: flex;
    justify-content: center;
    gap: 20px;
    margin-bottom: 30px;
}

.contact-item {
    background: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    text-align: center;
    width: 200px;
    transition: 0.3s;
    
}

.contact-item i {
    font-size: 2rem;
    color: #4A90E2;
    margin-bottom: 10px;
}

.contact-item h3 {
    font-size: 1.2rem;
    margin-bottom: 5px;
}
.contact-item p{
    text-align:center;
    word-wrap: break-word; 
    overflow-wrap: break-word;
}
.contact-item:hover {
    transform: translateY(-5px);
    background: #4A90E2;
    color: white;
}

.contact-item:hover i {
    color: white;
}

/* Contact Form */
.contact-form {
    background: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    text-align: center;
}

.contact-form h3 {
    font-size: 1.5rem;
    margin-bottom: 15px;
}

.contact-form input,
.contact-form textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 1rem;
}

.contact-form button {
    background: #4A90E2;
    color: white;
    font-size: 1rem;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}

.contact-form button:hover {
    background: #357ABD;
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
    <section class="contact-section">
        <div class="container">
            <h2>Contact Us</h2>
            <p>We’d love to hear from you! Reach out to us using any of the methods below.</p>

            <div class="contact-info">
                <div class="contact-item">
                    <i class="fas fa-phone"></i>
                    <h3>Phone</h3>
                    <p>+91 6204355625</p>
                </div>

                <div class="contact-item">
                    <i class="fas fa-envelope"></i>
                    <h3>Email</h3>
                    <p>Rahulkr682002@gmail.com</p>
                </div>

                <div class="contact-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <h3>Address</h3>
                    <p>Dujra devi aasthan , patna</p>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="contact-form">
                <h3>Send Us a Message</h3>
                <form action="https://api.web3forms.com/submit" method="POST">
                    <input type="hidden" name="access_key" value="d15932fb-bfa8-41c2-b60d-f1b6bb8b4096">
                    <input type="text" name="name" placeholder="Your Name" required>
                    <input type="email" name="email" placeholder="Your Email" required>
                    <textarea name="message" placeholder="Your Message" rows="5" required></textarea>
                    <button type="submit">Send Message</button>
                </form>
            </div>
        </div>
    </section>

</body>
</html>
