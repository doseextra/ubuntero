---
title: Atualizando o Libreoffice via PPA
author: Ivan Brasil Fuzzer
type: post
date: 2011-11-09T13:14:41+00:00
url: /atualizando-o-libreoffice-via-ppa/
categories:
  - Ubuntu
tags:
  - LibreOffice
  - Linux
  - suite de escritorio
  - Ubuntu

---
<p style="text-align: center;">
  <a href="http://www.ubuntero.com.br/wp-content/uploads/2011/11/LibO_Logo_Highres_Color_2.png"><img class="alignnone size-medium wp-image-2942" title="LibO_Logo_Highres_Color_2" src="http://www.ubuntero.com.br/wp-content/uploads/2011/11/LibO_Logo_Highres_Color_2-300x76.png" alt="" width="300" height="76" /></a>
</p>

O Ubuntu costuma ter versões novas dos programas, mas algumas atualizações podem demorar um pouco para entrar na distribuição e outras podem não entrar. No caso do LibreOffice temos um PPA que nos ajuda a manter a suíte de escritório sempre atualizada.

Para adicionar o PPA abra o terminal pressionando Ctrl+Alt+t e digite os seguintes comandos:

<pre class="brush:shell">sudo apt-add-repository ppa:libreoffice/ppa</pre>

Pressione Enter quando for pedido e digite os seguintes comandos após terminar de adicionar o PPA:

<pre class="brush:shell">sudo apt-get update
sudo apt-get dist-upgrade</pre>