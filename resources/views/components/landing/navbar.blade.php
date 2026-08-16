<header class="bg-white/90 backdrop-blur-md shadow-sm sticky top-0 z-50 transition-all">
    <div class="max-w-7xl mx-auto px-6 lg:px-8 h-20 flex items-center justify-between">

        <!-- Logo Hôtel IZE -->
        <a href="/" class="flex items-center gap-2 text-2xl font-bold tracking-widest text-gray-900">
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

        <!-- CTA Réserver et Burger Menu -->
        <div class="flex items-center space-x-4">
            <a href="" class="hidden sm:inline-block px-6 py-2.5 text-xs font-semibold uppercase tracking-wider text-white bg-amber-600 hover:bg-amber-700 rounded-none shadow-sm transition">
                Réserver un séjour
            </a>

            <!-- Burger Menu Mobile -->
            <button id="menu-toggle" class="md:hidden flex flex-col gap-1.5 cursor-pointer z-50 relative">
                <span class="w-6 h-0.5 bg-gray-700 transition-transform duration-300"></span>
                <span class="w-6 h-0.5 bg-gray-700 transition-transform duration-300"></span>
                <span class="w-6 h-0.5 bg-gray-700 transition-transform duration-300"></span>
            </button>
        </div>

    </div>
</header>

<!-- Overlay Menu Mobile -->
<div id="menu-overlay" class="fixed inset-0 bg-black/50 hidden md:hidden z-40 transition-opacity duration-300" style="opacity: 0;"></div>

<!-- Menu Mobile Sidebar -->
<nav id="mobile-menu" class="fixed top-0 right-0 h-screen w-80 bg-white shadow-2xl md:hidden z-40 transform translate-x-full transition-transform duration-300 ease-out overflow-y-auto">
    <div class="p-6 flex flex-col h-full pt-24">
        <!-- Menu Items -->
        <div class="space-y-2">
            <a href="{{ route('home') }}" class="block py-3 px-4 text-sm font-medium text-gray-700 hover:bg-amber-50 hover:text-amber-600 transition rounded">Accueil</a>
            <a href="{{ route('chambres.index') }}" class="block py-3 px-4 text-sm font-medium text-gray-700 hover:bg-amber-50 hover:text-amber-600 transition rounded">Chambres & Suites</a>
            <a href="{{ route('services.index') }}" class="block py-3 px-4 text-sm font-medium text-gray-700 hover:bg-amber-50 hover:text-amber-600 transition rounded">Services</a>
            <a href="{{ route('restaurant.index') }}" class="block py-3 px-4 text-sm font-medium text-gray-700 hover:bg-amber-50 hover:text-amber-600 transition rounded">Gastronomie</a>
            <a href="{{ route('contact.index') }}" class="block py-3 px-4 text-sm font-medium text-gray-700 hover:bg-amber-50 hover:text-amber-600 transition rounded">Contact</a>
            <a href="" class="block py-3 px-4 text-xs font-semibold uppercase tracking-wider text-center text-white bg-amber-600 hover:bg-amber-700 rounded transition">
                Réserver un séjour
            </a>
        </div>
    </div>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const menuToggle = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');
        const menuOverlay = document.getElementById('menu-overlay');
        const burgerLines = menuToggle.querySelectorAll('span');
        let menuOpen = false;

        function openMenu() {
            menuOpen = true;
            mobileMenu.classList.remove('translate-x-full');
            menuOverlay.classList.remove('hidden');
            setTimeout(() => {
                menuOverlay.style.opacity = '1';
            }, 10);
            
            // Animation du burger menu
            burgerLines[0].style.transform = 'rotate(45deg) translateY(11px)';
            burgerLines[1].style.opacity = '0';
            burgerLines[2].style.transform = 'rotate(-45deg) translateY(-11px)';
        }

        function closeMenu() {
            menuOpen = false;
            mobileMenu.classList.add('translate-x-full');
            menuOverlay.style.opacity = '0';
            setTimeout(() => {
                menuOverlay.classList.add('hidden');
            }, 300);
            
            // Animation du burger menu
            burgerLines[0].style.transform = 'none';
            burgerLines[1].style.opacity = '1';
            burgerLines[2].style.transform = 'none';
        }

        menuToggle.addEventListener('click', function(e) {
            e.stopPropagation();
            if (menuOpen) {
                closeMenu();
            } else {
                openMenu();
            }
        });

        // Fermer le menu quand on clique sur l'overlay
        menuOverlay.addEventListener('click', closeMenu);

        // Fermer le menu quand on clique sur un lien
        const mobileMenuLinks = mobileMenu.querySelectorAll('a');
        mobileMenuLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                if (link.getAttribute('href') === '') {
                    e.preventDefault();
                }
                closeMenu();
            });
        });

        // Fermer le menu avec la touche Escape
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && menuOpen) {
                closeMenu();
            }
        });
    });
</script>