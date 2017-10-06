
					<div class="post no-results">
						<h1><?php printf( __( 'Resultados da busca por: <span> %s</span>' ), get_search_query() ); ?></h1>
						<p><?php _e('Ops! Nenhum resultado encontrado!');?></p>
						<p>Tente fazer uma pesquisa em todo o Blog:</p>
						<?php get_search_form(); ?>

						<?php get_template_part('adsbottom'); ?>
					</div>
