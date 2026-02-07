<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion | Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/sortie.css">
    <style>
        .feuille{
  box-shadow: 0 0 8px rgba(0, 0, 0, 0.18);
        }
    </style>
</head>
<body>
  <?php if(isset($_SESSION['error'])): ?>
      <div class="error">
        <?= $_SESSION['error'] ; unset($_SESSION['error'] ); ?>
      </div>
    <?php endif; ?>
    <form action="index.php?role=admin&action=login-process" method="post" class="w-9/10 flex h-screen mx-auto items-center">
        <div class = "feuille flex container h-[55%] flex-col w-full mx-auto gap-7 bg-[#EEEEEE]/50 px-4 pt-2 pb-1 justify-center">
            <h2 class="font-medium my-3 text-2xl">Authentification</h2>
            <span class=" min-h-[50px] flex items-center gap-1 text-xl hover:shadow-xl hover:-translate-y-1.5 duration-300 p-1">
                <i class="ri-user-3-fill"></i>
                <input type="text" name="login" placeholder="Login" class="outline-0 w-full" id="">
            </span>            

            <span class="min-h-[50px] flex items-center gap-1 text-xl hover:shadow-xl hover:-translate-y-1.5 duration-300 p-1">
                 <i class="ri-lock-2-fill"></i>
                <input type="text" name="password" id="" placeholder="Mot de Pass" class="outline-0 w-full">
            </span>            
            <button type="submit" class="w-full mt-2 text-white text-center uppercase py-4 hover:bg-amber-500 duration-300 font-bold bg-blue-800 mx-auto text-sm">Se connectez</button>
        </div>
    </form>
</body>
</html>