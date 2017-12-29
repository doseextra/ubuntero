---
title: Skype Call Recorder no Ubuntu 13.04
author: Ivan Brasil Fuzzer
type: post
date: 2013-06-03T16:27:37+00:00
url: /skype-call-recorder-no-ubuntu-13-04/
burl:
  - http://ads.tt/55VK
  - http://ads.tt/55VK
  - http://ads.tt/55VK
  - http://ads.tt/55VK
  - http://ads.tt/55VK
  - http://ads.tt/55VK
  - http://ads.tt/55VK
  - http://ads.tt/55VK
  - http://ads.tt/55VK
  - http://ads.tt/55VK
  - http://ads.tt/55VK
  - http://ads.tt/55VK
  - http://ads.tt/55VK
  - http://ads.tt/55VK
  - http://ads.tt/55VK
  - http://ads.tt/55VK
  - http://ads.tt/55VK
  - http://ads.tt/55VK
  - http://ads.tt/55VK
  - http://ads.tt/55VK
categories:
  - Ubuntu
tags:
  - 13.04
  - gravar conversa
  - Linux
  - Skype
  - Ubuntu

---
Se você ainda usa o **Skype Call Recorder** para gravar as chamadas feitas ou recebidas no Skype, já deve ter percebido que o PPA que passamos aqui em [outro artigo][1] não está funcionando.

O programa continua funcionando, inclusive na **versão mais nova do Skype**, mas é necessário fazer uma pequena alteração nos repositórios. Se você ainda não adicionou o PPA, adicione com o seguinte comando no terminal:

<pre class="brush:shell">sudo apt-add-repository ppa:dajhorn/skype-call-recorder</pre>

Agora vá nas **Configurações do sistema**.

<a href="http://www.ubuntero.com.br/wp-content/uploads/2013/06/skype-call-recorder-1.png" rel="lightbox"><img class="size-medium wp-image-5537" title="Skype Call Recorder no Ubuntu" alt="Skype Call Recorder no Ubuntu" src="http://www.ubuntero.com.br/wp-content/uploads/2013/06/skype-call-recorder-1-300x255.png" width="300" height="255" /></a>

Clique em &#8220;**Programas e atualizações**&#8220;.

<a href="http://www.ubuntero.com.br/wp-content/uploads/2013/06/skype-call-recorder-2.png" rel="lightbox"><img class="alignnone size-medium wp-image-5538" title="Configurando o Skype Call Recorder no Ubuntu" alt="Configurando o Skype Call Recorder no Ubuntu" src="http://www.ubuntero.com.br/wp-content/uploads/2013/06/skype-call-recorder-2-300x216.png" width="300" height="216" /></a>

Selecione o repositório do Skype Call Recorder e clique em editar.

<a href="http://www.ubuntero.com.br/wp-content/uploads/2013/06/skype-call-recorder-3.png" rel="lightbox"><img class="alignnone size-medium wp-image-5539" title="Configurando o PPA do Skype Call Recorder no Ubuntu" alt="Configurando o PPA do Skype Call Recorder no Ubuntu" src="http://www.ubuntero.com.br/wp-content/uploads/2013/06/skype-call-recorder-3-300x214.png" width="300" height="214" /></a>

Altere o campo &#8220;Distribuição&#8221; para `Precise`.

<a href="http://www.ubuntero.com.br/wp-content/uploads/2013/06/skype-call-recorder-4.png" rel="lightbox"><img class="alignnone size-medium wp-image-5540" title="Configurando o repositório do Skype Call Recorder no Ubuntu" alt="Configurando o repositório do Skype Call Recorder no Ubuntu" src="http://www.ubuntero.com.br/wp-content/uploads/2013/06/skype-call-recorder-4-300x220.png" width="300" height="220" /></a>

Digite sua senha e agora pode continuar com os outros passos que são os comandos:

<pre class="brush:shell">sudo apt-get update
sudo apt-get install skype-call-recorder</pre>

Agora pode gravar suas conversas como nas versões anteriores.

Para abrir o Skype, pressione a tecla `Super` e digite `Skype` e selecione o **Skype** para que ele seja aberto. Para o Skype Call Recorder pressione `Super`, digite `Skype` e selecione o segundo ícone onde diz **Skype Call Recorder**.

 [1]: http://www.ubuntero.com.br/2011/10/skype-call-recorder-no-ubuntu-11-10/