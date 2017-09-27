<?php
/**
 *
 * @package WordPress
 * @subpackage APACN
 * @since APACN 1.0
 */

get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <div class="PageContent--internal">      
    <div class="container">
      <?php get_template_part( 'template-parts/content', 'breadcrumb' ); ?>

      <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <div class="Letter">
            <h1 class="Letter__title">
              <?php the_title(); ?>
            </h1>

            <div class="Letter__content">
              <?php the_content(); ?>
            </div> <!-- Letter__content -->
          </div> <!-- Letter -->
        </div> <!-- col -->
      </div> <!-- row -->
    </div> <!-- container -->
  </div> <!-- PageContent -->

<?php endwhile; endif; ?>

<?php get_footer(); ?>
