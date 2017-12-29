---
title: Imposto de Renda 2011
author: Ivan Brasil Fuzzer
type: post
date: 2011-03-02T00:44:48+00:00
url: /imposto-de-renda-2011/
categories:
  - Ubuntu
tags:
  - declaração 2011
  - imposto de renda
  - Ubuntu

---
Para quem tem problemas ao instalar o programa da Receita Federal em arquitetura amd64, aparece a seguinte mensagem no Central de Programas Ubuntu:
  
<img src="https://lh5.googleusercontent.com/_bmR-2d1IkNY/TW0RYCuz9KI/AAAAAAAAADA/JNkNfRsH_DU/s800/erroimposto.png" alt="Erro i386" width="400" height="225" />

Para solucionar esse problema, abra o terminal

navegue até a pasta onde esá instalado o IRPF2011v1.0.deb

\# por exmplo : cd /home/user/Downloads/

esecute o seguinte comando :

<pre class="brush:as3">sudo dpkg -i --force-architecture IRPF2011v1.0.deb</pre>

pedirá a senha de superusuário e instalará sem problemas .

O programa criará um link no menu aplicativos.

**Autor: João Pedro Bernardo Fontoura**