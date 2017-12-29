---
title: Menu Global no LibreOffice
author: Ivan Brasil Fuzzer
type: post
date: 2011-10-28T10:16:21+00:00
url: /menu-global-no-libreoffice/
categories:
  - Ubuntu
tags:
  - global menu
  - LibreOffice
  - Linux
  - menu global
  - Ubuntu

---
<p style="text-align: center;">
  <a href="http://www.ubuntero.com.br/wp-content/uploads/2011/10/Captura-de-tela-em-2011-10-28-081342.png"><img class="alignnone size-thumbnail wp-image-2856" title="Captura de tela em 2011-10-28 08:13:42" src="http://www.ubuntero.com.br/wp-content/uploads/2011/10/Captura-de-tela-em-2011-10-28-081342-150x105.png" alt="" width="150" height="105" /></a>
</p>

Na instalação padrão do Ubuntu, o LibreOffice não vem com o menu global funcionando. Para fazermos isto manualmente devemos executar um único comando.

Para isso abra o terminal pressionando Ctrl+Alt+t e digite o seguinte comando:

<pre class="brush:shell">sudo apt-get install lo-menubar</pre>

Para mim, aparentou não funcionar ao abrir o LibreOffice pela primeira vez após o comando. Fechei o programa e abri novamente e o LibreOffice então abriu com o menu global habilitado.