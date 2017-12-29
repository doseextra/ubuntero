---
title: Pacotes otimizados para o seu computador
author: Ivan Brasil Fuzzer
type: post
date: 2011-11-16T10:00:23+00:00
url: /pacotes-otimizados-para-o-seu-computador/
categories:
  - Ubuntu
tags:
  - apt
  - apt-build
  - apt-get
  - compilação
  - Linux
  - Ubuntu

---
Se você é louco por desempenho e tem bastante tempo para compilar uma aplicação, o apt-build foi feito para você. A sintaxe do programa é muito parecida com o apt-get, no entanto, o apt-build utiliza os pacotes de código fonte(dev) para fazer as instalações, fazendo com que se ganhe um pouco com desempenho, nem sempre este desempenho ganho vale o tempo para recompilar a aplicação.

Para instalar o apt-build não precisamos adicionar nenhum repositório, ele já faz parte do Ubuntu. Para isto abra o terminal pressionando Crl+Alt+t e digite os seguintes comandos:

<pre class="brush:shell">sudo apt-get install apt-build</pre>

Selecione o nível de otimização que deseja, o nível forte irá levar mais tempo para compilar os programas, mas é o indicado para quem deseja ter o máximo de desempenho com a compilação.

<p style="text-align: center;">
  <a href="http://www.ubuntero.com.br/wp-content/uploads/2011/11/image1.png"><img class="alignnone size-medium wp-image-2986" title="image1" src="http://www.ubuntero.com.br/wp-content/uploads/2011/11/image1-300x166.png" alt="" width="300" height="166" /></a>
</p>

Aceite quando for pedido para adicionar a linha do APT em seus repositórios.

<p style="text-align: center;">
  <a href="http://www.ubuntero.com.br/wp-content/uploads/2011/11/image2.png"><img class="alignnone size-medium wp-image-2987" title="image2" src="http://www.ubuntero.com.br/wp-content/uploads/2011/11/image2-300x165.png" alt="" width="300" height="165" /></a>
</p>

Selecione o seu tipo de processador que será utilizado nas otimizações.

<p style="text-align: center;">
  <a href="http://www.ubuntero.com.br/wp-content/uploads/2011/11/image3.png"><img class="alignnone size-medium wp-image-2988" title="image3" src="http://www.ubuntero.com.br/wp-content/uploads/2011/11/image3-300x165.png" alt="" width="300" height="165" /></a>
</p>

Depois disto é só utilizar o programa na linha de comando. Veja abaixo alguns comandos que serão interessantes para seu uso.

  * apt-build update &#8211; atualiza a lista de pacotes
  * apt-build upgrade &#8211; atualiza o sistema
  * apt-build install programa &#8211; instala um programa
  * apt-build world &#8211; recompila todos os pacotes do sistema

Utilizei o nível forte e fiz a instalação do mysql-server em um processador core 2 quad e o tempo de compilação durou um pouco mais de 4 horas.

**Fonte: [Daniel Costa – TechBlog][1]**

 [1]: http://blog.danielcosta.pt/?p=425