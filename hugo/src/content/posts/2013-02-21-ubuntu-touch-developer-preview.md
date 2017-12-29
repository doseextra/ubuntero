---
title: Ubuntu Touch Developer Preview
author: Ivan Brasil Fuzzer
type: post
date: 2013-02-22T01:01:02+00:00
url: /ubuntu-touch-developer-preview/
burl:
  - http://ads.tt/2EBI
  - http://ads.tt/2EBI
  - http://ads.tt/2EBI
  - http://ads.tt/2EBI
  - http://ads.tt/2EBI
  - http://ads.tt/2EBI
  - http://ads.tt/2EBI
  - http://ads.tt/2EBI
  - http://ads.tt/2EBI
  - http://ads.tt/2EBI
  - http://ads.tt/2EBI
  - http://ads.tt/2EBI
  - http://ads.tt/2EBI
  - http://ads.tt/2EBI
  - http://ads.tt/2EBI
  - http://ads.tt/2EBI
  - http://ads.tt/2EBI
  - http://ads.tt/2EBI
  - http://ads.tt/2EBI
  - http://ads.tt/2EBI
  - http://ads.tt/2EBI
  - http://ads.tt/2EBI
  - http://ads.tt/2EBI
  - http://ads.tt/2EBI
  - http://ads.tt/2EBI
  - http://ads.tt/2EBI
  - http://ads.tt/2EBI
  - http://ads.tt/2EBI
  - http://ads.tt/2EBI
  - http://ads.tt/2EBI
  - http://ads.tt/2EBI
  - http://ads.tt/2EBI
  - http://ads.tt/2EBI
categories:
  - Ubuntu
tags:
  - Linux
  - phone
  - Ubuntu

---
<p style="text-align: center;">
  <a href="http://www.ubuntero.com.br/wp-content/uploads/2013/02/100_0067.jpg" rel="lightbox"><img class="size-medium wp-image-4520 aligncenter" title="Imagem do Ubuntu for Phones em um Galaxy X (Galaxy Nexus)" alt="Imagem do Ubuntu for Phones em um Galaxy X (Galaxy Nexus)" src="http://www.ubuntero.com.br/wp-content/uploads/2013/02/100_0067-300x225.jpg" width="300" height="225" /></a>
</p>

**Quero deixar bem claro que esta é uma versão para desenvolvedores e é muito precária em recursos, além de conter vários bugs. Não nos responsabilizamos por possíveis danos causados ao celular.**

Foi lançado hoje o **Ubuntu Touch Developer Preview** e, graças as doações feitas por vocês, pude fazer a instalação no **Galaxy X**. O processo de instalação é bem simples e você pode ver abaixo:

O primeiro passo é preparar o seu computador para fazer a instalação no celular. Para isso abra o terminal pressionando `Ctrl+Alt+t` e digite os seguintes comandos:

<pre class="brush:shell">sudo add-apt-repository ppa:phablet-team/tools -y
sudo apt-get update
sudo apt-get install phablet-tools android-tools-adb android-tools-fastboot</pre>

Agora desbloqueie seu aparelho:

  * Desligue seu celular, pressione ao mesmo tempo a tecla de mais e menos volume e então ligue o celular.
  * O celular vai parar na tela do bootloader
  * Conecte o celular na USB do seu computador
  * Se não fechou o terminal digite o comando abaixo

<pre class="brush:shell">sudo fastboot oem unlock</pre>

  * Na tela do celular aceite os termos de desbloqueio
  * Pressione o botão de ligar mais uma vez na opção Start

Com o sistema Android ainda, habilite o modo de depuração.

  1. Vá no menu Configurações, Sobre o telefone, Modo de desenvolvedor e habilite a depuração USB
  2. No seu computador execute os comandos

<pre class="brush:shell">adb kill-server
adb start-server</pre>

Conecte o cabo USB no computador e no celular e execute o seguinte comando no terminal do computador:

<pre class="brush:shell">phablet-flash ubuntu-system --channel devel --no-backup</pre>

Aguarde que este processo pode demorar um bom tempo se sua conexão não for muito boa e assim que o processo terminar, seu Galaxy X estará rodando o Ubuntu Phone.

Um review sairá em breve, recomendo que aguardem antes de decidirem instalar o sistema em seus celulares.

**Quero deixar bem claro que esta é uma versão para desenvolvedores e é muito precária em recursos, além de conter vários bugs. Não nos responsabilizamos por possíveis danos causados ao celular.**