<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Undangan Pernikahan Rudi Dan Indah</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header id="landing-page">
        <div class="overlay">
            <h1>Rudi Dan Indah</h1>
            <h1>Undangan Pernikahan</h1>
        </div>
    </header>

    <section class="wedding-details">
        <h2>Detail Acara</h2>
        <p>Tanggal: 21 Januari 2080</p>
        <p>Lokasi: Ks.tubun Street</p>
        <p>Waktu Dimulai Jam: 7.00 WIB</p>
    </section>

    <section class="countdown">
        <h2></h2>
        <div id="countdown"></div>
    </section>
    </section>

    <section>
        <iframe width="425" height="350" src="https://www.openstreetmap.org/export/embed.html?bbox=117.13827431201936%2C-0.49494187386439903%2C117.14329540729524%2C-0.4913210258088039&amp;layer=mapnik" style="border: 1px solid black"></iframe><br /><small><a href="https://www.openstreetmap.org/#map=18/-0.493131/117.140785">View Larger Map</a></small>
    </section>
    <section id="rsvp">
        <h2>RSVP</h2>
        <p>Berikan ucapan harapan & do'a kepada kedua mempelai serta konfirmasi kehadiran</p>

        <form action="insert.php" method="post">
            <input type="text" name="nama" placeholder="Nama" required> <br>
            <textarea name="ucapan" cols="20" rows="5" placeholder="Ucapan" required></textarea> <br>
            <select name="keterangan" required>
                <option value="1">Ya</option>
                <option value="2">Tidak Hadir</option>
                <option value="3">Tidak Tahu</option>
            </select>
            <button type="submit">KIRIM</button>
        </form>

        <?php
        include 'koneksi.php';
        $SQL2 = "SELECT * FROM bukutamu ORDER BY id DESC";
        $hasil = $connection->query($SQL2);
        ?>
        <div style="height:200px; width:300px; overflow:scroll; margin:'10px auto';">
            <?php
            while ($baris = $hasil->fetch_row()) {
            ?>
                <div style="border-style:solid; border-color:black; margin:10px auto;">
                    <p style="font-weight:bold;"><?= $baris[1] ?></p>
                    <p><?= $baris[2] ?></p>
                </div>
        </div>
    <?php
            }

            $hasil->free_result();
    ?>
    </div>
    </section>

    <footer>
        <p>&copy; 2080 Undangan Pernikahan Kami</p>
    </footer>
    <audio autoplay loop>
        <source src="Kevin_MacLeod_-_Canon_in_D_Major(chosic.com).mp3" type="audio/mpeg">
        Browser Anda tidak mendukung pemutar audio.
    </audio>

</body>

</html>