<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<fieldset>
    <legend><?php echo t('Splash Title')?></legend>

<div class="form-group">
    <?php echo $form->label('title', t('Title'))?>
    <?php echo $form->text('title', $title, array('style'=>'width: 100%;')); ?>
</div>

<div class="form-group">
	<?php echo $form->label('altText', t('Subtitle text'))?>
	<?php echo $form->text('altText', $altText, array('style'=>'width: 100%;')); ?>
</div>

</fieldset>
