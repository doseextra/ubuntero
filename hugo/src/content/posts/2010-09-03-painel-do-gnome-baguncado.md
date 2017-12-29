---
title: Painel do Gnome bagunçado?
author: Ivan Brasil Fuzzer
type: post
date: 2010-09-03T19:39:53+00:00
url: /painel-do-gnome-baguncado/
categories:
  - Ubuntu

---
Você vai a algum lugar palestrar e pluga o projetor no seu notebook e o tal projetor suporta 800&#215;600 como resolução máxima. Ok, dá para fazer sua apresentação mas no final você tem os applets do painel do Gnome totalmente desconfigurados e nem sempre adianta reiniciar o X porque os applets não vão voltar para o lugar.

A solução mais simples é desbloquear todos os applets e recolocá-los, um por um, no seu devido lugar, mas isso é um trabalho chato e desnecessário.

A solução para estes problema é retornar o painel ao padrão de instalação e para isto digite o seguinte comando no terminal:

<pre class="brush:shell">rm -fr ~/.gconf/apps/panel</pre>

O comando acima irá apagar as configurações do painel e para ter efeito você deve encerrar sua seção e entrar novamente. Esta dica é válida caso você tenha apagado algum painel por ou sem querer, os painéis excluídos voltarão ao padrão.