---
title: Brasero não abre após instalar Unity 5
author: Ivan Brasil Fuzzer
type: post
date: 2012-01-24T13:42:51+00:00
url: /brasero-nao-abre-apos-instalar-unity-5/
categories:
  - Ubuntu
tags:
  - brasero
  - gravação de disco
  - Linux
  - Ubuntu
  - Unity

---
Se você, como eu, instalou a versão 5 do Unity para testar e teve problemas para abrir o gravador de disco Brasero, a solução é bem simples e passa pela criação de um link para a biblioteca mais nova. O Brasero instalado no Ubuntu 11.10 utiliza a versão 6 da biblioteca, mas no Unity 5 a biblioteca está na versão 9 então abra o terminal pressionando Ctrl+Alt+t e digite o seguinte comando:

<pre class="brush:shell">sudo ln -s /usr/lib/libunity.so.9 /usr/lib/libunity.so.6</pre>

Pronto, agora o gravador de disco Braseiro voltará a abrir normalmente.