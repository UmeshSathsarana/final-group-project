<?php
include 'db.php';

$sql = "SELECT * FROM safaribookings";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>View Safari Bookings</title>
        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css'>
        <style>
            body {
                background-color: #f8f9fa;
                font-family: Arial, sans-serif;
            }
            .container {
                margin-top: 50px;
            }
            .table-container {
                margin-top: 20px;
            }
            .table th {
                background-color: #343a40;
                color: #fff;
            }
        </style>
    </head>
    <body>
        <div class='container'>
            <div class='text-center'>
                <h1 class='display-4'>Safari Bookings</h1>
                <p class='lead'>Manage all your safari bookings from this control panel.</p>
            </div>
            <div class='table-container'>
                <table class='table table-striped table-hover'>
                    <thead>
                        <tr>
                            <th>Park Name</th>
                            <th>Price</th>
                            <th>Full Name</th>
                            <th>Email</th>
                            <th>Whatsapp</th>
                            <th>Address</th>
                            <th>ID Number</th>
                            <th>Date of Adventure</th>
                            <th>Participants</th>
                            <th>Duration</th>
                            <th>Vehicle</th>
                            <th>National Park</th>
                        </tr>
                    </thead>
                    <tbody>";

    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . htmlspecialchars($row["parkName"]) . "</td>
                <td>" . htmlspecialchars($row["price"]) . "</td>
                <td>" . htmlspecialchars($row["fullName"]) . "</td>
                <td>" . htmlspecialchars($row["email"]) . "</td>
                <td>" . htmlspecialchars($row["whatsapp"]) . "</td>
                <td>" . htmlspecialchars($row["address"]) . "</td>
                <td>" . htmlspecialchars($row["idNumber"]) . "</td>
                <td>" . htmlspecialchars($row["dateOfAdventure"]) . "</td>
                <td>" . htmlspecialchars($row["participants"]) . "</td>
                <td>" . htmlspecialchars($row["duration"]) . "</td>
                <td>" . htmlspecialchars($row["vehicle"]) . "</td>
                <td>" . htmlspecialchars($row["nationalPark"]) . "</td>
              </tr>";
    }

    echo "</tbody>
                </table>
            </div>
        </div>
        <script src='https://code.jquery.com/jquery-3.5.1.slim.min.js'></script>
        <script src='https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js'></script>
        <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js'></script>
    </body>
    </html>";
} else {
    echo "<!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>No Results</title>
        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css'>
        <style>
            body {
            
                background-color: #f8f9fa;
                font-family: Arial, sans-serif;
            }
            .container {
                margin-top: 50px;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <div class='container'>
            <div class='alert alert-warning' role='alert'>
                <h4 class='alert-heading'>No Results</h4>
                <p>No safari bookings found.</p>
            </div>
        </div>
    </body>
    </html>";
}
$conn->close();
?>
