{{-- resources/views/blog.blade.php --}}
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="description" content="Glowbeuty Blog — tips & ulasan kecantikan.">
  <title>Glowbeuty — Blog</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&family=Playfair+Display:wght@400;600&display=swap" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <style>
    :root{--accent:#ec4899;--accent-2:#f472b6}
    html,body{height:100%}
    html{scrollbar-width:none} html::-webkit-scrollbar{width:0;height:0}
    .hero-clip{height:70vh;min-height:360px;position:relative;overflow:hidden}
    .hero-video{position:absolute;inset:0;width:100%;height:100%;object-fit:cover}
    .hero-overlay{position:absolute;inset:0;background:linear-gradient(180deg,rgba(0,0,0,0.18),rgba(255,255,255,0.72))}
    h1,h2,h3{font-family:'Playfair Display',serif}
    .post-card{transition:transform .32s,box-shadow .32s}
    .post-card:hover{transform:translateY(-8px);box-shadow:0 16px 36px rgba(16,24,40,0.12)}
    .masonry{display:grid;grid-template-columns:repeat(auto-fill,minmax(260px,1fr));grid-auto-rows:10px;gap:1rem}
    .reveal{opacity:0;transform:translateY(12px);transition:opacity .6s,transform .6s}
    .reveal.show{opacity:1;transform:none}
    .badge{display:inline-block;padding:.25rem .6rem;border-radius:999px;background:linear-gradient(90deg,var(--accent),var(--accent-2));color:#fff;font-weight:600;font-size:.75rem}
    .chip{display:inline-block;padding:.35rem .6rem;border-radius:999px;background:#fff;border:1px solid rgba(0,0,0,0.06);cursor:pointer}
  </style>
</head>
<body class="bg-white text-gray-800">

  {{-- Navbar include --}}
  @include('layouts.navbar')

  <!-- HERO (Blog, Fix Mobile) -->
<header class="hero-clip" role="banner" aria-label="Blog hero">
  <video id="blogHeroVideo" class="hero-video" autoplay muted loop playsinline poster="https://images.unsplash.com/photo-1556760544-74068565f05c?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NjN8fHNraW4lMjBjYXJlJTIwcHJvZHVjdHN8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&q=60&w=600">
    {{-- Ensure file exists at public/videos/blog-hero.mp4 or browser will ignore --}}
    <source src="{{ asset('videos/abcd.mp4') }}" type="video/mp4">
    <!-- fallback image shown by poster -->
  </video>
  <div class="hero-overlay"></div>
  <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-full flex items-center">
    <div class="w-full lg:w-2/3 pt-32 md:pt-24 py-12 text-white"> <!-- Tambah pt-32 untuk mobile, md:pt-24 untuk desktop -->
      <span class="badge mb-3 inline-block">Blog & Tips</span>
      <h1 class="text-4xl md:text-5xl font-extralight leading-tight mb-4 reveal" id="heroTitle">Glowbeuty Blog — Cerita, Tips & Ulasan</h1>
      <p class="text-lg md:text-xl mb-6 reveal" id="heroSub">Panduan perawatan, ulasan produk, dan inspirasi kecantikan untuk kulit bersinar.</p>
      <div class="flex gap-3 reveal" id="heroCTAs">
        <a href="#featured" class="px-5 py-3 bg-white text-pink-600 rounded-lg font-medium">Lihat Artikel Unggulan</a>
        <a href="#subscribe" class="px-5 py-3 border border-white/30 text-white rounded-lg">Langganan Newsletter</a>
      </div>
    </div>
  </div>
</header>

  <!-- MAIN -->
  <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    {{-- Featured (simple) --}}
    <section id="featured" class="mb-10">
      <h2 class="text-2xl font-semibold mb-4">Artikel Unggulan</h2>
      <div class="relative">
        <div id="featuredWrapper" class="overflow-hidden rounded-2xl">
          <div id="featuredInner" class="flex transition-transform duration-700 ease-in-out">
            {{-- Use 3 featured items; ensure each min-w-full --}}
            <article class="min-w-full relative text-white">
              <img src="https://media.istockphoto.com/id/2159169924/photo/natural-vitamin-c-skin-care-and-citrus-slices.webp?a=1&b=1&s=612x612&w=0&k=20&c=DRTvswA5rQ7RykX6R79XgObORnaAyl7R1cGclWeRuHE=" alt="Featured 1" class="w-full h-72 object-cover rounded-2xl">
              <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent rounded-2xl flex items-end p-6">
                <div>
                  <div class="badge mb-2">Skincare</div>
                  <h3 class="text-2xl font-semibold">5 Tips Skincare untuk Kulit Berminyak</h3>
                </div>
              </div>
            </article>
            <article class="min-w-full relative text-white">
              <img src="https://plus.unsplash.com/premium_photo-1661578344207-c25ecf918f1e?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8c2tpbiUyMGNhcmUlMjBwcm9kdWN0c3xlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&q=60&w=600" alt="Featured 2" class="w-full h-72 object-cover rounded-2xl">
              <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent rounded-2xl flex items-end p-6">
                <div>
                  <div class="badge mb-2">Ulasan</div>
                  <h3 class="text-2xl font-semibold">Ulasan Serum Vitamin C Terbaik 2023</h3>
                </div>
              </div>
            </article>
            <article class="min-w-full relative text-white">
              <img src="https://images.unsplash.com/photo-1629732097571-b042b35aa3ed?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mjd8fHNraW4lMjBjYXJlJTIwcHJvZHVjdHN8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&q=60&w=600" alt="Featured 3" class="w-full h-72 object-cover rounded-2xl">
              <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent rounded-2xl flex items-end p-6">
                <div>
                  <div class="badge mb-2">Makeup</div>
                  <h3 class="text-2xl font-semibold">Tutorial Makeup Natural untuk Kulit Kusam</h3>
                </div>
              </div>
            </article>
          </div>
        </div>

        <div class="absolute inset-y-0 right-6 flex items-center gap-2">
          <button id="featPrev" class="bg-white/80 p-2 rounded-full shadow" aria-label="Previous featured">◄</button>
          <button id="featNext" class="bg-white/80 p-2 rounded-full shadow" aria-label="Next featured">►</button>
        </div>
      </div>
    </section>

    <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
      {{-- Main column (posts) --}}
      <div class="lg:col-span-3">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-6">
          <div class="flex gap-3">
            <input id="searchInput" type="search" placeholder="Cari artikel..." class="px-4 py-3 rounded-lg border w-full md:w-96" aria-label="Cari artikel">
            <button id="searchBtn" class="px-4 py-3 bg-pink-600 text-white rounded-lg">Cari</button>
          </div>
          <div class="flex gap-2 items-center">
            <span class="text-sm text-gray-500">Kategori:</span>
            <div id="categoryList" class="flex gap-2">
              <button data-cat="skincare" class="chip">Skincare</button>
              <button data-cat="makeup" class="chip">Makeup</button>
              <button data-cat="lifestyle" class="chip">Lifestyle</button>
            </div>
          </div>
        </div>

        <!-- Blog Grid -->
        <section class="py-7 bg-gray-50">
            <div class="max-w-7xl mx-auto px-6">
                <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">Latest Articles</h2>
                <div class="grid md:grid-cols-3 gap-8">
                @for ($i = 1; $i <= 6; $i++)
                <article class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-xl transition">
                    <img src="https://plus.unsplash.com/premium_photo-1681364365218-2a882a191f2a?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8c2tpbmNhcmUlMjBwcm9kdWN0fGVufDB8fDB8fHww&auto=format&fit=crop&q=60&w=600" alt="Post {{ $i }}" class="w-full h-56 object-cover">
                    <div class="p-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Blog Post Title {{ $i }}</h3>
                    <p class="text-gray-600 mb-4">A short insight into the world of glowing skin and self-care routines.</p>
                    <div class="flex justify-between items-center text-sm text-gray-500">
                        <span>Nov {{ 10 - $i }}, 2025</span>
                        <a href="#" class="text-pink-600 font-medium hover:underline">Read →</a>
                    </div>
                    </div>
                </article>
                @endfor
                </div>
            </div>
        </section>
      </div>

      {{-- Sidebar --}}
      <aside class="lg:col-span-1">
        <div class="bg-white rounded-xl p-6 shadow-md mb-6 reveal">
          <h3 class="font-semibold mb-4">Cari Berdasarkan Tag</h3>
          <div class="flex flex-wrap gap-2">
            <button class="chip">skincare</button>
            <button class="chip">vitamin c</button>
            <button class="chip">makeup</button>
            <button class="chip">review</button>
          </div>
        </div>

        <div class="bg-white rounded-xl p-6 shadow-md mb-6 reveal">
          <h3 class="font-semibold mb-4">Artikel Populer</h3>
          <ul class="space-y-4">
            <li class="flex items-start gap-3">
              <img src="https://plus.unsplash.com/premium_photo-1681364365218-2a882a191f2a?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8c2tpbmNhcmUlMjBwcm9kdWN0fGVufDB8fDB8fHww&auto=format&fit=crop&q=60&w=600" alt="thumb1" class="w-16 h-12 object-cover rounded">
              <div>
                <a href="#" class="font-medium text-gray-900">5 Tips Skincare untuk Kulit Berminyak</a>
                <div class="text-xs text-gray-500">15 Okt 2023</div>
              </div>
            </li>
          </ul>
        </div>

        
        <!-- Subscribe Section -->
        <section class="py-20 bg-gradient-to-r from-pink-100 via-pink-50 to-rose-100">
            <div class="max-w-3xl mx-auto text-center px-6">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Join Our Glowbeuty Community</h2>
                <p class="text-gray-600 mb-8">Get the latest skincare tips, product launches, and exclusive offers straight to your inbox.</p>
                <form action="#" method="POST" class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <input type="email" name="email" placeholder="Enter your email" required
                        class="w-full sm:w-2/3 p-3 rounded-xl border border-gray-300 focus:outline-none focus:ring-2 focus:ring-pink-400">
                <button type="submit"
                        class="bg-pink-600 text-white px-6 py-3 rounded-xl font-semibold hover:bg-pink-700 transition">Subscribe</button>
                </form>
            </div>
        </section>
      </aside>
    </div>
  </main>

  {{-- Footer --}}
  @include('layouts.footer')

  {{-- Defensive scripts --}}
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      // FEATURED carousel safe init
      const featuredInner = document.getElementById('featuredInner');
      const featPrev = document.getElementById('featPrev');
      const featNext = document.getElementById('featNext');
      let featIndex = 0;
      const featCount = featuredInner ? featuredInner.children.length : 0;
      function showFeatured(i){ if(!featuredInner) return; featuredInner.style.transform = `translateX(-${i*100}%)`; }
      featPrev?.addEventListener('click', ()=>{ if(!featCount) return; featIndex=(featIndex-1+featCount)%featCount; showFeatured(featIndex); });
      featNext?.addEventListener('click', ()=>{ if(!featCount) return; featIndex=(featIndex+1)%featCount; showFeatured(featIndex); });
      if(featCount>0){ setInterval(()=>{ featIndex=(featIndex+1)%featCount; showFeatured(featIndex); },6000); }

      // IntersectionObserver reveal
      const io = new IntersectionObserver((entries)=>{ entries.forEach(e=>{ if(e.isIntersecting) e.target.classList.add('show'); }); },{threshold:0.12});
      document.querySelectorAll('.reveal').forEach(el=> io.observe(el));

      // Category filter: safe guard
      const categoryButtons = document.querySelectorAll('[data-cat]');
      const masonry = document.getElementById('postsMasonry');
      categoryButtons.forEach(btn=> btn.addEventListener('click', ()=> {
        const cat = btn.dataset.cat;
        if(!masonry) return;
        masonry.querySelectorAll('.item').forEach(item=>{
          const badge = item.querySelector('.badge');
          const btext = badge ? badge.textContent.trim().toLowerCase() : '';
          if(cat==='all' || btext.includes(cat)) item.style.display = '';
          else item.style.display = 'none';
        });
      }));

      // Search (client-side demo)
      document.getElementById('searchBtn')?.addEventListener('click', ()=>{
        const q = (document.getElementById('searchInput')?.value || '').trim().toLowerCase();
        if(!q) { document.getElementById('searchInput')?.focus(); return; }
        document.querySelectorAll('#postsMasonry .item').forEach(item=>{
          const text = (item.textContent || '').toLowerCase();
          item.style.display = text.includes(q) ? '' : 'none';
        });
      });

      // Subscribe demo safe
      document.getElementById('blogSubscribe')?.addEventListener('submit', (e)=>{
        e.preventDefault();
        alert('Terima kasih! Anda telah berlangganan.');
        e.target.reset();
      });

      // Pause video when data-saver / reduced motion
      const heroVid = document.getElementById('blogHeroVideo');
      try {
        if(heroVid && (navigator.connection?.saveData || window.matchMedia('(prefers-reduced-motion: reduce)').matches)) {
          heroVid.pause();
        }
      } catch (err) { /* ignore */ }

    });
  </script>
</body>
</html>
