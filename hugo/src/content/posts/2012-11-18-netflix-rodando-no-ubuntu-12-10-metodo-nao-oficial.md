---
title: Netflix rodando no Ubuntu 12.10 (método não oficial)
author: Ivan Brasil Fuzzer
type: post
date: 2012-11-18T17:56:02+00:00
url: /netflix-rodando-no-ubuntu-12-10-metodo-nao-oficial/
burl:
  - http://ads.tt/13W1
  - http://ads.tt/13W1
  - http://ads.tt/13W1
  - http://ads.tt/13W1
  - http://ads.tt/13W1
  - http://ads.tt/13W1
  - http://ads.tt/13W1
  - http://ads.tt/13W1
  - http://ads.tt/13W1
  - http://ads.tt/13W1
  - http://ads.tt/13W1
  - http://ads.tt/13W1
  - http://ads.tt/13W1
  - http://ads.tt/13W1
  - http://ads.tt/13W1
  - http://ads.tt/13W1
  - http://ads.tt/13W1
  - http://ads.tt/13W1
  - http://ads.tt/13W1
  - http://ads.tt/13W1
  - http://ads.tt/13W1
  - http://ads.tt/13W1
  - http://ads.tt/13W1
  - http://ads.tt/13W1
  - http://ads.tt/13W1
  - http://ads.tt/13W1
  - http://ads.tt/13W1
  - http://ads.tt/13W1
  - http://ads.tt/13W1
  - http://ads.tt/13W1
  - http://ads.tt/13W1
  - http://ads.tt/13W1
  - http://ads.tt/13W1
  - http://ads.tt/13W1
categories:
  - Ubuntu
tags:
  - Linux
  - Netflix
  - PPA
  - Ubuntu

---
<a href="http://www.ubuntero.com.br/wp-content/uploads/2012/11/netflix600.png" rel="lightbox"><img class="size-medium wp-image-4192 aligncenter" title="PPA Netflix para Ubuntu" alt="PPA Netflix para Ubuntu" src="http://www.ubuntero.com.br/wp-content/uploads/2012/11/netflix600-300x168.png" width="300" height="168" /></a>

O site iheartubuntu lançou um desafio aos seus leitores para que estes encontrassem uma maneira de rodar o **Netflix** no **Linux** sem a necessidade de uma máquina virtual. Esta semana o site teve um &#8220;ganhador&#8221; que conseguiu encontrar o caminho das pedras e agora temos um **PPA** para automatizar todo o processo.

Para quem não conhece, o Netflix é um serviço onde os usuários, pagantes, podem assistir a **filmes** sob demanda de forma totalmente legal. Oficialmente não existe uma maneira de rodar o serviço no Linux, por isso o título do artigo está com a frase &#8220;(método não oficial)&#8221;.

Para podermos ter acesso a este serviço, abra o terminal pressionando `Ctrl+Alt+t` e digite os seguintes comandos:

<pre class="brush:shell">sudo apt-add-repository ppa:ehoover/compholio -y
sudo apt-get update && sudo apt-get install netflix-desktop</pre>

Agora abra o _dash_ pressionando e soltando a tecla Super (também conhecida como tecla windows) e digite `netflix` e pressione Enter.

Algumas perguntas serão feitas e você deve responder sempre que sim. Provavelmente será pedido para que faça o download de alguns programas e você sempre deverá fazer o download dos programas.

Quando for assistir ao primeiro filme, será pedido para habilitar a reprodução de conteúdo protegido. Obrigatoriamente você deverá habilitar para que o vídeo possa ser exibido.

<a href="http://www.ubuntero.com.br/wp-content/uploads/2012/11/Captura-de-tela-de-2012-11-18-151804.png" rel="lightbox"><img class="size-medium wp-image-4191 aligncenter" title="Habilitar reprodução de conteúdo protegido no Netflix para Ubuntu" alt="Habilitar reprodução de conteúdo protegido no Netflix para Ubuntu" src="http://www.ubuntero.com.br/wp-content/uploads/2012/11/Captura-de-tela-de-2012-11-18-151804-300x168.png" width="300" height="168" /></a>

Tive alguns problemas para fazer funcionar, mas não consegui documentar com certeza os passos, então fico a disposição para tentar ajudar caso tenham problemas.

<a href="http://www.ubuntero.com.br/wp-content/uploads/2012/11/Captura-de-tela-de-2012-11-18-154740.png" rel="lightbox-album"><img class="size-medium wp-image-4195 aligncenter" title="Captura de tela Netflix no Ubuntu" alt="Captura de tela Netflix no Ubuntu" src="http://www.ubuntero.com.br/wp-content/uploads/2012/11/Captura-de-tela-de-2012-11-18-154740-300x168.png" width="300" height="168" /></a> <a href="http://www.ubuntero.com.br/wp-content/uploads/2012/11/Captura-de-tela-de-2012-11-18-154755.png" rel="lightbox-album"><img class="aligncenter size-medium wp-image-4196" title="Captura de tela Netflix no Ubuntu" alt="Captura de tela Netflix no Ubuntu" src="http://www.ubuntero.com.br/wp-content/uploads/2012/11/Captura-de-tela-de-2012-11-18-154755-300x168.png" width="300" height="168" /></a> <a href="http://www.ubuntero.com.br/wp-content/uploads/2012/11/Captura-de-tela-de-2012-11-18-154817.png" rel="lightbox-album"><img class="aligncenter size-medium wp-image-4197" title="Captura de tela Netflix no Ubuntu" alt="Captura de tela Netflix no Ubuntu" src="http://www.ubuntero.com.br/wp-content/uploads/2012/11/Captura-de-tela-de-2012-11-18-154817-300x168.png" width="300" height="168" /></a> <a href="http://www.ubuntero.com.br/wp-content/uploads/2012/11/Captura-de-tela-de-2012-11-18-154836.png" rel="lightbox-album"><img class="aligncenter size-medium wp-image-4198" title="Captura de tela Netflix no Ubuntu" alt="Captura de tela Netflix no Ubuntu" src="http://www.ubuntero.com.br/wp-content/uploads/2012/11/Captura-de-tela-de-2012-11-18-154836-300x168.png" width="300" height="168" /></a>

Aproveite e faça uma doação para o Erich Hoover que teve um trabalhão para encontrar esta maneira e principalmente para deixar um PPA disponível para facilitar a vida de todos. Acesse o site <a href="http://netflixonlinux.chipin.com/netflix-works-on-ubuntu" target="_blank" rel="nofollow">http://netflixonlinux.chipin.com/netflix-works-on-ubuntu</a> e contribua com o que puder.

_Fonte: <a href="http://www.iheartubuntu.com/2012/11/ppa-for-netflix-desktop-app.html" target="_blank" rel="nofollow">iheartubuntu</a>_