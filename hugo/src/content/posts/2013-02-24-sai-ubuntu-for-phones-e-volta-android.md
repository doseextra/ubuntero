---
title: Sai Ubuntu for Phones e volta Android
author: Ivan Brasil Fuzzer
type: post
date: 2013-02-24T16:26:32+00:00
url: /sai-ubuntu-for-phones-e-volta-android/
burl:
  - http://ads.tt/WJP
  - http://ads.tt/WJP
  - http://ads.tt/WJP
  - http://ads.tt/WJP
  - http://ads.tt/WJP
  - http://ads.tt/WJP
  - http://ads.tt/WJP
  - http://ads.tt/WJP
  - http://ads.tt/WJP
  - http://ads.tt/WJP
  - http://ads.tt/WJP
  - http://ads.tt/WJP
  - http://ads.tt/WJP
  - http://ads.tt/WJP
  - http://ads.tt/WJP
  - http://ads.tt/WJP
  - http://ads.tt/WJP
  - http://ads.tt/WJP
  - http://ads.tt/WJP
  - http://ads.tt/WJP
  - http://ads.tt/WJP
  - http://ads.tt/WJP
  - http://ads.tt/WJP
  - http://ads.tt/WJP
  - http://ads.tt/WJP
  - http://ads.tt/WJP
  - http://ads.tt/WJP
  - http://ads.tt/WJP
  - http://ads.tt/WJP
  - http://ads.tt/WJP
  - http://ads.tt/WJP
  - http://ads.tt/WJP
categories:
  - Ubuntu
tags:
  - Android
  - Ubuntu for Phones
  - Ubuntu Touch

---
<p style="text-align: center;">
  <a href="http://www.ubuntero.com.br/wp-content/uploads/2013/02/SAM_0165.jpg" rel="lightbox"><img class="size-medium wp-image-4535 aligncenter" title="Android 4.2.2" alt="Android 4.2.2" src="http://www.ubuntero.com.br/wp-content/uploads/2013/02/SAM_0165-300x168.jpg" width="300" height="168" /></a>
</p>

Ok, você já viu **[como instalar o Ubuntu for Phones no Galaxy X][1]**, instalou, e viu que está muito cru para usar e quer voltar ao **Android**, mas não sabe como fazer. Não se preocupe que é fácil e de lambuja vamos voltar ao Android 4.2.2 e não a imagem oficial da **Samsung** que ainda nos traz o Android 4.1.

A descrição de como retornar ao Android está na mesma **<a title="Wiki do Ubuntu Touch" href="https://wiki.ubuntu.com/Touch/Install" target="_blank">página que ensina a instalar o Ubuntu for Phones</a>**, o que está neste artigo é apenas a tradução, claro que já testei e voltei a versão no **Galaxy X** mostrado no **[VideoCast 26 &#8211; Galaxy X e Ubuntu for Phones][2]**.

A primeira coisa a fazer é baixar a imagem oficial do Google. Eu baixei deste endereço <a title="Baixar a imagem oficial do Android 4.2.2" href="https://developers.google.com/android/nexus/images#takju" target="_blank">developers.google.com/android/nexus/images#takju</a> e preferi a versão 4.2.2 que é a que estou rodando neste momento.

Conecte o cabo USB no seu celular e no computador e deixe o celular ligado.

Descompacte o arquivo baixado e vá até a pasta criada usando o terminal.

Rode o comando:

<pre class="brush:shell">adb reboot-bootloader
sudo ./flash-all.sh</pre>

Agora é só aguardar a finalização e você terá o Android rodando novamente no seu celular. O processo de instalação da nova imagem do Android levou pouco mais de um minuto no meu teste.

 [1]: http://www.ubuntero.com.br/2013/02/ubuntu-touch-developer-preview/
 [2]: http://www.ubuntero.com.br/2013/02/videocast-26-galaxy-x-e-ubuntu-for-phones/ "VideoCast 26 - Galaxy X e Ubuntu for Phones"