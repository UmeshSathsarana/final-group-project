<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ceylonextremeadventures";

try {
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
} catch (Exception $e) {
    echo "Message: " . $e->getMessage();
}
?>
