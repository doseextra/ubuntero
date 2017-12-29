---
title: VirtualBox IndicatorMenu
author: Ivan Brasil Fuzzer
type: post
date: 2011-01-07T11:00:21+00:00
url: /virtualbox-indicatormenu/
categories:
  - Ubuntu
tags:
  - indicator-virtualbox
  - máquina virtual
  - Ubuntu
  - virtual machine
  - virtualbox
  - vm

---
Se você é como eu e vive testando outos Sistemas Operacionais, ou precisa utilizar outros Sistemas para acesso a programas que só existem para tal sistema, provavelmente você utiliza o programa VirtualBox.

Este artigo não é sobre como utilizar e nem para que serve o VirtualBox, é para quem já faz uso do mesmo. Para acessar uma máquina virtual, por muito tempo, eu abria o VirtualBox, selecionava a máquina e iniciava ela. Um tempo se passou e descobri que podia criar lançadores para cada máquina e passei a deixar estes lançadores no painel. Com o tempo a painel começa a ficar poluído e cheio de ícones. O espaço acaba. Como solução temos o &#8220;VirtualBox Indicator Menu&#8221;.

<p style="text-align: center;">
  <a href="http://www.ubuntero.com.br/wp-content/uploads/2011/01/Captura_de_tela4.png"><img class="alignnone size-thumbnail wp-image-1301" title="Captura_de_tela" src="http://www.ubuntero.com.br/wp-content/uploads/2011/01/Captura_de_tela4-150x63.png" alt="" width="150" height="63" /></a>
</p>

Para instalá-lo digite os seguintes comandos no terminal:

<pre class="brush:shell">sudo add-apt-repository ppa:michael-astrapi/ppa
sudo apt-get update && sudo apt-get install indicator-virtualbox</pre>

Para iniciar imediatamente o aplicativo, pressione as teclas ALT + F2 e digite o comando indicator-virtualbox e dê enter. Para ter o programa executando sempre que iniciar sua sessão, adicione o comando nos aplicativos de sesssão da seguinte maneira:

Vá no menu Sistema -> Preferências -> Aplicativos de sessão.

<p style="text-align: center;">
  <a href="http://www.ubuntero.com.br/wp-content/uploads/2011/01/Captura_de_tela3.png"><img class="alignnone size-thumbnail wp-image-1298" title="Captura_de_tela" src="http://www.ubuntero.com.br/wp-content/uploads/2011/01/Captura_de_tela3-150x56.png" alt="" width="150" height="56" /></a>
</p>

<p style="text-align: left;">
  Na janela que é aberta clique no botão &#8220;Adicionar&#8221;.
</p>

<p style="text-align: center;">
  <a href="http://www.ubuntero.com.br/wp-content/uploads/2011/01/Captura_de_tela-13.png"><img class="alignnone size-thumbnail wp-image-1299" title="Captura_de_tela-1" src="http://www.ubuntero.com.br/wp-content/uploads/2011/01/Captura_de_tela-13-150x114.png" alt="" width="150" height="114" /></a>
</p>

<p style="text-align: left;">
  Preencha os campos como na imagem abaixo e clique no botão &#8220;Adicionar&#8221;.
</p>

<p style="text-align: center;">
  <a href="http://www.ubuntero.com.br/wp-content/uploads/2011/01/Captura_de_tela-21.png"><img class="alignnone size-thumbnail wp-image-1300" title="Captura_de_tela-2" src="http://www.ubuntero.com.br/wp-content/uploads/2011/01/Captura_de_tela-21-150x115.png" alt="" width="150" height="115" /></a>
</p>

<p style="text-align: left;">
  Pronto, agora o indicator-virtualbox estará sendo iniciado juntamente com a sua sessão do gnome.
</p>