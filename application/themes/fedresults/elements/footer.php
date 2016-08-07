<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

</div><!--END PAGEWRAP CLASS; see header_meta for opening-->

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
        <div class="footer__right">&copy;<?php echo date('Y');?> FedResults. All Rights Reserved.</div>
      </div>
    </div>
  </div>
</footer>

<?php Loader::element('footer_required'); ?>

</body>
</html>
