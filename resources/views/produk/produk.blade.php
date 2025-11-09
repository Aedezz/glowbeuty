<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Koleksi produk Glowbeuty — skincare, makeup, hair & bodycare. Produk berkualitas, ramah kulit, pengiriman cepat.">
  <title>Glowbeuty — Koleksi Produk</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <style>
    :root{
      --accent:#ec4899;--muted:#6b7280;--cream:#f5e6cc;--glass:rgba(255,255,255,0.7);
      font-family:'Inter',system-ui,-apple-system,'Segoe UI',Roboto,'Helvetica Neue',Arial;
    }
    html,body{height:100%;}
    html{scrollbar-width:none}
    html::-webkit-scrollbar{height:0;width:0}
    :focus{outline:2px solid rgba(236,72,153,0.15);outline-offset:2px}
    .media-3-4{aspect-ratio:3/4}
    .smooth{transition:all .28s cubic-bezier(.2,.9,.3,1)}
    .sr-only{position:absolute;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0,0,0,0);white-space:nowrap;border:0}
  </style>
</head>
<body class="bg-white min-h-screen text-gray-800">
  @include('layouts.navbar')

  <main class="pt-8">
    <section class="py-12">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
        <div>
          <h1 class="text-4xl md:text-5xl font-extralight leading-tight text-gray-900 mb-4">Koleksi Produk <span class="text-pink-600 font-semibold">Glowbeuty</span></h1>
          <p class="text-lg text-gray-700 mb-6">Rangkaian produk pilihan — skincare, makeup, haircare & bodycare. Teruji dermatologis, ramah untuk berbagai tipe kulit.</p>
          <div class="flex gap-3 items-center">
            <input id="search" type="search" placeholder="Cari produk atau kategori..." class="w-full md:w-72 px-4 py-2 border rounded-lg focus:ring-2 focus:ring-pink-300" aria-label="Cari produk">
            <button id="searchBtn" class="px-4 py-2 rounded-lg bg-pink-600 text-white hover:bg-pink-700 smooth">Cari</button>
            <button id="clearBtn" class="px-3 py-2 rounded-lg border border-gray-200 bg-white hover:bg-gray-50 smooth">Reset</button>
          </div>
          <p class="text-sm text-gray-500 mt-3">Menampilkan <span id="countDisplay">12</span> produk dari <span id="totalCount">120</span></p>
        </div>
        <div class="hidden lg:block">
          <div class="rounded-2xl overflow-hidden shadow-2xl border border-white/60">
            <img src="https://images.unsplash.com/photo-1522335789203-aabd1fc54bc9?q=80&w=1200&auto=format&fit=crop" alt="Hero Glowbeuty" class="w-full object-cover h-72">
          </div>
        </div>
      </div>
    </section>

    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-8">
      <div class="flex flex-col md:flex-row gap-4 md:items-center md:justify-between">
        <div class="flex gap-3 flex-wrap">
          <button data-cat="all" class="category-btn px-4 py-2 rounded-lg bg-white shadow-sm border smooth">Semua</button>
          <button data-cat="skincare" class="category-btn px-4 py-2 rounded-lg bg-white shadow-sm border smooth">Skincare</button>
          <button data-cat="makeup" class="category-btn px-4 py-2 rounded-lg bg-white shadow-sm border smooth">Makeup</button>
          <button data-cat="hair" class="category-btn px-4 py-2 rounded-lg bg-white shadow-sm border smooth">Haircare</button>
          <button data-cat="body" class="category-btn px-4 py-2 rounded-lg bg-white shadow-sm border smooth">Bodycare</button>
        </div>
        <div class="flex items-center gap-3">
          <label for="sort" class="sr-only">Urutkan</label>
          <select id="sort" class="px-3 py-2 border rounded-lg focus:ring-2 focus:ring-pink-300 smooth">
            <option value="new">Terbaru</option>
            <option value="price-asc">Harga: Rendah ke Tinggi</option>
            <option value="price-desc">Harga: Tinggi ke Rendah</option>
            <option value="rating">Rating Tertinggi</option>
          </select>
        </div>
      </div>  
    </section>

    {{-- Produk --}}
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-6">
      <div id="productsGrid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
        @for ($i = 1; $i <= 8; $i++)
          <!-- Produk 1 -->
          <div class="bg-white shadow-md rounded-xl overflow-hidden transition transform hover:scale-[1.02]">
            <img src="https://plus.unsplash.com/premium_photo-1681364365218-2a882a191f2a?auto=format&fit=crop&q=60&w=600"
                alt="Post {{ $i }}"
                class="w-full h-56 object-cover">
            <div class="p-3">
              <h3 class="text-base font-semibold text-gray-800">Glow Serum</h3>
              <p class="text-sm text-gray-500 mt-1">Serum vitamin C untuk kulit cerah alami.</p>
              <div class="flex items-center justify-between mt-2">
                <span class="text-pink-600 font-bold">Rp120.000</span>
                <span class="text-yellow-500 text-sm">★★★★★</span>
              </div>
              <button class="mt-2 w-full bg-pink-500 text-white py-2 rounded-lg hover:bg-pink-600 transition text-sm">
                Tambah ke Keranjang
              </button>
            </div>
          </div>
        @endfor
      </div>

      {{-- Pagination --}}
      <div class="flex justify-center mt-6">
        <nav class="inline-flex gap-1" role="navigation" aria-label="Pagination">
          <button class="px-3 py-1.5 rounded-lg bg-pink-600 text-white text-sm">1</button>
          <button class="px-3 py-1.5 rounded-lg bg-white border text-sm">2</button>
          <button class="px-3 py-1.5 rounded-lg bg-white border text-sm">3</button>
          <span class="px-3 py-1.5 text-gray-500 text-sm">...</span>
          <button class="px-3 py-1.5 rounded-lg bg-white border text-sm">Next</button>
        </nav>
      </div>
    </section>

      {{-- FAQ --}}
      <section id="faq" class="py-12">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
          <h2 class="text-3xl font-semibold text-center mb-8">Pertanyaan Umum</h2>
          <div class="space-y-4">
            <details class="bg-white p-6 rounded-lg shadow">
              <summary class="cursor-pointer list-none text-lg font-semibold text-pink-600">Apakah produk Glowbeuty aman untuk semua jenis kulit?</summary>
              <div class="mt-3 text-gray-700">Ya — produk kami diformulasikan dengan bahan pilihan dan telah diuji secara dermatologis.</div>
            </details>
            <details class="bg-white p-6 rounded-lg shadow">
              <summary class="cursor-pointer list-none text-lg font-semibold text-pink-600">Berapa lama pengiriman produk?</summary>
              <div class="mt-3 text-gray-700">Pengiriman biasanya 2–5 hari kerja.</div>
            </details>
          </div>
        </div>
      </section>
    </section>
  </main>

  @include('layouts.footer')
</body>
</html>
