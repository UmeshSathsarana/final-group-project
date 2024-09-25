<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Kayaking Bookings</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        .container {
            padding-top: 50px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Kayaking Bookings</h1>
        <table class="table table-striped">
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
                    <th>Kayaking Type</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "ceylonextremeadventures";

                $conn = new mysqli($servername, $username, $password, $dbname);
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $sql = "SELECT full_name, email, whatsapp, address, id_number, date_of_adventure, participants, duration, kayaking, price FROM kayaking_bookings";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>
                            <td>" . $row["full_name"] . "</td>
                            <td>" . $row["email"] . "</td>
                            <td>" . $row["whatsapp"] . "</td>
                            <td>" . $row["address"] . "</td>
                            <td>" . $row["id_number"] . "</td>
                            <td>" . $row["date_of_adventure"] . "</td>
                            <td>" . $row["participants"] . "</td>
                            <td>" . $row["duration"] . "</td>
                            <td>" . $row["kayaking"] . "</td>
                            <td>" . $row["price"] . "</td>
                        </tr>";
                    }
                } else {
                    echo "<tr><td colspan='10'>No bookings found</td></tr>";
                }
                $conn->close();
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
