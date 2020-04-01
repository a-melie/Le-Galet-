<?php
require_once 'connec.php';
require_once 'Model/eventModel.php';

?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php require_once 'connec.php';
require_once 'Model/eventModel.php';
if (isset($_GET['id'])){
    $event = findById($_GET['id']);
}
?>
<form action="Controller/eventController.php" method="post">
    <div>
        <label for="title">Titre</label>
        <input type="text" name="title" id="title" value="<?=isset($event['title'])? $event['title']: '' ?>">
    </div>
    <div>
        <label for="event_date">Date</label>
        <input type="text" name="event_date" id="event_date" value="<?=isset($event['event_date'])? $event['event_date']: '' ?>">
    </div>
    <div>
        <label for="image">Image</label>
        <input type="text" name="image" id="image" value="<?=isset($event['image'])? $event['image']: '' ?>">
    </div>
    <div>
        <label for="description">Description</label>
        <textarea name="description" id="description"><?=isset($event['description'])? $event['description']: '' ?></textarea>
    </div>
    <div>
        <label for="alt">Description Alternative</label>
        <input type="text" name="alt" id="alt" value="<?=isset($event['alt'])? $event['alt']: '' ?>">
    </div>
    <input type="hidden" name="id" value="<?=isset($_GET['id'])? $_GET['id']:''?>">
    <button name="<?= isset($_GET['id']) ? 'update': 'create' ?>"><?= isset($_GET['id']) ? 'Mise à jour': 'Ajouter' ?></button>
    <?= isset($_GET['id'])?'<button name=\'delete\'>Supprimer</button>' : ''?>
</form>
</body>
</html>
