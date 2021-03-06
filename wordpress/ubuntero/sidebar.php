<div id="sidebar">
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar') ) : ?>

	<div id="social" class="group">
		<div id="social-rss" class="social-box float-left social-box-margin">
			<p><a class="sprite trans" href="<?php bloginfo('rss2_url') ?>" title="Assinar Feed RSS"></a></p>
		</div>
		<div id="social-twitter" class="social-box float-left social-box-margin">
			<p><a class="sprite trans" href="http://twitter.com/Ubunterobr" target="_blank" rel="nofollow"></a></p>
		</div>
		<div id="social-facebook" class="social-box float-left social-box-margin">
			<p><a class="sprite trans" href="https://www.facebook.com/Ubunterobr" target="_blank" rel="nofollow"></a></p>
		</div>
		<div id="social-gplus" class="social-box float-left social-box-margin">
			<p><a class="sprite trans" href="https://plus.google.com/116904557812459236393" target="_blank" rel="publisher"></a></p>
		</div>
		<div id="social-youtube" class="social-box float-left social-box-last">
			<p><a class="sprite trans" href="http://www.youtube.com/user/ubunterobr" target="_blank" rel="nofollow"></a></p>
		</div>
	</div>

	<div class="side-box">
		<h3>Busca</h3>
		<?php get_search_form(); ?>
	</div>

	<div class="adssidebar">
		<!-- LOMADEE - BEGIN -->
			<script type="text/javascript" language="javascript">
				lmd_source="26153641";
				lmd_si="33338950";
				lmd_pu="22227150";
				lmd_c="BR";
				lmd_wi="300";
				lmd_he="250";
			</script>
			<script src="http://image.lomadee.com/js/ad_lomadee.js" type="text/javascript" language="javascript"></script>
		<!-- LOMADEE - END -->
	</div>

	<div class="side-box">
		<h3>Últimas novidades</h3>
		<ul>
			<?php get_archives('postbypost', 10); ?>
		</ul>
	</div>

	<div class="side-box">
		<h3>Opencast</h3>
		<form action="" class="side-archives">
			<label>
			<select onchange="document.location.href=this.options[this.selectedIndex].value;">
				<option value="" style="font-weight:bold;">Selecione o episódio</option>
				<?php
				/*
				$cont = 0;
				$exibir = 5; // numero de ítens que devem ser exibidos
				foreach(simplexml_load_file('http://www.ubuntero.com.br/feed/opencast/')->channel->item as $item) {
					if($cont < $exibir) {
						echo sprintf('<option value="%s" title="%s">%s</option>', $item->link, $item->title, $item->title);
				$cont++;
					}
				}*/
				foreach(simplexml_load_file('http://www.ubuntero.com.br/feed/opencast/')->channel->item as $item) {
					echo sprintf('<option value="%s" title="%s">%s</option>', $item->link, $item->title, $item->title);
				}
				?>
			</select>
			</label>
		</form>
	</div>

	<div class="side-box">
		<h3>Ubuntero no Facebook</h3>
		<iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FUbunterobr%2F&amp;width=300&amp;height=340&amp;colorscheme=light&amp;show_faces=true&amp;border_color=%23FFFFFF&amp;stream=false&amp;header=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:300px; height:340px;" allowTransparency="true"></iframe>
	</div>

	<div class="adssidebar">
		<!-- LOMADEE - BEGIN -->
			<script type="text/javascript" language="javascript">
				lmd_source="26153678";
				lmd_si="33338950";
				lmd_pu="22227150";
				lmd_c="BR";
				lmd_wi="300";
				lmd_he="250";
			</script>
			<script src="http://image.lomadee.com/js/ad_lomadee.js" type="text/javascript" language="javascript"></script>
		<!-- LOMADEE - END -->
	</div>

	<div class="side-box">
		<h3>Circule o Ubuntero no Google+</h3>
		<!-- Place this tag where you want the badge to render. -->
		<div class="g-plus" data-href="//plus.google.com/116904557812459236393" data-rel="publisher"></div>
		<!--<div class='g-plus' data-href='//plus.google.com/111568874553668418614' data-rel='author'></div>-->
		<!-- Place this tag after the last badge tag. -->
		<script type="text/javascript">
		window.___gcfg = {lang: 'pt-BR'};
		(function() {
			var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
			po.src = 'https://apis.google.com/js/plusone.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
		})();
		</script>
	</div>

	<div class="side-box">
		<h3>Arquivos</h3>
		<form action="" class="side-archives">
			<label>
			<select onchange="document.location.href=this.options[this.selectedIndex].value;">
				<option value="" style="font-weight:bold;">Selecione o Mês</option>
				<?php get_archives('monthly','','option'); ?>
			</select>
			</label>
		</form>
	</div>

	<div class="side-box">
		<h3>Youtube UbunteroBR</h3>
		<?php
		$channel_name	=	'ubunterobr';//Be sure to change this to your channel
		$count			=	1;//# of videos you want to show (MAX = 20)
		$em_width		=	295;//width of embedded player
		$em_height		=	250;//height of embedded player

		//The output...
		$sxml = simplexml_load_file("http://gdata.youtube.com/feeds/api/users/$channel_name/uploads?max-results=$count");
		foreach ($sxml->entry as $entry) {
			$vidKey = substr(strrchr($entry->id,'/'),1);
			echo '
			<div class="tcenter">
				<iframe width="'.$em_width.'" height="'.$em_height.'" src="http://www.youtube.com/embed/'.$vidKey.'" frameborder="0" allowfullscreen></iframe>
			</div>
			';
		}
		?>
		<ul>
			<li><a href="http://www.youtube.com/user/ubunterobr" title="Canal do Ubuntero no Youtube" target="_blank">Canal do Ubuntero no Youtube</a></li>
		</ul>
	</div>

	<div class="side-box">
		<h3>Divulgue nosso Banner</h3>
		<p style="text-align:center; padding-bottom:10px;"><img class="banner-blog" src="<?php bloginfo('template_directory'); ?>/images/ubuntero-120x50.jpg" alt="ferramentas blog banner" /><br />
<textarea style="width:240px" name="textarea" onmouseover="this.focus()" onfocus="this.select()" rows="3" cols="15">&lt;a href="http://www.ubuntero.com.br/"&gt;
&lt;img border="0" style="border:1px solid #CCC;" src="<?php bloginfo('template_directory'); ?>/images/ubuntero-120x50.jpg" title="Ubuntero - Dicas e tutorias sobre Ubuntu" alt="Ubuntero.com.br" /&gt;&lt;/a&gt;</textarea>
		</p>
	</div>

	<div class="side-box links">
		<h3>Links</h3>
		<ul>
			<?php get_links(-1, '<li>', '</li>', ' - '); ?>
		</ul>
	</div>

	<div class="adssidebar">
		<!-- LOMADEE - BEGIN -->
			<script type="text/javascript" language="javascript">
				lmd_source="26153688";
				lmd_si="33338950";
				lmd_pu="22227150";
				lmd_c="BR";
				lmd_wi="300";
				lmd_he="250";
			</script>
			<script src="http://image.lomadee.com/js/ad_lomadee.js" type="text/javascript" language="javascript"></script>
		<!-- LOMADEE - END -->
	</div>

	<?php endif; ?>
</div>
