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
