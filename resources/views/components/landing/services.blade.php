<!-- resources/views/components/landing/services.blade.php -->

<section id="services" class="py-24 bg-white text-gray-800">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">

        <!-- En-tête de section -->
        <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up" data-aos-duration="800">
            <span class="text-amber-600 text-xs font-bold uppercase tracking-widest block mb-2">
                Équipements & Prestations
            </span>
            <h2 class="text-3xl sm:text-4xl md:text-4xl  font-bold text-gray-900 tracking-tight mb-4">
                Nos Services d'Exception
            </h2>
            <p class="text-gray-600 text-base sm:text-lg font-light leading-relaxed">
                Profitez d'installations haut de gamme conçues pour votre détente, vos loisirs et vos événements professionnels.
            </p>
        </div>

        <!-- Grille des 4 Services alignés sur la même ligne (sur grands écrans) -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">

            <!-- Service 1 : Restauration -->
            <div class="bg-gray-50 border border-gray-100 shadow-sm hover:shadow-xl transition duration-300 group flex flex-col" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="0">
                <!-- Image en haut -->
                <div class="relative aspect-[4/3] overflow-hidden">
                    <img
                        src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?q=80&w=800&auto=format&fit=crop"
                        alt="Restauration Hôtel IZE"
                        class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    <div class="absolute top-4 left-4 w-10 h-10 bg-amber-600 text-white flex items-center justify-center text-sm shadow-md">
                        <i class="fa-solid fa-utensils"></i>
                    </div>
                </div>
                <!-- Titre & Description en bas -->
                <div class="p-6 flex-grow flex flex-col justify-between">
                    <div>
                        <h3 class="text-xl  font-bold text-gray-900 mb-3 group-hover:text-amber-600 transition">
                            Restauration & Bar
                        </h3>
                        <p class="text-gray-600 text-sm font-light leading-relaxed">
                            Une cuisine gastronomique raffinée mettant en valeur les saveurs locales et internationales, accompagnée de nos cocktails signature.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Service 2 : Piscine -->
            <div class="bg-gray-50 border border-gray-100 shadow-sm hover:shadow-xl transition duration-300 group flex flex-col" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="100">
                <!-- Image en haut -->
                <div class="relative aspect-4/3 overflow-hidden">
                    <img
                        src="{{asset('images/piscine.png')}}"
                        alt="Piscine Hôtel IZE"
                        class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    <div class="absolute top-4 left-4 w-10 h-10 bg-amber-600 text-white flex items-center justify-center text-sm shadow-md">
                        <i class="fa-solid fa-water-ladder"></i>
                    </div>
                </div>
                <!-- Titre & Description en bas -->
                <div class="p-6 grow flex flex-col justify-between">
                    <div>
                        <h3 class="text-xl  font-bold text-gray-900 mb-3 group-hover:text-amber-600 transition">
                            Piscine à Débordement
                        </h3>
                        <p class="text-gray-600 text-sm font-light leading-relaxed">
                            Un bassin rafraîchissant aménagé avec bains de soleil et transats, idéal pour vous détendre face aux collines de Kpalimé.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Service 3 : Terrain de Football Synthétique -->
            <div class="bg-gray-50 border border-gray-100 shadow-sm hover:shadow-xl transition duration-300 group flex flex-col" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="200">
                <!-- Image en haut -->
                <div class="relative aspect-4/3 overflow-hidden">
                    <img
                        src="{{asset('images/terrain.png')}}"
                        alt="Terrain de football synthétique IZE"
                        class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    <div class="absolute top-4 left-4 w-10 h-10 bg-amber-600 text-white flex items-center justify-center text-sm shadow-md">
                        <i class="fa-solid fa-futbol"></i>
                    </div>
                </div>
                <!-- Titre & Description en bas -->
                <div class="p-6 grow flex flex-col justify-between">
                    <div>
                        <h3 class="text-xl  font-bold text-gray-900 mb-3 group-hover:text-amber-600 transition">
                            Terrain Synthétique
                        </h3>
                        <p class="text-gray-600 text-sm font-light leading-relaxed">
                            Un terrain de football aux normes modernes pour vos matchs amicaux, vos activités de groupe ou votre entraînement.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Service 4 : Salle de Réunion -->
            <div class="bg-gray-50 border border-gray-100 shadow-sm hover:shadow-xl transition duration-300 group flex flex-col" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="300">
                <!-- Image en haut -->
                <div class="relative aspect-4/3 overflow-hidden">
                    <img
                        src="{{asset('images/salle_de_reunion.png')}}"
                        alt="Salle de réunion Hôtel IZE"
                        class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    <div class="absolute top-4 left-4 w-10 h-10 bg-amber-600 text-white flex items-center justify-center text-sm shadow-md">
                        <i class="fa-solid fa-people-group"></i>
                    </div>
                </div>
                <!-- Titre & Description en bas -->
                <div class="p-6 grow flex flex-col justify-between">
                    <div>
                        <h3 class="text-xl  font-bold text-gray-900 mb-3 group-hover:text-amber-600 transition">
                            Salle de Réunion
                        </h3>
                        <p class="text-gray-600 text-sm font-light leading-relaxed">
                            Un espace professionnel modulable, climatisé et entièrement équipé (vidéoprojecteur, Wi-Fi haut débit) pour vos séminaires.
                        </p>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>