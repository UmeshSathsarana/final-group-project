<?php
// Include database connection
include 'db.php';

// Initialize variables for form data
$name = $email = $subject = $message = "";
$successMsg = $errorMsg = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate form inputs
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $subject = $conn->real_escape_string($_POST['subject']);
    $message = $conn->real_escape_string($_POST['message']);

    if (!empty($name) && !empty($email) && !empty($subject) && !empty($message)) {
        // Insert data into the database
        $sql = "INSERT INTO contacts (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";

        if ($conn->query($sql) === TRUE) {
            // Redirect to the success page
            header("Location: contact-success.html");
            exit();
        } else {
            $errorMsg = "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        $errorMsg = "All fields are required.";
    }

    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Adventure Tourism in Sri Lanka</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/contact-us.css">
    <link rel="stylesheet" href="css/index.css">
    <script src="js/search.js"></script>
    <style>
            body {
            background-image: url('https://www.hdwallpapers.in/download/man_hike_camping_alone_forest_4k_hd_alone-2560x1440.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }
        .contact-us-text {
            font-size: 20px; /* Adjust the font size as needed */
            color: white; /* Set the text color to white */

        }
        .contact-form {
            background: rgba(255, 255, 255, 0.9); /* Slightly transparent background for better readability */
        }
    </style>
</head>
<body>
    <header class="header">
        <a href="index.html" class="logo">
            <img src="images/logo.png" alt="Ceylon Extreme Adventures Logo" width="150">
            CeylonExtremeAdventures.com
        </a>
        <nav class="navbar">
            <div id="nav-close" class="fas fa-times"></div>
            <a href="index.html">Home</a>
            <div class="dropdown">
                <button class="dropbtn">Adventure <i class="fas fa-caret-down"></i></button>
                <div class="dropdown-content">
                    <a href="safari.html"><i class="fas fa-binoculars"></i> Safaris</a>
                    <a href="Hiking & Camping Tours.html"><i class="fas fa-campground"></i> Hiking & Camping Tours</a>
                    <a href="diving.html"><i class="fas fa-water"></i> Diving</a>
                    <a href="kayaking.html"><i class="fas fa-ship"></i> Kayaking</a>
                    <a href="MotorcycleTrails.html"><i class="fas fa-bicycle"></i> Motorcycle Trails</a>
                </div>
            </div>
            <a href="store.html"><i class="fas fa-store"></i> Store</a>
            <a href="about-us.html"><i class="fas fa-info-circle"></i> About-Us</a>
            <a href="contact-us.php"><i class="fas fa-envelope"></i> Contact-Us</a>
        </nav>
        <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
        </div>
        <div class="search-box">
            <input class="search-input" type="text" placeholder="Search something..">
            <button class="search-btn"><i class="fas fa-search"></i></button>
        </div>
    </header>
    <section class="contact-us py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h1 class="contact-us-heading">Contact Us</h1>
                <?php
                if (!empty($successMsg)) {
                    echo "<div class='alert alert-success'>$successMsg</div>";
                }
                if (!empty($errorMsg)) {
                    echo "<div class='alert alert-danger'>$errorMsg</div>";
                }
                ?>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>

                <p class="contact-us-text">We would love to hear from you! Whether you have a question about our adventures, need assistance with booking, or just want to give feedback, please use the form below to get in touch with us.</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <form action="contact-us.php" method="post" class="contact-form bg-light p-4 rounded shadow-sm">
                        <div class="mb-3">
                            <label for="name" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="subject" class="form-label">Subject</label>
                            <input type="text" class="form-control" id="subject" name="subject" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-lg">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <footer class="footer mt-auto py-3 bg-dark text-white">
        <div class="container">
            <div class="row">
                <br>
                <br>

                <br>


            <div class="text-center mt-3">
                <p class="mb-0">Made with 🤍 in <span>Sri Lanka</span> <br> Copyright ©️ 2023 - all rights reserved!</p>
            </div>
        </div>
    </footer>
    <a href="#top" class="to-top position-fixed bottom-0 end-0 mb-4 me-4">
        <i class="fas fa-chevron-up fa-2x text-primary"></i>
    </a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
