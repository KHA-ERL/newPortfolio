<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./output.css" rel="stylesheet">
  <!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <?php
  require "./form/contact.php";
  require "./form/uid.php";
  ?>

  <!-- Class-based dark mode fallback (compiled CSS uses prefers-color-scheme) -->
  <style>
    .dark .dark\:bg-gray-900 { background-color: var(--color-gray-900) !important; }
    .dark .dark\:bg-gray-800 { background-color: var(--color-gray-800) !important; }
    .dark .dark\:text-gray-300 { color: var(--color-gray-300) !important; }
    .dark .dark\:text-white { color: var(--color-white) !important; }
    .dark .dark\:hover\:bg-gray-700:hover { background-color: var(--color-gray-700) !important; }
    .dark .dark\:text-orange-300 { color: var(--color-orange-300) !important; }
    .dark .dark\:border-gray-700 { border-color: var(--color-gray-700) !important; }
  </style>

<script>
  document.addEventListener("DOMContentLoaded", () => {
    const root = document.documentElement;
    const toggleBtn = document.getElementById("toggleTheme");

    // Set initial theme
    const userTheme = localStorage.getItem("theme");
    const systemPrefersDark = window.matchMedia("(prefers-color-scheme: dark)").matches;

    if (userTheme === "dark" || (!userTheme && systemPrefersDark)) {
      root.classList.add("dark");
    } else {
      root.classList.remove("dark");
    }

    // Toggle handler
    toggleBtn.addEventListener("click", () => {
      const isDark = root.classList.toggle("dark");
      localStorage.setItem("theme", isDark ? "dark" : "light");
      toggleBtn.textContent = isDark ? "🌙" : "🌞";
    });

    // Initial icon
    if (toggleBtn) {
      toggleBtn.textContent = root.classList.contains("dark") ? "🌙" : "🌞";
    }
  });
</script>
</head>
<body class="flex flex-col max-w-screen bg-gray-100 dark:bg-gray-900 text-gray-700 dark:text-gray-300">

<button id="toggleTheme" class="fixed top-4 right-4 z-50 p-2 bg-gray-200 dark:bg-gray-800 rounded-md">
  🌞 🌙
</button>


  <!-- Main Content Area -->
  <main class="flex-1 overflow-y-auto p-5">

    <section id="home" class="">
      <h1 class="text-2xl md:text-3xl font-bold">Hi, I'm Michael Paul</h1>
      <p class="text-lg md:text-2xl font-bold mt-4">Full-Stack Developer | Engineer</p>
    </section>

    <section class="my-10 " id="about">
      <h3 class="mb-4 font-bold text-lg">About</h3>
      <p class="font-serif">Passionate Engineer who loves to work on things related to web and App. Diving deep in NodeJs these days. I'm all about writing clean code and keeping up with the latest trends, aiming to deliver high-quality projects that users actually enjoy. You can find me on Github, LinkedIn and more. Feel free to check out my Resume.</p>
    </section>

    <section class="flex flex-col gap-5" id="education">
      <h3 class="my-5 font-bold text-lg">Education</h3>
      <div class=" flex flex-col md:flex-row gap-5">
        <div class="flex flex-row gap-5">
          <span><img src="./img/alt.svg" class="rounded-full w-16 h-16" alt="alt"></span>
          <div class="flex-col font-serif">
            <p class="py-1 text-sm font-bold">Alt_School Africa</p>
            <p class="py-1 text-xs">Diploma Backend Engineering</p>
            <p class="py-1 text-xs">2024-2025</p>
          </div>
        </div>

        <div class="flex flex-row gap-5">
          <span><img src="./img/NewJerseyIT.png" class="rounded-full w-16 h-16" alt="NJIT"></span>
          <div class="flex-col font-serif">
            <p class="py-1 text-sm font-bold">New Jersey Institute Of Technology</p>
            <p class="py-1 text-xs">BSC Mechanical Engineering</p>
            <p class="py-1 text-xs">2018-2021</p>
          </div>
        </div>
      </div>
    </section>

    <section id="skills" class="my-10">
      <h3 class="mb-4 font-bold text-lg">Skills</h3>
      <div class="relative overflow-hidden rounded-lg bg-gradient-to-r from-purple-600 to-blue-600 p-4">
        <!-- Track: add your skill items inside -->
        <div id="skills-track" class="flex items-center gap-5 will-change-transform transition-transform duration-500 ease-out">
          <img src="./img/alpine.svg" alt="alpine">
          <img src="./img/aws.png" alt="aws">
          <img src="./img/css.png" alt="css">
          <img src="./img/docker.png" alt="docker">
          <img src="./img/html.png" alt="html">
          <img src="./img/js.png" alt="js">
          <img src="./img/laravel.png" alt="laravel">
          <img src="./img/LINUX.png" alt="linux">
          <img src="./img/mongo.png" alt="mongo">
          <img src="./img/mysql.png" alt="mysql">
          <img src="./img/node.png" alt="node">
          <img src="./img/npm.png" alt="npm">
          <img src="./img/Oracle.png" alt="oracle">
          <img src="./img/photoshop.png" alt="photoshop">
          <img src="./img/PHP.png" alt="php">
          <img src="./img/postgresql.png" alt="postgresql">
          <img src="./img/react.png" alt="react">
          <img src="./img/redis.png" alt="redis">
          <img src="./img/vue.png" alt="vue">
          <img src="./img/tailwind.png" alt="tailwind">
        </div>

        <!-- Navigation -->
        <button id="skills-prev" class="absolute left-2 top-1/2 -translate-y-1/2 bg-white/20 hover:bg-white/30 text-white rounded-full w-8 h-8 flex items-center justify-center">‹</button>
        <button id="skills-next" class="absolute right-2 top-1/2 -translate-y-1/2 bg-white/20 hover:bg-white/30 text-white rounded-full w-8 h-8 flex items-center justify-center">›</button>

        <!-- Dots -->
        <div id="skills-dots" class="absolute bottom-2 left-0 right-0 flex justify-center gap-2"></div>
      </div>
    </section>

    <section id="projects" class="font-mono">
      <h2 class="font-bold text-lg md:text-2xl py-3">My Projects</h2>
      <?php
        $projects = [
          ['title' => 'MyGames', 'url' => 'https://mygames-l4vd.onrender.com/'],
          ['title' => 'Lead Extractor', 'url' => 'https://lead-scraper-m8fw.onrender.com'],
          ['title' => 'Birthday Reminder App', 'url' => 'https://birthdayreminderapp-1lo5.onrender.com'],
        ];
      ?>
      <div id="projects-grid" class="flex flex-wrap gap-5 py-3">
        <?php foreach ($projects as $p): $u = htmlspecialchars($p['url']); $t = htmlspecialchars($p['title']); ?>
          <a href="<?= $u ?>" target="_blank" rel="noopener noreferrer" title="<?= $t ?>" class="block">
            <div class="rounded bg-white/80 dark:bg-gray-800 shadow-sm overflow-hidden" style="width:360px;height:240px">
              <div class="project-frame" data-src="<?= $u ?>" style="width:100%;height:100%"></div>
            </div>
          </a>
        <?php endforeach; ?>
      </div>
    </section>

  <!-- Contact Form -->
  <section class="flex font-mono flex-col w-full py-7 md:py-5" id="contact">
    <span class="text-lg font-bold py-2">Do you have any Project? <span class="text-purple-600">Let’s Talk</span></span>
    <form action="./form/contact.php" method="post" class="flex flex-col gap-5">
      <div>
        <span class="text-sm font-serif after:ml-0.5 after:text-red-500 after:content-['*']">Your name</span>
        <input 
          type="text" 
          name="name" 
          class="text-xs dark:text-white border-b border-slate-500 focus:border-2 focus:border-purple-400 focus:ring-2 focus:ring-purple-400 focus:outline-none transition duration-200 py-1 px-2"
        >
      </div>
      <div>
        <span class="text-sm font-serif after:ml-0.5 after:text-red-500 after:content-['*']">Email</span>
        <input 
          type="email" 
          name="mail" 
          class="text-xs dark:text-white border-b border-slate-500 focus:border-2 focus:border-purple-400 focus:ring-2 focus:ring-purple-400 focus:outline-none transition duration-200 py-1 px-2"
        >
      </div>
      <div>
        <span class="text-sm font-serif after:ml-0.5 after:text-red-500 after:content-['*']">Phone Number</span>
        <input 
          type="text" 
          name="number" 
          class="text-xs dark:text-white border-b border-slate-500 focus:border-2 focus:border-purple-400 focus:ring-2 focus:ring-purple-400 focus:outline-none transition duration-200 py-1 px-2"
        >
      </div>
      <div class="mt-5">
        <span class="text-sm font-serif after:ml-0.5 after:text-red-500 after:content-['*']">Message</span>
        <textarea 
          name="message" 
          class="text-xs dark:text-white border border-slate-500 focus:border-2 focus:border-purple-400 focus:ring-2 focus:ring-purple-400 focus:outline-none transition duration-200 py-2 px-2"
        ></textarea>
      </div>
      <input type="hidden" name="uniqueId" value="<?php echo $uniqueId; ?>">
      <div class="flex">
        <button 
          type="submit" 
          name="submit" 
          class="flex justify-center items-center py-1 rounded-md w-20 text-base font-semibold bg-purple-600 text-white motion-preset-wobble motion-duration-2000 hover:motion-preset-shake hover:motion-duration-1000"
        >
          Submit
        </button>
      </div>
    </form>
    
  </section>
  <script>
    // Skills slider logic – smooth, non-overlapping transitions
    document.addEventListener('DOMContentLoaded', () => {
      const track = document.getElementById('skills-track');
      const prevBtn = document.getElementById('skills-prev');
      const nextBtn = document.getElementById('skills-next');
      const dotsWrap = document.getElementById('skills-dots');
      if (!track) return;

      const TARGET_MIN_ITEM_WIDTH = 140; // px; adjust to taste
      const TRANSITION_MS = 600;          // slide duration
      const AUTOPLAY_PAUSE_MS = 1400;     // pause between slides

      let originalItems = Array.from(track.children).map(el => ({ el, clone: false }));
      let visible = 1;
      let itemWidth = 0;
      let index = 0;
      let groups = 1;
      let autoTimer;
      let isAnimating = false;
      let isAutoplay = true;

      function clearClones() {
        Array.from(track.children).forEach(child => {
          if (child.dataset.clone === 'true') child.remove();
        });
      }

      function setWidths() {
        const container = track.parentElement;
        const containerWidth = container.clientWidth;
        visible = Math.max(1, Math.floor(containerWidth / TARGET_MIN_ITEM_WIDTH));
        itemWidth = Math.floor(containerWidth / visible);
        Array.from(track.children).forEach(child => {
          child.style.width = itemWidth + 'px';
          child.style.height = '96px';
          child.style.display = 'flex';
          child.style.alignItems = 'center';
          child.style.justifyContent = 'center';
        });
      }

      function buildDots() {
        dotsWrap.innerHTML = '';
        const total = originalItems.length;
        if (total === 0) { groups = 0; return; }
        groups = Math.ceil(total / visible);
        for (let i = 0; i < groups; i++) {
          const dot = document.createElement('button');
          dot.type = 'button';
          dot.setAttribute('aria-label', `Go to slide ${i + 1}`);
          dot.className = 'w-2.5 h-2.5 rounded-full bg-white/40 hover:bg-white/80 transition';
          if (i === 0) dot.style.backgroundColor = 'rgba(255,255,255,1)';
          dot.addEventListener('click', () => { stopAuto(); goToGroup(i); startAuto(); });
          dotsWrap.appendChild(dot);
        }
      }

      function updateActiveDot() {
        const activeGroup = Math.floor(index / visible) % groups;
        const dots = Array.from(dotsWrap.children);
        dots.forEach((d, i) => d.style.backgroundColor = i === activeGroup ? 'rgba(255,255,255,1)' : 'rgba(255,255,255,0.4)');
      }

      const transitionCSS = `transform ${TRANSITION_MS}ms cubic-bezier(0.22, 0.61, 0.36, 1)`;
      function applyTransform(withTransition = true) {
        track.style.transition = withTransition ? transitionCSS : 'none';
        track.style.transform = `translate3d(${-index * itemWidth}px, 0, 0)`;
        if (!withTransition) {
          // Force reflow so the next transition reliably applies
          void track.offsetWidth;
        }
        updateActiveDot();
      }

      function goToGroup(groupIndex) {
        if (isAnimating) return;
        index = groupIndex * visible;
        animateToIndex();
      }

      function animateToIndex() {
        if (isAnimating) return;
        isAnimating = true;
        const total = originalItems.length;

        applyTransform(true);
        const onEnd = () => {
          track.removeEventListener('transitionend', onEnd);
          // Seamless wrap if we stepped onto the clones
          if (index >= total) {
            index = 0;
            applyTransform(false);
          } else if (index < 0) {
            index = total - 1;
            applyTransform(false);
          }
          isAnimating = false;
          if (isAutoplay) queueNext();
        };
        track.addEventListener('transitionend', onEnd, { once: true });
      }

      function nextStep() {
        if (isAnimating) return;
        index += 1;
        animateToIndex();
      }

      function prevStep() {
        if (isAnimating) return;
        // If we're at the start, jump to the clone area (end) without transition
        if (index === 0) {
          index = originalItems.length;
          applyTransform(false);
          void track.offsetWidth;
        }
        index -= 1;
        animateToIndex();
      }

      function queueNext() {
        clearTimeout(autoTimer);
        if (!isAutoplay) return;
        autoTimer = setTimeout(() => {
          nextStep();
        }, AUTOPLAY_PAUSE_MS);
      }

      function startAuto() {
        isAutoplay = true;
        queueNext();
      }
      function stopAuto() {
        isAutoplay = false;
        clearTimeout(autoTimer);
      }

      function setup() {
        stopAuto();
        clearClones();

        // ensure all original items are in track
        track.innerHTML = '';
        originalItems.forEach(({ el }) => track.appendChild(el));

        // set widths for originals
        setWidths();

        const total = originalItems.length;
        if (total === 0) {
          if (prevBtn) prevBtn.style.display = 'none';
          if (nextBtn) nextBtn.style.display = 'none';
          dotsWrap.innerHTML = '';
          return;
        }
        if (prevBtn) prevBtn.style.display = '';
        if (nextBtn) nextBtn.style.display = '';

        // If fewer items than a full view, duplicate to fill visible slots
        if (total < visible) {
          const fillCount = visible - total;
          for (let i = 0; i < fillCount; i++) {
            const fillClone = originalItems[i % total].el.cloneNode(true);
            fillClone.dataset.clone = 'true';
            track.appendChild(fillClone);
          }
        }

        // append clones to allow seamless loop (mirror the first `visible` items)
        for (let i = 0; i < Math.min(visible, total); i++) {
          const clone = originalItems[i].el.cloneNode(true);
          clone.dataset.clone = 'true';
          track.appendChild(clone);
        }

        // ensure clones are sized too
        setWidths();

        // reset state and dots
        index = 0;
        applyTransform(false);
        buildDots();
        startAuto();
      }

      // Controls
      if (prevBtn) prevBtn.addEventListener('click', () => { stopAuto(); prevStep(); startAuto(); });
      if (nextBtn) nextBtn.addEventListener('click', () => { stopAuto(); nextStep(); startAuto(); });

      // Pause on hover
      const wrapper = track.parentElement;
      wrapper.addEventListener('mouseenter', stopAuto);
      wrapper.addEventListener('mouseleave', startAuto);

      // Handle resize (debounced)
      let resizeTimer;
      window.addEventListener('resize', () => {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(setup, 200);
      });

      setup();
    });
  </script>
  <script>
    // Lazy-load tiny iframes as project previews (80x100)
    document.addEventListener('DOMContentLoaded', () => {
      const frames = document.querySelectorAll('.project-frame');
      if (!('IntersectionObserver' in window)) {
        frames.forEach(loadFrame);
        return;
      }
      const io = new IntersectionObserver((entries, obs) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            loadFrame(entry.target);
            obs.unobserve(entry.target);
          }
        });
      }, { rootMargin: '200px' });
      frames.forEach(el => io.observe(el));

      function loadFrame(el) {
        const src = el.getAttribute('data-src');
        if (!src || el.dataset.loaded) return;
        el.dataset.loaded = '1';
        const iframe = document.createElement('iframe');
        iframe.src = src;
        iframe.loading = 'lazy';
        iframe.referrerPolicy = 'no-referrer';
        iframe.title = 'Preview';
        iframe.setAttribute('sandbox', 'allow-scripts');
        iframe.style.width = '100%';
        iframe.style.height = '100%';
        iframe.style.border = '0';
        iframe.style.pointerEvents = 'none'; // allow clicking the parent link
        el.innerHTML = '';
        el.appendChild(iframe);
      }
    });
  </script>
</main>
</body>
</html>
