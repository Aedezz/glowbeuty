<style>
    html {
        scroll-behavior: smooth;
    }
</style>

<!-- Footer -->
<footer class="relative bg-gray-900 text-white py-12 overflow-hidden">
    <!-- Gradient Overlay -->
    <div class="absolute inset-0 bg-gradient-to-b from-pink-200/30 via-rose-100/20 to-yellow-100/30 opacity-80 pointer-events-none"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <div>
                <h3 class="text-xl font-bold text-pink-400 mb-4">Glowbeuty</h3>
                <p class="text-gray-300">
                    Membawa kecantikan alami ke setiap rumah dengan produk berkualitas tinggi.
                </p>
            </div>
            <div>
                <h4 class="text-lg font-semibold mb-4 text-pink-300">Produk</h4>
                <ul class="space-y-2">
                    <li><a href="#" class="text-gray-400 hover:text-pink-400 transition">Skincare</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-pink-400 transition">Makeup</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-pink-400 transition">Haircare</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-pink-400 transition">Bodycare</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-lg font-semibold mb-4 text-pink-300">Dukungan</h4>
                <ul class="space-y-2">
                    <li><a href="/produk#faq" class="text-gray-400 hover:text-pink-400 transition">FAQ</a></li>
                    <li><a href="/tentang-kami" class="text-gray-400 hover:text-pink-400 transition">Tentang Kami</a></li>
                    <li><a href="/blog" class="text-gray-400 hover:text-pink-400 transition">Blog</a></li>
                    <li><a href="/kontak" class="text-gray-400 hover:text-pink-400 transition">Kontak Kami</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-lg font-semibold mb-4 text-pink-300">Ikuti Kami</h4>
                <div class="flex space-x-4">
                    <!-- Instagram -->
                    <a href="https://www.instagram.com/wpi_ii/" target="_blank"
                       class="text-gray-400 hover:text-pink-500 transition transform hover:scale-110">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M7 2C4.24 2 2 4.24 2 7v10c0 2.76 2.24 5 5 5h10c2.76 0 5-2.24 5-5V7c0-2.76-2.24-5-5-5H7z"/>
                            <path d="M12 8a4 4 0 100 8 4 4 0 000-8z"/>
                            <circle cx="17.5" cy="6.5" r="1.5"/>
                        </svg>
                    </a>
                    <!-- GitHub -->
                    <a href="https://github.com/Aedezz" target="_blank"
                       class="text-gray-400 hover:text-pink-500 transition transform hover:scale-110">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                  d="M12 2C6.48 2 2 6.48 2 12c0 4.42 
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
                                  12c0-5.52-4.48-10-10-10z"
                                  clip-rule="evenodd"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <div class="border-t border-gray-800 mt-8 pt-8 text-center relative z-10">
            <p class="text-gray-400">&copy; 2023 Glowbeuty. All rights reserved.</p>
        </div>
    </div>
</footer>

<!-- JavaScript for FAQ Toggle -->
<script>
    document.querySelectorAll('.faq-item h4').forEach(item => {
        item.addEventListener('click', () => {
            const parent = item.parentElement;
            parent.classList.toggle('active');
        });
    });
</script>
