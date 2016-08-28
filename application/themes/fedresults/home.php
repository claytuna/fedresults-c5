<?php
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php'); ?>

<main role="main" class="home">



  <div class="fed-article-slider">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
        <h2>When Results Matter</h2>
        <p>Providing Proven IT Solutions for Federal, State, and Local Governments</p>
        <a href="/" class="btn btn--primary">Learn more</a>
        </div>
      </div>
    </div>
  </div>

  <div class="fed-grid">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-4">
        <h3>Security &amp; Management</h3>
        <p>BLURB</p>
        </div>
        <div class="col-xs-12 col-sm-4">
        <h3>Big Data</h3>
        <p>BLURB</p>
        </div>
        <div class="col-xs-12 col-sm-4">
        <h3>Storage</h3>
        <p>BLURB</p>
        </div>
      </div>
    </div>
  </div>

  <div class="fed-tech-callout">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <h2>Technologies to Support Missions</h2>
          <hr class="fed-check"/>
          <p>FedResults offers a variety of IT solutions, addressing a wide range of government needs, along with sales, marketing, and contract management to support to a variety of technology manufacturers and their government channel partners.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-4">
        <h3>Security &amp; Management</h3>
        <p>BLURB</p>
        </div>
        <div class="col-xs-12 col-sm-4">
        <h3>Big Data</h3>
        <p>BLURB</p>
        </div>
        <div class="col-xs-12 col-sm-4">
        <h3>Storage</h3>
        <p>BLURB</p>
        </div>
      </div>
    </div>
  </div>

<?php
$a = new Area('Main');
//$a->enableGridContainer();
$a->display($c);
?>
</main>

<?php  $this->inc('elements/footer.php'); ?>
