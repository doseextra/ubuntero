---
title: PixelView PlayTV Pro (Rádio)
author: Ivan Brasil Fuzzer
type: post
date: 2007-07-02T21:50:37+00:00
url: /pixelview-playtv-pro-radio/
categories:
  - Ubuntu

---
<img src='http://www.fuzzer.com.br/ubuntero/wp-content/uploads/2007/05/prolinkpixelviewplaytvpro2_2.jpg' alt='PixelView PlayTV Pro' align="left" />Se você leu meu [artigo][1] sobre como botar para funcionar a placa de TV PixelView PlayTV Pro, deve ter ficado curioso para por o rádio para funcionar também. Na época não me interessei muito em procurar sobre o rádio, que a placa suporta, devido a enorme felicidade que tomou conta do meu ser ao ter minha placa funcionando.

Hoje decidi que ao chegar em casa iria fazer a placa sintonizar uma rádio. Minha felicidade foi tão grande que não tenho como enrolar este artigo.

Se você já instalou a placa de tv como descrito neste artigo, basta você adicionar a opção &#8220;radio=1&#8221; no comando modprobe.

No meu caso, o comando ficou assim:

modprobe bttv card=37 radio=1 tuner=1

O segundo passo é instalar o programa [gnomeradio][2] executando o comando:

sudo apt-get install gnomeradio

Com todos estes exaustivos passos, você poderá desfrutar de todas as funcionalidades de sua placa.

Para quem perguntou como tornar estas alterações definitivas, eu adicionei os comandos no arquivo rc.local e não preciso mais digitar os comandos quando quero assistir TV ou ouvir rádio.

 [1]: http://www.fuzzer.com.br/ubuntero/?p=228
 [2]: http://www.wh-hms.uni-ulm.de/~mfcn/gnomeradio/