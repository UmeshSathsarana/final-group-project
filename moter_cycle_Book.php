<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-image: url(https://www.hdwallpapers.in/download/man_hike_camping_alone_forest_4k_hd_alone-2560x1440.jpg); /* Replace with your actual image URL */
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
    </style>
</head>
<body>
    <div class="booking-container">
        <h2 class="text-center">Moter cycle tarils</h2>
        <form action="M_booking.php" method="post">
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
            <div class="form-group">
                <label for="Motercycle_Trails">Motercycle_Trails:</label>
                <select class="form-control" id="Motercycle_Trails" name="Motercycle_Trails" required>
                    <option value="Place1">Asiya</option>
                    <option value="Place2">cultural</option>
                    <option value="Place3">Jaffna</option>
                    <option value="Place4">sigirya</option>
                </select>
            </div>
            <div class="form-group">
                <label for="price">Price:</label>
                <select class="form-control" id="price" name="price" required>
                    <option value="40">4 persons $40</option>
                    <option value="60">6 persons $60</option>
                    <option value="80">7 persons $80</option>
                    <option value="100">10 persons $100</option>
                </select>
            </div>
            <div class="card-details mb-4">
                <h4>Card Payment Details</h4>
                <div class="mb-3">
                    <label for="cardHolderName" class="form-label">Card Holder Name</label>
                    <input type="text" class="form-control" id="cardHolderName" name="cardHolderName" placeholder="Enter card holder name" required>
                </div>
                <div class="mb-3">
                    <label for="cardNumber" class="form-label">Card Number</label>
                    <input type="text" class="form-control" id="cardNumber" name="cardNumber" placeholder="Enter card number" required>
                </div>
                <div class="row">
                <div class="col-md-6 mb-3">
    <label for="expiryDate" class="form-label">Expiry Date</label>
    <input type="month" class="form-control" id="expiryDate" name="expiryDate" required>
</div>

                    <div class="col-md-6 mb-3">
                        <label for="cvv" class="form-label">CVV</label>
                        <input type="text" class="form-control" id="cvv" name="cvv" placeholder="Enter CVV" required>
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
