<!-- resources/views/components/landing/about.blade.php -->

<section id="propos" class="py-24 bg-white text-gray-800">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">

        <!-- Bloc 1 : Histoire & Présentation (Grille 2 Colonnes) -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center mb-24">

            <!-- Colonne Gauche : Texte de présentation -->
            <div class="text-left" data-aos="fade-right" data-aos-duration="1000">
                <span class="inline-block text-amber-600 text-xs font-bold uppercase tracking-widest mb-3">
                    À Propos de l'Hôtel IZE
                </span>

                <h2 class="text-3xl sm:text-4xl md:text-4xl font-bold text-gray-900 tracking-tight mb-6 leading-8">
                    Un havre de sérénité au cœur de Kpalimé.
                </h2>

                <p class="text-gray-600 text-base sm:text-lg leading-relaxed mb-6 font-light">
                    Né d'une passion pour le raffinement et le bien-être, l'Hôtel IZE réinvente l'hospitalité. Niché au pied des collines verdoyantes de Kpalimé, notre établissement allie architecture contemporaine, touches artisanales locales et confort haut de gamme.
                </p>

                <p class="text-gray-600 text-base leading-relaxed mb-8 font-light">
                    Que vous soyez en quête d'une escapade romantique, d'un séjour de ressourcement en pleine nature ou d'un cadre prestigieux pour vos voyages d'affaires, nous mettons tout en œuvre pour vous offrir un séjour inoubliable.
                </p>

                <div class="flex items-center gap-6 pt-2 border-t border-gray-100">
                    <div>
                        <span class="block text-2xl  font-bold text-gray-900">100%</span>
                        <span class="text-xs text-gray-500 uppercase tracking-wider">Satisfaction</span>
                    </div>
                    <div class="h-8 w-px bg-gray-200"></div>
                    <div>
                        <span class="block text-2xl  font-bold text-gray-900">24h/24</span>
                        <span class="text-xs text-gray-500 uppercase tracking-wider">Service Concierge</span>
                    </div>
                </div>
            </div>

            <!-- Colonne Droite : Composition d'images -->
            <div class="relative" data-aos="fade-left" data-aos-duration="1000">
                <div class="aspect-[4/3] w-full overflow-hidden shadow-2xl">
                    <img
                        src="{{ asset('images/piscine.png') }}"
                        alt="Vue de l'Hôtel IZE"
                        class="w-full h-full object-cover">
                </div>
                <!-- Badge flottant -->
                <div class="absolute -bottom-6 -left-6 bg-amber-600 text-white p-6 shadow-xl hidden sm:block max-w-xs">
                    <p class=" italic text-lg leading-snug">"L'excellence dans chaque détail, la quiétude dans chaque instant."</p>
                </div>
            </div>

        </div>

        <!-- Bloc 2 : Pourquoi Choisir IZE ? (Grille de cartes) -->
        <div class="pt-12 border-t border-gray-100">

            <div class="text-center max-w-2xl mx-auto mb-16" data-aos="fade-up" data-aos-duration="800">
                <span class="text-amber-600 text-xs font-bold uppercase tracking-widest block mb-2">
                    L'Expérience IZE
                </span>
                <h3 class="text-2xl sm:text-3xl  font-bold text-gray-900">
                    Pourquoi choisir notre établissement ?
                </h3>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">

                <!-- Raison 1 -->
                <div class="p-8 bg-gray-50 border border-gray-100 hover:border-amber-200 transition duration-300" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="0">
                    <div class="w-12 h-12 bg-amber-100 text-amber-600 flex items-center justify-center text-xl mb-6">
                        <i class="fa-solid fa-mountain-sun"></i>
                    </div>
                    <h4 class="text-lg  font-bold text-gray-900 mb-3">Cadre Naturel Unique</h4>
                    <p class="text-gray-600 text-sm leading-relaxed font-light">
                        Situé dans un écran de verdure apaisant, offrant un panorama exceptionnel sur la nature environnante.
                    </p>
                </div>

                <!-- Raison 2 -->
                <div class="p-8 bg-gray-50 border border-gray-100 hover:border-amber-200 transition duration-300" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="100">
                    <div class="w-12 h-12 bg-amber-100 text-amber-600 flex items-center justify-center text-xl mb-6">
                        <i class="fa-solid fa-bed"></i>
                    </div>
                    <h4 class="text-lg  font-bold text-gray-900 mb-3">Confort Absolu</h4>
                    <p class="text-gray-600 text-sm leading-relaxed font-light">
                        Des suites spacieuses dotées d'une literie haut de gamme, d'équipements modernes et d'une vue imprenable.
                    </p>
                </div>

                <!-- Raison 3 -->
                <div class="p-8 bg-gray-50 border border-gray-100 hover:border-amber-200 transition duration-300" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="200">
                    <div class="w-12 h-12 bg-amber-100 text-amber-600 flex items-center justify-center text-xl mb-6">
                        <i class="fa-solid fa-utensils"></i>
                    </div>
                    <h4 class="text-lg  font-bold text-gray-900 mb-3">Gastronomie Raffinée</h4>
                    <p class="text-gray-600 text-sm leading-relaxed font-light">
                        Un restaurant gastronomique mettant à l'honneur les produits locaux revisités avec créativité.
                    </p>
                </div>

                <!-- Raison 4 -->
                <div class="p-8 bg-gray-50 border border-gray-100 hover:border-amber-200 transition duration-300">
                    <div class="w-12 h-12 bg-amber-100 text-amber-600 flex items-center justify-center text-xl mb-6">
                        <i class="fa-solid fa-concierge-bell"></i>
                    </div>
                    <h4 class="text-lg  font-bold text-gray-900 mb-3">Service Personnalisé</h4>
                    <p class="text-gray-600 text-sm leading-relaxed font-light">
                        Une équipe attentionnée et discrète dédiée à satisfaire la moindre de vos exigences tout au long du séjour.
                    </p>
                </div>

            </div>

        </div>

    </div>
</section>