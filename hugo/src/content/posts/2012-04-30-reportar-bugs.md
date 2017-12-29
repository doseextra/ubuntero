---
title: Reportar bugs
author: Ivan Brasil Fuzzer
type: post
date: 2012-04-30T11:00:48+00:00
url: /reportar-bugs/
categories:
  - Ubuntu
tags:
  - bug
  - Linux
  - Ubuntu

---
<p style="text-align: center;">
  <a href="http://www.ubuntero.com.br/wp-content/uploads/2012/04/Captura-de-tela-de-2012-04-29-180457.png"><img class="alignnone size-thumbnail wp-image-3503" title="crash polly" src="http://www.ubuntero.com.br/wp-content/uploads/2012/04/Captura-de-tela-de-2012-04-29-180457-150x48.png" alt="" width="150" height="48" /></a>
</p>

<p style="text-align: left;">
  Quando um erro em um programa gera uma exceção que &#8220;quebra&#8221; a execução, como no exemplo acima, fica fácil reportar o problema diretamente para a Canonical, mas como fazer quando o problema não envolve travamento de programas?
</p>

<p style="text-align: left;">
  Eu passei por este problema ao verificar que após atualizar o meu Desktop para o Ubuntu 12.04. No meu caso tudo funciona, menos o microfone que não tem jeito de captar sons. A primeira coisa que fiz foi verificar se o problema não é com o microfone mesmo e pluguei ele em outro computador, como ele funcionou, tentei com um live CD do Ubuntu 11.10 e o microfone também funcionava normalmente. O que restou então foi relatar o bug para que a Canonical possa investigar e arrumar, mas como fazer isso?
</p>

<p style="text-align: left;">
  A tarefa é simples. Pressione Alt+F2 e digite o seguinte comando:
</p>

<pre class="brush:shell">ubuntu-bug</pre>

<p style="text-align: left;">
  Pronto, na janela que abre você começa a descrever o seu problema.
</p>

<p style="text-align: center;">
  <a href="http://www.ubuntero.com.br/wp-content/uploads/2012/04/Captura-de-tela-de-2012-04-29-202406.png"><img class="alignnone size-medium wp-image-3504" title="Captura de tela de 2012-04-29 20:24:06" src="http://www.ubuntero.com.br/wp-content/uploads/2012/04/Captura-de-tela-de-2012-04-29-202406-300x200.png" alt="" width="300" height="200" /></a>
</p>

<p style="text-align: left;">
  Como as opções estão em inglês, segue a tradução de cada opção:
</p>

  * Monitor(X.org) &#8211; para relatar problemas relacionados ao vídeo como problemas com drivers.
  * Dispositivos de armazenagem internos ou externos &#8211; para problemas relacionados a discos e pendrives ou cartões de memória.
  * Problemas relacionados a segurança &#8211; acho que não preciso explicar.
  * Sound/audio related problems &#8211; relatar problemas relacionados a som que foi o meu caso.
  * Outros problemas &#8211; acredito que também não preciso explicar.

No meu caso selecionei a opção relacionada a som. Nas próximas telas é bom saber um pouco de inglês ou ter o [google translate][1] a mão para saber o que está escrito. Abaixo veja os passos que segui para relatar [este bug][2]:

<p style="text-align: center;">
  <a href="http://www.ubuntero.com.br/wp-content/uploads/2012/04/Captura-de-tela-de-2012-04-29-203456.png"><img class="alignnone size-medium wp-image-3505" title="Captura de tela de 2012-04-29 20:34:56" src="http://www.ubuntero.com.br/wp-content/uploads/2012/04/Captura-de-tela-de-2012-04-29-203456-300x238.png" alt="" width="300" height="238" /></a> <a href="http://www.ubuntero.com.br/wp-content/uploads/2012/04/Captura-de-tela-de-2012-04-29-203510.png"><img class="alignnone size-medium wp-image-3506" title="Captura de tela de 2012-04-29 20:35:10" src="http://www.ubuntero.com.br/wp-content/uploads/2012/04/Captura-de-tela-de-2012-04-29-203510-300x214.png" alt="" width="300" height="214" /></a> <a href="http://www.ubuntero.com.br/wp-content/uploads/2012/04/Captura-de-tela-de-2012-04-29-203529.png"><img class="alignnone size-medium wp-image-3507" title="Captura de tela de 2012-04-29 20:35:29" src="http://www.ubuntero.com.br/wp-content/uploads/2012/04/Captura-de-tela-de-2012-04-29-203529-300x74.png" alt="" width="300" height="74" /></a> <a href="http://www.ubuntero.com.br/wp-content/uploads/2012/04/Captura-de-tela-de-2012-04-29-203537.png"><img class="alignnone size-medium wp-image-3508" title="Captura de tela de 2012-04-29 20:35:37" src="http://www.ubuntero.com.br/wp-content/uploads/2012/04/Captura-de-tela-de-2012-04-29-203537-300x91.png" alt="" width="300" height="91" /></a> <a href="http://www.ubuntero.com.br/wp-content/uploads/2012/04/Captura-de-tela-de-2012-04-29-203555.png"><img class="alignnone size-medium wp-image-3509" title="Captura de tela de 2012-04-29 20:35:55" src="http://www.ubuntero.com.br/wp-content/uploads/2012/04/Captura-de-tela-de-2012-04-29-203555-300x143.png" alt="" width="300" height="143" /></a> <a href="http://www.ubuntero.com.br/wp-content/uploads/2012/04/Captura-de-tela-de-2012-04-29-203631.png"><img class="alignnone size-medium wp-image-3510" title="Captura de tela de 2012-04-29 20:36:31" src="http://www.ubuntero.com.br/wp-content/uploads/2012/04/Captura-de-tela-de-2012-04-29-203631-300x241.png" alt="" width="300" height="241" /></a>
</p>

Clicando no botão &#8220;Enviar&#8221;, os dados serão enviados para o launchpad e você finaliza o relato como em qualquer outro bug que já tenha registrado.

 [1]: http://translate.google.com
 [2]: https://bugs.launchpad.net/ubuntu/+source/alsa-driver/+bug/991155