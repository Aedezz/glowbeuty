<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Glowbeuty - Contact</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style>
        html, body {
            overflow-x: hidden;
            scrollbar-width: none;
        }
        html::-webkit-scrollbar {
            display: none;
        }
        .nav-link {
            position: relative;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 0;
            height: 2px;
            background-color: #ec4899;
            transition: width 0.3s ease, left 0.3s ease;
        }
        .nav-link:hover::after {
            width: 100%;
            left: 0;
        }
        /* Glass effect */
        .glass {
            background: rgba(255, 255, 255, 0.25);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
        /* Floating animation for icons */
        .float {
            animation: float 4s ease-in-out infinite;
        }
        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-8px); }
        }
    </style>
</head>

<body class="relative text-gray-800">

    <!-- Navbar -->
    @include('layouts.navbar')

    <!-- Contact Section -->
    <main class="relative z-10 pt-32 pb-20 mx-auto px-6">
        <section class="text-center mb-12">
            <h1 class="text-6xl mt-[-50px] font-extrabold leading-relaxed bg-clip-text text-transparent bg-gradient-to-r from-pink-500 via-rose-400 to-yellow-400">
                Hubungi Kami
            </h1>
            <p class="text-lg text-gray-700 mt-4 mx-auto">
                Ada pertanyaan atau ingin berkolaborasi? Kami senang mendengarnya 💌
            </p>
        </section>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
            <!-- Form Section -->
            <div class="glass rounded-2xl shadow-2xl p-8 border border-pink-200">
                <h2 class="text-2xl font-semibold text-pink-700 mb-6">Kirim Pesan</h2>
                <form action="#" method="POST" class="space-y-5">
                    <div>
                        <label for="name" class="block text-gray-700 font-medium">Nama Lengkap</label>
                        <input id="name" type="text" name="name"
                               class="w-full mt-2 px-4 py-2.5 rounded-xl border border-pink-300 focus:ring-2 focus:ring-pink-400 outline-none bg-white/60"
                               placeholder="Masukkan nama anda" required>
                    </div>
                    <div>
                        <label for="email" class="block text-gray-700 font-medium">Email</label>
                        <input id="email" type="email" name="email"
                               class="w-full mt-2 px-4 py-2.5 rounded-xl border border-pink-300 focus:ring-2 focus:ring-pink-400 outline-none bg-white/60"
                               placeholder="nama@email.com" required>
                    </div>
                    <div>
                        <label for="message" class="block text-gray-700 font-medium">Pesan</label>
                        <textarea id="message" name="message" rows="5"
                                  class="w-full mt-2 px-4 py-2.5 rounded-xl border border-pink-300 focus:ring-2 focus:ring-pink-400 outline-none bg-white/60"
                                  placeholder="Tulis pesan anda..." required></textarea>
                    </div>
                    <button type="submit"
                            class="w-full bg-gradient-to-r from-pink-500 to-rose-400 hover:from-pink-600 hover:to-rose-500 text-white font-semibold py-3 rounded-xl transition-all duration-300 transform hover:scale-[1.02] shadow-lg">
                        Kirim Sekarang
                    </button>
                </form>
            </div>

            <!-- Contact Info -->
            <div class="glass rounded-2xl shadow-2xl p-8 border border-pink-200">
                <h2 class="text-2xl font-semibold text-pink-700 mb-6">Informasi Kontak</h2>

                <div class="space-y-6 text-gray-700">
                    <div class="flex items-center space-x-4">
                        <div class="float text-pink-500">
                            <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="font-medium">Email</p>
                            <p class="text-gray-600">info@glowbeuty.com</p>
                        </div>
                    </div>

                    <div class="flex items-center space-x-4">
                        <div class="float text-pink-500">
                            <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="font-medium">Telepon</p>
                            <p class="text-gray-600">+62 812-3456-7890</p>
                        </div>
                    </div>

                    <div class="flex items-center space-x-4">
                        <div class="float text-pink-500">
                            <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="font-medium">Alamat</p>
                            <p class="text-gray-600">Jl. Kecantikan No. 123, Jakarta, Indonesia</p>
                        </div>
                    </div>
                </div>

                <!-- Social Media -->
                <div class="mt-8">
                    <h3 class="text-lg font-semibold text-pink-700 mb-3">Ikuti Kami</h3>
                    <div class="flex space-x-5">
                        <a href="https://www.instagram.com/wpi_ii/" target="_blank" class="text-pink-400 hover:text-pink-600 transition transform hover:scale-110">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M7 2C4.24 2 2 4.24 2 7v10c0 2.76 2.24 5 5 5h10c2.76 0 5-2.24 5-5V7c0-2.76-2.24-5-5-5H7z"/>
                            <path d="M12 8a4 4 0 100 8 4 4 0 000-8z"/>
                            <circle cx="17.5" cy="6.5" r="1.5"/>
                        </svg>
                        </a>
                        <a href="https://github.com/Aedezz" target="_blank"
                            class="text-pink-400 hover:text-pink-600 transition transform hover:scale-110">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M12 2C6.48 2 2 6.48 2 12c0 4.42 
                            2.87 8.17 6.84 9.5.5.09.68-.22.68-.48 
                            0-.24-.01-.87-.01-1.7-2.78.61-3.37-1.34-3.37-1.34-.45-1.16-1.1-1.47-1.1-1.47-.9-.61.07-.6.07-.6 
                            1 .07 1.53 1.04 1.53 1.04.89 1.53 2.34 1.09 2.91.83.09-.65.35-1.09.63-1.34-2.22-.25-4.56-1.11-4.56-4.93 
                            0-1.09.39-1.98 1.03-2.68-.1-.25-.45-1.27.1-2.64 0 0 .84-.27 
                            2.75 1.03A9.564 9.564 0 0112 6.8c.85.004 
                            1.7.115 2.5.337 1.9-1.3 2.74-1.03 
                            2.74-1.03.56 1.37.21 2.39.1 
                            2.64.64.7 1.03 1.59 1.03 2.68 
                            0 3.83-2.34 4.67-4.57 4.92.36.31.68.92.68 
                            1.85 0 1.34-.01 2.42-.01 2.75 
                            0 .26.18.58.69.48A10.004 10.004 0 0022 
                            12c0-5.52-4.48-10-10-10z" clip-rule="evenodd"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    @include('layouts.footer')

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/a2e0b5b6a4.js" crossorigin="anonymous"></script>
</body>
</html>
