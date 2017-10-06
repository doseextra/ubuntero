<?php

remove_action('wp_head','wp_generator'); // remove a tag <meta name="generator" content="WordPress x.x.x" />

register_nav_menu( 'main-menu', 'Menu Principal' );

//  suporte para thumbnails
if ( function_exists('add_theme_support') )
add_theme_support('post-thumbnails');


/* WIDGETS */
if (function_exists('register_sidebar')) {
	register_sidebar(array(
		'name'          => 'Sidebar',
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	));
}

/* Gera name="description" da página/post com base no conteúdo*/
function dynamic_meta_description() {
	$rawcontent = get_the_content();
	if(empty($rawcontent)) {
		$rawcontent = htmlspecialchars(bloginfo('description'));
	} else {
		$rawcontent = apply_filters('the_content_rss', strip_tags($rawcontent));
		$rawcontent = preg_replace('/\[.+\]/','', $rawcontent);
		$chars = array("", "\n", "\r", "chr(13)",  "\t", "\0", "\x0B", "  " );
		$rawcontent = htmlspecialchars(str_replace($chars, " ", $rawcontent));
	}
	$texto = $rawcontent;
	$resumo=substr($texto,'0','180');
	$last=strrpos($resumo," ");
	$resumo=substr($resumo,0,$last);
	return $resumo."...";
}


/* PAGINAÇÃO */
function post_pagination($pages = '', $range = 4) {
	$showitems = ($range * 2)+1;
	global $paged;
	if(empty($paged)) $paged = 1;

	if($pages == '') {
		global $wp_query;
		$pages = $wp_query->max_num_pages;
		if(!$pages) {
			$pages = 1;
		}
	}

	if(1 != $pages) {
		echo '<div class="paginacao">Páginas: ';
		if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo '<a href="'.get_pagenum_link($paged - 1).'" class="current" rel="nofollow">&laquo;</a>';
		if($paged > 6 && $showitems < $pages) echo '<a href="'.get_pagenum_link(1).'" rel="nofollow">1</a> <span class="current">...</span>';

		for ($i=1; $i <= $pages; $i++) {
			if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )) {
				echo ($paged == $i)? '<span class="current">'.$i.'</span>':'<a href="'.get_pagenum_link($i).'" rel="nofollow">'.$i.'</a>';
			}
		}

		if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo '<span class="current">...</span> <a href="'.get_pagenum_link($pages).'" rel="nofollow">'.$pages.'</a>';
		if ($paged < $pages && $showitems < $pages) echo '<a href="'.get_pagenum_link($paged + 1).'" class="current" rel="nofollow">&raquo;</a>';
	echo '</div>';
    }
}
/* END PAGINAÇÃO */

/* wp_get_attachment_thumb_url() fallback   */
function catch_that_image() {
	global $post, $posts;
	$first_img = '';
	ob_start();
	ob_end_clean();
	$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
	$first_img = $matches [1] [0];
	if(empty($first_img)){
		//Defines a default image
		$first_img = bloginfo('template_url').'/images/ubuntero_144.png';
	}
	return $first_img;
}

/* delete css gallery */
add_filter('gallery_style',
create_function(
'$css',
'return preg_replace("#<style type=\'text/css\'>(.*?)</style>#s", "", $css);'
)
);
/* end delete css gallery */


/* tela de login personalizada */
function my_custom_login_logo() {
	echo '<style type="text/css">
		h1 a { background-image:url('.get_bloginfo('template_directory').'/images/logo-login.png) !important; }
	</style>';
}
add_action('login_head', 'my_custom_login_logo');

function loginpage_custom_link() {
	return 'http://www.ubuntero.com.br/';
}
add_filter('login_headerurl','loginpage_custom_link');

function change_title_on_logo() {
	return 'Ubuntero';
}
add_filter('login_headertitle', 'change_title_on_logo');
/* end tela de login personalizada */


/* adiciona campos no perfil do usuário */
function adicionar_campos_perfil ( $contactmethods ) {
	$contactmethods['twitter'] = 'Twitter';
	$contactmethods['facebook'] = 'Facebook';
	$contactmethods['gplus'] = 'Google Plus';
return $contactmethods;
}

add_filter('user_contactmethods','adicionar_campos_perfil', 10, 1);
/* end adiciona campos no perfil do usuário */


/* remove campos no perfil do usuário */
function remover_campos_perfil( $contactmethods ) {
	unset($contactmethods['aim']);
	unset($contactmethods['yim']);
return $contactmethods;
}

add_filter('user_contactmethods','remover_campos_perfil',10,1);
/* end remove campos no perfil do usuário */

/* adiciona opção nofollow nos links dos bookmarks */
function no_follow( $links ) {
    foreach($links as $link) {
       $link->link_rel .= ' nofollow';
       $link->link_rel = trim($link->link_rel);
    }
       return $links;
}
add_filter('get_bookmarks', 'no_follow');
/* end adiciona opção nofollow nos links dos bookmarks */
?>