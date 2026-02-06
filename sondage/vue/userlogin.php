<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if(isset($error)): ?>
      <div class="error">
        <?= $error ?>
      </div>
    <?php endif; ?>
    <form action="" method="post">
        <label for="enquêrteur">Nom d'enquêteur</label><br>
        <input type="text" name="nomEnqt" id="nomEqT" value="<?= isset($nameEnq)?$nameEnq:'' ?>" required><br>
        <label for="enquete">Informations sur le questionné.</label><br>
        <input type="text" name="nomQuest" id="nomQuested" placeholder="Nom du questionné" value="<?= isset($nomQuest)?$nomQuest:'' ?>" required><br>
        <input type="text" name="prenomQuest" id="prenomQuested" placeholder="Prenom du questionné" value="<?= isset($prenomQuest)?$prenomQuest:'' ?>" required><br>   
        <input type="submit" value="Envoyez">     
    </form>
</body>
</html>