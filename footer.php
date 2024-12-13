<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer Example</title>
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
.footer {
    background-color: #273036;
    color: #fff;
    display: flex;
    justify-content: space-around;
    padding: 20px;
    flex-wrap: wrap; /* Memungkinkan elemen untuk dibungkus ke baris berikutnya */
}

.footer div {
    max-width: 300px;
    flex: 1 1 150px; /* Menyusun elemen secara fleksibel, dengan ukuran minimum 200px */
    text-align: justify;
}

.footer h3 {
    color: #8c51ff;
    font-size: 18px;
    margin-bottom: 15px;
}

.footer a {
    color: #ccc;
    text-decoration: none;
    display: block;
    margin-bottom: 8px;
}

.footer a:hover {
    color: #8c51ff;
}

.map-container iframe {
    width: 100%;
    height: 200px;
    border: 0;
}

.social-icons {
    display: flex;
    gap: 10px;
    margin-top: 10px;
}

.social-icons a {
    color: #fff;
    font-size: 24px;
}

.social-icons a:hover {
    color: #8c51ff;
}

.footer-bottom {
    background-color: #fff;
    color: #efeaea !important;
    text-align: center;
    padding: 10px 0;
    font-size: 14px;
}

.footer-bottom {
    background-color: #fff;
    border-top: 2px solid #000;
    padding: 10px;
    text-align: center;
}

.footer-bottom a {
    color: #8c51ff;
    text-decoration: none;
    margin-left: 5px;
}

.footer-bottom a:hover {
    color: #fff;
}

/* Media Query untuk layar kecil */
@media (max-width: 768px) {
    .footer {
        flex-direction: column; /* Elemen footer ditumpuk secara vertikal pada layar kecil */
        align-items: center; /* Pusatkan konten footer */
    }

    .footer div {
        text-align: center; /* Ratakan teks di dalam elemen */
        margin-bottom: 20px; /* Jarak antar elemen */
    }

    .footer .map-container iframe {
        height: 150px; /* Sesuaikan tinggi peta pada layar kecil */
    }

    .social-icons {
        justify-content: center; /* Pusatkan ikon sosial media */
    }

    .footer-bottom {
        font-size: 12px; /* Ukuran font lebih kecil pada layar kecil */
    }
}


/* Animasi garis bawah bergerak dari tengah */
.linkcepat {
  position: relative;
  display: inline-block;
}

.linkcepat::before {
  content: "";
  position: absolute;
  bottom: 0;
  left: 50%;
  width: 0;
  height: 2px;
  background-color: rgb(249 115 22); /* Warna biru */
  transition: all 0.3s ease-in-out;
}

.linkcepat:hover::before {
  left: 0;
  width: 100%;
}
    </style>
</head>
<body>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#273036" fill-opacity="1" d="M0,128L48,149.3C96,171,192,213,288,213.3C384,213,480,171,576,149.3C672,128,768,128,864,122.7C960,117,1056,107,1152,96C1248,85,1344,75,1392,69.3L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
<div class="footer">
    <!-- Map Section -->
    <div class="map-container">
        <h3>Lokasi Kami</h3>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d17445.841308163348!2d123.60862167630117!3d-10.16776760510314!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2c56835992a6fbf3%3A0xc4b28a965a40d8b!2sSekolah%20Menengah%20Pertama%20Agape%20Indah!5e0!3m2!1sid!2sid!4v1730387975655!5m2!1sid!2sid" allowfullscreen="" loading="lazy"></iframe>
    </div>

    <!-- Quick Links Section -->
    <div>
        <h3>Link Cepat</h3>
        <a id="linkcepat" href="index.php">Beranda</a>
        <a id="linkcepat" href="kegiatan.php">Album</a>
        <a id="linkcepat" href="renungan.php">Renungan</a>
        <a id="linkcepat" href="pengumuman.php">Pengumuman</a>
        <a id="linkcepat" href="Profile_sekolah.php">Profil Sekolah</a>
    </div>

    <!-- Contact Us Section -->
    <div class=" email">
        <h3>Kontak Kami</h3>
        <p>📍 Jl. TDM V No.11, Oebufu, Kec. Oebobo, Kota Kupang, Nusa Tenggara Tim. 85228</p>
        <p>📞 +62 821 4489 0529</p>
        <p>✉️ <a href="mailto:agapeindah@gmail.com">agapeindah@gmail.com</a></p>
    </div>

    <!-- About Us Section -->
    <div class="email">
        <h3>Tentang Kami</h3>
        <p>Kirimkan Kami Pesan jika membutuhkan bantuan lebih lanjut<a href="kontak2.php">disini</a></p>
        <div class="social-icons">
            <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
            <a href="https://www.youtube.com/@km5smpkagapeindah_sdnlanaus" target="_blank" aria-label="YouTube"><i class="fab fa-youtube"></i></a>            <a href="#" aria-label="Facebook"><i class="fab fa-facebook"></i></a>
            <a href="#" aria-label="TikTok"><i class="fab fa-tiktok"></i></a>
        </div>
    </div>
</div>
<div class="footer-bottom" style="background-color: #0a0534; color: rgb(2, 12, 40);">
    <p>&copy; Copyright SMP Agape Indah 2024. All Rights Reserved.</p>
</div>
</body>
</html>