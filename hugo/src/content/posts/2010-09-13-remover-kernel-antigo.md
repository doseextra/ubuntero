---
title: Remover kernel antigo
author: Ivan Brasil Fuzzer
type: post
date: 2010-09-13T15:00:28+00:00
url: /remover-kernel-antigo/
burl:
  - http://ads.tt/40K7
  - http://ads.tt/40K7
  - http://ads.tt/40K7
  - http://ads.tt/40K7
  - http://ads.tt/40K7
  - http://ads.tt/40K7
  - http://ads.tt/40K7
  - http://ads.tt/40K7
  - http://ads.tt/40K7
  - http://ads.tt/40K7
  - http://ads.tt/40K7
  - http://ads.tt/40K7
  - http://ads.tt/40K7
  - http://ads.tt/40K7
  - http://ads.tt/40K7
  - http://ads.tt/40K7
  - http://ads.tt/40K7
  - http://ads.tt/40K7
  - http://ads.tt/40K7
  - http://ads.tt/40K7
  - http://ads.tt/40K7
  - http://ads.tt/40K7
  - http://ads.tt/40K7
  - http://ads.tt/40K7
  - http://ads.tt/40K7
  - http://ads.tt/40K7
  - http://ads.tt/40K7
  - http://ads.tt/40K7
  - http://ads.tt/40K7
  - http://ads.tt/40K7
  - http://ads.tt/40K7
  - http://ads.tt/40K7
  - http://ads.tt/40K7
  - http://ads.tt/40K7
  - http://ads.tt/40K7
  - http://ads.tt/40K7
  - http://ads.tt/40K7
  - http://ads.tt/40K7
  - http://ads.tt/40K7
  - http://ads.tt/40K7
  - http://ads.tt/40K7
  - http://ads.tt/40K7
  - http://ads.tt/40K7
  - http://ads.tt/40K7
  - http://ads.tt/40K7
  - http://ads.tt/40K7
  - http://ads.tt/40K7
  - http://ads.tt/40K7
  - http://ads.tt/40K7
  - http://ads.tt/40K7
categories:
  - Ubuntu
tags:
  - antigo
  - kernel
  - Linux
  - remover
  - Ubuntu

---
Com o tempo e atualizações do Ubuntu, várias entradas de kernel são enfileiradas no Grub. Para quem utiliza apenas o Ubuntu como sistema operacional isto não é problema, já para quem tem outro(s) sistema(s) o número de entradas pode ser incômodo, além de usar espaço em disco sem necessidade.

O comando abaixo remove todas as entradas, menos a última, de uma só vez. O comando deve ser utilizado apenas depois de já ter testado todo o seu hardware e programas para ter certeza de que nada parou de funcionar após uma atualização.

<pre class="brush:shell">dpkg -l 'linux-*' | sed '/^ii/!d;/'"$(uname -r | sed "s/\(.*\)-\([^0-9]\+\)/\1/")"'/d;s/^[^ ]* [^ ]* \([^ ]*\).*/\1/;/[0-9]/!d' | xargs sudo apt-get -y purge</pre>

Esta dica foi retirada do blog do [André Gondim][1].

 [1]: http://andregondim.eti.br/?p=1162