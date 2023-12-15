<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Kontak</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }


        .form-group {
            margin-bottom: 20px;
        }

        .form-control {
            display: block;
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .submit-btn {
            background-color: gray;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            text-align: center;
            transition: all 0.3s ease;
        }

        .submit-btn:hover {
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
    <div class="container">
        <h1>Tuliskan pesanmu disini ya</h1>
        <form>
            <div class="form-group">
                <input class="form-control" type="text" name="nama" placeholder="Nama" required>
            </div>
            <div class="form-group">
                <input class="form-control" type="email" name="email" placeholder="Email" required>
            </div>
            <div class="form-group">
                <textarea class="form-control" name="pesan" placeholder="Pesan" rows="5" required></textarea>
            </div>
            <button class="submit-btn" type="submit">Kirim</button>
        </form>
    </div>
</body>
</html>