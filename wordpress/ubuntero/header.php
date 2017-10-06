<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" <?php language_attributes(); ?> xmlns:x2="http://www.w3.org/2002/06/xhtml2" xmlns:fb="http://ogp.me/ns/fb#">
<head profile="http://gmpg.org/xfn/11" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
<meta http-equiv="content-type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />
<meta http-equiv="content-language" content="<?php bloginfo('language'); ?>" />
<?php if (have_posts()):while(have_posts()):the_post(); endwhile; endif;?>
<title><?php if (is_front_page() || is_home() ) {
	bloginfo('name') . _e(' - ') . bloginfo('description');
} elseif (is_single() || is_page() ) {
	single_post_title() . _e(' - ') . bloginfo('name');
} elseif ( is_category() ) {
	_e('Publicações da categoria: ') . single_cat_title() . _e(' - '); if ( $paged < 2 ) { bloginfo('name'); } else { _e(' Página ' . $paged . ' - ') . bloginfo('name'); }
} elseif ( is_tag() ) {
	_e('Publicações com palavra-chave: ') . single_tag_title() . _e(' - '); if ( $paged < 2 ) { bloginfo('name'); } else { _e(' Página ' . $paged . ' - ') . bloginfo('name'); }
} elseif (is_search() ) {
	_e('Resultados da busca por: "'); echo wp_specialchars($s); _e('" no '); if ( $paged < 2 ) { bloginfo('name'); } else { _e(' Página ' . $paged . ' - ') . bloginfo('name'); }
} elseif (is_day()) {
	_e('Arquivos do dia ') . the_time('j \d\e\ F \d\e\ Y') . _e(' - '); if ( $paged < 2 ) { bloginfo('name'); } else { _e(' Página ' . $paged . ' - ') . bloginfo('name'); }
} elseif (is_month()) {
	_e('Arquivos do mês de ') . the_time('F \d\e\ Y') . _e(' - '); if ( $paged < 2 ) { bloginfo('name'); } else { _e(' Página ' . $paged . ' - ') . bloginfo('name'); }
} elseif (is_year()) {
	_e('Arquivos do ano ') . the_time('Y') . _e(' - '); if ( $paged < 2 ) { bloginfo('name'); } else { _e(' Página ' . $paged . ' - ') . bloginfo('name'); }
} elseif (is_author()) {
	_e('Publicações de ') . wp_title('',true) . _e(' - '); if ( $paged < 2 ) { bloginfo('name'); } else { _e(' Página ' . $paged . ' - ') . bloginfo('name'); }
}
?>
</title>
<meta name="description" content="<?php if ( is_single() ) {
	strip_tags(get_the_excerpt($post->ID));
} elseif (is_page()) {
	echo dynamic_meta_description();
} elseif (is_home()) {
	bloginfo('name') . _e(' - ') . bloginfo('description');
} elseif ( is_category() ) {
	_e('Publicações da categoria: ') . single_cat_title() . _e(' - ') . bloginfo('name') . _e(' - ') . bloginfo('description');
} elseif ( is_tag() ) {
	_e('Publicações com palavra-chave: ') . single_tag_title() . _e(' - ') . bloginfo('name') . _e(' - ') . bloginfo('description');
} elseif (is_search() ) {
	_e('Resultados da busca por: &#8220;'); echo wp_specialchars($s); _e('&#8221; no ') . bloginfo('name') . _e(' - ') . bloginfo('description');
} elseif (is_day()) {
	_e('Arquivos do dia ') . the_time('j \d\e\ F \d\e\ Y') . _e(' - ') . bloginfo('name') . _e(' - ') . bloginfo('description');
} elseif (is_month()) {
	_e('Arquivos do mês de ') . the_time('F \d\e\ Y'). _e(' - ') . bloginfo('name') . _e(' - ') . bloginfo('description');
} elseif (is_year()) {
	_e('Arquivos do ano ') . the_time('Y') . _e(' - ') . bloginfo('name') . _e(' - ') . bloginfo('description');
} elseif (is_author()) {
	_e('Publicações de ') . wp_title('',true) . _e(' - ') . bloginfo('name') . _e(' - ') . bloginfo('description');
} ?>" />

<!-- viewport meta to reset iPhone inital scale -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--[if lt IE 9]>
<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->

<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css" />
<link rel="alternate" type="application/rss+xml" title="<?php esc_attr( bloginfo('name') ); ?> - <?php esc_attr( bloginfo('description') ); ?> - RSS" href="<?php bloginfo('rss2_url') ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php esc_attr( bloginfo('name') ); ?> - <?php esc_attr( bloginfo('description') ); ?> - Atom" href="<?php bloginfo('atom_url') ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php
// Header para Facebook -----------------------------------------
//echo '<meta property="fb:app_id" content="your_fb_app_id" />';
//echo '<meta property="fb:admins" content="your_fb_admin_id" />';
if (is_single()) {
?>
<meta property="og:url" content="<?php the_permalink() ?>"/>
<meta property="og:title" content="<?php single_post_title(''); ?>" />
<meta property="og:description" content="<?php echo strip_tags(get_the_excerpt($post->ID)); ?>" />
<meta property="og:type" content="article" />
<meta property="og:image" content="<?php if (function_exists('catch_that_image')) { echo catch_that_image(); }?>" />
<meta property="og:image" content="<?php bloginfo('template_url'); ?>/images/logo-ubuntero.png" />
<?php
} else {
?>
<meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
<meta property="og:description" content="<?php bloginfo('description'); ?>" />
<meta property="og:type" content="website" />
<meta property="og:image" content="<?php bloginfo('template_url'); ?>/images/logo-ubuntero.png" />
<?php
}
// Fim Header para Facebook -------------------------------------
wp_head(); // chamar os plugins ativos
?>

</head>
<body>
<div id="pagewrap">

	<div id="header">

		<div id="menu">
			<ul>
				<li><a href="<?php echo get_option('home'); ?>">Home</a></li>
				<?php wp_list_pages('exclude=48&title_li=') ?>
			</ul>
		</div>

		<p class="logo"><a href="<?php bloginfo('url'); ?>" title="<?php esc_attr( bloginfo('name') ); ?> - <?php esc_attr( bloginfo('description') ); ?>"><img src="<?php bloginfo('template_url'); ?>/images/logo-ubuntero.png" alt="<?php esc_attr( bloginfo('name') ); ?>" /></a><span><?php bloginfo('description'); ?></span></p>


	</div>