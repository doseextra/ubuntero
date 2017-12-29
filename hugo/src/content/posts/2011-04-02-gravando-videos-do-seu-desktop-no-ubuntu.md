---
title: Gravando vídeos do seu desktop no Ubuntu
author: Renato
type: post
date: 2011-04-02T14:10:16+00:00
url: /gravando-videos-do-seu-desktop-no-ubuntu/
categories:
  - Ubuntu
tags:
  - gravar desktop
  - gravar tela
  - Linux
  - Ubuntu

---
Como sabemos, o Ubuntu tem uma nova versão lançada a cada seis meses. Há um calendário de lançamento da próxima (e revolucionária) versão [que publiquei aqui.][1] Com isso, muitos usuários acabam gravando o seu desktop contendo tutoriais e vídeos que ajudam toda a comunidade.

Há vários programas para gravar vídeos do seu desktop para Ubuntu. Hoje abordarei um deles, o Recordmydesktop.

Para instalar, abra um terminal e digite:

<pre class="brush:shell">sudo apt-get install gtk-recordmydesktop</pre>

Pronto! Para gravar a imagem da sua tela em vídeo, vá no menu Aplicativos >> Multimídia >> Desktop Recorder. Para parar a gravação, clique no ícone vermelho perto do relógio e depois em Parar. O vídeo será processado e ao final você terá um arquivo out.ogv na sua Pasta pessoal.

Para facilitar as coisas, que tal converter o vídeo para AVI? Para tanto, utilizaremos o Mencoder. Para instalá-lo, em um terminal, digite isso:

<pre class="brush:shell">sudo apt-get install mencoder</pre>

Após instalado, para converter o vídeo para AVI, em um terminal, digite:

<pre class="brush:shell">mencoder -idx teste.ogv -ovc lavc -oac mp3lame -o teste.avi</pre>

Onde &#8220;teste&#8221; é o nome do arquivo ogv e também o nome do arquivo de saída.

Fiquem todos com Deus.
  
meu Twitter: [@renatobluesboy][2]
  
BLOG: [http://freelinux-br.blogspot.com][3]

 [1]: http://freelinux-br.blogspot.com/2011/03/calendario-de-lancamento-do-ubuntu-1104.html
 [2]: http://twitter.com/renatobluesboy
 [3]: http://freelinux-br.blogspot.com/