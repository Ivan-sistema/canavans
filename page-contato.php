<?php /* template name: Contato */ ?>
<?php get_header(); ?>

<section>
	<div class="container-full">
		<div class="banner-page">
			<h2>CANAVANS SIBERIANS</h2>
		</div>
	</div>

	<div class="container-full bg-title-page">
		<div class="container">

			<div class="title-page">
					<h2>
						<?php the_title(); ?>
							
					</h2>
				</div>
		</div>
	</div>
		<div class="container pd-tb-5">
			<?php while (have_posts()): ?>
				<?php the_post(); ?>

				<div class="col-page flex-1">

				<h3>Quer saber mais sobre nossos lobinhos? Mande uma mensagem pra gente</h3>
				<?php echo do_shortcode('[contact-form-7 id="45" title="contato"]'); ?>
				
			</div>

			<div class="col-page flex-1 column">
				<article>

					<!-- TITULO DO POST -->
					
					<!-- CONTEUDO DO POST -->
					<p>
						<?php the_content(); ?>
					</p>
					<!-- COMENTARIOS -->
					<div class="contacts-social display-flex column">
						<a href="062 99849.2854"><i class="fas fa-mobile-alt"></i> 062 99849.2854</a> 
						<a href="https://www.facebook.com/canavans.s" target="_blank"><i class="fab fa-facebook"></i> canavans.s</a>
		<a href="https://www.instagram.com/canavans.s/" target="_blank"><i class="fab fa-instagram"></i> canavans.s</a>
					</div>

				</article>
			</div>
			<?php endwhile; ?>

	</div>
</div>
</section>

<section>
<div class="container-full bg-imagem-fundo">

	<div class="container column text-center"  data-aos="flip-left">
		<h2>Canil Canavans, Com um plantel recheado de campeões<br/><strong>Entre e confira nossos Campeões</strong> </h2>

		<a href="#" class="btn-system"><i class="fa fa-tasks"></i> Conheça nossos campeões</a>
	</div>
</div>

</section>
<section id="post">
	<div class="container column pd-tb-5" style="text-align: center;">
		<h2>CONHEÇA NOSSOS CAES</h2>

		<div class="geral-100 pd-tb-5">
		
					<?php get_template_part('template_parts/post-caes'); ?>
			</div>

		
	</div>

</section>

<?php get_footer(); ?>

