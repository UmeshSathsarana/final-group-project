<?php
include 'db.php';
session_start();

// Include Bootstrap CSS for styling
echo '<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">';

// Add custom CSS
echo '<style>
        body {
            background-image: url();
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }
        .message-box {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 50%;
            text-align: center;
        }
      </style>';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['productTitle'];
    $price = $_POST['productPrice'];
    $image = $_POST['productImage'];
    $details = $_POST['productDetails'];
    $category = $_POST['productCategory'];

    $stmt = $conn->prepare("INSERT INTO products (title, price, image, details, category) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sdsss", $title, $price, $image, $details, $category);

    echo '<div class="message-box">';
    if ($stmt->execute()) {
        echo '<div class="alert alert-success" role="alert">Product added successfully!</div>';
    } else {
        echo '<div class="alert alert-danger" role="alert">Error: ' . $stmt->error . '</div>';
    }

    echo '<a href="admin_control_panel.html" class="btn btn-primary mt-3">Go Back</a>';
    echo '</div>';

    $stmt->close();
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Add Product</h2>
        <form action="add_product.php" method="POST">
            <div class="form-group mb-3">
                <label for="productTitle">Product Title</label>
                <input type="text" class="form-control" id="productTitle" name="productTitle" required>
            </div>
            <div class="form-group mb-3">
                <label for="productPrice">Product Price</label>
                <input type="number" step="0.01" class="form-control" id="productPrice" name="productPrice" required>
            </div>
            <div class="form-group mb-3">
                <label for="productImage">Product Image URL</label>
                <input type="text" class="form-control" id="productImage" name="productImage" required>
            </div>
            <div class="form-group mb-3">
                <label for="productDetails">Product Details</label>
                <textarea class="form-control" id="productDetails" name="productDetails" rows="3" required></textarea>
            </div>
            <div class="form-group mb-3">
                <label for="productCategory">Product Category</label>
                <select class="form-control" id="productCategory" name="productCategory" required>
                    <option value="Safaris">Safaris</option>
                    <option value="Diving">Diving</option>
                    <option value="Kayaking">Kayaking</option>
                    <option value="Motorcycle Trails">Motorcycle Trails</option>
                    <option value="Hiking">Hiking</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Add Product</button>
        </form>
    </div>
</body>
</html>
