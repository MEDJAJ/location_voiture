<?php
require_once '../../../includes/config.php';
require_once '../../../includes/function.php';
require_once '../../../includes/classes/Categorie.php';
require_once '../../../includes/classes/vehicule.php';

$id=isset($_GET['id']) ? $_GET['id'] : 0;
if($id==0){
    echo "cette id introvable";
    exit;
}

$vehicules=Vehicle::getById($conn,$id);






?>




<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Détails - MaBagnole</title>
</head>
<body class="bg-slate-50">
    <nav class="bg-white border-b px-6 py-4 flex justify-between items-center">
        <div class="text-2xl font-black text-indigo-600 tracking-tighter">MaBagnole</div>
        <a href="categorie.php" class="text-sm font-bold text-gray-500 hover:text-indigo-600">← Retour au catalogue</a>
    </nav>

    <main class="max-w-7xl mx-auto px-6 py-12 grid grid-cols-1 lg:grid-cols-3 gap-12">
        <div class="lg:col-span-2">
            <div class="rounded-[3rem] overflow-hidden shadow-lg mb-8 bg-gray-200">
                <img src="<?= '../../../assets/uploads/'.$vehicules['image'] ?>" class="w-full h-[500px] object-cover">
            </div>
            <h1 class="text-5xl font-black text-gray-900 mb-4 tracking-tighter"><?= $vehicules['modele'] ?></h1>
            <div class="flex gap-4 mb-8">
                <span class="px-4 py-2 bg-indigo-50 text-indigo-600 rounded-xl font-bold"><?= $vehicules['marque'] ?></span>
                <span class="px-4 py-2 bg-gray-100 text-gray-600 rounded-xl font-bold"><?= $vehicules['prix'] ?>€</span>
            </div>
            <p class="text-xl text-gray-500 leading-relaxed mb-12">
                L'accélération la plus rapide de tous les véhicules en production aujourd'hui. Profitez d'une puissance de 1020 chevaux et d'un intérieur futuriste.
            </p>

            <div class="border-t pt-10">
                <h2 class="text-2xl font-bold mb-8">Ce qu'en disent les clients</h2>
                <div class="space-y-6">
                    <div class="bg-white p-6 rounded-3xl border border-gray-100">
                        <div class="flex justify-between mb-4">
                            <span class="font-bold">Sophie L.</span>
                            <span class="text-yellow-400 font-bold">★★★★★</span>
                        </div>
                        <p class="text-gray-600 italic">"Incroyable. La voiture était propre, chargée à 100%. L'interface MaBagnole est top !"</p>
                    </div>
                </div>
            </div>
        </div>

        <aside>
            <div class="bg-white p-10 rounded-[2.5rem] shadow-2xl border border-gray-50 sticky top-10">
                <h3 class="text-2xl font-bold mb-8 italic">Réserver ce véhicule</h3>
                <form action="#" class="space-y-5">
                    <div>
                        <label class="text-[10px] font-black uppercase text-gray-400 tracking-widest ml-1">Prise en charge</label>
                        <input type="text" placeholder="Gare, Aéroport, Ville..." class="w-full mt-1 p-4 bg-gray-50 rounded-2xl border-none focus:ring-2 focus:ring-indigo-500 outline-none">
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="text-[10px] font-black uppercase text-gray-400 tracking-widest ml-1">Début</label>
                            <input type="date" class="w-full mt-1 p-4 bg-gray-50 rounded-2xl border-none outline-none">
                        </div>
                        <div>
                            <label class="text-[10px] font-black uppercase text-gray-400 tracking-widest ml-1">Fin</label>
                            <input type="date" class="w-full mt-1 p-4 bg-gray-50 rounded-2xl border-none outline-none">
                        </div>
                    </div>
                    <div class="pt-6 border-t border-dashed my-6 flex justify-between items-center">
                        <span class="text-gray-400 font-bold">Prix Total</span>
                        <span class="text-4xl font-black text-indigo-600 underline"><?= $vehicules['prix'] ?>€</span>
                    </div>
                    <button class="w-full bg-indigo-600 text-white py-5 rounded-[1.5rem] font-black text-xl hover:bg-indigo-700 shadow-xl shadow-indigo-100 transition-all transform hover:scale-[1.02]">RESERVER</button>
                </form>
            </div>
        </aside>
    </main>
</body>
</html>