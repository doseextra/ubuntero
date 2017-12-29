---
title: Problemas com vídeos MP4 no totem
author: Ivan Brasil Fuzzer
type: post
date: 2012-07-02T14:00:36+00:00
url: /problemas-com-videos-mp4-no-totem/
categories:
  - Ubuntu
tags:
  - Linux
  - mp4
  - totem
  - Ubuntu

---
Um bug no gstreamer pode estar fazendo com que seus vídeos não toquem no totem, minitube e alguns outros tocadores, o vlc não é afetado por este bug por não usar os codecs do sistema.

<p style="text-align: center;">
  <a href="http://www.ubuntero.com.br/wp-content/uploads/2012/07/Captura-de-tela-de-2012-07-02-083952.png"><img class="alignnone size-medium wp-image-3695" title="totem" src="http://www.ubuntero.com.br/wp-content/uploads/2012/07/Captura-de-tela-de-2012-07-02-083952-300x225.png" alt="" width="300" height="225" /></a>
</p>

Para resolver este problema renomeio o arquivo libgstvideoparsersbad.so com o seguinte comando(**dica válida apenas para o Ubuntu 12.04)**:

Para sistemas 32 bits

<pre class="brush:shell">sudo mv /usr/lib/i386-linux-gnu/gstreamer-0.10/libgstvideoparsersbad.so /usr/lib/i386-linux-gnu/gstreamer-0.10/libgstvideoparsersbad.so.bak</pre>

Para sistemas 64 bits

<pre class="brush:shell">sudo mv /usr/lib/x86_64-linux-gnu/gstreamer-0.10/libgstvideoparsersbad.so /usr/lib/x86_64-linux-gnu/gstreamer-0.10/libgstvideoparsersbad.so.bak</pre>