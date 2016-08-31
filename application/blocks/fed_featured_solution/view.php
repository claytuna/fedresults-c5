<?php defined('C5_EXECUTE') or die("Access Denied.");
$c = Page::getCurrentPage();?>

  <div class="fed-featured-solution" style="background-image:url(<?php print $bgPath;?>);">
    <div class="fed-featured-solution__content">
      <div class="fed-featured-solution__icon">
        <?php
        $iconObj = File::getByID($fIcon);
        ?>
        <?php if(is_object($iconObj)) {
            $tag = Core::make('html/image', array($iconObj, false))->getTag();
            if($title) {
              $tag->alt($title . '- Featured Solution Icon');
            }else{
              $tag->alt("Featured Solution Icon");
            }
            print $tag; ?>
        <?php } ?>
      </div>
      <div class="fed-featured-solution__text">
        <?php
        if ($title) {
            print '<p class="fed-featured-solution__title">' . $title . '</p>';
        }

        if ($desc) {
            print '<div class="fed-featured-solution__desc"><p>' . $desc . '</p></div>';
        }

        if ($linkURL){
            print '<a class="fed-featured-solution__read-more" href="' . $linkURL . '">Learn more >></a>';
        }?>
      </div>
    </div>


  </div>
