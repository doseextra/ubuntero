---
title: 'Videocast #52 – Ubuntu Touch em Dual Boot com Android'
author: Ivan Brasil Fuzzer
type: post
date: 2014-02-24T16:56:35+00:00
url: /videocast-52-ubuntu-touch-em-dual-boot-com-android/
burl:
  - http://ads.tt/TN7N
  - http://ads.tt/TN7N
categories:
  - Ubuntu
  - VídeoCast
tags:
  - Android
  - dual boot
  - Linux
  - touch
  - Ubuntu
  - VídeoCast

---
<a href="http://www.ubuntero.com.br/wp-content/uploads/2014/02/miniatura1.png" rel="lightbox"><img class="aligncenter size-medium wp-image-6501" alt="Ubuntu Touch em Dual Boot com Android" src="http://www.ubuntero.com.br/wp-content/uploads/2014/02/miniatura1-300x168.png" width="300" height="168" /></a>

Antes de qualquer coisa, este **Videocast** está longo mesmo. Neste episódio mostro o **Ubuntu Touch** em Dual Boot com o **Android**. É o vídeo mais detalhado do Ubuntu Touch que eu já fiz, incluindo informações no post de como instalar o Dual Boot e como importar contatos no Ubuntu Touch. Não voltarei a fazer vídeos do Ubuntu Touch rodando no Galaxy Nexus porque ele não é mais suportado oficialmente, o que prejudica bastante qualquer coisa que possa ser dita.

Antes de sair seguindo os passos, faça um backup de seus dados, como eu falo no vídeo, eu perdi informações no Android e não gostaria que você perdesse também.

<div class="video">
</div>

<p class="button">
  <a href="http://www.youtube.com/embed/S23Y8BVzq5A" target="_blank" rel="nofollow">Assistir no Youtube</a>
</p>

## Instalação

Em primeiro lugar, desbloqueie seu smartphone como mostramos [neste post][1], apenas não faça a parte da instalação do Ubuntu Touch. Feito isso, [baixe o script][2] que irá instalar o aplicativo que faz a mágica acontecer. Os próximos passos podem ser vistos no vídeo.

## Sincronizar contatos com sua conta Google

Com o smartphone conectado com o cabo USB no computador, abra o terminal pressionando Ctrl+Alt+t e digite os seguintes comandos:

<pre class="brush:shell">adb root
adb shell
ubuntu_chroot shell
su - phablet
syncevolution --configure --sync-property "username=email@gmail.com" --sync-property "password=secret" Google_Contacts
syncevolution --sync refresh-from-server Google_Contacts addressbook</pre>

Estes comandos farão a sincronia de apenas 50 contatos por vez. Para ter todos os contatos, repita a última linha quantas vezes forem necessárias até que todos os contatos sejam sincronizados, lembrando que a cada vez que o comando for dado, 50 contatos serão adicionados ao smartphone.

## Habilitar ligações com Android 4.4

Se você está usando o Android 4.4, o rádio não funcionará no Ubuntu Touch, para que funcione você pode esperar até lançarem uma imagem que tenha esta funcionalidade, está bem perto desta imagem ser lançada, ou então fazer o downgrade do firmware de rádio para a 4.3. Para isto, faça o [download da instalação do Android][3] referente ao seu celular(este passo é para o Nexus 4).

Extraia o conteúdo do arquivo para uma pasta qualquer e entre nesta pasta pelo terminal.

Execute o seguinte comando:

<pre class="brush:shell">adb reboot bootloader</pre>

O sistema no celular ficará parado no bootloader e você deve executar o seguinte comando(trocando o $RADIO_FIRMWARE pelo nome do arquivo do rádio da imagem que deve começar com ratio-codinomecelular):

<pre class="brush:shell">fastboot flash radio $RADIO_FIRMWARE.img</pre>

Após o novo firmware ser gravado no celular, é só reiniciar o celular com o comando:

<pre class="brush:shell">fastboot reboot</pre>

Não esqueça de votar no site para o [prêmio TopBlog][4]. Vote com todos os seus emails e pelo facebook.

**Fonte: [Touch/DualBootInstallation][5]**

 [1]: http://www.ubuntero.com.br/2013/02/ubuntu-touch-developer-preview/
 [2]: http://humpolec.ubuntu.com/latest/dualboot.sh
 [3]: https://developers.google.com/android/nexus/images#occam
 [4]: http://www.topblog.com.br/2012/index.php?pg=busca&c_b=20135
 [5]: https://wiki.ubuntu.com/Touch/DualBootInstallation