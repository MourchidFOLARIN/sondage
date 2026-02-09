<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Administration - Sondage</title>
    <link rel="stylesheet" href="css/adminStyle.css">
</head>
<body>

<div class="container">

    <div class="card total-card">
        <h2>Tableau de bord</h2>
        <p>Nombre total d'avis enregistrés :</p>
        <span class="total">
            <?= (!empty($sum[0])) ? $sum[0]['total'] : '0' ?>
        </span>
    </div>

    <div class="card">
        <form method="post">
            <input type="text" name="name" placeholder="Entrer un nom d'enquêteur" required>
            <button type="submit">Rechercher</button>
        </form>
    </div>

    <?php if(isset($_SESSION['ans']) && !empty($_SESSION['ans'])): ?>
        <div class="card">
            <h3>Résultats trouvés</h3>
            <table>
                <thead>
                    <tr>
                        <th>Enquêteur</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Date</th>
                        <th>Détails</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($_SESSION['ans'] as $index => $row): ?>
                        <tr>
                            <td><?= htmlspecialchars($row['nomEnqt']) ?></td>
                            <td><?= htmlspecialchars($row['nomQuested']) ?></td>
                            <td><?= htmlspecialchars($row['prenomQuested']) ?></td>
                            <td><?= htmlspecialchars($row['date_enregistrement']) ?></td>
                            <td>
                                <button class="details-btn" onclick="toggleDetails(<?= $index ?>)">Voir</button>
                            </td>
                        </tr>

                        <tr id="details-<?= $index ?>" class="details-row">
                            <td colspan="5">
                                <div class="details-content">
                                    <?php foreach($row as $key => $value): ?>
                                        <?php if(!in_array($key, ['nomEnqt','nomQuested','prenomQuested','date_enregistrement'])): ?>
                                            <p><strong><?= htmlspecialchars($key) ?> :</strong> <?= htmlspecialchars($value) ?></p>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </div>
                            </td>
                        </tr>

                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <?php unset($_SESSION['ans']); ?>
    <?php endif; ?>

    <?php if(isset($_SESSION['any'])): ?>
        <div class="card error">
            <?= htmlspecialchars($_SESSION['any']) ?>
        </div>
        <?php unset($_SESSION['any']); ?>
    <?php endif; ?>

</div>

<script>
function toggleDetails(id) {
    let row = document.getElementById("details-" + id);
    row.style.display = row.style.display === "table-row" ? "none" : "table-row";
}
</script>

</body>
</html>
