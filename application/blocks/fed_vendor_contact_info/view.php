<?php defined('C5_EXECUTE') or die("Access Denied.");?>

<div class="fed-vendor-contact-info">
    <div class="fed-vendor-contact-info__head">
      <p>CONTACT</p>
    </div>
    <div class="fed-vendor-contact-info__group">
    <p>For more information about <?php print $vendorTitle ? $vendorTitle : 'our'?>
      Products and Services, please contact:</p>
    </div>
    <div class="fed-vendor-contact-info__group">
      <?php if($vendorSolutionTitle) {?>
      <p class="vendor-title"><?php echo $vendorSolutionTitle; ?></p>
      <?php }?>
      <?php if($subtitlePhone) {?>
      <p class="toll-phone">
        <span class="subtitle">TOLL-FREE:</span>
        <a href="tel:<?php echo $subtitlePhone ?>"><span itemprop="telephone"><?php echo $subtitlePhone; ?></span></a></p>
      <?php }?>
      <?php if($mainPhone) {?>
      <p><span class="subtitle">MAIN:</span> <a class="phone" href="tel:<?php echo $mainPhone ?>"><span itemprop="telephone"><?php echo $mainPhone; ?></span></a></p>
      <?php }?>
      <?php if($fax) {?>
      <p class="fax"><span class="subtitle">FAX:</span> <span itemprop="faxNumber"><?php echo $fax; ?></span></p>
      <?php }?>

    <?php if($email) {?>
      <p><span class="subtitle">EMAIL:</span> <a class="email" href="mailto:<?php echo $email ?>"><span itemprop="email"><?php echo $email; ?></span></a></p>
    <?php }?>
    </div>

    <?php if($address1 || $postalCode || $city || $stateProvince) {?>
    <div class="fed-vendor-contact-info__group">
      <div class="address">
      <p class="name"><span itemprop="name"><?php if($addressTitle) {echo $addressTitle;} ?></span></p>
      <p itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
          <span itemprop="streetAddress">
            <?php if($address1) {print $address1 . '<br/>';} ?>
            <?php if($address2) {print $address2 . '<br/>';} ?>
            <?php if($address3) {print $address3 . '<br/>';} ?>
          </span>
          <span itemprop="addressLocality">
            <?php if($city) {print $city . ',';} ?>
            <?php if($stateProvince) {echo $stateProvince;} ?>
          </span>
          <span itemprop="postalCode"><?php if($postalCode) {echo $postalCode;} ?></span>
      </p>
    </div>
    </div>
    <?php }?>
</div>
