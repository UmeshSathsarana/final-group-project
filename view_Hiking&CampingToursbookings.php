<?php
include 'db.php';

$sql = "SELECT * FROM hiking_bookings";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>View Bookings</title>
        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css'>
        <style>
            body {
                background-image: url('https://www.hdwallpapers.in/download/man_hike_camping_alone_forest_4k_hd_alone-2560x1440.jpg');
                background-size: cover;
                background-position: center;
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 20px;
            }
            .container {
                background: rgba(255, 255, 255, 0.8);
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }
            table {
                width: 100%;
                margin: 20px 0;
            }
            th, td {
                padding: 15px;
                text-align: left;
                border-bottom: 1px solid #ddd;
            }
            th {
                background-color: #f2f2f2;
            }
        </style>
    </head>
    <body>
        <div class='container'>
            <h1>Hiking & CampingTours</h1>
            <table class='table table-striped'>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Whatsapp</th>
                        <th>Address</th>
                        <th>ID Number</th>
                        <th>Date of Adventure</th>
                        <th>Participants</th>
                        <th>Duration</th>
                        <th>National Park</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>".$row["id"]."</td>
                <td>".$row["full_name"]."</td>
                <td>".$row["email"]."</td>
                <td>".$row["whatsapp"]."</td>
                <td>".$row["address"]."</td>
                <td>".$row["id_number"]."</td>
                <td>".$row["date_of_adventure"]."</td>
                <td>".$row["participants"]."</td>
                <td>".$row["duration"]."</td>
                <td>".$row["national_park"]."</td>
                <td>".$row["price"]."</td>
              </tr>";
    }
    echo "</tbody>
            </table>
        </div>
    </body>
    </html>";
} else {
    echo "0 results";
}
$conn->close();
?>
