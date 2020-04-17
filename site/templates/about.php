<?php snippet('header') ?>
<div class="row">
  <div class="col-12 col-lg-9">
    <?php snippet('intro') ?>
    <?= $page->text()->blocks()->html() ?>
  </div>
  <div class="col-12 col-lg-3">
    <h2>CV</h2>
    <a href="<?= $page->files()->template('document') ?>" target="_blank">Download CV</a>
  </div>
</div>

<?php snippet('footer') ?>
