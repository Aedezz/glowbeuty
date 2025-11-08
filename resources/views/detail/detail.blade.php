{{-- resources/views/product/show.blade.php --}}
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <meta name="description" content="Detail produk — Serum Glow Essence. Formula alami, tested.">
  <meta property="og:title" content="Serum Glow Essence — Glowbeuty" />
  <meta property="og:description" content="Formula alami untuk kulit bersinar — Serum Glow Essence." />
  <meta property="og:image" content="{{ asset('images/products/serum/og.jpg') }}" />
  <title>Serum Glow Essence — Glowbeuty</title>

  <!-- Fonts + Tailwind (dev CDN okay; in prod use compiled CSS) -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&family=Playfair+Display:wght@400;600&display=swap" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

  <style>
    :root{
      --accent:#ec4899;
      --accent-2:#f472b6;
      --muted:#6b7280;
      --cream:#f5e6cc;
      font-family: 'Inter', system-ui, -apple-system, 'Segoe UI', Roboto, Arial;
    }
    h1,h2,h3{font-family:'Playfair Display', serif;}
    .glass { background: rgba(255,255,255,0.55); backdrop-filter: blur(8px); }
    .badge { display:inline-block; padding:.25rem .6rem; border-radius:999px; background:linear-gradient(90deg,var(--accent),var(--accent-2)); color:white; font-weight:600; font-size:.75rem }
    .reveal { opacity:0; transform: translateY(12px); transition: opacity .6s ease, transform .6s ease; }
    .reveal.show { opacity:1; transform:none; }
    /* lightbox overlay */
    .lb-overlay { background: rgba(2,6,23,0.85); }
    /* prefer reduced motion */
    @media (prefers-reduced-motion: reduce) {
      .reveal { transition:none; }
    }
  </style>

  {{-- JSON-LD Product schema (replace dynamic values when integrating) --}}
  <script type="application/ld+json">
  {
    "@context":"https://schema.org/",
    "@type":"Product",
    "name":"Serum Glow Essence",
    "image":["{{ asset('images/products/serum/abcd.png') }}"],
    "description":"Serum Glow Essence — Formula alami untuk kulit bersinar.",
    "sku":"SERUM-001",
    "brand":{"@type":"Brand","name":"Glowbeuty"},
    "offers":{
      "@type":"Offer",
      "url":"{{ url()->current() }}",
      "priceCurrency":"IDR",
      "price":"150000",
      "availability":"https://schema.org/InStock"
    },
    "aggregateRating":{
      "@type":"AggregateRating",
      "ratingValue":"4.8",
      "reviewCount":"128"
    }
  }
  </script>
</head>
<body class="bg-gradient-to-br from-yellow-50 via-pink-50 to-rose-50 text-gray-800">

  {{-- NAVBAR --}}
  @include('layouts.navbar')

  <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
      {{-- LEFT: Gallery --}}
      <section class="lg:col-span-6 space-y-4">
        <div class="relative bg-white rounded-2xl overflow-hidden shadow-lg">
          <!-- Main image -->
          <!-- Replace with dynamic: $product->images[0] -->
          <img id="mainImage" src="https://plus.unsplash.com/premium_photo-1681364365218-2a882a191f2a?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8c2tpbmNhcmUlMjBwcm9kdWN0fGVufDB8fDB8fHww&auto=format&fit=crop&q=60&w=600" alt="Serum Glow Essence" class="w-full h-[520px] object-cover rounded-t-2xl" loading="lazy" />
          <!-- Quick badges -->
          <div class="absolute top-4 left-4">
            <span class="badge">Bestseller</span>
          </div>
          <button id="openLightbox" class="absolute top-4 right-4 bg-white/80 p-3 rounded-full shadow hover:scale-105 transition" aria-label="Buka galeri">
            <svg class="w-5 h-5 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" d="M15 10l4.553-2.276A2 2 0 0122 9.618v4.764a2 2 0 01-2.447 1.894L15 14M9 14l-4.553 2.276A2 2 0 013 16.382V11.618a2 2 0 011.447-1.894L9 10m6-5l-6 5" />
            </svg>
          </button>
        </div>

        <!-- Thumbnails -->
        <div class="flex items-center gap-3 mt-2">
            @php
                $thumbs = [
                    'https://plus.unsplash.com/premium_photo-1681364365218-2a882a191f2a?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8c2tpbmNhcmUlMjBwcm9kdWN0fGVufDB8fDB8fHww&auto=format&fit=crop&q=60&w=600',
                    'https://plus.unsplash.com/premium_photo-1681364365252-387c05c06c40?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8c2tpbmNhcmUlMjBwcm9kdWN0fGVufDB8fDB8fHww&auto=format&fit=crop&q=60&w=600',
                    'https://images.unsplash.com/photo-1608571423902-eed4a5ad8108?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8c2tpbmNhcmUlMjBwcm9kdWN0fGVufDB8fDB8fHww&auto=format&fit=crop&q=60&w=600',
                    'https://plus.unsplash.com/premium_photo-1681364366165-526bf6247d7f?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTd8fHNraW5jYXJlJTIwcHJvZHVjdHxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&q=60&w=600'
                ];
            @endphp

            @foreach($thumbs as $t)
            <button class="thumb w-20 h-20 rounded-lg overflow-hidden border border-transparent focus:outline-none focus:ring-2 focus:ring-pink-300" data-src="{{ $t }}">
                <img src="{{ $t }}" alt="thumb" class="w-full h-full object-cover" loading="lazy" />
            </button>
            @endforeach
        </div>
      </section>

      {{-- RIGHT: Details --}}
      <section class="lg:col-span-6 space-y-6">
        <div class="bg-white p-6 rounded-2xl shadow-md glass">
          <div class="flex items-start justify-between gap-4">
            <div>
              <h1 class="text-3xl font-extrabold text-gray-900">Serum Glow Essence</h1>
              <div class="flex items-center gap-3 mt-2">
                <div class="flex items-center gap-1 text-yellow-400">
                  <!-- rating stars (visual) -->
                  <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921..."/></svg>
                  <span class="text-sm text-gray-600">(4.8)</span>
                </div>
                <span class="text-sm text-gray-500">• 128 reviews</span>
              </div>
              <p class="text-sm text-pink-600 font-semibold mt-3">Skincare • Serum</p>
            </div>

            <div class="text-right">
              <div class="text-2xl font-bold text-pink-600">Rp 150.000</div>
              <div class="text-sm text-gray-500">Termasuk pajak</div>
            </div>
          </div>

          <p class="text-gray-700 mt-4 leading-relaxed">Serum Glow Essence adalah serum ringan yang menutrisi, mencerahkan, dan memberikan glow alami. Diperkaya ekstrak botanical & vitamin C stabil.</p>

          {{-- Variant selector (example) --}}
          <div class="mt-6 grid grid-cols-1 sm:grid-cols-2 gap-3">
            <div>
              <label class="text-sm font-medium text-gray-700">Pilih Ukuran</label>
              <div class="mt-2 flex gap-2">
                {{-- Example dynamic variants --}}
                <button class="variant px-3 py-2 rounded-lg border border-gray-200 hover:border-pink-300" data-variant="30ml">30 ml</button>
                <button class="variant px-3 py-2 rounded-lg border border-gray-200 hover:border-pink-300" data-variant="50ml">50 ml</button>
              </div>
            </div>
            <div>
              <label class="text-sm font-medium text-gray-700">Kuantitas</label>
              <div class="mt-2 inline-flex items-center gap-2">
                <button id="qtyMinus" class="px-3 py-2 bg-gray-100 rounded">−</button>
                <input id="qtyInput" type="number" min="1" value="1" class="w-16 text-center px-2 py-2 border rounded" />
                <button id="qtyPlus" class="px-3 py-2 bg-gray-100 rounded">+</button>
              </div>
            </div>
          </div>

          {{-- Add to cart & wishlist --}}
          <div class="mt-6 flex flex-col sm:flex-row sm:items-center gap-3">
            <button id="addToCart" class="w-full sm:w-auto inline-flex items-center gap-3 px-6 py-3 rounded-xl text-black font-semibold shadow" aria-label="Tambah ke keranjang">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart2" viewBox="0 0 16 16">
                <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5M3.14 5l1.25 5h8.22l1.25-5zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0m9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0"/>
              </svg>
              Tambah ke Keranjang
            </button>

            <button id="wishlistBtn" class="ml-auto text-pink-600 border border-pink-200 px-4 py-2 rounded-lg hover:bg-pink-50" aria-pressed="false">
              ♡ Simpan
            </button>
          </div>

          {{-- Meta info --}}
          <div class="mt-6 text-xs text-gray-500">
            <p><strong>Pengiriman:</strong> 2-5 hari kerja</p>
            <p><strong>Garansi:</strong> 30 hari uang kembali</p>
          </div>
        </div>

        {{-- Tabs: Ingredients / How to use / FAQ --}}
        <div class="bg-white rounded-2xl p-4 shadow-md">
          <nav class="flex gap-3" role="tablist" aria-label="Product tabs">
            <button class="tab px-3 py-2 text-sm rounded-lg bg-pink-50 text-pink-600" data-tab="ingredients">Ingredients</button>
            <button class="tab px-3 py-2 text-sm rounded-lg hover:bg-gray-50" data-tab="howto">Cara Pakai</button>
            <button class="tab px-3 py-2 text-sm rounded-lg hover:bg-gray-50" data-tab="faq">FAQ</button>
          </nav>

          <div class="mt-4">
            <div class="tab-panel" id="ingredients" hidden>
              <h3 class="font-semibold">Ingredients</h3>
              <ul class="text-sm text-gray-700 mt-2 list-disc pl-5">
                <li>Vitamin C stabilized</li>
                <li>Hyaluronic acid</li>
                <li>Ekstrak chamomile</li>
              </ul>
            </div>
            <div class="tab-panel" id="howto" hidden>
              <h3 class="font-semibold">Cara Pakai</h3>
              <p class="text-sm text-gray-700 mt-2">Gunakan 2-3 tetes setelah toner, pijat lembut pada wajah dan leher. Gunakan pagi & malam.</p>
            </div>
            <div class="tab-panel" id="faq" hidden>
              <h3 class="font-semibold">Pertanyaan Umum</h3>
              <details class="mt-2">
                <summary class="cursor-pointer font-medium">Apakah aman untuk kulit sensitif?</summary>
                <div class="text-sm text-gray-700 mt-1">Ya, formula kami hypoallergenic dan telah diuji dermatologis.</div>
              </details>
            </div>
          </div>
        </div>

        {{-- Reviews preview --}}
        <div class="bg-white rounded-2xl p-6 shadow-md">
          <div class="flex items-center justify-between">
            <h3 class="text-lg font-semibold">Ulasan Pelanggan</h3>
            <a href="#allReviews" class="text-pink-600 text-sm">Lihat semua</a>
          </div>

          <ul class="mt-4 space-y-4">
            <li class="border rounded-lg p-4">
              <div class="flex items-start gap-3">
                <div class="w-10 h-10 bg-pink-100 rounded-full flex items-center justify-center font-semibold text-pink-700">S</div>
                <div>
                  <div class="flex items-center gap-2">
                    <strong>Sarah</strong>
                    <span class="text-xs text-gray-500">• 2 minggu lalu</span>
                  </div>
                  <p class="text-sm text-gray-700 mt-1">Beneran bikin kulit glowing dalam 2 minggu. Teksturnya ringan.</p>
                </div>
              </div>
            </li>
          </ul>
        </div>

        {{-- Related products (brief) --}}
        <div class="bg-white rounded-2xl p-6 shadow-md">
          <h3 class="font-semibold mb-4">Produk Lainnya</h3>
          <div class="grid grid-cols-2 sm:grid-cols-4 gap-3">
              @php
                  $related = [
                      'https://plus.unsplash.com/premium_photo-1681364365218-2a882a191f2a?ixlib=rb-4.1.0&auto=format&fit=crop&q=60&w=600',
                      'https://plus.unsplash.com/premium_photo-1681364365218-2a882a191f2a?ixlib=rb-4.1.0&auto=format&fit=crop&q=60&w=600',
                      'https://plus.unsplash.com/premium_photo-1681364365218-2a882a191f2a?ixlib=rb-4.1.0&auto=format&fit=crop&q=60&w=600',
                      'https://plus.unsplash.com/premium_photo-1681364365218-2a882a191f2a?ixlib=rb-4.1.0&auto=format&fit=crop&q=60&w=600',
                  ];
              @endphp

              @foreach($related as $i => $img)
              <a href="/produk#productsGrid" class="block bg-gray-50 p-2 rounded-lg text-center hover:shadow-md transition">
                  <img src="{{ $img }}" alt="related" class="w-full h-24 object-cover rounded mb-2" loading="lazy">
                  <div class="text-xs text-gray-700">Product {{ $i + 1 }}</div>
              </a>
              @endforeach
          </div>
      </div>

      </section>
    </div>
  </main>

  {{-- Lightbox markup (hidden by default) --}}
  <div id="lightbox" class="fixed inset-0 z-50 hidden items-center justify-center lb-overlay">
    <button id="lbClose" class="absolute top-6 right-6 z-50 p-3 rounded-full bg-white/10 text-white hover:bg-white/20">✕</button>
    <div id="lbContent" class="max-w-3xl mx-auto px-4">
      <img id="lbImage" src="" class="w-full h-auto rounded-lg shadow-2xl" alt="Zoomed image" />
    </div>
  </div>

  {{-- Sticky Add-to-cart (mobile) --}}
  <div id="stickyBar" class="fixed bottom-4 left-1/2 transform -translate-x-1/2 z-40 w-[min(720px,92%)] hidden">
    <div class="bg-white rounded-full shadow-lg p-3 flex items-center justify-between gap-3">
      <div class="flex items-center gap-3">
        <img src="{{ asset('images/products/serum/1.jpg') }}" alt="mini" class="w-12 h-12 object-cover rounded" loading="lazy" />
        <div>
          <div class="text-sm font-semibold">Serum Glow Essence</div>
          <div class="text-sm text-pink-600 font-bold">Rp 150.000</div>
        </div>
      </div>
      <div class="flex items-center gap-3">
        <button id="stickyAdd" class="bg-pink-600 text-white px-4 py-2 rounded-full">Tambah</button>
      </div>
    </div>
  </div>

  {{-- FOOTER --}}
  @include('layouts.footer')

  {{-- Scripts (defensive) --}}
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      // Defensive helpers
      const $ = (sel, ctx=document) => ctx.querySelector(sel);
      const $$ = (sel, ctx=document) => Array.from(ctx.querySelectorAll(sel));

      // Thumbnail click -> change main image
      $$('.thumb').forEach(btn=>{
        btn.addEventListener('click', (e)=>{
          const src = btn.dataset.src;
          const main = $('#mainImage');
          if(main && src) main.src = src;
        });
      });

      // Lightbox open/close
      const lb = $('#lightbox'), lbImage = $('#lbImage'), openLightbox = $('#openLightbox'), lbClose = $('#lbClose');
      openLightbox?.addEventListener('click', ()=> {
        const m = $('#mainImage');
        if(!lb || !lbImage || !m) return;
        lbImage.src = m.src;
        lb.classList.remove('hidden');
        document.body.style.overflow = 'hidden';
        lb.focus?.();
      });
      lbClose?.addEventListener('click', ()=> {
        if(!lb) return;
        lb.classList.add('hidden');
        document.body.style.overflow = '';
        lbImage.src = '';
      });
      // close on overlay click
      lb?.addEventListener('click', (e)=> {
        if(e.target === lb) { lb.classList.add('hidden'); document.body.style.overflow = ''; lbImage.src=''; }
      });
      // keyboard close
      document.addEventListener('keydown', (e)=> { if(e.key === 'Escape' && lb && !lb.classList.contains('hidden')) { lb.classList.add('hidden'); document.body.style.overflow=''; lbImage.src=''; } });

      // Tabs
      $$('.tab').forEach(button=>{
        button.addEventListener('click', ()=>{
          const tab = button.dataset.tab;
          $$('.tab').forEach(b=> b.classList.remove('bg-pink-50','text-pink-600'));
          button.classList.add('bg-pink-50','text-pink-600');
          $$('.tab-panel').forEach(p=> p.hidden = true);
          const panel = document.getElementById(tab);
          if(panel) panel.hidden = false;
        });
      });
      // open default tab
      const firstTab = document.querySelector('.tab');
      firstTab?.click();

      // Quantity controls
      const qtyInput = $('#qtyInput'), qtyPlus = $('#qtyPlus'), qtyMinus = $('#qtyMinus');
      qtyPlus?.addEventListener('click', ()=> { if(qtyInput) qtyInput.value = Math.max(1, Number(qtyInput.value || 1) + 1); });
      qtyMinus?.addEventListener('click', ()=> { if(qtyInput) qtyInput.value = Math.max(1, Number(qtyInput.value || 1) - 1); });

      // Wishlist toggle
      $('#wishlistBtn')?.addEventListener('click', (e)=>{
        const el = e.currentTarget;
        const pressed = el.getAttribute('aria-pressed') === 'true';
        el.setAttribute('aria-pressed', (!pressed).toString());
        el.classList.toggle('text-pink-600');
        // TODO: post to server via fetch
      });

      // Add to cart (demo)
      $('#addToCart')?.addEventListener('click', (e) => {
        const qty = qtyInput ? qtyInput.value : 1;
        // Replace with real POST to cart API
        alert('Added to cart — qty: ' + qty);
      });

      // Sticky bar show/hide on scroll (mobile)
      const sticky = $('#stickyBar');
      let lastScroll = window.scrollY;
      function checkSticky(){
        if(!sticky) return;
        if(window.innerWidth < 1024) {
          // show when user scrolled past main fold
          if(window.scrollY > 400) sticky.classList.remove('hidden'); else sticky.classList.add('hidden');
        } else {
          sticky.classList.add('hidden');
        }
      }
      checkSticky();
      window.addEventListener('scroll', ()=> { lastScroll = window.scrollY; checkSticky(); });

      $('#stickyAdd')?.addEventListener('click', ()=> { $('#addToCart')?.click(); });

      // IntersectionObserver reveal
      try {
        const io = new IntersectionObserver((entries)=>{ entries.forEach(e=> { if(e.isIntersecting) e.target.classList.add('show'); }); }, {threshold:0.12});
        document.querySelectorAll('.reveal').forEach(el=> io.observe(el));
      } catch(err){ /* no-op */ }

    });
  </script>
</body>
</html>
