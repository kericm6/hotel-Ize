<!-- resources/views/gastronomy/index.blade.php -->
@extends('layouts.app')

@section('title', 'Gastronomie & Bar - Hôtel IZE')

@section('content')

<!-- 1. HERO BANNER DE LA PAGE GASTRONOMIE -->
<section class="relative bg-gray-900 text-white py-28 overflow-hidden">
    <img
        src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?q=80&w=1920&auto=format&fit=crop"
        alt="Gastronomie Hôtel IZE"
        class="absolute inset-0 w-full h-full object-cover opacity-35 z-0">
    <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/60 to-transparent z-10"></div>

    <div class="relative z-20 max-w-7xl mx-auto px-6 lg:px-8 text-left">
        <span class="text-amber-400 text-xs font-bold uppercase tracking-widest block mb-3" data-aos="fade-up" data-aos-duration="800">
            Saveurs & Authenticité
        </span>
        <h1 class="text-4xl sm:text-5xl md:text-6xl  font-bold tracking-tight mb-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
            Gastronomie & Bar Lounge
        </h1>
        <p class="text-gray-300 text-base sm:text-lg max-w-2xl font-light leading-relaxed" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
            Une carte d'exception mariant les produits du terroir de Kpalimé aux finesses de la cuisine internationale.
        </p>
    </div>
</section>

<!-- 2. MENU SOIGNÉ ET STRUCTURÉ -->
<!-- Section Carte & Menu (Tailwind CSS) -->
<section class="py-16 bg-stone-50 text-gray-800">
    <div class="max-w-4xl mx-auto px-6 lg:px-8">

        <!-- En-tête de section -->
        <div class="text-center max-w-xl mx-auto mb-10" data-aos="fade-up" data-aos-duration="800">
            <span class="text-amber-600 text-xs font-bold uppercase tracking-widest block mb-2">
                Gastronomie & Formules
            </span>
            <h2 class="text-3xl  font-bold text-gray-900">
                Aperçu de Notre Carte
            </h2>
            <div class="w-12 h-0.5 bg-amber-600 mx-auto mt-3"></div>
        </div>

        <!-- Carte Conteneur / Tableau Stylé -->
        <div class="bg-white rounded-xl border border-stone-200/80 shadow-sm overflow-hidden mb-8" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="100">
            <div class="overflow-x-auto">
                <table class="w-full text-left text-sm text-gray-600">
                    <thead class="bg-stone-100 text-xs uppercase tracking-wider text-gray-700 border-b border-stone-200">
                        <tr>
                            <th scope="col" class="px-6 py-4 font-bold">Formule</th>
                            <th scope="col" class="px-6 py-4 font-bold">Composition</th>
                            <th scope="col" class="px-6 py-4 font-bold text-right">Prix</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-stone-100">
                        <tr class="hover:bg-amber-50/40 transition">
                            <td class="px-6 py-4  font-bold text-gray-900 whitespace-nowrap">
                                Menu Express
                            </td>
                            <td class="px-6 py-4 text-xs font-light text-gray-500">
                                Plat du jour + Boisson au choix
                            </td>
                            <td class="px-6 py-4 font-bold text-amber-600 text-right whitespace-nowrap">
                                5 000 FCFA
                            </td>
                        </tr>
                        <tr class="hover:bg-amber-50/40 transition">
                            <td class="px-6 py-4  font-bold text-gray-900 whitespace-nowrap">
                                Formule Gourmet
                            </td>
                            <td class="px-6 py-4 text-xs font-light text-gray-500">
                                Entrée au choix + Plat principal + Dessert maison
                            </td>
                            <td class="px-6 py-4 font-bold text-amber-600 text-right whitespace-nowrap">
                                8 500 FCFA
                            </td>
                        </tr>
                        <tr class="hover:bg-amber-50/40 transition">
                            <td class="px-6 py-4  font-bold text-gray-900 whitespace-nowrap">
                                Spécialité IZE
                            </td>
                            <td class="px-6 py-4 text-xs font-light text-gray-500">
                                Grillades mixtes aux épices de Kpalimé & accompagnement
                            </td>
                            <td class="px-6 py-4 font-bold text-amber-600 text-right whitespace-nowrap">
                                7 000 FCFA
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Bouton pour voir le menu complet en image -->
        <div class="text-center">
            <a
                href="/images/menu-complet.jpg"
                target="_blank"
                class="inline-flex items-center gap-3 px-8 py-4 bg-gray-900 hover:bg-amber-600 text-white text-xs font-bold uppercase tracking-widest transition-all duration-300 shadow-md hover:shadow-xl rounded-lg group">
                <i class="fa-solid fa-image text-amber-400 group-hover:text-white transition"></i>
                <span>Voir le menu complet en image</span>
                <i class="fa-solid fa-arrow-up-right-from-square text-[10px] opacity-70"></i>
            </a>
        </div>

    </div>
</section>

<!-- 3. FORMULAIRE DE PASSE DE COMMANDE -->
<section id="commande" class="py-20 bg-gray-900 text-white">
    <div class="max-w-4xl mx-auto px-6 lg:px-8">
        <div class="bg-gray-950 p-8 sm:p-12 border border-gray-800 shadow-2xl">
            <div class="text-center max-w-xl mx-auto mb-10">
                <span class="text-amber-400 text-xs font-bold uppercase tracking-widest block mb-2">
                    Service Rapide
                </span>
                <h3 class="text-2xl sm:text-3xl  font-bold">Passer une Commande</h3>
                <p class="text-gray-400 text-sm font-light mt-2">
                    Commandez vos plats préférés à déguster au restaurant, en chambre ou à emporter.
                </p>
            </div>

            <form class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <div>
                    <label class="block text-xs font-bold uppercase tracking-wider text-gray-300 mb-2">Nom Complet</label>
                    <input type="text" placeholder="Ex: Keric Kodomma" class="w-full bg-gray-900 border border-gray-800 text-white text-sm px-4 py-3 focus:outline-none focus:border-amber-500">
                </div>

                <div>
                    <label class="block text-xs font-bold uppercase tracking-wider text-gray-300 mb-2">Téléphone (WhatsApp)</label>
                    <input type="tel" placeholder="+228 92 62 68 83" class="w-full bg-gray-900 border border-gray-800 text-white text-sm px-4 py-3 focus:outline-none focus:border-amber-500">
                </div>

                <div>
                    <label class="block text-xs font-bold uppercase tracking-wider text-gray-300 mb-2">Type de Service</label>
                    <select class="w-full bg-gray-900 border border-gray-800 text-white text-sm px-4 py-3 focus:outline-none focus:border-amber-500">
                        <option>Service en Chambre (Résidents)</option>
                        <option>À consommer sur place</option>
                        <option>À emporter</option>
                    </select>
                </div>

                <div>
                    <label class="block text-xs font-bold uppercase tracking-wider text-gray-300 mb-2">Heure Souhaitée</label>
                    <input type="time" class="w-full bg-gray-900 border border-gray-800 text-white text-sm px-4 py-3 focus:outline-none focus:border-amber-500">
                </div>

                <div class="sm:col-span-2">
                    <label class="block text-xs font-bold uppercase tracking-wider text-gray-300 mb-2">Vos Plats & Instructions Spéciales</label>
                    <textarea rows="4" placeholder="Indiquez les plats choisis, la quantité et vos préférences (ex: sauce à part)..." class="w-full bg-gray-900 border border-gray-800 text-white text-sm px-4 py-3 focus:outline-none focus:border-amber-500"></textarea>
                </div>

                <div class="sm:col-span-2">
                    <button type="submit" class="w-full py-4 bg-amber-600 hover:bg-amber-700 text-white text-xs font-bold uppercase tracking-widest transition shadow-lg">
                        Envoyer la commande
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>



@endsection