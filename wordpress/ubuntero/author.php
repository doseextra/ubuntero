<?php
get_header(); ?>

	<div id="content">
		<div <?php post_class(); ?>>

	<?php
	if(have_posts()) the_post();

	// If a user has filled out their description, show a bio on their entries.
	if(get_the_author_meta('description')):
	?>
		<h1><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" title="Publicações de <?php echo get_the_author(); ?>"><?php echo get_the_author(); ?></a></h1>

			<div class="autor">
			<img src="<?php bloginfo('template_url'); ?>/images/<?php the_author_id(); ?>.jpg" width="80" alt="<?php the_author(); ?>" class="autorimg" />
			<p><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" title="<?php printf( esc_attr__( 'Mais pubicações de %s' ), get_the_author() ); ?>"><?php the_author(); ?></a></p>
			<p><?php the_author_description(); ?></p>
			<p><?php if ( get_the_author_meta('twitter') ) : ?> <a class="right autorsocial autortwitter" href="<?php the_author_meta('twitter'); ?>" title="Twitter"></a><?php endif; ?> <?php if ( get_the_author_meta('facebook') ) : ?> <a class="right autorsocial autorfacebook" href="<?php the_author_meta('facebook'); ?>" title="Facebook"></a><?php endif; ?> <?php if ( get_the_author_meta('gplus') ) : ?> <a class="right autorsocial autorgoogleplus" href="<?php the_author_meta('gplus'); ?>?rel=author" target="_blank" title="Google Plus"></a><?php endif; ?></p>
			</div>

		</div>

	<?php endif;
	rewind_posts();
	?>

	<?php get_template_part('adstop'); ?>
	<p style="margin:15px;"></p>

	<?php if ( have_posts() ):
			while( have_posts() ): the_post(); ?>
			<div class="post">
				<h2 id="archive" class="t2"><a href="<?php the_permalink(); ?>" title="<?php esc_attr( the_title() ); ?>"><?php the_title(); ?></a></h2>
				<div class="entry">
					<?php if ( has_post_thumbnail()) : ?>
					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail( array( 90, 100 ) ); ?></a>
					<?php endif; ?>
					<?php the_excerpt(); ?>
				</div>

				<div class="post-utility">
					<img src="<?php bloginfo('template_url'); ?>/images/<?php the_author_id(); ?>-mini.jpg" width="50" alt="<?php the_author(); ?>" class="autorimg" /><p><?php _e( 'Categoria' ); ?>: <?php if ( get_the_category() ) echo get_the_category_list( ', ' ); else _e( 'Sem categoria' ); echo ' | ' . __( 'Palavras-chave' );?>: <?php if ( !get_the_tags() ) _e( 'Sem palavras-chave' ); else echo get_the_tag_list( '', ', ' ); ?> </p>
				</div>
				<div class="entry-meta">
					<p><?php _e( 'Por ' ); ?> <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" title="<?php printf( esc_attr__( 'Mais posts de %s' ), get_the_author() ); ?>"><?php the_author(); ?></a> em <?php the_time('j \d\e\ F \d\e\ Y'); ?> &raquo; <?php comments_popup_link( __( 'Deixe um comentário' ), __( '1 Comentário' ), __( '% Comentários' ), 'comments', __( 'Comentários desativados' ) ); ?></p>
				</div>
			</div>
			<?php endwhile; ?>
			<?php post_pagination();?>
		<?php else: ?>
			<p><?php _e('O Autor ainda não fez publicações.'); ?></p>
		<?php endif; ?>

		<?php get_template_part('adsbottom'); ?>

	</div>

	<?php
	get_sidebar();
	?>

<?php
get_footer();
?>
