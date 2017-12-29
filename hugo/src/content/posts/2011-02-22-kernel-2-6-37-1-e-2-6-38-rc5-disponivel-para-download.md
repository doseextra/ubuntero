---
title: Kernel 2.6.37.1 e 2.6.38-rc5 disponível para download
author: leandro
type: post
date: 2011-02-22T11:14:55+00:00
url: /kernel-2-6-37-1-e-2-6-38-rc5-disponivel-para-download/
categories:
  - Ubuntu
tags:
  - kernel
  - Linux
  - Ubuntu

---
Amigos

As últimas versões do Kernel para Ubuntu Maverick estão disponível par download em <a href="http://www.megatek.net.br/customkernels/" target="_blank">http://www.megatek.net.br/customkernels/</a>, ambas estão  bastante estáveis.

Para os que usam driver da Nvidia com o kernel 2.6.38-rc5, talvez seja necessario desabilitar o modulo nouveaux com os comandos abaixo:

<pre class="brush:shell">sudo echo "blacklist nouveau" &gt; /etc/modprobe.d/nvidia-installer-disable-nouveau.conf
sudo echo "options nouveau modeset=0" &gt;&gt; /etc/modprobe.d/nvidia-installer-disable-nouveau.conf</pre>

Divirtam-se.