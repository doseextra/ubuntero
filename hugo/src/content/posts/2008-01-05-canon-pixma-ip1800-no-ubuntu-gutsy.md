---
title: Canon PIXMA iP1800 no Ubuntu
author: Ivan Brasil Fuzzer
type: post
date: 2008-01-05T20:16:53+00:00
url: /canon-pixma-ip1800-no-ubuntu-gutsy/
burl:
  - http://ads.tt/1YFX
  - http://ads.tt/1YFX
categories:
  - Ubuntu
tags:
  - canon
  - gutsy
  - impressora
  - ip1800
  - Linux
  - pixma
  - Ubuntu

---
**Artigo alterado devido a problemas com o download dos pacotes do site da canon.**
  
**Testado nas versões 7.10, 8.04 e 8.10**
  
[<img src='http://www.ubuntero.com.br/wp-content/uploads/2008/01/p1013159.thumbnail.png' alt='p1013159.png' align="left" />][1]Neste final de semana ganhei uma impressora Canon PIXMA iP 1800 e tive que realizar alguns passos para que tudo funcionasse perfeitamente. Para variar um pouco, entre os drivers disponíveis no CD não estava uma versão para Linux. Tive que procurar um pouco pela internet até encontrar um tutorial que descrevesse os passos de instalação. No final da empreitada encontrei um tutorial em inglês no endereço <http://ibr94.blogspot.com/2007/08/canon-pixma-ip1880-printer-in-ubuntu.html>.

Veja abaixo uma tradução livre deste artigo:

O primeiro passo é fazer o download dos seguintes pacotes:

<!--download id="15"-->

<!--download id="16"-->

Agora é hora de instalar os pacotes baixados:

sudo dpkg -i cnijfilter-common\_2.70-1\_i386.deb
   
sudo dpkg -i cnijfilter-ip1800series\_2.70-1\_i386.deb
   
cd /usr/lib/
   
sudo ln -s ./libtiff.so.4.2.1 ./libtiff.so.3
   
sudo apt-get install libpng3 

Para finalizar basta conectar os cabos da impressora no computador e ligar a impressora. O Ubuntu se encarregará de detectar a impressora e irá configurar tudo automaticamente.

Veja a página de teste já impressa na foto abaixo.

<center>
  <a href='http://www.ubuntero.com.br/wp-content/uploads/2008/01/p1013160.png' title='p1013160.png'><img src='http://www.ubuntero.com.br/wp-content/uploads/2008/01/p1013160.thumbnail.png' alt='p1013160.png' /></a>&nbsp;<a href='http://www.ubuntero.com.br/wp-content/uploads/2008/01/p1013161.png' title='p1013161.png'><img src='http://www.ubuntero.com.br/wp-content/uploads/2008/01/p1013161.thumbnail.png' alt='p1013161.png' /></a>
</center>

 [1]: http://www.ubuntero.com.br/wp-content/uploads/2008/01/p1013159.png "p1013159.png"