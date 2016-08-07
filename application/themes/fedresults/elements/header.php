<?php defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header_meta.php');
$as = new GlobalArea('Header Search');
$blocks = $as->getTotalBlocksInArea();
$displayThirdColumn = $blocks > 0 || $c->isEditMode();
?>
<div class="header-search" role="search">
    <div class="container">
        <div class="row">
          <?php if ($displayThirdColumn) { ?>
              <div class="col-xs-12 col-sm-4 col-sm-offset-8"><?php $as->display(); ?></div>
          <?php } ?>
        </div>
    </div>
</div>
<header class="header-nav" role="banner">
    <div class="container">
        <div class="row">
            <div class="col-xs-4 col-sm-3">
                <?php
                $a = new GlobalArea('Header Site Logo');
                $a->display();
                ?>
            </div>
            <div class="col-xs-8 col-sm-9" role="navigation">
                <?php
                $a = new GlobalArea('Header Navigation');
                $a->display();
                ?>
            </div>
        </div>
    </div>
</header>
