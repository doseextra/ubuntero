---
title: Emulador x86 para Ubuntu Touch
author: Ivan Brasil Fuzzer
type: post
date: 2014-05-12T19:53:51+00:00
url: /emulador-x86-para-ubuntu-touch/
categories:
  - Ubuntu
tags:
  - mobile
  - touch
  - Ubuntu

---
[<img class="aligncenter size-medium wp-image-6686" src="http://www.ubuntero.com.br/wp-content/uploads/2014/05/emulador-ubuntu-touch-152x300.png" alt="emulador-ubuntu-touch" width="152" height="300" />][1]

Eis que hoje recebo uma ótima notícia via [lista de discussão do time do ubuntu-phone][2]. Foi lançado o emulador x86 do Ubuntu Touch.

Infelizmente, nem todos os softwares estão disponíveis na imagem x86, mas dá para ter uma boa ideia de como o sistema funciona. Agora voltamos a ter uma boa chance de mostrar o andamento do desenvolvimento do Ubuntu Touch, mesmo que não seja em um aparelho real.

Se você quiser instalar, abra o terminal pressionando Ctrl+Alt+t e execute os seguintes comandos:

<pre class="brush:shell">sudo apt-add-repository ppa:phablet-team/tools
sudo apt-get update
sudo apt-get install ubuntu-emulator ubuntu-emulator-runtime</pre>

Crie a imagem:

<pre class="brush:shell">sudo ubuntu-emulator create --channel=ubuntu-touch/utopic-proposed --arch=i386 test_x86</pre>

Para executar o emulador, execute o seguinte comando:

<pre class="brush:shell">ubuntu-emulator run test_x86</pre>

Pronto, agora é só se divertir testando o Ubuntu Touch.

Se você tem uma tela de 14 polegadas, como eu, o emulador ficará muito grande e não caberá todo na tela. Para resolver execute o último comando com os seguintes argumentos extra &#8220;&#8211;scale=0.7&#8221;, ficando assim o comando:

<pre class="brush:shell">ubuntu-emulator run test_x86 --scale=0.7</pre>

 [1]: http://www.ubuntero.com.br/wp-content/uploads/2014/05/emulador-ubuntu-touch.png
 [2]: https://lists.launchpad.net/ubuntu-phone/msg08059.html