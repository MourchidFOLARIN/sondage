<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Collecte De Données</title>
    <link rel="stylesheet" href="../css/sortie.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />
    <style>
        .feuille{
  box-shadow: 0 0 8px rgba(0, 0, 0, 0.18);
        }
    </style>
</head>
<body>

    <?php if(isset($error)): ?>
        <div class="error"><?= $error ?></div>
    <?php endif; ?>
 <div>
    
 </div>
 <div>
            <?php
var_dump($_SESSION);
?>

</div>



<!-- La classe span je veux l'itiliser dans le js pour que quand un radio est sélectionné qu'il reste en bordure -->
    <form action="model.php" method="POST" class="h-9/10 flex flex-col justify-center items-center p-4">

        <!--  Le formulaire 1-->
        <div class="container hidden feuille rounded-xs px-1 py-1 flex flex-col gap-2 items-center justify-center">
            <!--  Le formulaire 1 -->

            <h2 class="font-medium my-3 text-2xl flex gap-1 mr-auto pl-1"> <span>Section 1: Profil du Répondant</span></h2>
            
            <!-- Age -->
            <label class="font-medium text-xl mr-auto pl-1">1. Tranche d'Age</label>
            <div class="w-full  mb-2 flex flex-wrap gap-2 px-1 justify-center items-center">
                <span class="span w-[52%] text-lg p-1 rounded-lg border-blue-500/90 hidden:border-2 active:border-l-5 hover:border-l-5 hover:translate-x-1 duration-300 flex items-center gap-1">
                    <input type="radio" name="age" value="Moins de 25 ans" <?= (isset($_POST['age']) && $_POST['age'] == "M25") ? "checked" : ""?>  class="age appearance-none w-[9%] h-4 border-2 border-slate-400 rounded-sm checked:bg-blue-500/90 checked:border-none transition-all cursor-pointer"><label>Moins de 25ans</label>
                </span>
                <span  class="span w-[45%] text-lg p-1 rounded-lg border-blue-500/90 hidden:border-2 active:border-l-5 hover:border-l-5 hover:translate-x-1 duration-300 flex items-center gap-1">
                    <input type="radio" name="age" value="25-34 ans" <?= (isset($_POST['age']) && $_POST['age'] == "25-34") ? "checked" : "" ?> class="age appearance-none w-[11%] h-4 border-2 border-slate-400 rounded-sm checked:bg-blue-500/90 checked:border-none transition-all cursir-pointer"><label>25-34ans</label>
                </span>
                <span  class="span w-[52%] text-lg p-1 rounded-lg border-blue-500/90 hidden:border-2 active:border-l-5 hover:border-l-5 hover:translate-x-1 duration-300 flex items-center gap-1">
                    <input type="radio" name="age" value="35-44 ans" <?= (isset($_POST['age']) && $_POST['age'] == "35-44") ? "checked" : "" ?> class="age appearance-none w-[9%] h-4 border-2 border-slate-400 rounded-sm checked:bg-blue-500/90 checked:border-none transition-all cursir-pointer"><label>35-44ans</label>
                </span>
                <span class="span w-[45%] text-lg p-1 rounded-lg border-blue-500/90 hidden:border-2 active:border-l-5 hover:border-l-5 hover:translate-x-1 duration-300 flex items-center gap-1">  
                    <input type="radio" name="age" value="45-54 ans" <?= (isset($_POST['age']) && $_POST['age'] == "45-54") ? "checked" : "" ?> class="age appearance-none w-[11%] h-4 border-2 border-slate-400 rounded-sm checked:bg-blue-500/90 checked:border-none transition-all cursir-pointer"><label>45-54ans</label>
                </span>
                <span  class="span w-[52%] text-lg p-1 rounded-lg border-blue-500/90 hidden:border-2 active:border-l-5 hover:border-l-5 hover:translate-x-1 duration-300 flex items-center gap-1">
                    <input type="radio" name="age" value="55 ans et plus" <?= (isset($_POST['age']) && $_POST['age'] == "55+") ? "checked" : "" ?> class="age appearance-none w-[9%] h-4 border-2 border-slate-400 rounded-sm checked:bg-blue-500/90 checked:border-none transition-all cursir-pointer"><label>55ans ou plus</label>
                </span>
            </div>
            
            <!-- Sexe -->
            <label class="font-medium text-xl mr-auto pl-1">2. Sexe</label>
            <div class="w-full  mb-2 flex flex-wrap gap-1 px-1 justify-center items-center">
                <span class="span w-[31%] text-sm p-1 rounded-lg border-blue-500/90 hidden:border-2 active:border-l-5 hover:border-l-5 hover:translate-x-1 duration-300 flex items-center gap-1">
                    <input type="radio" name="sexe" value="Homme" <?= (isset($_POST['sexe']) && $_POST['sexe'] == "H") ? "checked" : "" ?> class="sexe appearance-none w-[15%] h-4 border-2 rounded-sm border-slate-400 checked:border-none checked:bg-blue-500/90"><label>Féminin</label>
                </span>
                <span class="span w-[31%] text-sm p-1 rounded-lg border-blue-500/90 hidden:border-2 active:border-l-5 hover:border-l-5 hover:translate-x-1 duration-300 flex items-center gap-1">
                    <input type="radio" name="sexe" value="Femme" <?= (isset($_POST['sexe']) && $_POST['sexe'] == "F") ? "checked" : "" ?> class="sexe appearance-none w-[15%] h-4 border-2 rounded-sm border-slate-400 checked:border-none checked:bg-blue-500/90"><label>Masculin</label>
                </span>
                <span class="span w-[31%] text-sm p-1 rounded-lg border-blue-500/90 hidden:border-2 active:border-l-5 hover:border-l-5 hover:translate-x-1 duration-300 flex items-center gap-1">                
                    <input type="radio" name="sexe" value="Préfère ne pas répondre" <?= (isset($_POST['sexe']) && $_POST['sexe'] == "P") ? "checked" : "" ?> class="sexe appearance-none w-[15%] h-4 border-2 rounded-sm border-slate-400 checked:border-none checked:bg-blue-500/90"><label>Personnel</label>
                </span>
            </div>
            
            <!-- Le secteur -->
            <label class="font-medium  mb-2 text-xl mr-auto pl-1">3. Secteur d'activité</label>
            <div class="w-full mb-2 flex flex-wrap gap-3 px-1 justify-center items-center">
                <span class="span w-[47%] text-sm p-1 rounded-lg border-blue-500/90 hidden:border-2 active:border-l-5 hover:border-l-5 hover:translate-x-1 duration-300 flex items-center gap-1">
                    <input type="radio" name="secteurActivite" class="secteurActivite appearance-none w-[10%] h-4 border-2 rounded-sm border-slate-400 checked:border-none checked:bg-blue-500/90" value="Informel" <?= (isset($_POST['secteurActivite']) && $_POST['secteurActivite'] == "Informel") ? "checked" : "" ?>><label>Informel</label>
                </span>
                <span class="span w-[47%] text-sm p-1 rounded-lg border-blue-500/90 hidden:border-2 active:border-l-5 hover:border-l-5 hover:translate-x-1 duration-300 flex items-center gap-1">
                    <input type="radio" name="secteurActivite" class="secteurActivite appearance-none w-[10%] h-4 border-2 rounded-sm border-slate-400 checked:border-none checked:bg-blue-500/90" value="Formel" <?= (isset($_POST['secteurActivite']) && $_POST['secteurActivite'] == "Formel") ? "checked" : "" ?>><label>Formel</label>
                </span>
                <span class="span w-[47%] text-sm p-1 rounded-lg border-blue-500/90 hidden:border-2 active:border-l-5 hover:border-l-5 hover:translate-x-1 duration-300 flex items-center gap-1">
                    <input type="radio" name="secteurActivite" class="secteurActivite appearance-none w-[10%] h-4 border-2 rounded-sm border-slate-400 checked:border-none checked:bg-blue-500/90" value="Etudiant" <?= (isset($_POST['secteurActivite']) && $_POST['secteurActivite'] == "Etudiant") ? "checked" : "" ?>><label>Etudiant</label>
                </span>
                <span class="span w-[47%] text-sm p-1 rounded-lg border-blue-500/90 hidden:border-2 active:border-l-5 hover:border-l-5 hover:translate-x-1 duration-300 flex items-center gap-1">
                    <input type="radio" name="secteurActivite" class="secteurActivite appearance-none w-[10%] h-4 border-2 rounded-sm border-slate-400 checked:border-none checked:bg-blue-500/90" value="Autre" <?= (isset($_POST['secteurActivite']) && $_POST['secteurActivite'] == "Autre") ? "checked" : "" ?>><label>Autre</label>
                </span>
            </div>

            <!-- Pays/ville -->
            <label class="font-medium text-xl mr-auto pl-1">4. Pays et Ville</label>
            <span class="w-full min-h-[40px] flex items-center gap-1 text-xl border hover:-translate-y-0.5 duration-300 border-slate-400 rounded-sm p-1">
                <input type="text" name="PayVil" id="PayVil" value="<?= htmlspecialchars($_POST['PayVil'] ?? '') ?>" placeholder="Ex: Pays/Ville" class="outline-0 w-full">
            </span>

            <div class="flex justify-between" px-1>
                
                <button class="rounded-sm px-4 py-2 bg-blue-50 text-black  text-xl">Continuez</button>
            </div>
        </div>
        <!--  Le formulaire 2-->

        <div class="container hidden feuille rounded-xs px-1 py-1 flex flex-col gap-2 items-center justify-center">
            <h2 class="font-medium my-3 text-2xl flex gap-1 mr-auto pl-1"><span>Section 2: Revenus et Epargne actuelle</span></h2>            
            <!--regularite des revenus -->
            <label class="font-medium text-xl mr-auto pl-1">5. Vos revenus sont:</label>
            <div class="w-full mb-2 flex flex-wrap gap-2 px-1 justify-center items-center">

                <span class="span w-[48%] text-lg p-1 rounded-lg border-blue-500/90 hidden:border-2 active:border-l-5 hover:border-l-5 hover:translate-x-1 duration-300 flex items-center gap-1">
                    <input type="radio" name="regularite" value="Reguliers" <?= (isset($_POST['regularite']) && $_POST['regularite'] == "Reguliers") ? "checked" : "" ?>  class="age appearance-none w-[9%] h-4 border-2 border-slate-400 rounded-sm checked:bg-blue-500/90 checked:border-none transition-all cursor-pointer"><label>Réguliers</label>
                </span>

                <span class="span w-[48%] text-lg p-1 rounded-lg border-blue-500/90 hidden:border-2 active:border-l-5 hover:border-l-5 hover:translate-x-1 duration-300 flex items-center gap-1">
                    <input type="radio" name="regularite" value="Irreguliers" <?= (isset($_POST['regularite']) && $_POST['regularite'] == "Irreguliers") ? "checked" : "" ?>  class="age appearance-none w-[9%] h-4 border-2 border-slate-400 rounded-sm checked:bg-blue-500/90 checked:border-none transition-all cursor-pointer"><label>Irréguliers</label>
                </span>

                <span class="span w-[85%] text-lg p-1 rounded-lg border-blue-500/90 hidden:border-2 active:border-l-5 hover:border-l-5 hover:translate-x-1 duration-300 flex items-center gap-1">
                    <input type="radio" name="regularite" value="Variables" <?= (isset($_POST['regularite']) && $_POST['regularite'] == "Variables") ? "checked" : "" ?>  class="age appearance-none w-[6%] h-4 border-2 border-slate-400 rounded-sm checked:bg-blue-500/90 checked:border-none transition-all cursor-pointer"><label>Très variables selon le mois</label>
                </span>                
            </div>
            <!--Epargnez-vous actuellement -->
            <label class="font-medium text-xl mr-auto pl-1">6. Epargnez vous actuellement ?</label>
            <div class="w-full mb-2 flex flex-wrap gap-2 px-1 justify-center items-center">
                <span class="span w-9/10 text-lg p-1 rounded-lg border-blue-500/90 hidden:border-2 active:border-l-5 hover:border-l-5 hover:translate-x-1 duration-300 flex items-center gap-1">
                    <input type="radio" name="epagne" value="Regulierement" <?= (isset($_POST['epagne']) && $_POST['epagne'] == "Regulierement") ? "checked" : "" ?>  class="age appearance-none w-[6%] max-w-4 h-4 border-2 border-slate-400 rounded-sm checked:bg-blue-500/90 checked:border-none transition-all cursor-pointer"><label>Oui,régulièrement</label>
                </span>
                <span class="span w-9/10 text-lg p-1 rounded-lg border-blue-500/90 hidden:border-2 active:border-l-5 hover:border-l-5 hover:translate-x-1 duration-300 flex items-center gap-1">
                    <input type="radio" value="Temps_en_temps" <?= (isset($_POST['epagne']) && $_POST['epagne'] == "Temps_en_temps") ? "checked" : "" ?>  class="age appearance-none w-[6%] max-w-4 h-4 border-2 border-slate-400 rounded-sm checked:bg-blue-500/90 checked:border-none transition-all cursor-pointer"><label>Oui,de temps en temps</label>
                </span>
                <span class="span w-9/10 text-lg p-1 rounded-lg border-blue-500/90 hidden:border-2 active:border-l-5 hover:border-l-5 hover:translate-x-1 duration-300 flex items-center gap-1">
                    <input type="radio" name="epagne" value="Non" <?= (isset($_POST['epagne']) && $_POST['epagne'] == "Non") ? "checked" : "" ?>  class="age appearance-none w-[6%] max-w-4 h-4 border-2 border-slate-400 rounded-sm checked:bg-blue-500/90 checked:border-none transition-all cursor-pointer"><label>Non</label>
                </span>                                                
            </div>            
            <!--Moyens d'epagne -->
            <label class="font-medium text-xl mr-auto pl-1">7. Si oui,comment epagnez vous ?</label>
            <div class="w-full mb-2 flex flex-wrap gap-2 px-1">
                <span class="span w-[48%]  text-lg px-1 rounded-lg border-blue-500/90 hidden:border-2 active:border-l-5 hover:border-l-5 hover:translate-x-1 duration-300 flex items-center gap-1">
                    <input type="checkbox" name="moyen_epargne[]" value="Tontine" <?php //echo in_array('Tontine', $moyens) ? "checked" : "" ?>  class="age appearance-none w-[9%] max-w-4 h-4 border-2 border-slate-400 rounded-sm checked:bg-blue-500/90 checked:border-none transition-all cursor-pointer"><label>Tontine</label>
                </span>
                <span class="span w-[48%]  text-lg px-1 rounded-lg border-blue-500/90 hidden:border-2 active:border-l-5 hover:border-l-5 hover:translate-x-1 duration-300 flex items-center gap-1">
                    <input type="checkbox" name="moyen_epargne[]" value="Mobile_Money" <?php //echo in_array('Mobile_Money', $moyens) ? "checked" : "" ?>  class="age appearance-none w-[9%] max-w-4 h-4 border-2 border-slate-400 rounded-sm checked:bg-blue-500/90 checked:border-none transition-all cursor-pointer"><label>Mobile Money</label>
                </span>
                <span class="span w-[48%] text-lg px-1 rounded-lg border-blue-500/90 hidden:border-2 active:border-l-5 hover:border-l-5 hover:translate-x-1 duration-300 flex items-center gap-1">
                    <input type="checkbox" name="moyen_epargne[]" value="Bancaire" <?php //echo  in_array('Bancaire', $moyens) ? "checked" : "" ?>  class="age appearance-none w-[9%] max-w-4 h-4 border-2 border-slate-400 rounded-sm checked:bg-blue-500/90 checked:border-none transition-all cursor-pointer"><label>Compte bancaire</label>
                </span>

                <span class="span w-[48%]  text-lg px-1 rounded-lg border-blue-500/90 hidden:border-2 active:border-l-5 hover:border-l-5 hover:translate-x-1 duration-300 flex items-center gap-1">
                    <input type="checkbox" name="moyen_epargne[]" value="Bancaire" <?php //echo in_array('Bancaire', $moyens) ? "checked" : "" ?>  class="age appearance-none w-[9%] max-w-4 h-4 border-2 border-slate-400 rounded-sm checked:bg-blue-500/90 checked:border-none transition-all cursor-pointer"><label>Assurance</label>
                </span>
                <span class="span w-[48%]  text-lg px-1 rounded-lg border-blue-500/90 hidden:border-2 active:border-l-5 hover:border-l-5 hover:translate-x-1 duration-300 flex items-center gap-1">
                    <input type="checkbox" name="moyen_epargne[]" value="Assurance" <?php //echo in_array('Assurance', $moyens) ? "checked" : "" ?>  class="age appearance-none w-[9%] max-w-4 h-4 border-2 border-slate-400 rounded-sm checked:bg-blue-500/90 checked:border-none transition-all cursor-pointer"><label>A la maison</label>
                </span>
                <span class="span w-[48%]  text-lg px-1 rounded-lg border-blue-500/90 hidden:border-2 active:border-l-5 hover:border-l-5 hover:translate-x-1 duration-300 flex items-center gap-1">
                    <input type="checkbox" name="moyen_epargne[]" value="Maison" <?php //echo in_array('Maison', $moyens) ? "checked" : "" ?> class="age appearance-none w-[9%] max-w-4 h-4 border-2 border-slate-400 rounded-sm checked:bg-blue-500/90 checked:border-none transition-all cursor-pointer"><label>Autre</label>
                </span>                
            </div>
            <!-- Moyenne d'epagne par mois-->

            <label class="font-medium text-xl mr-auto pl-1">8. En moyenne ,combien epagnez vous par mois ?</label>
            <div class="w-full  mb-2 flex flex-wrap gap-2 px-1 justify-center items-center">
                <span class="span w-9/10 text-lg px-1 rounded-lg border-blue-500/90 hidden:border-2 active:border-l-5 hover:border-l-5 hover:translate-x-1 duration-300 flex items-center gap-1">
                    <input type="radio"  name="epagneParMois" value="Moins de 5 000 FCFA" <?= (isset($_POST['epagneParMois']) && $_POST['epagneParMois'] == "M5k") ? "checked" : "" ?>  class="age appearance-none w-[6%] h-4 border-2 border-slate-400 rounded-sm checked:bg-blue-500/90 checked:border-none transition-all cursor-pointer"><label>Moins de 5000 FCFA</label>
                </span>
                <span  class="span w-9/10 text-lg px-1 rounded-lg border-blue-500/90 hidden:border-2 active:border-l-5 hover:border-l-5 hover:translate-x-1 duration-300 flex items-center gap-1">
                    <input type="radio" name="epagneParMois" value="5 000-10 000 FCFA" <?= (isset($_POST['epagneParMois']) && $_POST['epagneParMois'] == "5k-10k") ? "checked" : "" ?> class="age appearance-none w-[6%] h-4 border-2 border-slate-400 rounded-sm checked:bg-blue-500/90 checked:border-none transition-all cursir-pointer"><label>5000-10000 FCFA</label>
                </span>
                <span  class="span w-9/10 text-lg px-1 rounded-lg border-blue-500/90 hidden:border-2 active:border-l-5 hover:border-l-5 hover:translate-x-1 duration-300 flex items-center gap-1">
                    <input type="radio" name="epagneParMois" value="10 000-25 000 FCFA" <?= (isset($_POST['epagneParMois']) && $_POST['epagneParMois'] == "10k-25k") ? "checked" : "" ?> class="age appearance-none w-[6%] h-4 border-2 border-slate-400 rounded-sm checked:bg-blue-500/90 checked:border-none transition-all cursir-pointer"><label>10000-25000 FCFA</label>
                </span>
                <span class="span w-9/10 text-lg px-1 rounded-lg border-blue-500/90 hidden:border-2 active:border-l-5 hover:border-l-5 hover:translate-x-1 duration-300 flex items-center gap-1">  
                    <input type="radio" name="epagneParMois" value="Plus de 25 000 FCFA" <?= (isset($_POST['epagneParMois']) && $_POST['epagneParMois'] == "P25k") ? "checked" : "" ?> class="age appearance-none w-[6%] h-4 border-2 border-slate-400 rounded-sm checked:bg-blue-500/90 checked:border-none transition-all cursir-pointer"><label>Plus de 25000 FCFA</label>
                </span>
                <span  class="span w-9/10 text-lg px-1 rounded-lg border-blue-500/90 hidden:border-2 active:border-l-5 hover:border-l-5 hover:translate-x-1 duration-300 flex items-center gap-1">
                    <input type="radio" name="epagneParMois" value="Cela dépend des mois" <?= (isset($_POST['epagneParMois']) && $_POST['epagneParMois'] == "Variable") ? "checked" : "" ?> class="age appearance-none w-[6%] h-4 border-2 border-slate-400 rounded-sm checked:bg-blue-500/90 checked:border-none transition-all cursir-pointer"><label>Cela dépend des mois</label>
                </span>
            </div>
        </div>
        <!--  Le formulaire 3 -->
        <div class="container  feuille hidden rounded-xs px-1 py-1 flex flex-col gap-2 items-center justify-center">
            <h2 class="font-medium my-3 text-2xl flex gap-1 mr-auto pl-1"> <span>Section 3: Retraite & avenir financier</span></h2>
            <!--   Avenir financière -->
            <label class="font-medium text-xl mr-auto pl-1">9. Avez-vous déjà pensé à votre retraite ou à votre avenir financier ? </label>            
            <div class="w-full mb-2 flex flex-wrap gap-1 px-1 justify-center items-center">
                <span class="span w-9/10 text-lg rounded-lg border-blue-500/90 hidden:border-2 active:border-l-5 hover:border-l-5 hover:translate-x-1 duration-300 flex items-center gap-1">
                    <input type="radio" name="AvenirFinancier" value="Serieusement" <?= (isset($_POST['AvenirFinancier']) && $_POST['AvenirFinancier'] == "Serieusement") ? "checked" : "" ?> class="sexe appearance-none w-[6%] h-4 border-2 rounded-sm border-slate-400 checked:border-none checked:bg-blue-500/90"><label>Oui, sérieusement</label>
                </span>
                <span class="span w-9/10 text-lg rounded-lg border-blue-500/90 hidden:border-2 active:border-l-5 hover:border-l-5 hover:translate-x-1 duration-300 flex items-center gap-1">
                    <input type="radio" name="AvenirFinancier" value="Un peu" <?= (isset($_POST['AvenirFinancier']) && $_POST['AvenirFinancier'] == "Un peu") ? "checked" : "" ?> class="sexe appearance-none w-[6%] h-4 border-2 rounded-sm border-slate-400 checked:border-none checked:bg-blue-500/90"><label>Un peu</label>
                </span>
                <span class="span w-9/10 text-lg rounded-lg border-blue-500/90 hidden:border-2 active:border-l-5 hover:border-l-5 hover:translate-x-1 duration-300 flex items-center gap-1">                
                    <input type="radio"  name="AvenirFinancier" value="Jamais" <?= (isset($_POST['AvenirFinancier']) && $_POST['AvenirFinancier'] == "Jamais") ? "checked" : "" ?> class="sexe appearance-none w-[6%] h-4 border-2 rounded-sm border-slate-400 checked:border-none checked:bg-blue-500/90"><label>Jamais</label>
                </span>
            </div>

            <!--   Vivre a la rétraire-->
            <label class="font-medium text-xl mr-auto pl-1"> 10. Comment pensez-vous vivre à la retraite ? </label>
            <div class="w-full mb-2 flex flex-wrap gap-3 px-1 justify-center items-center">
                <span class="span w-9/10 text-sm p-1 rounded-lg border-blue-500/90 hidden:border-2 active:border-l-5 hover:border-l-5 hover:translate-x-1 duration-300 flex items-center gap-1">
                    <input type="radio" name="vivreRetraire" value="Enfants" <?= (isset($_POST['vivreRetraire']) && $_POST['vivreRetraire'] == "Enfants") ? "checked" : "" ?> class="secteurActivite appearance-none w-[6%] h-4 border-2 rounded-sm border-slate-400 checked:border-none checked:bg-blue-500/90"><label>Aide des enfants</label>
                </span>
                <span class="span w-9/10 text-sm p-1 rounded-lg border-blue-500/90 hidden:border-2 active:border-l-5 hover:border-l-5 hover:translate-x-1 duration-300 flex items-center gap-1">
                    <input type="radio" class="secteurActivite appearance-none w-[6%] h-4 border-2 rounded-sm border-slate-400 checked:border-none checked:bg-blue-500/90" name="vivreRetraire" value="Epargne" <?= (isset($_POST['vivreRetraire']) && $_POST['vivreRetraire'] == "Epargne") ? "checked" : "" ?>><label>Épargne personnelle</label>
                </span>
                <span class="span w-9/10 text-sm p-1 rounded-lg border-blue-500/90 hidden:border-2 active:border-l-5 hover:border-l-5 hover:translate-x-1 duration-300 flex items-center gap-1">
                    <input type="radio"  class="secteurActivite appearance-none w-[6%] h-4 border-2 rounded-sm border-slate-400 checked:border-none checked:bg-blue-500/90" name="vivreRetraire" value="Activite" <?= (isset($_POST['vivreRetraire']) && $_POST['vivreRetraire'] == "Activite") ? "checked" : "" ?>><label>Activité même à un âge avancé</label>
                </span>
                <span class="span w-9/10 text-sm p-1 rounded-lg border-blue-500/90 hidden:border-2 active:border-l-5 hover:border-l-5 hover:translate-x-1 duration-300 flex items-center gap-1">
                    <input type="radio"  class="secteurActivite appearance-none w-[6%] h-4 border-2 rounded-sm border-slate-400 checked:border-none checked:bg-blue-500/90" name="vivreRetraire" value="Je ne sais pas" <?= (isset($_POST['vivreRetraire']) && $_POST['vivreRetraire'] == "Ne_sais_pas") ? "checked" : "" ?>><label>Je ne sais pas</label>
                </span>
            </div>
            <!--   Vivre de l'epargne-->
            <label class="font-medium text-xl mr-auto pl-1">11. Pensez-vous que l'épargne seule suffit pour bien préparer l'avenir ?</label>
            <div class="w-full mb-2 flex flex-wrap gap-1 px-1 justify-center items-center">
                <span class= "span w-[31%] text-sm p-1 rounded-lg border-blue-500/90 hidden:border-2 active:border-l-5 hover:border-l-5 hover:translate-x-1 duration-300 flex items-center gap-1">
                    <input type="radio" class="secteurActivite appearance-none w-4 h-4 border-2 rounded-sm border-slate-400 checked:border-none checked:bg-blue-500/90" name="AvenirEpagne" value="Oui" <?= (isset($_POST['AvenirEpagne']) && $_POST['AvenirEpagne'] == "Oui") ? "checked" : "" ?>> <label>Oui</label>
                </span>
               
                
                <span class= "span w-[31%] text-sm p-1 rounded-lg border-blue-500/90 hidden:border-2 active:border-l-5 hover:border-l-5 hover:translate-x-1 duration-300 flex items-center gap-1">
                    <input type="radio" class="secteurActivite appearance-none w-4 h-4 border-2 rounded-sm border-slate-400 checked:border-none checked:bg-blue-500/90" name="AvenirEpagne" value="Non" <?= (isset($_POST['AvenirEpagne']) && $_POST['AvenirEpagne'] == "Non") ? "checked" : "" ?>> <label>Non</label>
                </span> 
                
                <span class= "span w-[31%] text-sm p-1 rounded-lg border-blue-500/90 hidden:border-2 active:border-l-5 hover:border-l-5 hover:translate-x-1 duration-300 flex items-center gap-1">
                    <input type="radio" class="secteurActivite appearance-none w-4 h-4 border-2 rounded-sm border-slate-400 checked:border-none checked:bg-blue-500/90" name="AvenirEpagne" value="Je ne sais pas" <?= (isset($_POST['AvenirEpagne']) && $_POST['AvenirEpagne'] == "NS") ? "checked" : "" ?>> <label>Je ne sais pas</label>
                </span>                
            </div>      
        </div>
        <!--  Le formulaire 4 -->
        <div class="container feuille hidden rounded-xs px-1 py-1 flex flex-col gap-2 items-center justify-center">

            <h2 class="font-medium my-3 text-2xl flex gap-1 mr-auto pl-1">Section 4: Prise de connaissance avec les investissements</h2>
            <!-- Investissements -->
            <label class="font-medium text-xl mr-auto pl-1">12. Avez-vous déjà entendu parler d’investissements financiers ? </label>
            
            <div class="flex w-full items-center px-4 justify-between">
                <span class="span w-[30%] text-lg p-1 rounded-lg border-blue-500/90 hidden:border-2 active:border-l-5 hover:border-l-5 hover:translate-x-1 duration-300 flex items-center gap-1">
                    <input type="radio" name="KnownInvest" value="oui" <?= (isset($_POST['KnownInvest']) && $_POST['KnownInvest'] == "oui") ? "checked" : "" ?> class="sexe appearance-none w-4 h-4 border-2 rounded-sm border-slate-400 checked:border-none checked:bg-blue-500/90"> <label>Oui</label>
                </span>
                <span class="span w-[30%] text-lg p-1 rounded-lg border-blue-500/90 hidden:border-2 active:border-l-5 hover:border-l-5 hover:translate-x-1 duration-300 flex items-center gap-1">
                    <input type="radio" name="KnownInvest" value="non" <?= (isset($_POST['KnownInvest']) && $_POST['KnownInvest'] == "non") ? "checked" : "" ?> class="sexe appearance-none w-4 h-4 border-2 rounded-sm border-slate-400 checked:border-none checked:bg-blue-500/90"> <label>Non</label>
                </span>
            </div>

            <!-- EFT -->
            <label class="font-medium text-xl mr-auto pl-1">13. Connaissez-vous des ETF ou fonds d’investissement? </label>
            <div class="flex w-full items-center px-4 justify-between">
                <span class="span w-[30%] text-lg p-1 rounded-lg border-blue-500/90 hidden:border-2 active:border-l-5 hover:border-l-5 hover:translate-x-1 duration-300 flex items-center gap-1">
                    <input type="radio" name="eft" value="oui" <?= (isset($_POST['eft']) && $_POST['eft'] == "oui") ? "checked" : "" ?> class="sexe appearance-none w-4 h-4 border-2 rounded-sm border-slate-400 checked:border-none checked:bg-blue-500/90"> <label>Oui</label>
                </span>
                <span class="span w-[30%] text-lg p-1 rounded-lg border-blue-500/90 hidden:border-2 active:border-l-5 hover:border-l-5 hover:translate-x-1 duration-300 flex items-center gap-1">
                    <input type="radio" name="eft" value="non" <?= (isset($_POST['eft']) && $_POST['eft'] == "non") ? "checked" : "" ?> class="sexe appearance-none w-4 h-4 border-2 rounded-sm border-slate-400 checked:border-none checked:bg-blue-500/90"> <label>Non</label>
                </span>
            </div>
            <!-- interrest -->
            <label class="font-medium text-xl mr-auto pl-1">14. Seriez-vous intéressé(e) par un investissement simple, sécurisé et expliqué pas à pas ? </label><br>
            
            <div class="w-full  mb-2 flex flex-wrap gap-1 px-1 justify-center items-center">
                <span class="span w-[31%] text-sm p-1 rounded-lg border-blue-500/90 hidden:border-2 active:border-l-5 hover:border-l-5 hover:translate-x-1 duration-300 flex items-center gap-1">
                    <input type="radio" name="interet" value="oui" <?= (isset($_POST['interet']) && $_POST['interet'] == "oui") ? "checked" : "" ?> class="sexe appearance-none w-[15%] h-4 border-2 rounded-sm border-slate-400 checked:border-none checked:bg-blue-500/90"><label>Oui</label>
                </span>
                <span class="span w-[31%] text-sm p-1 rounded-lg border-blue-500/90 hidden:border-2 active:border-l-5 hover:border-l-5 hover:translate-x-1 duration-300 flex items-center gap-1">
                    <input type="radio" name="interet" value="peut-etre" <?= (isset($_POST['interet']) && $_POST['interet'] == "peut-etre") ? "checked" : "" ?> class="sexe appearance-none w-[15%] h-4 border-2 rounded-sm border-slate-400 checked:border-none checked:bg-blue-500/90"><label>Peut-être</label>
                </span>
                <span class="span w-[31%] text-sm p-1 rounded-lg border-blue-500/90 hidden:border-2 active:border-l-5 hover:border-l-5 hover:translate-x-1 duration-300 flex items-center gap-1">                
                    <input type="radio" name="interet" value="non" <?= (isset($_POST['interet']) && $_POST['interet'] == "non") ? "checked" : "" ?> class="sexe appearance-none w-[15%] h-4 border-2 rounded-sm border-slate-400 checked:border-none checked:bg-blue-500/90"><label>Non</label>
                </span>
            </div>
            <!--Type d'explication -->
          <!-- <h2>Connaissance des investissements</h2>
            Investissements financiers
            <label>Avez vous deja entendu parler d'investissements financiers</label>
            <input type="radio" name="invfin" class="invfin" value="Oui"><label>Oui</label><br>
            <input type="radio" name="invfin" class="invfin" value="Non"><label>Non</label><br>
            ETF
            <label>Connaissez-vous les ETF(fonds d'investissements)</label>
            <input type="radio" name="ETF" class="ETF" value="Oui"><label>Oui</label><br>
            <input type="radio" name="ETF" class="ETF" value="Non"><label>Non</label><br>
            Investissements simples?
            <label>Seriez vous interressé(e) par un investisement simple ,sécurisé et expliqué pas à pas </label>
            <input type="radio" name="invsimple" class="invsimple" value="Oui"><label>Oui</label><br>
            <input type="radio" name="invsimple" class="invsimple" value="Peutetre"><label>Peut etre</label><br>
            <input type="radio" name="invsimple" class="invsimple" value="Non"><label>Non</label><br>             -->
        </div>
        <!--  Le formulaire 5 -->
        <div class="container feuille rounded-xs px-1 py-1 flex flex-col gap-2 items-center justify-center">
            <h2 class="font-medium my-3 text-2xl flex gap-1 mr-auto pl-1"> Section 5: RetireAfrika(validation du concept)</h2>
            <!--validation du concept-->
            <label class="font-medium text-xl mr-auto pl-1">15. Seriez vous pret à investir de petites sommes(ex:1000-5000-10000FCFA ou plus) via Moile Money ?</label>
            <div class="w-full  mb-2 flex flex-wrap gap-1 px-1 justify-center items-center">
                <span class="span w-[31%] text-sm p-1 rounded-lg border-blue-500/90 hidden:border-2 active:border-l-5 hover:border-l-5 hover:translate-x-1 duration-300 flex items-center gap-1">
                    <input type="radio" name="invpsomme" value="oui" <?= (isset($_POST['invpsomme']) && $_POST['invpsomme'] == "oui") ? "checked" : "" ?> class="sexe appearance-none w-[15%] h-4 border-2 rounded-sm border-slate-400 checked:border-none checked:bg-blue-500/90"><label>Oui</label>
                </span>
                <span class="span w-[31%] text-sm p-1 rounded-lg border-blue-500/90 hidden:border-2 active:border-l-5 hover:border-l-5 hover:translate-x-1 duration-300 flex items-center gap-1">
                    <input type="radio" name="invpsomme" value="peut-etre" <?= (isset($_POST['invpsomme']) && $_POST['invpsomme'] == "peut-etre") ? "checked" : "" ?> class="sexe appearance-none w-[15%] h-4 border-2 rounded-sm border-slate-400 checked:border-none checked:bg-blue-500/90"><label>Peut-être</label>                    
                </span>
                <span class="span w-[31%] text-sm p-1 rounded-lg border-blue-500/90 hidden:border-2 active:border-l-5 hover:border-l-5 hover:translate-x-1 duration-300 flex items-center gap-1">                
                    <input type="radio" name="invpsomme" value="non" <?= (isset($_POST['invpsomme']) && $_POST['invpsomme'] == "non") ? "checked" : "" ?>  class="sexe appearance-none w-[15%] h-4 border-2 rounded-sm border-slate-400 checked:border-none checked:bg-blue-500/90"><label>Non</label>
                </span>
            </div>
            <!--fréquence-->
            <label class="font-medium text-xl mr-auto pl-1">16. A quelle fréquence pourriez vous investir ?</label>
            <div class="w-full  mb-2 grid grid-cols-2 gap-2 px-1 justify-center items-center">
                <span class="span text-lg p-1 rounded-lg border-blue-500/90 hidden:border-2 active:border-l-5 hover:border-l-5 hover:translate-x-1 duration-300 flex items-center gap-1">
                    <input type="radio" name="fréquence" value=" Chaque semaine" <?= (isset($_POST['fréquence']) && $_POST['fréquence'] == "semaine") ? "checked" : "" ?>  class="age appearance-none w-4 h-4 border-2 border-slate-400 rounded-sm checked:bg-blue-500/90 checked:border-none transition-all cursor-pointer"><label> Chaque semaine</label>
                </span>
                <span class="span text-lg p-1 rounded-lg border-blue-500/90 hidden:border-2 active:border-l-5 hover:border-l-5 hover:translate-x-1 duration-300 flex items-center gap-1">  
                    <input type="radio" name="fréquence" value="Quand j'ai un surplus" <?= (isset($_POST['fréquence']) && $_POST['fréquence'] == "surplus") ? "checked" : "" ?> class="age appearance-none w-4 h-4 border-2 border-slate-400 rounded-sm checked:bg-blue-500/90 checked:border-none transition-all cursir-pointer"><label>Quand j'ai un surplus</label>
                </span>
                <span  class="span text-lg p-1 rounded-lg border-blue-500/90 hidden:border-2 active:border-l-5 hover:border-l-5 hover:translate-x-1 duration-300 flex items-center gap-1">
                    <input type="radio" name="fréquence" value="Chaque mois" <?= (isset($_POST['fréquence']) && $_POST['fréquence'] == "mois") ? "checked" : "" ?> class="age appearance-none w-4 h-4 border-2 border-slate-400 rounded-sm checked:bg-blue-500/90 checked:border-none transition-all cursir-pointer"><label>Chaque mois</label>
                </span>
                <span  class="span text-lg p-1 rounded-lg border-blue-500/90 hidden:border-2 active:border-l-5 hover:border-l-5 hover:translate-x-1 duration-300 flex items-center gap-1">
                    <input type="radio" name="fréquence" value="Rarement" <?= (isset($_POST['fréquence']) && $_POST['fréquence'] == "rarement") ? "checked" : "" ?> class="age appearance-none w-4 h-4 border-2 border-slate-400 rounded-sm checked:bg-blue-500/90 checked:border-none transition-all cursir-pointer"><label>Rarement</label>
                </span>
            </div>

                <!--Rassurer -->
            <label class="font-medium text-xl mr-auto pl-1">17. Qu'es ce qui vous rassurerait le plus?</label>
            <div class="w-9/10  mb-2 flex flex-col gap-2 px-1 justify-center items-center">
                <?php $rassure_vals = $_POST['rassure'] ?? []; ?>
                <span class="span text-lg p-1 rounded-lg border-blue-500/90 hidden:border-2 active:border-l-5 hover:border-l-5 hover:translate-x-1 duration-300 flex items-center gap-1">
                    <input type="checkbox" name="rassure[]" value="Sécurité de l'argent" <?= in_array('Securite', $rassure_vals) ? "checked" : "" ?> class="age appearance-none w-4 h-4 border-2 border-slate-400 rounded-sm checked:bg-blue-500/90 checked:border-none transition-all cursor-pointer"><label>Sécurité de l'argent</label>
                </span>
                <span class="span text-lg p-1 rounded-lg border-blue-500/90 hidden:border-2 active:border-l-5 hover:border-l-5 hover:translate-x-1 duration-300 flex items-center gap-1">
                    <input type="checkbox" name="rassure[]" value="Possibilité de retirer" <?= in_array('Retrait', $rassure_vals) ? "checked" : "" ?> class="age appearance-none w-4 h-4 border-2 border-slate-400 rounded-sm checked:bg-blue-500/90 checked:border-none transition-all cursor-pointer"><label>Possibilité de retirer</label>
                </span> 
                <span class="span text-lg p-1 rounded-lg border-blue-500/90 hidden:border-2 active:border-l-5 hover:border-l-5 hover:translate-x-1 duration-300 flex items-center gap-1">                
                    <input type="checkbox" name="rassure[]" value="Explications simples" <?= in_array('Explications', $rassure_vals) ? "checked" : "" ?> class="age appearance-none w-4 h-4 border-2 border-slate-400 rounded-sm checked:bg-blue-500/90 checked:border-none transition-all cursor-pointer"><label>Explication simples</label>
                </span>     
                <span class="span text-lg p-1 rounded-lg border-blue-500/90 hidden:border-2 active:border-l-5 hover:border-l-5 hover:translate-x-1 duration-300 flex items-center gap-1">                
                    <input type="checkbox" name="rassure[]" value="Suivi clair des gains" <?= in_array('Gains', $rassure_vals) ? "checked" : "" ?>><label>Suivi clair du gain </label>
                </span>    
                <span class="span text-lg p-1 rounded-lg border-blue-500/90 hidden:border-2 active:border-l-5 hover:border-l-5 hover:translate-x-1 duration-300 flex items-center gap-1">                    
                    <input type="checkbox" name="rassure[]" value="Appui d'une banque connue" <?= in_array('Banque', $rassure_vals) ? "checked" : "" ?>><label>Appui d'une banque connue</label>
                </span>                                                      
            </div>
            <!--Rassurer -->

            <!--Type d'explication -->
            <label class="font-medium text-xl mr-auto pl-1">18. Préferiez vous recevoir des explications via :</label>
            <div class="w-9/10  mb-2 grid grid-cols-2 gap-2 px-1 justify-center items-center">
                <span class="span text-lg p-1 rounded-lg border-blue-500/90 hidden:border-2 active:border-l-5 hover:border-l-5 hover:translate-x-1 duration-300 flex items-center gap-1">
                    <input type="radio" name="explication" value="Vidéos simples" <?= (isset($_POST['explication']) && $_POST['explication'] == "video") ? "checked" : "" ?> class="age appearance-none w-4 h-4 border-2 border-slate-400 rounded-sm checked:bg-blue-500/90 checked:border-none transition-all cursor-pointer"> <label>Vidéos simples</label>
                </span>
                <span class="span text-lg p-1 rounded-lg border-blue-500/90 hidden:border-2 active:border-l-5 hover:border-l-5 hover:translate-x-1 duration-300 flex items-center gap-1">
                    <input type="radio" name="explication" value="Messages audio" <?= (isset($_POST['explication']) && $_POST['explication'] == "audio") ? "checked" : "" ?> class="age appearance-none w-4 h-4 border-2 border-slate-400 rounded-sm checked:bg-blue-500/90 checked:border-none transition-all cursor-pointer"> <label>Messages audio</label>
                </span>
                <span class="span text-lg p-1 rounded-lg border-blue-500/90 hidden:border-2 active:border-l-5 hover:border-l-5 hover:translate-x-1 duration-300 flex items-center gap-1">
                    <input type="radio" name="explication" value="SMS" <?= (isset($_POST['explication']) && $_POST['explication'] == "sms") ? "checked" : "" ?>> SMS
                </span>
                <span class="span text-lg p-1 rounded-lg border-blue-500/90 hidden:border-2 active:border-l-5 hover:border-l-5 hover:translate-x-1 duration-300 flex items-center gap-1">
                    <input type="radio" name="explication" value="hConseiller humain" <?= (isset($_POST['explication']) && $_POST['explication'] == "humain") ? "checked" : "" ?> class="age appearance-none w-4 h-4 border-2 border-slate-400 rounded-sm checked:bg-blue-500/90 checked:border-none transition-all cursor-pointer"> <label>Conseiller humain</label>
                </span>
            </div>
        </div>
        <!-- section à part -->
        <div class="container feuille rounded-xs px-1 py-1 flex flex-col gap-2 items-center justify-center"></div>
            <h2>Section 6: Freins et suggestions</h2>
            <label class="font-medium text-xl mr-auto pl-1">19. Qu'est-ce qui pourrait vous empêcher d'utiliser RetireAfrika ? (choix multiples)</label>
            <div class="w-9/10  mb-2 grid grid-cols-2 gap-2 px-1 justify-center items-center">
                <?php $freins = $_POST['freins'] ?? []; ?>
                <span class="span text-lg p-1 rounded-lg border-blue-500/90 hidden:border-2 active:border-l-5 hover:border-l-5 hover:translate-x-1 duration-300 flex items-center gap-1">
                    <input type="checkbox" name="freins[]" value="Manque de confiance" <?= in_array('Confiance', $freins) ? "checked" : "" ?> class="age appearance-none w-4 h-4 border-2 border-slate-400 rounded-sm checked:bg-blue-500/90 checked:border-none transition-all cursor-pointer"> <label >Manque de confiance</label>
                </span>
                <span class="span text-lg p-1 rounded-lg border-blue-500/90 hidden:border-2 active:border-l-5 hover:border-l-5 hover:translate-x-1 duration-300 flex items-center gap-1">
                    <input type="checkbox" name="freins[]" value="Revenus insuffisants" <?= in_array('Revenus', $freins) ? "checked" : "" ?> class="age appearance-none w-4 h-4 border-2 border-slate-400 rounded-sm checked:bg-blue-500/90 checked:border-none transition-all cursor-pointer"> <label>Revenus insuffisants</label>
                </span>
                <span class="span text-lg p-1 rounded-lg border-blue-500/90 hidden:border-2 active:border-l-5 hover:border-l-5 hover:translate-x-1 duration-300 flex items-center gap-1">
                    <input type="checkbox" name="freins[]" value="Manque de connaissances" <?= in_array('Connaissances', $freins) ? "checked" : "" ?> class="age appearance-none w-4 h-4 border-2 border-slate-400 rounded-sm checked:bg-blue-500/90 checked:border-none transition-all cursor-pointer"> <label>Manque de connaissances</label>
                </span>
                <span class="span text-lg p-1 rounded-lg border-blue-500/90 hidden:border-2 active:border-l-5 hover:border-l-5 hover:translate-x-1 duration-300 flex items-center gap-1">
                    <input type="checkbox" name="freins[]" value="Manque de connaissances" <?= in_array('Connaissances', $freins) ? "checked" : "" ?> class="age appearance-none w-4 h-4 border-2 border-slate-400 rounded-sm checked:bg-blue-500/90 checked:border-none transition-all cursor-pointer"> <label>Difficulté avec le téléphone</label>
                </span>                
            </div>            

            <label class="font-medium text-xl mr-auto pl-1">20. Avez-vous une suggestion pour améliorer cette solution ?</label>
            <textarea name="suggestion" id="suggestion" rows="4" placeholder="Votre réponse libre ici..."><?= htmlspecialchars($_POST['suggestion'] ?? '') ?></textarea>
            <input type="submit" value="Envoyez les données">
        </div>
    </form>


    <form action="" method="POST" class="hidden">

        <div class="section">
            <h2>Section 1: Profil du répondant</h2>
            <div>

                <label>1. Age</label>
                <div class="radio-group">
                    <input type="radio" name="age" value="Moins de 25 ans" <?= (isset($_POST['age']) && $_POST['age'] == "M25") ? "checked" : "" ?>> Moins de 25 ans<br>
                    <input type="radio" name="age" value="25-34 ans" <?= (isset($_POST['age']) && $_POST['age'] == "25-34") ? "checked" : "" ?>> 25-34 ans<br>
                    <input type="radio" name="age" value="35-44 ans" <?= (isset($_POST['age']) && $_POST['age'] == "35-44") ? "checked" : "" ?>> 35-44 ans<br>
                    <input type="radio" name="age" value="45-54 ans" <?= (isset($_POST['age']) && $_POST['age'] == "45-54") ? "checked" : "" ?>> 45-54 ans<br>
                    <input type="radio" name="age" value="55 ans et plus" <?= (isset($_POST['age']) && $_POST['age'] == "55+") ? "checked" : "" ?>> 55 ans et plus
                </div>
    
                <label>2. Sexe</label>
                <div class="radio-group">
                    <input type="radio" name="sexe" value="Homme" <?= (isset($_POST['sexe']) && $_POST['sexe'] == "H") ? "checked" : "" ?>> Homme
                    <input type="radio" name="sexe" value="Femme" <?= (isset($_POST['sexe']) && $_POST['sexe'] == "F") ? "checked" : "" ?>> Femme
                    <input type="radio" name="sexe" value="Préfère ne pas répondre" <?= (isset($_POST['sexe']) && $_POST['sexe'] == "P") ? "checked" : "" ?>> Préfère ne pas répondre
                </div>
                <label>3. Secteur d'activité</label>
                <div class="radio-group">
                    <input type="radio" name="secteurActivite" value="Informel" <?= (isset($_POST['secteurActivite']) && $_POST['secteurActivite'] == "Informel") ? "checked" : "" ?>> Secteur informel (commerce, artisanat...)<br>
                    <input type="radio" name="secteurActivite" value="Formel" <?= (isset($_POST['secteurActivite']) && $_POST['secteurActivite'] == "Formel") ? "checked" : "" ?>> Secteur formel (public, privé)<br>
                    <input type="radio" name="secteurActivite" value="Etudiant" <?= (isset($_POST['secteurActivite']) && $_POST['secteurActivite'] == "Etudiant") ? "checked" : "" ?>> Étudiant<br>
                    <input type="radio" name="secteurActivite" value="Autre" <?= (isset($_POST['secteurActivite']) && $_POST['secteurActivite'] == "Autre") ? "checked" : "" ?>> Autre
                </div>
            </div>
            <label for="PayVil">4. Pays / Ville</label>
            <input type="text" name="PayVil" id="PayVil" value="<?= htmlspecialchars($_POST['PayVil'] ?? '') ?>" placeholder="Ex: Cotonou, Bénin">
        </div>

        <div class="section">
            <h2>Section 2: Revenus et épargne actuelle</h2>
            <label>5. Vos revenus sont :</label>
            <div class="radio-group">
                <input type="radio" name="regularite" value="Reguliers" <?= (isset($_POST['regularite']) && $_POST['regularite'] == "Reguliers") ? "checked" : "" ?>> Réguliers<br>
                <input type="radio" name="regularite" value="Irreguliers" <?= (isset($_POST['regularite']) && $_POST['regularite'] == "Irreguliers") ? "checked" : "" ?>> Irréguliers<br>
                <input type="radio" name="regularite" value="Variables" <?= (isset($_POST['regularite']) && $_POST['regularite'] == "Variables") ? "checked" : "" ?>> Très variables selon les mois
            </div>

            <label>6. Épargnez-vous actuellement ?</label>
            <div class="radio-group">
                <input type="radio" name="epagne" value="Regulierement" <?= (isset($_POST['epagne']) && $_POST['epagne'] == "Regulierement") ? "checked" : "" ?>> Oui, régulièrement<br>
                <input type="radio" name="epagne" value="Temps_en_temps" <?= (isset($_POST['epagne']) && $_POST['epagne'] == "Temps_en_temps") ? "checked" : "" ?>> Oui, de temps en temps<br>
                <input type="radio" name="epagne" value="Non" <?= (isset($_POST['epagne']) && $_POST['epagne'] == "Non") ? "checked" : "" ?>> Non
            </div>

            <label>7. Si oui, comment épargnez-vous ? (choix multiples)</label>
            <div class="checkbox-group">
                <?php $moyens = $_POST['moyen_epargne'] ?? []; ?>
                <input type="checkbox" name="moyen_epargne[]" value="Tontine" <?= in_array('Tontine', $moyens) ? "checked" : "" ?>> Tontine
                <input type="checkbox" name="moyen_epargne[]" value="Mobile_Money" <?= in_array('Mobile_Money', $moyens) ? "checked" : "" ?>> Mobile Money
                <input type="checkbox" name="moyen_epargne[]" value="Bancaire" <?= in_array('Bancaire', $moyens) ? "checked" : "" ?>> Compte bancaire
                <input type="checkbox" name="moyen_epargne[]" value="Assurance" <?= in_array('Assurance', $moyens) ? "checked" : "" ?>> Assurance
                <input type="checkbox" name="moyen_epargne[]" value="Maison" <?= in_array('Maison', $moyens) ? "checked" : "" ?>> À la maison
            </div>

            <label>8. En moyenne, combien pourriez-vous épargner par mois ?</label>
            <div class="radio-group">
                <input type="radio" name="epagneParMois" value="Moins de 5 000 FCFA" <?= (isset($_POST['epagneParMois']) && $_POST['epagneParMois'] == "M5k") ? "checked" : "" ?>> Moins de 5 000 FCFA<br>
                <input type="radio" name="epagneParMois" value="5 000-10 000 FCFA" <?= (isset($_POST['epagneParMois']) && $_POST['epagneParMois'] == "5k-10k") ? "checked" : "" ?>> 5 000-10 000 FCFA<br>
                <input type="radio" name="epagneParMois" value="10 000-25 000 FCFA" <?= (isset($_POST['epagneParMois']) && $_POST['epagneParMois'] == "10k-25k") ? "checked" : "" ?>> 10 000-25 000 FCFA<br>
                <input type="radio" name="epagneParMois" value="Plus de 25 000 FCFA" <?= (isset($_POST['epagneParMois']) && $_POST['epagneParMois'] == "P25k") ? "checked" : "" ?>> Plus de 25 000 FCFA<br>
                <input type="radio" name="epagneParMois" value="Cela dépend des mois" <?= (isset($_POST['epagneParMois']) && $_POST['epagneParMois'] == "Variable") ? "checked" : "" ?>> Cela dépend des mois
            </div>
        </div>

        <div class="section">
            <h2>Section 3: Retraite & avenir financier</h2>
            <label>9. Avez-vous déjà pensé à votre retraite ou à votre avenir financier ?</label>
            <div class="radio-group">
                <input type="radio" name="AvenirFinancier" value="Serieusement" <?= (isset($_POST['AvenirFinancier']) && $_POST['AvenirFinancier'] == "Serieusement") ? "checked" : "" ?>> Oui, sérieusement<br>
                <input type="radio" name="AvenirFinancier" value="Un peu" <?= (isset($_POST['AvenirFinancier']) && $_POST['AvenirFinancier'] == "Un peu") ? "checked" : "" ?>> Un peu<br>
                <input type="radio" name="AvenirFinancier" value="Jamais" <?= (isset($_POST['AvenirFinancier']) && $_POST['AvenirFinancier'] == "Jamais") ? "checked" : "" ?>> Jamais
            </div>

            <label>10. Comment pensez-vous vivre à la retraite ?</label>
            <div class="radio-group">
                <input type="radio" name="vivreRetraire" value="Enfants" <?= (isset($_POST['vivreRetraire']) && $_POST['vivreRetraire'] == "Enfants") ? "checked" : "" ?>> Aide des enfants<br>
                <input type="radio" name="vivreRetraire" value="Epargne" <?= (isset($_POST['vivreRetraire']) && $_POST['vivreRetraire'] == "Epargne") ? "checked" : "" ?>> Épargne personnelle<br>
                <input type="radio" name="vivreRetraire" value="Activite" <?= (isset($_POST['vivreRetraire']) && $_POST['vivreRetraire'] == "Activite") ? "checked" : "" ?>> Activité même à un âge avancé<br>
                <input type="radio" name="vivreRetraire" value="Je ne sais pas" <?= (isset($_POST['vivreRetraire']) && $_POST['vivreRetraire'] == "Ne_sais_pas") ? "checked" : "" ?>> Je ne sais pas
            </div>

            <label>11. Pensez-vous que l'épargne seule suffit pour bien préparer l'avenir ?</label>
            <div class="radio-group">
                <input type="radio" name="AvenirEpagne" value="Oui" <?= (isset($_POST['AvenirEpagne']) && $_POST['AvenirEpagne'] == "Oui") ? "checked" : "" ?>> Oui
                <input type="radio" name="AvenirEpagne" value="Non" <?= (isset($_POST['AvenirEpagne']) && $_POST['AvenirEpagne'] == "Non") ? "checked" : "" ?>> Non
                <input type="radio" name="AvenirEpagne" value="Je ne sais pas" <?= (isset($_POST['AvenirEpagne']) && $_POST['AvenirEpagne'] == "NS") ? "checked" : "" ?>> Je ne sais pas
            </div>
        </div>

        <div class="section">
            <h2>Section 4: Connaissance des investissements</h2>
            <label>12. Avez-vous déjà entendu parler d'investissements financiers ?</label>
            <input type="radio" name="KnownInvest" value="oui" <?= (isset($_POST['KnownInvest']) && $_POST['KnownInvest'] == "oui") ? "checked" : "" ?>> Oui
            <input type="radio" name="KnownInvest" value="non" <?= (isset($_POST['KnownInvest']) && $_POST['KnownInvest'] == "non") ? "checked" : "" ?>> Non

            <label>13. Connaissez-vous les ETF (fonds d'investissement) ?</label>
            <input type="radio" name="eft" value="oui" <?= (isset($_POST['eft']) && $_POST['eft'] == "oui") ? "checked" : "" ?>> Oui
            <input type="radio" name="eft" value="non" <?= (isset($_POST['eft']) && $_POST['eft'] == "non") ? "checked" : "" ?>> Non

            <label>14. Seriez-vous intéressé(e) par un investissement simple, sécurisé et expliqué pas à pas ?</label>
            <input type="radio" name="interet" value="oui" <?= (isset($_POST['interet']) && $_POST['interet'] == "oui") ? "checked" : "" ?>> Oui
            <input type="radio" name="interet" value="non" <?= (isset($_POST['interet']) && $_POST['interet'] == "non") ? "checked" : "" ?>> Non
            <input type="radio" name="interet" value="peut-etre" <?= (isset($_POST['interet']) && $_POST['interet'] == "peut-etre") ? "checked" : "" ?>> Peut-être
        </div>

        <div class="section">
            <h2>Section 5: RetireAfrika (validation du concept)</h2>
            <label>15. Seriez-vous prêt(e) à investir de petites sommes via Mobile Money ?</label>
            <input type="radio" name="invpsomme" value="oui" <?= (isset($_POST['invpsomme']) && $_POST['invpsomme'] == "oui") ? "checked" : "" ?>> Oui
            <input type="radio" name="invpsomme" value="non" <?= (isset($_POST['invpsomme']) && $_POST['invpsomme'] == "non") ? "checked" : "" ?>> Non
            <input type="radio" name="invpsomme" value="peut-etre" <?= (isset($_POST['invpsomme']) && $_POST['invpsomme'] == "peut-etre") ? "checked" : "" ?>> Peut-être

            <label>16. À quelle fréquence pourriez-vous investir ?</label>
            <div class="radio-group">
                <input type="radio" name="fréquence" value=" Chaque semaine" <?= (isset($_POST['fréquence']) && $_POST['fréquence'] == "semaine") ? "checked" : "" ?>> Chaque semaine<br>
                <input type="radio" name="fréquence" value="Chaque mois" <?= (isset($_POST['fréquence']) && $_POST['fréquence'] == "mois") ? "checked" : "" ?>> Chaque mois<br>
                <input type="radio" name="fréquence" value="Quand j'ai un surplus" <?= (isset($_POST['fréquence']) && $_POST['fréquence'] == "surplus") ? "checked" : "" ?>> Quand j'ai un surplus<br>
                <input type="radio" name="fréquence" value="Rarement" <?= (isset($_POST['fréquence']) && $_POST['fréquence'] == "rarement") ? "checked" : "" ?>> Rarement
            </div>

            <label>17. Qu'est-ce qui vous rassurerait le plus ? (choix multiples)</label>
            <div class="checkbox-group">
                <?php $rassure_vals = $_POST['rassure'] ?? []; ?>
                <input type="checkbox" name="rassure[]" value="Sécurité de l'argent" <?= in_array('Securite', $rassure_vals) ? "checked" : "" ?>> Sécurité de l'argent
                <input type="checkbox" name="rassure[]" value="Possibilité de retirer" <?= in_array('Retrait', $rassure_vals) ? "checked" : "" ?>> Possibilité de retirer
                <input type="checkbox" name="rassure[]" value="Explications simples" <?= in_array('Explications', $rassure_vals) ? "checked" : "" ?>> Explications simples
                <input type="checkbox" name="rassure[]" value="Suivi clair des gains" <?= in_array('Gains', $rassure_vals) ? "checked" : "" ?>> Suivi clair des gains
                <input type="checkbox" name="rassure[]" value="Appui d'une banque connue" <?= in_array('Banque', $rassure_vals) ? "checked" : "" ?>> Appui d'une banque connue
            </div>

            <label>18. Préférez-vous recevoir des explications via :</label>
            <div class="radio-group">
                <input type="radio" name="explication" value="Vidéos simples" <?= (isset($_POST['explication']) && $_POST['explication'] == "video") ? "checked" : "" ?>> Vidéos simples
                <input type="radio" name="explication" value="Messages audio" <?= (isset($_POST['explication']) && $_POST['explication'] == "audio") ? "checked" : "" ?>> Messages audio
                <input type="radio" name="explication" value="SMS" <?= (isset($_POST['explication']) && $_POST['explication'] == "sms") ? "checked" : "" ?>> SMS
                <input type="radio" name="explication" value="hConseiller humain" <?= (isset($_POST['explication']) && $_POST['explication'] == "humain") ? "checked" : "" ?>> Conseiller humain
            </div>
        </div>

        <div class="section">
            <h2>Section 6: Freins et suggestions</h2>
            <label>19. Qu'est-ce qui pourrait vous empêcher d'utiliser RetireAfrika ? (choix multiples)</label>
            <div class="checkbox-group">
                <?php $freins = $_POST['freins'] ?? []; ?>
                <input type="checkbox" name="freins[]" value="Manque de confiance" <?= in_array('Confiance', $freins) ? "checked" : "" ?>> Manque de confiance
                <input type="checkbox" name="freins[]" value="Revenus insuffisants" <?= in_array('Revenus', $freins) ? "checked" : "" ?>> Revenus insuffisants
                <input type="checkbox" name="freins[]" value="Manque de connaissances" <?= in_array('Connaissances', $freins) ? "checked" : "" ?>> Manque de connaissances
                <input type="checkbox" name="freins[]" value="Difficulté avec le téléphone" <?= in_array('Telephone', $freins) ? "checked" : "" ?>> Difficulté avec le téléphone
            </div>

            <label for="suggestion">20. Avez-vous une suggestion pour améliorer cette solution ?</label>
            <textarea name="suggestion" id="suggestion" rows="4" placeholder="Votre réponse libre ici..."><?= htmlspecialchars($_POST['suggestion'] ?? '') ?></textarea>
        </div>

        <input type="submit" value="Envoyer les données">
    </form>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
        pagination: {
            el: ".swiper-pagination",
            type: "fraction",
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
</body>
</html>