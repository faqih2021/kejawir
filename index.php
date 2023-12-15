<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bromo Trip Ticketing</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>
<body>
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
    <main>
        <section id="home">
            <h2>Selamat datang di Kelompok 1 FP Bromo Trip Ticketing</h2>
            <p>Buruan booking tiket perjalanan bromo-mu sekarang juga !</p>
        </section>
        <section id="paket">
            <h2>Paket Trip</h2>
            <ul>
                <li>
                    <h3>Paket Basic</h3>
                    <p>Paket standard ajah, yang murmer murmer penting gas bromo duls</p>
                </li>
                <li>
                    <h3>Paket Elite</h3>
                    <p>Paket nayamul untuk bikin konten sih ini</p>
                </li>
                <li>
                    <h3>Paket Stellar</h3>
                    <p>The real trip, gausah repot. apa apa udah diatur vendor</p>
                </li>
            </ul>
        </section>
        <section id="tiket">
            <h2>Bisa Langsung Pesan Tiket Disini ya, atau ke menu Tiket juga bisa</h2>
            <form action="proses.php" method="post">
                <label for="nama">Nama Lengkap:</label>
                <input type="text" id="nama" name="nama" required>
                
                <label for="paket">Pilih Paket:</label>
                <select id="paket" name="paket" required>
                    <option value="">Pilih Paket</option>
                    <option value="paket1">Paket Basic</option>
                    <option value="paket2">Paket Elite</option>
                    <option value="paket3">Paket Stellar</option>
                </select>
                
                <label for="tanggal">Tanggal Berangkat:</label>
                <input type="date" id="tanggal" name="tanggal" required>
                
                <label for="jumlah">Jumlah Tiket:</label>
                <input type="number" id="jumlah" name="jumlah" min="1" required>
                
                <input type="submit" value="Pesan Tiket">
            </form>
        </section>
        <section id="kontak">
            <h2>Kontak</h2>
            <p>Email: rachmawanakbar4@gmail.com</p>
            <p>Telepon: +62 811 333 2212</p>
        </section>
    </main>
    <footer>
        <p>&copy; 2022 Bromo Trip Kelompok 1 Pemrograman Web ITTS. All rights reserved.</p>
    </footer>
</body>
</html>