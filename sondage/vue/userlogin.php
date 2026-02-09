<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accès Enquêteur</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700&display=swap');
        
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #fdfdfd;
            background-image: radial-gradient(#e5e7eb 0.5px, transparent 0.5px);
            background-size: 20px 20px;
        }

        .input-focus-effect:focus-within {
            border-color: blue;
            background: white;
            box-shadow: 0 10px 15px -3px rgba(16, 185, 129, 0.1);
        }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center bg-slate-50 p-4">

<?php if (isset($_SESSION['error'])): ?>
<div class="fixed top-6 right-6 max-w-sm bg-white border border-red-200 shadow-lg rounded-xl p-4 flex gap-3 animate-fade-in">
    <i class="ri-error-warning-line text-red-500 text-xl"></i>
    <p class="text-sm font-medium text-slate-700">
        <?= $_SESSION['error']; unset($_SESSION['error']); ?>
    </p>
</div>
<?php endif; ?>

<div class="w-full max-w-lg bg-white rounded-3xl shadow-xl border border-slate-100 overflow-hidden">

    <!-- Header -->
    <div class="px-10 pt-10 pb-8 text-center">
        <div class="w-14 h-14 bg-blue-600 rounded-2xl mx-auto mb-4 flex items-center justify-center shadow-md">
            <i class="ri-survey-line text-white text-2xl"></i>
        </div>
        <h1 class="text-2xl font-bold text-slate-800 tracking-tight">
            Nouvelle enquête
        </h1>
        <p class="text-sm text-slate-500 mt-1">
            Identification de l’enquêteur et du répondant
        </p>
    </div>

    <!-- Form -->
    <form action="index.php?action=login" method="post" class="px-8 md:px-12 pb-10 space-y-6">
        <input type="hidden" name="token" value="<?= htmlspecialchars($token ?? '') ?>">

        <!-- Enquêteur -->
        <div>
            <label class="block text-xs font-semibold text-slate-500 mb-1">
                Enquêteur
            </label>
            <div class="flex items-center gap-3 border border-slate-200 rounded-xl px-4 py-3 focus-within:border-blue-500 focus-within:ring-2 focus-within:ring-blue-100 transition">
                <i class="ri-user-line text-slate-400"></i>
                <input type="text" name="nomEnqt" value="<?= $nameEnq ?? '' ?>" required
                    placeholder="Nom complet"
                    class="w-full outline-none bg-transparent text-slate-700 placeholder-slate-400">
            </div>
        </div>

        <!-- Personne interrogée -->
        <div>
            <label class="block text-xs font-semibold text-slate-500 mb-1">
                Personne interrogée
            </label>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="flex items-center gap-3 border border-slate-200 rounded-xl px-4 py-3 focus-within:border-blue-500 focus-within:ring-2 focus-within:ring-blue-100 transition">
                    <i class="ri-id-card-line text-slate-400"></i>
                    <input type="text" name="nomQuest" value="<?= $nomQuest ?? '' ?>" required
                        placeholder="Nom"
                        class="w-full outline-none bg-transparent text-slate-700">
                </div>

                <div class="flex items-center gap-3 border border-slate-200 rounded-xl px-4 py-3 focus-within:border-blue-500 focus-within:ring-2 focus-within:ring-blue-100 transition">
                    <input type="text" name="prenomQuest" value="<?= $prenomQuest ?? '' ?>" required
                        placeholder="Prénom"
                        class="w-full outline-none bg-transparent text-slate-700">
                </div>
            </div>
        </div>

        <!-- Submit -->
        <button type="submit"
            class="w-full bg-blue-600 hover:bg-blue-700 text-white py-4 rounded-xl font-semibold transition transform active:scale-[0.98] shadow-md hover:shadow-lg flex justify-center items-center gap-2">
            Commencer le questionnaire
            <i class="ri-arrow-right-line"></i>
        </button>

        <!-- Admin -->
        <div class="text-center pt-2">
            <a href="index.php?role=admin"
               class="text-xs text-slate-400 hover:text-blue-600 transition font-medium">
                Accès administration
            </a>
        </div>
    </form>
</div>

</body>

</html>