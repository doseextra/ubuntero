---
title: Vídeos H.265 no Ubuntu
author: Ivan Brasil Fuzzer
type: post
date: 2015-05-31T13:33:44+00:00
url: /videos-h-265-no-ubuntu/
categories:
  - Ubuntu
tags:
  - codec
  - h265
  - Ubuntu
  - Vídeo

---
[<img class="aligncenter size-medium wp-image-6892" src="http://www.ubuntero.com.br/wp-content/uploads/2015/05/vídeo-h.265-no-ubuntu-300x253.png" alt="vídeo h.265 no ubuntu" width="300" height="253" />][1]

Olá pessoal, estavam com saudades? Aos poucos a vida se arruma, eu tomo vergonha na cara e voltamos as atividades normais.

Como o tempo é sempre curto, nunca consigo acompanhar minhas séries favoritas nos horários em que são exibidas na televisão e como não sou nenhum magnata para pagar televisão a cabo e netflix, acabo que tenho que encontrar alternativas para assistir ao conteúdo que gosto. Em uma destas alternativas acabei esbarrando em alguns episódios codificados em H.265, dizem as más linguas que será o sucessor do h.264, e claro que não foi automático para meu Ubuntu 14.04 dar play no vídeo, apenas o áudio funcionou.

Como não sou de me conformar, fui para a internet e encontrei um PPA que resolveu meu problema. Veja abaixo como adicionar o suporte a H.265 no seu Ubuntu também.

Para sermos mais práticos(dá para fazer só usando a interface gráfica, mas no terminal é mais rápido) abra o terminal pressionando as teclas Ctrl+Alt+t.

Com o terminal aberto, digite os seguintes comandos(sempre dando Enter no final de cada linha):

<pre class="brush:shell">sudo apt-add-repository ppa:strukturag/libde265
sudo apt-get update
sudo apt-get install gstreamer0.10-libde265 gstreamer1.0-libde265 vlc-plugin-libde265</pre>

Pronto, agora é só curtir o seu vídeo em H.265, simples assim.

 [1]: http://www.ubuntero.com.br/wp-content/uploads/2015/05/vídeo-h.265-no-ubuntu.png