@extends('layouts.layout')
@section('content')
  <!-- Main Content -->
  <main class="container mx-auto px-4 pt-24 pb-8">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
      @foreach ($products as $product)
        <div class="bg-white rounded-lg shadow-md flex flex-col overflow-hidden hover:shadow-xl transition-shadow duration-300">
          <img src="{{ asset('storage/' . $product->gambar) }}" alt="{{ $product->name }}" class="w-full h-48 object-cover" />
          <div class="p-4 flex flex-col flex-grow">
            <h5 class="text-lg font-semibold text-gray-800 mb-2 truncate">{{ $product->name }}</h5>
            <p class="text-gray-500 text-sm mb-4 flex-grow">{{ $product->deskripsi }}</p>
            <div class="flex items-center justify-between">
              <span class="text-blue-600 font-bold text-lg">Rp{{ number_format($product->harga, 0, ',', '.') }}</span>
              <a href="{{ route('checkout.store', $product->id) }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-1 rounded text-sm transition">
                Beli
              </a>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </main>

</body>
</html>
@endsection