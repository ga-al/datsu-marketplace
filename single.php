<?php
/**
 * Template Post Type: post
 *
 * @version 5.3.1
 */

get_header();
?>

  <div id="content" class="site-content <?= bootscore_container_class(); ?> py-5 mt-4">
    <div id="primary" class="content-area">

      <!-- Hook to add something nice -->
      <?php bs_after_primary(); ?>

      <main id="main" class="site-main">
        <?php the_breadcrumb(); ?>

        <div class="row">
          <div class="<?= bootscore_main_col_class(); ?>">

              <div class="entry-content">
                <?php the_content(); ?>
              </div>

              <footer class="entry-footer clear-both">
                <div class="mb-4">
                  <?php bootscore_tags(); ?>
                </div>
                <!-- Related posts using bS Swiper plugin -->
                <?php if (function_exists('bootscore_related_posts')) bootscore_related_posts(); ?>
                <nav aria-label="bS page navigation">
                  <ul class="pagination justify-content-center">
                    <li class="page-item">
                      <?php previous_post_link('%link'); ?>
                    </li>
                    <li class="page-item">
                      <?php next_post_link('%link'); ?>
                    </li>
                  </ul>
                </nav>
                <?php comments_template(); ?>
              </footer>

            </main>

          </div>
          <?php get_sidebar(); ?>
        </div>
      </mai>
    </div>
  </div>

<?php
get_footer();
