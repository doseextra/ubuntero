---
title: Problema com “adicionais de convidado”
author: Ivan Brasil Fuzzer
type: post
date: 2010-09-15T18:03:16+00:00
url: /problema-com-adicionais-de-convidado/
categories:
  - Ubuntu

---
Se você instalou o Ubuntu 10.10 beta e não conseguiu ter um tamanho de tela legal mesmo depois de instalar os adicionais de convidado e reiniciado a máquina virtual, a solução é bem simples.

Abra o terminal e digite os seguintes comandos:

<pre class="brush:shell">sudo apt-get update
sudo apt-get install build-essential linux-headers-$(uname -r)
sudo apt-get install virtualbox-ose-guest-x11</pre>

Reinicie a máquina virtual e poderá redimensionar tranquilamente a tela da máquina virtual que tudo se ajustará automaticamente.