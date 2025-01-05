<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile - Toko Emas</title>
    <style>
        /* Global Styles */
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            background-color: #f8f3e7;
            color: #333;
        }

        /* Header Styling */
        header {
            background-color: #d4af37;
            color: white;
            padding: 20px;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        header h1 {
            margin: 0;
            font-size: 2.5em;
            font-weight: bold;
        }

        /* Profile Section */
        .profile-container {
            max-width: 800px;
            margin: 30px auto;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            overflow: hidden;
        }

        .profile-header {
            background-color: #f1e5c8;
            padding: 20px;
            text-align: center;
            border-bottom: 2px solid #d4af37;
        }

        .profile-header img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            border: 4px solid #d4af37;
        }

        .profile-header h2 {
            margin: 15px 0 5px;
            font-size: 1.8em;
        }

        .profile-header p {
            margin: 0;
            font-size: 1.2em;
            color: #777;
        }

        /* Profile Details */
        .profile-details {
            padding: 20px;
            line-height: 1.6;
        }

        .profile-details h3 {
            color: #d4af37;
            margin-bottom: 10px;
        }

        .profile-details p {
            margin: 0 0 10px;
        }

        /* Footer */
        footer {
            text-align: center;
            padding: 10px;
            background-color: #d4af37;
            color: white;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        footer p {
            margin: 0;
            font-size: 0.9em;
        }

        /* Responsive Design */
        @media (max-width: 600px) {
            header h1 {
                font-size: 2em;
            }

            .profile-header h2 {
                font-size: 1.5em;
            }

            .profile-details {
                padding: 15px;
            }
        }
    </style>
</head>
<body>

<header>
    <h1>Profil Pemilik Toko Emas</h1>
</header>

<div class="profile-container">
    <div class="profile-header">
        <img src="images/profile.jpg" alt="Foto Pemilik">
        <h2>Nama Pemilik</h2>
        <p>Pemilik Toko Emas Berjaya</p>
    </div>
    <div class="profile-details">
        <h3>Tentang Saya</h3>
        <p>Saya adalah pemilik Toko Emas Berjaya yang telah berdiri sejak tahun 2000. Dengan pengalaman lebih dari 20 tahun, kami menyediakan perhiasan emas berkualitas tinggi untuk pelanggan kami.</p>
        <h3>Informasi Kontak</h3>
        <p><strong>Email:</strong> pemilik@tokoemasberjaya.com</p>
        <p><strong>Telepon:</strong> +62 812 3456 7890</p>
        <p><strong>Alamat:</strong> Jalan Mulia No. 123, Kota Emas, Indonesia</p>
    </div>
</div>

<footer>
    <p>&copy; 2025 Toko Emas Berjaya. All Rights Reserved.</p>
</footer>

</body>
</html>
