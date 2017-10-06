<?php
/*
Template Name: Mapa do Site
*/
?>

<?php 
get_header(); 
?>
	<div id="content">
		<?php if ( have_posts() ):
			while( have_posts() ): the_post(); ?>
			<div <?php post_class(); ?>>
				<h1><a href="<?php the_permalink(); ?>" title="<?php esc_attr( the_title() ); ?>"><?php the_title(); ?></a></h1>
				
				<div class="entry"> 
					<?php the_content(); ?>
					
					<h2>Busca</h2>
					<?php get_search_form(); ?>
					 
					<h2>Categorias</h2>
					<ul><?php wp_list_categories('title_li='); ?></ul>
					 
					<h2>Artigos</h2>
					<ul><?php wp_get_archives('type=postbypost'); ?></ul>
					 
					<h2>Páginas</h2>
					<ul><?php wp_list_pages('exclude=48&title_li='); ?></ul>
					 
					<h2>Arquivo mensal</h2>
					<ul><?php wp_get_archives('type=monthly'); ?></ul>
					 
					<h2>XML Sitemap</h2>
					<ul>
					<li><a href="<?php echo get_option('home');?>/sitemap.xml">clique aqui</a></li>
					</ul>

				</div>
				
			</div>
			<?php comments_template(); ?>
			<?php endwhile; ?>
		<?php else: ?>
			<?php get_template_part('no-results'); ?>
		<?php endif; ?>
	</div>

	<?php 
	get_sidebar(); 
	?>

<?php 
get_footer(); 
?>
