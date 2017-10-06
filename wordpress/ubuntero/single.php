<?php
get_header();
?>
	<div id="content">
		<?php if ( have_posts() ):
		while( have_posts() ): the_post(); ?>
		<div <?php post_class(); ?>>
			<?php get_template_part('adstop'); ?>

			<h1><a href="<?php the_permalink(); ?>" title="<?php esc_attr( the_title() ); ?>"><?php the_title(); ?></a></h1>
			<div class="post-utility">
				<p><?php _e( 'Categoria' ); ?>: <?php if ( get_the_category() ) echo get_the_category_list( ', ' ); else _e( 'Sem categoria' ); echo ' | ' . __( 'Palavras-chave' );?>: <?php if ( !get_the_tags() ) _e( 'Sem palavras-chave' ); else echo get_the_tag_list( '', ', ' ); ?> </p>
			</div>

			<div class="entry-meta">
				<div class="commentbalao sprite"><?php comments_popup_link(__('0'), __('1'), __('%'),'commentslink', __('off')); ?></div>
			</div>

			<div class="entry">
				<?php the_content(); ?>
			</div>

			<div class="post-utility">
				<p align="right">Publicado em <?php $mb_date = explode( '/', get_the_date( 'd/m/Y' ) ); the_time('j \d\e\ F \d\e\ Y'); ?> | <?php comments_popup_link( __( 'Deixe seu comentário' ), __( '1 Comentário' ), __( '% Comentários' ), 'comments', __( 'Comentários desativados' ) ); ?></p>
			</div>

			<div class="share">
				<span style="margin-top:8px;">Compartilhe</span>
				<span><a href="http://twitter.com/intent/tweet?text=<?php echo urlencode(get_the_title());?>&url=<?php the_permalink();?>&via=Ubunterobr&related=Ubunterobr" title="Twittar" width="24" rel="nofollow" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/icon-twitter.png" alt="Twittar" width="24" /></a> <a href="http://www.facebook.com/share.php?v=4&src=bm&u=<?php the_permalink();?>&t=<?php the_title();?>" title="Compartilhar no Facebook" rel="nofollow" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/icon-facebook.png" alt="Curtir" width="24" /></a> <a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" title="Compartilhar no Google Plus" rel="nofollow" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/icon-googleplus.png" alt="Google Plus" width="24" /></a> <a href="http://promote.orkut.com/preview?nt=orkut.com&tt=<?php the_title(); ?>&du=<?php the_permalink(); ?>" title="Promover" rel="nofollow" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/icon-orkut.png" alt="Promover" width="24" /></a></span>
				<span><iframe src="http://www.facebook.com/plugins/like.php?href=<?php echo urlencode(get_permalink($post->ID)); ?>&amp;layout=button_count&amp;show_faces=false&amp;width=85&amp;action=like&amp;colorscheme=light" scrolling="no" frameborder="0" allowTransparency="true" style="border:none; overflow:hidden; width:85px; height:20px; margin-top:7px;"></iframe></span>
				<span style="margin-top:7px;">
				<script type="text/javascript">
					window.___gcfg = {lang: 'pt-BR'};
					(function() {
						var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
						po.src = 'https://apis.google.com/js/plusone.js';
						var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
					})();
					</script>
					<g:plusone size="medium"></g:plusone>
				</span>
			</div>

			<div class="autor">
				<img src="<?php bloginfo('template_url'); ?>/images/<?php the_author_id(); ?>.jpg" width="80" alt="<?php the_author(); ?>" class="autorimg" />
				<p><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" title="<?php printf( esc_attr__( 'Mais pubicações de %s' ), get_the_author() ); ?>"><?php the_author(); ?></a></p>
				<p><?php the_author_description(); ?></p>
				<p><?php if ( get_the_author_meta('twitter') ) : ?> <a class="left autorsocial autortwitter" href="<?php the_author_meta('twitter'); ?>" title="Twitter"></a><?php endif; ?> <?php if ( get_the_author_meta('facebook') ) : ?> <a class="left autorsocial autorfacebook" href="<?php the_author_meta('facebook'); ?>" title="Facebook"></a><?php endif; ?> <?php if ( get_the_author_meta('gplus') ) : ?> <a class="left autorsocial autorgoogleplus" href="<?php the_author_meta('gplus'); ?>?rel=author" target="_blank" title="Google Plus"></a><?php endif; ?> <span class="right"><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" title="<?php printf( esc_attr__( 'Mais pubicações de %s' ), get_the_author() ); ?>">Mais posts do autor (<?php echo get_usernumposts( get_the_author_meta( 'ID' ) ); ?>)</a></span></p>
			</div>

			<?php get_template_part('adsbottom'); ?>

			<?php
			// post's relacionados
			$categories = get_the_category($post->ID);
			if ($categories) {  $category_ids = array();
				foreach($categories as $individual_category)
					$category_ids[] = $individual_category->term_id;
					$args=array(
					'category__in' => $category_ids,
					'post__not_in' => array($post->ID),
					'showposts'=>4, // Number of related posts that will be shown.
					'caller_get_posts'=>1
					);
					$my_query = new wp_query($args);

					if( $my_query->have_posts() ) {
						echo '
					<div class="related-posts">
						<h3>Posts relacionados</h3>
						';
						while ($my_query->have_posts()) {
							$my_query->the_post(); ?>
						<div class="related">
							<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail( array( 120, 120 ) ); } else { _e('<img src="') . bloginfo('template_url') . _e('/images/ubuntero_144.png" width="120" alt="Ubuntero - Dicas e Tutoriais sobre Ubuntu" />'); } ?><p><?php the_title(); ?></p></a>
						</div>

						<?php
						}
						echo '<div class="clear"></div>

					</div>';
			}
			}
			wp_reset_query(); // aqui resetamos a query dos post's relacionados
			?>

		</div>

		<?php
		comments_template(); ?>
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
