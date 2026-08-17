<header class="bg-white/90 backdrop-blur-md shadow-sm sticky top-0 z-50 transition-all">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-16 sm:h-20 flex items-center justify-between">

        <!-- Logo Hôtel IZE -->
        <a href="/" class="flex items-center gap-1 sm:gap-2 text-lg sm:text-2xl font-bold tracking-widest text-gray-900 flex-shrink-0">
            <span class="text-amber-600">IZE</span>
            <span>HOTEL</span>
        </a>

        <!-- Liens du menu -->
        <nav class="hidden md:flex space-x-6 lg:space-x-8 text-xs lg:text-sm font-medium tracking-wide uppercase text-gray-700">
            <a href="{{ route('home') }}" class="hover:text-amber-600 transition">Accueil</a>
            <a href="{{ route('chambres.index') }}" class="hover:text-amber-600 transition">Chambres & Suites</a>
            <a href="{{ route('services.index') }}" class="hover:text-amber-600 transition">Services</a>
            <a href="{{ route('restaurant.index') }}" class="hover:text-amber-600 transition">Gastronomie</a>
            <a href="{{ route('contact.index') }}" class="hover:text-amber-600 transition">Contact</a>
        </nav>

        <!-- CTA Réserver et Burger Menu -->
        <div class="flex items-center gap-2 sm:gap-4">
            <a href="" class="hidden sm:inline-block px-3 sm:px-6 py-2 sm:py-2.5 text-xs font-semibold uppercase tracking-wider text-white bg-amber-600 hover:bg-amber-700 rounded-none shadow-sm transition whitespace-nowrap">
                Réserver un séjour
            </a>

            <!-- Burger Menu Mobile -->
            <button id="menu-toggle" class="flex md:hidden flex-col gap-1.5 cursor-pointer z-50 relative p-2 -mr-2 touch-target" aria-label="Menu" aria-expanded="false">
                <span class="w-5 h-0.5 bg-gray-700 transition-transform duration-300 block"></span>
                <span class="w-5 h-0.5 bg-gray-700 transition-transform duration-300 block"></span>
                <span class="w-5 h-0.5 bg-gray-700 transition-transform duration-300 block"></span>
            </button>
        </div>

    </div>
</header>

<!-- Overlay Menu Mobile -->
<div id="menu-overlay" class="fixed inset-0 bg-black/50 hidden md:hidden z-40 transition-opacity duration-300" style="opacity: 0;"></div>

<!-- Menu Mobile Sidebar -->
<nav id="mobile-menu" class="fixed top-0 right-0 h-screen w-full sm:w-80 bg-white shadow-2xl md:hidden z-40 transform translate-x-full transition-transform duration-300 ease-out overflow-y-auto">
    <div class="p-4 sm:p-6 flex flex-col h-full pt-20 sm:pt-24">
        <!-- Menu Items -->
        <div class="space-y-1 sm:space-y-2">
            <a href="{{ route('home') }}" class="block py-3 px-3 sm:px-4 text-sm font-medium text-gray-700 hover:bg-amber-50 hover:text-amber-600 transition rounded">Accueil</a>
            <a href="{{ route('chambres.index') }}" class="block py-3 px-3 sm:px-4 text-sm font-medium text-gray-700 hover:bg-amber-50 hover:text-amber-600 transition rounded">Chambres & Suites</a>
            <a href="{{ route('services.index') }}" class="block py-3 px-3 sm:px-4 text-sm font-medium text-gray-700 hover:bg-amber-50 hover:text-amber-600 transition rounded">Services</a>
            <a href="{{ route('restaurant.index') }}" class="block py-3 px-3 sm:px-4 text-sm font-medium text-gray-700 hover:bg-amber-50 hover:text-amber-600 transition rounded">Gastronomie</a>
            <a href="{{ route('contact.index') }}" class="block py-3 px-3 sm:px-4 text-sm font-medium text-gray-700 hover:bg-amber-50 hover:text-amber-600 transition rounded">Contact</a>
            <a href="" class="block py-3 px-3 sm:px-4 text-xs font-semibold uppercase tracking-wider text-center text-white bg-amber-600 hover:bg-amber-700 rounded transition mt-4 sm:mt-6">
                Réserver un séjour
            </a>
        </div>
    </div>
</nav>

<script>
    // Add CSS for touch-target and responsive fixes
    const style = document.createElement('style');
    style.textContent = `
        .touch-target {
            min-width: 44px;
            min-height: 44px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        @media (min-width: 768px) {
            #menu-toggle {
                display: none !important;
            }
        }
        
        @media (max-width: 640px) {
            #mobile-menu {
                width: calc(100% - 0px) !important;
            }
        }
        
        @media (max-width: 360px) {
            #mobile-menu {
                width: 100vw !important;
            }
        }
    `;
    document.head.appendChild(style);

    document.addEventListener('DOMContentLoaded', function() {
        const menuToggle = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');
        const menuOverlay = document.getElementById('menu-overlay');
        const burgerLines = menuToggle.querySelectorAll('span');
        let menuOpen = false;

        function openMenu() {
            menuOpen = true;
            menuToggle.setAttribute('aria-expanded', 'true');
            mobileMenu.classList.remove('translate-x-full');
            menuOverlay.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
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
            menuToggle.setAttribute('aria-expanded', 'false');
            mobileMenu.classList.add('translate-x-full');
            menuOverlay.style.opacity = '0';
            document.body.style.overflow = '';
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
        
        // Gérer le redimensionnement de la fenêtre
        window.addEventListener('resize', function() {
            if (window.innerWidth >= 768 && menuOpen) {
                closeMenu();
            }
        });
    });
</script>