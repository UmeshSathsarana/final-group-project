<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy Product Form</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('https://www.hdwallpapers.in/download/man_hike_camping_alone_forest_4k_hd_alone-2560x1440.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            font-family: 'Montserrat', sans-serif;
        }

        .buy-form, .success-message {
            background: rgba(255, 255, 255, 0.9);
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            margin-top: 50px;
        }

        .buy-form h2, .success-message h2 {
            margin-bottom: 30px;
            font-family: 'Montserrat', sans-serif;
            text-align: center;
        }

        .form-control, .form-select {
            margin-bottom: 20px;
        }

        .card-details {
            background: #f7f7f7;
            padding: 20px;
            border-radius: 10px;
        }

        .btn-custom {
            padding: 10px 20px;
            border-radius: 30px;
            font-size: 16px;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
        }

        .btn-secondary {
            background-color: #6c757d;
            border: none;
        }

        .product-image {
            text-align: center;
            margin-bottom: 20px;
        }

        .product-image img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
        }

        .success-message p {
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
                <?php
                if (isset($_POST['submit'])) {
                    include 'db.php';

                    $productTitle = $conn->real_escape_string($_POST['productTitle']);
                    $fullName = $conn->real_escape_string($_POST['fullName']);
                    $email = $conn->real_escape_string($_POST['email']);
                    $address = $conn->real_escape_string($_POST['address']);

                    $sql = "INSERT INTO ProductPurchases (productTitle, fullName, email, address) VALUES ('$productTitle', '$fullName', '$email', '$address')";

                    if ($conn->query($sql) === TRUE) {
                        echo '
                        <div class="success-message">
                            <h2>Success!</h2>
                            <p>Product purchased successfully! <br> We wiil contact via email</p>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                                <a href="store.html" class="btn btn-primary btn-custom">Go Back to Store</a>
                            </div>
                        </div>';
                    } else {
                        echo '
                        <div class="success-message">
                            <h2>Error!</h2>
                            <p>There was an error processing your request. Please try again later.</p>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                                <a href="store.html" class="btn btn-primary btn-custom">Go Back to Store</a>
                            </div>
                        </div>';
                    }

                    $conn->close();
                } else {
                    echo '
                    <div class="buy-form">
                        <h2>Buy Product Form</h2>
                        <div class="product-image">
                            <img src="' . $_POST['productImage'] . '" alt="Product Image">
                        </div>
                        <form action="BuyProduct.php" method="POST">
                            <div class="mb-3">
                                <label for="productTitle" class="form-label">Product Title</label>
                                <input type="text" class="form-control" id="productTitle" name="productTitle" value="' . $_POST['productTitle'] . '" readonly>
                            </div>
                            
                            <div class="mb-3">
                                <label for="productPrice" class="form-label">Product Price</label>
                                <input type="text" class="form-control" id="productPrice" value="' . $_POST['productPrice'] . '" readonly>
                            </div>

                            <div class="mb-3">
                                <label for="fullName" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="fullName" name="fullName" placeholder="Enter your full name">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email address">
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" class="form-control" id="address" name="address" placeholder="Enter your address">
                            </div>
                            
                            <div class="card-details mb-4">
                                <h4>Card Payment Details</h4>
                                <div class="mb-3">
                                    <label for="cardHolderName" class="form-label">Card Holder Name</label>
                                    <input type="text" class="form-control" id="cardHolderName" placeholder="Enter card holder name">
                                </div>
                                <div class="mb-3">
                                    <label for="cardNumber" class="form-label">Card Number</label>
                                    <input type="text" class="form-control" id="cardNumber" placeholder="Enter card number">
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="expiryDate" class="form-label">Expiry Date</label>
                                        <input type="month" class="form-control" id="expiryDate">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="cvv" class="form-label">CVV</label>
                                        <input type="text" class="form-control" id="cvv" placeholder="Enter CVV">
                                    </div>
                                </div>
                            </div>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <button type="submit" class="btn btn-primary btn-custom" name="submit">Buy Now</button>
                                <button type="reset" class="btn btn-secondary btn-custom">Cancel</button>
                            </div>
                        </form>
                    </div>';
                }
                ?>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
