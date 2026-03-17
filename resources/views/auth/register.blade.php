<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar S-Tech 2026 - Soedirman Technophoria</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-950 text-gray-100 font-sans min-h-screen flex flex-col">

    <nav class="bg-gray-900 border-b border-gray-800 p-4 shadow-md">
        <div class="container mx-auto flex items-center justify-between">
            <div class="w-10 h-10 bg-slate-800 border border-slate-700 rounded-lg flex items-center justify-center text-xs text-slate-500 italic">
                [Logo]
            </div>
            
            <button class="lg:hidden text-white focus:outline-none">
                <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
            
            <div class="hidden lg:flex items-center space-x-6 text-sm font-medium">
                <a href="/" class="text-gray-300 hover:text-white transition-colors">Beranda</a>
                <a href="/#about" class="text-gray-300 hover:text-white transition-colors">Tentang Lomba</a>
                <a href="/#timeline" class="text-gray-300 hover:text-white transition-colors">Timeline</a>
                <a href="/#contact" class="text-gray-300 hover:text-white transition-colors">Contact</a>
            </div>
        </div>
    </nav>

    <main class="flex-grow flex items-center justify-center p-4 py-12 md:p-10">
        <div class="bg-gray-900 border border-gray-800 p-8 rounded-2xl shadow-2xl w-full max-w-xl transform transition-all duration-300 hover:border-blue-900">
            
            <h1 class="text-4xl font-extrabold mb-3 text-center tracking-tighter text-white">
                Form <span class="bg-clip-text text-transparent bg-gradient-to-r from-blue-400 to-purple-500">Pendaftaran</span> Tim
            </h1>
            <p class="text-gray-400 mb-10 text-center max-w-sm mx-auto">
                Silakan isi data awal tim kamu untuk cabang lomba Web Development S-Tech 2026.
            </p>
            
            <form action="#" method="POST" class="space-y-6">
                
                <div>
                    <label for="nama_tim" class="block text-sm font-medium text-gray-300 mb-2">Nama Tim <span class="text-red-500">*</span></label>
                    <input type="text" id="nama_tim" name="nama_tim" required 
                        class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-xl text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all"
                        placeholder="Contoh: TechBros UNSOED">
                </div>

                <div>
                    <label for="asal_instansi" class="block text-sm font-medium text-gray-300 mb-2">Asal Perguruan Tinggi/Sekolah <span class="text-red-500">*</span></label>
                    <input type="text" id="asal_instansi" name="asal_instansi" required 
                        class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-xl text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all"
                        placeholder="Contoh: Universitas Jenderal Soedirman">
                </div>

                <div>
                    <label for="email_ketua" class="block text-sm font-medium text-gray-300 mb-2">Email Aktif Ketua <span class="text-red-500">*</span></label>
                    <input type="email" id="email_ketua" name="email_ketua" required 
                        class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-xl text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all"
                        placeholder="email.ketua@gmail.com">
                </div>
                
                <div class="flex items-start mb-6">
                    <div class="flex items-center h-5">
                        <input id="agreement" name="agreement" type="checkbox" required class="w-4 h-4 text-blue-600 bg-gray-800 border-gray-700 rounded focus:ring-blue-500 focus:ring-offset-gray-900">
                    </div>
                    <label for="agreement" class="ml-3 text-sm text-gray-400">Saya menyetujui <a href="#" class="text-blue-500 hover:underline">Syarat & Ketentuan</a> pendaftaran.</label>
                </div>

                <button type="submit" 
                    class="w-full px-8 py-4 bg-gradient-to-r from-blue-500 to-purple-600 text-white font-bold rounded-xl shadow-lg hover:from-blue-600 hover:to-purple-700 transform hover:scale-[1.02] transition-all duration-300 text-lg">
                    Daftar Sekarang
                </button>
            </form>
            
        </div>
    </main>

</body>
</html>