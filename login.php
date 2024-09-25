<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('https://www.hdwallpapers.in/download/man_hike_camping_alone_forest_4k_hd_alone-2560x1440.jpg');
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .login-container {
            background: rgba(255, 255, 255, 0.8);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }
        .btn-secondary {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2 class="text-center">User Login</h2>
        <?php
        session_start();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            include 'db.php';
            $username = $conn->real_escape_string($_POST['username']);
            $password = $_POST['password'];

            // Admin login check
            if ($username == 'admin' && $password == 'admin1234') {
                $_SESSION['admin_id'] = $username;
                header('Location: admin_control_panel.html');
                exit();
            }

            $sql = "SELECT * FROM users WHERE username='$username'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $user = $result->fetch_assoc();
                if (password_verify($password, $user['password'])) {
                    $_SESSION['user_id'] = $user['id'];
                    $_SESSION['username'] = $user['username'];
                    header('Location: loginindex.html');
                    exit();
                } else {
                    echo "<div class='alert alert-danger'>Invalid password</div>";
                }
            } else {
                echo "<div class='alert alert-danger'>No user found with that username</div>";
            }
            $conn->close();
        }
        ?>
        <form action="login.php" method="post">
            <div class="form-group">
                <label for="username">User Name:</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Login</button>
            <button type="button" class="btn btn-secondary btn-block" onclick="window.location.href='create_account.php'">Create New Account</button>
        </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
