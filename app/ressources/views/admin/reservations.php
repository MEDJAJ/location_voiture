<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MaBagnole</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap');
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        .glass-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        .sidebar-gradient {
            background: linear-gradient(180deg, #0f172a 0%, #1e1b4b 100%);
        }
    </style>
</head>

<body class="bg-[#f8fafc] flex min-h-screen text-slate-900">

<aside class="w-72 sidebar-gradient text-white flex flex-col shadow-2xl overflow-hidden sticky top-0 h-screen">
    <div class="p-8">
        <div class="flex items-center gap-3 mb-10">
            <div class="bg-indigo-500 p-2 rounded-xl shadow-lg shadow-indigo-500/50">
                <i class="fas fa-car-side text-2xl"></i>
            </div>
            <span class="text-xl font-bold tracking-tight">MaBagnole <span class="text-indigo-400">Pro</span></span>
        </div>

        <nav class="space-y-2">
            <a href="Statistiques.php" class="flex items-center gap-4 p-3 rounded-xl transition-all duration-200 hover:bg-white/10 group">
                <i class="fas fa-chart-pie text-slate-400 group-hover:text-indigo-400"></i>
                <span class="font-medium">Statistiques</span>
            </a>
            <a href="vehicules.php" class="flex items-center gap-4 p-3 rounded-xl transition-all duration-200 hover:bg-white/10 group">
                <i class="fas fa-car text-slate-400 group-hover:text-indigo-400"></i>
                <span class="font-medium"> Véhicules</span>
            </a>
            <a href="categories.php" class="flex items-center gap-4 p-3 rounded-xl transition-all duration-200 hover:bg-white/10 group">
                <i class="fas fa-tags text-slate-400 group-hover:text-indigo-400"></i>
                <span class="font-medium">Catégories</span>
            </a>
            <a href="reservations.php" class="flex items-center gap-4 p-3 rounded-xl bg-indigo-600 shadow-lg shadow-indigo-600/30 font-semibold">
                <i class="fas fa-calendar-check text-white"></i>
                <span>Réservations</span>
            </a>
            <a href="avis.php" class="flex items-center gap-4 p-3 rounded-xl transition-all duration-200 hover:bg-white/10 group">
                <i class="fas fa-star text-slate-400 group-hover:text-indigo-400"></i>
                <span class="font-medium">Avis Clients</span>
            </a>
        </nav>
    </div>

    <div class="mt-auto p-6 border-t border-white/10">
        <button class="flex items-center gap-4 w-full p-3 rounded-xl bg-red-500/10 text-red-400 hover:bg-red-500 hover:text-white transition-all duration-300">
            <i class="fas fa-sign-out-alt"></i>
            <span class="font-bold uppercase text-xs tracking-widest">Déconnexion</span>
        </button>
    </div>
</aside>

<main class="flex-1 p-10 overflow-y-auto">

    <header class="flex justify-between items-center mb-10">
        <div>
            <h2 class="text-3xl font-extrabold text-slate-800 tracking-tight">Planning de Location</h2>
            <p class="text-slate-500 mt-1">Gérez les demandes et le suivi des contrats clients.</p>
        </div>
        <div class="flex gap-3">
            <div class="glass-card flex items-center gap-3 px-4 py-2 rounded-2xl border border-slate-200 shadow-sm">
                <div class="w-2 h-2 rounded-full bg-yellow-400 animate-pulse"></div>
                <span class="text-sm font-bold text-slate-600">03 En attente</span>
            </div>
            <img src="https://ui-avatars.com/api/?name=Admin+User&background=6366f1&color=fff" class="w-10 h-10 rounded-full border-2 border-white shadow-md">
        </div>
    </header>

    <div class="flex gap-4 mb-8">
        <button class="px-6 py-2 bg-indigo-600 text-white rounded-full text-sm font-bold shadow-lg shadow-indigo-600/20">Toutes</button>
        <button class="px-6 py-2 bg-white text-slate-500 hover:bg-indigo-50 hover:text-indigo-600 rounded-full text-sm font-bold border border-slate-200 transition-all">En attente</button>
        <button class="px-6 py-2 bg-white text-slate-500 hover:bg-indigo-50 hover:text-indigo-600 rounded-full text-sm font-bold border border-slate-200 transition-all">Validées</button>
    </div>

    <div class="glass-card rounded-[2rem] shadow-sm border border-slate-100 overflow-hidden">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-slate-50/50 border-b border-slate-100">
                    <th class="p-6 text-xs font-black text-slate-400 uppercase tracking-widest">Client</th>
                    <th class="p-6 text-xs font-black text-slate-400 uppercase tracking-widest">Véhicule</th>
                    <th class="p-6 text-xs font-black text-slate-400 uppercase tracking-widest">Période</th>
                    <th class="p-6 text-xs font-black text-slate-400 uppercase tracking-widest">Statut</th>
                    <th class="p-6 text-xs font-black text-slate-400 uppercase tracking-widest text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-50">

                <tr class="hover:bg-indigo-50/30 transition-all group">
                    <td class="p-6">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-indigo-100 text-indigo-600 flex items-center justify-center font-bold">A</div>
                            <div>
                                <p class="font-bold text-slate-800">Ali Bensala</p>
                                <p class="text-xs text-slate-400">ali@email.com</p>
                            </div>
                        </div>
                    </td>
                    <td class="p-6 font-semibold text-slate-700">BMW X5 <span class="text-xs text-slate-400 block font-normal">SUV Premium</span></td>
                    <td class="p-6 text-sm">
                        <div class="flex items-center gap-2 text-slate-600 font-medium">
                            <i class="far fa-calendar-alt text-indigo-400"></i>
                            12/07 <i class="fas fa-arrow-right text-[10px] text-slate-300"></i> 15/07
                        </div>
                    </td>
                    <td class="p-6">
                        <span class="bg-orange-50 text-orange-600 text-[10px] font-black px-3 py-1.5 rounded-lg border border-orange-100">
                           <i class="fas fa-clock mr-1"></i> EN ATTENTE
                        </span>
                    </td>
                    <td class="p-6 text-right">
                        <div class="flex justify-end gap-2 opacity-0 group-hover:opacity-100 transition-all">
                            <button title="Valider" class="w-9 h-9 flex items-center justify-center bg-emerald-500 text-white rounded-xl hover:shadow-lg transition-all">
                                <i class="fas fa-check text-xs"></i>
                            </button>
                            <button title="Modifier" class="w-9 h-9 flex items-center justify-center bg-indigo-50 text-indigo-600 rounded-xl hover:bg-indigo-600 hover:text-white transition-all">
                                <i class="fas fa-pen text-xs"></i>
                            </button>
                            <button title="Annuler" class="w-9 h-9 flex items-center justify-center bg-red-50 text-red-500 rounded-xl hover:bg-red-500 hover:text-white transition-all">
                                <i class="fas fa-times text-xs"></i>
                            </button>
                        </div>
                    </td>
                </tr>

                <tr class="hover:bg-indigo-50/30 transition-all group">
                    <td class="p-6">
                        <div class="flex items-center gap-3">
                            <img src="https://ui-avatars.com/api/?name=Sara+L&background=f472b6&color=fff" class="w-10 h-10 rounded-full">
                            <div>
                                <p class="font-bold text-slate-800">Sara Lmine</p>
                                <p class="text-xs text-slate-400">sara@email.com</p>
                            </div>
                        </div>
                    </td>
                    <td class="p-6 font-semibold text-slate-700">Audi A4 <span class="text-xs text-slate-400 block font-normal">Berline Luxe</span></td>
                    <td class="p-6 text-sm">
                        <div class="flex items-center gap-2 text-slate-600 font-medium">
                            <i class="far fa-calendar-alt text-indigo-400"></i>
                            10/07 <i class="fas fa-arrow-right text-[10px] text-slate-300"></i> 13/07
                        </div>
                    </td>
                    <td class="p-6">
                        <span class="bg-emerald-50 text-emerald-600 text-[10px] font-black px-3 py-1.5 rounded-lg border border-emerald-100">
                           <i class="fas fa-check-circle mr-1"></i> VALIDÉE
                        </span>
                    </td>
                    <td class="p-6 text-right">
                        <div class="flex justify-end gap-2 opacity-0 group-hover:opacity-100 transition-all">
                            <button class="w-9 h-9 flex items-center justify-center bg-indigo-50 text-indigo-600 rounded-xl hover:bg-indigo-600 hover:text-white transition-all">
                                <i class="fas fa-pen text-xs"></i>
                            </button>
                        </div>
                    </td>
                </tr>

                 <tr class="hover:bg-indigo-50/30 transition-all group">
                    <td class="p-6 text-slate-400">
                        <div class="flex items-center gap-3 grayscale">
                            <div class="w-10 h-10 rounded-full bg-slate-200 text-slate-500 flex items-center justify-center font-bold">O</div>
                            <div>
                                <p class="font-bold">Omar Idrissi</p>
                                <p class="text-xs">omar@email.com</p>
                            </div>
                        </div>
                    </td>
                    <td class="p-6 font-semibold text-slate-400 italic">Peugeot 208</td>
                    <td class="p-6 text-sm text-slate-400 italic">05/07 - 07/07</td>
                    <td class="p-6">
                        <span class="bg-slate-100 text-slate-400 text-[10px] font-black px-3 py-1.5 rounded-lg border border-slate-200">
                           <i class="fas fa-ban mr-1"></i> ANNULÉE
                        </span>
                    </td>
                    <td class="p-6 text-right">
                        <button class="w-9 h-9 opacity-0 group-hover:opacity-100 flex items-center justify-center bg-indigo-50 text-indigo-600 rounded-xl ml-auto">
                            <i class="fas fa-redo text-xs"></i>
                        </button>
                    </td>
                </tr>

            </tbody>
        </table>

        <div class="p-6 bg-slate-50/50 flex justify-between items-center border-t border-slate-100">
            <p class="text-xs font-bold text-slate-400">Affichage de 1-3 sur 24 réservations</p>
            <div class="flex gap-2">
                <button class="px-3 py-1 bg-white border border-slate-200 rounded-lg text-slate-400 hover:bg-indigo-600 hover:text-white transition-all"><i class="fas fa-chevron-left text-[10px]"></i></button>
                <button class="px-3 py-1 bg-white border border-slate-200 rounded-lg text-slate-400 hover:bg-indigo-600 hover:text-white transition-all"><i class="fas fa-chevron-right text-[10px]"></i></button>
            </div>
        </div>
    </div>
</main>

</body>
</html>