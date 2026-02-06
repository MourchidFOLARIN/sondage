<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Collecte De Données - RetireAfrika</title>
    
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
    <form action="" method="POST">
        
  
        <div class="section">
            <h2>Section 1: Profil du répondant</h2>
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