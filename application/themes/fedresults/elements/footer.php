<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<footer class="footer" role="contentinfo">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-6">
        <div class="footer__left">
          <?php
          $a = new GlobalArea('Footer Site Logo');
          $a->display();
          ?>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6">
        <div class="footer__right">
          <p>&copy;<?php echo date('Y');?> FedResults. All Rights Reserved.
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
