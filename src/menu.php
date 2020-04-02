<?php require_once 'connec.php';
     require_once 'Model/eventModel.php';
     require_once 'Model/drinkModel.php';
     $drinks= getAllDrinks();

     ?>
<div class="container-menu">
    <div class="firstLigneMenu">
            <?php require_once ('menutableau.php');?>
            <?php foreach($menuContents as $menuContent => $foods):?>
                <div class="menu-test">
                    <h3 class="card-title"><?= $menuContent ?></h3>
                    <ul>
                        <?php foreach($foods as $food): ?>
                            <li class="card-menu"><?= $food ?></li>
                        <?php endforeach;?>
                    </ul>
                </div>
            <?php endforeach; ?>
    </div>
    <div class="secondLigneMenu">
        <div>
            <h3 class="card-title">Boissons</h3>
            <ul>
                <?php foreach($drinks as $drink): ?>
                    <li class="card-menu"><?= $drink['name'] . '  ' . $drink['price'] ?> €</li>
                <?php endforeach;?>
            </ul>
        </div>
    </div>
</div>
