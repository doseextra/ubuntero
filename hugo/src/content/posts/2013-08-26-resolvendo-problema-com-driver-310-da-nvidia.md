---
title: Resolvendo problema com driver 310 da Nvidia
author: Ivan Brasil Fuzzer
type: post
date: 2013-08-26T11:00:45+00:00
url: /resolvendo-problema-com-driver-310-da-nvidia/
burl:
  - http://ads.tt/AOA1
  - http://ads.tt/AOA1
categories:
  - Ubuntu
tags:
  - 310
  - 319
  - bug
  - nvidia
  - Ubuntu

---
Artigo enviado por Wagner ([Gplus][1], [Facebook][2] e [twitter][3])

Ao efetuar uma atualização do sistema, houve um problema com o driver 310 da NVIDIA(VGA GeForce GT 220) no qual estava usando no kernel anterior ao que foi atualizado. Ao ligar o PC o Ubuntu 12.04.2 LTS não iniciava o seu ambiente desktop. Não houve kernel panic mas o X não subiu depois desta atualização. Executei o seguinte procedimento para remontar a raiz do sistema em modo de leitura e escrita, no modo de recuperação e para minha felicidade funcionou e pude então remover o driver bugado e instalar o mais novo que foi disponibilizado nos repositórios do Ubuntu 12.04.2 LTS, o driver 319.32 da NVIDIA para Linux.

Antes de tudo carreguei o GRUB pressionando a tecla SHIFT na inicialização do computador e depois optei por carregar o kernel em modo de recuperação que fica logo abaixo da opção padrão. Ao carregar o menu no modo de recuperação, optei por carregar o &#8220;root&#8221; para me logar como usuário administrador do sistema. Ao logar com o usuário root, a raiz (/) a qual estava no momento fica &#8220;somente leitura&#8221;, portanto nesse caso tive que remontar a raiz em modo de leitura e escrita para poder remover o driver e instalar o driver mais atual conforme comando abaixo:

<pre class="brush:shell">mount -o remount,rw /</pre>

Agora com o acesso em leitura e escrita consegui remover o driver bugado desta forma:

<pre class="brush:shell">apt-get purge nvidia-310 -y
apt-get install nvidia-319-updates</pre>

Depois de instalado o driver reiniciei o sistema:

<pre class="brush:shell">init 6</pre>

O sistema voltou ao normal mas percebi um problema com o &#8220;framebuffer&#8221; do kernel que depois vou procurar como resolver isso. No mais foi essa a solução que apliquei no meu desktop e com êxito.

Um forte abraço e até mais. 😉

 [1]: http://gplus.is/wagnux
 [2]: http://www.facebook.com/wagnux
 [3]: http://twitter.com/wagnux