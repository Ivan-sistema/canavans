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



				<div class="col-page flex-3">

				<article>



					<!-- TITULO DO POST -->

					

					<!-- CONTEUDO DO POST -->
<?php the_field('descricao_sobre_a_ninhada'); ?>
<?php the_field('galeria_ninhada'); ?>
					<!-- COMENTARIOS -->

					



				</article>

			</div>



			<div class="col-page flex-1 column">

				<h3>Quer saber mais sobre nossos lobinhos? Mande uma mensagem pra gente</h3>

				<?php echo do_shortcode('[contact-form-7 id="45" title="contato"]'); ?>

			</div>

			<?php endwhile; ?>



	</div>

</div>

</section>





<?php get_footer(); ?>

