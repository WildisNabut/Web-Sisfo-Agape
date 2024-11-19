

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak SMP Agape Indah</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.css"> <!-- Font-Awesome Icons -->
</head>
<style>
  
/* Kontainer kontak memanjang ke samping */
#kontak {
  background-color: #ffffff;
  padding: 15px;
  width: 100%;
  display: flex;
  flex-direction: column; /* Ubah ke kolom agar lebih rapi */
  gap: 15px;
  justify-content: center;
  align-items: center;
}

#kontak h2 {
  font-size: 18px; /* Ukuran judul lebih kecil */
  color: #333;
  margin-bottom: 12px;
  text-align: center;
}

.contact-container .form-row {

  width: 100%; /* Agar elemen dalam form-row mengisi lebar kontainer */
}

.contact-container label {
  font-weight: bold;
  color: #555;
  font-size: 13px;
  display: block; /* Membuat label berada di atas input */
}

.contact-container .form-control {
  width: 100%; /* Mengatur lebar agar sesuai dengan lebar #kontak */
}

.contact-container .message-box {
  margin-bottom: 10px;
}

.contact-container .message {
  min-height: 80px;
  resize: vertical;
  padding: 8px;
  font-size: 12px;
  width: 100%; /* Mengatur lebar message box agar mengikuti lebar kontainer */
}

.btn-container {
  text-align: center;
  width: 100%; /* Agar tombol sesuai lebar kontainer */
}

.btn-container .btn-primary {
  width: 100%; /* Agar tombol mengikuti lebar kontainer */
}

.btn-container .btn-primary:hover {
  background-color: #0056b3;
}

/* Responsif */
@media (max-width: 768px) {
  #kontak {
    padding: 10px;
    max-width: 100%; /* Lebar penuh di perangkat kecil */
  }
  #kontak h2 {
    font-size: 16px;
  }
  .contact-container .form-control {
    font-size: 11px;
  }
  .btn-container .btn-primary {
    font-size: 11px;
  }
}
.contact-container {
  text-align: center;
  background-color: #fff;
  padding: 30px;


  width: 100%;
}

.contact-container img {
  width: 150px;
  height: auto;
  margin-bottom: 20px;
}
.contact-container h2 {
  font-size: 18px;
  color: #4a3aff;
  margin: 0;
}
.contact-container p {
  font-size: 16px;
  color: #666;
  margin-top: 5px;
}
.contact-container .email {
  font-size: 18px;
  color: #333;
  font-weight: bold;
  margin: 10px 0;
}
.contact-container .button-container {
  display: flex;
  gap: 10px;
  justify-content: center;
  margin-top: 15px;
}
.contact-container button {
  padding: 10px 20px;
  border: none;
  font-size: 14px;
  cursor: pointer;
  color: #fff;
  background-color: #4a3aff;
}
.contact-container button:hover {
  background-color: #382bff;
}

</style>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <div class="Konten">
                    <div class="contact-container">
                        <!-- Gambar animasi -->
                        <img src="https://i.pinimg.com/originals/3b/e2/f4/3be2f445535301ebc8d739576ce8b36d.gif" alt="Animasi Kontak">
                        <h2>Silahkan kontak Email berikut</h2>
                        <p class="email">smpagapeindah22@gmail.com</p>

                        <div class="button-container">
                            <button class="btn btn-primary" onclick="window.location.href='mailto:siteunc22@gmail.com'">Kirim Email</button>
                            <button class="btn btn-success" onclick="window.open('https://wa.me/6282144893442?text=Halo,%20saya%20ingin%20menghubungi%', '_blank')">Hubungi via WhatsApp</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Section -->


    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script> <!-- FontAwesome -->
   
</body>
</html>
