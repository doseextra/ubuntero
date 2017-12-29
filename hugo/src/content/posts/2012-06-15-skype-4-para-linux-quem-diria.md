---
title: Skype 4 para Linux, quem diria?
author: Ivan Brasil Fuzzer
type: post
date: 2012-06-15T11:47:00+00:00
url: /skype-4-para-linux-quem-diria/
categories:
  - Ubuntu
tags:
  - Linux
  - Skype
  - Ubuntu

---
Enfim a Microsoft queimou minha língua e lançou uma nova versão do skype para Linux, e deixou a nomenclatura de Beta, não que isto faça alguma diferença.

As principais mudanças desta nova versão são:

  * Melhora na janela de bate-papo e chamadas
  * Melhora na qualidade de áudio e vídeo
  * Suporte adicional a webcam
  * Melhora na sincronização de bate-papo
  * Novos ícones
  * Abas nas conversas

Para instalar esta nova versão, faça o download no link abaixo e execute os seguintes comandos para remover a versão anterios:(apenas para sermos mais rápidos).

<p style="text-align: center;">
  <a href="http://skype.com/intl/en/get-skype/on-your-computer/linux/"><img class="alignnone size-full wp-image-3622" title="downloadonubuntubutton" src="http://www.ubuntero.com.br/wp-content/uploads/2012/06/downloadonubuntubutton.png" alt="" width="122" height="49" /></a>
</p>

Abra o terminal pressionando Ctrl+Alt+t e digite os seguintes comandos:

<pre class="brush:shell">sudo dpkg --purge skype
sudo apt-get autoremove</pre>

Vá para a pasta onde baixou o skype, vou considerar que foi baixado na pasta Downloads e execute os seguintes comandos:

**Para 64 bits**

<pre class="brush:shell">cd ~/Downloads
sudo dpkg -i skype-ubuntu_4.0.0.7-1_amd64.deb
sudo apt-get -f install</pre>

**Para 32 bits**

<pre class="brush:shell">cd ~/Downloads
sudo dpkg -i skype-ubuntu_4.0.0.7-1_i386.deb
sudo apt-get -f install</pre>

Talvez não sejam necessários todos os comandos, mas se os executar terá garantia de funcionamento. Agora é só utilizar o skype como sempre utilizou.

<p style="text-align: center;">
  <a href="http://www.ubuntero.com.br/wp-content/uploads/2012/06/Captura-de-tela-de-2012-06-15-082234.png"><img class="alignnone size-thumbnail wp-image-3623" title="Janela de contatos skype" src="http://www.ubuntero.com.br/wp-content/uploads/2012/06/Captura-de-tela-de-2012-06-15-082234-106x150.png" alt="" width="106" height="150" /></a> <a href="http://www.ubuntero.com.br/wp-content/uploads/2012/06/Captura-de-tela-de-2012-06-15-082250.png"><img class="alignnone size-thumbnail wp-image-3624" title="Janela sobre o skype" src="http://www.ubuntero.com.br/wp-content/uploads/2012/06/Captura-de-tela-de-2012-06-15-082250-148x150.png" alt="" width="148" height="150" /></a> <a href="http://www.ubuntero.com.br/wp-content/uploads/2012/06/Captura-de-tela-de-2012-06-15-082317.png"><img class="alignnone size-thumbnail wp-image-3625" title="Janela opções do skype" src="http://www.ubuntero.com.br/wp-content/uploads/2012/06/Captura-de-tela-de-2012-06-15-082317-150x71.png" alt="" width="150" height="71" /></a> <a href="http://www.ubuntero.com.br/wp-content/uploads/2012/06/Captura-de-tela-de-2012-06-15-082332.png"><img class="alignnone size-thumbnail wp-image-3626" title="Janela contatos skeyp com contato selecionado" src="http://www.ubuntero.com.br/wp-content/uploads/2012/06/Captura-de-tela-de-2012-06-15-082332-106x150.png" alt="" width="106" height="150" /></a> <a href="http://www.ubuntero.com.br/wp-content/uploads/2012/06/Captura-de-tela-de-2012-06-15-082346.png"><img class="alignnone size-thumbnail wp-image-3627" title="Janela de bate papo skype" src="http://www.ubuntero.com.br/wp-content/uploads/2012/06/Captura-de-tela-de-2012-06-15-082346-150x70.png" alt="" width="150" height="70" /></a> <a href="http://www.ubuntero.com.br/wp-content/uploads/2012/06/Captura-de-tela-de-2012-06-15-082407.png"><img class="alignnone size-thumbnail wp-image-3628" title="Janela de chamada" src="http://www.ubuntero.com.br/wp-content/uploads/2012/06/Captura-de-tela-de-2012-06-15-082407-139x150.png" alt="" width="139" height="150" /></a> <a href="http://www.ubuntero.com.br/wp-content/uploads/2012/06/Captura-de-tela-de-2012-06-15-082418.png"><img class="alignnone size-thumbnail wp-image-3629" title="Janela de chamada" src="http://www.ubuntero.com.br/wp-content/uploads/2012/06/Captura-de-tela-de-2012-06-15-082418-139x150.png" alt="" width="139" height="150" /></a>
</p>