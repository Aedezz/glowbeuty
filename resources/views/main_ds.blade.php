<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Glowbeuty — Koleksi skincare & makeup premium. Produk teruji dermatologis untuk kulit sehat dan glowing.">
  <meta property="og:title" content="Glowbeuty — Skincare & Makeup" />
  <meta property="og:description" content="Koleksi skincare premium untuk kulit sehat dan glowing alami." />
  <meta property="og:image" content="{{ asset('images/og-cover.jpg') }}" />
  <meta name="twitter:card" content="summary_large_image">
  <title>Glowbeuty — Koleksi Produk</title>

  <!-- Fonts & Tailwind (browser build) -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&family=Playfair+Display:wght@400;600&display=swap" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

  <!-- Minimal custom styles for premium look -->
  <style>
    :root{
      --accent:#ec4899; /* primary pink */
      --cream:#f5e6cc; /* vanilla */
      --muted:#6b7280;
      --glass: rgba(255,255,255,0.6);
      font-family: 'Inter', system-ui, -apple-system, 'Segoe UI', Roboto, 'Helvetica Neue', Arial;
    }

    /* global helpers */
    html,body{height:100%;}
    html{scrollbar-width:none}
    html::-webkit-scrollbar{width:0;height:0}
    .smooth{transition:all .35s cubic-bezier(.2,.9,.3,1)}

    /* heading font */
    h1,h2,h3{font-family:'Playfair Display', serif}

    /* frosted glass card */
    .frosted{background:linear-gradient(180deg, rgba(255,255,255,0.7), rgba(255,255,255,0.55)); backdrop-filter: blur(6px);}

    /* product image container for consistent ratio */
    .ratio-3-4{aspect-ratio:3/4}

    /* subtle hover tilt */
    .tilt:hover{transform:translateY(-6px) rotateX(3deg) rotateY(-2deg);}

    /* overlay buttons */
    .card-overlay{background:linear-gradient(180deg, rgba(0,0,0,0) 40%, rgba(0,0,0,0.35) 100%);}

    /* hero animations */
    .hero-fade{opacity:0;transform:translateY(8px);transition:opacity .6s ease, transform .6s ease}
    .hero-fade.show{opacity:1;transform:none}

    /* accessible focus */
    :focus{outline:2px solid rgba(236,72,153,0.15);outline-offset:2px}

    /* small utilities */
    .badge{background:linear-gradient(90deg,var(--accent),#f472b6);color:white;padding:.25rem .5rem;border-radius:.5rem;font-weight:600}

    /* Tambahan untuk mengecilkan kartu produk */
    .product-card {
      transform-origin: center;
      transition: transform 0.25s ease, box-shadow 0.25s ease;
    }
    .product-card:hover {
      transform: scale(1.03);
    }

    /* Ukuran konten di dalam kartu */
    .product-card .p-3 {
      padding: 0.75rem !important; /* kecilkan padding dalam */
    }

    /* Kecilkan ukuran font dalam kartu */
    .product-card h3 {
      font-size: 1rem; /* semula text-lg */
    }
    .product-card p {
      font-size: 0.875rem;
    }


    /* grid lebih padat */
    @media (min-width: 768px) {
      .grid.products {
        grid-template-columns: repeat(3, minmax(0, 1fr));
        gap: 1.25rem; /* sedikit lebih rapat */
      }
    }
    @media (min-width: 1280px) {
      .grid.products {
        grid-template-columns: repeat(4, minmax(0, 1fr));
      }
    }
  </style>
</head>
<body class="bg-white min-h-screen text-gray-800">

  {{-- NAVBAR (gunakan layout kamu) --}}
  @include('layouts.navbar')

  <!-- HERO -->
  <header class="relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center pt-16 pb-10">
        <div>
          <h1 class="text-4xl md:text-5xl font-extralight text-gray-900 leading-tight mb-4 hero-fade" id="heroTitle">Glowbeuty — Cantik, Lembut, Terasa</h1>
          <p class="text-lg text-gray-700 mb-6 hero-fade" id="heroSubtitle">Rangkaian skincare & makeup premium. Formulasi bersih, teruji dermatologis, untuk kulit sehat dan glowing alami.</p>

          <div class="flex gap-3 items-center mb-6 hero-fade">
            <input id="search" type="search" placeholder="Cari produk, misal: serum, toner..." class="w-full md:w-80 px-4 py-3 border rounded-lg focus:ring-2 focus:ring-pink-200" aria-label="Cari produk">
            <button id="searchBtn" class="px-4 py-3 rounded-lg bg-pink-600 text-white hover:bg-pink-700 smooth">Cari</button>
            <a href="#products" class="px-4 py-3 rounded-lg border border-pink-200 text-pink-700 hover:bg-pink-50 smooth">Lihat Semua</a>
          </div>

          <div class="flex gap-4 items-center hero-fade">
            <div class="flex items-center gap-2">
              <div class="w-10 h-10 rounded-full bg-pink-100 flex items-center justify-center">🌿</div>
              <div>
                <div class="text-sm text-gray-600">Dermatologically</div>
                <div class="text-sm font-medium text-gray-800">Tested & Safe</div>
              </div>
            </div>

            <div class="flex items-center gap-2">
              <div class="w-10 h-10 rounded-full bg-cream flex items-center justify-center">⭐</div>
              <div>
                <div class="text-sm text-gray-600">Top Rated</div>
                <div class="text-sm font-medium text-gray-800">4.8 / 5</div>
              </div>
            </div>
          </div>
        </div>

        <!-- HERO IMAGE & CTA -->
        <div class="hidden lg:block relative">
          <div class="rounded-2xl overflow-hidden shadow-2xl border border-white/60">
            <img src="https://plus.unsplash.com/premium_photo-1661583853451-2361111f284f?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8c2tpbiUyMGNhcmUlMjBwcm9kdWN0c3xlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&q=60&w=600" alt="Hero Glowbeuty" class="w-full object-cover h-72">
            <div class="absolute bottom-6 left-6 bg-white/70 backdrop-blur-md rounded-xl p-4">
              <h3 class="text-lg font-semibold">Promo Bundling</h3>
              <p class="text-sm text-gray-700">Diskon 20% untuk pembelian paket skincare lengkap.</p>
              <a href="#" class="inline-block mt-3 px-4 py-2 bg-pink-600 text-white rounded-lg">Beli Sekarang</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Decorative divider -->
    <div class="absolute inset-x-0 bottom-0 -mb-2">
      <svg viewBox="0 0 1440 60" class="w-full" preserveAspectRatio="none"><path d="M0 0h1440v60H0z" fill="url(#g)"/></svg>
    </div>
  </header>

  <!-- FILTERS + PRODUCTS -->
  <main id="products" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-6">
      <div class="flex gap-3 flex-wrap">
        <button class="px-4 py-2 rounded-lg bg-white shadow-sm border smooth">Semua</button>
        <button class="px-4 py-2 rounded-lg bg-white shadow-sm border smooth">Skincare</button>
        <button class="px-4 py-2 rounded-lg bg-white shadow-sm border smooth">Makeup</button>
        <button class="px-4 py-2 rounded-lg bg-white shadow-sm border smooth">Haircare</button>
        <button class="px-4 py-2 rounded-lg bg-white shadow-sm border smooth">Bodycare</button>
      </div>

      <div class="flex items-center gap-3">
        <label for="sort" class="sr-only">Urutkan</label>
        <select id="sort" class="px-3 py-2 border rounded-lg focus:ring-2 focus:ring-pink-200">
          <option value="new">Terbaru</option>
          <option value="price-asc">Harga: Rendah ke Tinggi</option>
          <option value="price-desc">Harga: Tinggi ke Rendah</option>
          <option value="rating">Rating Tertinggi</option>
        </select>
      </div>
    </div>

    <!-- Produk Grid -->
    <div class="grid products grid-cols-1 sm:grid-cols-2 gap-6 mb-8">
      @for ($i = 1; $i <= 8; $i++)
      <article class="product-card frosted rounded-2xl overflow-hidden shadow-lg p-3 tilt smooth" tabindex="0" aria-labelledby="p1">
        <div class="relative ratio-3-4 rounded-md overflow-hidden">
          <img loading="lazy" src="https://plus.unsplash.com/premium_photo-1681364365218-2a882a191f2a?ixlib=rb-4.1.0&auto=format&fit=crop&q=60&w=600" alt="Glow Serum" class="w-full h-full object-cover">
          <div class="absolute inset-0 flex items-end p-4 card-overlay">
            <div class="w-full flex justify-between items-end">
              <span class="badge">Bestseller</span>
              <button class="bg-white/80 py-2 px-3 rounded-lg text-sm">Quick View</button>
            </div>
          </div>
        </div>
        <div class="p-3">
          <h3 id="p1" class="font-semibold text-gray-900">Glow Serum</h3>
          <p class="text-gray-600 mt-1">Serum vitamin C & niacinamide untuk mencerahkan dan meratakan warna kulit.</p>
          <div class="flex items-center justify-between mt-3">
            <div>
              <div class="text-xl font-bold text-pink-600">Rp 120.000</div>
              <div class="text-xs text-gray-500">Gratis ongkir di atas Rp300.000</div>
            </div>
            <div class="text-sm text-yellow-400">★★★★★ <span class="text-gray-500 text-xs">4.8</span></div>
          </div>
          <div class="mt-3 grid grid-cols-2 gap-2">
            <button class="bg-pink-600 text-white py-2 rounded-lg text-sm">Tambah</button>
            <a href="/detail" class="border border-pink-200 py-2 rounded-lg text-center text-sm">Detail</a>
          </div>
        </div>
      </article>
      @endfor
    </div>

    <!-- Pagination simple -->
    <div class="flex justify-center mt-6">
      <nav class="inline-flex gap-2" aria-label="Pagination">
        <button class="px-4 py-2 rounded-lg bg-pink-600 text-white">1</button>
        <button class="px-4 py-2 rounded-lg bg-white border">2</button>
        <button class="px-4 py-2 rounded-lg bg-white border">Next</button>
      </nav>
    </div>

    <!-- Testimonials -->
    <section class="mt-12 bg-gradient-to-r from-pink-50 to-yellow-50 p-8 rounded-2xl">
      <h2 class="text-3xl font-semibold text-center mb-6">Apa Kata Mereka</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white p-6 rounded-xl shadow text-center">
          <img src="{{ asset('images/abcd.png') }}" alt="Sari" class="w-16 h-16 rounded-full mx-auto mb-3">
          <p class="text-gray-700 mb-3">"Serumnya ringan tapi hasilnya nyata — kulit jadi lebih cerah dalam 2 minggu."</p>
          <p class="text-pink-600 font-semibold">— Sari, Jakarta</p>
        </div>
        <div class="bg-white p-6 rounded-xl shadow text-center">
          <img src="{{ asset('images/abcd.png') }}" alt="Maya" class="w-16 h-16 rounded-full mx-auto mb-3">
          <p class="text-gray-700 mb-3">"Packaging cantik dan travel friendly. Repurchase? Definitely."</p>
          <p class="text-pink-600 font-semibold">— Maya, Bandung</p>
        </div>
        <div class="bg-white p-6 rounded-xl shadow text-center">
          <img src="{{ asset('images/abcd.png') }}" alt="Lina" class="w-16 h-16 rounded-full mx-auto mb-3">
          <p class="text-gray-700 mb-3">"Makeup tahan lama dan gak bikin muka greasy. Love it!"</p>
          <p class="text-pink-600 font-semibold">— Lina, Surabaya</p>
        </div>
      </div>
    </section>

    <!-- Newsletter -->
    <section class="mt-12 bg-white/70 backdrop-blur-md rounded-xl p-8">
      <div class="max-w-2xl mx-auto text-center">
        <h3 class="text-2xl font-semibold mb-3">Dapatkan Promo Eksklusif</h3>
        <p class="text-gray-600 mb-6">Berlangganan newsletter untuk mendapatkan diskon dan tips kecantikan mingguan.</p>
        <form id="newsletter" class="flex flex-col sm:flex-row gap-3 justify-center">
          <input type="email" placeholder="Email Anda" required class="px-4 py-3 border rounded-lg w-full sm:w-auto" aria-label="Email untuk newsletter">
          <button class="px-6 py-3 rounded-lg bg-pink-600 text-white">Berlangganan</button>
        </form>
      </div>
    </section>

  </main>

  {{-- FOOTER --}}
  @include('layouts.footer')

  <!-- SCRIPTS: Interactions & Accessibility -->
  <script>
    // Hero entrance
    document.addEventListener('DOMContentLoaded', ()=>{
      setTimeout(()=>{
        document.getElementById('heroTitle').classList.add('show');
        document.getElementById('heroSubtitle').classList.add('show');
      },120);
    });

    // Simple tilt effect fallback using mousemove for cards
    document.querySelectorAll('.tilt').forEach(card=>{
      card.addEventListener('mousemove', (e)=>{
        const rect = card.getBoundingClientRect();
        const x = (e.clientX - rect.left) / rect.width - 0.5;
        const y = (e.clientY - rect.top) / rect.height - 0.5;
        card.style.transform = `perspective(800px) rotateX(${(-y*4)}deg) rotateY(${(x*6)}deg) translateY(-6px)`;
      });
      card.addEventListener('mouseleave', ()=>{ card.style.transform = '' });
    });

    // IntersectionObserver for fade-in on scroll
    const io = new IntersectionObserver((entries)=>{
      entries.forEach(e=>{
        if(e.isIntersecting) e.target.classList.add('show');
      });
    },{threshold:0.12});
    document.querySelectorAll('.frosted, .hero-fade').forEach(el=> io.observe(el));

    // newsletter demo
    document.getElementById('newsletter')?.addEventListener('submit', (ev)=>{
      ev.preventDefault();
      alert('Terima kasih! Email Anda telah terdaftar.');
      ev.target.reset();
    });

    // search demo focus
    document.getElementById('searchBtn')?.addEventListener('click', ()=>{
      const q = document.getElementById('search').value.trim();
      if(!q) { document.getElementById('search').focus(); return }
      alert('Fitur pencarian demo: ' + q);
    });

  </script>
</body>
</html>