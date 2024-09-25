<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-image: url(https://www.hdwallpapers.in/download/man_hike_camping_alone_forest_4k_hd_alone-2560x1440.jpg); 
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .booking-container {
            background: rgba(255, 255, 255, 0.8);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            width: 100%;
        }
        .btn-secondary {
            margin-top: 10px;
        }
        .form-group img {
            width: 500px;
            height: auto;
        }
        .form-group.center {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .vehicle-group {
            margin-top: 15px;
        }
        .vehicle-group label img {
            display: block;
            width: 100px;
            height: auto;
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    <div class="booking-container">
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <h2 class="text-center">National Parks</h2>
        <form action="SFbooking.php" method="post">
            <?php
                $name = $_GET['name'];
                $price = $_GET['price'];
                $image = $_GET['image'];
            ?>
            <div class="form-group center">
                <img src="<?php echo $image; ?>" alt="Park Image">
            </div>
            <div class="form-group">
                <label for="parkName">Park Name:</label>
                <input type="text" class="form-control" id="parkName" name="parkName" value="<?php echo $name; ?>" readonly>
            </div>
            <div class="form-group">
                <label for="price">Price:</label>
                <input type="text" class="form-control" id="price" name="price" value="<?php echo $price; ?>" readonly>
            </div>
            
            <div class="form-group">
                <label for="fullName">Full Name:</label>
                <input type="text" class="form-control" id="fullName" name="fullName" required>
            </div>
            <div class="form-group">
                <label for="email">Email Address:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="whatsapp">Whatsapp Phone Number:</label>
                <input type="text" class="form-control" id="whatsapp" name="whatsapp" required>
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" class="form-control" id="address" name="address" required>
            </div>
            <div class="form-group">
                <label for="idNumber">ID Number:</label>
                <input type="text" class="form-control" id="idNumber" name="idNumber" required>
            </div>
            <div class="form-group">
                <label for="dateOfAdventure">Date Of Adventure:</label>
                <input type="date" class="form-control" id="dateOfAdventure" name="dateOfAdventure" required>
            </div>
            <div class="form-group">
                <label for="participants">Number of Participants:</label>
                <input type="number" class="form-control" id="participants" name="participants" required>
            </div>
            <div class="form-group">
                <label for="duration">Duration:</label>
                <select class="form-control" id="duration" name="duration" required>
                    <option value="Half-day">Half-day</option>
                    <option value="Full-day">Full-day</option>
                    <option value="Multiple Days">Multiple Days</option>
                </select>
            </div>
            <div class="vehicle-group">
                <label for="vehicle">Vehicles:</label><br>
                <div>
                    <input type="radio" id="tata" name="vehicle" value="Tata" required>
                    <label for="tata"><img src="https://thetraveltester.com/wp-content/uploads/2018/11/yala-national-park-safari-sri-lanka-1.jpg" alt="Tata">Tata</label>
                </div>
                <div>
                    <input type="radio" id="hilux" name="vehicle" value="Hilux" required>
                    <label for="hilux"><img src="https://media-cdn.tripadvisor.com/media/photo-s/28/58/a9/4b/our-luxury-jeep.jpg" alt="Hilux">Hilux</label>
                </div>
                <div>
                    <input type="radio" id="landRover" name="vehicle" value="Land Rover" required>
                    <label for="landRover"><img src="https://media-cdn.tripadvisor.com/media/attractions-splice-spp-720x480/07/a4/96/27.jpg" alt="Land Rover">Land Rover</label>
                </div>
            </div>
            <div class="form-group">
                <label for="nationalPark">National Park:</label>
                <select class="form-control" id="nationalPark" name="nationalPark" required>
                    <option value="Yala National Park">Yala National Park</option>
                    <option value="Wilpattu National Park">Wilpattu National Park</option>
                    <option value="Kumana National Park">Kumana National Park</option>
                    <option value="Udawalawa National Park">Udawalawa National Park</option>
                </select>
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
            <button type="submit" class="btn btn-primary btn-block">Book Now</button>
            <button type="button" class="btn btn-secondary btn-block" onclick="window.location.href='index.php'">Cancel</button>
        </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
