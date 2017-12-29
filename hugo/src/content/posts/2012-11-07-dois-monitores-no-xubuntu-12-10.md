---
title: Dois monitores no Xubuntu 12.10
author: Ivan Brasil Fuzzer
type: post
date: 2012-11-07T12:00:05+00:00
url: /dois-monitores-no-xubuntu-12-10/
burl:
  - http://ads.tt/13XX
  - http://ads.tt/13XX
  - http://ads.tt/13XX
  - http://ads.tt/13XX
  - http://ads.tt/13XX
  - http://ads.tt/13XX
  - http://ads.tt/13XX
  - http://ads.tt/13XX
  - http://ads.tt/13XX
  - http://ads.tt/13XX
  - http://ads.tt/13XX
  - http://ads.tt/13XX
  - http://ads.tt/13XX
  - http://ads.tt/13XX
  - http://ads.tt/13XX
  - http://ads.tt/13XX
  - http://ads.tt/13XX
  - http://ads.tt/13XX
  - http://ads.tt/13XX
  - http://ads.tt/13XX
  - http://ads.tt/13XX
  - http://ads.tt/13XX
  - http://ads.tt/13XX
  - http://ads.tt/13XX
  - http://ads.tt/13XX
  - http://ads.tt/13XX
  - http://ads.tt/13XX
  - http://ads.tt/13XX
  - http://ads.tt/13XX
  - http://ads.tt/13XX
  - http://ads.tt/13XX
  - http://ads.tt/13XX
  - http://ads.tt/13XX
  - http://ads.tt/13XX
  - http://ads.tt/13XX
categories:
  - Ubuntu
tags:
  - Linux
  - Multi-monitor
  - Xubuntu

---
Como todos sabem, pelo menos quem acompanha o **[Videocast][1]**, estou testando vários sabores do **Ubuntu**, passando uma semana em cada uma. Isto está gerando algum material com as dificuldades e facilidades que cada interface oferece.

Uma das coisas que estou testando em todos é a utilização de **dois monitores** e no **Xubuntu**, por enquanto, temos o pior gerenciamento desta funcionalidade.

A tela de configuração de monitores não oferece as configurações necessárias para trabalhar com os dois monitores com tela extendida, ele simplesmente espelha as duas telas e para conseguir extender os monitores eu tive que apelar para configurações que mostro aqui.<figure id="attachment_4142" style="max-width: 300px" class="wp-caption aligncenter">

<a href="http://www.ubuntero.com.br/wp-content/uploads/2012/11/Captura-de-tela-07-11-2012-091429.png" rel="lightbox"><img class="size-medium wp-image-4142 " title="Configuração de múltiplos monitores no Xbuntu" alt="" src="http://www.ubuntero.com.br/wp-content/uploads/2012/11/Captura-de-tela-07-11-2012-091429-300x245.png" width="300" height="245" /></a><figcaption class="wp-caption-text">Tela de configuração de múltiplos monitores sem opção de posicionamento.</figcaption></figure> 

Para fazer a configuração precisamos apelar para um editor de configurações que já está presente por padrão no sistema. Para isso vá no menu do Xubuntu e vá na opção &#8220;**Gerenciador de Configurações**&#8220;.

<a href="http://www.ubuntero.com.br/wp-content/uploads/2012/11/menu.png" rel="lightbox"><img class="size-medium wp-image-4145 aligncenter" title="Menu de configuração de múltiplos monitores no Xbuntu" alt="Menu de configuração de múltiplos monitores no Xbuntu" src="http://www.ubuntero.com.br/wp-content/uploads/2012/11/menu-182x300.png" width="182" height="300" /></a>

Role a tela até o final e clique no ítem &#8220;**Editor de Configurações**&#8220;.

<a href="http://www.ubuntero.com.br/wp-content/uploads/2012/11/Captura-de-tela-07-11-2012-091511.png" rel="lightbox"><img class="size-medium wp-image-4146 aligncenter" title="Editor de configuração de múltiplos monitores no Xbuntu" alt="Editor de configuração de múltiplos monitores no Xbuntu" src="http://www.ubuntero.com.br/wp-content/uploads/2012/11/Captura-de-tela-07-11-2012-091511-300x245.png" width="300" height="245" /></a>

O editor já abrirá na parte que precisamos, pelo menos foi assim comigo. Agora você tem que saber a resolução do seu monitor principal. Procure pelo seu segundo monitor, no meu caso é o VGA1, e na opção Position -> X dê um duplo clique para editar. O valor que terá que informar é onde começa esta tela, como eu deixo o monitor a direita, informei a resolução do meu monitor principal que é 1366, se quiser deixar no lado esquerdo terá que informar um valor negativo.

<a href="http://www.ubuntero.com.br/wp-content/uploads/2012/11/Captura-de-tela-07-11-2012-091530.png" rel="lightbox"><img class="size-medium wp-image-4147 aligncenter" title="Editor de configuração de múltiplos monitores no Xbuntu" alt="Editor de configuração de múltiplos monitores no Xbuntu" src="http://www.ubuntero.com.br/wp-content/uploads/2012/11/Captura-de-tela-07-11-2012-091530-300x245.png" width="300" height="245" /></a>

Para que as configurações tenham efeito você precisará encerrar e iniciar sua sessão novamente. Na primeira tentativa eu reinicie o computador e não tive resultado, apenas quando encerrei a sessão a configuração realmente ficou.

_Fonte: <a href="http://www.ubuntubuzz.com/2011/12/how-to-dual-monitor-setup-on-xfce.html" target="_blank" rel="nofollow">Ubuntubuzz</a>_

 [1]: http://www.ubuntero.com.br/category/videocast-2/ "Videocast Ubuntero"