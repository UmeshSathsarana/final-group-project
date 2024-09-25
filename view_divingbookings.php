<?php
include 'db.php';

$sql = "SELECT * FROM DivingBookings";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Diving Bookings</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('https://www.hdwallpapers.in/download/man_hike_camping_alone_forest_4k_hd_alone-2560x1440.jpg');
            background-size: cover;
            background-position: center;
            font-family: Arial, sans-serif;
        }
        .container {
            margin-top: 50px;
            background: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 10px;
        }
        table {
            width: 100%;
            margin-top: 20px;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #007bff;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Diving Bookings</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>WhatsApp</th>
                    <th>Address</th>
                    <th>ID Number</th>
                    <th>Date of Adventure</th>
                    <th>Participants</th>
                    <th>Duration</th>
                    <th>Diving</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>
                            <td>{$row['fullName']}</td>
                            <td>{$row['email']}</td>
                            <td>{$row['whatsapp']}</td>
                            <td>{$row['address']}</td>
                            <td>{$row['idNumber']}</td>
                            <td>{$row['dateOfAdventure']}</td>
                            <td>{$row['participants']}</td>
                            <td>{$row['duration']}</td>
                            <td>{$row['diving']}</td>
                            <td>{$row['price']}</td>
                        </tr>";
                    }
                } else {
                    echo "<tr><td colspan='10' class='text-center'>No bookings found</td></tr>";
                }
                $conn->close();
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
