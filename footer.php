<?php
/**
 *
 * @package WordPress
 * @subpackage APACN
 * @since APACN 1.0
 */
?>


		<footer class="SiteFooter">
			<div class="container">
				<a href="index.html" class="SiteFooter-logo">
					<img src="<?php bloginfo('template_directory'); ?>/assets/img/logo/apacn.svg" alt="APACN">
				</a>

				<div class="SiteFooter-list">
					<h5>SOBRE A APACN</h5>
					<ul>
						<li><a href="/quem-somos">Quem somos</a></li>
						<li><a href="/tratamento/">Tratamento</a></li>
						<!--<li><a href="#/">Projetos</a></li>-->
						<li><a href="/sobre/palavra-da-apacn/">Palavra da APACN</a></li>
						<li><a href="http://www.apacn.com.br/wp-content/themes/apacn/assets/pdf/DFS_APACN_2016_CLIENTE.pdf" target="_blank">Prestação de contas</a></li>
					</ul>
				</div> <!-- SiteFooter-list -->
				<div class="SiteFooter-list">
					<h5>QUERO AJUDAR</h5>
					<ul>
						<!--<li><a href="#/">Doações</a></li>-->
						<!--<li><a href="http://www.dev.agenciawow.com.br/apacn/nota-parana" target="_blank">Nota Paraná</a></li>-->
						<li><a href="http://apacn.com.br/doeseuimposto/" target="_blank">Imposto de renda</a></li>
						<li><a href="/parceiros">Parceiros</a></li>
						<li><a href="/voluntariado">Voluntariado</a></li>
						<li><a href="http://apacn.com.br/notaparana/" target="_blank">Nota Paraná</a></li>
						<li><a href="/quero-ajudar/doacoes/" target="_blank">Faça sua doação</a></li>
					</ul>
				</div> <!-- SiteFooter-list -->

				<div class="SiteFooter-list">					
					<!--<h5><a href="#/">EVENTOS & CAMPANHAS</a></h5>
					<h5><a href="#/">LOJINHA</a></h5>-->
					<h5><a href="/fique-por-dentro">FIQUE POR DENTRO</a></h5>
					<h5><a href="/contato">CONTATO</a></h5>
				</div> <!-- SiteFooter-list -->

				<div class="SiteFooter-info">
					<span><img src="<?php bloginfo('template_directory'); ?>/assets/img/icon/tel.svg" alt="Telefone">(41) 3024 7475</span>
					<span><img src="<?php bloginfo('template_directory'); ?>/assets/img/icon/mail.svg" alt="E-mail"><a href="mailto:apacn@apacn.org.br">apacn@apacn.org.br</a></span>

					<ul>
						<li><a href="#/"><img src="<?php bloginfo('template_directory'); ?>/assets/img/icon/youtube.svg" alt="YouTube"></a></li>
						<li><a href="#/"><img src="<?php bloginfo('template_directory'); ?>/assets/img/icon/facebook.svg" alt="Facebook"></a></li>
						<li><a href="#/"><img src="<?php bloginfo('template_directory'); ?>/assets/img/icon/twitter.svg" alt="Twitter"></a></li>
					</ul>
				</div> <!-- SiteFooter-info -->
			</div> <!-- container -->
		</footer> <!-- SiteFooter -->
	</div> <!-- PageWrapper -->
	
<!--	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/js.min.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function(){

			jQuery('.load_more a').on('click', function(e){
				e.preventDefault();

				console.log('clicou');

				var link = jQuery(this).attr('href');
				jQuery('.load_more').html('<span>CARREGANDO...</span>');
				$.get(link, function(data) {
					var post = $("#Posts .row ", data);
					$('#Posts').append(post);
				});
				jQuery('.load_more').load(link+' .load_more a');
			});
		});
	</script>-->
	<?php wp_footer(); ?>
</body>
</html>