---
title: Remover PPA
author: Ivan Brasil Fuzzer
type: post
date: 2012-03-28T13:26:19+00:00
url: /remover-ppa/
categories:
  - Ubuntu
tags:
  - Linux
  - PPA
  - remover ppa
  - Ubuntu

---
É inevitável ficarmos sem adicionar algum PPA em nossos Ubuntu, sempre tem algum software que não está nos repositórios oficiais ou que a versão não é a mais atualizada. O problema é que alguns PPA&#8217;s são experimentais e nem sempre o resultado é agradável e para remover nem sempre lembramos quais foram os pacotes adicionados. Para resolver o problema e voltar os pacotes para as versões originais dos repositórios oficiais, podemos utilizar o programa ppa-purge que está disponível nos repositórios oficiais do Ubuntu.

Para instalar este pacote, abra a Central de Programas do Ubuntu e procure por &#8220;ppa-purge&#8221;, apenas um programa aparecerá e é só clicar em instalar.

Para facilitar, vou dar um exemplo. Eu adicionei o ppa &#8220;ppa:ojno/unity-minimize-on-click&#8221; e não gostei do resultado, neste caso eu preciso voltar a versão de alguns pacotes referentes ao Unity e eu não sei mais quais são estes pacotes.

<p style="text-align: center;">
  <a href="http://www.ubuntero.com.br/wp-content/uploads/2012/03/Captura-de-tela-de-2012-03-28-100504.png"><img class="alignnone size-medium wp-image-3388" title="Central de programas do Ubuntu" src="http://www.ubuntero.com.br/wp-content/uploads/2012/03/Captura-de-tela-de-2012-03-28-100504-300x175.png" alt="Central de programas do Ubuntu" width="300" height="175" /></a>
</p>

Para poder remover este PPA e voltar os pacotes as versões oficiais, abra o terminal pressionando Ctrl+Alt+t e digite o seguinte comando, lembrando que é apenas para o exemplo citado acima:

<pre class="brush:shell">sudo ppa-purge ppa:ojno/unity-minimize-on-click</pre>

Pronto, só reiniciar a sessão que estarei com as versões oficiais dos pacotes e o ppa removido da minha lista de repositórios.

Se você digitar apenas ppa-purge no terminal, verá que terá todas as opções do programa e que existem outras maneiras de remover os PPA&#8217;s, no entanto as outras não funcionaram para mim em meus testes com o repositório de exemplo.

_**ppa:ojno/unity-minimize-on-click**_