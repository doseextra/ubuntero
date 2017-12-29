---
title: Jogo GrandFantasia no Wine
author: Ivan Brasil Fuzzer
type: post
date: 2011-11-06T15:50:59+00:00
url: /jogo-grandfantasia-no-wine/
categories:
  - Jogos
  - Ubuntu
tags:
  - grand fantasia
  - jogo
  - Jogos
  - Linux
  - mmorpg
  - rpg
  - Ubuntu
  - wine

---
Para quem gosta de jogos, hoje teremos uma ótima dica. Um jogo MMORPG em português e gratuito. O nome deste jogo é Grand Fantasia, mas ele não tem versão para Linux. O que fazemos então? Utilizaremos o programa Wine para instalar e rodar o jogo no Ubuntu.

A primeira coisa que temos a fazer é adicionar o repositório do wine para instalarmos a última versão. Para isso abra o terminal pressionando Ctrl+Alt+t e digite o seguinte comando:

<pre class="brush:shell">sudo apt-add-repository ppa:ubuntu-wine/ppa</pre>

Pressione Enter para confirmar a inclusão do repositório e aguarde o terminal ser liberado. Após finalizar digite os seguintes comandos:

<pre class="brush:shell">sudo apt-get update
sudo apt-get install wine</pre>

Após o download e instalação do wine, pressione a tecla super e digite winecfg e abra o programa de configuração do wine. Na aba Gráficos desmarque a caixa de seleção &#8220;Permitir Pixel Shader (se suportado pelo hardware)&#8221; e clique no botão OK.

<p style="text-align: center;">
  <a href="http://www.ubuntero.com.br/wp-content/uploads/2011/11/Captura-de-tela-em-2011-11-06-134407.png"><img class="alignnone size-medium wp-image-2920" title="Captura de tela em 2011-11-06 13:44:07" src="http://www.ubuntero.com.br/wp-content/uploads/2011/11/Captura-de-tela-em-2011-11-06-134407-251x300.png" alt="" width="251" height="300" /></a>
</p>

Depois disto siga o vídeo abaixo(o vídeo começa com uma pequena homenagem a André Gondim):

<p style="text-align: center;">
</p>