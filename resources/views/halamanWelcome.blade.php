<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Penerimaan Mahasiswa Baru</title>
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-image: url({{ asset('img/background.jpg') }}); /* Ganti dengan URL gambar latar belakang Anda */
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;
            position: relative;
        }

        nav {
            background-color: rgba(0, 0, 0, 0.7);
            padding: 1rem;
            width: 100%;
            position: absolute;
            top: 0;
            left: 0;
            z-index: 10;
            display: flex;
            justify-content: space-between;
        }

        nav a {
            color: white;
            margin: 0 1rem;
            text-decoration: none;
            font-weight: bold;
        }

        nav a:hover {
            text-decoration: underline;
        }

        main {
            margin-top: 4rem;
        }

        .call-to-action {
            background-color: #3490dc;
            color: white;
            padding: 4rem 0;
            text-align: center;
        }

        .call-to-action h2 {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 1rem;
        }

        .call-to-action p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
        }

        .cta-button {
            background-color: #fff;
            color: #3490dc;
            padding: 1rem 2rem;
            border-radius: 0.25rem;
            font-weight: bold;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .cta-button:hover {
            background-color: #e2e8f0;
        }

        .footer {
            background-color: #2d3748;
            color: white;
            padding: 4rem 0;
            text-align: center;
        }
    </style>
</head>
<body>

    <!-- Navigation -->
    <nav class="bg-blue-500 p-4 text-white">
        <div class="container mx-auto flex justify-between items-center">
            <a href="#" class="text-xl font-semibold">ULBI</a>
            <ul class="flex space-x-4">
                <li><a href="/" class="hover:underline">Home</a></li>
                @if (Route::has('login'))
                    @auth
                       <li><a href="{{ url('/home') }}" class="hover:underline">Home</a></li>
                    @else
                        <li><a href="{{ route('login') }}" class="hover:underline">Log in</a></li>

                        @if (Route::has('register'))
                            <li><a href="{{ route('register') }}" class="hover:underline">Register</a></li>
                        @endif
                    @endauth
                @endif
            </ul>
        </div>
    </nav>

    <!-- Header Section with Background Image -->
    <header>
        <h1 class="text-4xl font-bold mb-4">Welcome to Our University</h1>
        <p class="text-lg mb-8">Explore endless possibilities for your future!</p>
        <a href="https://www.ulbi.ac.id/" class="bg-blue-500 text-white py-2 px-4 rounded-full hover:bg-yellow-700">Apply Now</a>
    </header>

    <!-- Content Section -->
    <main class="container mx-auto my-8 p-4">
        <h2 class="text-2xl font-bold mb-4">Tentang Kampus</h2>
        <p class="text-gray-700 mb-4">Universitas Logistik dan Bisnis Internasional (ULBI) hasil merger dari Politeknik Pos Indonesia (POLTEKPOS) dan Sekolah Tinggi Manajemen Logistik Indonesia (STIMLOG) Berdasarkan Surat Keputusan Menteri Pendidikan, Kebudayaan, Riset, dan Teknologi Republik Indonesia Nomor 334/E/O/2022 yang ditetapkan di Jakarta pada tanggal 24 Mei 2022. ULBI merupakan Perguruan Tinggi Pertama di Indonesia yang berfokus pada keilmuan bidang Logistik, Manajemen Rantai Pasok, E-Commerce, dan Bisnis.

        </p>
        <p class="text-gray-700 mb-4"></p>
        <a href="https://www.ulbi.ac.id/" class="bg-blue-500 text-white py-2 px-4 rounded-full hover:bg-blue-700">Learn More</a>
    </main>

    <!-- Call to Action Section -->
    <section class="call-to-action">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold mb-2">Ready to Join Us?</h2>
            <p class="text-lg mb-4">Apply now to start your educational journey with us!</p>
            <a href="https://www.ulbi.ac.id/" class="cta-button">Apply Now</a>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="footer">
        <div class="container mx-auto">
            <p>&copy; 2023 Our University. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>
