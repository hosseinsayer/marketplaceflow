<!DOCTYPE html>
<html lang="en" x-data="{ cartOpen: false, mobileMenu: false }">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MarketplaceFlow</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 text-gray-800">

<!-- 🧭 NAVBAR -->
<header class="bg-white shadow">
    <div class="max-w-7xl mx-auto px-4 py-4 flex items-center justify-between">

        <!-- Logo -->
        <a href="/" class="text-2xl font-bold text-blue-600">
            MarketplaceFlow
        </a>

        <!-- Search -->
        <div class="hidden md:flex flex-1 mx-6">
            <input
                type="text"
                placeholder="Search products..."
                class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring"
            >
        </div>

        <!-- Actions -->
        <div class="flex items-center gap-4">

            <!-- Cart -->
            <button @click="cartOpen = !cartOpen" class="relative">
                🛒
                <span class="absolute -top-2 -right-2 bg-red-500 text-white text-xs px-1 rounded-full">
                    2
                </span>
            </button>

            <!-- Mobile Menu -->
            <button @click="mobileMenu = !mobileMenu" class="md:hidden">
                ☰
            </button>

        </div>
    </div>

    <!-- Mobile Search -->
    <div class="md:hidden px-4 pb-3">
        <input
            type="text"
            placeholder="Search..."
            class="w-full border rounded-lg px-4 py-2"
        >
    </div>
</header>

<!-- 🛒 CART DROPDOWN -->
<div x-show="cartOpen" class="fixed right-4 top-20 bg-white shadow-lg w-80 p-4 rounded-lg">
    <h2 class="font-bold mb-3">Cart</h2>

    <p class="text-sm text-gray-500">No items yet</p>

    <button class="mt-4 w-full bg-blue-600 text-white py-2 rounded">
        Checkout
    </button>
</div>

<!-- 📱 MOBILE MENU -->
<div x-show="mobileMenu" class="md:hidden bg-white p-4 shadow">
    <a href="#" class="block py-2">Home</a>
    <a href="#" class="block py-2">Products</a>
    <a href="#" class="block py-2">Categories</a>
</div>

<!-- 📦 MAIN CONTENT -->
<main class="max-w-7xl mx-auto px-4 py-6">

    @yield('content')

</main>

<!-- FOOTER -->
<footer class="bg-white border-t mt-10">
    <div class="max-w-7xl mx-auto px-4 py-6 text-center text-sm text-gray-500">
        © {{ date('Y') }} MarketplaceFlow. All rights reserved.
    </div>
</footer>

</body>
</html>