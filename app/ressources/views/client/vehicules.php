<?php

require_once '../../../includes/config.php';
require_once '../../../includes/function.php';
require_once '../../../includes/classes/Categorie.php';
require_once '../../../includes/classes/vehicule.php';

$id = isset($_GET['id']) ? $_GET['id'] : 0;
if ($id == 0) {
    echo "cette id introuvable";
    exit;
}


$limit = 3; 
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$page = max($page, 1);
$offset = ($page - 1) * $limit;


$totalVehicules = Vehicle::countVehiculesParCategorie($conn, $id);
$totalPages = ceil($totalVehicules / $limit);


$vehicules = Vehicle::getVehiculesParCategoriePaginated($conn, $id, $limit, $offset);

if(isset($_POST['recherche'])){
    $marque=trim($_POST['marque']);
    $vs= Vehicle::rechercheVehicules($conn,$marque,$id);
    $vehicules=$vs;
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

    <div class="flex flex-col md:flex-row justify-between items-end gap-6 mb-6">
        <div>
            <h2 class="text-3xl font-black text-slate-900 tracking-tight">
                Catégorie : <span class="text-indigo-600"><?= $_GET['name'] ?></span>
            </h2>
            <p class="text-gray-400 mt-1"><?= count($vehicules) ?> véhicules dans cette section</p>
        </div>

        
      <div class="flex flex-col md:flex-row gap-2 items-end">
 
    <div class="flex gap-2 items-center flex-1">
        <form action="" method="POST">
   <input name="marque" type="text" id="marqueInput" placeholder="Rechercher par marque..."
               class="flex-1 px-4 py-2 rounded-2xl border border-gray-300 focus:ring-2 focus:ring-indigo-500 outline-none">

        <button id="searchBtn" name="recherche" class="px-6 py-2 rounded-2xl bg-indigo-600 text-white font-bold hover:bg-indigo-500 transition">
            Rechercher
        </button>

        </form>
     
    </div>

  
    <div class="flex gap-2 items-center">
        <select id="disponibiliteSelect" class="px-4 py-2 rounded-2xl border border-gray-300 focus:ring-2 focus:ring-indigo-500 outline-none">
            <option value="">Tous</option>
            <option value="1">Disponible</option>
            <option value="0">Indisponible</option>
        </select>

        <button id="filterBtn" class="px-6 py-2 rounded-2xl bg-indigo-600 text-white font-bold hover:bg-indigo-500 transition">
            Filtrer
        </button>
    </div>
</div>

    </div>

   
    <div id="vehiculeGrid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
        <?php foreach ($vehicules as $vehicule): ?>
            <?php if ($vehicule['disponibilite'] == 1): ?>
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
            <?php endif; ?>
        <?php endforeach; ?>
    </div>

    <div class="flex justify-center mt-10 gap-2">
    <?php if ($page > 1): ?>
        <a href="?id=<?= $id ?>&name=<?= $_GET['name'] ?>&page=<?= $page - 1 ?>"
           class="px-4 py-2 bg-gray-200 rounded-xl font-bold hover:bg-indigo-500 hover:text-white">
           ←
        </a>
    <?php endif; ?>

    <?php for ($i = 1; $i <= $totalPages; $i++): ?>
        <a href="?id=<?= $id ?>&name=<?= $_GET['name'] ?>&page=<?= $i ?>"
           class="px-4 py-2 rounded-xl font-bold 
           <?= $i == $page ? 'bg-indigo-600 text-white' : 'bg-gray-200 hover:bg-indigo-500 hover:text-white' ?>">
           <?= $i ?>
        </a>
    <?php endfor; ?>

    <?php if ($page < $totalPages): ?>
        <a href="?id=<?= $id ?>&name=<?= $_GET['name'] ?>&page=<?= $page + 1 ?>"
           class="px-4 py-2 bg-gray-200 rounded-xl font-bold hover:bg-indigo-500 hover:text-white">
           →
        </a>
    <?php endif; ?>
</div>


</main>

<script>

document.getElementById('filterBtn').addEventListener('click', function() {
    const dispo = document.getElementById('disponibiliteSelect').value;
    const marque = document.getElementById('marqueInput').value.trim();
    const categoryId = <?= $id ?>;

    fetch(`vehicule_filter.php?id=${categoryId}&disponibilite=${dispo}&marque=${marque}`)
        .then(response => response.text())
        .then(html => {
            document.getElementById('vehiculeGrid').innerHTML = html;
        });
});
</script>

</body>
</html>
