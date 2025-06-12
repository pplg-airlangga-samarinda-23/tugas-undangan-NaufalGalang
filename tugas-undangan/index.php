<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Undangan Pernikahan Rudi & Indah</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Playfair Display', serif;
            background-color: #fff5f5;
            color: #333;
            line-height: 1.6;
            text-align: center;
        }

        header#landing-page {
            height: 100vh;
            background: url('img/66ac82c31d9f5490d5ea30f33ed2748d.jpg') no-repeat center center/cover;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        header#landing-page .overlay {
            background: rgba(0, 0, 0, 0.6);
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: #fff;
        }

        header h1 {
            font-size: 3.5rem;
            font-weight: 700;
            margin: 0.5rem 0;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        header h2 {
            font-size: 2rem;
            font-weight: 400;
        }

        section {
            padding: 2rem 1rem;
            max-width: 800px;
            margin: 0 auto;
        }

        h2 {
            font-size: 2rem;
            color: #6b4e31;
            margin-bottom: 1rem;
        }

        .detail-acara {
            background: #fff;
            border-radius: 10px;
            padding: 2rem;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 2rem;
        }

        .detail-acara p {
            font-size: 1.2rem;
            margin: 0.5rem 0;
        }

        #rsvp form {
            display: flex;
            flex-direction: column;
            gap: 1rem;
            max-width: 500px;
            margin: 1rem auto;
        }

        #rsvp input, #rsvp textarea, #rsvp select {
            padding: 0.8rem;
            font-size: 1rem;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 100%;
            font-family: Arial, sans-serif;
        }

        #rsvp textarea {
            resize: vertical;
        }

        #rsvp button {
            padding: 0.8rem;
            background: #6b4e31;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1.1rem;
            transition: background 0.3s;
        }

        #rsvp button:hover {
            background: #8b6f47;
        }

        .guestbook {
            max-height: 300px;
            overflow-y: auto;
            margin: 1rem auto;
            padding: 1rem;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .guestbook div {
            border: 1px solid #ccc;
            padding: 1rem;
            margin-bottom: 1rem;
            border-radius: 5px;
        }

        .map-container {
            margin: 2rem auto;
        }

        iframe {
            width: 100%;
            max-width: 600px;
            height: 350px;
            border-radius: 10px;
        }

        footer {
            background: #6b4e31;
            color: #fff;
            padding: 1rem;
            margin-top: 2rem;
        }

        @media (max-width: 600px) {
            header h1 {
                font-size: 2.5rem;
            }

            header h2 {
                font-size: 1.5rem;
            }

            .countdown {
                flex-direction: column;
                font-size: 1.2rem;
            }

            .countdown div {
                min-width: 60px;
            }
        }
    </style>
</head>
<body>
    <header id="landing-page">
        <div class="overlay">
            <h1>Rudi & Indah</h1>
            <h2>Undangan Pernikahan</h2>
        </div>
    </header>

    <section class="detail-acara">
        <h2>Detail Acara</h2>
        <p>Tanggal: 21 Januari 2080</p>
        <p>Lokasi: Ks.tubun Street</p>
        <p>Waktu: 07:00 WIB</p>
    </section>

    <section class="map-container">
        <iframe width="425" height="350" src="https://www.openstreetmap.org/export/embed.html?bbox=117.13827431201936%2C-0.49494187386439903%2C117.14329540729524%2C-0.4913210258088039&layer=mapnik" style="border: 1px solid black"></iframe>
        <br><small><a href="https://www.openstreetmap.org/#map=18/-0.493131/117.140785">Lihat Peta Lebih Besar</a></small>
    </section>

    <section id="rsvp">
        <h2>RSVP</h2>
        <p>Berikan ucapan & doa untuk kedua mempelai serta konfirmasi kehadiran</p>
        <form action="insert.php" method="post">
            <input type="text" name="nama" placeholder="Nama" required>
            <textarea name="ucapan" rows="5" placeholder="Ucapan" required></textarea>
            <select name="keterangan" required>
                <option value="1">Hadir</option>
                <option value="2">Tidak Hadir</option>
                <option value="3">Belum Tahu</option>
            </select>
            <button type="submit">KIRIM</button>
        </form>

        <div class="guestbook">
            <?php
            include 'koneksi.php';
            $SQL2 = "SELECT * FROM bukutamu ORDER BY id DESC";
            $hasil = $connection->query($SQL2);
            while ($baris = $hasil->fetch_row()) {
                echo "<div><p style='font-weight: bold;'>{$baris[1]}</p><p>{$baris[2]}</p></div>";
            }
            $hasil->free_result();
            ?>
        </div>
    </section>

    <footer>
        <p>© 2080 Undangan Pernikahan Kami</p>
    </footer>

    <audio autoplay loop>
        <source src="Kevin_MacLeod_-_Canon_in_D_Major(chosic.com).mp3" type="audio/mpeg">
        Browser Anda tidak mendukung pemutar audio.
    </audio>

</body>
</html>