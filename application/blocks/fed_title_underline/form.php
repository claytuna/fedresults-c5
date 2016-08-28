<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<fieldset>
    <legend><?php echo t('Title')?></legend>

<div class="form-group">
    <?php echo $form->label('title', t('Text'))?>
    <?php echo $form->text('title', $title, array('style'=>'width: 100%;')); ?>
</div>

<div class="form-group">
	<?php echo $form->label('alignmentType', t('Alignment'))?>
	<select name="alignmentType" id="alignmentType" class="form-control" style="width: 60%;">
		<option value="0" <?php echo (empty($alignmentType) || $alignmentType === '0' || $alignmentType === null || !isset($alignmentType) ? 'selected="selected"' : '')?>><?php echo t('Centered')?></option>
		<option value="1" <?php echo ($alignmentType === '1' ? 'selected="selected"' : '')?>><?php echo t('Left aligned')?></option>
	</select>
</div>

</fieldset>
