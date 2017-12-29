---
title: Xmir não estará mais habilitado por padrão no Ubuntu 13.10
author: Ivan Brasil Fuzzer
type: post
date: 2013-10-02T11:38:45+00:00
url: /xmir-nao-estara-mais-habilitado-por-padrao-no-ubuntu-13-10/
burl:
  - http://ads.tt/E7WV
  - http://ads.tt/E7WV
categories:
  - Ubuntu
tags:
  - 13.10
  - Linux
  - Mir
  - saucy
  - Ubuntu
  - xmir

---
<p style="text-align: center;">
  <a href="http://www.ubuntero.com.br/wp-content/uploads/2013/08/mir.png"><img class="alignnone size-medium wp-image-5881" alt="mir" src="http://www.ubuntero.com.br/wp-content/uploads/2013/08/mir-300x252.png" width="300" height="252" /></a>
</p>

&#8220;Os haters pira com esta notícia&#8221;. Não é novidade para ninguém que a Canonical pretendia deixar o Xmir como servidor gráfico padrão no Ubuntu 13.10 para as placas suportadas, diga-se Intel e drivers livres da NVIDIA e ATI, mas devido a dificuldades técnicas, isto não será mais possível.

Uma das primeiras coisas que me perguntaram pelas redes sociais assim que postei uma imagem da tela de detalhes do Ubuntu, onde mostrava que eu estava rodando o Ubuntu 13.10, foi se já estava rodando com o Xmir. Não minto, foi uma das primeiras coisas que verifiquei, após instalar dois programas que não funcionavam na beta anterior e são imprescindíveis para o meu trabalho.

<p style="text-align: center;">
  <a href="http://www.ubuntero.com.br/wp-content/uploads/2013/10/ubuntu-13.10-saucy.png"><img class="alignnone size-medium wp-image-6085" alt="ubuntu-13.10-saucy" src="http://www.ubuntero.com.br/wp-content/uploads/2013/10/ubuntu-13.10-saucy-300x168.png" width="300" height="168" /></a>
</p>

O Mir, que é realmente o servidor gráfico está rodando satisfatoriamente e seu desenvolvimento está muito bem. No entanto, os desenvolvedores não estão satisfeitos com o desempenho da camada de compatibilidade com o X, o Xmir, principalmente com multi monitores, e não irão comprometer o desempenho do sistema apenas para botar o Xmir na distribuição.

A decisão da Intel de não suportar os patches da Canonical para o bom funcionamento de seu driver no Mir não tem ligação com esta decisão. Isto por que a decisão da Intel foi política e não técnica e a Canonical continua adicionando seu patch para que tudo funcione.

Se você, assim como eu, vai testar o Ubuntu Touch, nada muda. O sistema para dispositivos móveis será entregue com o servidor Mir por padrão. Isto ainda não é realidade, mas pelo que eu tenho lido na lista de desenvolvimento do Mir, ainda esta semana o servidor gráfico padrão do Ubuntu Touch será o Mir.

Para quem quiser testar o Xmir no Ubuntu 13.10, ele estará disponível nos repositórios, bastará instalar para ver como está o seu desenvolvimento e desempenho.

**Fonte: [OMG Ubuntu][1]**

 [1]: http://www.omgubuntu.co.uk/2013/10/xmir-longer-default-supported-cards-13-10