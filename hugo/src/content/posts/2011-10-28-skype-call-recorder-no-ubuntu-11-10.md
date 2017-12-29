---
title: Skype Call Recorder no Ubuntu 11.10
author: Ivan Brasil Fuzzer
type: post
date: 2011-10-28T15:30:32+00:00
url: /skype-call-recorder-no-ubuntu-11-10/
categories:
  - Ubuntu
tags:
  - gravação skype
  - Linux
  - Skype
  - Skype Call Recorder
  - Ubuntu

---
Este [tópico já existe para o Ubuntu 11.04][1], no entanto nele é necessário substituir o sistema de áudio do Ubuntu para que o skype call recorder funcione normalmente. Para quem ainda está utilizando o Ubuntu 11.04, o [antigo artigo][1] continua valendo, mas para quem está utilizando o Ubuntu 11.10 os passos para ter o skype call recorder instalado e sempre atualizados são menores.

Abra o terminal pressionando Ctrl+Alt+t e adicione o repositório com o seguinte comando:

<pre class="brush:shell">sudo apt-add-repository ppa:dajhorn/skype-call-recorder</pre>

Uma mensagem será mostrada onde deverá pressionar Enter.

Não feche o terminal. Agora você precisar digitar os seguintes comandos:

<pre class="brush:shell">sudo apt-get update
sudo apt-get install skype-call-recorder</pre>

Pronto, abra o skype e o skype call recorder para começar a gravar as conversas com áudio que mantém através do programa.

Para abrir o skype, pressione a tecla Super e digite skype e selecione o skype para que ele seja aberto. Para o skype call recorder pressione Super, digite skype e selecione o segundo ícone onde diz &#8220;skype call recorder&#8221;.

 [1]: http://www.ubuntero.com.br/2011/05/skype-call-recorder-no-ubuntu-11-04/