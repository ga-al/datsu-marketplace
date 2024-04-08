<?php
get_header();
?>

  <div id="content" class="site-content <?= bootscore_container_class(); ?> pb-5 mt-md-2 mt-4">
    <div id="primary" class="content-area">
      <!-- Hook to add something nice -->
      <?php bs_after_primary(); ?>
      <main id="main" class="site-main">
        
        <div class="row">
          <!-- sidebar -->
          <?php get_sidebar(); ?>
          <!-- row -->
          <div class="<?= bootscore_main_col_class(); ?> position-relative">
            <h2 class="text-primary">Комплектующие</h2>
            <div class="row">
              <div class="col-6 col-md-4">
                <h3>Труба нержавеющая</h3>
                <ul>
                  <li>Круглые трубы</li>
                  <li>Уплотнители для поручня с пазом</li>
                  <li>Поручень с пазом под стекло</li>
                  <li>Профильные трубы</li>
                  <li>Перфорированные трубы</li>
                </ul>
              </div>
              <div class="col-6 col-md-4">
                <h3>Труба нержавеющая</h3>
                <ul>
                  <li>Круглые трубы</li>
                  <li>Уплотнители для поручня с пазом</li>
                  <li>Поручень с пазом под стекло</li>
                  <li>Профильные трубы</li>
                  <li>Перфорированные трубы</li>
                </ul>
              </div>
              <div class="col-6 col-md-4">
                <h3>Труба нержавеющая</h3>
                <ul>
                  <li>Круглые трубы</li>
                  <li>Уплотнители для поручня с пазом</li>
                  <li>Поручень с пазом под стекло</li>
                  <li>Профильные трубы</li>
                  <li>Перфорированные трубы</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </main><!-- #main -->
    </div><!-- #primary -->
  </div><!-- #content -->
<?php
get_footer();
