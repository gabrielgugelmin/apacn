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
				<div class="Breadcrumb">
					<span class="Breadcrumb__item">VOCÊ ESTÁ EM: <a href="<?php echo get_home_url(); ?>">HOME</a> ></span>
					<span class="Breadcrumb__item--active">CONTATO</span>
				</div> <!-- Breadcrumb -->
			</div> <!-- container -->

				<section class="Contact">
					<div class="container">
						<div class="Contact__column">
							<h2>Contato</h2>
							<p>Deixe sua mensagem</p>

							<ul class="Contact__info">
								<li>
									<div class="u-icon">
										<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
										width="1408px" height="1408px" viewBox="192 128 1408 1408" enable-background="new 192 128 1408 1408" xml:space="preserve">
											<path d="M1600,1240c0,18-3.334,41.5-10,70.5c-6.667,29-13.667,51.833-21,68.5c-14,33.333-54.667,68.667-122,106
												c-62.667,34-124.667,51-186,51c-18,0-35.5-1.167-52.5-3.5s-36.167-6.5-57.5-12.5c-21.334-6-37.167-10.833-47.5-14.5
												c-10.334-3.667-28.834-10.5-55.5-20.5c-26.667-10-43-16-49-18c-65.334-23.333-123.667-51-175-83
												c-85.334-52.667-173.5-124.5-264.5-215.5S396.666,989.333,344,904c-32-51.333-59.667-109.667-83-175c-2-6-8-22.333-18-49
												s-16.834-45.167-20.5-55.5c-3.667-10.333-8.5-26.167-14.5-47.5s-10.167-40.5-12.5-57.5c-2.334-17-3.5-34.5-3.5-52.5
												c0-61.333,17-123.333,51-186c37.333-67.333,72.666-108,106-122c16.666-7.333,39.5-14.333,68.5-21s52.5-10,70.5-10
												c9.333,0,16.333,1,21,3c12,4,29.666,29.333,53,76c7.333,12.667,17.333,30.667,30,54c12.666,23.333,24.333,44.5,35,63.5
												c10.666,19,21,36.833,31,53.5c2,2.667,7.833,11,17.5,25c9.666,14,16.833,25.833,21.5,35.5c4.666,9.667,7,19.167,7,28.5
												c0,13.333-9.5,30-28.5,50s-39.667,38.333-62,55c-22.334,16.667-43,34.333-62,53S523,659,523,671c0,6,1.666,13.5,5,22.5
												c3.333,9,6.166,15.833,8.5,20.5c2.333,4.667,7,12.667,14,24s10.833,17.667,11.5,19c50.666,91.333,108.666,169.667,174,235
												c65.333,65.333,143.666,123.333,235,174c1.333,0.667,7.666,4.5,19,11.5c11.333,7,19.333,11.667,24,14
												c4.666,2.333,11.5,5.167,20.5,8.5s16.5,5,22.5,5c12,0,27.333-9.5,46-28.5c18.666-19,36.333-39.667,53-62c16.666-22.333,35-43,55-62
												s36.666-28.5,50-28.5c9.333,0,18.833,2.333,28.5,7c9.666,4.667,21.5,11.833,35.5,21.5s22.333,15.5,25,17.5
												c16.666,10,34.5,20.333,53.5,31s40.166,22.333,63.5,35c23.333,12.667,41.333,22.667,54,30c46.666,23.333,72,41,76,53
												C1599,1223.667,1600,1230.667,1600,1240z"/>
										</svg>
									</div> <!-- u-icon -->

									<p>(41) 3024 7475</p>
								</li>
								<li>
									<div class="u-icon">
										<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="11.199px" height="8px" viewBox="0 0 11.199 8" enable-background="new 0 0 11.199 8" xml:space="preserve">
											<g>
												<path fill="#00C5FE" d="M5.602,5.602L4.215,4.387L0.254,7.781C0.398,7.918,0.59,8,0.805,8h9.589c0.215,0,0.406-0.082,0.551-0.219
													L6.984,4.387L5.602,5.602z M5.602,5.602"/>
												<path fill="#00C5FE" d="M10.945,0.219C10.805,0.082,10.609,0,10.395,0H0.805C0.594,0,0.398,0.082,0.254,0.219l5.348,4.582
													L10.945,0.219z M10.945,0.219"/>
												<path fill="#00C5FE" d="M0,0.703v6.645l3.867-3.286L0,0.703z M0,0.703"/>
												<path fill="#00C5FE" d="M7.332,4.062l3.867,3.286V0.699L7.332,4.062z M7.332,4.062"/>
											</g>
										</svg>
									</div>
									<p>apacn@apacn.org.br</p>
								</li>
								<li>
									<div class="u-icon">
										<svg version="1.1" id="pin" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="24px" height="32px" viewBox="4 0 24 32" enable-background="new 4 0 24 32" xml:space="preserve">
											<path fill="#395FA2" d="M4,12C4,5.373,9.373,0,16,0c6.627,0,12,5.373,12,12c0,8-12,20-12,20S4,20,4,12 M11,12c0,2.761,2.239,5,5,5 c2.762,0,5-2.239,5-5s-2.238-5-5-5C13.239,7,11,9.239,11,12z"/>
										</svg>
									</div>
									<p>
										Casa de Apoio e Sede Administrativa<br>
										Rua Oscar Schrappe Sênior, 250 – Tarumã<br>
										CEP 82810-690 – Curitiba PR
									</p>
								</li>
							</ul>
						</div> <!-- Contact__column -->
						<div class="Contact__column">
							<form  action="contactForm.php" method="post"  class="Form js-validateForm" id="FormContato">
								<div class="Form__group" data-validate="true">
									<label for="dropdown">Setor</label>
									<div class="Dropdown" name="dropdown">
										<input type="text" name="contato_setor" id="contato_setor" placeholder="Financeiro" disabled>
										<ul>
											<li>Financeiro 2</li>
											<li>Financeiro 2</li>
											<li>Financeiro 3</li>
											<li>Financeiro 4</li>
										</ul>
									</div> <!-- Dropdown -->
									<span class="Form__required">*</span>
								</div> <!-- Form__group -->

								<div class="Form__group" data-validate="true">
									<label for="contato_nome">Nome Completo</label>
									<input type="text" name="contato_nome" id="contato_nome">
									<span class="Form__required">*</span>
								</div> <!-- Form__group -->

								<div class="Form__group" data-validate="true">
									<label for="contato_email">E-mail</label>
									<input type="text" name="contato_email" id="contato_email">
									<span class="Form__required">*</span>
								</div> <!-- Form__group -->

								<div class="Form__group" data-validate="true">
									<label for="contato_mensagem">Assunto</label>
									<textarea rows="5" cols="30" name="contato_mensagem" id="contato_mensagem"></textarea>
									<span class="Form__required">*</span>
								</div> <!-- Form__group -->

								<button type="submit" class="u-button--blue">enviar e-mail</button>
							</form>
						</div> <!-- Contact__column -->
					</div> <!-- container -->
				</section>
		</div> <!-- PageContent -->

<?php endwhile; endif; ?>

<?php get_footer(); ?>
