<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<fieldset>
    <legend><?php echo t('Contact Info')?></legend>

<div class="form-group">
    <?php echo $form->label('titlePhone', t('Primary phone (title)'))?>
    <?php echo $form->text('titlePhone', $titlePhone, array('style'=>'width: 50%;')); ?>
</div>

<div class="form-group">
	<?php echo $form->label('subtitlePhone', t('Primary phone (sub-title)'))?>
	<?php echo $form->text('subtitlePhone', $subtitlePhone, array('style'=>'width: 50%;')); ?>
</div>

<div class="form-group">
	<?php echo $form->label('mainPhone', t('Phone'))?>
	<?php echo $form->text('mainPhone', $mainPhone, array('style'=>'width: 50%;')); ?>
</div>

<div class="form-group">
	<?php echo $form->label('fax', t('Fax'))?>
	<?php echo $form->text('fax', $fax, array('style'=>'width: 50%;')); ?>
</div>

<div class="form-group">
	<?php echo $form->label('email', t('Email'))?>
	<?php echo $form->text('email', $email, array('style'=>'width: 50%;')); ?>
</div>

<legend><?php echo t('Address Info')?></legend>

<div class="form-group">
	<?php echo $form->label('addressTitle', t('Address title'))?>
	<?php echo $form->text('addressTitle', $addressTitle, array('style'=>'width: 100%;')); ?>
</div>

<div class="form-group">
	<?php echo $form->label('address1', t('Address line 1'))?>
	<?php echo $form->text('address1', $address1, array('style'=>'width: 80%;')); ?>
</div>

<div class="form-group">
	<?php echo $form->label('address2', t('Address line 2'))?>
	<?php echo $form->text('address2', $address2, array('style'=>'width: 80%;')); ?>
</div>

<div class="form-group">
	<?php echo $form->label('address3', t('Address line 3'))?>
	<?php echo $form->text('address3', $address3, array('style'=>'width: 80%;')); ?>
</div>

<div class="form-group">
	<?php echo $form->label('city', t('City'))?>
	<?php echo $form->text('city', $city, array('style'=>'width: 100%;')); ?>
</div>

<div class="form-group">
	<?php echo $form->label('stateProvince', t('State'))?>
	<?php echo $form->text('stateProvince', $stateProvince, array('style'=>'width: 50%;')); ?>
</div>

<div class="form-group">
	<?php echo $form->label('postalCode', t('Zip'))?>
	<?php echo $form->text('postalCode', $postalCode, array('style'=>'width: 50%;')); ?>
</div>

</fieldset>
