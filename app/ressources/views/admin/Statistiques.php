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
        .stat-card:hover { transform: translateY(-5px); transition: all 0.3s ease; }
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
            <a href="Statistiques.php" class="flex items-center gap-4 p-3 rounded-xl bg-indigo-600 shadow-lg shadow-indigo-600/30 font-semibold">
                <i class="fas fa-chart-pie text-white"></i>
                <span>statistiques</span>
            </a>
            <a href="vehicules.php" class="flex items-center gap-4 p-3 rounded-xl transition-all duration-200 hover:bg-white/10 group">
                <i class="fas fa-car text-slate-400 group-hover:text-indigo-400"></i>
                <span class="font-medium">Gestion Véhicules</span>
            </a>
            <a href="categories.php" class="flex items-center gap-4 p-3 rounded-xl transition-all duration-200 hover:bg-white/10 group">
                <i class="fas fa-tags text-slate-400 group-hover:text-indigo-400"></i>
                <span class="font-medium">Catégories</span>
            </a>
            <a href="reservations.php" class="flex items-center gap-4 p-3 rounded-xl transition-all duration-200 hover:bg-white/10 group">
                <i class="fas fa-calendar-check text-slate-400 group-hover:text-indigo-400"></i>
                <span class="font-medium">Réservations</span>
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
            <h2 class="text-3xl font-extrabold text-slate-800 tracking-tight">Statistiques</h2>
            <p class="text-slate-500 mt-1">Aperçu global de votre activité et statistiques.</p>
        </div>
        <div class="flex items-center gap-4">
            <img src="https://ui-avatars.com/api/?name=Admin+User&background=6366f1&color=fff" class="w-12 h-12 rounded-2xl border-4 border-white shadow-lg">
        </div>
    </header>

    <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">

        <div class="glass-card stat-card p-6 rounded-[2rem] shadow-sm border border-slate-100">
            <div class="w-10 h-10 rounded-xl bg-indigo-50 text-indigo-600 flex items-center justify-center mb-4">
                <i class="fas fa-car text-lg"></i>
            </div>
            <h4 class="text-slate-400 text-xs font-black uppercase tracking-widest">Véhicules</h4>
            <p class="text-3xl font-black text-slate-800 mt-2">48</p>
            <p class="text-emerald-500 text-xs font-bold mt-1"><i class="fas fa-arrow-up mr-1"></i>+5 ce mois</p>
        </div>

        <div class="glass-card stat-card p-6 rounded-[2rem] shadow-sm border border-slate-100">
            <div class="w-10 h-10 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center mb-4">
                <i class="fas fa-calendar-check text-lg"></i>
            </div>
            <h4 class="text-slate-400 text-xs font-black uppercase tracking-widest">Réservations</h4>
            <p class="text-3xl font-black text-slate-800 mt-2">126</p>
            <p class="text-emerald-500 text-xs font-bold mt-1"><i class="fas fa-chart-line mr-1"></i>+12% cette semaine</p>
        </div>

        <div class="glass-card stat-card p-6 rounded-[2rem] shadow-sm border border-slate-100">
            <div class="w-10 h-10 rounded-xl bg-purple-50 text-purple-600 flex items-center justify-center mb-4">
                <i class="fas fa-users text-lg"></i>
            </div>
            <h4 class="text-slate-400 text-xs font-black uppercase tracking-widest">Clients</h4>
            <p class="text-3xl font-black text-slate-800 mt-2">89</p>
            <p class="text-blue-500 text-xs font-bold mt-1">Utilisateurs actifs</p>
        </div>

        <div class="glass-card stat-card p-6 rounded-[2rem] shadow-sm border border-slate-100">
            <div class="w-10 h-10 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center mb-4">
                <i class="fas fa-wallet text-lg"></i>
            </div>
            <h4 class="text-slate-400 text-xs font-black uppercase tracking-widest">Revenus</h4>
            <p class="text-3xl font-black text-slate-800 mt-2">32 500 €</p>
            <p class="text-emerald-500 text-xs font-bold mt-1"><i class="fas fa-caret-up mr-1"></i>+18% de profit</p>
        </div>

    </section>

    <section class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-10">

        <div class="glass-card p-8 rounded-[2.5rem] shadow-sm border border-slate-100">
            <h3 class="text-xl font-bold text-slate-800 mb-6 flex items-center gap-3">
                <i class="fas fa-history text-indigo-500"></i> Activité récente
            </h3>
            <ul class="space-y-4">
                <li class="flex items-center gap-4 p-3 rounded-2xl hover:bg-slate-50 transition-all">
                    <span class="w-2 h-2 rounded-full bg-emerald-500"></span>
                    <span class="text-slate-600 font-medium">5 nouvelles réservations aujourd’hui</span>
                </li>
                <li class="flex items-center gap-4 p-3 rounded-2xl hover:bg-slate-50 transition-all">
                    <span class="w-2 h-2 rounded-full bg-indigo-500"></span>
                    <span class="text-slate-600 font-medium">2 véhicules ajoutés au catalogue</span>
                </li>
                <li class="flex items-center gap-4 p-3 rounded-2xl hover:bg-slate-50 transition-all">
                    <span class="w-2 h-2 rounded-full bg-yellow-500"></span>
                    <span class="text-slate-600 font-medium">3 nouveaux avis clients publiés</span>
                </li>
                <li class="flex items-center gap-4 p-3 rounded-2xl hover:bg-slate-50 transition-all">
                    <span class="w-2 h-2 rounded-full bg-red-500"></span>
                    <span class="text-slate-600 font-medium">1 réservation annulée par le client</span>
                </li>
            </ul>
        </div>

        <div class="glass-card p-8 rounded-[2.5rem] shadow-sm border border-slate-100">
            <h3 class="text-xl font-bold text-slate-800 mb-6 flex items-center gap-3">
                <i class="fas fa-fire text-orange-500"></i> Véhicules populaires
            </h3>
            <div class="space-y-5">
                <div class="group">
                    <div class="flex justify-between mb-2">
                        <span class="font-bold text-slate-700">BMW X5</span>
                        <span class="text-indigo-600 font-black">24 loc.</span>
                    </div>
                    <div class="w-full bg-slate-100 h-2 rounded-full overflow-hidden">
                        <div class="bg-indigo-500 h-full rounded-full transition-all duration-1000" style="width: 85%"></div>
                    </div>
                </div>
                <div class="group">
                    <div class="flex justify-between mb-2">
                        <span class="font-bold text-slate-700">Audi A4</span>
                        <span class="text-indigo-600 font-black">19 loc.</span>
                    </div>
                    <div class="w-full bg-slate-100 h-2 rounded-full overflow-hidden">
                        <div class="bg-indigo-400 h-full rounded-full transition-all duration-1000" style="width: 70%"></div>
                    </div>
                </div>
                <div class="group">
                    <div class="flex justify-between mb-2">
                        <span class="font-bold text-slate-700">Peugeot 208</span>
                        <span class="text-indigo-600 font-black">15 loc.</span>
                    </div>
                    <div class="w-full bg-slate-100 h-2 rounded-full overflow-hidden">
                        <div class="bg-indigo-300 h-full rounded-full transition-all duration-1000" style="width: 55%"></div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="glass-card p-8 rounded-[2.5rem] shadow-sm border border-slate-100">
        <h3 class="text-xl font-bold text-slate-800 mb-8 flex items-center gap-3">
            <i class="fas fa-chart-pie text-blue-500"></i> État des Réservations
        </h3>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="p-6 rounded-[2rem] bg-emerald-50 border border-emerald-100 text-center">
                <p class="text-4xl font-black text-emerald-600">82</p>
                <p class="text-emerald-700 font-bold text-sm uppercase mt-1">Validées</p>
                <div class="mt-4 text-xs text-emerald-500">Contrats signés</div>
            </div>
            <div class="p-6 rounded-[2rem] bg-yellow-50 border border-yellow-100 text-center">
                <p class="text-4xl font-black text-yellow-600">28</p>
                <p class="text-yellow-700 font-bold text-sm uppercase mt-1">En attente</p>
                <div class="mt-4 text-xs text-yellow-500">À vérifier</div>
            </div>
            <div class="p-6 rounded-[2rem] bg-red-50 border border-red-100 text-center">
                <p class="text-4xl font-black text-red-600">16</p>
                <p class="text-red-700 font-bold text-sm uppercase mt-1">Annulées</p>
                <div class="mt-4 text-xs text-red-500">Perte de CA</div>
            </div>
        </div>
    </section>

</main>
</body>
</html>