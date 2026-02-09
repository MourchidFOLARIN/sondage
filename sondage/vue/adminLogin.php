<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion | Administration</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background: white;
            background-size: 400% 400%;
            animation: gradient 15s ease infinite;
        }
        .glass {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
        }

        .input-group:focus-within {
            border-color: #3b82f6;
            transform: translateY(-2px);
            box-shadow: 0 10px 10px rgba(121, 120, 120, 0.05);
            
        }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center bg-slate-50 p-4">

<?php if(isset($_SESSION['error'])): ?>
<div class="fixed top-6 left-1/2 -translate-x-1/2 z-50">
    <div class="bg-white border border-red-200 text-red-600 px-5 py-3 rounded-xl shadow-md flex items-center gap-3">
        <i class="ri-error-warning-line text-xl"></i>
        <span class="text-sm font-medium">
            <?= $_SESSION['error']; unset($_SESSION['error']); ?>
        </span>
    </div>
</div>
<?php endif; ?>

<div class="w-full max-w-md">
    <form action="index.php?role=admin&action=login-process"
          method="post"
          class="bg-white border border-slate-200 rounded-3xl px-8 md:px-12 py-10 shadow-xl">

        <input type="hidden" name="csrf" value="<?= htmlspecialchars($csrf ?? '') ?>">

        <!-- Icon -->
        <div class="w-14 h-14 bg-blue-600 rounded-2xl mx-auto mb-6 flex items-center justify-center shadow-md">
            <i class="ri-shield-user-line text-white text-2xl"></i>
        </div>

        <!-- Title -->
        <div class="text-center mb-8">
            <h2 class="text-2xl font-bold text-slate-800">
                    Admin
            </h2>
            <p class="text-sm text-slate-500 mt-1">
                Accès sécurisé au système
            </p>
        </div>

        <!-- Inputs -->
        <div class="space-y-5">
            <div class="flex items-center gap-3 border border-slate-200 rounded-xl px-4 py-3 focus-within:border-blue-500 focus-within:ring-2 focus-within:ring-blue-100 transition">
                <i class="ri-user-3-line text-slate-400"></i>
                <input type="text" name="name" required
                       placeholder="Nom d'utilisateur"
                       class="w-full bg-transparent outline-none text-slate-700 placeholder-slate-400">
            </div>

            <div class="flex items-center gap-3 border border-slate-200 rounded-xl px-4 py-3 focus-within:border-blue-500 focus-within:ring-2 focus-within:ring-blue-100 transition">
                <i class="ri-lock-password-line text-slate-400"></i>
                <input type="password" name="password" required
                       placeholder="Mot de passe"
                       class="w-full bg-transparent outline-none text-slate-700 placeholder-slate-400">
            </div>
        </div>

        <!-- Button -->
        <button type="submit"
                class="w-full mt-8 bg-blue-600 hover:bg-blue-700 text-white py-4 rounded-xl font-semibold transition shadow-md hover:shadow-lg active:scale-[0.98] flex items-center justify-center gap-2">
            Se connecter
            <i class="ri-arrow-right-line"></i>
        </button>

        <!-- Footer -->
        <p class="text-center mt-8 text-xs text-slate-400">
            © Africa Retire 2026 · Espace sécurisé
        </p>
    </form>
</div>

</body>

</html>