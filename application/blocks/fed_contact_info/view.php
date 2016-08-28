<?php defined('C5_EXECUTE') or die("Access Denied.");?>

<div class="fed-contact-info">
  <div itemscope itemtype="http://schema.org/Organization">

    <div class="fed-contact-info__group">
      <?php if($titlePhone) {?>
      <p class="title-phone">
        <a href="tel:<?php echo $titlePhone ?>"><span itemprop="telephone"><?php echo $titlePhone; ?></span></a></p>
      <?php }?>
      <?php if($subtitlePhone) {?>
      <p class="subtitle-phone">
        <a href="tel:<?php echo $subtitlePhone ?>"><span itemprop="telephone"><?php echo $subtitlePhone; ?></span></a></p>
      <?php }?>
    </div>

    <div class="fed-contact-info__group">
      <?php if($mainPhone) {?>
      <p><a class="phone" href="tel:<?php echo $mainPhone ?>"><span itemprop="telephone"><?php echo $mainPhone; ?></span></a> <span class="subtitle">PHONE</span></p>
      <?php }?>
      <?php if($fax) {?>
        <p class="fax"><span itemprop="faxNumber"><?php echo $fax; ?></span> <span class="subtitle">FAX</span></p>
      <?php }?>
    </div>

    <?php if($email) {?>
    <div class="fed-contact-info__group">
      <a class="email" href="mailto:<?php echo $email ?>"><span itemprop="email"><?php echo $email; ?></span></a>
    </div>
    <?php }?>

    <?php if($address1 || $postalCode || $city || $stateProvince) {?>
    <div class="fed-contact-info__group">
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
</div>
