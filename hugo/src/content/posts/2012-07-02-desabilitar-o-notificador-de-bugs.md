---
title: Desabilitar o notificador de bugs
author: Ivan Brasil Fuzzer
type: post
date: 2012-07-02T17:00:26+00:00
url: /desabilitar-o-notificador-de-bugs/
categories:
  - Ubuntu
tags:
  - apport
  - bug
  - Linux
  - notificador
  - Ubuntu

---
A dica deste artigo deve ser usada em casos bem específicos, já que o mínimo que se espera de alguém que usa um sistema gratuito é que os problemas que venham a acontecer sejam relatados aos desenvolvedores. Um caso onde a dica até deve ser utilizada é durante a presentações de palestras ou aulas.

Para desabilitar a notificação de bugs é necessário editar um arquivo e para isto tecle Alt+F2 e digite o seguinte comando:

<pre class="brush:shell">gksu gedit /etc/default/apport</pre>

Altere a linha onde está escrito enabled=1 para enabled=0.

Reinicie o sistema e o notificador não iniciará mais juntamente com o sistema. Para voltar a habilitar, repita o passo acima e mude a linha do arquivo para para enabled=1

Como disse no início do artigo, só use esta dica em casos onde uma janela de erro não é interessante, mas estes casos são muito poucos.