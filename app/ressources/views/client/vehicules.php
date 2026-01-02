

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
$vehicules=Vehicle::getvehiculesParCategorie($conn,$id);

if(count($vehicules)==0){
echo"aucun vehicule trauver dans cette categorie";
}

?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>MaBagnole - Véhicules</title>
</head>
<body class="bg-slate-50">
    <nav class="sticky top-0 z-50 bg-white/90 backdrop-blur-md border-b border-gray-100 px-6 py-4 flex justify-between items-center">
        <div class="text-2xl font-black text-indigo-600 tracking-tighter">MaBagnole</div>
        <div class="flex gap-4">
            <a href="categorie.php" class="text-sm font-bold text-gray-500 hover:text-indigo-600 transition">← Retour aux catégories</a>
        </div>
    </nav>

    <main class="max-w-7xl mx-auto px-6 py-10">
        <div class="flex flex-col md:flex-row justify-between items-end gap-6 mb-12">
            <div>
                <h2 class="text-3xl font-black text-slate-900 tracking-tight">Catégorie : <span class="text-indigo-600"><?= $_GET['name'] ?></span></h2>
                <p class="text-gray-400 mt-1">12 véhicules disponibles dans cette section</p>
            </div>
            <div class="relative w-full md:w-96">
                <input type="text" placeholder="Modèle spécifique (ex: Porsche)..." class="w-full pl-12 pr-4 py-4 rounded-2xl border-none shadow-sm focus:ring-2 focus:ring-indigo-500 outline-none">
                <span class="absolute left-4 top-4 grayscale opacity-30">🔍</span>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">

<?php  foreach($vehicules as $vehicule){
if($vehicule['disponibilite']==1){


 ?>
            <div class="group bg-white rounded-[2rem] overflow-hidden border border-gray-100 shadow-sm hover:shadow-2xl transition-all duration-500">
                <div class="relative h-60 overflow-hidden">
                    <img src="<?= '../../../assets/uploads/'.$vehicule['image'] ?>" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                    <span class="absolute top-5 right-5 bg-green-500 text-white text-[10px] font-black uppercase tracking-widest px-3 py-1 rounded-full shadow-lg">Disponible</span>
                </div>
                <div class="p-8">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="text-2xl font-bold text-gray-800 tracking-tight"><?= $vehicule['marque']." --- ".$vehicule['modele'] ?> </h3>
                        <span class="text-xl font-black text-indigo-600 italic"><?= $vehicule['prix']?>€<span class="text-xs text-gray-400 font-normal">/j</span></span>
                    </div>
                    
                    <a href="details.php?id=<?= $vehicule['id_vehicule'] ?>" class="block w-full text-center bg-slate-900 text-white py-4 rounded-2xl font-bold hover:bg-indigo-600 transition-colors shadow-lg shadow-slate-200">Détails & Réservation</a>
                </div>
            </div>
            

<?php  }else{

 ?>

            <div class="group bg-white rounded-[2rem] overflow-hidden border border-gray-100 shadow-sm opacity-75 grayscale">
                <div class="relative h-60 overflow-hidden">
                    <img src="<?= '../../../assets/uploads/'.$vehicule['image'] ?>" class="w-full h-full object-cover">
                    <span class="absolute top-5 right-5 bg-red-500 text-white text-[10px] font-black uppercase tracking-widest px-3 py-1 rounded-full shadow-lg">Indisponible</span>
                </div>
                <div class="p-8">
                    <h3 class="text-2xl font-bold text-gray-800 tracking-tight mb-8"><?= $vehicule['marque']." --- ".$vehicule['modele'] ?></h3>
                     <span class="text-xl font-black text-indigo-600 italic"><?= $vehicule['prix']?>€<span class="text-xs text-gray-400 font-normal">/j</span></span>
                    <button disabled class="w-full bg-gray-200 text-gray-500 py-4 rounded-2xl font-bold cursor-not-allowed">Non disponible</button>
                </div>
            </div>

            <?php } }  ?>
        </div>

        <div class="mt-16 flex justify-center gap-2">
            <button class="w-12 h-12 rounded-xl bg-white border border-gray-100 flex items-center justify-center font-bold text-gray-400 hover:text-indigo-600 transition">←</button>
            <button class="w-12 h-12 rounded-xl bg-indigo-600 text-white flex items-center justify-center font-bold shadow-lg shadow-indigo-100">1</button>
            <button class="w-12 h-12 rounded-xl bg-white border border-gray-100 flex items-center justify-center font-bold text-gray-600 hover:border-indigo-600 transition">2</button>
            <button class="w-12 h-12 rounded-xl bg-white border border-gray-100 flex items-center justify-center font-bold text-gray-400 hover:text-indigo-600 transition">→</button>
        </div>
    </main>
</body>
</html>