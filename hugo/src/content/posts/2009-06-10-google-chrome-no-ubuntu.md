---
title: Google Chrome no Ubuntu
author: Ivan Brasil Fuzzer
type: post
date: 2009-06-10T12:22:08+00:00
url: /google-chrome-no-ubuntu/
categories:
  - Ubuntu

---
Mesmo não sendo recomendada sua instalação, resolvi ver a quantas anda o Google Chrome para Linux. Como já havia lido antes, já instalei o navegador esperando que muitas coisas não funcionasse, logo, não fiquei decepcionado.

Vamos ao começo então. Para baixar a versão para Linux, vá no seguinte endereço:

[http://www.google.com/chrome/intl/en/eula\_dev.html?dl=unstable\_i386_deb][1]

Clique no botão &#8220;Accept and download&#8221; para começar o download do pacote DEB. Ao finalizar o download, dê um duplo clique no pacote e instale-o através do GDEBI.

Após instalado, o Chrome poderá ser encontrado no menu Aplicativos -> Internet -> Google Chrome.

A primeira coisa que verá ao abrir o programa será um aviso de que esta é uma versão de desenvolvimento e não deve ser usado por usuários finais e que muitos problemas poderão ser encontrados. Além destas informações, também são dadas algumas informações de como proceder ao encontrar algum bug.

<center>
  <a href="http://www.ubuntero.com.br/wp-content/uploads/2009/06/captura_de_tela-google-chrome-dev-build1.png"><img src="http://www.ubuntero.com.br/wp-content/uploads/2009/06/captura_de_tela-google-chrome-dev-build1-130x150.png" alt="captura_de_tela-google-chrome-dev-build1" title="captura_de_tela-google-chrome-dev-build1" width="130" height="150" class="alignnone size-thumbnail wp-image-678" /></a>
</center>


  


Clicando em OK nesta janela, o navegador será aberto com algumas informações do que, com certeza, não funcionará. Na lista temos plugins como flash, impressão, textos complexos entre outros.
  

  


<center>
  <a href="http://www.ubuntero.com.br/wp-content/uploads/2009/06/captura_de_tela-google-chrome-dev-build-warning-google-chrome1.png"><img src="http://www.ubuntero.com.br/wp-content/uploads/2009/06/captura_de_tela-google-chrome-dev-build-warning-google-chrome1-150x138.png" alt="captura_de_tela-google-chrome-dev-build-warning-google-chrome1" title="captura_de_tela-google-chrome-dev-build-warning-google-chrome1" width="150" height="138" class="alignnone size-thumbnail wp-image-681" /></a>
</center>


  


Em meu primeiro teste de navegação tentei entrar no site de busca da própria Google e fiquei um tempo espetando e nada acontecia. Verifiquei minha conexão com a internet e tudo funcionava, procurei por configurações de proxy no Chrome e estas não existiam. Verifiquei minhas configurações de proxy no gnome e tudo estava certo então deduzi que o Chrome não suporta proxy. Como sou administrador da rede, liberei minha máquina do proxy e então o Chrome conseguiu navegar.
  


<center>
  <a href="http://www.ubuntero.com.br/wp-content/uploads/2009/06/captura_de_tela-google-google-chrome1.png"><img src="http://www.ubuntero.com.br/wp-content/uploads/2009/06/captura_de_tela-google-google-chrome1-150x114.png" alt="captura_de_tela-google-google-chrome1" title="captura_de_tela-google-google-chrome1" width="150" height="114" class="alignnone size-thumbnail wp-image-682" /></a>
</center>


  


A próxima página a ser testada foi o nosso querido Ubuntero. A página abriu melhor do que eu esperava, já que tive problemas na exibição quando tentei o Chrome no windows logo após seu lançamento. Tirando algumas coisas em flash, o site funcionou direitinho.
  


<center>
  <a href="http://www.ubuntero.com.br/wp-content/uploads/2009/06/captura_de_tela-ubuntero-google-chrome1.png"><img src="http://www.ubuntero.com.br/wp-content/uploads/2009/06/captura_de_tela-ubuntero-google-chrome1-150x114.png" alt="captura_de_tela-ubuntero-google-chrome1" title="captura_de_tela-ubuntero-google-chrome1" width="150" height="114" class="alignnone size-thumbnail wp-image-683" /></a>
</center>


  


Outras constatações foram que, embora seja capaz de exibir caracteres acentuados, não é possível escrever textos com acentuação.

Juntando os prós e contras, achei que o navegador até que promete funcionar bem no linux, agora temos que esperar para ver tudo funcionando para então dar um veredito final.

 [1]: http://www.google.com/chrome/intl/en/eula_dev.html?dl=unstable_i386_deb