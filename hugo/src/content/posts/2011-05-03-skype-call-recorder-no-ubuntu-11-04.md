---
title: Skype Call Recorder no Ubuntu 11.04
author: Ivan Brasil Fuzzer
type: post
date: 2011-05-03T11:00:25+00:00
url: /skype-call-recorder-no-ubuntu-11-04/
categories:
  - Ubuntu
tags:
  - gravação
  - Linux
  - Skype
  - Ubuntu

---
Estava testando a gravação do Skype com o programa Skype Call Recorder mas o programa eventualmente funcionava, para ser bonzinho porque deve ter aberto umas 2 vezes em 20 tentativas.

Inicialmente pensei que o problema era em alguma configuração do skype ou do skype call recorder mas mesmo apagando os diretorios de configuração o problema persistia. Pensei então que o problema era com a placa de som, que funcionava perfeitamente antes, mas não adiantou tentar mil configurações mirabolantes e o problema persistia.

Procurei por algum repositório do skype call recorder e acabei encontrando um que explicava o porque de não funcionar Ubuntu 11.04 e indicando outro PPA para resolver o problema.

Se você está passando pelo mesmo problema, execute os comandos abaixo no terminal:

<pre class="brush:shell">sudo apt-add-repository ppa:dajhorn/skype-call-recorder
sudo apt-add-repository ppa:dtl131/ppa
sudo apt-get update
sudo apt-get dist-upgrade
sudo apt-get install skype-call-recorder</pre>

Reinicie o computador e o problema deve estar corrigido.