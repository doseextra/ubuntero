---
title: Como remover os ícones de notificação no Ubuntu 11.04
author: Renato
type: post
date: 2011-10-06T14:12:37+00:00
url: /como-remover-os-icones-de-notificacao-no-ubuntu-11-04/
categories:
  - Ubuntu
tags:
  - 11.04
  - indicator-me
  - indicator-message
  - Linux
  - Ubuntu

---
[<img class="alignnone size-full wp-image-2640" title="Captura de tela em 2011-10-06 10:11:22" src="http://www.ubuntero.com.br/wp-content/uploads/2011/10/Captura-de-tela-em-2011-10-06-101122.png" alt="" width="224" height="103" />][1]

Para alguns estes dois ícones da imagem são muito úteis, para outros nem tanto e estão ali só para ocupar espaço. Se você está na lista de pessoas que gostaria de remover um dos ícones ou até mesmo os dois, siga estes simples passos:

Abra o terminal pressionando a tecla Super(logotipo do windows), digite &#8220;terminal&#8221; e pressione Enter.

Para remover apenas o primeiro ícone digite o comando:

<pre class="brush:shell">sudo apt-get remove indicator-message</pre>

<div>
  <p>
    Para remover apenas o segundo ícone, digite o comando:
  </p>
  
  <pre class="brush:shell">sudo apt-get remove indicator-me</pre>
  
  <p>
    Para remover os dois de uma vez só digite o comando:
  </p>
  
  <pre class="brush:shell">sudo apt-get remove indicator-me indicator-messages</pre>
  
  <p>
    &nbsp;
  </p>
  
  <p>
    <strong>Fonte: <a href="http://shortrecipes.blogspot.com/2011/04/ubuntu-1104-natty-narwhal-how-to-remove.html">Short IT recipes.</a></strong>
  </p>
  
  <p>
    Abraços e fiquem todos com Deus,
  </p>
  
  <p>
    Renato
  </p>
</div>

 [1]: http://www.ubuntero.com.br/wp-content/uploads/2011/10/Captura-de-tela-em-2011-10-06-101122.png