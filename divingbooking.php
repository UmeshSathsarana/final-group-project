<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $whatsapp = $_POST['whatsapp'];
    $address = $_POST['address'];
    $idNumber = $_POST['idNumber'];
    $dateOfAdventure = $_POST['dateOfAdventure'];
    $participants = $_POST['participants'];
    $duration = $_POST['duration'];
    $diving = $_POST['diving'];
    $price = $_POST['price'];

    $stmt = $conn->prepare("INSERT INTO DivingBookings (fullName, email, whatsapp, address, idNumber, dateOfAdventure, participants, duration, diving, price) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssissd", $fullName, $email, $whatsapp, $address, $idNumber, $dateOfAdventure, $participants, $duration, $diving, $price);

    if ($stmt->execute()) {
        echo "<!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Booking Successful</title>
            <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css'>
            <style>
                body {
                    background-image: url('https://www.hdwallpapers.in/download/man_hike_camping_alone_forest_4k_hd_alone-2560x1440.jpg');
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    height: 100vh;
                    background-size: cover;
                    background-position: center;
                    font-family: Arial, sans-serif;
                    margin: 0;
                    overflow: hidden;
                }
                .message-container {
                    text-align: center;
                    background: rgba(255, 255, 255, 0.8);
                    padding: 40px;
                    border-radius: 10px;
                    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                    max-width: 600px;
                    width: 100%;
                }
                .message-container h1 {
                    color: #28a745;
                    font-size: 2.5rem;
                    margin-bottom: 20px;
                }
                .message-container p {
                    font-size: 1.2rem;
                    margin: 15px 0;
                }
                .confetti {
                    position: absolute;
                    width: 10px;
                    height: 10px;
                    background: #ffd700;
                    animation: confetti 2s infinite ease-in-out;
                }
                @keyframes confetti {
                    0% { transform: translateY(0); }
                    100% { transform: translateY(200vh); }
                }
            </style>
        </head>
        <body>
            <div class='message-container'>
                <h1>Booking Successful!</h1>
                <p>Thank you, <strong>$fullName</strong>, for booking your adventure with us!</p>
                <p>You will receive a confirmation email shortly at <strong>$email</strong>.</p>
                <a href='index.php' class='btn btn-primary'>Go to Homepage</a>
            </div>
            <script>
                for (let i = 0; i < 100; i++) {
                    const confetti = document.createElement('div');
                    confetti.classList.add('confetti');
                    confetti.style.left = Math.random() * 100 + 'vw';
                    confetti.style.animationDelay = Math.random() * 2 + 's';
                    document.body.appendChild(confetti);
                }
            </script>
        </body>
        </html>";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
