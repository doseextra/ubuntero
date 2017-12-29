---
title: Skype no Ubuntu 13.04 64 bits
author: Ivan Brasil Fuzzer
type: post
date: 2013-03-15T23:52:44+00:00
url: /skype-no-ubuntu-13-04-64-bits/
burl:
  - http://ads.tt/B13
  - http://ads.tt/B13
  - http://ads.tt/B13
  - http://ads.tt/B13
  - http://ads.tt/B13
  - http://ads.tt/B13
  - http://ads.tt/B13
  - http://ads.tt/B13
  - http://ads.tt/B13
  - http://ads.tt/B13
  - http://ads.tt/B13
  - http://ads.tt/B13
  - http://ads.tt/B13
  - http://ads.tt/B13
  - http://ads.tt/B13
  - http://ads.tt/B13
  - http://ads.tt/B13
  - http://ads.tt/B13
  - http://ads.tt/B13
  - http://ads.tt/B13
  - http://ads.tt/B13
  - http://ads.tt/B13
  - http://ads.tt/B13
  - http://ads.tt/B13
  - http://ads.tt/B13
  - http://ads.tt/B13
  - http://ads.tt/B13
  - http://ads.tt/B13
  - http://ads.tt/B13
  - http://ads.tt/B13
  - http://ads.tt/B13
categories:
  - Ubuntu
tags:
  - 13.04
  - Linux
  - segmentation fault
  - Skype
  - Ubuntu

---
## **Estes passos não são mais necessários, basta instalar e usar o skype.**

<a href="http://www.ubuntero.com.br/wp-content/uploads/2013/03/no-skype.png" rel="lightbox"><img class="size-full wp-image-4711 aligncenter" title="Skype no Ubuntu 13.04 64bits" alt="Skype no Ubuntu 13.04 64bits" src="http://www.ubuntero.com.br/wp-content/uploads/2013/03/no-skype.png" width="200" height="200" /></a>

Se você não aguenta esperar sair a versão final do **Ubuntu 13.04** e já instalou no seu computador de produção e ainda por cima depende do **Skype** para alguma função, parece que entramos na mesma fria. Tudo funcionando após a instalação, velocidade legal, nem parece uma versão alpha, mas o último aplicativo que você instala e abre é o Skype e ele simplesmente não abre. Desvantagem de não ser **OpenSource** é que você fica largado no mundo sem ter para quem pedir socorro.

Dramatização à parte, existe uma maneira de contornar este problema abrindo o Skype com o seguinte comando:

`LD_PRELOAD=/usr/lib/i386-linux-gnu/mesa/libGL.so.1 skype`

Claro que esta não é uma solução, é apenas uma forma de não ter que voltar uma versão do Ubuntu por culpa de um único programa que infelizmente não tem um substituto a altura de código livre.

Assim que este problema tiver uma real solução eu volto a informar a todos neste mesmo post.

_Fonte: <a href="http://geekphreek.com/tag/segmentation-fault/" target="_blank" rel="nofollow">Geek Phreek</a>_