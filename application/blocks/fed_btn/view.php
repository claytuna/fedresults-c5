<?php defined('C5_EXECUTE') or die("Access Denied.");?>

<a class="btn btn--primary <?php echo ($alignmentType === '1' ? 'btn--center' : ''); ?>" href="<?php print $linkURL ?>">
          <?php if ($btnText) {
              echo $btnText;
          } else {
            echo t("Learn more");
          }?>
</a>
