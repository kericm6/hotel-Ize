<!-- resources/views/components/landing/rooms.blade.php -->

<section id="chambres" class="py-24 bg-gray-50 text-gray-800">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">

        <!-- En-tête de section -->
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-16 gap-6">
            <div class="max-w-2xl text-left">
                <span class="text-amber-600 text-xs font-bold uppercase tracking-widest block mb-2">
                    Hébergements d'Exception
                </span>
                <h2 class="text-3xl sm:text-4xl md:text-4xl  font-bold text-gray-900 tracking-tight">
                    Nos Chambres & Suites
                </h2>
                <p class="mt-4 text-gray-600 text-base sm:text-lg font-light">
                    Chacune de nos chambres est un havre de paix associant matériaux nobles, confort absolu et vue panoramique sur la nature environnante.
                </p>
            </div>

            <!-- Filtre / Lien voir tout (Statique) -->
            <div>
                <a href="#reservation" class="inline-flex items-center gap-2 text-xs font-bold uppercase tracking-widest text-amber-600 hover:text-amber-700 transition">
                    <span>Toutes nos formules</span>
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </div>

        <!-- Grille des Chambres (Cards) -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            <!-- Chambre 1 : Suite Exécutive -->
            <div class="bg-white border border-gray-100 shadow-sm hover:shadow-xl transition duration-300 group flex flex-col justify-between">
                <div>
                    <!-- Visuel avec prix en overlay -->
                    <div class="relative aspect-4/3 overflow-hidden">
                        <img
                            src="{{ asset('images/chambre.png') }}"
                            alt="Suite Exécutive Hôtel IZE"
                            class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        <div class="absolute top-4 right-4 bg-gray-900/90 backdrop-blur-sm text-white px-3 py-1.5 text-xs font-bold tracking-wider">
                            À partir de <span class="text-amber-400 text-sm">65 000 FCFA</span> / nuit
                        </div>
                    </div>

                    <!-- Contenu textuel -->
                    <div class="p-6">
                        <div class="flex items-center gap-4 text-xs text-gray-500 mb-3">
                            <span><i class="fa-solid fa-vector-square text-amber-600 mr-1.5"></i>45 m²</span>
                            <span><i class="fa-solid fa-user-large text-amber-600 mr-1.5"></i>2 Adultes</span>
                            <span><i class="fa-solid fa-mountain text-amber-600 mr-1.5"></i>Vue Colline</span>
                        </div>

                        <h3 class="text-2xl  font-bold text-gray-900 mb-2 group-hover:text-amber-600 transition">
                            Chambre Deluxe Panorama
                        </h3>

                        <p class="text-gray-600 text-sm font-light leading-relaxed mb-6">
                            Un espace lumineux doté d'une grande baie vitrée ouvrant sur un balcon privé avec vue sur la verdure de Kpalimé.
                        </p>

                        <!-- Équipements clés (Icônes Font Awesome) -->
                        <div class="flex items-center gap-4 text-gray-400 text-sm border-t border-gray-100 pt-4">
                            <span title="Wi-Fi haut débit"><i class="fa-solid fa-wifi"></i></span>
                            <span title="Climatisation"><i class="fa-solid fa-snowflake"></i></span>
                            <span title="Lit King Size"><i class="fa-solid fa-bed"></i></span>
                            <span title="Mini-bar"><i class="fa-solid fa-martini-glass-citrus"></i></span>
                            <span title="Coffre-fort"><i class="fa-solid fa-vault"></i></span>
                        </div>
                    </div>
                </div>

                <!-- Bouton d'action -->
                <div class="p-6 pt-0">
                    <a href="#reservation" class="block w-full py-3 text-center text-xs font-bold uppercase tracking-widest text-gray-900 bg-gray-100 group-hover:bg-amber-600 group-hover:text-white transition duration-300">
                        Réserver cette chambre
                    </a>
                </div>
            </div>

            <!-- Chambre 2 : Suite Junior Prestige -->
            <div class="bg-white border border-gray-100 shadow-sm hover:shadow-xl transition duration-300 group flex flex-col justify-between">
                <div>
                    <!-- Visuel -->
                    <div class="relative aspect-4/3 overflow-hidden">
                        <img
                            src="{{ asset('images/chambre.png') }}"
                            alt="Suite Junior Prestige"
                            class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        <div class="absolute top-4 right-4 bg-gray-900/90 backdrop-blur-sm text-white px-3 py-1.5 text-xs font-bold tracking-wider">
                            À partir de <span class="text-amber-400 text-sm">95 000 FCFA</span> / nuit
                        </div>
                    </div>

                    <!-- Contenu textuel -->
                    <div class="p-6">
                        <div class="flex items-center gap-4 text-xs text-gray-500 mb-3">
                            <span><i class="fa-solid fa-vector-square text-amber-600 mr-1.5"></i>65 m²</span>
                            <span><i class="fa-solid fa-user-large text-amber-600 mr-1.5"></i>2 Adultes + 1 Enfant</span>
                            <span><i class="fa-solid fa-tree text-amber-600 mr-1.5"></i>Vue Jardin</span>
                        </div>

                        <h3 class="text-2xl font-serif font-bold text-gray-900 mb-2 group-hover:text-amber-600 transition">
                            Suite Junior Prestige
                        </h3>

                        <p class="text-gray-600 text-sm font-light leading-relaxed mb-6">
                            Alliant salon privé et chambre majestueuse, cette suite vous garantit une expérience d'immersion totale dans le luxe.
                        </p>

                        <!-- Équipements clés -->
                        <div class="flex items-center gap-4 text-gray-400 text-sm border-t border-gray-100 pt-4">
                            <span title="Wi-Fi haut débit"><i class="fa-solid fa-wifi"></i></span>
                            <span title="Climatisation"><i class="fa-solid fa-snowflake"></i></span>
                            <span title="Lit King Size"><i class="fa-solid fa-bed"></i></span>
                            <span title="Baignoire"><i class="fa-solid fa-bath"></i></span>
                            <span title="Cafetière Nespresso"><i class="fa-solid fa-mug-hot"></i></span>
                        </div>
                    </div>
                </div>

                <!-- Bouton d'action -->
                <div class="p-6 pt-0">
                    <a href="#reservation" class="block w-full py-3 text-center text-xs font-bold uppercase tracking-widest text-gray-900 bg-gray-100 group-hover:bg-amber-600 group-hover:text-white transition duration-300">
                        Réserver cette chambre
                    </a>
                </div>
            </div>

            <!-- Chambre 3 : Villa Présidentielle IZE -->
            <div class="bg-white border border-gray-100 shadow-sm hover:shadow-xl transition duration-300 group flex flex-col justify-between">
                <div>
                    <!-- Visuel -->
                    <div class="relative aspect-4/3 overflow-hidden">
                        <img
                            src="{{ asset('images/chambre.png') }}"
                            alt="Villa Présidentielle IZE"
                            class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        <div class="absolute top-4 right-4 bg-gray-900/90 backdrop-blur-sm text-white px-3 py-1.5 text-xs font-bold tracking-wider">
                            À partir de <span class="text-amber-400 text-sm">180 000 FCFA</span> / nuit
                        </div>
                    </div>

                    <!-- Contenu textuel -->
                    <div class="p-6">
                        <div class="flex items-center gap-4 text-xs text-gray-500 mb-3">
                            <span><i class="fa-solid fa-vector-square text-amber-600 mr-1.5"></i>120 m²</span>
                            <span><i class="fa-solid fa-users text-amber-600 mr-1.5"></i>4 Personnes</span>
                            <span><i class="fa-solid fa-water-ladder text-amber-600 mr-1.5"></i>Piscine Privée</span>
                        </div>

                        <h3 class="text-2xl font-serif font-bold text-gray-900 mb-2 group-hover:text-amber-600 transition">
                            Villa Présidentielle IZE
                        </h3>

                        <p class="text-gray-600 text-sm font-light leading-relaxed mb-6">
                            Le summum de l'exclusivité : deux chambres master, un grand salon contemporain et une terrasse privée avec petite piscine.
                        </p>

                        <!-- Équipements clés -->
                        <div class="flex items-center gap-4 text-gray-400 text-sm border-t border-gray-100 pt-4">
                            <span title="Wi-Fi haut débit"><i class="fa-solid fa-wifi"></i></span>
                            <span title="Piscine Privée"><i class="fa-solid fa-person-swimming"></i></span>
                            <span title="Service Majordome"><i class="fa-solid fa-concierge-bell"></i></span>
                            <span title="Baignoire Jacuzzi"><i class="fa-solid fa-hot-tub-person"></i></span>
                            <span title="Terrasse panoramique"><i class="fa-solid fa-sun"></i></span>
                        </div>
                    </div>
                </div>

                <!-- Bouton d'action -->
                <div class="p-6 pt-0">
                    <a href="#reservation" class="block w-full py-3 text-center text-xs font-bold uppercase tracking-widest text-gray-900 bg-gray-100 group-hover:bg-amber-600 group-hover:text-white transition duration-300">
                        Réserver cette chambre
                    </a>
                </div>
            </div>

        </div>

    </div>
</section>