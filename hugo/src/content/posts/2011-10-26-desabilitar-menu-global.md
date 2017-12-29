---
title: Desabilitar Menu Global
author: Ivan Brasil Fuzzer
type: post
date: 2011-10-26T10:30:36+00:00
url: /desabilitar-menu-global/
categories:
  - Ubuntu
tags:
  - 11.10
  - Linux
  - menu global
  - Ubuntu
  - Unity

---
[<img class="alignleft size-thumbnail wp-image-2818" title="Captura de tela em 2011-10-26 08:19:35" src="http://www.ubuntero.com.br/wp-content/uploads/2011/10/Captura-de-tela-em-2011-10-26-081935-150x97.png" alt="" width="150" height="97" />][1]Mesmo economizando bastante espaço no desktop, uma coisa que ainda não convenceu muito é a utilização do Menu Global pelo Unity. O menu global é o que faz com que os menus das aplicações saiam delas e fiquem na barra superior do sistema, dividindo lugar com a barra de título, sem conflitar com ela.

Em conversas com um amigo, ele sugeriu que a barra só fosse disponibilizada na barra quando a aplicação estivesse maximizada, eu concordo que seria a melhor maneira para evitarmos de movimentar tanto o mouse para abrir um menu e depois voltar para a aplicação. Para quem tem telas pequenas como netbooks, talvez essa reclamação não faça tanto sentido, mas para quem tem monitores maiores e não trabalha com todas as janelas maximizadas, com o tempo, isso se torna um grande incomodo.

Para resolver de maneira a nenhuma aplicação ativar o menu global, devemos fazer o seguinte:

Abra o terminal pressionando Alt+Ctrl+t e digitando o seguinte comando:

<pre class="brush:shell">sudo apt-get remove appmenu-gtk3 appmenu-gtk appmenu-qt</pre>

Depois de os pacotes removidos você terá que reiniciar o sistema para que a mudança entre em vigor, nem sempre apenas fechar a sessão resolve.

Existe maneira de retirar o menu em apenas algumas aplicações, mas isto é assunto para outro artigo.

 [1]: http://www.ubuntero.com.br/wp-content/uploads/2011/10/Captura-de-tela-em-2011-10-26-081935.png