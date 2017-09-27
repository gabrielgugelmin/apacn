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
	</div> <!-- container -->

	<section class="Title--background" style="background-image:url(<?php bloginfo('template_directory'); ?>/assets/img/header-doacoes.png);">
		<div class="container">
		<h1><?php the_title(); ?></h1>
		<small class="Title__subtitle">Saiba como ajudar a APACN</small>
	</div>
	</section> <!-- Title -->

	<section id="itens" class="Categorias u-pattern">
		<div class="container">
			<h2>Roupas, Calçados, Móveis e Alimentos</h2>
			<p>Ligue para <strong>(41) 3024-7475</strong> ou mande um e-mail para <strong>recepcao@apacn.org.br.</strong> Buscaremos no local.</p>

			<ul class="Categorias__list">
				<li><img src="<?php bloginfo('template_directory'); ?>/assets/img/icon/icon-roupas.svg" alt="Roupas" /><span>Roupas</span></li>
				<li><img src="<?php bloginfo('template_directory'); ?>/assets/img/icon/icon-calcados.svg" alt="Calçados" /><span>Calçados</span></li>
				<li><img src="<?php bloginfo('template_directory'); ?>/assets/img/icon/icon-moveis.svg" alt="Móveis" /><span>Móveis</span></li>
				<li><img src="<?php bloginfo('template_directory'); ?>/assets/img/icon/icon-alimentos.svg" alt="Alimentos" /><span>Alimentos</span></li>
				<li><img src="<?php bloginfo('template_directory'); ?>/assets/img/icon/icon-eletrodomesticos.svg" alt="Eletrodomésticos" /><span>Eletrodomésticos</span></li>
				<li><img src="<?php bloginfo('template_directory'); ?>/assets/img/icon/icon-eletronicos.svg" alt="Eletrônicos" /><span>Eletrônicos</span></li>
			</ul>
		</div><!-- / .container -->
	</section><!-- / .Categorias -->

	<section id="deposito" class="Bancos">
		<div class="container">
			<h2>Via depósito bancário</h2>
			<ul class="Bancos__list">
				<li>
					<div class="Bancos__img"><img src="<?php bloginfo('template_directory'); ?>/assets/img/logo-bancodobrasil.png" alt="Banco do Brasil" /></div><!-- / .Bancos__img -->
					<div class="Bancos__title">Banco do Brasil</div><!-- / .Bancos__title -->
					<p><strong>Agência:</strong> 2920-3<br />
					<strong>C/C:</strong> 22.900-8</p>
				</li>
				<li>
					<div class="Bancos__img"><img src="<?php bloginfo('template_directory'); ?>/assets/img/logo-caixa.png" alt="Caixa Econômica" /></div><!-- / .Bancos__img -->
					<div class="Bancos__title">Caixa Econômica Federal</div><!-- / .Bancos__title -->
					<p><strong>Agência:</strong> 3915<br />	    				
					<strong>C/C:</strong> 700.700-8</p>
				</li>
				<li>
					<div class="Bancos__img"><img src="<?php bloginfo('template_directory'); ?>/assets/img/logo-bradesco.png" alt="Bradesco" /></div><!-- / .Bancos__img -->
					<div class="Bancos__title">Bradesco</div><!-- / .Bancos__title -->
					<p><strong>Agência:</strong> 5716-9<br />
					<strong>C/C:</strong> 015442-3</p>
				</li>
				<li>
					<div class="Bancos__img"><img src="<?php bloginfo('template_directory'); ?>/assets/img/logo-itau.png" alt="Itaú" /></div><!-- / .Bancos__img -->
					<div class="Bancos__title">Itaú</div><!-- / .Bancos__title -->
					<p><strong>Agência:</strong> 3722<br />
					<strong>C/C:</strong> 11193-1</p>
				</li>
			</ul><!-- / .Bancos__list -->
		</div><!-- / .container -->
	</section><!-- / .Bancos -->

	<section id="boleto" class="Formas">
		<div class="Formas__item">
			<div class="Formas__icon">
				<img src="<?php bloginfo('template_directory'); ?>/assets/img/icon/boleto.svg" alt="Boleto" />
			</div><!-- / .Formas__icon -->

			<div class="Formas__title">Via Boleto Bancário</div>
			<p>Ligue ou envie um e-mail e informe seus dados.<br />
				<strong>O boleto será enviado, com valor e data conforme a sua escolha.</strong>
			</p>

			<a href="mailto:boleto@apacn.org.br" class="u-link">
				<span class="icon">
			<img src="<?php bloginfo('template_directory'); ?>/assets/img/icon/icon-email.svg" alt="Email" /></span>boleto@apacn.org.br</a><br /><!-- / .u-link -->
			<div class="u-link"><span class="icon"><img src="<?php bloginfo('template_directory'); ?>/assets/img/icon/icon-phone.svg" alt="Telefone" /></span>(41) 3024 7475</div><!-- / .u-link -->
		</div><!-- / .Formas__item -->
		<div class="Formas__item">
			<div class="Formas__icon"><img src="<?php bloginfo('template_directory'); ?>/assets/img/icon/debito.svg" alt="Débito" /></div><!-- / .Formas__icon -->
			<div class="Formas__title">Via Débito em Conta Corrente</div><!-- / .Formas__title -->
			<p>Ligue ou envie um e-mail e solicite uma ficha de adesão.<br />
			Ao recebê-la, escolha o valor e uma das três datas.<br />
			<strong>O depósito pode ser realizado nos seguintes bancos:<br />
			Banco do Brasil, Caixa Econômica Federal, Bradesco ou Itaú.</strong></p>
			<a href="mailto:email@apacn.org.br" class="u-link"><span class="icon"><img src="<?php bloginfo('template_directory'); ?>/assets/img/icon/icon-email.svg" alt="Email" /></span>email@apacn.org.br</a><br /><!-- / .u-link -->
			<div class="u-link"><span class="icon"><img src="<?php bloginfo('template_directory'); ?>/assets/img/icon/icon-phone.svg" alt="Telefone" /></span>(41) 3024 7475</div><!-- / .u-link -->
		</div><!-- / .Formas__item -->
		<div class="Formas__item">
			<div class="Formas__icon"><img src="<?php bloginfo('template_directory'); ?>/assets/img/icon/cartao.svg" alt="Cartão de Crédito" /></div><!-- / .Formas__icon -->
			<div class="Formas__title">Via Cartão de Crédito</div><!-- / .Formas__title -->
			<p>Acesse apacn.com.br/doacao e confira as opções<br />
			<strong>Você poderá escolher entre doar uma única vez ou mensalmente. As doações são feitas via PayPal.</strong></p>
			<a href="http://apacn.com.br/doacao" target="_blank" class="u-link">apacn.com.br/doacao</a><!-- / .u-link -->
			<div class="u-link"><span class="icon"><img src="<?php bloginfo('template_directory'); ?>/assets/img/icon/icon-phone.svg" alt="Telefone" /></span>(41) 3024 7475</div><!-- / .u-link -->
		</div><!-- / .Formas__item -->
	</section><!-- / .Formas -->

	<section id="conta-de-luz" class="Luz u-pattern">
		<div class="container">
			<div class="Luz__item">	    			
				<div class="Luz__box u-left"><div class="icon"><img src="<?php bloginfo('template_directory'); ?>/assets/img/icon/luz.svg" alt="Luz" /></div><div class="Luz__title">Doação via<br /> conta de luz</div></div><!-- / .Luz__box -->
				<a href="/copel-autorizacao.doc" class="u-link " download>baixar formulário</a>
			</div><!-- / .Luz__item -->
			<div class="Luz__item u-left"> 
				<p><strong>Baixe e preencha o formulário,</strong> autorizando o acréscimo do valor mensal a ser doado em sua conta de luz e <strong>entregue o formulário nos Correios mais próximo.</strong>Não é necessário selar.</p>
			</div><!-- / .Luz__item -->
		</div><!-- / .container -->
	</section><!-- / .Luz -->



	</div> <!-- PageContent -->

<?php endwhile; endif; ?>

<?php get_footer(); ?>
