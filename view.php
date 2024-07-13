<!DOCTYPE html>
<html>
<head>
    <title>View</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <style>
        body {
            background-image: url('https://60a99bedadae98078522-a9b6cded92292ef3bace063619038eb1.ssl.cf2.rackcdn.com/images_stores_Dallas_DallasSLIDER_laptop.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            font-family: Arial, sans-serif;
            color: white;
        }
        .h1 {
            color: white;
            text-align: center;
            margin-top: 20px;
        }
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
        }
        li {
            float: left;
        }
        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        li a:hover {
            background-color: #111;
        }
        .btn-container {
            text-align: right;
            margin-right: 20px;
            margin-top: 10px;
        }
        table {
            width: 90%;
            max-width: 1200px;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: gray;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: center;
            padding: 10px;
        }
        th {
            background-color: #333;
        }
        .product-info {
            text-align: center;
            margin-top: 20px;
        }
        .product-info img {
            width: 150px;
            height: 150px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <h1 class="h1">ModTech Web Shop</h1><br>
    <div class="btn-container">
        <a href="register.php" class="btn btn-primary mr-2">Register</a>
        <a href="log.php" class="btn btn-primary">Log In</a>
    </div><br>
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="home.php">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="view.php">View articles</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="buy.php">Buy</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
        </li>
    </ul> <br>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Quantity</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <p>Laptop Dell</p>
                    <img src="https://i.dell.com/is/image/DellContent/content/dam/ss2/product-images/dell-client-products/notebooks/latitude-notebooks/14-3420/global-spi/ng/notebook-latitude-14-3420-campaign-hero-504x350-ng.psd?fmt=jpg&wid=504&hei=334">
                </td>
                <td>10</td>
                <td>40000</td>
            </tr>
            <tr>
                <td>
                    <p>Camera</p>
                    <img src="https://pisces.bbystatic.com/image2/BestBuy_US/images/products/6409/6409982_sd.jpg;maxHeight=640;maxWidth=550">
                </td>
                <td>20</td>
                <td>20000</td>
            </tr>
            <tr>
                <td>
                    <p>Housing</p>
                    <img src="https://api.frog.rs/storage/images/products/kuciste-lc-power-7041b-on-midi-tower-atxmicro-atxmini-itxbez-napajanjacrna-large-20240411170110000000.webp">
                </td>
                <td>40</td>
                <td>50000</td>
            </tr>
            <tr>
                <td>
                    <p>Mouse</p>
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTRF9P5nKxdlN042xRmMfB1Sefpt5vZLeVhGw&s">
                </td>
                <td>20</td>
                <td>6000</td>
            </tr>
            <tr>
                <td>
                    <p>Monitor Dell</p>
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQMLqPj_nwZMZJZwuROxUiFztoaLTqjf637tA&s">
                </td>
                <td>20</td>
                <td>80000</td>
            </tr>
            <tr>
                <td>
                    <p>Keyboard</p>
                    <img src="https://c.cdnmp.net/241860914/p/l/5/connect-xl-tastatura-sa-qwerty-rasporedom-usb-crna-boja-cxl-k100~1592505.jpg">
                </td>
                <td>40</td>
                <td>7000</td>
            </tr>
        </tbody>
    </table>
</body>
</html>
