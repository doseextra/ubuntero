---
title: Precise pangolin não gosta de hibernar
author: Ivan Brasil Fuzzer
type: post
date: 2012-04-23T19:27:22+00:00
url: /precise-pangolin-nao-gosta-de-hibernar/
categories:
  - Ubuntu
tags:
  - 12.04
  - hibernação
  - hibernar
  - Linux
  - pangolin
  - precise
  - Ubuntu

---
<p style="text-align: center;">
  <a href="http://www.ubuntero.com.br/wp-content/uploads/2012/04/urso_polar_iglu.jpg"><img class="alignnone size-medium wp-image-3473" title="urso_polar_iglu" src="http://www.ubuntero.com.br/wp-content/uploads/2012/04/urso_polar_iglu-300x225.jpg" alt="" width="300" height="225" /></a>
</p>

Esta é uma funcionalidade que não costumo usar, para falar a verdade eu só usei uma vez para ver o que acontecia, então não é algo que eu tenha notado, se não fosse o [post do Andre Noel][1] e o Cristiano Lazzari me perguntar eu nem saberia que isto não está mais acontecendo no 12.04.

O problema é simples, a Canonical resolveu tirar a opção de hibernar da próxima versão do Ubuntu simplesmente por não funcionar em grande parte dos computadores existentes no mundo. Outra solução que a Canonical poderia adotar era manter uma lista de equipamentos compatíveis e só habilitar a hibernação para estes equipamentos.

Se você quer habilitar esta opção novamente, siga estes passos:

Crie o arquivo /etc/polkit-1/localauthority/50-local.d/com.ubuntu.desktop.pkla com o seguinte comando:

<pre class="brush:shell">sudo gedit /etc/polkit-1/localauthority/50-local.d/com.ubuntu.desktop.pkla</pre>

Insira o seguinte conteúdo no arquivo:

<pre class="brush:shell">[Re-enable hibernate by default]
Identity=unix-user:*
Action=org.freedesktop.upower.hibernate
ResultActive=yes</pre>

Agora é só reiniciar o computador que a opção estará funcionando normalmente.

 [1]: http://andrenoel.com.br/2012/03/21/como-ativar-a-hibernacao-no-ubuntu-12-04-beta/