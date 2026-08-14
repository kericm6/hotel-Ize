<!-- resources/views/contact/index.blade.php -->
@extends('layouts.app')

@section('title', 'Contact & Accès - Hôtel IZE')

@section('content')

<!-- 1. HERO BANNER PAGE CONTACT -->
<section class="relative bg-gray-900 text-white py-24 overflow-hidden">
    <img
        src="https://images.unsplash.com/photo-1566073771259-6a8506099945?q=80&w=1920&auto=format&fit=crop"
        alt="Contact Hôtel IZE"
        class="absolute inset-0 w-full h-full object-cover opacity-30 z-0">
    <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/60 to-transparent z-10"></div>

    <div class="relative z-20 max-w-7xl mx-auto px-6 lg:px-8 text-left">
        <span class="text-amber-400 text-xs font-bold uppercase tracking-widest block mb-3">
            À Votre Écoute
        </span>
        <h1 class="text-4xl sm:text-5xl md:text-6xl  font-bold tracking-tight mb-4">
            Contactez-nous
        </h1>
        <p class="text-gray-300 text-base sm:text-lg max-w-2xl font-light leading-relaxed">
            Une question sur nos hébergements, une réservation de table ou un besoin spécifique ? Notre équipe est à votre entière disposition.
        </p>
    </div>
</section>

<!-- 2. BOUTONS DIRECTS & FORMULAIRE DE CONTACT -->
<section class="py-20 bg-stone-50 text-gray-800">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">

            <!-- Colonne de Gauche : Accès Direct & Coordonnées -->
            <div class="lg:col-span-5 space-y-6">

                <div class="text-left mb-6">
                    <span class="text-amber-600 text-xs font-bold uppercase tracking-widest block mb-1">
                        Assistance Rapide
                    </span>
                    <h2 class="text-2xl  font-bold text-gray-900">
                        Nos Canaux Directs
                    </h2>
                    <div class="w-10 h-0.5 bg-amber-600 mt-2"></div>
                </div>

                <!-- WhatsApp -->
                <a
                    href="https://wa.me/22892626883"
                    target="_blank"
                    class="flex items-center justify-between p-5 bg-white rounded-xl border border-stone-200/80 shadow-sm hover:shadow-md hover:border-emerald-500 transition-all group">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center text-xl group-hover:bg-emerald-600 group-hover:text-white transition-colors">
                            <i class="fa-brands fa-whatsapp"></i>
                        </div>
                        <div class="text-left">
                            <span class="text-xs font-semibold text-emerald-600 uppercase tracking-wider block">Message Instantané</span>
                            <span class="text-base font-bold text-gray-900">Discuter sur WhatsApp</span>
                        </div>
                    </div>
                    <i class="fa-solid fa-chevron-right text-gray-400 group-hover:text-emerald-600 group-hover:translate-x-1 transition-all"></i>
                </a>

                <!-- Téléphone Line 1 -->
                <a
                    href="tel:+22892626883"
                    class="flex items-center justify-between p-5 bg-white rounded-xl border border-stone-200/80 shadow-sm hover:shadow-md hover:border-amber-500 transition-all group">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-full bg-amber-100 text-amber-600 flex items-center justify-center text-xl group-hover:bg-amber-600 group-hover:text-white transition-colors">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div class="text-left">
                            <span class="text-xs font-semibold text-amber-600 uppercase tracking-wider block">Ligne Directe 1</span>
                            <span class="text-base font-bold text-gray-900">+228 92 62 68 83</span>
                        </div>
                    </div>
                    <i class="fa-solid fa-chevron-right text-gray-400 group-hover:text-amber-600 group-hover:translate-x-1 transition-all"></i>
                </a>

                <!-- Téléphone Line 2 -->
                <a
                    href="tel:+22890127270"
                    class="flex items-center justify-between p-5 bg-white rounded-xl border border-stone-200/80 shadow-sm hover:shadow-md hover:border-amber-500 transition-all group">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-full bg-amber-100 text-amber-600 flex items-center justify-center text-xl group-hover:bg-amber-600 group-hover:text-white transition-colors">
                            <i class="fa-solid fa-mobile-screen-button"></i>
                        </div>
                        <div class="text-left">
                            <span class="text-xs font-semibold text-amber-600 uppercase tracking-wider block">Ligne Directe 2</span>
                            <span class="text-base font-bold text-gray-900">+228 90 12 72 70</span>
                        </div>
                    </div>
                    <i class="fa-solid fa-chevron-right text-gray-400 group-hover:text-amber-600 group-hover:translate-x-1 transition-all"></i>
                </a>

                <!-- Email -->
                <a
                    href="mailto:contact@hotel-ize.com"
                    class="flex items-center justify-between p-5 bg-white rounded-xl border border-stone-200/80 shadow-sm hover:shadow-md hover:border-blue-500 transition-all group">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center text-xl group-hover:bg-blue-600 group-hover:text-white transition-colors">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div class="text-left">
                            <span class="text-xs font-semibold text-blue-600 uppercase tracking-wider block">Courrier Électronique</span>
                            <span class="text-base font-bold text-gray-900">contact@hotel-ize.com</span>
                        </div>
                    </div>
                    <i class="fa-solid fa-chevron-right text-gray-400 group-hover:text-blue-600 group-hover:translate-x-1 transition-all"></i>
                </a>

                <!-- Bloc Horaires & Localisation -->
                <div class="p-6 bg-stone-100 rounded-xl border border-stone-200 mt-8 space-y-4 text-left">
                    <div class="flex items-start gap-3">
                        <i class="fa-solid fa-location-dot text-amber-600 mt-1"></i>
                        <div>
                            <h4 class="text-sm font-bold text-gray-900">Emplacement</h4>
                            <p class="text-xs text-gray-600 mt-0.5">Kpalimé, Région des Plateaux, Togo</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3 border-t border-stone-200 pt-4">
                        <i class="fa-solid fa-clock text-amber-600 mt-1"></i>
                        <div>
                            <h4 class="text-sm font-bold text-gray-900">Réception</h4>
                            <p class="text-xs text-gray-600 mt-0.5">Ouverte 24h/24 & 7j/7</p>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Colonne de Droite : Formulaire Moderne -->
            <div class="lg:col-span-7 bg-white p-8 sm:p-10 rounded-2xl border border-stone-200/80 shadow-sm text-left">
                <h3 class="text-2xl  font-bold text-gray-900 mb-2">
                    Envoyez-nous un message
                </h3>
                <p class="text-xs text-gray-500 mb-8 font-light">
                    Remplissez le formulaire ci-dessous et notre équipe vous répondra dans les plus brefs délais.
                </p>

                <form action="#" method="POST" class="space-y-6">
                    @csrf
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <!-- Nom complet -->
                        <div>
                            <label for="name" class="block text-xs font-bold uppercase tracking-wider text-gray-700 mb-2">
                                Nom complet <span class="text-amber-600">*</span>
                            </label>
                            <input
                                type="text"
                                id="name"
                                name="name"
                                required
                                placeholder="Ex: Jean Dupont"
                                class="w-full px-4 py-3 bg-stone-50 border border-stone-200 rounded-lg text-sm text-gray-900 placeholder-gray-400 focus:outline-none focus:border-amber-600 focus:bg-white transition">
                        </div>

                        <!-- Téléphone -->
                        <div>
                            <label for="phone" class="block text-xs font-bold uppercase tracking-wider text-gray-700 mb-2">
                                Téléphone <span class="text-amber-600">*</span>
                            </label>
                            <input
                                type="tel"
                                id="phone"
                                name="phone"
                                required
                                placeholder="+228 92 62 68 83"
                                class="w-full px-4 py-3 bg-stone-50 border border-stone-200 rounded-lg text-sm text-gray-900 placeholder-gray-400 focus:outline-none focus:border-amber-600 focus:bg-white transition">
                        </div>
                    </div>

                    <!-- Email & Sujet -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div>
                            <label for="email" class="block text-xs font-bold uppercase tracking-wider text-gray-700 mb-2">
                                Adresse Email
                            </label>
                            <input
                                type="email"
                                id="email"
                                name="email"
                                placeholder="votre@email.com"
                                class="w-full px-4 py-3 bg-stone-50 border border-stone-200 rounded-lg text-sm text-gray-900 placeholder-gray-400 focus:outline-none focus:border-amber-600 focus:bg-white transition">
                        </div>

                        <div>
                            <label for="subject" class="block text-xs font-bold uppercase tracking-wider text-gray-700 mb-2">
                                Sujet du Message
                            </label>
                            <select
                                id="subject"
                                name="subject"
                                class="w-full px-4 py-3 bg-stone-50 border border-stone-200 rounded-lg text-sm text-gray-900 focus:outline-none focus:border-amber-600 focus:bg-white transition">
                                <option value="reservation">Réservation de Chambre</option>
                                <option value="gastronomie">Commande / Restauration</option>
                                <option value="evenement">Événement & Séminaire</option>
                                <option value="terrain">Location Terrain Synthétique</option>
                                <option value="autre">Autre Demande</option>
                            </select>
                        </div>
                    </div>

                    <!-- Message -->
                    <div>
                        <label for="message" class="block text-xs font-bold uppercase tracking-wider text-gray-700 mb-2">
                            Votre Message <span class="text-amber-600">*</span>
                        </label>
                        <textarea
                            id="message"
                            name="message"
                            rows="5"
                            required
                            placeholder="Détaillez votre demande ici..."
                            class="w-full px-4 py-3 bg-stone-50 border border-stone-200 rounded-lg text-sm text-gray-900 placeholder-gray-400 focus:outline-none focus:border-amber-600 focus:bg-white transition resize-none"></textarea>
                    </div>

                    <!-- Bouton de Soumission -->
                    <button
                        type="submit"
                        class="w-full sm:w-auto px-8 py-4 bg-gray-900 hover:bg-amber-600 text-white text-xs font-bold uppercase tracking-widest transition-all duration-300 shadow-md hover:shadow-xl rounded-lg inline-flex items-center justify-center gap-3 group">
                        <span>Envoyer le message</span>
                        <i class="fa-solid fa-paper-plane text-xs text-amber-400 group-hover:text-white group-hover:translate-x-1 transition"></i>
                    </button>
                </form>
            </div>

        </div>
    </div>
</section>

<!-- 3. CARTE GOOGLE MAPS INTEGREE -->
@include('components.landing.map')



@endsection