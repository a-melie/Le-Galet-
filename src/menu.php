<div class="container-menu">
    <div class="firstLigneMenu">
            <?php require_once ('menutableau.php');?>
            <?php foreach($menuContents as $menuContent => $foods):?>
                <div class="menu-test">
                    <h3 class="card-title"><?= $menuContent ?></h3>
                    <ul>
                        <?php foreach($foods as $food): ?>
                            <li class="card-menu"><?=$food?></li>
                        <?php endforeach;?>
                    </ul>
                </div>
            <?php endforeach; ?>
    </div>
    <div class="secondLigneMenu">
        <div>
            <?php foreach($menuDrinks as $menuDrink => $drinks): ?>
                <h3 class="card-title"><?= $menuDrink ?></h3>
                <ul>
                    <?php foreach($drinks as $drink): ?>
                        <li class="card-menu"><?= $drink ?></li>
                    <?php endforeach;?>
                </ul>
            <?php endforeach; ?>
        </div>
    </div>
</div>
