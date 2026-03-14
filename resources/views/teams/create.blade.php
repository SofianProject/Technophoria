<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Pendaftaran Tim Soedirman Technophoria
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <form action="{{ route('teams.store') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label class="block text-gray-700">Nama Tim</label>
                        <input type="text" name="team_name" class="w-full border-gray-300 rounded-lg shadow-sm" required>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700">Kategori Lomba</label>
                        <select name="competition_category" class="w-full border-gray-300 rounded-lg shadow-sm">
                            <option value="Web Development">Web Development</option>
                            <option value="AI Challenge">AI Challenge</option>
                        </select>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700">Instansi / Universitas</label>
                        <input type="text" name="institution" class="w-full border-gray-300 rounded-lg shadow-sm" required>
                    </div>

                    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
                        Daftar Sekarang
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>