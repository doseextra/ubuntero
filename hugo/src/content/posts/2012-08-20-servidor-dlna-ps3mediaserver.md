---
title: Servidor DLNA Ps3MediaServer
author: Ivan Brasil Fuzzer
type: post
date: 2012-08-20T11:00:49+00:00
url: /servidor-dlna-ps3mediaserver/
burl:
  - http://ads.tt/OJmUnA
  - http://ads.tt/OJmUnA
  - http://ads.tt/OJmUnA
  - http://ads.tt/OJmUnA
  - http://ads.tt/OJmUnA
  - http://ads.tt/OJmUnA
  - http://ads.tt/OJmUnA
  - http://ads.tt/OJmUnA
  - http://ads.tt/OJmUnA
  - http://ads.tt/OJmUnA
  - http://ads.tt/OJmUnA
  - http://ads.tt/OJmUnA
  - http://ads.tt/OJmUnA
  - http://ads.tt/OJmUnA
  - http://ads.tt/OJmUnA
  - http://ads.tt/OJmUnA
  - http://ads.tt/OJmUnA
  - http://ads.tt/OJmUnA
  - http://ads.tt/OJmUnA
  - http://ads.tt/OJmUnA
  - http://ads.tt/OJmUnA
  - http://ads.tt/OJmUnA
  - http://ads.tt/OJmUnA
  - http://ads.tt/OJmUnA
  - http://ads.tt/OJmUnA
  - http://ads.tt/OJmUnA
  - http://ads.tt/OJmUnA
  - http://ads.tt/OJmUnA
  - http://ads.tt/OJmUnA
  - http://ads.tt/OJmUnA
  - http://ads.tt/OJmUnA
  - http://ads.tt/OJmUnA
  - http://ads.tt/OJmUnA
  - http://ads.tt/OJmUnA
  - http://ads.tt/OJmUnA
  - http://ads.tt/OJmUnA
  - http://ads.tt/OJmUnA
  - http://ads.tt/OJmUnA
categories:
  - Ubuntu
tags:
  - Linux
  - ps3mediaserver
  - serviio
  - slna
  - Ubuntu

---
<p style="text-align: center;">
  <a href="http://www.ubuntero.com.br/wp-content/uploads/2012/08/Captura-de-tela-de-2012-08-19-220310.png"><img class="alignnone size-medium wp-image-3905" title="Ps3MediaServer" src="http://www.ubuntero.com.br/wp-content/uploads/2012/08/Captura-de-tela-de-2012-08-19-220310-300x225.png" alt="" width="300" height="225" /></a>
</p>

Já mostrei em um [artigo anterior][1] como montar um servidor DLNA utilizando o servidor Serviio. Nos comentários foi sugerido utilizar o servidor Ps3MediaServer e eu prometi que um dia faria um artigo mostrando ele e enfim este dia chegou.

Antes de mostrar como fazer para instalar, alguns comentários. Como eu imaginei pela descrição, o Ps3MediaServer é mais fácil de instalar, mas o produto final não é tão bem acabado como o Serviio. Explico. Com o Serviio, ao acessar os vídeos, me é mostrada apenas a pasta de vídeos, o mesmo acontece com as fotos e músicas. O mesmo não acontece com o Ps3MediaServer. Acredito que estas são os dois grandes pontos que me chamaram a atenção sobre os dois serviços.

Antes que me condenem, estou com poucos formatos de vídeo para testar mais o Ps3MediaServer, mas o deixei como servidor pela facilidade de instalação e também por ele não precisar ler todos os diretórios toda a vez que o computador é reiniciado, coisa que me deixava bastante nervoso no Serviio.

Vamos a instalação. Como sempre mostro pela velocidade, abra o terminal pressionando Ctrl+Alt+t e digite os seguintes comandos:

<pre class="brush:shell">sudo add-apt-repository ppa:happy-neko/ps3mediaserver -y
sudo apt-get update
sudo apt-get install ps3mediaserver -y</pre>

Para abrir o programa pressione a tecla Super(também conhecida como tecla Windows) e digite ps3 e dê Enter, mas isto se o primeiro programa da lista for o &#8220;Ps3 Media Server&#8221;.

Se estiver usando o Unity como interface gráfica, o ícone do Ps3MediaServer não irá aparecer na bandeja do sistema. Para que apareça você terá que digitar mais um comando no terminal:

<pre class="brush:shell">gsettings set com.canonical.Unity.Panel systray-whitelist "['all']"</pre>

Agora é necessário encerrar a sessão e iniciar novamente para que o ícone passe a aparecer.

<p style="text-align: center;">
  <a href="http://www.ubuntero.com.br/wp-content/uploads/2012/08/Captura-de-tela-de-2012-08-19-220121.png"><img class="alignnone size-medium wp-image-3906" title="Ps3MediaServer" src="http://www.ubuntero.com.br/wp-content/uploads/2012/08/Captura-de-tela-de-2012-08-19-220121-300x225.png" alt="" width="300" height="225" /></a> <a href="http://www.ubuntero.com.br/wp-content/uploads/2012/08/Captura-de-tela-de-2012-08-19-220227.png"><img class="alignnone size-medium wp-image-3907" title="Ps3MediaServer" src="http://www.ubuntero.com.br/wp-content/uploads/2012/08/Captura-de-tela-de-2012-08-19-220227-300x225.png" alt="" width="300" height="225" /></a> <a href="http://www.ubuntero.com.br/wp-content/uploads/2012/08/Captura-de-tela-de-2012-08-19-220243.png"><img class="alignnone size-medium wp-image-3908" title="Ps3MediaServer" src="http://www.ubuntero.com.br/wp-content/uploads/2012/08/Captura-de-tela-de-2012-08-19-220243-300x225.png" alt="" width="300" height="225" /></a> <a href="http://www.ubuntero.com.br/wp-content/uploads/2012/08/Captura-de-tela-de-2012-08-19-220256.png"><img class="alignnone size-medium wp-image-3909" title="Ps3MediaServer" src="http://www.ubuntero.com.br/wp-content/uploads/2012/08/Captura-de-tela-de-2012-08-19-220256-300x225.png" alt="" width="300" height="225" /></a> <a href="http://www.ubuntero.com.br/wp-content/uploads/2012/08/Captura-de-tela-de-2012-08-19-220303.png"><img class="alignnone size-medium wp-image-3910" title="Ps3MediaServer" src="http://www.ubuntero.com.br/wp-content/uploads/2012/08/Captura-de-tela-de-2012-08-19-220303-300x225.png" alt="" width="300" height="225" /></a>
</p>

<p style="text-align: left;">
  Fonte: <a href="https://help.ubuntu.com/community/Ps3MediaServer">Wiki Ubuntu</a>
</p>

 [1]: http://www.ubuntero.com.br/2012/01/dlna-serviio/