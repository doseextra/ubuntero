---
title: Google Earth no Ubuntu 10.10
author: Ivan Brasil Fuzzer
type: post
date: 2010-10-19T22:33:03+00:00
url: /google-earth-no-ubuntu-10-10/
categories:
  - Ubuntu
tags:
  - google earth
  - Linux
  - Ubuntu

---
<p style="text-align: center;">
  <a href="http://www.ubuntero.com.br/wp-content/uploads/2010/10/Google-Earth-Logo-200x200.png"><img class="alignnone size-full wp-image-1122" title="Google-Earth-Logo-200x200" src="http://www.ubuntero.com.br/wp-content/uploads/2010/10/Google-Earth-Logo-200x200.png" alt="" width="200" height="200" /></a>
</p>

Se existia um software de terceiros que eu já tinha desistido de utilizar, este software era o Google Earth. Esta desistência não tinha relação com outros perrengues que havia passado com a empresa desenvolvedora, o fato era que o software era, desculpem a palavra, ridículo quando os efeitos do compiz estavam habilitados.

Na versão 10.10 do Ubuntu, este problema foi resolvido e agora sou mais um utilizador deste software, embora prefira utilizar o site <maps.google.com> quando preciso verificar ou traçar rotas.

O milagre, ao que parece, está no fato de ser gerado um pacote específico para o seu computador, pelo menos é o que eu estou deduzindo. Veja abaixo como instalar o Google Earth no Ubuntu 10.10(a maneira mais fácil é utilizar o terminal :

Abra o terminal pelo menu Aplicativos -> Acessórios -> Terminal

No terminal digite o seguinte comando:

<pre class="brush:shell">sudo apt-get install googleearth-package lsb-core</pre>

Após o download do pacote digite o seguintes comandos e aguarde:

<pre class="brush:shell">make-googleearth-package --force
sudo dpkg -i googleearth_5.2.1.1588+0.5.7-1_i386.deb</pre>

Obs: verifique o nome do pacote &#8220;googleearth_&#8221; que pode variar.

Concluído o processo disparado pelos comandos acima, você terá o Google Earth diponível pelo menu Aplicativos -> Internet -> Google Earth (sem tela piscando).

<p style="text-align: center;">
  <a href="http://www.ubuntero.com.br/wp-content/uploads/2010/10/Captura_de_tela.png"><img class="alignnone size-thumbnail wp-image-1132" title="Captura_de_tela" src="http://www.ubuntero.com.br/wp-content/uploads/2010/10/Captura_de_tela-150x88.png" alt="" width="150" height="88" /></a>
</p>