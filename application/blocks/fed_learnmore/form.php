<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<fieldset>
    <legend><?php echo t('Learn More Content')?></legend>

<div class="form-group">
    <?php echo $form->label('title', t('Title'))?>
    <?php echo $form->text('title', $title, array('style'=>'width: 100%;')); ?>
</div>

<div class="form-group">
	<?php echo $form->label('altText', t('Subtitle text'))?>
	<?php echo $form->textarea('altText', $altText, array('style'=>'width: 100%;')); ?>
</div>

<div class="form-group">
	<?php echo $form->label('imageLinkType', t('Image Link'))?>
	<select name="linkType" id="imageLinkType" class="form-control" style="width: 60%;">
		<option value="0" <?php echo (empty($externalLink) && empty($internalLinkCID) ? 'selected="selected"' : '')?>><?php echo t('None')?></option>
		<option value="1" <?php echo (empty($externalLink) && !empty($internalLinkCID) ? 'selected="selected"' : '')?>><?php echo t('Another Page')?></option>
		<option value="2" <?php echo (!empty($externalLink) ? 'selected="selected"' : '')?>><?php echo t('External URL')?></option>
	</select>
</div>

<div id="imageLinkTypePage" style="display: none;" class="form-group">
	<?php echo $form->label('internalLinkCID', t('Choose Page:'))?>
	<?php echo Core::make('helper/form/page_selector')->selectPage('internalLinkCID', $internalLinkCID); ?>
</div>

<div id="imageLinkTypeExternal" style="display: none;" class="form-group">
	<?php echo $form->label('externalLink', t('URL'))?>
	<?php echo $form->text('externalLink', $externalLink, array('style'=>'width: 60%;')); ?>
</div>

<div class="form-group">
	<?php echo $form->label('btnText', t('Button text (default: Learn more)'))?>
	<?php echo $form->text('btnText', $btnText, array('style'=>'width: 100%;')); ?>
</div>

</fieldset>
<script type="text/javascript">
refreshImageLinkTypeControls = function() {
	var linkType = $('#imageLinkType').val();
	$('#imageLinkTypePage').toggle(linkType == 1);
	$('#imageLinkTypeExternal').toggle(linkType == 2);
}

$(document).ready(function() {
	$('#imageLinkType').change(refreshImageLinkTypeControls);
	refreshImageLinkTypeControls();
});
</script>
