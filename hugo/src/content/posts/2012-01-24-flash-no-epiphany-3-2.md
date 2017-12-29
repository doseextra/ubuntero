---
title: Flash no Epiphany 3.2
author: Anderson Henrique
type: post
date: 2012-01-24T10:19:44+00:00
url: /flash-no-epiphany-3-2/
categories:
  - Ubuntu
tags:
  - epiphany
  - flash
  - Linux
  - Ubuntu

---
Olá a todos. Meu notebook &#8220;morreu&#8221; há cerca de 3 meses atrás, e o desktop aqui de casa só passou a ser meu depois que minha mãe comprou um netbook para ela, e bem, o desktop não é lá grandes coisas, tem um Intel Celeron e 2 GB de RAM então com o uso prolongado dos navegadores ele acaba perdendo muito desempenho e para não ter que ficar fechando o tempo todo as janelas dos mesmos, o jeito foi pesquisar por uma alternativa. Lembro então que já havia testado o navegador do Gnome e resolvi instalá-lo e o que vi me agradou bastante, mas ainda havia um porém: o flash não funcionava de maneira alguma. Depois de uns dois dias, eis que encontro a solução. Se já estiver com o flash instalado vá ao passo 2.

Instale o flash:

<pre class="brush:shell">sudo apt-get install flashplugin-installer</pre>

Instale o nspluginwrapper:****

<pre class="brush:shell">sudo apt-get install nspluginwrapper</pre>

Depois rode os seguintes comandos:

<pre class="brush:shell">sudo nspluginwrapper -i /usr/lib/flashplugin-installer/libflashplayer.so
nspluginwrapper -v -a -n -i</pre>

Pronto, agora o flash vai estar funcionando perfeitamente. Até a próxima.