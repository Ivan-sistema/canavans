<?php /* template name: FOTOS */ ?>
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

				<div class="col-page flex-3">
				<section id="post">
	<div class=" column" style="text-align: center;">

		<div class="geral-100 ">
		
					<?php get_template_part('template_parts/post-caes'); ?>
			</div>

		
	</div>

</section>
			</div>

			<div class="col-page flex-1 column">
				<h3>Quer saber mais sobre nossos lobinhos? Mande uma mensagem pra gente</h3>
				<?php echo do_shortcode('[contact-form-7 id="45" title="contato"]'); ?>
			</div>

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


<?php get_footer(); ?>

