<?php snippet('header') ?>

  <main>

    <section class="u-ph4 u-pv2">
      <div class="gw">
        <div class="g g-1of6">
          &nbsp;
        </div>
        <div class="g g-5of6">
          <h1><?php echo $page->title()->html() ?></h1>
        </div>
      </div>
    </section>

    <section class="u-ph4 u-pv3">
      <div class="gw">
        <div class="g g-1of6">
          &nbsp;
        </div>
        <div class="g g-5of6">
          <?php echo $page->text()->kirbytext() ?>
        </div>
      </div>
    </section>

    <section id="contents" class="u-pv3 u-ph4 u-clearfix c-bgDark">
      <div class="gw">

        <div class="g g-1of6 u-height5">
        </div>

        <?php snippet('sitemap', array('scope' => $pages->filterby( 'slug', $page->slug() ), 'colsize' => '1of6')) ?>

      </div>
    </section>

  </main>

<?php snippet('footer') ?>