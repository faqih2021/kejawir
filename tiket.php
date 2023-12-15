<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Tiket</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .tiket-form {
            width: 300px;
            margin: 0 auto;
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
                <li><a href="#tiket">Tiket</a></li>
                <li><a href="kontak.php">Kontak</a></li>
            </ul>
        </nav>
    </header>
<body>
    <h1>Isi detail kamu dulu yuk</h1>
    <form class="tiket-form">
        <input class="form-control" type="text" name="nama" placeholder="Nama" required>
        <input class="form-control" type="email" name="email" placeholder="Email" required>
        <input class="form-control" type="tel" name="telepon" placeholder="Telepon" required>
        <input class="form-control" type="text" name="alamat" placeholder="Alamat" required>
        <input class="form-control" type="number" name="jumlah_tiket" placeholder="Jumlah Tiket" required>
        <input class="form-control" type="date" name="tanggal_keberangkatan" placeholder="Tanggal Keberangkatan" required>
        <button class="submit-btn" type="submit">Order</button>
    </form>
</body>
</html>