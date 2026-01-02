<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Mes Avis - MaBagnole</title>
</head>
<body class="bg-slate-50">
    <nav class="bg-white border-b px-6 py-4 flex justify-between items-center">
        <div class="text-2xl font-black text-indigo-600 tracking-tighter">MaBagnole</div>
        <div class="flex gap-6">
            <a href="categorie.php" class="font-bold text-gray-400">Catalogue</a>
            <a href="mes_avis.php" class="font-bold text-indigo-600">Mes Avis</a>
        </div>
    </nav>

    <main class="max-w-4xl mx-auto px-6 py-16">
        <h1 class="text-4xl font-black text-gray-900 mb-10 tracking-tight text-center lg:text-left">Vos expériences passées</h1>

        <div class="space-y-6">
            <div class="bg-white p-8 rounded-[2rem] shadow-sm border border-gray-100 flex flex-col md:flex-row justify-between items-center gap-6">
                <div class="flex gap-6 items-center w-full">
                    <div class="w-24 h-24 bg-gray-100 rounded-2xl overflow-hidden shrink-0">
                        <img src="https://images.unsplash.com/photo-1542362567-b055002b91f4?auto=format&fit=crop&w=200" class="w-full h-full object-cover">
                    </div>
                    <div>
                        <h4 class="text-xl font-bold text-gray-800">Audi RS6 Avant</h4>
                        <p class="text-gray-500 italic mt-1">"Une bête de course ! Expérience inoubliable."</p>
                        <div class="text-yellow-400 text-xs mt-2 font-bold tracking-widest uppercase">★★★★★</div>
                    </div>
                </div>
                <div class="flex gap-3 w-full md:w-auto justify-end">
                    <button class="px-4 py-3 bg-indigo-50 text-indigo-600 rounded-xl font-bold hover:bg-indigo-100 transition">Modifier</button>
                    <button class="px-4 py-3 bg-red-50 text-red-500 rounded-xl font-bold hover:bg-red-100 transition">Supprimer</button>
                </div>
            </div>

            <div class="bg-gray-100/50 p-8 rounded-[2rem] border-2 border-dashed border-gray-200 flex justify-between items-center opacity-60">
                <div class="italic text-gray-400 font-medium">
                    Avis sur <span class="font-bold">Fiat 500</span> (Masqué)
                </div>
                <button class="text-indigo-600 font-bold hover:underline">Restaurer cet avis</button>
            </div>
        </div>

        <div class="mt-20 bg-white p-10 rounded-[3rem] shadow-xl border border-gray-100">
            <h2 class="text-2xl font-bold mb-6">Ajouter un avis</h2>
            <form action="#" class="space-y-4">
                <select class="w-full p-4 rounded-2xl bg-gray-50 border outline-none font-bold text-gray-500">
                    <option>Sélectionnez un véhicule loué</option>
                    <option>Tesla Model 3 - Loué le 12/12/2025</option>
                </select>
                <textarea rows="4" placeholder="Racontez-nous votre trajet..." class="w-full p-4 rounded-2xl bg-gray-50 border focus:ring-2 focus:ring-indigo-500 outline-none"></textarea>
                <div class="flex items-center gap-4">
                    <span class="text-sm font-bold text-gray-400 uppercase tracking-widest">Note :</span>
                    <input type="number" max="5" min="1" class="w-20 p-2 bg-gray-50 border rounded-xl font-bold text-center">
                </div>
                <button class="bg-slate-900 text-white px-10 py-4 rounded-2xl font-bold hover:bg-indigo-600 transition">Publier l'avis</button>
            </form>
        </div>
    </main>
</body>
</html>