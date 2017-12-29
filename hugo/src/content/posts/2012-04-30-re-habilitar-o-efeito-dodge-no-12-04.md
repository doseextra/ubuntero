---
title: Re-habilitar o efeito “dodge” no 12.04
author: Ivan Brasil Fuzzer
type: post
date: 2012-04-30T13:51:15+00:00
url: /re-habilitar-o-efeito-dodge-no-12-04/
categories:
  - Ubuntu
tags:
  - dodge
  - lançador
  - Linux
  - PPA
  - Ubuntu

---
Para quem vem do Ubuntu 11.10, o comportamento &#8220;dodge&#8221; que esconde o  lançador quando uma janela ocupa a área do  lançador pode fazer falta, concordo que no início eu achava isto mas me acostumei ao ponto de não sentir falta.

Para re-habilitar este comportamento você pode utilizar um PPA, **mas lembre que não é oficial e qualquer problema que venha a acontecer a culpa deve ser dada ao desenvolvedor do PPA e não a Canonical**.

Abra o terminal pressionando Ctrl+Alt+t e digite os seguintes comandos:

<pre class="brush:shell">sudo add-apt-repository ppa:ikarosdev/unity-revamped
sudo apt-get update && sudo apt-get dist-upgrade</pre>

Encerre a sessão e entre novamente para que a atualização seja aplicada.

**Fonte: [OMGUbuntu][1]**

 [1]: http://www.omgubuntu.co.uk/2012/04/enable-dodge-unity-launcher-ubuntu-12-04/