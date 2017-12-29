---
title: Jogo Zero Ballistics
author: Ivan Brasil Fuzzer
type: post
date: 2011-11-13T23:11:10+00:00
url: /jogo-zero-ballistics/
categories:
  - Jogos
  - Ubuntu
tags:
  - Game
  - jogo
  - Linux
  - Ubuntu
  - zero ballistics

---
<p style="text-align: center;">
</p>

Gosta de jogos de tiro em primeira pessoa(FPS)? O jogo que vamos mostrar hoje é um FPS um pouco diferente, ao invés de controlar um personagem humano, neste jogo controlamos um tanque de guerra.

O jogo Zero Ballistics não tem uma história e então foca totalmente no jogo pela internet ou rede. Algumas funções do jogo ainda não funcionam, mesmo estando na versão 2.0, como a mudança de resolução de tela e o modo FullScreen, mas nada disso estraga a diversão do jogo.

Para instalar o jogo precisamos adicionar um repositório. Para isso abra a Central de programas pressionando a tecla Super e digitando Central. Na central de comando vá no menu Editar >> Canais de Software. Vá na aba Ourtos Softwares e clique no botão adicionar. Copie e cole a linha abaixo, e clique em Adicionar Fonte.

<pre class="brush:shell">deb http://archive.getdeb.net/ubuntu oneiric-getdeb games</pre>

Após adicionar o repositório digite os seguintes comandos para atualizar a lista de pacotes e instalar o jogo:

<pre class="brush:shell">wget -q -O- http://archive.getdeb.net/getdeb-archive.key | sudo apt-key add -
sudo apt-get update
sudo apt-get install zero-ballistics</pre>

Depois de instalado pressione a tecla Super e digite zero que o jogo já deve aparecer.