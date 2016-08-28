<?php defined('C5_EXECUTE') or die("Access Denied.");?>

<div class="fed-learn-more">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <?php
        if ($title) {
            print '<h2 class="fed-learn-more__title">' . $title . '</h2><hr class="fed-checkmark"/>';
        }
        if ($altText) {
            print '<p class="fed-learn-more__text">' . $altText . '</p>';
        }

        if($linkURL) {

          print '<a href="' . $linkURL . '" class="btn btn--primary btn--center">';

          if ($btnText) {
              echo $btnText;
          } else {
            echo t("Learn more");
          }

          print '</a>';

        }
        ?>
      </div>
    </div>
  </div>
</div>
