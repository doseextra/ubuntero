---
title: Launcher na parte de Baixo da tela
author: Ivan Brasil Fuzzer
type: post
date: 2011-10-27T19:04:14+00:00
url: /launcher-na-parte-de-baixo-da-tela/
categories:
  - Ubuntu
tags:
  - compiz
  - lançador
  - launcher
  - Linux
  - Ubuntu
  - Unity

---
<p style="text-align: center;">
  <a href="http://www.ubuntero.com.br/wp-content/uploads/2011/10/unity-launcher-bottom.png"><img class="alignnone size-thumbnail wp-image-2850" title="unity-launcher-bottom" src="http://www.ubuntero.com.br/wp-content/uploads/2011/10/unity-launcher-bottom-150x112.png" alt="" width="150" height="112" /></a> <a href="http://www.ubuntero.com.br/wp-content/uploads/2011/10/unity-launcher-bottom_2.png"><img class="alignnone size-thumbnail wp-image-2851" title="unity-launcher-bottom_2" src="http://www.ubuntero.com.br/wp-content/uploads/2011/10/unity-launcher-bottom_2-150x112.png" alt="" width="150" height="112" /></a>
</p>

Esta dica é para muitos que simplesmente não conseguiram, ou não quiseram, se acostumar com a mudança do local onde os programas abertos aparecem.

Esta dica é apenas para quem utiliza o Unity 3D e Ubuntu 32 bits, não tem pacote para 64 bits, pois utiliza um plugin do Compiz para fazer a mágica!

Para começar, faça o download do arquivo. [Aqui][1] ou [aqui][2].

Extraia o diretório presente no arquivo baixado para o seu home.

Abra o terminal pressionando Ctrl+Alt+t e digite os seguintes comandos:

<pre class="brush:shell">sudo apt-get install lzma
mkdir -p ~/.compiz-1/plugins
cd ~/unityshell
cp libunityshell.so ~/.compiz-1/plugins/
mkdir /tmp/unityshell
cp *.png /tmp/unityshell/
cd /tmp/unityshell/
chmod 644 *.png
sudo chown root:root *.png
sudo cp *.png /usr/share/unity/4/</pre>

Agora basta encerrar a sessão e entrar novamente que a barra estará na parte de baixo da tela.

Para voltar ao modo antigo e normal basta abrir o terminal e digitar o seguinte comando:

<pre class="brush:shell">rm ~/.compiz-1/plugins/libunityshell.so</pre>

Encerre a sessão e entre novamente e tudo estará como a configuração anterior.

**Fonte: [Web UPD8][3]**

 [1]: http://dl.dropbox.com/u/47006748/unityshell.tar.lzma
 [2]: http://dl.dropbox.com/u/3018578/unityshell.tar.lzma
 [3]: http://www.webupd8.org/2011/10/how-to-move-unity-launcher-to-bottom-of.html