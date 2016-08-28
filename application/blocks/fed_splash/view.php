<?php defined('C5_EXECUTE') or die("Access Denied.");?>

<div class="fed-splash">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
      <?php
      if ($title) {
          print '<h1 class="fed-splash__title">' . $title . '</h1>';
      }
      if ($altText) {
          print '<p class="fed-splash__text">' . $altText . '</p>';
      } ?>
      </div>
    </div>
  </div>
</div>
