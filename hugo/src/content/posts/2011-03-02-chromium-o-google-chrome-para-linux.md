---
title: Chromium, o Google Chrome “para Linux”
author: Anderson Henrique
type: post
date: 2011-03-02T11:00:59+00:00
url: /chromium-o-google-chrome-para-linux/
categories:
  - Ubuntu
tags:
  - chromium
  - google chrome
  - terminal
  - Ubuntu

---
Desde sua primeira versão, o Google Chrome se tornou amado por muitos. Dentre esses fatores estão seu visual mais do que limpo e sua incrível velocidade. Mesmo que nas primeiras versões sua velocidade não fosse tão boa quanto nas versões atuais, não dá pra contestar a qualidade do navegador da Google nas suas versões mais atuais. Até a versão quatro do navegador, se não me engano (minha memória é péssima), nós usuários Linux em geral, não tínhamos acesso a versão oficial do Google Chrome.

Mas o tempo passou e hoje temos uma versão para nós, mas mesmo assim, determinados sites, inclusive da Google como o Blogger, comigo apresentaram alguns problemas de compatibilidade, como por exemplo, quando ponho para visualizar uma postagem, não abre nada. Mas, procurando soluções para isso, acabei achando o Chromium Browser, o nosso Google Chrome. O processo de instalação dele é bastante simples, vamos usar o terminal para isso.

Já com o terminal aberto, recomendo que faça o login como root para não precisar digitar o comando **sudo** nem digitando a senha o tempo todo, para isso digite:

<pre class="brush:shell">sudo -i</pre>

<span style="color: #000000;"><em><strong> </strong></em></span>

_****_E digite sua senha. Logo após, logado como root, digite os seguintes comandos:

<pre class="brush:shell">add-apt-repository ppa:chromium-daily/stable
apt-get update
apt-get install chromium-browser</pre>

Agora basta esperar a instalação do Chromium e já pode utilizá-lo normalmente. Abaixo uma screen da tela.

<p style="text-align: center;">
  <a href="http://leetleech.org/images/15217429834467602890.png"><img class="aligncenter" src="http://leetleech.org/images/14995612887423188018.png" alt="Chromium" width="550" height="330" /></a>
</p>