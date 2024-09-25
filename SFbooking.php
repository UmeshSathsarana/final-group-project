<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $parkName = $_POST['parkName'];
    $price = $_POST['price'];
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $whatsapp = $_POST['whatsapp'];
    $address = $_POST['address'];
    $idNumber = $_POST['idNumber'];
    $dateOfAdventure = $_POST['dateOfAdventure'];
    $participants = $_POST['participants'];
    $duration = $_POST['duration'];
    $vehicle = $_POST['vehicle'];
    $nationalPark = $_POST['nationalPark'];

    $sql = "INSERT INTO safaribookings (parkName, price, fullName, email, whatsapp, address, idNumber, dateOfAdventure, participants, duration, vehicle, nationalPark) 
            VALUES ('$parkName', '$price', '$fullName', '$email', '$whatsapp', '$address', '$idNumber', '$dateOfAdventure', '$participants', '$duration', '$vehicle', '$nationalPark')";

    if ($conn->query($sql) === TRUE) {
        echo "<!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Booking Successful</title>
            <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css'>
            <style>
                body {
                            background-image: url(https://www.hdwallpapers.in/download/man_hike_camping_alone_forest_4k_hd_alone-2560x1440.jpg); 

                    display: flex;
                    justify-content: center;
                    align-items: center;
                    height: 100vh;
                    background-color: #f8f9fa;
                    font-family: Arial, sans-serif;
                }
                .message-container {
                    text-align: center;
                    background: #fff;
                    padding: 40px;
                    border-radius: 10px;
                    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                    max-width: 600px;
                    width: 100%;
                }
                .message-container h1 {
                    color: #28a745;
                }
                .message-container p {
                    font-size: 18px;
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
                <p>Thank you, <strong>$fullName</strong>, for booking a safari adventure with us!</p>
                <p>You will contact via email shortly at <strong>$email</strong>.</p>
                <a href='safari.html' class='btn btn-primary'>Go to Homepage</a>
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
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
