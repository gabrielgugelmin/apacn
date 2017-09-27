<?php
/**
 *
 * @package WordPress
 * @subpackage APACN
 * @since APACN 1.0
 */
get_header(); ?>


		<div class="PageContent">
			
			<a href="<?php echo get_permalink(45); ?>" class="Donation">
				<img src="<?php bloginfo('template_directory'); ?>/assets/img/icon/heart.svg" alt="<3">
				<div>faça sua doação</div>
			</a>

			<section class="Banner">
				<div class="container">
					<div class="Banner-content">
						<h1>AJUDE A MANTER VIVOS OS SONHOS DE UMA CRIANÇA</h1>

						<a href="quem-somos" class="u-button--yellow">
							<span>Conheça a APACN</span>
						</a>
					</div> <!-- Banner-content -->
				</div> <!-- container -->
			</section> <!-- Banner -->

			<section class="Content Parceiros">
				<div class="container">
					<h2 class="Content__title u-cerulean">PARCEIROS</h2>

					<div class="Slider js-slider">

					<?php 
						$args = array(			  
							'post_type'   => 'parceiros',
							'orderby'     => 'menu_order',
							'order'				=> 'ASC'
						);
						query_posts( $args);
						while ( have_posts() ) : the_post();
							$post_thumbnail_id = get_post_thumbnail_id(get_the_ID());
							$post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );

							$image = get_the_post_thumbnail( get_the_ID(), 'full' );
							$link  = get_field("link");
						?>

							<div class="Partner">
								<a href="<?php echo $link; ?>" target="_blank">
									<img src="<?php echo $post_thumbnail_url; ?>" alt="<?php the_title();?>" title="<?php the_title();?>">
								</a>
							</div> <!-- Partner -->
									 
						<?php 
							endwhile;
							wp_reset_query();
						?>
					
					</div> <!-- js-slider -->

				</div>  <!-- container -->
			</section> <!-- Content -->

			<section class="Content Eventos u-pattern" >
				<div class="container">
					<h2 class="Content__title u-azure">EVENTOS & CAMPANHAS</h2>
				
					<div class="u-flex">

						<?php 

							$args = array(
								'cat'					=> '2, 3',
								'orderby'     => 'date',
								'order'				=> 'ASC'
							);
							query_posts( $args);
							while ( have_posts() ) : the_post();

							$thumbnail = get_field('thumbnail');
							$post_date = get_the_date('j / F / Y');

							$image = get_the_post_thumbnail( get_the_ID(), 'full' );

							
							$category = get_the_category();
							$category_name = $category[0]->name;
							$category_id   = $category[0]->term_id;
							$category_link = get_category_link($category_id);

							//$category_name = get_the_category()[0]->name;
							// $category_id   = get_the_category()[0]->term_id;
							// $category_link = get_category_link($category_id);

							
						?>

						<article class="Item">
							<div class="Item__info">
								<?php
									if( $category_id == 2 ){ ?>
										<span class="Item__category--green">
											<a href="<?php echo $category_link; ?>"><?php echo $category_name; ?></a>
										</span> <!-- Item__category -->
									<?php 
									} else if( $category_id == 3 ){ ?>
										<span class="Item__category--orange">
											<a href="<?php echo $category_link; ?>"><?php echo $category_name; ?></a>
										</span> <!-- Item__category -->
									<?php 
									}
								?>
								
								<span class="Item__date">
									<?php echo $post_date; ?>
								</span> <!-- Item__date -->
							</div> <!-- Item__info -->

							<?php
								if( !empty($thumbnail) ){ ?>
									<div class="Item__img" style="background-image: url(<?php echo $thumbnail; ?>); "></div>
								<?php 
								}
							?>

							<div class="Item__content">
								<div class="Item__title">
									<h3>
										<?php the_title(); ?>
									</h3>
								</div> <!-- Item__title -->
								<p>
									<?php
										if( !empty($post_thumbnail_id) ){
											echo excerpt(120);
										} else{
											echo excerpt(400);
										}
									?>
								</p>
							</div> <!-- Item-content -->
							<a href="<?php the_permalink(); ?>" class="u-button--blue">
								<span>QUERO SABER MAIS!</span>
							</a>
						</article> <!-- Item -->						

						<?php 
							endwhile;
							wp_reset_query();
						?> 
					</div> <!-- flex -->

					<a href="<?php echo get_home_url(); ?>/eventos-campanhas" class="u-button--yellow Eventos-button">
						<span>VER MAIS EVENTOS</span>
					</a>
				</div> <!-- container -->
			</section> <!-- Content -->

			<section class="Content Conheca">
				<div class="container">
					<h2 class="Content__title u-azure">CONHEÇA A APACN</h2>

					<!--<div class="row">
						<div class="col-md-12">-->
							<div class="Box" style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/img/quem-somos.jpg);">
								<div class="Box-content">
									<h4>QUEM SOMOS</h4>
									<p>Sorrisos são nosso combustível para o trabalho.</p>
									<a href="<?php echo get_permalink(6); ?>" class="u-button">
										<span>QUERO SABER MAIS!</span>
									</a>
								</div> <!-- Box-content -->
							</div> <!-- Box -->
						<!--</div>--> <!-- col -->
						<!--<div class="col-sm-6" >-->
							<div class="Box--small" style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/img/tratamento.jpg);">
								<div class="Box-content">
									<h4>TRATAMENTO</h4>
									<p>Conheça um pouco mais sobre o câncer infantil.</p>
									<a href="<?php echo get_permalink(59); ?>" class="u-button">
										<span>QUERO SABER MAIS!</span>
									</a>
								</div> <!-- Box-content -->
							</div> <!-- Box -->
						<!--</div> <!-- col -->
						<!--<div class="col-sm-6" >-->
							<div class="Box--small" style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/img/projetos.jpg);">
								<div class="Box-content">
									<h4>PROJETOS</h4>
									<p>Lorem Ipsum Dolor Sit Amet Consectetur.</p>
									<a href="#/" class="u-button">
										<span>QUERO SABER MAIS!</span>
									</a>
								</div> <!-- Box-content -->
							</div> <!-- Box -->
						<!--</div>--> <!-- col -->
					<!--</div>--> <!-- row -->
				</div> <!-- container -->
			</section> <!-- Content -->
		</div> <!-- PageContent -->
<?php get_footer(); ?>