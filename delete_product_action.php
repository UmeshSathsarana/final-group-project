<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $productId = $_POST['productId'];
    
    $stmt = $conn->prepare("DELETE FROM products WHERE id = ?");
    $stmt->bind_param("i", $productId);

    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <title>Product Deletion</title>
        <style>
            body {
            background-image: url('https://www.hdwallpapers.in/download/man_hike_camping_alone_forest_4k_hd_alone-2560x1440.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: white;
        }
            .centered-btn {
                display: flex;
                justify-content: center;
                margin-top: 20px;
            }
        </style>
    </head>
    <body>
    <?php

    if ($stmt->execute()) {
        echo '<div class="alert alert-success text-center" role="alert">Product deleted successfully!</div>';
    } else {
        echo '<div class="alert alert-danger text-center" role="alert">Error: ' . $stmt->error . '</div>';
    }

    $stmt->close();
    $conn->close();

    ?>
    <div class="centered-btn">
        <a href="delete_product.php" class="btn btn-primary">Go Back</a>
    </div>
    </body>
    </html>
    <?php
}
?>
