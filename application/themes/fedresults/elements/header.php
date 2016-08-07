<?php defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header_meta.php');
$as = new GlobalArea('Header Search');
$blocks = $as->getTotalBlocksInArea();
$displayThirdColumn = $blocks > 0 || $c->isEditMode();
?>

<header>
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-xs-6">
                <?php
                $a = new GlobalArea('Header Site Logo');
                $a->display();
                ?>
            </div>
            <div class="<?php if ($displayThirdColumn) { ?>col-sm-5 col-xs-6<?php } else { ?>col-sm-8 col-xs-6<?php } ?>">
                <?php
                $a = new GlobalArea('Header Navigation');
                $a->display();
                ?>
            </div>
            <?php if ($displayThirdColumn) { ?>
                <div class="col-sm-3 col-xs-12"><?php $as->display(); ?></div>
            <?php } ?>
        </div>
    </div>
</header>
