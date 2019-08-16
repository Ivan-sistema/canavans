<?php get_header(); ?>
<section>
	<div class="container-full">
		 <?php echo do_shortcode('[rev_slider alias="banner"]');?>
		
	</div>
</section>
<section class="">
	<div class="container-full pd-tb-5 column">
	<div class="container column text-center"  data-aos="flip-left">


		<h1>Quem Somos ?</h1>
		<p>O <strong>Canil Canavan’s</strong> fundado em meados de 2014 na região de Goiânia, é especializado na criação de <strong>HUSKY SIBERIANO.</strong><br />
		Nossos cães têm ótima procedência genética, o que garante toda a <strong>qualidade de nossos filhotes.</strong> 
	Amamos nossos lobinhos, por isso, <br />cuidamos muito bem para que todos os filhotes cheguem até a sua casa com todos os cuidados necessários para tenham uma <strong>vida saudável e feliz.</strong></p>

	</div>


	<div class="container"  data-aos="zoom-in">
		<div class="service-box">
			<div class="service-icon" style="width:20%;margin:2% auto !important">
				<a href="#" ><img src="<?php echo get_template_directory_uri();?>/assets/images/ic-1.png" /></a>
			</div>
			<div class="service-content">
				<h4>O Canil:</h4>
				<p><a href="#">Especializado na criação de cães da raça <strong>HUSKY SIBERIANO</strong>, temos em nosso plantel algumas das melhores linhas de sangue do mundo</a></p>
			</div>
		</div>
 
 
			<div class="service-box service-center">
			<div class="service-icon">
			<a href="#" >    <img src="<?php echo get_template_directory_uri();?>/assets/images/ic-2.png" /></a>
			</div>
			<div class="service-content">
			<h4>Ninhadas:</h4>
			<p><a href="#">Nós trabalhamos arduamente mantendo e melhorando o padrão de excelencia dos nossos filhotes, em respeito a todo amor e trabalho que temos aos nossos <strong>HUSKYS SIBERIANOS.</strong></a></p>
			</div>
			</div>
 
			 
			<div class="service-box  service-center" data-animation="fadeIn" data-animation-delay="03">
			<div class="service-icon">
			<a href="#" >    <img src="<?php echo get_template_directory_uri();?>/assets/images/ic-3.png" /></a>
			</div>
			<div class="service-content">
			<h4>Eventos:</h4>
			<p><a href="#">O <strong>CANAVANS SIBERIANS</strong> participa dos mais variados eventos e exposições de beleza, mostrando toda a beleza de seus <strong>HUSKY SIBERIANO</strong>, acompanhe-nos para saber onde será o proximo.</a></p>
			</div>
			</div>
 
</div>
</div></div>
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

