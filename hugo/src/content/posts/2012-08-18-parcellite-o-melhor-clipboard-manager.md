---
title: Parcellite – O melhor clipboard manager
author: Anderson Henrique
type: post
date: 2012-08-18T22:40:16+00:00
url: /parcellite-o-melhor-clipboard-manager/
burl:
  - http://ads.tt/1k2L2w
  - http://ads.tt/1k2L2w
  - http://ads.tt/1k2L2w
  - http://ads.tt/1k2L2w
  - http://ads.tt/1k2L2w
  - http://ads.tt/1k2L2w
  - http://ads.tt/1k2L2w
  - http://ads.tt/1k2L2w
  - http://ads.tt/1k2L2w
  - http://ads.tt/1k2L2w
  - http://ads.tt/1k2L2w
  - http://ads.tt/1k2L2w
  - http://ads.tt/1k2L2w
  - http://ads.tt/1k2L2w
  - http://ads.tt/1k2L2w
  - http://ads.tt/1k2L2w
  - http://ads.tt/1k2L2w
  - http://ads.tt/1k2L2w
  - http://ads.tt/1k2L2w
  - http://ads.tt/1k2L2w
  - http://ads.tt/1k2L2w
  - http://ads.tt/1k2L2w
  - http://ads.tt/1k2L2w
  - http://ads.tt/1k2L2w
  - http://ads.tt/1k2L2w
  - http://ads.tt/1k2L2w
  - http://ads.tt/1k2L2w
  - http://ads.tt/1k2L2w
  - http://ads.tt/1k2L2w
  - http://ads.tt/1k2L2w
  - http://ads.tt/1k2L2w
  - http://ads.tt/1k2L2w
  - http://ads.tt/1k2L2w
  - http://ads.tt/1k2L2w
  - http://ads.tt/1k2L2w
  - http://ads.tt/1k2L2w
  - http://ads.tt/1k2L2w
  - http://ads.tt/1k2L2w
categories:
  - Ubuntu
tags:
  - clipboard
  - Linux
  - parcellite
  - Ubuntu

---
<p style="text-align: center;">
  <a href="http://www.ubuntero.com.br/wp-content/uploads/2012/08/Captura-de-tela-de-2012-08-18-191111.png"><img class="alignnone size-thumbnail wp-image-3900" title="Parcellite" src="http://www.ubuntero.com.br/wp-content/uploads/2012/08/Captura-de-tela-de-2012-08-18-191111-150x106.png" alt="" width="150" height="106" /></a>
</p>

Vou dar uma dica rápida agora que poderá agilizar a vida de muita gente. Para quem não sabe, um clipboard manager faz a gerência de tudo o que você copia e cola no seu computador. Isso serve para poder agilizar a vida de quem copia e cola a mesmo informação várias vezes.  Para instalá-lo, pode ir na própria Central de Programas do Ubuntu, ou então digitar:

<pre class="brush:shell">sudo apt-get install parcellite</pre>

A instalação é muito rápida. Se você utiliza o Unity, ele não vai aparecer no painel, então para tê-lo no mesmo, faça o seguinte:

<pre class="brush:shell">sudo apt-get install dconf-tools
dconf-editor</pre>

Após abrir o editor com o programa acima, vá em desktop, unity, panel e altere o **systray-whitelist** adicionando:

<pre class="brush:plain">, 'parcellite'</pre>

Lembre-se de dar um espaço entre a vírgula e os comandos entre aspas, e deverá funcionar.

Até o próximo post.

**Fonte:** http://silverwav.wordpress.com/2011/05/08/11-04-natty-enable-parcellite-in-system-tray/