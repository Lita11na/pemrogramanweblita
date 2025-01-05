<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil - Toko Emas Simpati</title>
    <style>
        /* Reset CSS */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Body Styling */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f9f5f0; /* Warna krem lembut */
            color: #333; /* Warna teks */
            line-height: 1.6;
        }

        /* Header */
        header {
            text-align: center;
            padding: 20px;
            background-color: #d4af37; /* Warna emas */
            color: white;
        }

        header h1 {
            font-size: 2.5rem;
        }

        header h2 {
            font-size: 1.2rem;
            font-style: italic;
            margin-top: 10px;
        }

        /* Navigation Bar */
        nav {
            display: flex;
            justify-content: center;
            background-color: #b8860b;
            padding: 10px 0;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-size: 1rem;
            font-weight: bold;
        }

        nav a:hover {
            text-decoration: underline;
        }

        /* Container */
        .container {
            max-width: 1200px;
            margin: 30px auto;
            padding: 20px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        /* Profile Section */
        .profile {
            text-align: center;
            margin-bottom: 30px;
        }

        .profile img {
            width: 150px;
            height: 150px;
            border: 3px solid #d4af37;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 15px;
            transition: transform 0.3s;
        }

        .profile img:hover {
            transform: scale(1.1);
        }

        .profile h2 {
            font-size: 1.5rem;
            color: #b8860b;
            margin-bottom: 10px;
        }

        .profile p {
            font-size: 1rem;
            color: #555;
        }

        /* Product Gallery */
        .product-gallery {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 30px;
        }

        .product-item {
            text-align: center;
            padding: 20px;
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .product-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .product-item img {
            width: 100%;
            height: 150px;
            object-fit: cover;
            margin-bottom: 15px;
            border-radius: 8px;
        }

        .product-item h3 {
            font-size: 1.2rem;
            color: #b8860b;
            margin-bottom: 10px;
        }

        .product-item p {
            font-size: 1rem;
            color: #333;
            margin-bottom: 10px;
        }

        .product-item button {
            background-color: #d4af37;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .product-item button:hover {
            background-color: #b8860b;
        }

        /* Footer */
        footer {
            text-align: center;
            margin-top: 20px;
            padding: 10px;
            background-color: #333;
            color: white;
        }
    </style>
</head>
<body>
    <nav><h1>
        <a href="http://127.0.0.1:8000/">Home</a>
        <a href="http://127.0.0.1:8000/about">About</a>
        <a href="http://127.0.0.1:8000/contact">Contact</a>
        <a href="http://127.0.0.1:8000/profile">Profile</a>
</h1>
    </nav>
</body>

    <header>
        <h1>Profil Toko Emas Simpati</h1>
        <h2>Elegan dan Berkilau untuk Setiap Momen Istimewa</h2>
    </header>

    <div class="container">
        <div class="profile" id="profile">
            <img src="{{ asset('images/profile.jpg') }}" alt="Foto Profil">
            <h2>Toko Emas Simpati</h2>
            <p>Menyediakan perhiasan emas berkualitas tinggi sejak 1990.</p>
        </div>

        <div class="product-gallery">
            <div class="product-item">
                <img src="{{ asset('images/cincinn.jpg') }}" alt="Cincin Emas">
                <h3>Cincin Emas</h3>
                <p>Keindahan yang abadi untuk setiap acara spesial.</p>
                <button>Beli Sekarang</button>
            </div>
            <div class="product-item">
                <img src="{{ asset('images/kalung.jpg') }}" alt="Kalung Emas">
                <h3>Kalung Emas</h3>
                <p>Elegansi yang sempurna untuk menambah pesona Anda.</p>
                <button>Beli Sekarang</button>
            </div>
            <div class="product-item">
                <img src="{{ asset('/images/gelang.jpg') }}" alt="Gelang Emas">
                <h3>Gelang Emas</h3>
                <p>Sentuhan mewah yang tidak pernah gagal memikat.</p>
                <button>Beli Sekarang</button>
            </div>
            <div class="product-item">
                <img src="{{ asset('/images/anting.jpg') }}" alt="Anting Emas">
                <h3>Anting Emas</h3>
                <p>Kecantikan yang memukau dalam setiap detail.</p>
                <button>Beli Sekarang</button>
            </div>
        </div>
    </div>
    <footer>
        &copy; 2025 Toko Emas Simpati. Semua Hak Dilindungi.
    </footer>
</body>
</html>
