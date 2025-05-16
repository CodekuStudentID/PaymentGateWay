@extends('layouts.layout')
@section('content')

        <div class="w-full max-w-xl bg-white p-8 rounded-xl shadow-lg">
            <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Tambah Produk</h2>

            @if ($errors->any())
                <div class="mb-4 bg-red-100 text-red-700 p-4 rounded">
                    <ul class="list-disc pl-5 space-y-1">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (session('session'))
                <div class="bg-green-100 text-green-800 p-4 rounded mb-4">
                    {{ session('session') }}
                </div>
            @endif

            <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" class="space-y-5">
                @csrf

                <div>
                    <label class="block mb-1 text-sm font-medium text-gray-700">Judul Produk</label>
                    <input type="text" name="title"
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-400"
                        value="{{ old('title') }}" required>
                </div>

                <div>
                    <label class="block mb-1 text-sm font-medium text-gray-700">Deskripsi</label>
                    <textarea name="deskripsi" rows="3"
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-400"
                        required>{{ old('deskripsi') }}</textarea>
                </div>

                <div>
                    <label class="block mb-1 text-sm font-medium text-gray-700">Harga</label>
                    <input type="number" name="harga"
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-400"
                        value="{{ old('harga') }}" required>
                </div>

                <div>
                    <label class="block mb-1 text-sm font-medium text-gray-700">Gambar</label>
                    <input type="file" name="gambar"
                        class="w-full file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100"
                        required>
                </div>

                <div class="text-right">
                    <button type="submit"
                        class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition">Simpan</button>
                </div>
            </form>
        </div>

<div class="overflow-x-auto">
    <table class="min-w-full text-sm text-left text-gray-700 bg-white shadow-md rounded-lg">
        <thead class="bg-gray-100 text-gray-800">
            <tr>
                <th class="px-4 py-2">No</th>
                <th class="px-4 py-2">Judul</th>
                <th class="px-4 py-2">Gambar</th>
            </tr>
        </thead>
        <tbody>
            @if ($data->isEmpty())
                <tr>
                    <td colspan="3" class="px-4 py-4 text-center text-gray-500 italic">
                        No Such Items
                    </td>
                </tr>
            @else
                @foreach ($data as $index => $item)
                    <tr class="border-t hover:bg-gray-50">
                        <td class="px-4 py-2">{{ $index + 1 }}</td>
                        <td class="px-4 py-2">{{ $item->title }}</td>
                        <td class="px-4 py-2">
                            <img src="{{ asset('storage/' . $item->gambar) }}" alt="Gambar" class="w-20 h-auto rounded-md">
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</div>


    </body>

    </html>
@endsection