<?php
  /**
  * The template part for displaying evento e campanha posts
  *
  * @package WordPress
  * @subpackage Twenty_Sixteen
  * @since Twenty Sixteen 1.0
  */

  get_header();

  if (have_posts()) : while (have_posts()) : the_post(); 

  $post_thumbnail_id = get_post_thumbnail_id(get_the_ID());
  $post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );

  ?>

  <div class="PageContent--internal">      
    <div class="Post--ec">
      <div class="container">
        <?php get_template_part( 'template-parts/content', 'breadcrumb' ); ?>
      </div> <!-- container -->

      <?php 
        $class = 'Title--without';        
        if(isset($post_thumbnail_url) && $post_thumbnail_url != ''):
          $class = 'Title--background';
        endif; 
      ?>
      <section class="<?php echo $class; ?>" style="background-image: url(<?php echo $post_thumbnail_url; ?>);">
        <div class="container">
          
            <div class="col-md-6 col-md-offset-2">
              <h1>
                <span class="Title__category">
                  <?php echo get_the_category()[0]->cat_name; ?>
                </span>
                <br />
                <?php the_title(); ?>
              </h1>              
            </div> <!-- col -->

            <div class="col-md-2">
              <div class="Title__date">
                <span>24</span>
                <small>dez</small>
              </div> <!-- Title__date -->
            </div> <!-- col -->
            
        </div>
      </section> <!-- Title -->

      <div class="Eventos">
          <div class="Eventos__content">
            <div class="container">
              <div class="row">
                <div class="col-md-10 col-md-offset-1">
                  <?php the_content(); ?>
                </div> <!-- col -->
              </div> <!-- row -->
            </div><!-- / .container -->
          </div>
      </div><!-- / .Eventos -->

    
      <div class="Convite">
        <div class="container">
          <div class="Convite__item">	    			
            <div class="Convite__box u-left"><div class="icon"><img src="<?php bloginfo('template_directory'); ?>/assets/img/icon/convite.svg" alt="Convite" /></div><div class="Convite__title">Adquira seu convite</div></div><!-- / .Convite__box -->            
          </div><!-- / .Convite__item -->

          <div class="Convite__item u-right">
            <p>Envie um e-mail para <strong>marketing@apacn.org.br</strong> e adquira seu convite.</p>
            <a href="mailto:marketing@apacn.org.br" class="u-link">Quero meu convite</a>
          </div>
        </div><!-- / .container -->
      </div><!-- / .Convite -->

      <div class="Navigation">
        <div class="container">
          <?php
            $prev_post = get_previous_post();
            if (!empty( $prev_post )): ?>
              <!--<a href="<?php echo get_permalink( $next_post->ID ); ?>"><?php echo $next_post->post_title; ?></a>-->
              <a href="<?php echo get_permalink( $prev_post->ID ); ?>" class="Navigation__link" title="Ver próximo"><img src="<?php bloginfo('template_directory'); ?>/assets/img/icon/arrow-left.svg" alt="Seta" /> Ver anterior </a>                   
          <?php endif; ?>
          <?php
            $next_post = get_next_post();
            if (!empty( $next_post )): ?>
              <!--<a href="<?php echo get_permalink( $next_post->ID ); ?>"><?php echo $next_post->post_title; ?></a>-->
              <a href="<?php echo get_permalink( $next_post->ID ); ?>" class="Navigation__link u-right" title="Ver próximo">Ver próximo <img src="<?php bloginfo('template_directory'); ?>/assets/img/icon/arrow.svg" alt="Seta" /></a>
          <?php endif; ?>
          
        </div>
      </div>

    </div><!-- / .Post--ec -->
  </div> <!-- PageContent -->

  <?php endwhile; endif; ?>


<?php get_footer(); ?>