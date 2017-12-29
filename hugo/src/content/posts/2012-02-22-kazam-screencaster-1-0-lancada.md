---
title: Kazam Screencaster 1.0 lançada
author: Anderson Henrique
type: post
date: 2012-02-22T15:57:36+00:00
url: /kazam-screencaster-1-0-lancada/
categories:
  - Ubuntu
tags:
  - gravar desktop
  - kazam
  - Linux
  - Ubuntu

---
<p style="text-align: justify;">
  Olá a todos.
</p>

<p style="text-align: justify;">
  Quando eu ainda tinha tempo de procurar por temas para postar aqui no site, eu gravei alguns vídeos para a demonstração do mesmo, e utilizava o Kazam. Quando passei para o Ubuntu 11.04 não pude utilizá-lo, por que o seu desenvolvimento não estava indo muito bem e não havia suporte algum.  Hoje pela manhã navegando na internet vi que havia sido lançada uma nova versão do programa após muito tempo. Aqui vai uma lista das novidades:
</p>

  *  Possibilidade de gravar apenas determinadas regiões da tela.
  * Suporte para dois canais de áudio com suporte para volume.
  * Vídeo pode ser salvo em dois formatos: WebM ou Matroska.
  * Usa o gstreamer ao invés do ffmpeg.
  * A contagem de tempo para inciar a gravação é personalizável.
  * A janela de tempo agora tem largura customizável.
  * FPS ajustável.
  * Possibilidade de desativar a gravação do mouse.
  * A seleção do dispositivo de áudio é feito diretamente no PulseAudio. Para selecionar a gravação de áudio a partir de um microfone terá que selecionar na janela.

Para instalar é bastante simples, basta executar os seguintes comandos.

<pre class="brush:shell">sudo add-apt-repository ppa:kazam-team/unstable-series
sudo apt-get update
sudo apt-get install kazam</pre>

Até a próxima.

<p style="text-align: left;">
  Fonte: <strong>Web Upd8</strong>
</p>