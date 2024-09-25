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
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <h2 class="text-center">Hiking Book</h2>
        <form action="booking.php" method="post">
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
                <label for="nationalPark">Hiking and Camping places:</label>
                <select class="form-control" id="Hiking&Camping Places" name="Hiking&Camping Places" required>
                    <option value="1">Sigiriya</option>
                    <option value="2">Pidurangala</option>
                    <option value="3">Ella Rock</option>
                    <option value="4">Little adam's peak</option>
                    <option value="5">Kabaragala</option>
                    <option value="6">Bambaragala</option>
                    <option value="7">Gartmore Falls</option>
                    <option value="8">Alagalla Mountain Range</option>
                    <option value="9">Knuckles Mountain Range</option>
                    <option value="10">Ohiya Devils Stair</option>
                    <option value="11">Narangala Mountain</option>
                    <option value="12">Mini World End Madolsima</option>
                    <option value="13">Idalgashinna</option>
                    <option value="14">Haritha Kanada Peak</option>
                    <option value="15">Upper Diyaluma</option>
                    
                </select>
            </div>
            <div class="form-group">
                <label for="price">Price:</label>
                <select class="form-control" id="price" name="price" required>
                    <option value="10">1 person $10</option>
                    <option value="20">2 persons $20</option>
                    <option value="30">3 persons $30</option>
                    <option value="40">4 persons $40</option>
                    <option value="50">5 persons $50</option>
                    <option value="60">6 persons $60</option>
                    <option value="70">7 persons $70</option>
                    <option value="80">8 persons $80</option>
                    <option value="90">9 persons $90</option>
                    <option value="100">10 persons $100</option>
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
