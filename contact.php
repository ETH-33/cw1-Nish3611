<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comfort Store</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body>
    <div class="whole">
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <img src="images/logoo.png" width="90px">
                <img src="images/comfort.png" alt="Another image" width="90px">
            </div>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <!-- <li><a href="product.php">Products</a></li> -->
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="register.php">Register</a></li>
                </ul>
    
            </nav>
        </div>
        <div class="main">
            <div class="contactform">
                <form action="submit_form.php" method="POST">
                    <div class="part1"></div>
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required />
        
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required />
        
                    <label for="phone">Phone:</label>
                    <input type="tel" id="phone" name="phone" required />
        
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" required></textarea>
        
                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
        
</body>
</html>