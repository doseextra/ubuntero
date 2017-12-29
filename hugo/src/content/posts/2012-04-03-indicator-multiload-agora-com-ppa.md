---
title: Indicator Multiload agora com PPA
author: Ivan Brasil Fuzzer
type: post
date: 2012-04-03T11:00:58+00:00
url: /indicator-multiload-agora-com-ppa/
categories:
  - Ubuntu
tags:
  - 12.04
  - applet
  - indicador
  - indicator-multiload
  - Linux
  - Ubuntu

---
<p style="text-align: center;">
  <a href="http://www.ubuntero.com.br/wp-content/uploads/2012/04/Captura-de-tela-de-2012-04-02-231746.png"><img class="alignnone size-medium wp-image-3430" title="Captura de tela de 2012-04-02 23:17:46" src="http://www.ubuntero.com.br/wp-content/uploads/2012/04/Captura-de-tela-de-2012-04-02-231746-300x30.png" alt="" width="300" height="30" /></a>
</p>

Eu tinha prometido que assim que tivesse um PPA do multiload indicator eu voltaria a informar vocês e graças ao Marcio Tavares no artigo anterior eu voltei a procurar por um PPA e lá está ele no Launchpad.

Para adicionar o PPA e instalar o multiload indicator, abra o terminal pressionando Cttl+Alt+t e digite os seguintes comando:

<pre class="brush:shell">sudo add-apt-repository ppa:indicator-multiload/stable-daily
sudo apt-get update
sudo apt-get install indicator-multiload</pre>

Agora pressione Alt+F2 e digite, sem aspas, &#8220;indicator-multiload&#8221; e pressione Enter. Para configurar o que quer que seja monitorado, clique com o botão direito no &#8220;applet&#8221; que irá aparecer próximo ao relógio e vá em Preferências e configure como preferir.

<p style="text-align: center;">
  <a href="http://www.ubuntero.com.br/wp-content/uploads/2012/04/Captura-de-tela-de-2012-04-02-232246.png"><img class="alignnone size-medium wp-image-3431" title="Captura de tela de 2012-04-02 23:22:46" src="http://www.ubuntero.com.br/wp-content/uploads/2012/04/Captura-de-tela-de-2012-04-02-232246-300x199.png" alt="" width="300" height="199" /></a>
</p>

Os passos acima foram testados no Ubuntu 12.04 Beta 2, mas devem funcionar perfeitamente no Ubuntu 11.10 e 11.04. Nos deixe saber se isto é verdade deixando informações nos comentários.