<?php
require_once '../../../includes/config.php';
require_once '../../../includes/function.php';
require_once '../../../includes/classes/vehicule.php';

$id = isset($_GET['id']) ? $_GET['id'] : 0;
$dispo = isset($_GET['disponibilite']) ? $_GET['disponibilite'] : '';

if ($id == 0){
exit;
} 


$vehicules = Vehicle::getvehiculesParCategorie($conn, $id);


if ($dispo !== '') {
    $vehicules = array_filter($vehicules, fn($v) => $v['disponibilite'] == $dispo);
}


foreach ($vehicules as $vehicule):
    if ($vehicule['disponibilite'] == 1): ?>
        <div class="group bg-white rounded-[2rem] overflow-hidden border border-gray-100 shadow-sm hover:shadow-2xl transition-all duration-500">
            <div class="relative h-60 overflow-hidden">
                <img src="<?= '../../../assets/uploads/'.$vehicule['image'] ?>" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                <span class="absolute top-5 right-5 bg-green-500 text-white text-[10px] font-black uppercase tracking-widest px-3 py-1 rounded-full shadow-lg">Disponible</span>
            </div>
            <div class="p-8">
                <div class="flex justify-between items-start mb-2">
                    <h3 class="text-2xl font-bold text-gray-800 tracking-tight"><?= $vehicule['marque']." --- ".$vehicule['modele'] ?></h3>
                    <span class="text-xl font-black text-indigo-600 italic"><?= $vehicule['prix'] ?>€<span class="text-xs text-gray-400 font-normal">/j</span></span>
                </div>
                <a href="details.php?id=<?= $vehicule['id_vehicule'] ?>" class="block w-full text-center bg-slate-900 text-white py-4 rounded-2xl font-bold hover:bg-indigo-600 transition-colors shadow-lg shadow-slate-200">Détails & Réservation</a>
            </div>
        </div>
    <?php else: ?>
        <div class="group bg-white rounded-[2rem] overflow-hidden border border-gray-100 shadow-sm opacity-75 grayscale">
            <div class="relative h-60 overflow-hidden">
                <img src="<?= '../../../assets/uploads/'.$vehicule['image'] ?>" class="w-full h-full object-cover">
                <span class="absolute top-5 right-5 bg-red-500 text-white text-[10px] font-black uppercase tracking-widest px-3 py-1 rounded-full shadow-lg">Indisponible</span>
            </div>
            <div class="p-8">
                <h3 class="text-2xl font-bold text-gray-800 tracking-tight mb-8"><?= $vehicule['marque']." --- ".$vehicule['modele'] ?></h3>
                <span class="text-xl font-black text-indigo-600 italic"><?= $vehicule['prix'] ?>€<span class="text-xs text-gray-400 font-normal">/j</span></span>
                <button disabled class="w-full bg-gray-200 text-gray-500 py-4 rounded-2xl font-bold cursor-not-allowed">Non disponible</button>
            </div>
        </div>
    <?php endif;
endforeach;
