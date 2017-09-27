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
					<h1>Quem Somos :)</h1>
					<small><?php the_excerpt(); ?></small>
				</section> <!-- Title -->
			</div>

			<section class="SideBanner">
				<div class="SideBanner__img"></div>
				

				<div class="SideBanner__content">
					<?php the_content(); ?>
				</div> <!-- SideBanner__content -->
			</section> <!-- SideBanner -->

			<section class="Content Unidades u-pattern" > 
				<div class="container">
					<h2 class="u-azure">UNIDADES</h2>
					
					<div class="u-flex">

					<?php 
						$args = array(			  
							'post_type'   => 'unidades',
							'orderby'     => 'menu_order',
							'order'				=> 'ASC'
						);
						query_posts( $args);
						while ( have_posts() ) : the_post();

						$post_thumbnail_id = get_post_thumbnail_id(get_the_ID());
						$post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );

						$image = get_the_post_thumbnail( get_the_ID(), 'full' ); 
						$endereco = get_post_meta(get_the_ID(), 'endereço', true);
						$link_mapa = get_post_meta(get_the_ID(), 'link_mapa', true);
						$subtitulo = get_post_meta(get_the_ID(), 'subtitulo', true);
									 
					?>	
		
					<article class="Item">
							<div class="Item__title">
								<h4>
									<?php 
										the_title(); 

										if(!empty($subtitulo)){ ?>
											<span><?php echo $subtitulo; ?></span>
										<?php 
										}
									?>
								</h4>
							</div> <!-- Item__title -->

							<div class="Item__img" style="background-image: url(<?php echo $post_thumbnail_url; ?>); "></div>

							<div class="Item__content">
								<button type="button" class="Item__close js-closeItem">
									<img src="<?php bloginfo('template_directory'); ?>/assets/img/icon/close.svg" alt="Fechar">
								</button>
								<a class="Item__address" href="<?php echo $link_mapa; ?>" target="_blank">
									<p><?php echo $endereco; ?></p>
								</a> <!-- Item__address -->

								<p class="Item__excerpt">
									<?php echo excerpt(294); ?>
								</p>

								<p class="Item__text">
									<?php echo get_the_content(); ?>
								</p>

								<a href="#/" class="u-button--blue js-openItem">
									<span>VER MAIS!</span>
								</a>
							</div> <!-- Item__content -->
						</article> <!-- Item -->

					<?php 
						endwhile;
						wp_reset_query();
					?>  

					</div> <!-- u-flex -->
				</div> <!-- container -->
			</section> <!-- Unidades -->

			<?php 
				$qr = new WP_Query();
				$arr 	= $qr->query(array('post_type' => 'page', 'posts_per_page' => '1', 'post_parent' => get_the_ID()));
			
				$diretoria = get_page_children( get_the_ID(), $arr );		
			?>	

			<section class="Content">
				<div class="container">
					<h2 class="u-azure"><?php echo $diretoria[0]->post_title; ?> <span><?php echo $diretoria[0]->post_excerpt; ?></span></h2>

					<?php echo $diretoria[0]->post_content; ?>
				</div> <!-- container -->
			</section> <!-- Diretoria -->
		</div> <!-- PageContent -->



<?php endwhile; endif; ?>

<?php get_footer(); ?>
