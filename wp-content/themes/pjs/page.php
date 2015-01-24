<?php

get_header();


?>
<?php if (have_posts()) : while (have_posts()) : the_post();?>


<h1><?php the_title() ?></h1>
<?php the_content(); ?>

<?php
/*
if($post->post_parent == 0):
$section_id = empty($post->ancestors) ? $post->ID : end($post->ancestors);
$locations = get_nav_menu_locations();
$menu = wp_get_nav_menu_object($locations['menu-principal']);
$menu_items = wp_get_nav_menu_items($menu->term_id,array('post_parent' => $section_id) );

if(!empty($menu_items)){
    echo '<ul class="section-submenu">';
    foreach($menu_items as $menu_item){
        echo '<li><a href="'.$menu_item->url. '">'.$menu_item->title.'</a></li>';
    }
    echo '</ul>';
}
*/

$subpages = wp_list_pages(array(
	'child_of' => get_the_ID()
	,'title_li' => ''
	,'echo' => 0
));

if(!empty($subpages)){
	echo '<ul>',$subpages,'</ul>';
}

?>

<?php endwhile; endif; ?>
<?php
//get_sidebar();
get_footer();

?>