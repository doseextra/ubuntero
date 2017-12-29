---
title: Firefox 8 via PPA (apenas Ubuntu 10.04 e 10.10)
author: Ivan Brasil Fuzzer
type: post
date: 2011-11-09T16:44:04+00:00
url: /firefox-8-via-ppa-apenas-ubuntu-10-04-e-10-10/
categories:
  - Ubuntu
tags:
  - 10.04
  - 10.10
  - 11.04
  - 11.10
  - browser
  - Firefox
  - Linux
  - navegador
  - Ubuntu

---
<p style="text-align: center;">
  <a href="http://www.ubuntero.com.br/wp-content/uploads/2011/11/firefox.jpg"><img class="alignnone size-medium wp-image-2946" title="firefox" src="http://www.ubuntero.com.br/wp-content/uploads/2011/11/firefox-300x300.jpg" alt="" width="300" height="300" /></a>
</p>

Seguindo a onda dos PPA e o lançamento do Firefox 8 seguem os passos para adicionar o PPA do Firefox para instalarmos a última versão nas versões 10.04 e 10.10.

Abra o terminal pressionando Ctrl+Alt+t e digite o seguinte comando:

<pre class="brush:shell">sudo apt-add-repository ppa:mozillateam/firefox-stable</pre>

Pressione Enter quando for pedido e aguarde o terminal ser liberado. Após o terminal ser liberado digite os seguintes comandos:

<pre class="brush:shell">sudo apt-get update
sudo apt-get dist-upgrade</pre>

Pronto, agora você terá sempre a última versão estável do Firefox no seu Ubuntu.

Usuários do Ubuntu 11.04 e 11.10 devem esperar um pouco até que a nova versão esteja disponível nos repositórios oficiais, isto não deve demorar muito. Não estão previstos PPA para estas versões, tendo em vista que o Ubuntu tem mantido as versões atualizadas, só leva um tempinho para testar e disponibilizar.