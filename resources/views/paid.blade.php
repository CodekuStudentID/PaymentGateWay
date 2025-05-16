@extends('layouts.layout')
@section('content')

  <!-- Midtrans Snap JS -->
  <script
    type="text/javascript"
    src="https://app.sandbox.midtrans.com/snap/snap.js"
    data-client-key="SB-Mid-client-suWZcxOrlOJJJL-P"
  ></script>

</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center p-6 font-sans">

  <div class="bg-white rounded-lg shadow-lg max-w-3xl w-full flex flex-col md:flex-row overflow-hidden">

    <!-- Product Image -->
    <div class="md:w-1/2">
      <img
        src="{{ asset('storage/' . $product->gambar) }}"
        alt="{{ $product->title }}"
        class="w-full h-full object-cover"
      />
    </div>

    <!-- Product Details & Payment -->
    <div class="md:w-1/2 p-8 flex flex-col justify-between">

      <div>
        <h2 class="text-3xl font-semibold text-blue-700 mb-4">{{ $product->title }}</h2>
        <p class="text-gray-600 mb-6">{{ $product->deskripsi ?? 'No description available.' }}</p>
        <p class="text-2xl font-bold text-indigo-600 mb-8">Rp {{ number_format($product->harga, 0, ',', '.') }}</p>
      </div>

      <div>
        <button
          id="pay-button"
          class="w-full bg-gradient-to-r from-blue-400 to-blue-600 hover:from-blue-600 hover:to-blue-400
          text-white py-3 rounded-lg text-lg font-semibold shadow-md transition-transform transform hover:scale-105"
        >
          Pay Now
        </button>

        <div id="snap-container" class="mt-6"></div>
      </div>

    </div>

  </div>

  <script>
    const payButton = document.getElementById('pay-button');
    payButton.addEventListener('click', function () {
      window.snap.embed(@json($snapToken), {
        embedId: 'snap-container'
      });
    });
  </script>

</body>
</html>
@endsection
