<?php
get_header();
?>
	<div id="content">
		<div class="post">
			<h1 id="archive" class="t1">
			<?php
			if ( is_day() )
				printf( __( 'Publicações do dia: <span>%s</span>' ) , get_the_date() );
			else if ( is_month() )
				printf( __( 'Publicações do mês: <span>%s</span>' ) , get_the_date( 'F \d\e\ Y' ) );
			else if ( is_year() )
				printf( __( 'Publicações do ano: <span>%s</span>' ) , get_the_date( 'Y' ) );
			else if ( is_tag() )
				printf( __( 'Publicações com palavra-chave: <span>%s</span>' ) , single_tag_title( '', false ) );
			else if ( is_category() )
				printf( __( 'Publicações da categoria: <span>%s</span>' ) , single_cat_title( '', false ) );
			else if ( is_author() )
				printf( __( 'Publicações de: <span>%s</span>' ) , get_the_author()  );
			else
				_e( 'Publicações do Blog' );
			?>
			</h1>

			<?php get_template_part('adstop'); ?>

		</div>

		<?php if ( have_posts() ):
		while( have_posts() ): the_post(); ?>
		<div class="post">
			<h2 id="archive" class="t2"><a href="<?php the_permalink(); ?>" title="<?php esc_attr( the_title() ); ?>"><?php the_title(); ?></a></h2>
			<div class="entry">
				<?php if ( has_post_thumbnail()) : ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail( array( 120, 100 ) ); ?></a>
				<?php endif; ?>
				<?php the_excerpt(); ?>
			</div>

			<div class="post-utility">
				<p><?php _e( 'Categoria' ); ?>: <?php if ( get_the_category() ) echo get_the_category_list( ', ' ); else _e( 'Sem categoria' ); echo ' | ' . __( 'Palavras-chave' );?>: <?php if ( !get_the_tags() ) _e( 'Sem palavras-chave' ); else echo get_the_tag_list( '', ', ' ); ?> </p>
			</div>
			<div class="entry-meta">
				<p><?php _e( 'Por ' ); ?> <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" title="<?php printf( esc_attr__( 'Mais posts de %s' ), get_the_author() ); ?>"><?php the_author(); ?></a> em <?php the_time('j \d\e\ F \d\e\ Y'); ?> | <?php comments_popup_link( __( 'Deixe um comentário' ), __( '1 Comentário' ), __( '% Comentários' ), 'comments', __( 'Comentários desativados' ) ); ?> | Divulgue <a href="http://twitter.com/intent/tweet?text=<?php echo urlencode(get_the_title());?>&url=<?php the_permalink();?>&via=Ubunterobr&related=Ubunterobr" title="Twittar" width="24" rel="nofollow" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/icon-twitter.png" alt="Twittar" width="24" /></a> <a href="http://www.facebook.com/share.php?v=4&src=bm&u=<?php the_permalink();?>&t=<?php the_title();?>" title="Compartilhar no Facebook" rel="nofollow" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/icon-facebook.png" alt="Curtir" width="24" /></a> <a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" title="Compartilhar no Google Plus" rel="nofollow" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/icon-googleplus.png" alt="Google Plus" width="24" /></a> <a href="http://promote.orkut.com/preview?nt=orkut.com&tt=<?php the_title(); ?>&du=<?php the_permalink(); ?>" title="Promover" rel="nofollow" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/icon-orkut.png" alt="Promover" width="24" /></a></p>
			</div>
		</div>
		<?php endwhile; ?>
		<?php post_pagination();?>
		<?php else: ?>
			<?php get_template_part('no-results'); ?>
		<?php endif; ?>

		<?php get_template_part('adsbottom'); ?>

	</div>

	<?php
	get_sidebar();
	?>

<?php
get_footer();
?>
