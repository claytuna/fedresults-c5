<?php defined('C5_EXECUTE') or die("Access Denied.");?>


<?php if ($title) {
    print '<p class="title-underline '. ($alignmentType === '1' ? 'title-underline--left' : '') . '">' . $title . '</p>';
}?>
