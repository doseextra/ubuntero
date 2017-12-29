---
title: Tela escura no HP Pavilion dv5
author: Ivan Brasil Fuzzer
type: post
date: 2012-03-23T17:48:18+00:00
url: /tela-escura-no-hp-pavilion-dv5/
categories:
  - Ubuntu
tags:
  - brilho
  - dv5
  - hp
  - Linux
  - pavilion
  - tela escura
  - Ubuntu

---
Tenho um HP Pavilion dv5 e quando instalei o Ubuntu tive alguns problemas. Com o touchpad ([já publicado a solução nesse site][1]) e com a placa de vídeo, onde a tela fica preta ao ligar o notebook e quando uso um projetor de vídeo a resolução não é maior que 1024.

Com o tempo vou descobrindo cada solução. O que descobri agora foi a restauração do brilho da tela ao inicializar o sistema. Para corrigir, siga os seguintes passos:

Abra /etc/default/grub com o editor de texto gedit

<pre class="brush:shell">gksudo gedit /etc/default/grub</pre>

Encontre a linha:

<pre class="brush:shell">GRUB_CMDLINE_LINUX_DEFAULT="quiet splash"</pre>

e adicione acpi_backlight=vendor, ficando a linha completa assim:

<pre class="brush:as3">GRUB_CMDLINE_LINUX_DEFAULT="quiet splash acpi_backlight=vendor"</pre>

Feche o editor de texto salvando a mudança.

Atualize o Grub para incluir a mudança com o comando:

<pre class="brush:shell">sudo update-grub</pre>

Reinicie o sistema.

Pronto. A tela vai aparecer sem precisar ficar apertando a tecla de mais brilho.

**Jean Quenehen**
  
[**@Jean_7**][2]

 [1]: http://www.ubuntero.com.br/2011/12/touchpad-hp-pavilion-dv5/
 [2]: http://twitter.com/Jean_7