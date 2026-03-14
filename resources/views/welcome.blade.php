<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soedirman Technophoria 2026</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased bg-slate-900 text-slate-200">

    <nav class="bg-slate-900/80 border-b border-slate-800 sticky top-0 z-50 backdrop-blur-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex justify-between items-center">
            
            <div class="flex items-center w-1/4">
                <div class="w-10 h-10 bg-slate-800 border border-slate-700 rounded-lg flex items-center justify-center text-xs text-slate-500 italic">
                    [Logo]
                </div>
            </div>
            
            <div class="hidden md:flex flex-1 justify-center items-center space-x-10 text-sm font-medium">
                <a href="#home" class="text-slate-300 hover:text-white transition">Home</a>
                <a href="#about" class="text-slate-300 hover:text-white transition">About</a>
                
                <div class="relative group">
                    <button class="flex items-center gap-1.5 text-slate-300 hover:text-white transition py-2">
                        Contact Us
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-slate-400 group-hover:text-white transition-transform duration-200 group-hover:rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>

                    <div class="absolute left-1/2 -translate-x-1/2 mt-2 w-[480px] bg-[#0b1120] border border-slate-700/60 rounded-xl p-6 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 shadow-2xl shadow-black/50">
                        <div class="grid grid-cols-2 gap-x-8 gap-y-8">
                            <a href="#" class="block group/item">
                                <h4 class="text-white font-semibold mb-1.5 group-hover/item:text-blue-400 transition">WhatsApp</h4>
                                <p class="text-slate-400 text-xs leading-relaxed">Reach out to us directly! Quick responses for your important questions.</p>
                            </a>
                            <a href="#" class="block group/item">
                                <h4 class="text-white font-semibold mb-1.5 group-hover/item:text-blue-400 transition">Instagram</h4>
                                <p class="text-slate-400 text-xs leading-relaxed">Look before you enter! Instagram makes it easy to track our latest updates.</p>
                            </a>
                            <a href="#" class="block group/item">
                                <h4 class="text-white font-semibold mb-1.5 group-hover/item:text-blue-400 transition">Email</h4>
                                <p class="text-slate-400 text-xs leading-relaxed">Send us an email! Formal inquiries and document submissions go here.</p>
                            </a>
                            <a href="#" class="block group/item">
                                <h4 class="text-white font-semibold mb-1.5 group-hover/item:text-blue-400 transition">YouTube</h4>
                                <p class="text-slate-400 text-xs leading-relaxed">Discover content with ease! Watch tutorials and past event highlights.</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex justify-end w-1/4">
                <a href="{{ route('register') }}" class="bg-blue-600 text-white px-6 py-2.5 rounded-lg hover:bg-blue-500 transition shadow-lg shadow-blue-900/20 text-sm font-semibold">
                    Register
                </a>
            </div>
        </div>
    </nav>

    <header id="home" class="relative overflow-hidden pt-32 pb-24 text-center">
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full h-full bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] from-blue-900/20 via-transparent to-transparent -z-10"></div>
        <div class="max-w-4xl mx-auto px-4">
            <h1 class="text-6xl font-extrabold mb-6 tracking-tight text-white">
                Soedirman <span class="text-blue-500">Technophoria</span> 2026
            </h1>
            <p class="text-lg mb-10 text-slate-400 leading-relaxed">
                "Innovating the Future with AI & Technology" <br> 
                Ajang kompetisi teknologi tingkat nasional yang diselenggarakan oleh Universitas Jenderal Soedirman.
            </p>
            <div class="flex justify-center gap-4">
                <a href="{{ route('register') }}" class="bg-blue-600 text-white px-8 py-3 rounded-lg font-bold hover:bg-blue-500 transition shadow-xl shadow-blue-600/20">Mulai Pendaftaran</a>
                <a href="#about" class="bg-slate-800 text-slate-200 px-8 py-3 rounded-lg font-bold hover:bg-slate-700 transition">Pelajari Lebih Lanjut</a>
            </div>
        </div>
    </header>

    <section id="about" class="py-24 max-w-7xl mx-auto px-4 border-t border-slate-800">
        <div class="grid md:grid-cols-2 gap-16 items-center">
            <div class="relative">
                <div class="absolute -inset-1 bg-gradient-to-r from-blue-600 to-cyan-600 rounded-2xl blur opacity-20"></div>
                <div class="relative bg-slate-800 h-80 rounded-2xl flex items-center justify-center border border-slate-700 overflow-hidden text-slate-500 italic">
                    [Dokumentasi S-Tech Tahun Sebelumnya]
                </div>
            </div>
            <div>
                <h2 class="text-3xl font-bold mb-6 text-white">Membangun Ekosistem Digital</h2>
                <p class="text-slate-400 leading-relaxed mb-6">
                    Soedirman Technophoria bukan sekadar kompetisi. Kami hadir sebagai platform bagi inovator muda untuk menguji ide, mengasah skill teknis, dan berkolaborasi dalam menciptakan solusi teknologi yang berdampak nyata.
                </p>
                <div class="flex gap-4">
                    <div class="bg-slate-800 p-4 rounded-lg border border-slate-700 w-1/2">
                        <span class="block text-2xl font-bold text-blue-400">10+</span>
                        <span class="text-sm text-slate-500 uppercase tracking-wider">Universitas</span>
                    </div>
                    <div class="bg-slate-800 p-4 rounded-lg border border-slate-700 w-1/2">
                        <span class="block text-2xl font-bold text-blue-400">500+</span>
                        <span class="text-sm text-slate-500 uppercase tracking-wider">Peserta</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="detail-lomba" class="bg-slate-800/50 py-24 border-y border-slate-800">
        <div class="max-w-5xl mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-white mb-4">Informasi Kompetisi</h2>
                <div class="h-1 w-20 bg-blue-600 mx-auto"></div>
            </div>
            <div class="bg-slate-900 border border-slate-700 rounded-3xl p-8 md:p-12 shadow-2xl">
                <div class="flex flex-col md:flex-row gap-10">
                    <div class="md:w-1/3">
                        <h3 class="text-2xl font-bold text-blue-400 mb-4">Timeline Utama</h3>
                        <ul class="space-y-4 text-slate-400">
                            <li class="flex items-center gap-3">
                                <span class="w-2 h-2 bg-blue-500 rounded-full"></span>
                                Pendaftaran: Mar - Apr 2026
                            </li>
                            <li class="flex items-center gap-3">
                                <span class="w-2 h-2 bg-slate-600 rounded-full"></span>
                                Penyisihan: Mei 2026
                            </li>
                            <li class="flex items-center gap-3">
                                <span class="w-2 h-2 bg-slate-600 rounded-full"></span>
                                Grand Final: Juni 2026
                            </li>
                        </ul>
                    </div>
                    <div class="md:w-2/3 border-l border-slate-800 md:pl-10">
                        <h3 class="text-2xl font-bold text-white mb-4">Deskripsi Kompetisi</h3>
                        <p class="text-slate-400 leading-relaxed mb-6">
                            [Placeholder: Masukkan detail peraturan umum, kriteria penilaian, atau total hadiah di sini. Bagian ini sekarang lebih luas dan fokus pada satu informasi utama agar calon peserta lebih paham mengenai alur perlombaan.]
                        </p>
                        <button class="text-blue-400 font-bold flex items-center gap-2 hover:text-blue-300 transition uppercase tracking-widest text-sm">
                            Unduh Guidebook Lengkap (.PDF)
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="sponsor" class="py-20 bg-slate-900">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <h2 class="text-2xl font-bold text-white mb-12">Didukung Oleh</h2>
            <div class="flex flex-wrap justify-center items-center gap-8 md:gap-16">
                <div class="h-20 w-40 bg-slate-800 border border-slate-700 rounded-xl flex items-center justify-center text-slate-500 text-sm font-semibold hover:bg-slate-700 transition cursor-pointer">
                    [Sponsor Utama]
                </div>
                <div class="h-16 w-32 bg-slate-800 border border-slate-700 rounded-xl flex items-center justify-center text-slate-500 text-xs hover:bg-slate-700 transition cursor-pointer">
                    [Sponsor 2]
                </div>
                <div class="h-16 w-32 bg-slate-800 border border-slate-700 rounded-xl flex items-center justify-center text-slate-500 text-xs hover:bg-slate-700 transition cursor-pointer">
                    [Media Partner]
                </div>
            </div>
        </div>
    </section>

    <footer id="footer" class="py-12 text-center border-t border-slate-800 bg-slate-950">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-center gap-6 mb-8">
                <div class="text-left">
                    <h4 class="text-white font-bold mb-2">Kontak Kami</h4>
                    <p class="text-slate-500 text-sm">Email: technophoria@unsoed.ac.id</p>
                    <p class="text-slate-500 text-sm">WhatsApp: +62 812-XXXX-XXXX (Panitia)</p>
                </div>
                <div class="flex justify-center items-center gap-8 grayscale opacity-40 hover:grayscale-0 hover:opacity-100 transition duration-500">
                    <span class="text-lg font-black italic">HMIF UNSOED</span>
                    <span class="text-lg font-black italic">DIVISI KEILMUAN</span>
                </div>
            </div>
            <div class="border-t border-slate-800 pt-8 text-slate-600 text-sm">
                &copy; 2026 Soedirman Technophoria. Build for Informatics Excellence.
            </div>
        </div>
    </footer>

</body>
</html>