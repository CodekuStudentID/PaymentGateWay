<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Produk</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

<header class="bg-white shadow fixed w-full top-0 left-0 z-50">
  <div class="container mx-auto flex items-center justify-between px-4 py-3">
    <!-- Logo -->
    <a href="#" class="text-2xl font-bold text-blue-600">
      MyShop
    </a>

    <!-- Search Box -->
    <form action="{{ route('products.index') }}" method="GET" class="flex items-center mr-6">
      <input
        type="text"
        name="search"
        placeholder="Cari produk..."
        value="{{ request('search') }}"
        class="px-3 py-1 border border-gray-300 rounded-l-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
      />
      <button
        type="submit"
        class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-1 rounded-r-md transition"
      >
        Cari
      </button>
    </form>

    <!-- Menu -->
    <nav class="space-x-6 text-gray-700 font-medium hidden md:flex">
      <a href="{{ route('checkout.index') }}" class="hover:text-blue-600 transition">Home</a>
      <a href="{{ route('products.index') }}" class="hover:text-blue-600 transition">Dashboard</a>
      <a href="#" class="hover:text-blue-600 transition">
      @if(Auth::check())
        <a href="{{ route('products.index') }}">
          Back To Dashboard
        </a>
      @else
       <a href="/login">Mode Tamu</a>
      @endif
    </div>
      </a>
    </nav>
  </div>
</header>
@yield('content')