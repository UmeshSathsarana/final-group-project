







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Delete Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('https://www.hdwallpapers.in/download/man_hike_camping_alone_forest_4k_hd_alone-2560x1440.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: white;
        }
        .container {
            margin-top: 50px;
            background-color: rgba(0, 0, 0, 0.7);
            padding: 20px;
            border-radius: 10px;
        }
        .footer {
            margin-top: 30px;
        }
        .footer .credit {
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Admin - Delete Product</h1>
        <div class="row" id="productContainer">
            <!-- Dynamic product cards will be added here -->
        </div>
    </div>

    <footer class="footer">
        <div class="credit text-center">
            Made with 🤍 in <span>Sri Lanka's Adventure</span> <br> 2024 - ICBT 64/01 Group!
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            fetch('get_products.php')
                .then(response => response.json())
                .then(data => {
                    const productContainer = document.getElementById('productContainer');
                    data.forEach(product => {
                        const productCard = `
                            <div class="col-md-4 col-lg-3">
                                <div class="card">
                                    <img src="${product.image}" alt="Card Image">
                                    <div class="card-body">
                                        <h2 class="card-title">${product.title}</h2>
                                        <p class="card-price">$${product.price}</p>
                                        <div class="card-buttons">
                                            <form action="delete_product_action.php" method="POST">
                                                <input type="hidden" name="productId" value="${product.id}">
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        `;
                        productContainer.innerHTML += productCard;
                    });
                });
        });
    </script>
</body>
</html>
