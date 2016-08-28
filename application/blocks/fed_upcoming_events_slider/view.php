<?php defined('C5_EXECUTE') or die("Access Denied.");
$navigationTypeText = ($navigationType == 0) ? 'arrows' : 'pages';
$c = Page::getCurrentPage();
if ($c->isEditMode()) { ?>
    <div class="ccm-edit-mode-disabled-item" style="<?php echo isset($width) ? "width: $width;" : '' ?><?php echo isset($height) ? "height: $height;" : '' ?>">
        <div style="padding: 40px 0px 40px 0px"><?php echo t('Events Slider disabled in edit mode.')?></div>
    </div>
<?php  } else { ?>
<script>
$(document).ready(function(){
    $(function () {
        $("#ccm-image-slider-<?php echo $bID ?>").responsiveSlides({
            prevText: "",   // String: Text for the "previous" button
            nextText: "",
            <?php if($navigationType == 0) { ?>
            nav:true,
            <?php } else { ?>
            pager: true,
            <?php } ?>
            <?php if ($timeout) { echo "timeout: $timeout,"; } ?>
            <?php if ($speed) { echo "speed: $speed,"; } ?>
            <?php if ($pause) { echo "pause: true,"; } ?>
            <?php if ($noAnimate) { echo "auto: false,"; } ?>
            <?php if ($maxWidth) { echo "maxWidth: $maxWidth,"; } ?>
        });
    });
});
</script>
<div class="fed-events-slider">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="fed-events-slider__title">
          <h2 class="title-underline"><?php echo $sliderTitle?></h2>
        </div>

        <div class="fed-events-slider__container">
          <div class="ccm-image-slider-container ccm-block-image-slider-<?php echo $navigationTypeText?>" >
              <div class="ccm-image-slider">
                  <div class="ccm-image-slider-inner">

                  <?php if(count($rows) > 0) { ?>
                  <ul class="rslides" id="ccm-image-slider-<?php echo $bID ?>">
                      <?php foreach($rows as $row) { ?>
                          <li>
                            <?php print_r($row)?>
                            <?php print_r($row['linkPage']->getCollectionName()) ?>
                            <?php print_r($row['linkPage']->getCollectionDatePublic()) ?>
                            <?php print_r($row['linkPage']->getCollectionDescription()) ?>
                            <?php $thumbnail = $row['linkPage']->getAttribute('thumbnail'); ?>

                            <?php if (is_object($thumbnail)): ?>
                                <a href="<?php echo $row['linkURL'] ?>" class="fed-blog-entry__thumbnail" target="<?php echo $target ?>">
                                    <?php
                                    $img = Core::make('html/image', array($thumbnail));
                                    $tag = $img->getTag();
                                    $tag->addClass('img-responsive');
                                    print $tag;
                                    ?>
                                </a>
                            <?php endif; ?>

                          <?php if($row['linkURL']) { ?>
                              <a href="<?php echo $row['linkURL'] ?>" class="mega-link-overlay"></a>
                          <?php } ?>
                          </li>
                      <?php } ?>
                  </ul>
                  <?php } else { ?>
                  <div class="ccm-image-slider-placeholder">
                      <p><?php echo t('No Events Entered.'); ?></p>
                  </div>
                  <?php } ?>
                  </div>

              </div>
          </div><!--end ccm-image-slider-container-->
        </div><!--end fed-events-slider__container-->

      </div>
    </div>
  </div>
</div><!--end fed-events-slider-->
<?php } ?>
