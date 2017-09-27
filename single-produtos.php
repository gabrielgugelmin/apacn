<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<?php
  // Start the loop.
  while ( have_posts() ) : the_post();

    // Include the single post content template.
    //get_template_part( 'template-parts/content', 'single' );
      $image = get_the_post_thumbnail( get_the_ID(), 'full' );
			$preco = get_post_meta( get_the_ID(), 'preço', true );
      $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
    ?>

    <div class="PageContent--internal">
      <article class="Post">
        <div class="container">
          <?php wp_custom_breadcrumbs(); ?>
        </div> <!-- container -->

        <div class="Produto">
          <div class="container">
            <div class="col-md-6">
                <?php echo $image; ?>
            </div>
            <div class="col-md-6">
              <span class="Produto__category">Avental <?php echo $term->name; ?></span>
              <h1 class="Produto__title"><?php the_title(); ?></h1>
              <div class="Produto__content">
                <?php the_content(); ?>
              </div>
              <div class="Produto__preco">
                <?php echo $preco; ?>
              </div>
            </div>
          </div>
        </div>

        <div class="Como">
          <div class="Como__content">
            <div class="container">
              <div class="col-md-6">
                <h2>Como adquirir</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
              </div>
            </div>
          </div>
          <div class="Como__map"></div>
        </div>

        <div class="Produtos u-pattern">
          <div class="container">
            <div class="row">
              <h3>Você também pode gostar de:</h3>
            </div>
            <div class="row">

              <div class="col-md-3">
                <div class="Produtos__item">
                  <div class="Produtos__img"><img src="<?php bloginfo('template_directory'); ?>/assets/img/img-camiseta.png" alt=""></div>
                  <div class="Produtos__title"><a href="#">Avental Dia Nacional de Combate ao Câncer Infantojuvenil (DNCCI)</a></div>                
                  <div class="Produtos__price">R$ 35,00</div>
                  <div class="Produtos__link">
                    <a href="#" class="u-button--blue">
                      <span>Ver produto</span>
                    </a>
                  </div>
                </div><!-- / .Produtos__item -->
              </div>

              <div class="col-md-3">
                <div class="Produtos__item">
                  <div class="Produtos__img"><img src="<?php bloginfo('template_directory'); ?>/assets/img/img-camiseta.png" alt=""></div>
                  <div class="Produtos__title"><a href="#">Avental Dia Nacional de Combate ao Câncer Infantojuvenil (DNCCI)</a></div>                
                  <div class="Produtos__price">R$ 35,00</div>
                  <div class="Produtos__link">
                    <a href="#" class="u-button--blue">
                      <span>Ver produto</span>
                    </a>
                  </div>
                </div><!-- / .Produtos__item -->
              </div>

               <div class="col-md-3">
                <div class="Produtos__item">
                  <div class="Produtos__img"><img src="<?php bloginfo('template_directory'); ?>/assets/img/img-camiseta.png" alt=""></div>
                  <div class="Produtos__title"><a href="#">Avental Dia Nacional de Combate ao Câncer Infantojuvenil (DNCCI)</a></div>                
                  <div class="Produtos__price">R$ 35,00</div>
                  <div class="Produtos__link">
                    <a href="#" class="u-button--blue">
                      <span>Ver produto</span>
                    </a>
                  </div>
                </div><!-- / .Produtos__item -->
              </div>

               <div class="col-md-3">
                <div class="Produtos__item">
                  <div class="Produtos__img"><img src="<?php bloginfo('template_directory'); ?>/assets/img/img-camiseta.png" alt=""></div>
                  <div class="Produtos__title"><a href="#">Avental Dia Nacional de Combate ao Câncer Infantojuvenil (DNCCI)</a></div>                
                  <div class="Produtos__price">R$ 35,00</div>
                  <div class="Produtos__link">
                    <a href="#" class="u-button--blue">
                      <span>Ver produto</span>
                    </a>
                  </div>
                </div><!-- / .Produtos__item -->
              </div>


            </div>
          </div>
        </div>

      
      </article> <!-- Post -->

      
    </div> <!-- PageContent--internal -->

  <?php
  // End of the loop.
  endwhile;
?>

<?php get_footer(); ?>