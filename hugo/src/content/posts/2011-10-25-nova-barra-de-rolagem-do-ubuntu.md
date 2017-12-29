---
title: Nova barra de rolagem do Ubuntu
author: Ivan Brasil Fuzzer
type: post
date: 2011-10-25T10:00:46+00:00
url: /nova-barra-de-rolagem-do-ubuntu/
categories:
  - Ubuntu

---
Desde a versão 11.04 o Ubuntu introduziu uma nova barra de rolagem conhecida como Overlay Scroolbar. Esta barra tem como ideia utilizar menos espaço na tela do usuário, deixando assim mais espaço para a aplicação em si.

A ideia é bem interessante, mas faltou um pouco de polimento para que ela ficasse totalmente funcional. Para nossa felicidade, este polimento já vem sendo desenvolvido e deverá estar presente na próxima versão LTS, 12.04 Precise Pangolin. Para quem não aguenta esperar, meu caso, já temos um PPA para que possamos começar a utilizar a barra desde já.

Para adicionar o PPA e instalar a próxima versão da barra de rolagem pressione a combinação de teclas Ctrl+Alt+t e digite os seguintes comandos:

<pre class="brush:shell">sudo apt-add-repository ppa:ayatana-scrollbar-team/release
sudo apt-get update
sudo apt-get dist-upgrade</pre>

Agora é só reiniciar sua sessão para que a nova barra entre em funcionamento.

Se quiser dar uma olhada em como ficou a barra antes de instalar, assista ao vídeo abaixo.

<p style="text-align: center;">
</p>