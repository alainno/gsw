<?php

/* Template Name: Galería de Fotos */

get_header();

?>
<?php if (have_posts()) : while (have_posts()) : the_post();?>
<h1><?php the_title() ?></h1>
<?php
	$galeria = get_post_gallery(get_the_ID(), false);
	/*echo '<pre>';
	var_dump($gallery);
	echo '</pre>';*/
	$galeria_ids = explode(',', $galeria['ids']);
?>
<div class="cycle-slideshow auto"
data-cycle-timeout="2000"
data-cycle-loader="true"
data-cycle-progressive="#images"
>
<?php echo '<img src="' , wp_get_attachment_image_src($galeria_ids[0], 'medium' )[0], '">', "\n"; ?>
<script id="images" type="text/cycle">
[
<?php for($i=1; $i<3; $i++): $img_id=$galeria_ids[$i]; ?>
<?php echo '"<img src=\"' , wp_get_attachment_image_src($img_id, 'medium' )[0], '\">"',($i<2)?',':'',  "\n"; ?>
<?php endfor; ?>
]
</script>
</div>
<div>
	<div>
		<ul id="no-template-pager" class="lh">
			<?php $i=0; foreach($galeria_ids as $img_id): ?>
			<li><a href="<?php echo wp_get_attachment_image_src( $img_id, 'full')[0]; ?>"><?php echo wp_get_attachment_image( $img_id, 'thumbnail' ); ?></a></li>
			<?php $i++; endforeach; ?>
		</ul>
	</div>
</div>

<?php endwhile; endif; ?>
<?php get_footer(); ?>