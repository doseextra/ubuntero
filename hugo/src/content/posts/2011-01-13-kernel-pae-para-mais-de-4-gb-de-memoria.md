---
title: Kernel PAE para mais de 4 GB de memória
author: Ivan Brasil Fuzzer
type: post
date: 2011-01-13T11:00:03+00:00
url: /kernel-pae-para-mais-de-4-gb-de-memoria/
categories:
  - Ubuntu
tags:
  - 6 GB
  - kernel
  - memória
  - pae
  - ram
  - Ubuntu

---
[<img class="alignleft size-thumbnail wp-image-1319" title="Captura_de_tela" src="http://www.ubuntero.com.br/wp-content/uploads/2011/01/Captura_de_tela5-150x128.png" alt="" width="150" height="128" />][1]Estou com um notebook novo com 6 GB de RAM e estava em um dilema. Instalar Ubuntu 64 bits e aproveitar toda a memória ou 32 bits para poder utilizar algumas impressoaras Canon que só tem driver para 32 bits?

A decisão foi pelas impressoras e pelos 6 GB de Ram. Como isto é feito? Utilizando um Kernel PAE(Physical Address Extension). Segundo algumas leituras, a instalação do Ubuntu 32 bits em DVD já identifica a necessidade de instalação do kernel PAE, mas como eu só tinha a imagem de CD, fiz a instalação do sistema normalmente e após fiz a instalação do Kernel PAE como demonstrado agora:

Abra o terminal e digite o seguinte comando:

<pre class="brush:shell">sudo apt-get install linux-generic-pae linux-headers-generic-pae</pre>

Aguarde o download e instalação do novo Kernel e reinicie o sistema. Pronto você já deve estar utilizando toda sua memória com o Kernel PAE.

 [1]: http://www.ubuntero.com.br/wp-content/uploads/2011/01/Captura_de_tela5.png