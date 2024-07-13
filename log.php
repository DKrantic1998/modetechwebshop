<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script>
        function switchLanguage(lang) {
            if (lang === 'sr') {
                document.getElementById('h1').innerText = 'ModTech Web Prodavnica';
                document.getElementById('login-heading').innerText = 'Prijavite se ovde:';
                document.getElementById('username-label').innerText = 'Korisničko ime:';
                document.getElementById('password-label').innerText = 'Lozinka:';
                document.querySelector('button[type="submit"]').innerText = 'Prijavi se';
                document.querySelector('a[href="register.php"]').innerText = 'Nemate nalog? Registrujte se ovde';
            } else if (lang === 'en') {
                document.getElementById('h1').innerText = 'ModTech Web Shop';
                document.getElementById('login-heading').innerText = 'Login here:';
                document.getElementById('username-label').innerText = 'Username:';
                document.getElementById('password-label').innerText = 'Password:';
                document.querySelector('button[type="submit"]').innerText = 'Login';
                document.querySelector('a[href="register.php"]').innerText = 'Register here';
            }
        }
    </script>
</head>
<style>
    body {
        background-image: url('https://60a99bedadae98078522-a9b6cded92292ef3bace063619038eb1.ssl.cf2.rackcdn.com/images_stores_Dallas_DallasSLIDER_laptop.jpg');
        background-size: cover;
        background-repeat: no-repeat;
    }

    .h1 {
        color: white;
        text-align: center;
        margin-top: 20px;
    }

    .container {
        background-color: gray;
        color: white;
        margin-top: 50px;
        padding: 20px;
        width: 60%;
        margin-left: auto;
        margin-right: auto;
    }
</style>
<body>
<h1 id="h1" class="h1">ModTech Web Shop</h1><br>

<!-- Dodato dugme za promenu jezika -->


<div class="container">

    <h2 id="login-heading">Login here:</h2>

    <form class="mt-3" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div class="form-group">
            <label id="username-label" for="username">Username:</label>
            <input type="text" class="form-control" id="username" name="username" required>
        </div>
        <div class="form-group">
            <label id="password-label" for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary">Login</button><br>
        <a href="register.php" id="register-link">Register here</a>
    </form>
</div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $username = "korisnik";
    $password = "lozinka";
    $dbname = "webshop";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO reg_users (username, password) VALUES ('$username', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo '<div class="container mt-3"><div class="alert alert-success" role="alert">Successful registration.</div></div>';
    } else {
        echo '<div class="container mt-3"><div class="alert alert-danger" role="alert">Error: ' . $sql . '<br>' . $conn->error . '</div></div>';
    }

    $conn->close();
}
?>

</body>
</html>
