---
title: Acesso remoto com o FreeNX
author: Ivan Brasil Fuzzer
type: post
date: 2008-09-16T17:48:53+00:00
url: /acesso-remoto-com-o-freenx/
burl:
  - http://ads.tt/1YIB
  - http://ads.tt/1YIB
  - http://ads.tt/1YIB
  - http://ads.tt/1YIB
  - http://ads.tt/1YIB
  - http://ads.tt/1YIB
  - http://ads.tt/1YIB
  - http://ads.tt/1YIB
  - http://ads.tt/1YIB
  - http://ads.tt/1YIB
  - http://ads.tt/1YIB
  - http://ads.tt/1YIB
  - http://ads.tt/1YIB
  - http://ads.tt/1YIB
  - http://ads.tt/1YIB
  - http://ads.tt/1YIB
  - http://ads.tt/1YIB
  - http://ads.tt/1YIB
  - http://ads.tt/1YIB
  - http://ads.tt/1YIB
  - http://ads.tt/1YIB
  - http://ads.tt/1YIB
  - http://ads.tt/1YIB
  - http://ads.tt/1YIB
  - http://ads.tt/1YIB
  - http://ads.tt/1YIB
  - http://ads.tt/1YIB
  - http://ads.tt/1YIB
  - http://ads.tt/1YIB
  - http://ads.tt/1YIB
  - http://ads.tt/1YIB
  - http://ads.tt/1YIB
  - http://ads.tt/1YIB
  - http://ads.tt/1YIB
  - http://ads.tt/1YIB
  - http://ads.tt/1YIB
  - http://ads.tt/1YIB
  - http://ads.tt/1YIB
  - http://ads.tt/1YIB
  - http://ads.tt/1YIB
  - http://ads.tt/1YIB
  - http://ads.tt/1YIB
  - http://ads.tt/1YIB
  - http://ads.tt/1YIB
  - http://ads.tt/1YIB
  - http://ads.tt/1YIB
  - http://ads.tt/1YIB
  - http://ads.tt/1YIB
  - http://ads.tt/1YIB
  - http://ads.tt/1YIB
  - http://ads.tt/1YIB
  - http://ads.tt/1YIB
  - http://ads.tt/1YIB
categories:
  - Ubuntu

---
Algumas pessoas falam que o FreeNX é uma espécie de evolução do VNC, eu discordo. As tecnologias utilizadas nas duas aplicações são totalmente diferentes e seus objetivos também são totalmente diferentes.

Enquanto o VNC é uma simples aplicação que permite controlar Desktops remotamente, o FreeNX fornece um Desktop independente e totalmente funcional sem bloquear, para uma única sessão, o computador acessado.

Para termos uma comparação melhor e facilitar a definição do programa, podemos dizer que o FreeNX tem as mesmas funcionalidades do Microsoft Terminal Server.

Vamos por a mão na massa. Para instalar o FreeNX é muito fácil. A primeira coisa é adicionar os seguintes repositórios na sua lista de repositórios através do programa &#8220;Canais de Software&#8221;:

deb http://www.datakeylive.com/ubuntu hardy main
  
deb-src http://www.datakeylive.com/ubuntu hardy main 

<center>
  <a href="http://www.ubuntero.com.br/wp-content/uploads/2008/09/captura_da_tela.png"><img src="http://www.ubuntero.com.br/wp-content/uploads/2008/09/captura_da_tela-150x55.png" alt="" title="Canais de software" width="150" height="55" class="aligncenter size-thumbnail wp-image-561" /></a>&nbsp;&nbsp;<a href="http://www.ubuntero.com.br/wp-content/uploads/2008/09/captura_da_tela-canais-de-software.png"><img src="http://www.ubuntero.com.br/wp-content/uploads/2008/09/captura_da_tela-canais-de-software-150x117.png" alt="" title="captura_da_tela-canais-de-software" width="150" height="117" class="alignnone size-thumbnail wp-image-564" /></a>&nbsp;&nbsp;<a href="http://www.ubuntero.com.br/wp-content/uploads/2008/09/captura_da_tela-software-properties-gtk-1.png"><img src="http://www.ubuntero.com.br/wp-content/uploads/2008/09/captura_da_tela-software-properties-gtk-1-150x86.png" alt="" title="captura_da_tela-software-properties-gtk-1" width="150" height="86" class="alignnone size-thumbnail wp-image-565" /></a>
</center>

Atualize sua lista de pacotes como será pedido. A janela fechará ao final da atualização.

Abra o &#8220;Gerenciador de Pacotes&#8221; e procure por &#8220;freenx-server&#8221;. Dê um duplo clique no pacote para selecioná-lo para instalação, alguns pacotes extra são requeridos para a instalação e você deve apenas concordar em instalá-los, e clique em &#8220;Aplicar&#8221; para que a instalação comece.

<center>
  <a href="http://www.ubuntero.com.br/wp-content/uploads/2008/09/captura_da_tela-2.png"><img src="http://www.ubuntero.com.br/wp-content/uploads/2008/09/captura_da_tela-2-150x130.png" alt="" title="captura_da_tela-2" width="150" height="130" class="alignnone size-thumbnail wp-image-566" /></a>&nbsp;&nbsp;<a href="http://www.ubuntero.com.br/wp-content/uploads/2008/09/captura_da_tela-gerenciador-de-pacotes-synaptic.png"><img src="http://www.ubuntero.com.br/wp-content/uploads/2008/09/captura_da_tela-gerenciador-de-pacotes-synaptic-150x129.png" alt="" title="captura_da_tela-gerenciador-de-pacotes-synaptic" width="150" height="129" class="alignnone size-thumbnail wp-image-567" /></a>&nbsp;&nbsp;<a href="http://www.ubuntero.com.br/wp-content/uploads/2008/09/captura_da_tela-3.png"><img src="http://www.ubuntero.com.br/wp-content/uploads/2008/09/captura_da_tela-3-150x129.png" alt="" title="captura_da_tela-3" width="150" height="129" class="alignnone size-thumbnail wp-image-568" /></a>&nbsp;&nbsp;<a href="http://www.ubuntero.com.br/wp-content/uploads/2008/09/captura_da_tela-4.png"><img src="http://www.ubuntero.com.br/wp-content/uploads/2008/09/captura_da_tela-4-150x129.png" alt="" title="captura_da_tela-4" width="150" height="129" class="alignnone size-thumbnail wp-image-569" /></a>
</center>

Pacote instalado, abra o terminal e adicione os usuários que terão permissão para fazer login no servidor freenx, os usuários devem existir previamente no sistema operacional. Para adicionar um usuário digite os seguintes comandos:

nxserver &#8211;adduser ubuntero
  
nxserver &#8211;passwd ubuntero 

Com os comandos acima você terá criado um usuário chamado ubuntero e irá definir uma senha para este usuário.

O servidor já está pronto e esperando por novas conexões, agora vamos instalar um cliente em outra máquina. O FreeNX tem clientes para Linux, Windows, MacOS e Solaris. Abaixo temos os links para download dos clientes para estes sistemas operacionais.

<!--download id="21"-->

<!--download id="20"-->

<!--download id="22"-->

<!--download id="23"-->

Para instalar no Ubuntu, baixe a versão para Linux no link acima e siga as instruções [deste outro artigo][1].

 [1]: http://www.ubuntero.com.br/?p=318