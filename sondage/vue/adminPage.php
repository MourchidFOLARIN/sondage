<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        Nombre d'avis qui a été prise
       :<?= (!empty($sum[0]))?$sum[0]['total']:'0' ?>
    </div>
    
    <form action="" method="post">
        <input type="text" name="name"placeholder="Entrer un nom d'enqueteur"id="name"required>
        <button type="submit">🔍</button>
    </form>
    <?php if(isset($_SESSION['ans'])): ?>
      <div class="error">
        <?= var_dump($_SESSION['ans']) ?>
      </div>
    <?php endif; ?>
      <?php if(isset($_SESSION['any'])): ?>
      <div class="error">
        <?= print_r($_SESSION['any'])  ?>
      </div>
    <?php endif; ?>
</body>

</html>