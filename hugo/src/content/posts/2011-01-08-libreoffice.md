---
title: LibreOffice
author: Ivan Brasil Fuzzer
type: post
date: 2011-01-08T11:00:26+00:00
url: /libreoffice/
categories:
  - Ubuntu
tags:
  - LibreOffice
  - Linux
  - Ubuntu

---
[<img class="alignleft size-thumbnail wp-image-1303" title="LO_StartCenter_Small" src="http://www.ubuntero.com.br/wp-content/uploads/2011/01/LO_StartCenter_Small-150x120.png" alt="" width="150" height="120" />][1]Dizem as más e boas línguas que o Ubuntu 11.04 virá com o LibreOffice no lugar do Oracle Openoffice. Ainda não pude ver isto na versão alpha 1, quem sabe na alpha 2 já tenhamos esta mudança que considero bem acertada.

Para você que não aguenta esperar nem o lançamento de uma versão final do LibreOffice, vamos ver agora como é fácil instalar o LibreOffice no seu Ubuntu 10.10.

No artigo anterior mostramos alguns PPA&#8217;s interessantes e agora vamos nos utilizar mais uma vez dele para fazermos a instalação de um programa.

Para instalar o LibreOffice digite os seguintes comandos no terminal:

<pre class="brush:shell">sudo add-apt-repository ppa:libreoffice/ppa
sudo apt-get update && sudo apt-get install libreoffice</pre>

O download vai demorar um bom tempo dependendo da velocidade de sua internet.

Se você utiliza o Ubuntu, com Gnome, ainda terá que digitar mais este comando:

<pre class="brush:as3">sudo apt-get install libreoffice-gnome</pre>

Caso você utilize o KUbuntu, com KDE, o comando é este:

<pre class="brush:as3">sudo apt-get install libreoffice-kde</pre>

Caso queira saber mais detalhes sobre o desenvolvimento do LibreOffice, recomendo que visite o site do projeto em <http://www.documentfoundation.org/>. O site está em inglês.

**Imagens retiradas do site do projeto:**

<p style="text-align: center;">
  <a href="http://www.ubuntero.com.br/wp-content/uploads/2011/01/agenda-small.png"><img class="alignnone size-thumbnail wp-image-1304" title="agenda-small" src="http://www.ubuntero.com.br/wp-content/uploads/2011/01/agenda-small-150x120.png" alt="" width="150" height="120" /></a> <a href="http://www.ubuntero.com.br/wp-content/uploads/2011/01/base-small.png"><img class="alignnone size-thumbnail wp-image-1305" title="base-small" src="http://www.ubuntero.com.br/wp-content/uploads/2011/01/base-small-150x120.png" alt="" width="150" height="120" /></a> <a href="http://www.ubuntero.com.br/wp-content/uploads/2011/01/draw-small.png"><img class="alignnone size-thumbnail wp-image-1307" title="draw-small" src="http://www.ubuntero.com.br/wp-content/uploads/2011/01/draw-small-150x120.png" alt="" width="150" height="120" /></a> <a href="http://www.ubuntero.com.br/wp-content/uploads/2011/01/extrusion-small.png"><img class="alignnone size-thumbnail wp-image-1308" title="extrusion-small" src="http://www.ubuntero.com.br/wp-content/uploads/2011/01/extrusion-small-150x120.png" alt="" width="150" height="120" /></a> <a href="http://www.ubuntero.com.br/wp-content/uploads/2011/01/hypocycloid-small.png"><img class="alignnone size-thumbnail wp-image-1309" title="hypocycloid-small" src="http://www.ubuntero.com.br/wp-content/uploads/2011/01/hypocycloid-small-150x120.png" alt="" width="150" height="120" /></a> <a href="http://www.ubuntero.com.br/wp-content/uploads/2011/01/math-small.png"><img class="alignnone size-thumbnail wp-image-1310" title="math-small" src="http://www.ubuntero.com.br/wp-content/uploads/2011/01/math-small-150x120.png" alt="" width="150" height="120" /></a> <a href="http://www.ubuntero.com.br/wp-content/uploads/2011/01/slideshow-small.png"><img class="alignnone size-thumbnail wp-image-1311" title="slideshow-small" src="http://www.ubuntero.com.br/wp-content/uploads/2011/01/slideshow-small-150x120.png" alt="" width="150" height="120" /></a>
</p>

<p style="text-align: left;">
  Dica do para Lueneberg para deixar o LibreOffice em português do Brasil. Digite no terminal o comando:
</p>

<p style="text-align: left;">
  <pre class="brush:shell">sudo apt-get install libreoffice-l10n-pt-br</pre>
  
  <p style="text-align: left;">
    Caso ocorra algum erro volte ao terminal e digite o comando abaixo(dica do Hamacker):
  </p>
  
  <p style="text-align: left;">
    <pre class="brush:shell">sudo dpkg -i --force-all /var/cache/apt/archives/libreoffice-l10n-pt-br_1%3a3.3.0~rc2-3maverick2_all.deb</pre>

 [1]: http://www.ubuntero.com.br/wp-content/uploads/2011/01/LO_StartCenter_Small.png