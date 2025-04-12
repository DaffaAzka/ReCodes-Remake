<div>

    <script src="https://cdn.jsdelivr.net/npm/tsparticles@2.12.0/tsparticles.bundle.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Fungsi untuk mengecek apakah dark mode aktif
            function isDarkMode() {
                // Cek apakah preferensi pengguna dark atau light
                if (localStorage.theme === 'dark' || (!('theme' in localStorage) &&
                        window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                    return true;
                } else {
                    return false;
                }
            }

            // Fungsi untuk memuat particles dengan tema yang sesuai
            function loadParticlesWithTheme() {
                const darkMode = isDarkMode();

                // Konfigurasi dinamis berdasarkan tema
                const config = {
                    fullScreen: {
                        enable: true,
                        zIndex: -1
                    },
                    background: {
                        color: {
                            value: darkMode ? "#0a0a0a" : "#f3f4f6" // dark: hitam, light: putih/abu muda
                        }
                    },
                    fpsLimit: 60,
                    particles: {
                        number: {
                            value: 20,
                            density: {
                                enable: true,
                                value_area: 400
                            }
                        },
                        color: {
                            value: darkMode ? "#ffffff" : "#1e293b" // dark: putih, light: slate-800
                        },
                        shape: {
                            type: "circle"
                        },
                        opacity: {
                            value: darkMode ? 0.5 : 0.3, // Light mode lebih transparan
                            random: false
                        },
                        size: {
                            value: 3,
                            random: true
                        },
                        links: {
                            enable: true,
                            distance: 150,
                            color: darkMode ? "#ffffff" : "#334155", // dark: putih, light: slate-700
                            opacity: darkMode ? 0.4 : 0.25, // Light mode lebih transparan
                            width: 1
                        },
                        move: {
                            enable: true,
                            speed: 2,
                            direction: "none",
                            random: false,
                            straight: false,
                            out_mode: "out",
                            bounce: false,
                        }
                    },
                    interactivity: {
                        detect_on: "canvas",
                        events: {
                            onhover: {
                                enable: true,
                                mode: "grab"
                            },
                            onclick: {
                                enable: true,
                                mode: "push"
                            },
                            resize: true
                        },
                        modes: {
                            grab: {
                                distance: 140,
                                line_linked: {
                                    opacity: darkMode ? 1 : 0.5 // Light mode lebih transparan
                                }
                            },
                            push: {
                                particles_nb: 4
                            }
                        }
                    },
                    detectRetina: true
                };

                // Load atau reload tsParticles dengan konfigurasi baru
                if (tsParticles.dom().length > 0) {
                    tsParticles.load("tsparticles", config);
                } else {
                    tsParticles.load("tsparticles", config);
                }
            }

            // Muat particles pertama kali
            loadParticlesWithTheme();

            // Tambahkan listener untuk perubahan tema jika menggunakan toggle tema
            document.addEventListener('themeChanged', function() {
                loadParticlesWithTheme();
            });

            // Atau gunakan MutationObserver untuk mendeteksi perubahan pada HTML class
            const observer = new MutationObserver(function(mutations) {
                mutations.forEach(function(mutation) {
                    if (mutation.attributeName === 'class' &&
                        (mutation.target.classList.contains('dark') ||
                            !mutation.target.classList.contains('dark'))) {
                        loadParticlesWithTheme();
                    }
                });
            });

            // Pantau elemen HTML atau body untuk perubahan class
            observer.observe(document.documentElement, {
                attributes: true
            });
        });
    </script>

</div>
