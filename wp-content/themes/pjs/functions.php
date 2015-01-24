<?php

// registrar menus
function register_my_menus() {
	register_nav_menus(
		array(
			'main-menu' => __( 'Main Menu' ),
			'extra-menu' => __( 'Extra Menu' )
			)
		);
}
add_action( 'init', 'register_my_menus' );

// extraer primera imagen del post
function get_image_post($size,$id_post=''){
    global $more;
    preg_match('/wp-image-([0-9]*)/', get_post($id_post)->post_content, $imag);
    if( !empty($imag)){
        $id_imagen = (integer)$imag[1];
        $img = get_image_tag($id_imagen, get_post($id_post)->post_title, get_post($id_post)->post_title, '',$size); 
    } else {
        $img = '';
    }
    return $img;
}

// shortcode para glyphicons
function glyphicon_func( $atts ) {
	return '<span class="glyphicon glyphicon-'.$atts['nombre'].'"></span>';
}
add_shortcode('glyphicon', 'glyphicon_func');


// obtener fecha de publicacion en formato facebook
function get_elapsed_time($id_post = ''){
    $time = 0;
    $time = current_time('timestamp') - get_the_time('U', $id_post);
    $time_p = array(
        array(60*60*24,__('d','gs'),__('d','gs')),
        array(60*60,__('h','gs'),__('h','gs')),
        array(60,__('m','gs'),__('m','gs')),
        array(1,__('s','gs'),__('s','gs'))
    );
    if($time <= 172800){
        for($i = 0; $i < count($time_p);$i++){
            $seconds = $time_p[$i][0];
            if(($count = floor($time/$seconds)) != 0)
                break;
            
        }
        $output = (1 == $count ) ? '1 '. $time_p[$i][1] : $count . ' ' . $time_p[$i][2];
        
        if( !(int)trim($output)){
            $output = '0 '.__('seconds','gs');
        }
        
        //$output .= __(' ago','wpradio');
        
        return 'Hace '. $output;
        //return 'Hace ' . human_time_diff(get_the_time('U', $id_post),current_time('timestamp'));
    } else {
        return get_the_time('d/m/Y', $id_post);
    }
}

//Gets post cat slug and looks for single-[cat slug].php and applies it
add_filter('single_template', create_function(
        '$the_template',
        'foreach( (array) get_the_category() as $cat ) {
                if ( file_exists(TEMPLATEPATH . "/single-{$cat->slug}.php") )
                return TEMPLATEPATH . "/single-{$cat->slug}.php"; }
        return $the_template;' )
);

// ofuscador de direcciones de email
function mail_shortcode_func( $atts, $content = null){
    if( !is_email($content) ){
        return;
    } else {
        $mail = $content;
        $element = explode('@', $mail);
        //return antispambot( $content );
        return $element[0].'@<span style="display:none;">nulo</span>'.$element[1];
    }
    
}
add_shortcode('email', 'mail_shortcode_func');

// obtener ratro o ruta del post actual
/*function get_breadcrumb() {
    global $post;

    $trail = '';
    $page_title = get_the_title($post->ID);

    if($post->post_parent) {
        $parent_id = $post->post_parent;

        while ($parent_id) {
            $page = get_page($parent_id);
            $breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a> » ';
            $parent_id = $page->post_parent;
        }

        $breadcrumbs = array_reverse($breadcrumbs);
        foreach($breadcrumbs as $crumb) $trail .= $crumb;
    }

    $trail .= $page_title;
    $trail .= '';

    return $trail;  
}*/

// borrar estilo por defecto de galeria
add_filter( 'use_default_gallery_style', '__return_false' );