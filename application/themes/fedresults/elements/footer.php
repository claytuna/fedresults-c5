<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<div class="contact-us">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-4 col-lg-3">
        <?php
        $a = new GlobalArea('Footer Contact Info');
        $a->display();
        ?>
      </div>
      <div class="col-xs-12 col-sm-8 col-lg-9">
        <div class="contact-us__form">
        <?php
        $a = new GlobalArea('Footer Contact Form');
        $a->display();
        ?>
        </div>
      </div>
    </div>
  </div>
</div>

<footer class="footer" role="contentinfo">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-2">
        <div class="footer__left">
          <?php
          $a = new GlobalArea('Footer Site Logo');
          $a->display();
          ?>
        </div>
      </div>
      <div class="col-xs-12 col-sm-10">
        <div class="footer__right">
          <p> <span class="footer__copy">&copy;<?php echo date('Y');?> FedResults. All Rights Reserved.</span>
            <a href="https://www.facebook.com/fedresults/" class="btn btn--primary btn--social" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
          <a href="https://twitter.com/fedresults" class="btn btn--primary btn--social" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></p>
        </div>
      </div>
    </div>
  </div>
</footer>

</div><!--END PAGEWRAP CLASS; see header_meta for opening-->

<?php Loader::element('footer_required'); ?>

</body>
</html>
