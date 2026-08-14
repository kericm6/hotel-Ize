<!-- resources/views/components/landing/hero.blade.php -->

<section class="relative bg-gray-900 text-white min-h-[85vh] flex flex-col justify-between overflow-hidden">

    <!-- Image de fond luxueuse -->
    <img
        src="{{ asset('images/banner.png') }}"
        alt="Ambiance luxueuse Hôtel IZE"
        class="absolute inset-0 w-full h-full object-cover object-center opacity-40 z-0">

    <!-- Superposition sombre en dégradé -->
    <div class="absolute inset-0 bg-gradient-to-b from-black/60 via-black/30 to-black/80 z-10"></div>

    <!-- 1. Contenu textuel aligné à gauche -->
    <div class="flex-grow flex items-center relative z-20 px-6 lg:px-8 max-w-7xl mx-auto w-full pt-16 pb-10">
        <div class="max-w-3xl text-left">

            <span class="inline-block text-amber-400 text-xs font-semibold uppercase tracking-widest mb-4">
                Une parenthèse d'exception à Kpalimé
            </span>

            <h1 class="text-5xl sm:text-6xl md:text-5xl  font-extrabold tracking-tight mb-6 leading-tight">
                L'Art de Vivre Singulier.
            </h1>

            <p class="text-xl sm:text-xl text-gray-200 max-w-2xl mb-10 leading-relaxed font-light">
                Bienvenue à l'Hôtel IZE. Découvrez une élégance intemporelle, une gastronomie raffinée et un service attentionné au cœur d'un environnement préservé.
            </p>

            <div class="flex flex-wrap gap-4">
                <a href="#chambres" class="px-8 py-3.5 text-xs font-bold uppercase tracking-widest text-gray-900 bg-white hover:bg-amber-400 transition shadow-lg">
                    Découvrir nos chambres
                </a>
            </div>

        </div>
    </div>

    <!-- 2. Barre de recherche de disponibilité -->
    <div class="relative z-30 w-full pb-10 px-6 lg:px-8">
        <div class="max-w-7xl mx-auto bg-white/10 backdrop-blur-md p-4 sm:p-6 shadow-2xl border border-white/20">
            <form class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-4">

                <!-- Arrivée -->
                <div class="relative">
                    <label class="block text-xs font-medium text-amber-400 uppercase tracking-wider mb-1.5 pl-1">Arrivée</label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center text-gray-500 text-sm">
                            <i class="fa-solid fa-calendar-days"></i>
                        </span>
                        <input type="text" placeholder="Ven 14 Août 2026" class="w-full bg-white/90 text-gray-900 text-sm pl-10 pr-4 py-3 rounded-none border-0 focus:ring-2 focus:ring-amber-500 font-medium">
                    </div>
                </div>

                <!-- Départ -->
                <div class="relative">
                    <label class="block text-xs font-medium text-amber-400 uppercase tracking-wider mb-1.5 pl-1">Départ</label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center text-gray-500 text-sm">
                            <i class="fa-solid fa-calendar-check"></i>
                        </span>
                        <input type="text" placeholder="Lun 17 Août 2026" class="w-full bg-white/90 text-gray-900 text-sm pl-10 pr-4 py-3 rounded-none border-0 focus:ring-2 focus:ring-amber-500 font-medium">
                    </div>
                </div>

                <!-- Adultes -->
                <div class="relative">
                    <label class="block text-xs font-medium text-amber-400 uppercase tracking-wider mb-1.5 pl-1">Adultes</label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center text-gray-500 text-sm">
                            <i class="fa-solid fa-user-large"></i>
                        </span>
                        <select class="w-full bg-white/90 text-gray-900 text-sm pl-10 pr-4 py-3 rounded-none border-0 focus:ring-2 focus:ring-amber-500 font-medium appearance-none">
                            <option>1 Adulte</option>
                            <option selected>2 Adultes</option>
                            <option>3 Adultes</option>
                        </select>
                    </div>
                </div>

                <!-- Enfants -->
                <div class="relative">
                    <label class="block text-xs font-medium text-amber-400 uppercase tracking-wider mb-1.5 pl-1">Enfants</label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center text-gray-500 text-sm">
                            <i class="fa-solid fa-child"></i>
                        </span>
                        <select class="w-full bg-white/90 text-gray-900 text-sm pl-10 pr-4 py-3 rounded-none border-0 focus:ring-2 focus:ring-amber-500 font-medium appearance-none">
                            <option>0 Enfant</option>
                            <option selected>1 Enfant</option>
                            <option>2 Enfants</option>
                        </select>
                    </div>
                </div>

                <!-- Bouton Chercher -->
                <div class="relative flex items-end">
                    <button type="button" class="w-full h-[46px] text-xs font-bold uppercase tracking-widest text-white bg-amber-600 hover:bg-amber-700 rounded-none shadow-sm transition transform hover:-translate-y-0.5 flex items-center justify-center gap-2">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <span>Vérifier</span>
                    </button>
                </div>

            </form>
        </div>
    </div>

</section>