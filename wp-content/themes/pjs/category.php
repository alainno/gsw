<?php

// paginando, IMPORTANTE!!! NO OLVIDAR FIJAR A '1' EN LA CONFIGURACION
global $query_string;
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
query_posts($query_string.'&paged='.$paged.'&posts_per_page=2');

get_header();

?>

<h1><?php single_cat_title(); ?></h1>

<?php if (have_posts()) : while (have_posts()) : the_post();?>
<h3><?php the_title() ?></h3>
<div class="clearfix">
	<a href="<?php the_permalink(); ?>" class="left"><?php echo get_image_post('thumbnail'); ?></a>
	<p><?php the_excerpt(); ?></p>
	<a href="<?php the_permalink(); ?>">Leer más &raquo;</a>
</div>
<?php endwhile; endif; ?>

<div class="tac">
    <?php
            $big = 999999999;
            $paginacion = paginate_links(array(
                    'base' => str_replace( $big, '%#%', get_pagenum_link($big) ),
                    'current' => max( 1, get_query_var('paged') ),
                    'total' => $wp_query->max_num_pages,
                    'mid_size' => 1,
                    'type' => 'list'
            ));
            echo str_replace( "<ul class='page-numbers'>", '<ul class="pagination">', $paginacion );
    ?> 
</div>
<?php wp_reset_query(); ?>


<?php
//get_sidebar();
get_footer();

?>