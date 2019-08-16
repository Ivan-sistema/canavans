<?php /* template name: Ninhadas */ ?>

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

		<div class="container pd-tb-5 column">

					<h3>Conheça os pais</h3>


					<?php $wp_query = new WP_Query();



    query_posts( array( 'post_type' => 'post', 'showposts' => 8, 'paged'=>$paged, 'category_name'=>'ninhadas'));



                if(have_posts()):

		             while ($wp_query -> have_posts()) : $wp_query -> the_post(); ?>

		             	<div class="geral-100">
		             			<article class="box-ninhadas">
										<img src="<?php the_field('padreador'); ?>">
										<img src="<?php the_field('matriz'); ?>">
								</article>
			

				                        
				                <div class="box-ninhadas-desc">

				                        	

									<h3><?php the_title(); ?></h3>

									<div style="margin:2% 0;"><?php the_field('resumo_descricao'); ?></div>

									<div class="geral-100 geral-btn">

											<div class="social">

												<a href="https://www.facebook.com/canavans.s" target="_blank"><i class="fab fa-facebook"></i></a>

												<a  href="https://www.instagram.com/canavans.s/" target="_blank"><i class="fab fa-instagram"></i></a>

											</div>

										<div class="btn-ver"><a href="<?php the_permalink(); ?>">Veja + <i class="fas fa-paw"></i></a></div>

									</div>

				                </div>

		             	</div>





			<?php endwhile; 

		endif;?>

						

		<div class="geral-100 col-page flex-1 column">

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

<section id="post">

	<div class="container column pd-tb-5" style="text-align: center;">

		<h2>CONHEÇA NOSSOS CAES</h2>



		<div class="geral-100 pd-tb-5">

		

					<?php get_template_part('template_parts/post-caes'); ?>

			</div>



		

	</div>



</section>



<?php get_footer(); ?>



