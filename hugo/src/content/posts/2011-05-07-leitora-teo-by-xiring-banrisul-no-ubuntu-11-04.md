---
title: Leitora Teo by Xiring – BANRISUL – no Ubuntu 11.04
author: Renato
type: post
date: 2011-05-07T13:15:53+00:00
url: /leitora-teo-by-xiring-banrisul-no-ubuntu-11-04/
categories:
  - Ubuntu
tags:
  - 11.04
  - banrisul
  - leitora de cartão
  - Linux
  - natty
  - teo
  - Ubuntu

---
[<img class="alignleft size-full wp-image-2238" src="http://www.ubuntero.com.br/wp-content/uploads/2011/05/teo.jpeg" alt="" width="108" height="144" />][1][Em um post anterior][2] eu havia compartilhado o tutorial de instalação da leitora de cartão Teo by Xiring para o Ubuntu 10.04 LTS.

Observei que o procedimento não funciona no Ubuntu 11.04 Natty 🙁

Mas aqui está a solução. Segue o tutorial 🙂

Abra o terminal e digite:
  
 ****

&nbsp;

<pre class="brush:shell">sudo apt-get install libccid pcscd pcsc-tools</pre>

Após isso, insira o &#8220;pcscd&#8221; nos aplicativos de sessão (aperte &#8220;super&#8221; no teclado > digite &#8220;aplicativos&#8221; e irá aparecer &#8220;aplicativos de sessão&#8221; na pesquisa, clique nele > clique em adicionar > digite pcscd nos dois campos e ok).

Reinicie seu Ubuntu. Com esse procedimento, no meu laptop, funcionou o acesso.

Créditos: <http://ubuntuforum-pt.org/index.php?topic=82216.0>
  
(o autor editou a postagem depois da minha pesquisa mas de qualquer forma funcionou, fiquem à vontade para ler a nova versão do post que está no link acima).

Fiquem com Deus!

Twitter: [@renatobluesboy][3]

 [1]: http://www.ubuntero.com.br/wp-content/uploads/2011/05/teo.jpeg
 [2]: http://freelinux-br.blogspot.com/2010/11/leitora-do-banrisul.html
 [3]: http://twitter.com/renatobluesboy