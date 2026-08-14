<!-- resources/views/components/landing/map.blade.php -->

<section id="localisation" class="bg-gray-900 text-white relative">

    <!-- En-tête / Informations d'accès -->
    <div class="bg-gray-950 py-12 border-b border-gray-800">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-center text-left">

                <div class="flex items-start gap-4">
                    <div class="w-10 h-10 bg-amber-600/20 text-amber-500 flex items-center justify-center shrink-0">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <div>
                        <h4 class="text-xs font-bold uppercase tracking-widest text-amber-400 mb-1">Notre Adresse</h4>
                        <p class="text-sm text-gray-300 font-light">Kpalimé, Région des Plateaux, Togo</p>
                    </div>
                </div>

                <div class="flex items-start gap-4">
                    <div class="w-10 h-10 bg-amber-600/20 text-amber-500 flex items-center justify-center shrink-0">
                        <i class="fa-solid fa-plane-arrival"></i>
                    </div>
                    <div>
                        <h4 class="text-xs font-bold uppercase tracking-widest text-amber-400 mb-1">Accès Depuis Lomé</h4>
                        <p class="text-sm text-gray-300 font-light">Environ 1h30 via la Nationale N°5</p>
                    </div>
                </div>

                <div class="flex items-start gap-4">
                    <div class="w-10 h-10 bg-amber-600/20 text-amber-500 flex items-center justify-center shrink-0">
                        <i class="fa-solid fa-car"></i>
                    </div>
                    <div>
                        <h4 class="text-xs font-bold uppercase tracking-widest text-amber-400 mb-1">Service de Navette</h4>
                        <p class="text-sm text-gray-300 font-light">Transfert privé disponible sur demande</p>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Carte Google Maps Intégrée -->
    <div class="w-full h-[400px] lg:h-[480px] relative filter grayscale contrast-125 opacity-90 hover:grayscale-0 hover:opacity-100 transition duration-500">
        <iframe
            class="w-full h-full border-0"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31674.88741355172!2d0.6121945!3d6.9039655!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1021430932bb19a3%3A0x6b53942008ef2825!2sKpalim%C3%A9!5e0!3m2!1sfr!2stg!4v1700000000000!5m2!1sfr!2stg"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>

</section>