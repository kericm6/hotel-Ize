<!-- resources/views/services/index.blade.php -->
@extends('layouts.app')

@section('title', 'Services & Équipements - Hôtel IZE')

@section('content')



<!-- 1. HERO BANNER PAGE SERVICES -->
<section class="relative bg-gray-900 text-white py-28 overflow-hidden">
    <img
        src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?q=80&w=1920&auto=format&fit=crop"
        alt="Services Hôtel IZE"
        class="absolute inset-0 w-full h-full object-cover opacity-30 z-0">
    <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/60 to-transparent z-10"></div>

    <div class="relative z-20 max-w-7xl mx-auto px-6 lg:px-8 text-left">
        <span class="text-amber-400 text-xs font-bold uppercase tracking-widest block mb-3">
            Loisirs, Détente & Business
        </span>
        <h1 class="text-4xl sm:text-5xl md:text-6xl  font-bold tracking-tight mb-4">
            Nos Services & Installations
        </h1>
        <p class="text-gray-300 text-base sm:text-lg max-w-2xl font-light leading-relaxed mb-8">
            Des prestations de premier choix conçues pour rendre votre séjour à Kpalimé aussi relaxant que stimulant.
        </p>
        <a href="" class="inline-flex items-center gap-3 px-6 py-3 text-xs font-semibold uppercase tracking-wider text-white bg-amber-600 hover:bg-amber-700 rounded-none shadow-sm transition">
            <i class="fas fa-phone"></i>
            Nous Contacter
        </a>
    </div>
</section>


<!-- 2. SECTION DÉTAILLÉE DES 4 SERVICES -->
<section class="py-20 bg-white text-gray-800">
    <div class="max-w-7xl mx-auto px-6 lg:px-8 space-y-24">

        <!-- SERVICE 1 : Restauration & Bar -->
        <div id="restauration" class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            <div class="lg:col-span-6 relative aspect-[4/3] overflow-hidden shadow-xl">
                <img
                    src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?q=80&w=1000&auto=format&fit=crop"
                    alt="Restaurant Gastronomique IZE"
                    class="w-full h-full object-cover">
                <span class="absolute top-4 left-4 bg-amber-600 text-white text-xs font-bold uppercase tracking-widest px-3 py-1.5 shadow">
                    Gastronomie
                </span>
            </div>
            <div class="lg:col-span-6 text-left">
                <div class="w-12 h-12 bg-amber-100 text-amber-600 flex items-center justify-center text-xl mb-4">
                    <i class="fa-solid fa-utensils"></i>
                </div>
                <h2 class="text-3xl  font-bold text-gray-900 mb-4">Restauration & Bar Lounge</h2>
                <p class="text-gray-600 font-light leading-relaxed mb-6">
                    Dégustez une cuisine raffinée mettant en valeur les ingrédients locaux frais de la région des Plateaux mélangés aux meilleures recettes internationales. Notre bar vous accueille toute la journée pour des rafraîchissements et des cocktails sur-mesure.
                </p>
                <ul class="space-y-3 text-sm text-gray-700 font-light mb-8">
                    <li class="flex items-center gap-3"><i class="fa-solid fa-check text-amber-600 text-xs"></i> Petit-déjeuner buffet équatorial servi dès 06h30</li>
                    <li class="flex items-center gap-3"><i class="fa-solid fa-check text-amber-600 text-xs"></i> Menu à la carte et suggestions du Chef quotidiennement</li>
                    <li class="flex items-center gap-3"><i class="fa-solid fa-check text-amber-600 text-xs"></i> Service en chambre disponible 24h/24</li>
                </ul>
                <a href="tel:+22892626883" class="inline-block px-6 py-3 bg-gray-900 hover:bg-amber-600 text-white text-xs font-bold uppercase tracking-widest transition">
                    Réserver une table
                </a>
            </div>
        </div>

        <hr class="border-gray-200">

        <!-- SERVICE 2 : Piscine à débordement -->
        <div id="piscine" class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            <div class="lg:col-span-6 lg:order-2 relative aspect-[4/3] overflow-hidden shadow-xl">
                <img
                    src="{{ asset('images/piscine.png') }}"
                    alt="Piscine Hôtel IZE"
                    class="w-full h-full object-cover">
                <span class="absolute top-4 right-4 bg-amber-600 text-white text-xs font-bold uppercase tracking-widest px-3 py-1.5 shadow">
                    Détente & Baignade
                </span>
            </div>
            <div class="lg:col-span-6 lg:order-1 text-left">
                <div class="w-12 h-12 bg-amber-100 text-amber-600 flex items-center justify-center text-xl mb-4">
                    <i class="fa-solid fa-water-ladder"></i>
                </div>
                <h2 class="text-3xl  font-bold text-gray-900 mb-4">Piscine à Débordement</h2>
                <p class="text-gray-600 font-light leading-relaxed mb-6">
                    Véritable joyau du complexe, notre piscine extérieure vous offre une baignade rafraîchissante tout en admirant la vue panoramique sur les collines environnantes. Des transats confortables et des parasols sont disposés sur le solarium.
                </p>
                <ul class="space-y-3 text-sm text-gray-700 font-light mb-8">
                    <li class="flex items-center gap-3"><i class="fa-solid fa-check text-amber-600 text-xs"></i> Accès gratuit pour tous les résidents de l'hôtel</li>
                    <li class="flex items-center gap-3"><i class="fa-solid fa-check text-amber-600 text-xs"></i> Serviettes de bain fournies gracieusement</li>
                    <li class="flex items-center gap-3"><i class="fa-solid fa-check text-amber-600 text-xs"></i> Service boissons & snacks directement au transat</li>
                </ul>
                <a href="#contact" class="inline-block px-6 py-3 bg-gray-900 hover:bg-amber-600 text-white text-xs font-bold uppercase tracking-widest transition">
                    En savoir plus
                </a>
            </div>
        </div>

        <hr class="border-gray-200">

        <!-- SERVICE 3 : Terrain Synthétique -->
        <div id="terrain" class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            <div class="lg:col-span-6 relative aspect-[4/3] overflow-hidden shadow-xl">
                <img
                    src="{{ asset('images/terrain.png') }}"
                    alt="Terrain de football synthétique IZE"
                    class="w-full h-full object-cover">
                <span class="absolute top-4 left-4 bg-amber-600 text-white text-xs font-bold uppercase tracking-widest px-3 py-1.5 shadow">
                    Sport & Loisirs
                </span>
            </div>
            <div class="lg:col-span-6 text-left">
                <div class="w-12 h-12 bg-amber-100 text-amber-600 flex items-center justify-center text-xl mb-4">
                    <i class="fa-solid fa-futbol"></i>
                </div>
                <h2 class="text-3xl  font-bold text-gray-900 mb-4">Terrain Synthétique Modernisé</h2>
                <p class="text-gray-600 font-light leading-relaxed mb-6">
                    Adeptes du ballon rond, notre terrain de mini-football synthétique de dernière génération est accessible aux résidents et disponible à la location privée pour vos matchs entre amis, tournois d'entreprise ou séances d'entraînement.
                </p>
                <ul class="space-y-3 text-sm text-gray-700 font-light mb-8">
                    <li class="flex items-center gap-3"><i class="fa-solid fa-check text-amber-600 text-xs"></i> Éclairage nocturne de haute intensité pour les matchs en soirée</li>
                    <li class="flex items-center gap-3"><i class="fa-solid fa-check text-amber-600 text-xs"></i> Vestiaires et douches dédiés à proximité</li>
                    <li class="flex items-center gap-3"><i class="fa-solid fa-check text-amber-600 text-xs"></i> Possibilité de réserver à l'heure ou pour des tournois organisés</li>
                </ul>
                <a href="tel:+22890127270" class="inline-block px-6 py-3 bg-gray-900 hover:bg-amber-600 text-white text-xs font-bold uppercase tracking-widest transition">
                    Réserver un créneau
                </a>
            </div>
        </div>

        <hr class="border-gray-200">

        <!-- SERVICE 4 : Salle de Réunion -->
        <div id="reunion" class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            <div class="lg:col-span-6 lg:order-2 relative aspect-[4/3] overflow-hidden shadow-xl">
                <img
                    src="{{ asset('images/salle_de_reunion.png') }}"
                    alt="Salle de Réunion Hôtel IZE"
                    class="w-full h-full object-cover">
                <span class="absolute top-4 right-4 bg-amber-600 text-white text-xs font-bold uppercase tracking-widest px-3 py-1.5 shadow">
                    Événements / Business
                </span>
            </div>
            <div class="lg:col-span-6 lg:order-1 text-left">
                <div class="w-12 h-12 bg-amber-100 text-amber-600 flex items-center justify-center text-xl mb-4">
                    <i class="fa-solid fa-people-group"></i>
                </div>
                <h2 class="text-3xl  font-bold text-gray-900 mb-4">Salle de Réunion Modulable</h2>
                <p class="text-gray-600 font-light leading-relaxed mb-6">
                    Organisez vos séminaires, conférences, conseils d'administration ou ateliers de travail dans un cadre professionnel et feutré. Notre salle s'adapte à la disposition de votre choix (U, Théâtre, Classe).
                </p>
                <ul class="space-y-3 text-sm text-gray-700 font-light mb-8">
                    <li class="flex items-center gap-3"><i class="fa-solid fa-check text-amber-600 text-xs"></i> Capacité d'accueil modifiable de 20 à 80 personnes</li>
                    <li class="flex items-center gap-3"><i class="fa-solid fa-check text-amber-600 text-xs"></i> Équipements complets : Vidéoprojecteur, Wi-Fi très haut débit, sonorisation</li>
                    <li class="flex items-center gap-3"><i class="fa-solid fa-check text-amber-600 text-xs"></i> Forfaits avec pauses-café, déjeuners de travail et hébergement</li>
                </ul>
                <a href="mailto:contact@hotel-ize.com" class="inline-block px-6 py-3 bg-gray-900 hover:bg-amber-600 text-white text-xs font-bold uppercase tracking-widest transition">
                    Demander un devis
                </a>
            </div>
        </div>

    </div>
</section>





@endsection