---
title: Tecla “?” no Lenovo E431
author: Ivan Brasil Fuzzer
type: post
date: 2015-08-07T21:03:29+00:00
url: /tecla-no-lenovo-e431/
dsq_needs_sync:
  - 1
categories:
  - Ubuntu
tags:
  - e431
  - lenovo
  - Linux
  - teclado
  - Ubuntu

---
[<img class="aligncenter size-medium wp-image-6905" src="http://www.ubuntero.com.br/wp-content/uploads/2015/08/P_20150807_175919-300x225.jpg" alt="P_20150807_175919" width="300" height="225" />][1]

Tem coisa mais chata do que pressionar uma tecla no teclado e nada aparecer na tela? Para piorar você procura uma segunda opção no teclado e não encontra? Pois é, passei por isso ao reinstalar o Ubuntu no meu Lenovo E431, com os caracterres &#8220;?&#8221; e &#8220;/&#8221;, mas não foi difícil encontrar a solução.

A solução para este problema, para quem utiliza Ubuntu e outras distribuições baseadas no Debian, é simples e pelo que pesquisei se aplica a vários outros modelos da Lenovo vendidos no Brasil.

Para resolvermos de vez este problema, abra o gedit pressionando a tecla Super(também conhecida como tecla Windows) e digitando gedit. Ao aparecer o ícone do Editor de Texto, clique nele para abrir o programa.

Vá no menu Arquivo, Abrir e vá na pasta home(provavelmente já irá abrir nesta pasta). Pressione as teclas Ctrl+h para mostrar os arquivos ocultos e abra o arquivo com nome .xsessionrc. Se ele estiver vazio, copie e cole o conteúdo abaixo.

<pre class="brush:shell">#!/bin/bash
setxkbmap -model thinkpad60 -layout br</pre>

Salve o arquivo e encerre a sessão e entre com seu usuário e senha novamente. Pronto, o problema das teclas estará resolvido.

Se este tutorial resolveu o seu problema em outro modelo de notebook, não esqueça de deixar um comentário dizendo o modelo do seu notebook para que mais pessoas sejam beneficiadas.

Esta dica também pode funcionar em outras distribuições não baseadas no Debian, mas não fiz este teste para ter certeza.

 [1]: http://www.ubuntero.com.br/wp-content/uploads/2015/08/P_20150807_175919.jpg