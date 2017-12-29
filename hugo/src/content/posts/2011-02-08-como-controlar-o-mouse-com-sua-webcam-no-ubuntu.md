---
title: Como controlar o mouse com sua webcam no Ubuntu
author: Ivan Brasil Fuzzer
type: post
date: 2011-02-08T18:49:45+00:00
url: /como-controlar-o-mouse-com-sua-webcam-no-ubuntu/
categories:
  - Ubuntu
tags:
  - Acessibilidade
  - Ubuntu

---
<p style="text-align: justify;">
  <img class="alignleft" src="https://lh6.googleusercontent.com/_3Xa0Sdpyc_Y/TVFZ71dpWiI/AAAAAAAAAT8/xr1Tk39R-tc/eviacam.jpg" alt="" />O eViacam é um programa de acessibilidade que permite controlar o mouse com os movimentos da cabeça. Instalei ele com a intenção de saber como é, utilizar o mouse sem usar as mãos, confesso que tive dificuldade ao manobrar o cursor na tela, mas não pela ineficiência do programa, mas sim por falta de treinar mais pois em poucos minutos consegui pegar o jeito e ter mais facilidade ao executar tarefas comuns.
</p>

<p style="text-align: justify;">
  Mesmo sendo pra mim quase que uma brincadeira, foi muito importante pois, eu realmente não conhecia essa ferramenta que tem a capacidade de ajudar tanto as pessoas. Pense em quem não consegue nem mudar de canal na TV utilizando um controle remoto, poder utilizar um computador simplesmente utilizando uma webcam?
</p>

**A instalação**

<p style="text-align: justify;">
  A instalação do programa é bem simples, pra quem usa o Lucid Lynx ou o Karmic já tem pacotes em debian (.deb) porém pra quem já usa o Maverick a instalação deverá ser compilada.
</p>

Download do eViacam: <http://sourceforge.net/projects/eviacam/files/eviacam/>

Para instalar o eViacam no Ubuntu 10.10 entre primeiramente no Synaptic e instale os seguintes pacotes.

• python-wxtools
  
• wx2.8-i18n
  
• libwxgtk2.8-dev
  
• libgtk2.0-dev
  
• libcvaux-dev
  
• libhighgui-dev
  
• python-wxgtk2.8
  
• libcv-dev
  
• libXext-dev
  
• libxtst-dev

Baixe então o eviacam eviacam_1.4.1.orig.tar.gz e execute os seguintes comandos como root. Obs: Já existe a 1.4.2 mas não tentei instala-la.

`tar -zxvf eviacam_1.4.1.orig.tar.gz`
  
`cd eviacam-1.4.1/`
  
`./configure`
  
`make`
  
`make install`

Caso apareça alguma dependência ao executar ./configure, é só ir até o synaptic e baixa-la.

**Como utilizar:**

<img class="alignright" src="https://lh5.googleusercontent.com/_3Xa0Sdpyc_Y/TVFR42HMLjI/AAAAAAAAATg/xT46inCwGAo/eviacam-ubuntu-software.png" alt="" />

<p style="text-align: left;">
  O primeiro a ser feito é a “calibragem” do mouse onde o assistente vai pedir pra mover a cabeça. Logo após seguir o assistente o mouse já passa a ser controlado através do movimento.
</p>

<img src="https://lh3.googleusercontent.com/_3Xa0Sdpyc_Y/TVFR45M6zTI/AAAAAAAAATk/IXBCPD1QsHM/eviacam-ubuntu-webcam-instalar.png’ title=" alt="" width="231" height="264" />

Note que o retângulo em azul, corresponde ao tamanho da tela.

![Alternar entre cliques][1]

<p style="text-align: justify;">
  O clique é feito quando o cursor é posicionado em um local por alguns segundos. Uma barra é aberta no topo da tela assim que o software é iniciado, portanto sempre que quiser clique duplo, arrastar a janela, der clique com botão direito, ou bloquear o mouse, é só ir até ela e alternar.
</p>

<p style="text-align: justify;">
  <strong>Autor: Augusto Namitala</strong>
</p>

 [1]: https://lh6.googleusercontent.com/_3Xa0Sdpyc_Y/TVFR4uhm1SI/AAAAAAAAATc/dWDuF3YohkA/eviacam-programa-ubuntu-mouse.png