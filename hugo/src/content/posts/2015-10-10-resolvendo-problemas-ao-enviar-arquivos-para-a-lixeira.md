---
title: Resolvendo problemas ao enviar arquivos para a lixeira
author: Ivan Brasil Fuzzer
type: post
date: 2015-10-10T13:20:00+00:00
url: /resolvendo-problemas-ao-enviar-arquivos-para-a-lixeira/
categories:
  - Ubuntu
tags:
  - bug
  - lixeira
  - Ubuntu

---
[<img class="aligncenter size-full wp-image-6917" src="http://www.ubuntero.com.br/wp-content/uploads/2015/10/lixeira.png" alt="lixeira" width="184" height="149" />][1]

Dando uma olhada no canal do IRC do Ubuntu, sim, este canal continua muito vivo hoje em dia, topei com um problema de um usuário( Jairo Augusto dos Santos) que não conseguia enviar arquivos para a lixeira. Ele tinha duas opções, apagar o arquivo sem chances de reparar depois, ou não apagava o arquivo.

Primeiro notamos que a pasta da lixeira estava com o dono setado de maneira errada, estava com o root como dono e grupo. Tentamos alterar o usuário para o usuário que estava sendo utilizado pelo Jairo, mas isto não resolveu o problema.

Alguma pesquisa depois encontrei algumas entradas no [Askubuntu][2] onde um usuário citou que apagando a pasta Trash e recriando-a, o problema era resolvido. Tentamos esta solução e ela realmente foia solução para o caso.

Para aplicar esta solução, abra o terminal pressionando Ctrl+alt+t e digite os seguintes comandos:

<pre class="brush:shell">cd ~/.local/share
sudo rm -r Trash
mkdir Trash && chmod 700 Trash</pre>

Pronto, agora tudo está normalizado.

 [1]: http://www.ubuntero.com.br/wp-content/uploads/2015/10/lixeira.png
 [2]: http://askubuntu.com/questions/288513/cant-move-files-to-the-trash