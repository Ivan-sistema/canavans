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
 <?php if(has_post_thumbnail()): ?>
                            <div style="float: left; position: relative; margin-right: 20px;">
                                <a href="<?php the_permalink(); ?>">
                                  <?php the_post_thumbnail('media', array('class' => 'post_miniatura'));?>
                                
                                </a>
                            </div>
                        <?php endif; ?>
					<!-- TITULO DO POST -->
					
					<!-- CONTEUDO DO POST -->
					<p>
						<?php the_content(); ?>
					</p>
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