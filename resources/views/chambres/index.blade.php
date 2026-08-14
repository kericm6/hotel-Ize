<!-- resources/views/chambres/index.blade.php -->
@extends('layouts.app')

@section('title', 'Nos Chambres & Suites - Hôtel IZE')

@section('content')

<!-- 1. HERO BANNER DE LA PAGE CHAMBRES -->
<section class="relative bg-gray-900 text-white py-28 overflow-hidden">
    <img
        src="https://images.unsplash.com/photo-1618773928121-c32242e63f39?q=80&w=1920&auto=format&fit=crop"
        alt="Chambres Hôtel IZE"
        class="absolute inset-0 w-full h-full object-cover opacity-30 z-0">
    <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/60 to-transparent z-10"></div>

    <div class="relative z-20 max-w-7xl mx-auto px-6 lg:px-8 text-left">
        <span class="text-amber-400 text-xs font-bold uppercase tracking-widest block mb-3">
            Hébergements d'Exception
        </span>
        <h1 class="text-4xl sm:text-5xl md:text-6xl  font-bold tracking-tight mb-4">
            Nos Chambres & Suites
        </h1>
        <p class="text-gray-300 text-base sm:text-lg max-w-2xl font-light leading-relaxed">
            Découvrez nos espaces conçus pour allier élégance, confort absolu et sérénité face à la nature verdoyante de Kpalimé.
        </p>
    </div>
</section>

<!-- 2. BARRE DE FILTRE & RECHERCHE DE DISPONIBILITÉ -->
<section class="bg-gray-100 py-8 border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <form class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 items-end">
            <div>
                <label class="block text-xs font-bold uppercase tracking-wider text-gray-700 mb-2">Arrivée - Départ</label>
                <input type="text" placeholder="Sélectionner les dates" class="w-full bg-white text-gray-900 text-sm px-4 py-3 border border-gray-300 focus:ring-2 focus:ring-amber-500 focus:outline-none">
            </div>

            <div>
                <label class="block text-xs font-bold uppercase tracking-wider text-gray-700 mb-2">Type de Hébergement</label>
                <select class="w-full bg-white text-gray-900 text-sm px-4 py-3 border border-gray-300 focus:ring-2 focus:ring-amber-500 focus:outline-none">
                    <option>Toutes les catégories</option>
                    <option>Chambre Deluxe</option>
                    <option>Suite Junior</option>
                    <option>Villa Présidentielle</option>
                </select>
            </div>

            <div>
                <label class="block text-xs font-bold uppercase tracking-wider text-gray-700 mb-2">Voyageurs</label>
                <select class="w-full bg-white text-gray-900 text-sm px-4 py-3 border border-gray-300 focus:ring-2 focus:ring-amber-500 focus:outline-none">
                    <option>1 Adulte</option>
                    <option selected>2 Adultes</option>
                    <option>3+ Personnes</option>
                </select>
            </div>

            <div>
                <button type="submit" class="w-full py-3 bg-amber-600 hover:bg-amber-700 text-white text-xs font-bold uppercase tracking-widest transition">
                    Filtrer les chambres
                </button>
            </div>
        </form>
    </div>
</section>

<!-- 3. LISTE DES CHAMBRES (DISPOSITION ÉDITORIALE LARGES CARDS) -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-8 space-y-16">

        <!-- CHAMBRE 1 : Deluxe Panorama -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 bg-gray-50 border border-gray-100 shadow-sm overflow-hidden">
            <div class="lg:col-span-7 relative aspect-[4/3] lg:aspect-auto">
                <img
                    src="https://images.unsplash.com/photo-1618773928121-c32242e63f39?q=80&w=1000&auto=format&fit=crop"
                    alt="Chambre Deluxe Panorama"
                    class="w-full h-full object-cover">
                <span class="absolute top-4 left-4 bg-amber-600 text-white text-xs font-bold uppercase tracking-widest px-3 py-1.5 shadow">
                    Vue Panoramique
                </span>
            </div>

            <div class="lg:col-span-5 p-8 lg:p-10 flex flex-col justify-between text-left">
                <div>
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-xs text-gray-400 uppercase tracking-widest">45 m² — 2 Adultes</span>
                        <span class="text-amber-600 font-bold text-lg">65 000 FCFA <span class="text-xs text-gray-500 font-normal">/ nuit</span></span>
                    </div>

                    <h2 class="text-2xl sm:text-3xl  font-bold text-gray-900 mb-4">
                        Chambre Deluxe Panorama
                    </h2>

                    <p class="text-gray-600 text-sm font-light leading-relaxed mb-6">
                        Lumière naturelle généreuse, lit King Size ultra-confortable et grand balcon privé offrant un panorama unique sur les collines verdoyantes de Kpalimé.
                    </p>

                    <!-- Équipements inclus -->
                    <div class="grid grid-cols-2 gap-3 text-xs text-gray-600 mb-8 font-light">
                        <div class="flex items-center gap-2"><i class="fa-solid fa-wifi text-amber-600"></i> Wi-Fi Haut Débit</div>
                        <div class="flex items-center gap-2"><i class="fa-solid fa-snowflake text-amber-600"></i> Climatisation</div>
                        <div class="flex items-center gap-2"><i class="fa-solid fa-tv text-amber-600"></i> TV 4K Smart</div>
                        <div class="flex items-center gap-2"><i class="fa-solid fa-martini-glass-citrus text-amber-600"></i> Mini-bar équipé</div>
                    </div>
                </div>

                <div class="flex items-center gap-4 pt-4 border-t border-gray-200">
                    <a href="#" class="flex-1 text-center py-3.5 bg-gray-900 text-white text-xs font-bold uppercase tracking-widest hover:bg-amber-600 transition">
                        Réserver
                    </a>
                    <a href="#" class="py-3.5 px-4 text-xs font-bold uppercase tracking-widest border border-gray-300 text-gray-700 hover:border-gray-900 transition">
                        Détails
                    </a>
                </div>
            </div>
        </div>

        <!-- CHAMBRE 2 : Suite Junior Prestige -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 bg-gray-50 border border-gray-100 shadow-sm overflow-hidden">
            <div class="lg:col-span-7 relative aspect-[4/3] lg:aspect-auto lg:order-2">
                <img
                    src="https://images.unsplash.com/photo-1591088398332-8a7791972843?q=80&w=1000&auto=format&fit=crop"
                    alt="Suite Junior Prestige"
                    class="w-full h-full object-cover">
                <span class="absolute top-4 right-4 bg-amber-600 text-white text-xs font-bold uppercase tracking-widest px-3 py-1.5 shadow">
                    Coup de Cœur
                </span>
            </div>

            <div class="lg:col-span-5 p-8 lg:p-10 flex flex-col justify-between text-left lg:order-1">
                <div>
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-xs text-gray-400 uppercase tracking-widest">65 m² — 2 Adultes + 1 Enfant</span>
                        <span class="text-amber-600 font-bold text-lg">95 000 FCFA <span class="text-xs text-gray-500 font-normal">/ nuit</span></span>
                    </div>

                    <h2 class="text-2xl sm:text-3xl  font-bold text-gray-900 mb-4">
                        Suite Junior Prestige
                    </h2>

                    <p class="text-gray-600 text-sm font-light leading-relaxed mb-6">
                        Un espace spacieux combinant un coin salon élégant et une chambre parentale. Salle de bain luxueuse avec baignoire et douche à l'italienne.
                    </p>

                    <!-- Équipements inclus -->
                    <div class="grid grid-cols-2 gap-3 text-xs text-gray-600 mb-8 font-light">
                        <div class="flex items-center gap-2"><i class="fa-solid fa-bath text-amber-600"></i> Baignoire & Douche</div>
                        <div class="flex items-center gap-2"><i class="fa-solid fa-mug-hot text-amber-600"></i> Machine Nespresso</div>
                        <div class="flex items-center gap-2"><i class="fa-solid fa-vault text-amber-600"></i> Coffre-fort électronique</div>
                        <div class="flex items-center gap-2"><i class="fa-solid fa-couch text-amber-600"></i> Espace Salon</div>
                    </div>
                </div>

                <div class="flex items-center gap-4 pt-4 border-t border-gray-200">
                    <a href="#" class="flex-1 text-center py-3.5 bg-gray-900 text-white text-xs font-bold uppercase tracking-widest hover:bg-amber-600 transition">
                        Réserver
                    </a>
                    <a href="#" class="py-3.5 px-4 text-xs font-bold uppercase tracking-widest border border-gray-300 text-gray-700 hover:border-gray-900 transition">
                        Détails
                    </a>
                </div>
            </div>
        </div>

        <!-- CHAMBRE 3 : Villa Présidentielle -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 bg-gray-50 border border-gray-100 shadow-sm overflow-hidden">
            <div class="lg:col-span-7 relative aspect-[4/3] lg:aspect-auto">
                <img
                    src="https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?q=80&w=1000&auto=format&fit=crop"
                    alt="Villa Présidentielle IZE"
                    class="w-full h-full object-cover">
                <span class="absolute top-4 left-4 bg-gray-900 text-amber-400 text-xs font-bold uppercase tracking-widest px-3 py-1.5 shadow border border-amber-400/30">
                    Prestige Utlime
                </span>
            </div>

            <div class="lg:col-span-5 p-8 lg:p-10 flex flex-col justify-between text-left">
                <div>
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-xs text-gray-400 uppercase tracking-widest">120 m² — Jusqu'à 4 Personnes</span>
                        <span class="text-amber-600 font-bold text-lg">180 000 FCFA <span class="text-xs text-gray-500 font-normal">/ nuit</span></span>
                    </div>

                    <h2 class="text-2xl sm:text-3xl  font-bold text-gray-900 mb-4">
                        Villa Présidentielle IZE
                    </h2>

                    <p class="text-gray-600 text-sm font-light leading-relaxed mb-6">
                        L'excellence absolue : deux grandes suites indépendantes, une terrasse panoramique privée et un accès direct à un espace baignade réservé.
                    </p>

                    <!-- Équipements inclus -->
                    <div class="grid grid-cols-2 gap-3 text-xs text-gray-600 mb-8 font-light">
                        <div class="flex items-center gap-2"><i class="fa-solid fa-water-ladder text-amber-600"></i> Bassin / Piscine Privée</div>
                        <div class="flex items-center gap-2"><i class="fa-solid fa-concierge-bell text-amber-600"></i> Service Majordome 24h</div>
                        <div class="flex items-center gap-2"><i class="fa-solid fa-hot-tub-person text-amber-600"></i> Jacuzzi d'extérieur</div>
                        <div class="flex items-center gap-2"><i class="fa-solid fa-square-parking text-amber-600"></i> Parking Privé Dédier</div>
                    </div>
                </div>

                <div class="flex items-center gap-4 pt-4 border-t border-gray-200">
                    <a href="#" class="flex-1 text-center py-3.5 bg-gray-900 text-white text-xs font-bold uppercase tracking-widest hover:bg-amber-600 transition">
                        Réserver
                    </a>
                    <a href="#" class="py-3.5 px-4 text-xs font-bold uppercase tracking-widest border border-gray-300 text-gray-700 hover:border-gray-900 transition">
                        Détails
                    </a>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- 4. SERVICES INCLUS AVEC CHAQUE CHAMBRE -->
<section class="py-16 bg-gray-900 text-white border-t border-gray-800">
    <div class="max-w-7xl mx-auto px-6 lg:px-8 text-center">
        <h3 class="text-xl sm:text-2xl  font-bold mb-8">Inclus Dans Toutes Nos Nuitées</h3>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-left">
            <div class="p-6 bg-gray-800/50 border border-gray-700">
                <i class="fa-solid fa-utensils text-amber-400 text-2xl mb-3"></i>
                <h4 class="font-bold text-sm mb-1">Petit-Déjeuner Offert</h4>
                <p class="text-xs text-gray-400 font-light">Buffet complet servi au restaurant ou en chambre.</p>
            </div>
            <div class="p-6 bg-gray-800/50 border border-gray-700">
                <i class="fa-solid fa-water-ladder text-amber-400 text-2xl mb-3"></i>
                <h4 class="font-bold text-sm mb-1">Accès Piscine</h4>
                <p class="text-xs text-gray-400 font-light">Accès illimité à la piscine à débordement.</p>
            </div>
            <div class="p-6 bg-gray-800/50 border border-gray-700">
                <i class="fa-solid fa-wifi text-amber-400 text-2xl mb-3"></i>
                <h4 class="font-bold text-sm mb-1">Wi-Fi Haut Débit</h4>
                <p class="text-xs text-gray-400 font-light">Connexion fibre disponible dans tout l'hôtel.</p>
            </div>
            <div class="p-6 bg-gray-800/50 border border-gray-700">
                <i class="fa-solid fa-square-parking text-amber-400 text-2xl mb-3"></i>
                <h4 class="font-bold text-sm mb-1">Parking Sécurisé</h4>
                <p class="text-xs text-gray-400 font-light">Stationnement gratuit gardé 24h/24.</p>
            </div>
        </div>
    </div>
</section>


@endsection