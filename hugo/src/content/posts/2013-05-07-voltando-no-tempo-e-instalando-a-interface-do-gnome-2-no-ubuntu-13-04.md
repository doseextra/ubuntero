---
title: Voltando no tempo e instalando a interface do Gnome 2 no Ubuntu 13.04
author: Ivan Brasil Fuzzer
type: post
date: 2013-05-07T11:00:41+00:00
url: /voltando-no-tempo-e-instalando-a-interface-do-gnome-2-no-ubuntu-13-04/
burl:
  - http://ads.tt/3KCT
  - http://ads.tt/3KCT
  - http://ads.tt/3KCT
  - http://ads.tt/3KCT
  - http://ads.tt/3KCT
  - http://ads.tt/3KCT
  - http://ads.tt/3KCT
  - http://ads.tt/3KCT
  - http://ads.tt/3KCT
  - http://ads.tt/3KCT
  - http://ads.tt/3KCT
  - http://ads.tt/3KCT
  - http://ads.tt/3KCT
  - http://ads.tt/3KCT
  - http://ads.tt/3KCT
  - http://ads.tt/3KCT
  - http://ads.tt/3KCT
  - http://ads.tt/3KCT
  - http://ads.tt/3KCT
  - http://ads.tt/3KCT
  - http://ads.tt/3KCT
  - http://ads.tt/3KCT
  - http://ads.tt/3KCT
  - http://ads.tt/3KCT
categories:
  - Ubuntu
tags:
  - Gnome 2
  - Linux
  - mate
  - Ubuntu

---
<a href="http://www.ubuntero.com.br/wp-content/uploads/2013/05/mate.png" rel="lightbox"><img class="size-medium wp-image-5343 aligncenter" title="Interface gráfica Mate Desktop no Ubuntu" alt="Interface gráfica Mate Desktop no Ubuntu" src="http://www.ubuntero.com.br/wp-content/uploads/2013/05/mate-300x158.png" width="300" height="158" /></a>

Antes que comecem a falar, este artigo está aqui porque algumas pessoas ainda estão presas no tempo e não querem sair da interface **gnome-panel**. Para mim esta interface já deu o que tinha que dar, era boa até que as interfaces modernas apareceram.

Se para você o **Unity** ou o **Gnome-Shell** não estão satisfazendo e deseja voltar a utilizar a interface utilizada pelo **Gnome 2**, o gnome-panel, siga estes passos e seu desejo será realizado.

Pressione `Ctrl+Alt+t` para abrir o Terminal e digite os seguintes comandos:

<pre class="brush:shell">sudo add-apt-repository "deb http://packages.mate-desktop.org/repo/ubuntu raring main"
sudo apt-get update
sudo apt-get install mate-archive-keyring
sudo apt-get update
sudo apt-get install mate-core mate-desktop-environment</pre>

Pronto, agora você pode reiniciar o sistema e ficar feliz com a interface gnome-panel que continua em desenvolvimento com o fork chamado **Mate Desktop**.