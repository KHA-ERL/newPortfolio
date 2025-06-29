<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./output.css" rel="stylesheet">
  <?php
  require "./form/contact.php";
  require "./form/uid.php";
  ?>
  <script>
    document.addEventListener("DOMContentLoaded", function () {
        const slider = document.getElementById("skills");
        const skills = Array.from(slider.children);
        let index = 0;

        function moveSlider() {
            skills.forEach((skill, i) => {
                skill.style.transform = `translateX(${(i - index) * 20}%)`;
            });
        }

        function nextSlide() {
            index++;
            if (index >= skills.length) {
                let first = skills.shift();  // Move the first element to the end
                slider.appendChild(first);
                skills.push(first);
                index--;  // Adjust index to maintain smooth transition
            }
            moveSlider();
        }

        slider.style.display = "flex";
        slider.style.overflow = "hidden";
        slider.style.scrollBehavior = "smooth";
        slider.style.whiteSpace = "nowrap";
        slider.style.transition = "transform 0.4s ease-in-out";

        skills.forEach(skill => {
            skill.style.minWidth = "120px";
            skill.style.transition = "transform 0.4s ease-in-out";
        });

        setInterval(nextSlide, 1500); // 1 second for transition + 0.5s delay
    });
</script>
</head>
<body class="flex flex-col max-w-screen bg-gray-100 dark:bg-gray-900 text-gray-700 dark:text-gray-300">

  <!-- Main Content Area -->
  <main class="flex-1 overflow-y-auto p-5">

    <section id="home" class="">
      <h1 class="text-2xl md:text-3xl font-bold">Hi, I'm Michael Paul</h1>
      <p class="text-lg md:text-2xl font-bold mt-4">Full-Stack Developer | Engineer</p>
    </section>

    <section class="mt-10 " id="about">
      <h3 class="mb-4 font-bold text-lg">About</h3>
      <p class="mb-4 font-serif">Passionate Engineer who loves to work on things related to web and App. Diving deep in NodeJs these days. I'm all about writing clean code and keeping up with the latest trends, aiming to deliver high-quality projects that users actually enjoy. You can find me on Github, LinkedIn and more. Feel free to check out my Resume.</p>
    </section>

    <section class="mt-10 flex flex-col gap-5" id="education">
      <h3 class="my-5 font-bold text-lg">Education</h3>
      <div class=" flex flex-col md:flex-row gap-5">
        <div class="flex flex-row gap-5">
          <span><img src="./img/yct.svg" class="rounded-full w-16 h-16" alt="yct"></span>
          <div class="flex-col font-serif">
            <p class="py-1 text-sm font-bold">Yaba College of Education</p>
            <p class="py-1 text-xs">ND Mechatronics Engineering</p>
            <p class="py-1 text-xs">2017-2020</p>
          </div>
        </div>
  
        <div class="flex flex-row gap-5">
          <span><img src="./img/alt.svg" class="rounded-full w-16 h-16" alt="alt"></span>
          <div class="flex-col font-serif">
            <p class="py-1 text-sm font-bold">Alt_School Africa</p>
            <p class="py-1 text-xs">Diploma Backend Engineering</p>
            <p class="py-1 text-xs">2024-2025</p>
          </div>
        </div>
      </div>
    </section>

    <section class="flex-flex-col py-5">
      <h3 class="mb-4 font-bold text-lg pb-10">Skills</h3>
      <div class="text-xs font-bold flex flex-row justify-center items-center gap-3" id="skills">
      <div id="skill1" class="flex flex-col border border-gray-400 rounded-md w-32 p-2 gap-2 justify-center items-center">
        <img src="https://www.svgrepo.com/show/374118/tailwind.svg" alt="Tailwind CSS" class="transition-transform group-hover:-translate-y-1 duration-300 object-contain w-16 h-16">
        <span class="whitespace-nowrap">Tailwind CSS</span>
      </div>
    
      <div id="skill2" class="flex flex-col border border-gray-400 rounded-md w-32 p-2 gap-2 justify-center items-center">
        <svg fill="none" alt="SCSS" class="transition-transform group-hover:-translate-y-1 duration-300 object-contain w-16 h-16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 124 141.53"><path d="M10.383 126.892L0 0l124 .255-10.979 126.637-50.553 14.638z" fill="#1b73ba"/><path d="M62.468 129.275V12.085l51.064.17-9.106 104.85z" fill="#1c88c7"/><path d="M100.851 27.064H22.298l2.128 15.318h37.276l-36.68 15.745 2.127 14.808h54.043l-1.958 20.68-18.298 3.575-16.595-4.255-1.277-11.745H27.83l2.042 24.426 32.681 9.106 31.32-9.957 4-47.745H64.765l36.085-14.978z" fill="#fff"/></svg>
        <span class="whitespace-nowrap">SCSS</span>
      </div>
    
      <div id="skill3" class="flex flex-col border border-gray-400 rounded-md w-32 p-2 gap-2 justify-center items-center">
        <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" alt="JavaScript" class="transition-transform group-hover:-translate-y-1 duration-300 object-contain w-16 h-16" viewBox="0 0 280 300"><defs><style>.cls-1{fill:#e6a329;}.cls-2{fill:#f1bf22;}.cls-3{fill:#fff;}.cls-4{fill:#ebebeb;}.cls-5{fill:#231f20;}</style></defs><polygon class="cls-1" points="200.1 98.56 140 98.56 140 98.56 79.9 98.56 91.16 220.76 140 234.6 140 234.6 140 234.6 140 234.6 140 234.6 188.82 220.76 200.1 98.56"/><polygon class="cls-2" points="140 108.52 140 224.25 140 224.25 179.55 213.04 189.18 108.52 140 108.52"/><polygon class="cls-3" points="171.47 123.51 110.64 123.51 106.41 169.26 106.5 168.97 158.17 168.97 156.48 188.33 140 193.08 123.27 188.26 122.26 176.54 107.07 176.54 109.24 199.95 140 208.69 170.76 199.95 174.99 154.02 120.16 154.02 120.86 138.7 158.92 138.7 159.48 147.47 174.81 147.47 171.47 123.51"/><path class="cls-4" d="M140,123.51H110.63l-4.22,45.75.09-.28H140V154H122.28l.7-15.32h17Zm-17.74,53H107.07L109.24,200,140,208.67V193.08l-16.73-4.82Z"/><polygon class="cls-5" points="128.3 80.54 117.61 80.54 117.61 88.21 128.3 88.21 134.03 88.21 135.96 88.21 135.96 65.4 128.3 65.4 128.3 80.54"/><path class="cls-5" d="M162.39,65.51H143.74v8c2.49,2.5,3.8,3.69,7.41,7.3h-7.41v7.28h18.65V80.81l-7.45-7.31h7.45Z"/></svg>
        <span class="whitespace-nowrap">JavaScript</span>
      </div>

      <div id="skill4" class="flex flex-col border border-gray-400 rounded-md w-32 p-2 gap-2 justify-center items-center">
        <img src="https://www.svgrepo.com/show/452075/node-js.svg" alt="Node.js" class="transition-transform group-hover:-translate-y-1 duration-300 object-contain w-16 h-16">
        <span class="whitespace-nowrap">NodeJS</span>
      </div>

      <div id="skill5" class="flex flex-col border border-gray-400 rounded-md w-32 p-2 gap-2 justify-center items-center">
        <svg xmlns="http://www.w3.org/2000/svg" class="transition-transform group-hover:-translate-y-1 duration-300 object-contain w-16 h-16" viewBox="0 0 128 128"><path fill="#77c1d2" fill-rule="evenodd" d="M98.444 35.562 126 62.997 98.444 90.432 70.889 62.997z" clip-rule="evenodd"/><path fill="#2d3441" fill-rule="evenodd" d="m29.556 35.562 57.126 56.876H31.571L2 62.997z" clip-rule="evenodd"/></svg>
        <span class="whitespace-nowrap">AlpineJS</span>
      </div>      

      <div id="skill6" class="flex flex-col border border-gray-400 rounded-md w-32 p-2 gap-2 justify-center items-center">
        <?xml version="1.0" ?><svg enable-background="new 0 0 78.4 73.4" class="transition-transform group-hover:-translate-y-1 duration-300 object-contain w-16 h-16" id="Layer_1" version="1.1" viewBox="0 0 78.4 73.4" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><circle cx="39.2" cy="36.7" fill="#F16529" r="24"/><g><g><defs><path d="M63.2,36.7c0,13.3-10.7,24-24,24c-13.3,0-24-10.7-24-24c0-13.3,10.7-24,24-24C52.4,12.7,63.2,23.4,63.2,36.7z" id="SVGID_43_"/></defs><clipPath id="SVGID_2_"><use overflow="visible" xlink:href="#SVGID_43_"/></clipPath><linearGradient gradientTransform="matrix(0.9887 0.1498 -0.1498 0.9887 -22.8596 37.0456)" gradientUnits="userSpaceOnUse" id="SVGID_3_" x1="7.1003" x2="75.866" y1="-42.1639" y2="-10.1031"><stop offset="0" style="stop-color:#FFFFFF"/><stop offset="0.7212" style="stop-color:#FFFFFF;stop-opacity:0.3676"/><stop offset="1" style="stop-color:#FFFFFF;stop-opacity:0"/></linearGradient><polygon clip-path="url(#SVGID_2_)" fill="url(#SVGID_3_)" opacity="0.5" points="69.9,17.8 13.9,59 -8.5,28.5 47.4,-12.7"/></g></g><g><g><defs><path d="M63.2,36.7c0,13.3-10.7,24-24,24c-13.3,0-24-10.7-24-24c0-13.3,10.7-24,24-24C52.4,12.7,63.2,23.4,63.2,36.7z" id="SVGID_46_"/></defs><clipPath id="SVGID_5_"><use overflow="visible" xlink:href="#SVGID_46_"/></clipPath><linearGradient gradientTransform="matrix(0.9887 0.1498 -0.1498 0.9887 -22.8596 37.0456)" gradientUnits="userSpaceOnUse" id="SVGID_6_" x1="7.1003" x2="75.866" y1="-42.1639" y2="-10.1031"><stop offset="0" style="stop-color:#FFFFFF"/><stop offset="0.7212" style="stop-color:#FFFFFF;stop-opacity:0.3676"/><stop offset="1" style="stop-color:#FFFFFF;stop-opacity:0"/></linearGradient><polygon clip-path="url(#SVGID_5_)" fill="url(#SVGID_6_)" opacity="0.5" points="69.9,17.8 13.9,59 -8.5,28.5 47.4,-12.7"/></g></g><g><polygon enable-background="new    " fill="#FFFFFF" points="32.6,25.6 33.7,25.6 33.7,26.8 34.9,26.8 34.9,23.1 33.7,23.1     33.7,24.4 32.6,24.4 32.6,23.1 31.3,23.1 31.3,26.8 32.6,26.8   "/><polygon enable-background="new    " fill="#FFFFFF" points="36.5,26.8 37.7,26.8 37.7,24.4 38.8,24.4 38.8,23.1 35.4,23.1     35.4,24.4 36.5,24.4   "/><polygon enable-background="new    " fill="#FFFFFF" points="40.5,25 41.4,26.3 41.4,26.3 42.3,25 42.3,26.8 43.5,26.8 43.5,23.1     42.2,23.1 41.4,24.4 40.6,23.1 39.3,23.1 39.3,26.8 40.5,26.8   "/><polygon enable-background="new" fill="#FFFFFF" points="47,25.6 45.3,25.6 45.3,23.1 44.1,23.1 44.1,26.8 47,26.8   "/><path d="M29.6,28.4l1.8,19.6l7.9,2.2l7.9-2.2l1.8-19.6H29.6z M45,34.8h-5.8h-3.4l0.2,2.5h3.2h5.6l-0.7,7.4l-4.9,1.4l0,0l-4.9-1.4l-0.3-3.9h2.4l0.2,2l2.7,0.7h0l0,0l2.7-0.7l0.3-3.1h-3l0,0h-5.4l-0.7-7.3h6h6L45,34.8z" enable-background="new" fill="#FFFFFF"/></g></g></svg>
        <span class="whitespace-nowrap">HTML</span>
      </div>

      <div id="skill7" class="flex flex-col border border-gray-400 rounded-md w-32 p-2 gap-2 justify-center items-center">
        <?xml version="1.0" encoding="utf-8"?><!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
        <svg viewBox="0 0 32 32" class="transition-transform group-hover:-translate-y-1 duration-300 object-contain w-16 h-16" fill="none" xmlns="http://www.w3.org/2000/svg">
          <circle cx="16" cy="16" r="14" fill="#8892BF"/>
          <path d="M14.4392 10H16.1192L15.6444 12.5242H17.154C17.9819 12.5419 18.5986 12.7269 19.0045 13.0793C19.4184 13.4316 19.5402 14.1014 19.3698 15.0881L18.5541 19.4889H16.8497L17.6288 15.2863C17.7099 14.8457 17.6856 14.533 17.5558 14.348C17.426 14.163 17.146 14.0705 16.7158 14.0705L15.3644 14.0573L14.3661 19.4889H12.6861L14.4392 10Z" fill="white"/>
          <path fill-rule="evenodd" clip-rule="evenodd" d="M6.74092 12.5243H10.0036C10.9612 12.533 11.6552 12.8327 12.0854 13.4229C12.5156 14.0132 12.6576 14.8193 12.5115 15.8414C12.4548 16.3085 12.3289 16.7665 12.1341 17.2159C11.9474 17.6652 11.6878 18.0704 11.355 18.4317C10.9491 18.8898 10.5149 19.1805 10.0523 19.304C9.58969 19.4274 9.11076 19.489 8.61575 19.489H7.15484L6.69222 22H5L6.74092 12.5243ZM7.43485 17.9956L8.16287 14.0441H8.40879C8.49815 14.0441 8.5914 14.0396 8.6888 14.0309C9.33817 14.0221 9.87774 14.0882 10.308 14.2291C10.7462 14.37 10.8923 14.9031 10.7462 15.8282C10.5678 16.9296 10.2186 17.5727 9.69926 17.7577C9.1799 17.934 8.53053 18.0176 7.75138 18.0088H7.58094C7.53224 18.0088 7.48355 18.0043 7.43485 17.9956Z" fill="white"/>
          <path fill-rule="evenodd" clip-rule="evenodd" d="M24.4365 12.5243H21.1738L19.4329 22H21.1251L21.5878 19.489H23.0487C23.5437 19.489 24.0226 19.4274 24.4852 19.304C24.9479 19.1805 25.382 18.8898 25.7879 18.4317C26.1207 18.0704 26.3803 17.6652 26.567 17.2159C26.7618 16.7665 26.8877 16.3085 26.9444 15.8414C27.0905 14.8193 26.9486 14.0132 26.5183 13.4229C26.0881 12.8327 25.3942 12.533 24.4365 12.5243ZM22.5958 14.0441L21.8678 17.9956C21.9165 18.0043 21.9652 18.0088 22.0139 18.0088H22.1843C22.9635 18.0176 23.6128 17.934 24.1322 17.7577C24.6515 17.5727 25.0007 16.9296 25.1792 15.8282C25.3253 14.9031 25.1792 14.37 24.7409 14.2291C24.3107 14.0882 23.7711 14.0221 23.1217 14.0309C23.0243 14.0396 22.9311 14.0441 22.8417 14.0441H22.5958Z" fill="white"/>
        </svg>
        <span class="whitespace-nowrap">PHP</span>
      </div>

      <div id="skill8" class="flex flex-col border border-gray-400 rounded-md w-32 p-2 gap-2 justify-center items-center">
        <img src="https://www.svgrepo.com/show/452210/git.svg" alt="Git" class="transition-transform group-hover:-translate-y-1 duration-300 object-contain w-16 h-16">
        <span class="whitespace-nowrap">Git</span>
      </div>

      <div id="skill9" class="flex flex-col border border-gray-400 rounded-md w-32 p-2 gap-2 justify-center items-center">
        <img src="https://1000logos.net/wp-content/uploads/2020/08/MySQL-Logo.png" alt="MySQL" class="transition-transform group-hover:-translate-y-1 duration-300 object-contain w-16 h-16">
        <span class="whitespace-nowrap">MySQL</span>
      </div>

      <div id="skill10" class="flex flex-col border border-gray-400 rounded-md w-32 p-2 gap-2 justify-center items-center">
        <svg xmlns="http://www.w3.org/2000/svg" class="transition-transform group-hover:-translate-y-1 duration-300 object-contain w-16 h-16" fill="none" viewBox="0 0 256 256"><rect width="256" height="256" fill="#023430" rx="60"/><path fill="#10AA50" d="M171.173 107.591C160.636 61.1097 138.676 48.7357 133.074 39.9886C130.764 36.1353 128.717 32.1299 126.949 28C126.653 32.1292 126.109 34.7307 122.599 37.862C115.552 44.1454 85.6217 68.5354 83.1028 121.348C80.756 170.59 119.303 200.953 124.395 204.092C128.311 206.019 133.08 204.133 135.407 202.364C153.988 189.612 179.376 155.614 171.193 107.591"/><path fill="#B8C4C2" d="M128.545 177.871C127.575 190.059 126.88 197.141 124.416 204.106C124.416 204.106 126.033 215.709 127.169 228H131.188C132.147 219.345 133.61 210.753 135.572 202.268C130.369 199.708 128.745 188.566 128.545 177.871Z"/><path fill="#12924F" d="M135.565 202.275C130.307 199.846 128.786 188.469 128.552 177.871C129.852 160.388 130.231 142.849 129.688 125.326C129.412 116.132 129.818 40.1676 127.423 29.0461C129.062 32.8129 130.949 36.4662 133.074 39.9818C138.676 48.7358 160.643 61.1097 171.173 107.591C179.376 155.532 154.126 189.44 135.565 202.275Z"/></svg>
        <span class="whitespace-nowrap">MongoDB</span>
      </div>

      <div id="skill11" class="flex flex-col border border-gray-400 rounded-md w-32 p-2 gap-2 justify-center items-center">
        <?xml version="1.0" encoding="utf-8"?><!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
        <svg alt="Photoshop" class="transition-transform group-hover:-translate-y-1 duration-300 object-contain w-16 h-16" viewBox="0 123.30600000000001 595.279 595.279" xmlns="http://www.w3.org/2000/svg"><radialGradient id="a" cx="-183.69" cy="328.972" r=".76" gradientTransform="matrix(545.6736 0 0 528.3113 100439.305 -173525.125)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#34364e" stop-opacity=".98"/><stop offset="1" stop-color="#0c0824"/></radialGradient><path d="M24.803 155.549h545.674v530.792H24.803V155.549z" fill="url(#a)"/><path d="M24.803 155.549h545.674v530.792H24.803V155.549zM0 711.145h595.28V130.746H0v580.399zm401.318-342.287c-19.595 0-26.291 9.921-26.291 18.106 0 8.929 4.464 15.13 30.756 28.772 38.941 18.851 51.095 36.957 51.095 63.497 0 39.685-30.26 61.016-71.186 61.016-21.579 0-40.182-4.465-50.847-10.665-1.736-.744-1.984-1.984-1.984-3.969v-36.461c0-2.48 1.24-3.225 2.977-1.984 15.626 10.17 33.484 14.634 49.854 14.634 19.595 0 27.78-8.185 27.78-19.347 0-8.929-5.705-16.866-30.757-29.764-35.221-16.866-49.854-33.98-49.854-62.504 0-31.997 25.052-58.536 68.457-58.536 21.331 0 36.213 3.225 44.398 6.945 1.984 1.24 2.48 3.224 2.48 4.96v33.98c0 1.984-1.24 3.225-3.721 2.48-10.913-6.943-27.035-11.16-43.157-11.16zm-213.309 29.516c5.705.496 10.17.496 20.091.496 29.021 0 56.304-10.169 56.304-49.606 0-31.5-19.595-47.375-52.583-47.375-9.921 0-19.347.496-23.812.744v95.741zM143.86 266.668c0-1.736 3.473-2.977 5.456-2.977 15.875-.744 39.438-1.24 63.993-1.24 68.705 0 95.492 37.701 95.492 85.82 0 63-45.638 90.036-101.693 90.036-9.425 0-12.649-.496-19.347-.496v95.245c0 1.984-.744 2.976-2.976 2.976h-37.949c-1.984 0-2.977-.744-2.977-2.976V266.668z" fill="#31c5f0"/></svg>
        <span class="whitespace-nowrap">Photoshop</span>
      </div>

      <div id="skill12" class="flex flex-col border border-gray-400 rounded-md w-32 p-2 gap-2 justify-center items-center">
        <?xml version="1.0" encoding="iso-8859-1"?>
        <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
         <svg alt="JavaScript" class="transition-transform group-hover:-translate-y-1 duration-300 object-contain w-16 h-16" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 495 495" xml:space="preserve"><g><polygon style="fill:#1D1D1F;" points="247.5,0 247.5,40 455,40 455,455 247.5,455 247.5,495 495,495 495,0 	"/><polygon style="fill:#3E3D42;" points="40,455 40,40 247.5,40 247.5,0 0,0 0,495 247.5,495 247.5,455 	"/><path style="fill:#1D1D1F;" d="M144.157,388.053c16.613,1.984,35.279,12.746,50.9,14.646c15.705,1.983,20.565-10.695,20.565-10.695
          s17.673-3.951,36.253-4.406c18.598-0.521,36.203,3.868,36.203,3.868s3.414,7.819,9.787,11.233 c6.373,3.48,20.094,3.951,28.888-5.314c8.811-9.332,32.319-21.087,45.519-28.435c13.284-7.365,10.846-18.597,2.506-22.011
          c-8.34-3.413-15.167-8.794-14.646-19.119c0.454-10.24-7.365-17.067-7.365-17.067s6.844-22.532,0.471-41.197
          c-6.373-18.58-27.392-48.461-43.551-70.926c-16.159-22.532-2.439-48.545-17.151-81.789c-14.714-33.294-52.867-31.326-73.432-17.135
          c-20.565,14.192-14.26,49.386-13.268,66.084c0.992,16.613,0.454,28.501-1.446,32.773c-1.9,4.338-15.167,20.094-23.978,33.294
          c-8.794,13.267-15.168,40.659-21.608,51.959c-6.306,11.233-1.9,21.473-1.9,21.473s-4.405,1.513-7.886,8.879
          c-3.414,7.281-10.241,10.761-22.533,13.133c-12.208,2.505-12.208,10.375-9.265,19.186c2.959,8.794,0,13.721-3.414,24.954
          C110.393,382.672,127.477,386.085,144.157,388.053z M316.849,336.816c8.727,3.817,21.271-1.497,25.088-5.314
          c3.801-3.8,6.491-9.45,6.491-9.45s3.817,1.9,3.43,7.936c-0.404,6.121,2.623,14.848,8.34,17.875
          c5.717,3.01,14.444,7.213,9.921,11.417c-4.608,4.204-30.099,14.461-37.716,22.465c-7.55,7.953-17.471,14.461-23.508,12.544
          c-6.103-1.9-11.434-10.24-8.81-22.448c2.707-12.157,4.994-25.492,4.607-33.109c-0.403-7.617-1.9-17.874,0-19.388
          c1.9-1.497,4.927-0.774,4.927-0.774S308.104,333.017,316.849,336.816z M260.216,131.033c8.407,0,15.184,8.34,15.184,18.597
          c0,7.281-3.414,13.587-8.408,16.614c-1.261-0.521-2.573-1.11-4.019-1.716c3.027-1.496,5.128-5.313,5.128-9.719
          c0-5.767-3.547-10.509-8.004-10.509c-4.338,0-7.954,4.741-7.954,10.509c0,2.103,0.522,4.204,1.379,5.852
          c-2.623-1.06-4.994-1.967-6.894-2.69c-0.992-2.506-1.581-5.331-1.581-8.34C245.048,139.374,251.807,131.033,260.216,131.033z
          M239.398,163.083c4.137,0.723,15.503,5.65,19.708,7.163c4.204,1.446,8.861,4.136,8.407,6.827c-0.521,2.774-2.69,2.774-8.407,6.255
          c-5.65,3.414-17.992,11.031-21.944,11.552c-3.935,0.521-6.171-1.699-10.376-4.406c-4.204-2.758-12.089-9.198-10.106-12.611
          c0,0,6.171-4.725,8.862-7.146C228.233,168.211,235.194,162.309,239.398,163.083z M221.271,133.993
          c6.625,0,12.023,7.886,12.023,17.605c0,1.766-0.202,3.413-0.521,5.061c-1.648,0.521-3.295,1.379-4.877,2.758
          c-0.773,0.656-1.497,1.244-2.152,1.9c1.042-1.967,1.446-4.792,0.975-7.752c-0.908-5.246-4.456-9.13-7.937-8.609
          c-3.498,0.589-5.583,5.398-4.742,10.712c0.925,5.381,4.405,9.264,7.953,8.676c0.202-0.067,0.387-0.134,0.589-0.202
          c-1.698,1.648-3.279,3.094-4.927,4.271c-4.792-2.237-8.34-8.929-8.34-16.815C209.316,141.812,214.629,133.993,221.271,133.993z
          M184.362,261.216c6.827-10.761,11.232-34.286,18.059-42.105c6.895-7.802,12.208-24.432,9.787-31.78
          c0,0,14.713,17.605,24.954,14.713c10.257-2.96,33.311-20.094,36.724-17.151c3.414,2.959,32.773,67.529,35.732,88.094
          c2.96,20.548-1.967,36.254-1.967,36.254s-11.232-2.96-12.679,3.867c-1.446,6.894-1.446,31.865-1.446,31.865
          s-15.184,21.019-38.692,24.499c-23.508,3.414-35.279,0.925-35.279,0.925l-13.2-15.117c0,0,10.258-1.513,8.811-11.821
          c-1.446-10.24-31.344-24.433-36.725-37.179C173.062,293.534,177.451,271.994,184.362,261.216z M126.232,338.33
          c1.177-5.044,16.411-5.044,22.263-8.592c5.852-3.548,7.028-13.738,11.754-16.428c4.657-2.758,13.267,7.029,16.815,12.543
          c3.481,5.381,16.816,28.906,22.264,34.757c5.515,5.902,10.577,13.721,8.996,20.75c-1.496,7.028-9.786,12.157-9.786,12.157
          c-7.415,2.287-28.098-6.642-37.497-10.577c-9.399-3.951-33.311-5.129-36.388-8.609c-3.161-3.548,1.513-11.367,2.757-18.783
          C128.519,348.049,125.039,343.391,126.232,338.33z"/></g></svg>
        <span class="whitespace-nowrap">Linux</span>
      </div>

      <div id="skill13" class="flex flex-col border border-gray-400 rounded-md w-32 p-2 gap-2 justify-center items-center">
        <?xml version="1.0" encoding="utf-8"?>
        <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
         <svg fill="#000000" alt="Wordpress" class="transition-transform group-hover:-translate-y-1 duration-300 object-contain w-16 h-16" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-271 273 256 256" xml:space="preserve"><g><path d="M-140.7,412.2l-38.4,111.6c11.5,3.4,23.6,5.2,36.2,5.2c14.9,0,29.2-2.6,42.5-7.3c-0.3-0.6-0.7-1.1-0.9-1.7L-140.7,412.2z"/><path d="M-271,401c0,50.6,29.4,94.5,72.1,115.2l-61-167.3C-267,364.8-271,382.4-271,401z"/><path d="M-56.6,394.5c0-15.8-5.7-26.8-10.6-35.3c-6.5-10.5-12.6-19.5-12.6-30c0-11.8,8.9-22.7,21.5-22.7c0.5,0,1.1,0.1,1.6,0.1 c-22.8-20.9-53.1-33.6-86.4-33.6c-44.7,0-84.1,23-107,57.7c3,0.1,5.8,0.2,8.2,0.2c13.4,0,34.1-1.6,34.1-1.6 c6.9-0.4,7.7,9.7,0.8,10.6c0,0-6.9,0.8-14.6,1.2l46.6,138.6l28-84l-20-54.6c-6.9-0.4-13.4-1.2-13.4-1.2c-6.9-0.4-6.1-11,0.8-10.6
          c0,0,21.1,1.6,33.7,1.6c13.4,0,34.1-1.6,34.1-1.6c6.9-0.4,7.7,9.7,0.8,10.6c0,0-6.9,0.8-14.6,1.2l46.3,137.6l12.8-42.6
          C-59.8,419.3-56.6,405.5-56.6,394.5z"/><path d="M-30.7,339.6c0.6,4.1,0.9,8.5,0.9,13.2c0,13-2.4,27.6-9.7,45.8l-39.1,113C-40.6,489.4-15,448.2-15,401C-15,378.7-20.7,357.8-30.7,339.6z"/></g></svg>
        <span class="whitespace-nowrap">Wordpress</span>
      </div>
    
      <!-- Repeat for other skills -->
    </section>

    <section class="flex flex-col mt-10 justify-center items-center font-mono gap-3" id="projects">
      <h1 class="font-bold text-lg md:text-2xl">My Projects</h1>
      <h1 class="text-sm md:text-2xl motion-preset-oscillate motion-duration-1500"><a href="https://github.com/KHA-ERL" class="dark:text-orange-300">Check out my latest work</a></h1>
      <h1 class="text-sm md:text-2xl">I love to build things ranging from simple frontend applications to complex full-stack products.</h1>
    </section>

  <!-- Contact Form -->
  <section class="flex font-mono flex-col w-full my-10 md:mb-5" id="contact">
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
</main>
</body>
</html>
