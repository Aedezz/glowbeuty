<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Tentang Glowbeuty — visi, misi, cerita & tim. Brand skincare premium, natural & sustainable.">
  <meta property="og:title" content="Glowbeuty — Tentang Kami" />
  <meta property="og:description" content="Belajar tentang visi, misi, dan perjalanan Glowbeuty menuju kecantikan alami dan berkelanjutan." />
  <meta property="og:image" content="{{ asset('images/og-about.jpg') }}" />
  <title>Glowbeuty — Tentang Kami</title>

  <!-- Fonts & Tailwind -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&family=Playfair+Display:wght@400;600;700&display=swap" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

  <style>
    :root{
      --accent: #ec4899;
      --accent-2: #f472b6;
      --cream: #f5e6cc;
      --muted: #6b7280;
      --glass: rgba(255,255,255,0.6);
      font-family: 'Inter', system-ui, -apple-system, 'Segoe UI', Roboto, 'Helvetica Neue', Arial;
    }

    html,body{height:100%;}
    html{scrollbar-width:none}
    html::-webkit-scrollbar{width:0;height:0}

    /* Visual polish */
    .hero-video{position:absolute;inset:0;width:100%;height:100%;object-fit:cover}
    .glass{background:linear-gradient(180deg, rgba(255,255,255,0.6), rgba(255,255,255,0.5));backdrop-filter: blur(8px);}
    h1,h2,h3{font-family:'Playfair Display', serif}

    /* fancy gradient border */
    .fancy-border{background:linear-gradient(90deg, rgba(236,72,153,0.12), rgba(244,114,182,0.08)); border-radius:18px; padding:2px;}
    .fancy-inner{background:white;border-radius:16px;padding:1.25rem}

    /* tilt micro interaction fallback */
    .tilt{transition:transform .35s cubic-bezier(.2,.9,.3,1), box-shadow .35s}

    /* timeline */
    .timeline-line{width:3px;background:linear-gradient(180deg,var(--accent),var(--accent-2));border-radius:4px}

    /* small badge */
    .badge{display:inline-block;padding:.25rem .6rem;border-radius:999px;background:linear-gradient(90deg,var(--accent),var(--accent-2));color:white;font-weight:600;font-size:.75rem}

    /* hero text reveal */
    .reveal{opacity:0;transform:translateY(12px);transition:opacity .6s ease, transform .6s ease}
    .reveal.show{opacity:1;transform:none}

    /* mobile video height */n
    @media (max-width:1024px){
      .hero-clip{height:46vh;}
    }
    @media (min-width:1024px){
      .hero-clip{height:70vh;} /* dari 78vh → 70vh */
    }

    /* decorative underline */
    .underline-deco{height:3px;width:80px;border-radius:6px;background:linear-gradient(90deg,var(--accent),var(--accent-2))}

    /* reduced motion prefer */
    @media (prefers-reduced-motion:reduce){
      .tilt, .reveal{transition:none}
    }
  </style>
</head>
<body class="bg-white text-gray-800">

  {{-- NAVBAR --}}
  @include('layouts.navbar')

  <!-- HERO with VIDEO background (Fix Responsif) -->
  <header class="relative overflow-hidden">
    <div class="hero-clip relative">
      <!-- Video (placeholder: public/videos/hero-bg.mp4) -->
      <video id="heroVideo" class="hero-video" autoplay muted loop playsinline poster="https://media.istockphoto.com/id/1193721481/id/foto/sikat-gigi-eco-bambu-alami-sabun-kelapa-deterjen-buatan-tangan.jpg?s=612x612&w=0&k=20&c=ttjl2CTZoRObIpQOX5CUme8-molkOll8MHAiHT_PLJc=">
        <source src="{{ asset('/videos/abcd2.mp4') }}" type="video/mp4">
      </video>

      <!-- overlay gradient for readability -->
      <div class="absolute inset-0 bg-gradient-to-b from-transparent to-white/70"></div>

      <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-full flex items-center">
        <div class="w-full lg:w-2/3 pt-20 md:pt-10 pb-6">
          <span class="badge mb-2 inline-block">Since 2020</span>
          <h1 class="text-4xl md:text-5xl font-extralight leading-tight text-gray-900 mb-4 reveal" id="heroTitle">Tentang Glowbeuty</h1>
          <p class="text-lg text-gray-700 mb-6 reveal" id="heroLead">Kami menggabungkan warisan alam, ilmu modern, dan etika berkelanjutan untuk menciptakan produk yang menyayangi kulit dan bumi.</p>

          <div class="flex gap-3 reveal" id="heroCtas">
            <a href="#our-story" class="px-6 py-3 rounded-lg bg-pink-600 text-white hover:bg-pink-700">Jelajahi Cerita Kami</a>
            <a href="/produk" class="px-6 py-3 rounded-lg border border-pink-200 text-pink-700 bg-white/90">Lihat Produk</a>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main content -->
  <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 space-y-12">

    <!-- Our Story (split, animated) -->
    <section id="our-story" class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
      <div class="reveal" id="storyText">
        <h2 class="text-3xl font-semibold mb-4">Cerita Kami</h2>
        <div class="underline-deco mb-6"></div>
        <p class="text-gray-700 mb-4 leading-relaxed">Dimulai dari ruang kecil di 2020, kami berkumpul karena rasa ingin membawa solusi skincare yang aman, efektif, dan bersahabat dengan lingkungan. Semua produk dikembangkan bersama dermatologis dan ahli formulasi untuk hasil nyata tanpa kompromi.</p>
        <blockquote class="border-l-4 border-pink-200 pl-4 italic text-gray-600">"Kecantikan adalah kebiasaan merawat diri, bukan ritual yang rumit." — Anna Sari, Founder</blockquote>
      </div>

      <div class="relative reveal" id="storyMedia">
        <div class="fancy-border">
          <div class="fancy-inner">
            <img src="https://plus.unsplash.com/premium_photo-1675797367626-35481e1adce0?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8YWJvdXQlMjB1cyUyMHNraW4lMjBwcm9kdWN0cyUyMHBob3RvfGVufDB8fDB8fHww&auto=format&fit=crop&q=60&w=600" alt="Our Lab" class="w-full h-96 object-cover rounded-lg shadow-lg">
            <div class="mt-4 text-sm text-gray-600">Tim R&D kami bekerja dengan bahan pilihan dan standar uji klinis.</div>
          </div>
        </div>
      </div>
    </section>

    <!-- Timeline (vertical) -->
    <section class="pt-2">
      <h2 class="text-3xl font-semibold text-center mb-8">Perjalanan Kami</h2>
      <div class="grid grid-cols-1 md:grid-cols-12 gap-6 items-start">
        <div class="md:col-span-1 md:flex md:justify-center">
          <div class="timeline-line h-full mx-auto"></div>
        </div>
        <div class="md:col-span-11 space-y-6">
          <!-- Item 2020 -->
          <div class="grid grid-cols-1 md:grid-cols-12 gap-4 items-center">
            <div class="md:col-span-3 text-center md:pr-6">
              <div class="text-xl font-semibold">2020</div>
              <div class="text-sm text-gray-500">Founding</div>
            </div>
            <div class="md:col-span-9 bg-white p-4 rounded-lg shadow-md reveal">
              <h3 class="font-semibold">Awal Mula</h3>
              <p class="text-gray-600">Glowbeuty didirikan oleh sekelompok profesional kecantikan yang ingin membuat produk aman berbasis alam.</p>
            </div>
          </div>

          <!-- Item 2021 -->
          <div class="grid grid-cols-1 md:grid-cols-12 gap-4 items-center">
            <div class="md:col-span-3 text-center md:pr-6">
              <div class="text-xl font-semibold">2021</div>
              <div class="text-sm text-gray-500">Peluncuran Produk</div>
            </div>
            <div class="md:col-span-9 bg-white p-4 rounded-lg shadow-md reveal">
              <h3 class="font-semibold">Peluncuran Koleksi Pertama</h3>
              <p class="text-gray-600">Kami meluncurkan rangkaian pertama: cleanser, toner, serum—yang cepat mendapat sambutan positif.</p>
            </div>
          </div>

          <!-- Item 2023 -->
          <div class="grid grid-cols-1 md:grid-cols-12 gap-4 items-center">
            <div class="md:col-span-3 text-center md:pr-6">
              <div class="text-xl font-semibold">2023</div>
              <div class="text-sm text-gray-500">Internasional</div>
            </div>
            <div class="md:col-span-9 bg-white p-4 rounded-lg shadow-md reveal">
              <h3 class="font-semibold">Ekspansi & Keberlanjutan</h3>
              <p class="text-gray-600">Memperluas pasar & memperkenalkan kemasan ramah lingkungan untuk mengurangi jejak karbon.</p>
            </div>
          </div>

          <!-- Item 2025 -->
          <div class="grid grid-cols-1 md:grid-cols-12 gap-4 items-center">
            <div class="md:col-span-3 text-center md:pr-6">
              <div class="text-xl font-semibold">2025</div>
              <div class="text-sm text-gray-500">Visi Kedepan</div>
            </div>
            <div class="md:col-span-9 bg-white p-4 rounded-lg shadow-md reveal">
              <h3 class="font-semibold">Menuju Inovasi Berkelanjutan</h3>
              <p class="text-gray-600">Mengintegrasikan lebih banyak bahan yang dapat terurai dan memperkuat komunitas petani bahan baku lokal.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Values with animated icons -->
    <section>
      <h2 class="text-3xl font-semibold text-center mb-8">Nilai-Nilai Kami</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="text-center p-6 bg-white rounded-lg shadow-md reveal">
          <div class="w-16 h-16 rounded-full bg-pink-50 mx-auto flex items-center justify-center mb-4">🌿</div>
          <h3 class="font-semibold mb-2">Keamanan & Kualitas</h3>
          <p class="text-gray-600">Formulasi diuji klinis, transparan, dan fokus pada hasil nyata.</p>
        </div>
        <div class="text-center p-6 bg-white rounded-lg shadow-md reveal">
          <div class="w-16 h-16 rounded-full bg-cream mx-auto flex items-center justify-center mb-4">⚖️</div>
          <h3 class="font-semibold mb-2">Keberlanjutan</h3>
          <p class="text-gray-600">Kemasan ramah lingkungan dan bahan bersumber etis.</p>
        </div>
        <div class="text-center p-6 bg-white rounded-lg shadow-md reveal">
          <div class="w-16 h-16 rounded-full bg-rose-50 mx-auto flex items-center justify-center mb-4">🤝</div>
          <h3 class="font-semibold mb-2">Inovasi</h3>
          <p class="text-gray-600">Riset berkelanjutan untuk solusi perawatan kulit yang relevan.</p>
        </div>
      </div>
    </section>

    <!-- Team with hover quotes -->
    <section>
      <h2 class="text-3xl font-semibold text-center mb-8">Tim Kami</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Person 1 -->
        <div class="relative bg-white rounded-xl shadow-md p-6 text-center tilt reveal">
          <img src="{{ asset('images/abcd.png') }}" alt="Founder" class="w-28 h-28 rounded-full mx-auto mb-4 object-cover">
          <h4 class="font-semibold">Anna Sari</h4>
          <p class="text-sm text-pink-600 mb-2">Founder & CEO</p>
          <p class="text-gray-600 text-sm">Pionir visi Glowbeuty—memadukan estetika & science.</p>
          <div class="absolute inset-0 bg-black/0 hover:bg-black/40 opacity-0 hover:opacity-100 transition flex items-center justify-center rounded-xl">
            <div class="text-white p-4">"Saya percaya pada perawatan yang sederhana dan efektif."</div>
          </div>
        </div>

        <!-- Person 2 -->
        <div class="relative bg-white rounded-xl shadow-md p-6 text-center tilt reveal">
          <img src="{{ asset('images/abcd.png') }}" alt="Scientist" class="w-28 h-28 rounded-full mx-auto mb-4 object-cover">
          <h4 class="font-semibold">Dr. Maya Putri</h4>
          <p class="text-sm text-pink-600 mb-2">Chief Scientist</p>
          <p class="text-gray-600 text-sm">Dermatologis berlisensi, fokus pada formulasi aman.</p>
          <div class="absolute inset-0 bg-black/0 hover:bg-black/40 opacity-0 hover:opacity-100 transition flex items-center justify-center rounded-xl">
            <div class="text-white p-4">"Kami selalu mengutamakan bukti ilmiah dalam setiap formulasi."</div>
          </div>
        </div>

        <!-- Person 3 -->
        <div class="relative bg-white rounded-xl shadow-md p-6 text-center tilt reveal">
          <img src="{{ asset('images/abcd.png') }}" alt="Designer" class="w-28 h-28 rounded-full mx-auto mb-4 object-cover">
          <h4 class="font-semibold">Lina Kusuma</h4>
          <p class="text-sm text-pink-600 mb-2">Creative Director</p>
          <p class="text-gray-600 text-sm">Menciptakan identitas visual yang lembut dan elegan.</p>
          <div class="absolute inset-0 bg-black/0 hover:bg-black/40 opacity-0 hover:opacity-100 transition flex items-center justify-center rounded-xl">
            <div class="text-white p-4">"Desain kami selalu berbicara tentang kualitas dan keanggunan."</div>
          </div>
        </div>
      </div>
    </section>

    <!-- Sustainability highlight -->
    <section class="relative rounded-xl overflow-hidden">
      <img src="https://images.unsplash.com/photo-1655568561429-2da330af5442?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTl8fHNraW5jYXJlJTIwcHJvZHVjdHMlMjBwb3RyYWl0fGVufDB8fDB8fHww&auto=format&fit=crop&q=60&w=600" alt="Sustainability" class="w-full h-64 object-cover opacity-70">
      <div class="absolute inset-0 bg-gradient-to-r from-pink-600/20 to-yellow-200/10 flex items-center">
        <div class="max-w-4xl mx-auto px-6 py-10 text-white">
          <h3 class="text-2xl font-semibold">Keberlanjutan di Inti Kami</h3>
          <p class="mt-2 text-sm">Kami bekerja dengan petani lokal untuk bahan yang dapat ditelusuri, menerapkan kemasan yang bisa didaur ulang, dan terus mengurangi limbah produksi.</p>
          <a href="#" class="inline-block mt-4 px-5 py-2 bg-white text-pink-600 rounded-lg">Pelajari Lebih Lanjut</a>
        </div>
      </div>
    </section>

    <!-- CTA -->
    <section class="text-center">
      <div class="glass rounded-xl p-8">
        <h3 class="text-2xl font-semibold mb-3">Bergabunglah di Perjalanan Kami</h3>
        <p class="text-gray-600 mb-4">Dapatkan tips perawatan, cerita di balik produk, dan diskon eksklusif untuk member.</p>
        <form id="aboutNewsletter" class="max-w-md mx-auto flex flex-col sm:flex-row gap-3">
          <input type="email" placeholder="Email Anda" required class="px-4 py-3 border rounded-lg flex-1" aria-label="Email untuk newsletter">
          <button class="px-6 py-3 rounded-lg bg-pink-600 text-white">Daftar</button>
        </form>
      </div>
    </section>

  </main>

  {{-- FOOTER --}}
  @include('layouts.footer')

  <script>
    // Reveal on load
    document.addEventListener('DOMContentLoaded', ()=>{
      setTimeout(()=>{
        document.querySelectorAll('.reveal').forEach((el, idx)=>{
          setTimeout(()=> el.classList.add('show'), idx*120);
        });
      }, 120);
    });

    // IntersectionObserver for reveal on scroll
    const io = new IntersectionObserver((entries)=>{
      entries.forEach(e=>{
        if(e.isIntersecting) e.target.classList.add('show')
      })
    },{threshold:0.12});
    document.querySelectorAll('.reveal').forEach(el=> io.observe(el));

    // Tilt microinteraction
    document.querySelectorAll('.tilt').forEach(card=>{
      card.addEventListener('mousemove', (e)=>{
        const rect = card.getBoundingClientRect();
        const x = (e.clientX - rect.left) / rect.width - 0.5;
        const y = (e.clientY - rect.top) / rect.height - 0.5;
        card.style.transform = `perspective(900px) rotateX(${(-y*6)}deg) rotateY(${(x*6)}deg)`;
      });
      card.addEventListener('mouseleave', ()=> card.style.transform = '');
    });

    // Newsletter demo
    document.getElementById('aboutNewsletter')?.addEventListener('submit', (e)=>{
      e.preventDefault();
      alert('Terima kasih! Anda telah berlangganan.');
      e.target.reset();
    });

    // Pause video on mobile if data-saver
    const vid = document.getElementById('heroVideo');
    if(navigator.connection && navigator.connection.saveData){ vid.pause(); }

  </script>
</body>
</html>