<header class="bg-white/90 backdrop-blur-md shadow-sm sticky top-0 z-50 transition-all">
    <div class="max-w-7xl mx-auto px-6 lg:px-8 h-20 flex items-center justify-between">

        <!-- Logo Hôtel IZE -->
        <a href="/" class="flex items-center gap-2 text-2xl  font-bold tracking-widest text-gray-900">
            <span class="text-amber-600">IZE</span> HOTEL
        </a>

        <!-- Liens du menu -->
        <nav class="hidden md:flex space-x-8 text-sm font-medium tracking-wide uppercase text-gray-700">
            <a href="{{ route('home') }}" class="hover:text-amber-600 transition">Accueil</a>
            <a href="{{ route('chambres.index') }}" class="hover:text-amber-600 transition">Chambres & Suites</a>
            <a href="{{ route('services.index') }}" class="hover:text-amber-600 transition">Services</a>
            <a href="{{ route('restaurant.index') }}" class="hover:text-amber-600 transition">Gastronomie</a>
            <a href="{{ route('contact.index') }}" class="hover:text-amber-600 transition">Contact</a>
        </nav>

        <!-- CTA Réserver -->
        <div class="flex items-center space-x-4">
            <a href="" class="px-6 py-2.5 text-xs font-semibold uppercase tracking-wider text-white bg-amber-600 hover:bg-amber-700 rounded-none shadow-sm transition">
                Réserver un séjour
            </a>
        </div>

    </div>
</header>