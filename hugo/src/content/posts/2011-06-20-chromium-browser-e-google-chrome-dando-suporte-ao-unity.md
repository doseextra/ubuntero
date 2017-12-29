---
title: Chromium Browser – e Google Chrome – dando suporte ao Unity
author: Anderson Henrique
type: post
date: 2011-06-20T18:47:21+00:00
url: /chromium-browser-e-google-chrome-dando-suporte-ao-unity/
categories:
  - Ubuntu

---
Primeiro dia de férias e resolvi re-fazer esse post, depois de ter visto algo semelhante no site do André Gondim. A partir da versão 13 do Chromium Browser, e a versão 12 do Google Chrome, começou um ciclo de suporte ao Unity. Por enquanto no Chrome, somente há o suporte ao Global Menu do Unity. Já no Chromium, há o suporte ao Global Menu e também à barra do Unity, mostrando o progresso e a quantidade de downloads, sendo esse segundo recurso do Chromium nativo dele.

Se quiser fazer o download da última versão estável do Google Chrome, _[clique aqui][1]_. Caso queira a última versão do Chromium, no canal de desenvolvedor, que tem todos os recursos, vai precisar usar o terminal, os comandos são os seguintes:

sudo add-apt-repository ppa:chromium-daily && sudo apt-get update && sudo apt-get install chromium-browser

Caso queira a versão estável, está aí:

sudo add-apt-repository ppa:chromium-daily/stable && sudo apt-get update && sudo apt-get install chromium-browser

Vale lembrar que pra ativar, vá no _about:flags_ e procure pelo seguinte.

Suporte experimental à barra de menus GNOME e ative. Na versão catorze do Chromium, isso já veio por padrão.

 [1]: https://dl-ssl.google.com/linux/direct/google-chrome-stable_current_i386.deb