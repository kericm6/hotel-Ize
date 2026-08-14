<!-- resources/views/components/landing/footer.blade.php -->

<footer class="bg-gray-950 text-white pt-20 pb-10 border-t border-gray-800">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">

        <!-- Bloc d'Appel à l'Action / Réservation Rapide -->
        <!-- <div class="bg-gradient-to-r from-amber-600 to-amber-700 p-8 md:p-12 shadow-2xl mb-20 flex flex-col lg:flex-row items-center justify-between gap-8">
            <div class="text-left max-w-2xl">
                <span class="text-amber-200 text-xs font-bold uppercase tracking-widest block mb-2">
                    Réservation En Ligne
                </span>
                <h3 class="text-2xl sm:text-3xl md:text-4xl  font-bold text-white tracking-tight">
                    Prêt à vivre un séjour inoubliable ?
                </h3>
                <p class="text-amber-100 text-sm sm:text-base font-light mt-2">
                    Réservez directement votre chambre au meilleur tarif garanti ou contactez notre équipe pour toute demande spécifique.
                </p>
            </div>
            <div class="flex flex-col sm:flex-row gap-4 w-full lg:w-auto">
                <a href="#chambres" class="px-8 py-4 text-xs font-bold uppercase tracking-widest bg-gray-900 text-white hover:bg-gray-800 transition shadow-lg text-center">
                    Réserver Maintenant
                </a>
                <a href="tel:+22890000000" class="px-8 py-4 text-xs font-bold uppercase tracking-widest bg-white/10 hover:bg-white/20 text-white border border-white/30 transition text-center flex items-center justify-center gap-2">
                    <i class="fa-solid fa-phone"></i>
                    <span>Nous Appeler</span>
                </a>
            </div>
        </div> -->

        <!-- Colonnes d'Informations du Footer -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">

            <!-- Colonne 1 : À propos & Marque -->
            <div class="space-y-4">
                <a href="#" class="text-2xl  font-bold tracking-wider text-white">
                    HÔTEL <span class="text-amber-500">IZE</span>
                </a>
                <p class="text-gray-400 text-sm font-light leading-relaxed">
                    Un havre d'exception alliant confort moderne, gastronomie raffinée et sérénité au cœur des magnifiques paysages de Kpalimé.
                </p>
                <!-- Réseaux Sociaux -->
                <div class="flex gap-4 pt-2 text-gray-400">
                    <a href="#" class="w-9 h-9 bg-gray-900 hover:bg-amber-600 hover:text-white transition flex items-center justify-center text-sm">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
                    <a href="#" class="w-9 h-9 bg-gray-900 hover:bg-amber-600 hover:text-white transition flex items-center justify-center text-sm">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a href="#" class="w-9 h-9 bg-gray-900 hover:bg-amber-600 hover:text-white transition flex items-center justify-center text-sm">
                        <i class="fa-brands fa-whatsapp"></i>
                    </a>
                </div>
            </div>

            <!-- Colonne 2 : Liens Rapides -->
            <div>
                <h4 class="text-sm font-bold uppercase tracking-widest text-amber-500 mb-6">Navigation</h4>
                <ul class="space-y-3 text-sm text-gray-400 font-light">
                    <li><a href="#propos" class="hover:text-amber-400 transition">À Propos</a></li>
                    <li><a href="#chambres" class="hover:text-amber-400 transition">Nos Chambres & Suites</a></li>
                    <li><a href="#services" class="hover:text-amber-400 transition">Services & Équipements</a></li>
                    <li><a href="#galerie" class="hover:text-amber-400 transition">Galerie Photos</a></li>
                    <li><a href="#temoignages" class="hover:text-amber-400 transition">Avis Clients</a></li>
                </ul>
            </div>

            <!-- Colonne 3 : Contacts & Horaires -->
            <div>
                <h4 class="text-sm font-bold uppercase tracking-widest text-amber-500 mb-6">Coordonnées</h4>
                <ul class="space-y-4 text-sm text-gray-400 font-light">
                    <li class="flex items-start gap-3">
                        <i class="fa-solid fa-location-dot text-amber-500 mt-1"></i>
                        <span>Kpalimé, Région des Plateaux, Togo</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <i class="fa-solid fa-phone text-amber-500"></i>
                        <span>+228 92 62 68 83 / 90 12 72 70</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <i class="fa-solid fa-envelope text-amber-500"></i>
                        <span>contact@hotel-ize.com</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <i class="fa-solid fa-clock text-amber-500"></i>
                        <span>Réception ouverte 24h/24 & 7j/7</span>
                    </li>
                </ul>
            </div>

            <!-- Colonne 4 : Newsletter / Newsletter Form -->
            <div>
                <h4 class="text-sm font-bold uppercase tracking-widest text-amber-500 mb-6">Newsletter</h4>
                <p class="text-gray-400 text-sm font-light leading-relaxed mb-4">
                    Abonnez-vous pour recevoir nos offres exclusives et nos actualités.
                </p>
                <form class="space-y-3">
                    <input
                        type="email"
                        placeholder="Votre adresse e-mail"
                        class="w-full bg-gray-900 border border-gray-800 text-white text-sm px-4 py-3 focus:outline-none focus:border-amber-500">
                    <button type="submit" class="w-full py-3 bg-amber-600 hover:bg-amber-700 text-white text-xs font-bold uppercase tracking-widest transition">
                        S'abonner
                    </button>
                </form>
            </div>

        </div>

        <!-- Bas de page (Copyright) -->
        <div class="pt-8 border-t border-gray-900 flex flex-col sm:flex-row justify-between items-center text-xs text-gray-500 font-light gap-4">
            <p>&copy; 2026 Hôtel IZE. Tous droits réservés.</p>
            <div class="flex gap-6">
                <a href="#" class="hover:text-amber-400 transition">Mentions Légales</a>
                <a href="#" class="hover:text-amber-400 transition">Politique de Confidentialité</a>
                <a href="#" class="hover:text-amber-400 transition">Conditions Générales</a>
            </div>
        </div>

    </div>
</footer>