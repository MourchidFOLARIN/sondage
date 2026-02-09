<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Merci | Session Terminée</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet">
    <style>
        @keyframes subtleZoom {
            from { transform: scale(0.95); opacity: 0; }
            to { transform: scale(1); opacity: 1; }
        }
        .animate-zoom { animation: subtleZoom 0.6s ease-out forwards; }
    </style>
</head>
<body class="bg-slate-50 min-h-screen flex items-center justify-center p-6">

    <div class="max-w-md w-full text-center space-y-8 animate-zoom">
        
        <div class="inline-flex items-center justify-center w-24 h-24 bg-green-100 text-green-600 rounded-full mb-4">
            <i class="ri-checkbox-circle-fill text-5xl"></i>
        </div>

        <section class="space-y-2">
            <h1 class="text-3xl font-bold text-slate-900">Merci !</h1>
            <p class="text-slate-500 text-lg">Nous vous remercions pour votre attention et votre contribution.</p>
        </section>

        <div class="grid gap-4 pt-6">
            <a href="index.php?action=form" 
               class="flex items-center justify-center gap-2 bg-indigo-600 hover:bg-indigo-700 text-white py-4 px-6 rounded-2xl font-bold transition-all transform hover:scale-[1.02] shadow-lg shadow-indigo-200">
                <i class="ri-add-circle-line text-xl"></i>
                Enregistrer un nouveau
            </a>

            <a href="index.php?action=SignUp" 
               class="flex items-center justify-center gap-2 bg-white hover:bg-red-50 text-slate-600 hover:text-red-600 py-4 px-6 rounded-2xl font-bold border border-slate-200 transition-all">
                <i class="ri-logout-box-r-line text-xl"></i>
                Déconnexion
            </a>
        </div>

        <p class="text-slate-400 text-sm pt-8">
            Session sécurisée • <span id="current-year">2026</span>
        </p>
    </div>

</body>
</html>