---
title: Customizando o gerenciador de inicialização
author: Ivan Brasil Fuzzer
type: post
date: 2011-10-11T14:16:36+00:00
url: /customizando-o-gerenciador-de-inicializacao/
categories:
  - Ubuntu
tags:
  - 11.04
  - 11.10
  - boot
  - customizer
  - grub
  - grub-customizer
  - Linux
  - Ubuntu

---
Já precisou fazer alterações no GRUB( gerenciador de inicialização) e ficou perdido no meio dos arquivos de configuração?

Muita gente sente a necessidade de fazer pequenas alterações na inicialização do sistema e se depara com os amedrontadores arquivos de configuração tradicionais do Linux. Estes arquivos são maravilhosos quando se domina a configuração de algo, mas quando se quer fazer coisas simples e não tem tempo de conhecer um aplicativo a fundo, estes arquivos se tornam apenas um bom motivo para se falar mal do sistema todo.

Para resolver este pequeno problema a Canonical desenvolveu o Ubuntu que já traz muita coisa boa sem a necessidade de se trabalhar diretamente com arquivos, mas ainda falta integrar muita coisa que para a maioria não tem tanta importância assim, mas para alguns se faz necessário. No caso do GRUB, não é necessário fazer alteração para a maioria esmagadora dos usuários, mas uma pequena parcela precisa e pode contar agora com o Grub Customizer.

Para instalar o Grub Customizer no Ubuntu 11.04 e 11.10 abra a Central de Programas do Ubuntu pressionando a tecla Super e digitando, sem aspas, &#8220;Central de programas&#8221; e pressionando Enter.

Vá no menu Editar >> Canais de Software, depois vá na aba &#8220;Outro Software&#8221; e clique no botão Adicionar. Na linha do apt digite ou copie o seguinte:

<pre class="brush:shell">ppa:danielrichter2007/grub-customizer</pre>

Clique no botão &#8220;Adicionar fonte&#8221;, digite a sua senha, fecha a janela dos canais de software e aguarde os repositórios serem atualizados. Após atualizar procure por &#8220;grub customizer&#8221; no campo de pesquisa. Clique em instalar no segundo programa que é mostrado na lista e aguarde o download e instalação que são bem rápidos.

Depois de baixado e instalado, pressione a tecla Super e digite &#8220;grub customizer&#8221; e pressione Enter. Será solicitada a sua senha novamente. Agora é só brincar com as opções de configurações oferecidas.

<p style="text-align: center;">
  <a href="http://www.ubuntero.com.br/wp-content/uploads/2011/10/Captura-de-tela-em-2011-10-11-103727.png"><img class="alignnone size-medium wp-image-2671" title="Captura de tela em 2011-10-11 10:37:27" src="http://www.ubuntero.com.br/wp-content/uploads/2011/10/Captura-de-tela-em-2011-10-11-103727-300x194.png" alt="" width="300" height="194" /></a> <a href="http://www.ubuntero.com.br/wp-content/uploads/2011/10/Captura-de-tela-em-2011-10-11-103811.png"><img class="alignnone size-medium wp-image-2672" title="Captura de tela em 2011-10-11 10:38:11" src="http://www.ubuntero.com.br/wp-content/uploads/2011/10/Captura-de-tela-em-2011-10-11-103811-300x209.png" alt="" width="300" height="209" /></a> <a href="http://www.ubuntero.com.br/wp-content/uploads/2011/10/Captura-de-tela-em-2011-10-11-103823.png"><img class="alignnone size-medium wp-image-2673" title="Captura de tela em 2011-10-11 10:38:23" src="http://www.ubuntero.com.br/wp-content/uploads/2011/10/Captura-de-tela-em-2011-10-11-103823-300x210.png" alt="" width="300" height="210" /></a> <a href="http://www.ubuntero.com.br/wp-content/uploads/2011/10/Captura-de-tela-em-2011-10-11-103840.png"><img class="alignnone size-medium wp-image-2674" title="Captura de tela em 2011-10-11 10:38:40" src="http://www.ubuntero.com.br/wp-content/uploads/2011/10/Captura-de-tela-em-2011-10-11-103840-300x209.png" alt="" width="300" height="209" /></a> <a href="http://www.ubuntero.com.br/wp-content/uploads/2011/10/Captura-de-tela-em-2011-10-11-103849.png"><img class="alignnone size-medium wp-image-2675" title="Captura de tela em 2011-10-11 10:38:49" src="http://www.ubuntero.com.br/wp-content/uploads/2011/10/Captura-de-tela-em-2011-10-11-103849-300x210.png" alt="" width="300" height="210" /></a> <a href="http://www.ubuntero.com.br/wp-content/uploads/2011/10/Captura-de-tela-em-2011-10-11-104451.png"><img class="alignnone size-medium wp-image-2676" title="Captura de tela em 2011-10-11 10:44:51" src="http://www.ubuntero.com.br/wp-content/uploads/2011/10/Captura-de-tela-em-2011-10-11-104451-300x209.png" alt="" width="300" height="209" /></a> <a href="http://www.ubuntero.com.br/wp-content/uploads/2011/10/Captura-de-tela-em-2011-10-11-104510.png"><img class="alignnone size-medium wp-image-2677" title="Captura de tela em 2011-10-11 10:45:10" src="http://www.ubuntero.com.br/wp-content/uploads/2011/10/Captura-de-tela-em-2011-10-11-104510-300x209.png" alt="" width="300" height="209" /></a> <a href="http://www.ubuntero.com.br/wp-content/uploads/2011/10/Captura-de-tela-em-2011-10-11-104648.png"><img class="alignnone size-medium wp-image-2678" title="Captura de tela em 2011-10-11 10:46:48" src="http://www.ubuntero.com.br/wp-content/uploads/2011/10/Captura-de-tela-em-2011-10-11-104648-300x255.png" alt="" width="300" height="255" /></a> <a href="http://www.ubuntero.com.br/wp-content/uploads/2011/10/Captura-de-tela-em-2011-10-11-104705.png"><img class="alignnone size-medium wp-image-2679" title="Captura de tela em 2011-10-11 10:47:05" src="http://www.ubuntero.com.br/wp-content/uploads/2011/10/Captura-de-tela-em-2011-10-11-104705-300x298.png" alt="" width="300" height="298" /></a>
</p>