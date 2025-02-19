<!-- Struktur dasar dokumen HTML -->
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Metadata dan pengaturan tampilan responsif -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Menghubungkan ikon dari Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
    
    <title>My Profile</title>
    
    <!-- Menghubungkan stylesheet eksternal -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body>
    <section>
        <!-- Container utama yang membungkus konten utama -->
        <div class="main-container">
            
            <!-- Bagian untuk menampilkan gambar profil -->
            <div class="image " data-aos="zoom-in-right" data-aos-duration="2500" style="width: 40%; height:40%">
                <img src="{{ asset('foto/Profile.jpg') }}">
            </div>
            
            <!-- Bagian konten teks -->
            <div class="content">
                <h1 data-aos="fade-left" data-aos-duration="1000" data-aos-delay="800">
                    Hey I'm <span>Tutut Handayani</span>
                </h1>
                
                <h2 data-aos="fade-left" data-aos-duration="1000" data-aos-delay="800">
                    I'm a <span>This is the story of the last Child</span>
                </h2>
                
                <h3 data-aos="fade-left" data-aos-duration="1000" data-aos-delay="800">
                    <span>Indramayu, 20 Juni 2006</span>
                </h3>
                
                <div>
                    <h3 data-aos="fade-left" data-aos-duration="1000" data-aos-delay="1000">
                        Hallo aku adalah anak terakhir dari 4 bersaudara, Harapan terakhir keluarga meskipun itu sulit untuk aku,
                        tapi aku selalu berusaha yang terbaik untuk mengangkat derajat orang tua.
                    </h3>
                </div>
                
                <!-- Ikon media sosial -->
                <div class="social-links" data-aos="flip-down" data-aos-duration="1000" data-aos-delay="1200">
                    <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fa-brands fa-github"></i></a>
                    <a href="#"><i class="fa-brands fa-telegram"></i></a>
                </div>
                
                <!-- Tombol profil -->
                <div class="btn" data-aos="zoom-out-left" data-aos-duration="1000" data-aos-delay="1300">
                    <button>My Profile</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Menghubungkan pustaka animasi AOS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            offset: 0
        });
    </script>

    <!-- Skrip untuk navigasi dropdown -->
    <script>
        function hamburg() {
            const navbar = document.querySelector(".dropdown");
            navbar.style.transform = "translateY(0px)";
        }

        function cancel() {
            const navbar = document.querySelector(".dropdown");
            navbar.style.transform = "translateY(-500px)";
        }
    </script>

    <style>
        /* Reset margin dan padding */
        * {
            padding: 0;
            margin: 0;
            font-family: 'Poppins', sans-serif;
            box-sizing: border-box;
        }

        /* Menyembunyikan overflow horizontal */
        html {
            overflow-x: hidden;
        }

        /* Styling untuk body dengan gradient background */
        body {
            width: 100%;
            height: 100vh;
            overflow: hidden;
            background: linear-gradient(to right, rgb(255, 255, 255), rgb(254, 215, 173));
        }

        /* Navigasi */
        nav {
            width: 100%;
            height: 10vh;
            position: sticky;
        }

        /* Container utama */
        .main-container {
            margin-top: 1rem;
            display: flex;
            justify-content: space-evenly;
            align-items: center;
        }

        /* Styling untuk gambar */
        .main-container .image {
            z-index: -1;
            width: 50%;
        }

        .main-container .image img {
            width: 100%;
        }

        /* Konten teks */
        .main-container .content {
            color: black;
            width: 40%;
            min-height: 100px;
        }

        .content h1 {
            font-size: clamp(1rem, 2rem + 5vw, 3rem);
        }

        .content h1 span {
            color: rgb(109, 67, 0);
            text-shadow: 0 0 10px rgb(109, 67, 0);
        }

        /* Media sosial */
        .social-links i {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            width: 3rem;
            height: 3rem;
            background-color: transparent;
            border: 0.2rem solid rgb(109, 67, 0);
            border-radius: 50%;
            color: rgb(109, 67, 0);
            margin: 5px 10px;
            font-size: 1.5rem;
            transition: 0.2s linear;
        }

        .social-links i:hover {
            scale: 1.3;
            color: white;
            background-color: rgb(109, 67, 0);
            filter: drop-shadow(0 0 10px rgb(109, 67, 0));
        }

        /* Tombol profil */
        .content button {
            width: 40%;
            height: 6vh;
            margin: 30px;
            background-color: rgb(109, 67, 0);
            color: white;
            border: none;
            outline: none;
            font-size: 100%;
            font-weight: 700;
            border-radius: 5px;
            transition: 0.2s linear;
        }

        .content button:hover {
            scale: 1.1;
            color: rgb(109, 67, 0);
            border: 2px solid rgb(109, 67, 0);
            background-color: transparent;
            font-weight: 700;
            box-shadow: 0 0 40px rgb(109, 67, 0);
        }
    </style>
</body>

</html>
