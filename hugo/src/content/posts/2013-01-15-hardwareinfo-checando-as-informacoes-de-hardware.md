---
title: Hardwareinfo – Checando as informações de hardware
author: Daniel Quirino
type: post
date: 2013-01-15T16:00:17+00:00
url: /hardwareinfo-checando-as-informacoes-de-hardware/
burl:
  - http://ads.tt/TLY
  - http://ads.tt/TLY
  - http://ads.tt/TLY
  - http://ads.tt/TLY
  - http://ads.tt/TLY
  - http://ads.tt/TLY
  - http://ads.tt/TLY
  - http://ads.tt/TLY
  - http://ads.tt/TLY
  - http://ads.tt/TLY
  - http://ads.tt/TLY
  - http://ads.tt/TLY
  - http://ads.tt/TLY
  - http://ads.tt/TLY
  - http://ads.tt/TLY
  - http://ads.tt/TLY
  - http://ads.tt/TLY
  - http://ads.tt/TLY
  - http://ads.tt/TLY
  - http://ads.tt/TLY
  - http://ads.tt/TLY
  - http://ads.tt/TLY
  - http://ads.tt/TLY
  - http://ads.tt/TLY
  - http://ads.tt/TLY
  - http://ads.tt/TLY
  - http://ads.tt/TLY
  - http://ads.tt/TLY
  - http://ads.tt/TLY
  - http://ads.tt/TLY
  - http://ads.tt/TLY
  - http://ads.tt/TLY
  - http://ads.tt/TLY
categories:
  - Ubuntu
tags:
  - Hardwareinfo
  - Linux
  - Ubuntu

---
**Hardwareinfo** é mais um utilitário (bem completo) que mostra informações detalhadas sobre o sistema. Ele retorna informações sobre a placa mãe, processador, memória RAM, GPU, HDD, dispositivos USB, sensores e muitos outros tipos de hardware.

<a href="http://www.ubuntero.com.br/?attachment_id=4441" rel="lightbox"><img class="wp-image-4441 aligncenter" title="Hardwareinfo - Checando as informações de hardware" alt="Hardwareinfo - Checando as informações de hardware" src="http://www.ubuntero.com.br/wp-content/uploads/2013/01/detail-hardwareinfo.png" width="549" height="301" /></a>

Apesar de visualmente simples, ele é capaz de retornar informações completas não só do hardware, mas de software, como versão do Kernel, tipo de Distribuição, uso de CPU e memória RAM, informação de Usuários, BIOS, Logs, dentre outros detalhes. Apesar das informações retornarem aparentemente meio &#8220;jogadas&#8221;, dá para entender sem muito esforço. Além do mais, ele tem a opção de retornar as informações através de um arquivo HTML, mais organizado.

<a href="http://www.ubuntero.com.br/?attachment_id=4444" rel="lightbox"><img class=" wp-image-4444 aligncenter" title="hardwareinfo - kernelM" alt="hardwareinfo - kernelM" src="http://www.ubuntero.com.br/wp-content/uploads/2013/01/hardwareinfo-kernelM.png" width="542" height="490" /></a>

<a href="http://www.ubuntero.com.br/?attachment_id=4445" rel="lightbox"><img class=" wp-image-4445 aligncenter" title="Hardwareinfo no Ubuntu" alt="Hardwareinfo no Ubuntu" src="http://www.ubuntero.com.br/wp-content/uploads/2013/01/hardwareinfo.png" width="542" height="495" /></a>

Para instalar o Hardwareinfo é simples, basta abrir o terminal `Ctrl+Alt+T` e digitar/copiar os comandos:

<pre class="brush:shell">wget -O hardwareinfo.deb http://goo.gl/ulJfL
sudo dpkg -i hardwareinfo.deb</pre>

Dependendo da versão do **Ubuntu**, pode acontecer algum erro ao tentar instalar. Para corrigir, ao finalizar os comandos acima, execute o comando abaixo:

<pre class="brush:shell">sudo apt-get -f install</pre>

Via <a href="http://www.noobslab.com/2013/01/new-hardwareinfo-utility-for.html" target="_blank" rel="nofollow">NoobsLab</a>.

Abraços e até a próxima.