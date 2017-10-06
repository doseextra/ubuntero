<?php
get_header();
?>
	<div id="content">
			<div class="post">

				<div class="entry">
					<h1><?php _e( 'Página não encontrada' ); ?></h1>

					<?php get_template_part('adstop'); ?>

					<p>Esta página pode ter sido apagada ou nunca ter existido. Verifique se você digitou o endereço correto.</p>
					<p>Que tal fazer uma pesquisa no blog?</p>
					<h3>Busca</h3>
					<?php get_search_form(); ?>

					<?php get_template_part('adsbottom'); ?>

				</div>

			</div>
	</div>

	<?php
	get_sidebar();
	?>

<?php
get_footer();
?>

