---
title: Review semanal 04
author: Ivan Brasil Fuzzer
type: post
date: 2012-01-24T10:57:29+00:00
url: /review-semanal-04/
burl:
  - http://ads.tt/1YIT
  - http://ads.tt/1YIT
  - http://ads.tt/1YIT
  - http://ads.tt/1YIT
  - http://ads.tt/1YIT
  - http://ads.tt/1YIT
  - http://ads.tt/1YIT
  - http://ads.tt/1YIT
  - http://ads.tt/1YIT
  - http://ads.tt/1YIT
  - http://ads.tt/1YIT
  - http://ads.tt/1YIT
  - http://ads.tt/1YIT
  - http://ads.tt/1YIT
  - http://ads.tt/1YIT
  - http://ads.tt/1YIT
  - http://ads.tt/1YIT
  - http://ads.tt/1YIT
  - http://ads.tt/1YIT
  - http://ads.tt/1YIT
  - http://ads.tt/1YIT
  - http://ads.tt/1YIT
  - http://ads.tt/1YIT
  - http://ads.tt/1YIT
  - http://ads.tt/1YIT
  - http://ads.tt/1YIT
  - http://ads.tt/1YIT
  - http://ads.tt/1YIT
  - http://ads.tt/1YIT
  - http://ads.tt/1YIT
  - http://ads.tt/1YIT
  - http://ads.tt/1YIT
  - http://ads.tt/1YIT
  - http://ads.tt/1YIT
  - http://ads.tt/1YIT
  - http://ads.tt/1YIT
  - http://ads.tt/1YIT
  - http://ads.tt/1YIT
  - http://ads.tt/1YIT
  - http://ads.tt/1YIT
  - http://ads.tt/1YIT
  - http://ads.tt/1YIT
  - http://ads.tt/1YIT
categories:
  - Ubuntu
  - VídeoCast
tags:
  - Jogos
  - Linux
  - minecraft
  - tecland
  - Ubuntu

---
<p style="text-align: center;">
</p>

Links do episódio:

  *  [TecLand][1]
  * [Google AdSense][2]
  * [Opencast episódio 5 – Ubuntu 11.04, 11.10 e o que esperar do 12.04][3]
  * Escreva esta frase no seu twitter: &#8220;@DellnoBrasil queremos computadores Core i5 e Core i7 com Ubuntu #computadorescomubuntu&#8221;

## **Minecraft**

Minecraft é um jogo de aventura, construção e sobrevivência onde os jogadores são livres para fazerem o que bem intender. Os jogos sempre começam em mundos enormes gerados aleatoriamente por milhões de cubos e totalmente destrutíveis onde o jogador pode construir prédios, minerar, cortar árvores e criar objetos necessários para a sobrevivência.

O jogo foi desenvolvido em java, o que permite que possa ser jogado em qualquer plataforma, incluindo nosso Ubuntu. O grande porém é a necessidade da VM da Oracle, não sendo possível jogar utilizando a VM de código aberto OpenJDK.

Antes de qualquer coisa baixe o jogo no site <http://minecraft.net>

Para conseguirmos jogar, então, precisamos instalar a máquina virtual da Oracle e para isto baixe o script abaixo:

<p style="text-align: center;">
  <!--download id="36"-->
</p>

Abra o terminal pressionando Ctrl+Alt+t e digite os seguintes comandos(levando em conta que o script tenha sido baixado na pasta Downloads):

<pre class="brush:shell">cd Downloads
chmod +x instala-java.sh
sudo apt-get install git
sudo ./instala-java.sh</pre>

Siga as instruções no terminal para download e criação dos pacotes .deb e ao final instale o pacote referente a sua arquitetura que no exemplo abaixo é para arquitetura de 64 bits.

<pre class="brush:shell">sudo dpkg -i sun-java6-jre_6.30-3_all.deb sun-java6-bin_6.30-3_amd64.deb sun-java6-plugin_6.30-3_amd64.deb</pre>

Agora vamos a alguns pacotes para que o jogo funcione em sua plenitude. Faça o download da biblioteca abaixo conforme sua arquitetura:

32 bits

[http://mirrors.kernel.org/ubuntu/pool/universe/l/lwjgl/liblwjgl-java-jni\_2.4.2+dfsg-3\_i386.deb][4]

64 bits

[http://mirrors.kernel.org/ubuntu/pool/universe/l/lwjgl/liblwjgl-java-jni\_2.4.2+dfsg-3\_amd64.deb][5]

Extraia o pacote.

32 bits

<pre class="brush:shell">dpkg -x liblwjgl-java-jni_2.4.2+dfsg-3_i386.deb /tmp/lwjgl</pre>

64 bits

<pre class="brush:shell">dpkg -x liblwjgl-java-jni_2.4.2+dfsg-3_amd64.deb /tmp/lwjgl</pre>

Mova a biblioteca para o local onde ela deve estar.

<pre class="brush:shell">mv /tmp/lwjgl/usr/lib/jni/liblwjgl.so ~/.minecraft/bin/natives</pre>

Baixe o Java Monkey Engine no endereço abaixo:

<a title="http://code.google.com/p/jmonkeyengine/downloads/detail?name=jME2_0_1-StableDistribution.zip&can=2&q=" href="http://code.google.com/p/jmonkeyengine/downloads/detail?name=jME2_0_1-StableDistribution.zip&can=2&q=" rel="nofollow">http://code.google.com/p/jmonkeyengine/downloads/detail?name=jME2_0_1-StableDistribution.zip&can=2&q=</a>

Extraia o conteúdo do Java Monkey Engine

<pre class="brush:shell">unzip jME2_0_1-StableDistribution.zip && cd jME2_0_1-StableDistribution/jME2_0_1-StableDistribution/</pre>

Mova as bibliotecas para o local onde elas devem ficar

<pre class="brush:shell">mv lib/lwjgl/jinput.jar ~/.minecraft/bin/
mv lib/lwjgl/lwjgl.jar ~/.minecraft/bin/
mv lib/lwjgl/lwjgl_util.jar ~/.minecraft/bin/
mv lib/lwjgl/native/linux/lib*.* ~/.minecraft/bin/natives</pre>

Agora você pode jogar o Minecraft com tudo o que ele tem a lhe oferecer. É importante lembrar que o jogo não é opensource e muito menos gratuito, salvo se jogado pelo navegador. Os arquivos que disponibilizo no site devem ser usados apenas por quem está pagando pelo direito de usar o jogo.

Para jogar execute o arquivo minecraft.jar que está na pasta .minecraft da sua pasta pessoal. Arquivos e pastas que começam com um ponto são ocultos e podem ser visualizados pressionando a combinação de teclas Ctrl+h com o nautilus aberto.

 [1]: http://www.tecland.com.br/
 [2]: http://www.ubuntero.com.br/2008/02/google-adsense/
 [3]: http://www.ubuntero.com.br/2011/12/opencast-episodio-5-ubuntu-11-04-11-10-e-o-que-esperar-do-12-04/
 [4]: http://mirrors.kernel.org/ubuntu/pool/universe/l/lwjgl/liblwjgl-java-jni_2.4.2+dfsg-3_i386.deb
 [5]: http://mirrors.kernel.org/ubuntu/pool/universe/l/lwjgl/liblwjgl-java-jni_2.4.2+dfsg-3_amd64.deb