<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Package Menu</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .package-menu {
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
        }

        .package {
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 5px;
            text-align: center;
            transition: all 0.3s ease;
        }

        .package:hover {
            transform: scale(1.1);
            color: gray;
        }

        .package h3 {
            margin-bottom: 10px;
        }

        .package p {
            margin-bottom: 10px;
        }

        .package button {
            background-color: gray;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            text-align: center;
            transition: all 0.3s ease;
        }

        .package button:hover {
            background-color: mediumaquamarine;
        }
    </style>
</head>
<header>
        <h1>Bromo Trip Ticketing</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="paket.php">Paket</a></li>
                <li><a href="tiket.php">Tiket</a></li>
                <li><a href="kontak.php">Kontak</a></li>
            </ul>
        </nav>
    </header>
<body>
    <h1>Yuk Pilih Paket Sesuai Keinginanmu</h1>
    <div class="package-menu">
        <div class="package">
            <h3>Basic</h3>
            <p>250k/orang</p>
            <p>spot terbatas</p>
            <p>24/7 support</p>
            <button>Lihat Detail</button>
        </div>
        <div class="package">
            <h3>Premium</h3>
            <p>500k/orang</p>
            <p>special spot</p>
            <p>24/7 support</p>
            <button>Lihat Detail</button>
        </div>
        <div class="package">
            <h3>Enterprise</h3>
            <p>700k/orang</p>
            <p>bonus dokumentasi allday</p>
            <p>24/7 support</p>
            <button>Lihat Detail</button>
        </div>
    </div>
</body>
</html>