<!-- Navbar -->
<nav id="navbar" class="g-white/60 border-b border-white/50 fixed top-0 left-0 w-full z-50 backdrop-blur-md bg-opacity-90 transition-transform duration-500">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- Logo/Brand (Kiri) -->
            <div class="flex-shrink-0">
                <a href="/" class="text-2xl font-bold text-gray-800 hover:text-pink-600">Glowbeuty</a>
            </div>
            
            <!-- Menu Navigasi (Tengah, untuk Desktop) -->
            <div class="hidden md:flex justify-center flex-1">
                <div class="flex items-baseline space-x-4">
                    <a href="/" class="inter font-semibold text-gray-700 hover:text-pink-600 block px-3 py-2 rounded-md text-base">Home</a>
                    <a href="/produk" class="inter font-semibold text-gray-700 hover:text-pink-600 block px-3 py-2 rounded-md text-base">Produk</a>
                    <a href="/tentang" class="inter font-semibold text-gray-700 hover:text-pink-600 block px-3 py-2 rounded-md text-base">Tentang Kami</a>
                    <a href="/blog" class="inter font-semibold text-gray-700 hover:text-pink-600 block px-3 py-2 rounded-md text-base">Blog</a>
                    <a href="/kontak" class="inter font-semibold text-gray-700 hover:text-pink-600 block px-3 py-2 rounded-md text-base">Kontak</a>
                </div>
            </div>
            
            <!-- Tombol Login dan Cart (Kanan, untuk Desktop) -->
            <div class="hidden md:flex items-center space-x-2"> <!-- Tambah flex dan space-x-2 untuk spacing antar tombol -->
                <!-- Tombol Cart (Baru, di sebelah kiri login) -->
                <button id="desktop-cart-button" class="flex items-center bg-white border border-gray-300 rounded-md px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50 hover:text-pink-600 focus:outline-none focus:ring-2 focus:ring-pink-500 transition duration-200">
                    <!-- Icon Cart -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart2" viewBox="0 0 16 16">
                        <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5M3.14 5l1.25 5h8.22l1.25-5zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0m9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0"/>
                    </svg>
                </button>
                
                <!-- Tombol Login (Asli, sekarang di sebelah kanan cart) -->
                <div class="relative">
                    <button id="desktop-login-button" class="flex items-center bg-white border border-gray-300 rounded-md px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50 hover:text-pink-600 focus:outline-none focus:ring-2 focus:ring-pink-500 transition duration-200">
                        <!-- Icon Profile (Kiri dari Text) -->
                        <svg class="w-5 h-5 mr-2 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                        <!-- Text Login -->
                        Login
                    </button>
                    <!-- Dropdown Sub-Menu (Muncul saat Klik) -->
                    <div id="desktop-login-dropdown" class="hidden absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg z-10 border border-gray-200">
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-pink-100 hover:text-pink-600">Login</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-pink-100 hover:text-pink-600">Register</a>
                    </div>
                </div>
            </div>
            
            <!-- Mobile Menu Button (Hamburger, dengan Sub-Menu) -->
            <div class="md:hidden">
                <button id="mobile-menu-button" type="button" class="bg-pink-200 inline-flex items-center justify-center p-2 rounded-md text-gray-700 hover:text-pink-600 hover:bg-pink-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-pink-500">
                    <span class="sr-only">Open main menu</span>
                    <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
        
        <!-- Mobile Menu Dropdown (Muncul saat Hamburger Diklik) -->
        <div id="mobile-menu" class="hidden md:hidden">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 bg-pink-100 rounded-md mt-2">
                <a href="/" class="text-gray-700 hover:text-pink-600 block px-3 py-2 rounded-md text-base font-medium">Home</a>
                <a href="/produk" class="text-gray-700 hover:text-pink-600 block px-3 py-2 rounded-md text-base font-medium">Produk</a>
                <a href="/tentang" class="text-gray-700 hover:text-pink-600 block px-3 py-2 rounded-md text-base font-medium">Tentang Kami</a>
                <a href="/blog" class="text-gray-700 hover:text-pink-600 block px-3 py-2 rounded-md text-base font-medium">Blog</a>
                <a href="/kontak" class="text-gray-700 hover:text-pink-600 block px-3 py-2 rounded-md text-base font-medium">Kontak</a>
                
                <!-- Tambah Link Cart di Mobile (Opsional, untuk konsistensi) -->
                <a href="#" class="text-gray-700 hover:text-pink-600 block px-3 py-2 rounded-md text-base font-medium">Cart</a>
                
                <!-- Sub-Menu untuk Login (Tombol Utama, Klik untuk Toggle Sub) -->
                <div>
                    <button id="login-submenu-button" class="text-gray-700 hover:text-pink-600 block px-3 py-2 rounded-md text-base font-medium w-full text-left">
                        Login
                    </button>
                    <div id="login-submenu" class="hidden ml-4 space-y-1">
                        <a href="#" class="text-gray-600 hover:text-pink-500 block px-3 py-1 rounded-md text-sm">Login</a>
                        <a href="#" class="text-gray-600 hover:text-pink-500 block px-3 py-1 rounded-md text-sm">Register</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>

<script>
    // Navbar Function
    let lastScrollY = window.scrollY;
    const navbar = document.getElementById('navbar');

    window.addEventListener('scroll', () => {
        if (window.scrollY > lastScrollY && window.scrollY > 100) {
            // Scroll ke bawah → sembunyikan navbar
            navbar.style.transform = 'translateY(-100%)';
        } else {
            // Scroll ke atas → tampilkan navbar
            navbar.style.transform = 'translateY(0)';
        }
        lastScrollY = window.scrollY;
    });

    // Toggle Mobile Menu
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    mobileMenuButton.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
    
    // Toggle Sub-Menu Login di Mobile
    const loginSubmenuButton = document.getElementById('login-submenu-button');
    const loginSubmenu = document.getElementById('login-submenu');
    loginSubmenuButton.addEventListener('click', () => {
        loginSubmenu.classList.toggle('hidden');
    });
    
    // Toggle Dropdown Login di Desktop
    const desktopLoginButton = document.getElementById('desktop-login-button');
    const desktopLoginDropdown = document.getElementById('desktop-login-dropdown');
    desktopLoginButton.addEventListener('click', () => {
        desktopLoginDropdown.classList.toggle('hidden');
    });
    
    // Tambah Event untuk Tombol Cart (Opsional: Redirect ke halaman cart atau toggle dropdown)
    const desktopCartButton = document.getElementById('desktop-cart-button');
    desktopCartButton.addEventListener('click', () => {
        // Contoh: Redirect ke halaman cart. Ganti sesuai kebutuhan.
        window.location.href = '#';
        // Atau jika ingin dropdown seperti login, tambahkan div dropdown dan toggle di sini.
    });
    
    // Tutup dropdown jika klik di luar (opsional, untuk UX lebih baik)
    document.addEventListener('click', (e) => {
        if (!desktopLoginButton.contains(e.target) && !desktopLoginDropdown.contains(e.target)) {
            desktopLoginDropdown.classList.add('hidden');
        }
    });
</script>