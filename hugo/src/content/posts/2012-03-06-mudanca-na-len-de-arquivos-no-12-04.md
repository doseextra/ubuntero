---
title: Mudança na lens de arquivos no 12.04
author: Ivan Brasil Fuzzer
type: post
date: 2012-03-06T16:52:46+00:00
url: /mudanca-na-len-de-arquivos-no-12-04/
categories:
  - Ubuntu
tags:
  - 12.04
  - arquivos
  - lens
  - Linux
  - Ubuntu
  - Unity

---
<p style="text-align: center;">
  <a href="http://www.ubuntero.com.br/wp-content/uploads/2012/03/newlens.png"><img class="alignnone size-medium wp-image-3315" title="newlens" src="http://www.ubuntero.com.br/wp-content/uploads/2012/03/newlens-300x197.png" alt="" width="300" height="197" /></a>
</p>

Quem já usou o Unity sabe que ele tem uma grande ferramenta na lens Arquivos. Esta lens facilita a abertura de arquivos da mesma maneira que a lens de aplicativos ajuda a encontrar aplicações, no entanto esta lens, até a versão 11.10, trabalho apenas com os arquivos que já foram abertos pelo usuário.

Para a versão 12.04 esta dinâmica está sendo alterada e os arquivos a serem pesquisados e mostrados serão relativos a todos os arquivos do sistema, independentemente de já terem sido abertos ou não pelo usuário.

Se você está usando o Ubuntu 12.04 Beta 1, ajude a equipe de desenvolvimento testando exaustivamente este novo recurso. Para mim este recurso é fundamental para melhorar a relação usuário Unity.

Como esta len ainda está sendo testada, para instalar no seu Ubuntu 12.04 execute os seguintes comandos:

<pre class="brush:shell">sudo add-apt-repository ppa:unity-team/lenses-testing
sudo apt-get update
sudo apt-get install unity-lens-files</pre>

Encerre sua sessão ou reinicie seu computador para que a alteração entre em vigor.

Se encontrar algum bug, relate através deste endereço <https://bugs.launchpad.net/unity-lens-files> e não esqueça de mencionar que está usando o PPA.

**Fonte: [popey.com blog][1]**

 [1]: http://popey.com/blog/2012/03/06/improved-unity-files-lens-call-for-testing/