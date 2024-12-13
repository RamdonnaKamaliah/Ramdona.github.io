<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <script src="https://unpkg.com/scrollreveal"></script>
</head>

<body class="bg-background">

    <header class="fixed top-0 right-0 left-0 md:py-1 transition-all duration-300 z-50">
        <nav class="max-w-7xl mx-auto bg-gray-800 md:bg-transparent p-5 order-[10001]">
            <div class="flex items-center justify-between">
                <a href="/" class="text-white font-bold text-lg flex items-center gap-3">
                    <img src="{{ asset('assets/img/Letter_K_Snowflake_Logo-removebg-preview.png') }}" alt="Logo"
                        class="h-10 w-auto">
                </a>
                <!-- only for large device -->
                <div class="hidden md:flex space-x-10">
                    <a href="#home" class="text-white hover:text-gray-400 cursor-pointer">Home</a>
                    <a href="#about" class="text-white hover:text-gray-400 cursor-pointer">About</a>
                    <a href="#project" class="text-white hover:text-gray-400 cursor-pointer">Project</a>
                    <a href="#skill" class="text-white hover:text-gray-400 cursor-pointer">Skill</a>
                    <a href="#certificate" class="text-white hover:text-gray-400 cursor-pointer">Certificate</a>
                    <a href="#contact" class="text-white hover:text-gray-400 cursor-pointer">Contact</a>
                </div>
                <!-- menu btn, only disply on mobile -->
                <div class="md:hidden">
                    <button id="mobile-menu-button" class="text-white text-2xl">
                        <i class="bx bx-menu"></i>
                    </button>
                </div>
            </div>

            <!-- mobile menu -->
            <div id="mobile-menu" class="hidden md:hidden">
                <a href="#home" class="block text-white py-2 mt-3 hover:bg-gray-700">Home</a>
                <a href="#projects" class="block text-white py-2 hover:bg-gray-700">Projects</a>
                <a href="#resume" class="block text-white py-2 hover:bg-gray-700">Resume</a>
            </div>
        </nav>
    </header>

    <!-- Header End -->

    <!-- Hero section -->

    <section class="w-full mx-auto relative" id="home">
        <!-- Gelombang di Bagian Bawah -->
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="absolute bottom-0 w-full">
            <path fill="hsl(212deg 20% 14.71%)" fill-opacity="1"
                d="M0,224L48,208C96,192,192,160,288,149.3C384,139,480,149,576,160C672,171,768,181,864,165.3C960,149,1056,107,1152,101.3C1248,96,1344,128,1392,144L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg>

        <!-- Flex Container -->
        <div class="flex flex-col-reverse md:flex-row justify-between items-center text-white gap-4 md:gap-10">
            <!-- Kolom Kiri -->
            <div class="md:w-1/2 z-10 md:ml-20 md:pt-32">
                @foreach ($home as $row)
                    <p class="text-xl font-medium mb-6">
                        Hallo<span class="bg-gradient-to-r from-[#6A42C2] to-[#563A9C] text-transparent bg-clip-text">
                            I'm
                        </span>
                    </p>
                    <h1
                        class="font-bold text-4xl tracking-[3.22px] mb-5 bg-gradient-to-r from-[#9b4dca] to-[#7a3c97] text-transparent bg-clip-text">
                        {{ $row->title }}
                    </h1>
                    <p class="text-2xl font-montserrat mb-5">
                        {{ $row->subtitle }}
                    </p>
                    <p class="text-xl mb-12 md:w-3/4 text-justify leading-8">
                        {{ $row->description }}
                    </p>
                @endforeach

                <button
                    class="relative inline-block py-4 px-10 rounded-lg text-white font-bold bg-gradient-to-r from-[#9b4dca] to-[#7a3c97] transition duration-500 hover:scale-105 hover:shadow-lg  focus:outline-none focus:ring-4 focus:ring-[#9b4dca]/70">
                    <a href="#about" class="flex items-center gap-2">
                        Let's Talk
                    </a>
                </button>



            </div>

            <!-- Kolom Gambar -->
            <div class="md:w-1/2 z-10">
                <img src="{{ asset('storage/' . $row->picture) }}" alt="{{ $row->picture }}"
                    class="w-full md:mr-20 pt-6" />
            </div>
        </div>
    </section>



    <!-- About Section Start -->
    <section id="about"
        class="pt-0s pb-32 bg-customDarkBlue background-image: radial-gradient(circle at 40% 91%, rgba(251, 251, 251,0.04) 0%, rgba(251, 251, 251,0.04) 50%,rgba(229, 229, 229,0.04) 50%, rgba(229, 229, 229,0.04) 100%),radial-gradient(circle at 66% 97%, rgba(36, 36, 36,0.04) 0%, rgba(36, 36, 36,0.04) 50%,rgba(46, 46, 46,0.04) 50%, rgba(46, 46, 46,0.04) 100%),radial-gradient(circle at 86% 7%, rgba(40, 40, 40,0.04) 0%, rgba(40, 40, 40,0.04) 50%,rgba(200, 200, 200,0.04) 50%, rgba(200, 200, 200,0.04) 100%),radial-gradient(circle at 15% 16%, rgba(99, 99, 99,0.04) 0%, rgba(99, 99, 99,0.04) 50%,rgba(45, 45, 45,0.04) 50%, rgba(45, 45, 45,0.04) 100%),radial-gradient(circle at 75% 99%, rgba(243, 243, 243,0.04) 0%, rgba(243, 243, 243,0.04) 50%,rgba(37, 37, 37,0.04) 50%, rgba(37, 37, 37,0.04) 100%),linear-gradient(90deg, rgb(34, 222, 237),rgb(135, 89, 215));">
        <div class="container pt-10">
            <div class="flex flex-wrap">
                @foreach ($about as $row)
                    <div class="mb-10 w-full px-4 lg:w-1/2">
                        <h2
                            class="mb-5 max-w-md text-3xl font-bold bg-gradient-to-r from-[#6A42C2] to-[#563A9C] text-transparent bg-clip-text lg:text-4xl ml-8">
                            {{ $row->title }}</h2>
                        <p class="max-w-xl text-white font-medium text-secondary lg:text-lg ml-9" m>
                            {{ $row->description }}
                        </p>
                    </div>
                @endforeach
                <div class="mt-12 mb-8 flex flex-wrap gap-10 items-center justify-center">
                    <p class="text-base md:text-lg text-center text-white md:pl-96 sm:">Check out My:</p>
                    <div class="flex space-x-3 justify-center">
                        <a href="https://www.instagram.com/laughterluv_?igsh=MWd3N2hjaDI4MHRsdQ=="
                            class="text-2xl md:text-3xl bg-gradient-to-r from-[#6A42C2] to-[#563A9C] text-transparent bg-clip-text">
                            <i class="bx bxl-instagram"></i>
                        </a>
                        <a href="https://www.tiktok.com/@gfjaemin11_?_t=8sAmc88d8L9&_r=1"
                            class="text-2xl md:text-3xl bg-gradient-to-r from-[#6A42C2] to-[#563A9C] text-transparent bg-clip-text">
                            <i class="bx bxl-tiktok"></i>
                        </a>
                        <a href="https://x.com/RamdonaK3954"
                            class="text-2xl md:text-3xl bg-gradient-to-r from-[#6A42C2] to-[#563A9C] text-transparent bg-clip-text">
                            <i class="bx bxl-twitter"></i>
                        </a>
                        <a href="https://youtube.com/@sitikamaliahramdhona1029?si=YDktTEKaXu0lVxKB"
                            class="text-2xl md:text-3xl bg-gradient-to-r from-[#6A42C2] to-[#563A9C] text-transparent bg-clip-text">
                            <i class="bx bxl-youtube"></i>
                        </a>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <!-- About Section End -->

    <!-- project section -->
    <section id="project" class="px-5 my-24 mx-auto max-w-7xl">
        <div class="text-center text-white">
            <h2
                class="text-3xl font-bold mb-5 bg-gradient-to-r from-[#9b4dca] to-[#7a3c97] text-transparent bg-clip-text">
                <span class="text-primary">My</span> Project
            </h2>
            <p class="font-medium text-secondary md:text-lg mx-auto max-w-prose">
                These are some of the languages ​​that I have studied. I use this language to create
                <span class="font-bold text-slate-200 hover:underline">Front-End, Back-End, and Design</span>.
            </p>
        </div>

        <!-- Grid Container Proyek -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 py-10 cursor-pointer">
            @foreach ($project as $project)
                <!-- Kotak proyek (Flex) -->
                <div class="project-card flex flex-col items-center">
                    <!-- Gambar proyek -->
                    <div class="border border-primary shadow-xl shadow-[#5dadec3b] rounded-2xl overflow-hidden">
                        <img src="{{ asset('storage/' . $project->image) }}" alt="Project Image"
                            class="w-full h-[300px] object-cover" />
                    </div>

                    <!-- Deskripsi proyek -->
                    <p class="text-white text-center mt-4 max-w-[741px]">
                        {{ $project->description }}
                    </p>
                </div>
            @endforeach
        </div>
    </section>




    <!-- skill Section Start -->
    <section id="skill" class="pt-36 pb-32 bg-customDarkBlue relative overflow-hidden">
        <div class="absolute inset-0 -z-10">
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                xmlns:svgjs="http://svgjs.dev/svgjs" width="1440" height="560" preserveAspectRatio="none"
                viewBox="0 0 1440 560">
                <g mask="url(&quot;#SvgjsMask1001&quot;)" fill="none">
                    <path
                        d="M463.84 613.93C639.51 585.91 733.28 161.61 1012.38 160.71 1291.48 159.81 1410.69 401.54 1560.92 407.11"
                        stroke="rgba(51,121,194,0.58)" stroke-width="2"></path>
                    <path
                        d="M365.53 563.49C519.19 511.22 543.73 72.83 775.08 59.72 1006.43 46.61 979.86 129.72 1184.63 129.72 1389.41 129.72 1490.31 59.97 1594.18 59.72"
                        stroke="rgba(51,121,194,0.58)" stroke-width="2"></path>
                    <path
                        d="M329.88 579.39C495.69 531.04 533.8 74.48 788.63 62.83 1043.47 51.18 1018.01 132.83 1247.39 132.83 1476.76 132.83 1590.12 63.03 1706.14 62.83"
                        stroke="rgba(51,121,194,0.58)" stroke-width="2"></path>
                    <path
                        d="M135.64 655.23C320.77 653.81 478.02 477.53 853.32 472.62 1228.63 467.71 1380.42 218.88 1571.01 215.02"
                        stroke="rgba(51,121,194,0.58)" stroke-width="2"></path>
                    <path
                        d="M761.17 663.12C879.25 588.3 808.58 179.16 1026.78 171.08 1244.98 163 1421.01 304.44 1557.99 305.48"
                        stroke="rgba(51,121,194,0.58)" stroke-width="2"></path>
                </g>
                <defs>
                    <mask id="SvgjsMask1001">
                        <rect width="1440" height="560" fill="#ffffff"></rect>
                    </mask>
                </defs>
            </svg>
        </div>

        <div class="container relative">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-16">
                    <h2
                        class="text-3xl font-bold mb-5 bg-gradient-to-r from-[#9b4dca] to-[#7a3c97] text-transparent bg-clip-text">
                        <span class="text-primary">My</span>Skill
                    </h2>
                    <p class="font-medium text-white md:text-lg">These are some of the languages ​​that I have
                        These are some of the languages ​​that I have studied, I use this language to create <span
                            class="font-bold text-slate-200 hover:underline">Front-End, Back-End, and Design</span></p>
                </div>
            </div>

            <div class="w-full px-4">
                <div class="flex flex-wrap items-center justify-center">
                    <!-- ALL SKILL -->
                    @foreach ($skill as $row)
                        <span class="max-w-[120px] mx-4 py-4 lg:mx-6 xl:mx-8 dark:opacity-100 ">
                            <img src="{{ asset('storage/' . $row->picture) }}" alt="{{ $row->title }}"
                                height="100" width="100" />
                        </span>
                    @endforeach
                </div>
            </div>
        </div>
        <script>
            ScrollReveal().reveal('img', {
                origin: 'bottom',
                delay: 200,
                duration: 1000,
                scale: 0.9 // Elemen sedikit lebih kecil saat muncul
            });
        </script>
    </section>

    <!-- skill Section End -->

    <!-- certificate Section Start -->
    <section id="certificate" class="bg-primary pt-36 pb-32 dark:bg-dark">
        <div class="container">
            <div class="w-full px-4">
                <div class="mx-auto mb-16 max-w-xl text-center">
                    <h2
                        class="text-3xl font-bold mb-5 bg-gradient-to-r from-[#9b4dca] to-[#7a3c97] text-transparent bg-clip-text">
                        <span class="text-primary">Cer</span>tificate
                    </h2>
                    <p class="text-md font-medium text-white md:text-lg">This is my learning certificate
                        for the past 1 year, this certificate is proof that I have the skills </p>
                </div>
            </div>

            <!-- Flex Container -->
            <div class="flex flex-wrap">
                @foreach ($certificate as $row)
                    <!-- Kotak Sertifikat -->
                    <div class="certificate-card w-full px-4 lg:w-1/2 xl:w-1/3 md:ml-32">
                        <div class="mb-10 overflow-hidden rounded-xl bg-white shadow-lg dark:bg-slate-800">
                            <!-- Gambar -->
                            <div class="relative h-48 w-full">
                                <img src="{{ asset('storage/' . $row->file) }}" alt="{{ $row->title }}"
                                    class="absolute h-full w-full object-cover" />
                            </div>
                            <!-- Konten -->
                            <div class="py-6 px-6">
                                <h3>
                                    <a href="#"
                                        class="mb-3 block truncate text-xl  bg-gradient-to-r from-[#9b4dca] to-[#7a3c97] text-transparent bg-clip-text font-bold">
                                        {{ $row->name }}
                                    </a>
                                </h3>
                                <p class="mb-4 text-base font-medium text-white">
                                    {{ $row->description }}
                                </p>
                                <div class="flex justify-between text-sm font-medium text-gray-600 dark:text-gray-400">
                                    <p>{{ $row->issued_at }}</p>
                                    <p>{{ $row->issued_by }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <script>
            // Animasi untuk seluruh elemen kartu (gambar + konten)
            ScrollReveal().reveal('.certificate-card', {
                origin: 'bottom', // Elemen muncul dari bawah
                distance: '50px', // Jarak elemen bergerak
                duration: 1000, // Durasi animasi
                delay: 200, // Waktu tunggu animasi
                scale: 0.95, // Elemen muncul sedikit lebih kecil sebelum normal
                reset: true // Animasi diulang saat elemen masuk viewport lagi
            });
        </script>
    </section>

    <!-- certificate Section End -->

    <!-- Contact Section Start -->
    <section id="contact" class="pt-36 pb-32 dark:bg-slate-800">
        <div class="container">
            <!-- Header Section -->
            <div class="w-full px-4">
                <div class="mx-auto mb-16 max-w-xl text-center">
                    <h2
                        class="mb-4 text-3xl font-bold bg-gradient-to-r from-[#9b4dca] to-[#7a3c97] text-transparent bg-clip-text sm:text-4xl lg:text-5xl">
                        Contact Me
                    </h2>
                    <p class="text-md font-medium text-white md:text-lg">Any message for me? Let's express it</p>
                </div>
            </div>

            <!-- Form Section -->
            <form action="{{ route('contact.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="w-full lg:mx-auto lg:w-2/3">
                    <!-- Name Field -->
                    <div class="mb-8 w-full px-4">
                        <label for="name" class="text-base font-bold text-white">Name</label>
                        <input type="text" id="name" name="name"
                            class="w-full rounded-md bg-slate-200 p-3 text-dark focus:border-primary focus:outline-none focus:ring-1 focus:ring-primary" />
                    </div>
                    <!-- Email Field -->
                    <div class="mb-8 w-full px-4">
                        <label for="email" class="text-base font-bold text-white">Email</label>
                        <input type="email" id="email" name="email"
                            class="w-full rounded-md bg-slate-200 p-3 text-dark focus:border-primary focus:outline-none focus:ring-1 focus:ring-primary" />
                    </div>
                    <!-- Message Field -->
                    <div class="mb-8 w-full px-4">
                        <label for="message" class="text-base font-bold text-white">Pesan</label>
                        <textarea id="message" name="message"
                            class="h-32 w-full rounded-md bg-slate-200 p-3 text-dark focus:border-primary focus:outline-none focus:ring-1 focus:ring-primary"></textarea>
                    </div>
                    <!-- Submit Button -->
                    <div class="w-full px-4">
                        <button type="submit"
                            class="w-full rounded-full bg-primary py-3 px-8 text-base text-white font-bold bg-gradient-to-r from-[#9b4dca] to-[#7a3c97] transition duration-500 hover:opacity-80 hover:shadow-lg">
                            Submit
                        </button>
                    </div>
                </div>
            </form>
        </div>

        <script>
            // Inisialisasi ScrollReveal
            ScrollReveal({
                reset: true, // Animasi diulang saat elemen masuk viewport lagi
                distance: '50px', // Jarak elemen bergerak
                duration: 1200, // Durasi animasi dalam milidetik
                delay: 200 // Waktu tunggu sebelum animasi dimulai
            });

            // Animasi untuk header section
            ScrollReveal().reveal('h2', {
                origin: 'top', // Muncul dari atas
                delay: 200
            });

            ScrollReveal().reveal('p', {
                origin: 'top', // Muncul dari atas
                delay: 300
            });

            // Animasi untuk setiap field form
            ScrollReveal().reveal('#name', {
                origin: 'left', // Muncul dari kiri
                delay: 400
            });

            ScrollReveal().reveal('#email', {
                origin: 'left', // Muncul dari kiri
                delay: 500
            });

            ScrollReveal().reveal('#message', {
                origin: 'left', // Muncul dari kiri
                delay: 600
            });

            // Animasi untuk tombol submit
            ScrollReveal().reveal('button', {
                origin: 'bottom', // Muncul dari bawah
                delay: 700,
                scale: 0.95 // Elemen sedikit lebih kecil sebelum normal
            });
        </script>
    </section>

    <!-- Contact Section End -->


    <footer class="max-w-7xl mx-auto px-5 my-16">
        <h4 class="text-2xl text-white pt-12 mb-12">Portfolio</h4>
        <div class="text-white md:ml-16 flex flex-col md:flex-row justify-between md:items-center gap-6">
            <div class="md:w-1/3 md:pl-10">
                <h5 class="mb-3">Menu</h5>
                <a href="#about" class="block my-2 text-sm text-slate-300">About Us</a>
                <a href="#project" class="block my-2 text-sm text-slate-300">Project</a>
                <a href="#skill" class="block my-2 text-sm text-slate-300">Skill</a>
                <a href="#certificate" class="block my-2 text-sm text-slate-300">Certificate</a>
                <a href="#contact" class="block my-2 text-sm text-slate-300">Contact</a>
                <a href="#" class="block my-2 text-sm text-slate-300">Terms and Condition</a>
            </div>

            <div class="md:w-1/3">
                <h5 class="mb-3">Skill</h5>
                <a href="#contact" class="block my-2 text-sm text-slate-300">Tailwind</a>
                <a href="#" class="block my-2 text-sm text-slate-300">CSS</a>
                <a href="#" class="block my-2 text-sm text-slate-300">JS</a>
                <a href="#" class="block my-2 text-sm text-slate-300">HTML</a>
                <a href="#" class="block my-2 text-sm text-slate-300">PHP</a>
                <a href="#" class="block my-2 text-sm text-slate-300">Laravel</a>
            </div>

            <div class="md:w-1/3 text-center">
                <h5 class="mb-3">Powered by</h5>
                <a href="https://tailwindcss.com" target="_blank" class="inline-flex items-center space-x-2">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/d/d5/Tailwind_CSS_Logo.svg"
                        alt="Tailwind CSS Logo" class="w-8 h-8">
                    <span class="text-sm text-slate-300">Tailwind CSS</span>
                </a>
            </div>


            <div class="md:w-1/3">
                <!-- Social Buttons -->
                <div class="mt-12 mb-8 flex flex-wrap gap-10 items-center">
                    <p class="text-base md:text-lg">Check out My:</p>
                    <div class="flex space-x-3">
                        <a href="#"
                            class="text-gray-600 text-2xl md:text-3xl hover:text-[#9b4dca] transition-colors duration-300">
                            <i class="bx bxl-instagram"></i>
                        </a>
                        <a href="#"
                            class="text-gray-600 text-2xl md:text-3xl hover:text-[#9b4dca] transition-colors duration-300">
                            <i class="bx bxl-facebook"></i>
                        </a>
                        <a href="#"
                            class="text-gray-600 text-2xl md:text-3xl hover:text-[#9b4dca] transition-colors duration-300">
                            <i class="bx bxl-twitter"></i>
                        </a>
                        <a href="#"
                            class="text-gray-600 text-2xl md:text-3xl hover:text-[#9b4dca] transition-colors duration-300">
                            <i class="bx bxl-linkedin"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <script>
            ScrollReveal({
                reset: true, // Animasi diulang saat elemen masuk viewport lagi
                distance: '50px', // Jarak elemen bergerak
                duration: 1200, // Durasi animasi dalam milidetik
                delay: 200 // Waktu tunggu sebelum animasi dimulai
            });

            // Animasi untuk footer
            ScrollReveal().reveal('footer', {
                origin: 'bottom', // Muncul dari bawah
                delay: 300, // Waktu tunggu tambahan sebelum muncul
                scale: 0.9 // Elemen sedikit lebih kecil sebelum normal
            });
        </script>
    </footer>

    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="js/app.js"></script>
    <script src="js/view.js"></script>

</body>

</html>
