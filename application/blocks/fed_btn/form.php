<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<fieldset>
    <legend><?php echo t('Button')?></legend>

<div class="form-group">
	<?php echo $form->label('btnText', t('Button Text (default: Learn more)'))?>
	<?php echo $form->text('btnText', $btnText, array('style'=>'width: 100%;')); ?>
</div>

<div class="form-group">
	<?php echo $form->label('alignmentType', t('Alignment'))?>
	<select name="alignmentType" id="alignmentType" class="form-control" style="width: 60%;">
		<option value="0" <?php echo (empty($alignmentType) || $alignmentType === '0' || $alignmentType === null || !isset($alignmentType) ? 'selected="selected"' : '')?>><?php echo t('Left (Default)')?></option>
		<option value="1" <?php echo ($alignmentType === '1' ? 'selected="selected"' : '')?>><?php echo t('Centered')?></option>
	</select>
</div>

<div class="form-group">
	<?php echo $form->label('imageLinkType', t('Button Link'))?>
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
