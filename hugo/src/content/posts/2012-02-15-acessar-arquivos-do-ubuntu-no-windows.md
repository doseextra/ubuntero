---
title: Acessar arquivos do Ubuntu no Windows
author: Ivan Brasil Fuzzer
type: post
date: 2012-02-15T13:04:25+00:00
url: /acessar-arquivos-do-ubuntu-no-windows/
categories:
  - Ubuntu
tags:
  - arquivos
  - dual boot
  - ext4
  - Linux
  - Ubuntu
  - Windows

---
Muitos usuários ainda usam o formato de instalação Dual Boot e é frequente a necessidade de acessar arquivos que estão na partição do Ubuntu quando se está utilizando o Windows.

Uma solução adotada por muitos é ter uma partição NTFS para fazer esta troca de arquivos. Esta solução funciona parcialmente porque nem sempre os arquivos que queremos estão na partição de troca e é necessário fazer um reboot para entrar no Ubuntu para copiar os arquivos para um local que o Windows possa acessar.

Para solucionar de vez este problema, temos o programa chamado Ext2Read que pode ser baixado no [sourceforge][1].

O programa não tem instalador, basta descompactar o arquivo e executar o programa. No Windows Vista ou Seven é necessário clicar com o botão direito no aplicativo e selecionar &#8220;Executar como Administrador&#8221;.

Veja algumas telas do programa:

<p style="text-align: center;">
  <a href="http://www.ubuntero.com.br/wp-content/uploads/2012/02/Captura-de-tela-em-2012-02-15-105525.png"><img class="alignnone size-thumbnail wp-image-3251" title="Captura de tela em 2012-02-15 10:55:25" src="http://www.ubuntero.com.br/wp-content/uploads/2012/02/Captura-de-tela-em-2012-02-15-105525-150x115.png" alt="" width="150" height="115" /></a> <a href="http://www.ubuntero.com.br/wp-content/uploads/2012/02/Captura-de-tela-em-2012-02-15-105541.png"><img class="alignnone size-thumbnail wp-image-3252" title="Captura de tela em 2012-02-15 10:55:41" src="http://www.ubuntero.com.br/wp-content/uploads/2012/02/Captura-de-tela-em-2012-02-15-105541-150x117.png" alt="" width="150" height="117" /></a> <a href="http://www.ubuntero.com.br/wp-content/uploads/2012/02/Captura-de-tela-em-2012-02-15-105614.png"><img class="alignnone size-thumbnail wp-image-3253" title="Captura de tela em 2012-02-15 10:56:14" src="http://www.ubuntero.com.br/wp-content/uploads/2012/02/Captura-de-tela-em-2012-02-15-105614-150x115.png" alt="" width="150" height="115" /></a> <a href="http://www.ubuntero.com.br/wp-content/uploads/2012/02/Captura-de-tela-em-2012-02-15-105621.png"><img class="alignnone size-thumbnail wp-image-3254" title="Captura de tela em 2012-02-15 10:56:21" src="http://www.ubuntero.com.br/wp-content/uploads/2012/02/Captura-de-tela-em-2012-02-15-105621-150x116.png" alt="" width="150" height="116" /></a>
</p>

 [1]: http://sourceforge.net/projects/ext2read/files/latest/download