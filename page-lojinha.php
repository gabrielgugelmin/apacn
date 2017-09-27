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

				<section class="Title">
					<h1>Lojinha</h1>
					<small>Conheça e ajude a APACN adquirindo os produtos :)</small>
				</section> <!-- Title -->
			</div>

            <?php 
                $args = array(
                    'taxonomy'     => 'lojinha',
                    'orderby'      => 'name'                    
                );
            
                $categories = get_categories( $args );              
            ?>
           
            <div class="Loja">
                <div class="container">
                    <div class="row">

                    <?php 
                        foreach( $categories as $category ) {
                    ?>                    
                        <div class="Loja__item--1">
                            <div class="Loja__title"><?php echo $category->name; ?></div>
                            <a href="<?php echo get_category_link( $category->term_id ); ?>">Ver Produtos <img src="<?php bloginfo('template_directory'); ?>/assets/img/icon/arrow-white.svg" alt="Seta" /></a>
                        </div>
                        <?php } ?>

                    </div>
                </div>
            </div>


			<?php 
				// $qr = new WP_Query();
				// $arr 	= $qr->query(array('post_type' => 'page', 'posts_per_page' => '1', 'post_parent' => get_the_ID()));
			
				// $diretoria = get_page_children( get_the_ID(), $arr );		
			?>	

			<section class="Content">
				<div class="container">
					<h2 class="u-azure"><?php echo $diretoria[0]->post_title; ?> <span><?php echo $diretoria[0]->post_excerpt; ?></span></h2>
					
				</div> <!-- container -->
			</section>  
             
		</div> <!-- PageContent -->



<?php endwhile; endif; ?>

<?php get_footer(); ?>
