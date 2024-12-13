const mobileMenuButton = document.getElementById("mobile-menu-button");
const mobileMenu = document.getElementById("mobile-menu");

mobileMenuButton.addEventListener("click", function () {
    mobileMenu.classList.toggle("hidden");
});

const header = document.querySelector("header");
window.addEventListener("scroll", function () {
    // header.classList.toggle("sticky", window.scrollY > 100);

    if (window.scrollY > 100) {
        header.classList.toggle("sticky", window.scrollY > 0);
        header.style.backgroundColor = "rgba(0, 0, 0, 0.8)";
    } else {
        header.style.backgroundColor = "transparent";
    }
});

// smooth scroll for navigation
document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener("click", function (e) {
        e.preventDefault();

        const targetSection = document.querySelector(this.getAttribute("href"));
        const navHeight = document.querySelector("nav").offsetHeight; // Adjust selector
        let extraPadding = 0;
        if (window.innerWidth >= 768) {
            extraPadding = 50; // Apply extra padding only on larger devices
        }

        window.scrollTo({
            top: targetSection.offsetTop - navHeight - extraPadding,
            behavior: "smooth",
        });

        // Reset URL to root path when a link is clicked
        if (window.location.hash) {
            window.location.replace(window.location.pathname);
        }
    });
});

<script src="https://unpkg.com/scrollreveal"></script>;

// Inisialisasi ScrollReveal dengan pengaturan global
ScrollReveal({
    reset: true, // Animasi diulang saat elemen masuk viewport lagi
    distance: "80px", // Jarak elemen bergerak
    duration: 2000, // Durasi animasi dalam milidetik
    delay: 200, // Waktu tunggu sebelum animasi dimulai
});

// Animasi untuk teks "Hallo I'm"
ScrollReveal().reveal(".text-xl", {
    origin: "left", // Elemen muncul dari kiri
    delay: 100, // Waktu tunggu tambahan
});

// Animasi untuk judul besar
ScrollReveal().reveal(".font-bold", {
    origin: "left",
    delay: 200,
});

// Animasi untuk subtitle
ScrollReveal().reveal(".text-2xl", {
    origin: "left",
    delay: 300,
});

// Animasi untuk deskripsi paragraf
ScrollReveal().reveal(".text-justify", {
    origin: "left",
    delay: 400,
});

// Animasi untuk tombol "Let's Talk"
ScrollReveal().reveal(".relative", {
    // Targetkan elemen dengan kelas "relative"
    origin: "bottom", // Elemen muncul dari bawah
    delay: 500,
    scale: 0.95, // Elemen sedikit lebih kecil saat muncul
});

// Animasi untuk judul besar
ScrollReveal().reveal(".font-bold", {
    origin: "top",
    delay: 200,
});

ScrollReveal().reveal(".text-secondary", {
    origin: "top",
    delay: 400,
});
