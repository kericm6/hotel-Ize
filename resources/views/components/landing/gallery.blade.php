<!-- resources/views/components/landing/gallery.blade.php -->

<section id="galerie" class="py-24 bg-gray-900 text-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">

        <!-- En-tête -->
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-amber-400 text-xs font-bold uppercase tracking-widest block mb-2">
                Immersion Visuelle
            </span>
            <h2 class="text-3xl sm:text-4xl md:text-4xl  font-bold tracking-tight mb-4">
                Galerie de l'Hôtel IZE
            </h2>
            <p class="text-gray-400 text-base sm:text-lg font-light leading-relaxed">
                Aperçu en images de l'atmosphère d'exception qui vous attend au pied des montagnes.
            </p>
        </div>

        <!-- Grille d'images style Maçonnerie / Mosaïque -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">

            <div class="relative overflow-hidden aspect-square group shadow-lg">
                <img src="https://images.unsplash.com/photo-1542314831-068cd1dbfeeb?q=80&w=800&auto=format&fit=crop" alt="Hôtel IZE Exterior" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center">
                    <span class="text-xs font-bold uppercase tracking-widest text-amber-400 border border-amber-400 px-4 py-2">Vue Extérieure</span>
                </div>
            </div>

            <div class="relative overflow-hidden aspect-square group shadow-lg">
                <img src="https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?q=80&w=800&auto=format&fit=crop" alt="Hôtel IZE Pool" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center">
                    <span class="text-xs font-bold uppercase tracking-widest text-amber-400 border border-amber-400 px-4 py-2">Espace Détente</span>
                </div>
            </div>

            <div class="relative overflow-hidden aspect-square group shadow-lg">
                <img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?q=80&w=800&auto=format&fit=crop" alt="Hôtel IZE Restaurant" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center">
                    <span class="text-xs font-bold uppercase tracking-widest text-amber-400 border border-amber-400 px-4 py-2">Restaurant</span>
                </div>
            </div>

            <div class="relative overflow-hidden aspect-square group shadow-lg">
                <img src="https://images.unsplash.com/photo-1618773928121-c32242e63f39?q=80&w=800&auto=format&fit=crop" alt="Hôtel IZE Suite" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center">
                    <span class="text-xs font-bold uppercase tracking-widest text-amber-400 border border-amber-400 px-4 py-2">Suites & Luxe</span>
                </div>
            </div>

        </div>

    </div>
</section>