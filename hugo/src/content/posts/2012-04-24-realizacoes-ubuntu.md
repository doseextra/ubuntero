---
title: Realizações Ubuntu
author: Ivan Brasil Fuzzer
type: post
date: 2012-04-24T22:43:14+00:00
url: /realizacoes-ubuntu/
categories:
  - Ubuntu
tags:
  - accomplishement
  - jono
  - jono bacon
  - Linux
  - Ubuntu

---
<p style="text-align: center;">
  <a href="http://www.ubuntero.com.br/wp-content/uploads/2012/04/Captura-de-tela-de-2012-04-24-193924.png"><img class="alignnone size-medium wp-image-3479" title="Captura de tela de 2012-04-24 19:39:24" src="http://www.ubuntero.com.br/wp-content/uploads/2012/04/Captura-de-tela-de-2012-04-24-193924-260x300.png" alt="" width="260" height="300" /></a>
</p>

Ainda está no princípio do desenvolvimento mas eu achei a aplicação bem interessante. A ideia é &#8220;recompensar&#8221; por realizações relativas ao Ubuntu, como por exemplo assinar o código de conduta.

Para instalar e usar o programa você precisa estar usando o Ubuntu 12.04 e ter uma conta no UbuntuOne. Se você atende a estas especificações, execute os seguintes comandos no terminal para instalar o programa.

<pre class="brush:shell">sudo add-apt-repository ppa:ubuntu-accomplishments-admins/daily
sudo apt-get update
sudo apt-get install ubuntu-community-accomplishments accomplishments-daemon accomplishments-viewer</pre>

Para rodar o programa execute o seguinte comando(o terminal ficará bloqueado):

<pre class="brush:shell">twistd -noy /usr/bin/accomplishments-daemon</pre>

Depois pode acessar o programa pressionando a tecla Super e digitando &#8220;accomp&#8221; sem aspas e pressionar Enter.

<p style="text-align: center;">
  <a href="http://www.ubuntero.com.br/wp-content/uploads/2012/04/Captura-de-tela-de-2012-04-24-193933.png"><img class="alignnone size-medium wp-image-3480" title="Captura de tela de 2012-04-24 19:39:33" src="http://www.ubuntero.com.br/wp-content/uploads/2012/04/Captura-de-tela-de-2012-04-24-193933-300x225.png" alt="" width="300" height="225" /></a>
</p>

Mais informações podem ser vistas no site do desenvolvedor [Jono Bacon][1].

 [1]: http://www.jonobacon.org/2012/04/24/ubuntu-accomplishments-the-road-to-0-1/