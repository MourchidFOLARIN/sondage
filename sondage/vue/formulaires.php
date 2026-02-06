<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Collecte De Données</title>
    <link rel="stylesheet" href="../css/sortie.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet">
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

        <div class="container feuille rounded-xs px-1 py-1 flex flex-col gap-2 items-center justify-center">
            <!--  Le formulaire 1 -->

            <h2 class="font-medium my-3 text-2xl flex gap-1 mr-auto pl-1"><i class="ri-user-3-fill"></i> <span>Profil du Répondant</span></h2>
            
            <!-- Age -->
            <label class="font-medium text-xl mr-auto pl-1">Tranche d'Age</label>
            <div class="w-full flex flex-wrap gap-2 px-1 justify-center items-center">
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
            <label class="font-medium text-xl mr-auto pl-1">Sexe</label>
            <div class="w-full flex flex-wrap gap-1 px-1 justify-center items-center">
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
            <label class="font-medium text-xl mr-auto pl-1">Secteur d'activité</label>
            <div class="w-full flex flex-wrap gap-3 px-1 justify-center items-center">
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
            <label class="font-medium text-xl mr-auto pl-1">Pays et Ville</label>
            <span class="w-full min-h-[40px] flex items-center gap-1 text-xl border hover:-translate-y-0.5 duration-300 border-slate-400 rounded-sm p-1">
                <input type="text" name="PayVil" id="PayVil" value="<?= htmlspecialchars($_POST['PayVil'] ?? '') ?>" placeholder="Ex: Pays/Ville" class="outline-0">
            </span>

            <div class="flex justify-between" px-1>
                
                <button class="rounded-sm px-4 py-2 bg-blue-50 text-black  text-xl">Continuez</button>
            </div>

        </div>
        <!--  Le formulaire 2-->

        <div class="hidden container feuille">
            <h2>Revenus et epagne actuelle</h2>
            <!--regularite des revenus -->
            <label>Vos revenus sont:</label>
            <input type="radio" name="regularite" class="regularite" value="Réguliers"><label>Réguliers</label><br>
            <input type="radio" name="regularite" class="regularite" value="Irréguliers"><label>Irréguliers</label><br>
            <input type="radio" name="regularite" class="regularite" value="Variables"><label>Très variables selon le mois</label><br>
            <!--Epargnez-vous actuellement -->
            <label>Epargnez vous actuellement ?</label>
            <input type="radio" name="epagne" class="epagne" value="Régulièrement"><label>Oui,régulièrement</label><br>
            <input type="radio" name="epagne" class="epagne" value="Temps_en_temps"><label>Oui,de temps en temps</label><br>
            <input type="radio" name="epagne" class="epagne" value="Non"><label>Non</label><br>
            <!--Moyens d'epagne -->
            <label>Si oui,comment epagnez vous ?</label>
            <input type="checkbox" name="moyen_epargne[]" class="moyen_epagne" value="Tontine"><label>Tontine</label>
            <input type="checkbox" name="moyen_epargne[]" class="moyen_epagne" value="Mobile_Money"><label>Mobile Money</label>
            <input type="checkbox" name="moyen_epargne[]" class="moyen_epagne" value="Compte_bancaire"><label>Compte bancaire</label>
            <input type="checkbox" name="moyen_epargne[]" class="moyen_epagne" value="Assurance"><label>Assurance</label>
            <input type="checkbox" name="moyen_epargne[]" class="moyen_epagne" value="Maison"><label>A la maison</label>
            <input type="checkbox" name="moyen_epargne[]" class="moyen_epagne" value="Autre"><label>Autre</label>
            <!-- Moyenne d'epagne par mois-->
            <label>En moyenne ,combien epagnez vous par mois ?</label>
            <input type="radio" name="epagneParMois" class="epagneParMois" value="M5k"><label>Moins de 5000 FCFA</label><br>
            <input type="radio" name="epagneParMois" class="epagneParMois" value="5kInf10k"><label>5000-10000 FCFA</label><br>
            <input type="radio" name="epagneParMois" class="epagneParMois" value="10kInf25k"><label>10000-25000 FCFA</label><br>
            <input type="radio" name="epagneParMois" class="epagneParMois" value="P25k"><label>Plus de 25000 FCFA</label><br>
            <input type="radio" name="epagneParMois" class="epagneParMois" value="Variable"><label>Cela dépend des mois</label><br>
        </div>
                <!--  Le formulaire 3 -->
        <div class="hidden container feuille">
            <h2> Retraite & avenir financier</h2>
                        <!--   Avenir financière -->
            <label> <span>09</span> Avez-vous déjà pensé à votre retraite ou à votre avenir financier ? </label>
            <input type="radio" name="AvenirFinancier" class="AvenirFinancier" value="Oui, sérieusement"><label>Oui, sérieusement </label><br>
            <input type="radio" name="AvenirFinancier" class="AvenirFinancier" value="Un peu "><label>Un peu </label><br>
            <input type="radio" name="AvenirFinancier" class="AvenirFinancier" value="Jamais "><label>Jamais </label><br>
            <!--   Vivre a la rétraire-->
            <label> <span>10</span> Comment pensez-vous vivre à la retraite ? </label>
            <input type="radio" name="vivreRetraire" class="vivreRetrairer" value="Aide des enfants"><label>Aide des enfants </label><br>
            <input type="radio" name="vivreRetraire" class="vivreRetrairer" value="Épargne personnelle"><label>Épargne personnelle</label><br>
            <input type="radio" name="vivreRetraire" class="vivreRetrairer" value="Activité même à un âge avancé "><label>Activité même à un âge avancé </label><br>
            <input type="radio" name="vivreRetraire" class="vivreRetrairer" value="Je ne sais pas "><label>Je ne sais pas </label><br>
            <!-- Pensée sur l'eparge -->
            <label> <span>11</span> Pensez-vous que l’épargne seule suffit pour bien préparer l’avenir ? </label>
            <input type="radio" name="AvenirEpagne" class="AvenirEpagne" value="Oui"><label>Aide des enfants </label><br>
            <input type="radio" name="AvenirEpagne" class="AvenirEpagne" value="Non"><label>Aide des enfants </label><br>
            <input type="radio" name="AvenirEpagne" class="AvenirEpagne" value=" Je ne sais pas "><label>Aide des enfants </label><br>                        
        </div>
                <!--  Le formulaire 4 -->
        <div class="container hidden  feuille">

            <h2>Prise de connaissance avec les investissements</h2>
            <!-- Investissements -->
            <label>Avez-vous déjà entendu parler d’investissements financiers ? </label>
            <input type="radio" name="KnownInvest" class="KnownInvest" value="oui"><label>Oui</label><br>
            <!-- EFT -->
            <label>Connaissez-vous des ETF ou fonds d’investissement? </label><br>
            <input type="radio" name="eft" class="etf" value="oui"><label>Oui</label>
            <input type="radio" name="eft" class="eft" value="non"><label>Non</label>
            <!-- interrest -->
            <label>Seriez-vous intéressé(e) par un investissement simple, sécurisé et expliqué pas à pas ? </label><br>
            <input type="radio" name="interet" class="interet" value="oui"><label>Oui</label><br>
            <input type="radio" name="interet" class="interet" value="relatif"><label>Peut-être</label><br>
            <input type="radio" name="interet" class="interet" value="non"><label>Non</label><br>
            <button>Continuez</button>
            <h2>Connaissance des investissements</h2>
            <!--Investissements financiers-->
            <label>Avez vous deja entendu parler d'investissements financiers</label>
            <input type="radio" name="invfin" class="invfin" value="Oui"><label>Oui</label><br>
            <input type="radio" name="invfin" class="invfin" value="Non"><label>Non</label><br>
            <!--ETF-->
            <label>Connaissez-vous les ETF(fonds d'investissements)</label>
            <input type="radio" name="ETF" class="ETF" value="Oui"><label>Oui</label><br>
            <input type="radio" name="ETF" class="ETF" value="Non"><label>Non</label><br>
            <!--Investissements simples?-->
            <label>Seriez vous interressé(e) par un investisement simple ,sécurisé et expliqué pas à pas </label>
            <input type="radio" name="invsimple" class="invsimple" value="Oui"><label>Oui</label><br>
            <input type="radio" name="invsimple" class="invsimple" value="Peutetre"><label>Peut etre</label><br>
            <input type="radio" name="invsimple" class="invsimple" value="Non"><label>Non</label><br>
            <!--Type d'explication -->
        </div>
        <!--  Le formulaire 5 -->
        <div class="hidden container feuille">
            <h2>RetireAfrika(validation du concept)</h2>
            <!--validation du concept-->
            <label>Seriez vous pret à investir de petites sommes(ex:1000-5000-10000FCFA ou plus) via Moile Money ?</label>
            <input type="radio" name="invpsomme" class="invpsomme" value="Oui"><label>Oui</label><br>
            <input type="radio" name="invpsomme" class="invpsomme" value="Non"><label>Non</label><br>
            <input type="radio" name="invpsomme" class="invpsomme" value="Peutetre"><label>Peut etre</label><br>
            <!--fréquence-->
            <label>A quelle fréquence pourriez vous investir ?</label>
            <input type="radio" name="fréquence" class="fréquence" value="semaine"><label>Chaque semaine</label><br>
            <input type="radio" name="fréquence" class="fréquence" value="mois"><label>Chaque mois</label><br>
            <input type="radio" name="fréquence" class="fréquence" value="Surplus"><label>Quand j'ai un surplus</label><br>
            <input type="radio" name="fréquence" class="fréquence" value="Rarement"><label>Rarement</label><br>
            <!--Rassurer -->
            <label>Qu'es ce qui vous rassurerait le plus?</label>
            <input type="checkbox" name="rassure" class="rassure" value="sécurité"><label>Sécurité de l'argent</label>
            <input type="checkbox" name="rassure" class="rassure" value="retraitpossible"><label>Possibilité de retirer</label>
            <input type="checkbox" name="rassure" class="rassure" value="simpleexplication"><label>Explication simples</label>
            <input type="checkbox" name="rassure" class="rassure" value="gainsuivi"><label>Suivi clair du gain </label>
            <input type="checkbox" name="rassure" class="rassure" value="appui"><label>Appui d'une banque connue</label>
            <!--Type d'explication -->
            <label>Préferiez vous recevoir des explications via :</label>
            <input type="radio" name="explication" class="explication" value="video"><label>Vidéos simples</label>
            <input type="radio" name="explication" class="explication" value="audio"><label>Message audio</label>
            <input type="radio" name="explication" class="explication" value="SMS"><label>SMS</label>
            <input type="radio" name="explication" class="explication" value="Humain"><label>Conseiller humain</label>
            <input type="submit" value="Envoyé">
        </div>
    </form>


    <form action="" method="POST">

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
</body>
</html>