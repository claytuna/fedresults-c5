<?php defined('C5_EXECUTE') or die("Access Denied.");?>

  <div class="fed-event-description">
    <a href="/news-events/events" class="fed-event-description__back"><< BACK TO NEWS &amp; EVENTS</a>
    <div class="row">

      <div class="col-xs-12 col-sm-6">
      <div class="fed-event-description__img">
        <?php
        $iconObj = File::getByID($fImg);
        ?>
        <?php if(is_object($iconObj)) {
            $tag = Core::make('html/image', array($iconObj, false))->getTag();
            if($altText) {
              $tag->alt($altText . '- Event');
            }else{
              $tag->alt("Event Image");
            }
            print $tag; ?>
        <?php } ?>
      </div>
      </div>

      <div class="col-xs-12 col-sm-6">
      <div class="fed-event-description__text">
        <?php
        if ($eventDate){
            print '<div class="item date"><i></i><p>'. $eventDate .'</p></div>';
        }?>
        <?php
        if ($eventTime){
            print '<div class="item time"><i></i><p>'. $eventTime .'</p></div>';
        }?>
        <div class="item">
        <?php
        if ($eventLocation){
            print '<div class="location"><i></i><p><span>'. $eventLocation .'</span><br/><span>'. $eventStreet .'</span><br/><span>'. $eventLocale .'</span></p></div>';
        }?>
        <?php
        if($mapLink){
          print '<a class="map-link" target="_blank" href="'. $mapLink .'">[MAP]</a>';
        }?>
        </div>
        <?php
        if ($linkURL){
            $btxt = $btnText ? $btnText : 'Register now';
            print '<a class="btn btn--primary" href="' . $linkURL . '">'. $btxt .' >></a>';
        }?>
      </div>
      </div>

  </div>
</div>
