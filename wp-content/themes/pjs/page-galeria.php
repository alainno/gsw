<?php

/* Template Name: Galería de Fotos */
wp_enqueue_script('carousel', get_template_directory_uri() . '/js/vendor/jquery.cycle2.carousel.min.js', array(), '', true);

get_header();

?>
<style>
/** { -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; }
#cycle-1 div { width:100%; }
#cycle-2 .cycle-slide { border:3px solid #fff; }
#cycle-2 .cycle-slide-active { border:3px solid #004; }

#slideshow-1{ width: 50%; max-width: 600px; margin: auto }
#slideshow-2{width: 600px}
#slideshow-2 { margin-top: 10px }
.cycle-slideshow img { width: 100%; height: auto; display: block; }*/
</style>
<?php if (have_posts()) : while (have_posts()) : the_post();?>
	<h1><?php the_title() ?></h1>
	<?php
	$galeria = get_post_gallery(get_the_ID(), false);
	/*echo '<pre>';
	var_dump($gallery);
	echo '</pre>';*/
	$galeria_ids = explode(',', $galeria['ids']);
	?>

	<div id="slideshow-1" class="gallery">

		<div id="cycle-1" class="cycle-slideshow canvas"
		data-cycle-timeout="0"
		data-cycle-prev="#slideshow-1 .cycle-prev"
		data-cycle-next="#slideshow-1 .cycle-next"
		data-cycle-caption-template="{{alt}}"
		data-cycle-loader="true"
		>
		<a href="#" class="cycle-prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
		<a href="#" class="cycle-next"><span class="glyphicon glyphicon-chevron-right"></span></a>
		<div class="cycle-caption"></div>

		<?php foreach($galeria_ids as $img_id): ?>
		<img src="<?php echo wp_get_attachment_image_src($img_id, 'large' )[0]; ?>" alt="hi hi" />
		<?php endforeach; ?>

		</div>
	</div>

	<div id="slideshow-2" class="carousel">
		<div id="cycle-2" class="cycle-slideshow"
		data-cycle-slides="> div"
		data-cycle-timeout="0"
		data-cycle-prev="#slideshow-2 .cycle-prev"
		data-cycle-next="#slideshow-2 .cycle-next"
		data-cycle-caption="#slideshow-2 .custom-caption"
		data-cycle-fx="carousel"
		data-cycle-carousel-fluid="false"
		data-cycle-carousel-offset="25"
		data-allow-wrap="false"
		>
		<?php foreach($galeria_ids as $img_id): ?>
		<div><img src="<?php echo wp_get_attachment_image_src( $img_id, 'thumbnail' )[0]; ?>" width="54" height="54"></div>
		<?php endforeach; ?>
		</div>
		<a href="#" class="cycle-next"><span class="glyphicon glyphicon-chevron-right"></span></a>
		<a href="#" class="cycle-prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
	</div>

<?php endwhile; endif; ?>
<?php get_footer(); ?>