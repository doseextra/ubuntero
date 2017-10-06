	<div id="footer">
		<ul class="left">
			<li><a href="<?php echo get_option('home');?>">Home</a></li>
			<?php wp_list_pages('title_li=','echo=0') ?>
			<li>Movido com <a href="http://www.wordpress.org" target="_blank" rel="nofollow" title="Site oficial do Wordpress">Wordpress</a>. Tema desenvolvido pela equipe <a href="http://www.ubuntero.com.br">Ubuntero</a>.</li>
		</ul>
		<ul class="right tright">
			<li><strong>Ubuntu</strong> e <strong>Canonical</strong> são marcas registradas da Canonical Ltd.</li>
			<li><a href="http://creativecommons.org/licenses/by/3.0/br/" target="_blank" rel="nofollow" title="Conteúdo sob licença Creative Commons de Atribuição (BY)"><img src="<?php bloginfo('template_directory'); ?>/images/cc-by.png" alt="CC-BY" width="80" /></a></li>
		</ul>

		<?php //echo '<br />' .get_num_queries() . ' consultas no banco de dados (querys) e ' .timer_stop() .'s para carregar.'; ?>

	</div>

</div>
<?php wp_footer(); ?>
</body>
</html>

