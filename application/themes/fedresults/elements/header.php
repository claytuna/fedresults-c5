<?php defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header_meta.php');
$as = new GlobalArea('Header Search');
$blocks = $as->getTotalBlocksInArea();
$displayThirdColumn = $blocks > 0 || $c->isEditMode();
?>
<div class="header-search" role="search">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-9 col-sm-offset-3">
                <div class="header-search__group">
                    <div class="header-search__text"><p><a href="mailto:sales@fedresults.com">sales@fedresults.com</a> <a href="tel:703-889-8700">703-889-8700</a></p></div>
                    <div class="header-search__nav"><?php $as->display(); ?></div>
                    <div class="header-search__icons">
                      <a href="https://www.facebook.com/fedresults/" class="btn btn--primary btn--social" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                      <a href="https://twitter.com/fedresults" class="btn btn--primary btn--social" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<header class="header-nav" role="banner">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-3">
                <div class="header-nav__logo">
                  <?php
                  $a = new GlobalArea('Header Site Logo');
                  $a->display();
                  ?>
                </div>
            </div>
            <div class="col-xs-12 col-sm-9" role="navigation">
                <?php
                $a = new GlobalArea('Header Navigation');
                $a->display();
                ?>
            </div>
        </div>
    </div>
</header>
