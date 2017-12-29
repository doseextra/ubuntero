---
title: Ícone do Dropbox no Ubuntu 13.10
author: Ivan Brasil Fuzzer
type: post
date: 2013-11-04T18:02:34+00:00
url: /icone-do-dropbox-no-ubuntu-13-10/
burl:
  - http://ads.tt/IDE5
  - http://ads.tt/IDE5
categories:
  - Ubuntu
tags:
  - 13.10
  - 14.04
  - Dropbox
  - Linux
  - nuvem
  - Ubuntu
  - Ubuntu One

---
<p style="text-align: center;">
  <a href="http://www.ubuntero.com.br/wp-content/uploads/2013/11/icone-dropbox.png"><img class="alignnone size-full wp-image-6243" src="http://www.ubuntero.com.br/wp-content/uploads/2013/11/icone-dropbox.png" alt="icone-dropbox" width="323" height="41" /></a>
</p>

Não utilizo o Dropbox por dois motivos, apenas 2 GB de armazenamento e por ter o UbuntuOne com 6 GB disponíveis para mim. Mesmo assim, sei que muitos de vocês são usuários dele e muitos estão com problema no Ubuntu 13.10. O problema é que o ícone não aparece na bandeja do sistema.

Haters vão dizer:

&#8220;Viu como o Ubuntu é bugado?!&#8221;

Sinto informar que o bug é exclusivo do Dropbox que não adiciona uma dependência em seu pacote. Para resolver o problema é bem simples, instale o pacote `libappindicator1` pela Central de Programas ou pela linha de comando com o comando abaixo:

<pre class="brush:shell">sudo apt-get install libappindicator1</pre>

É necessário reiniciar a sessão para que o ícone passe a aparecer.

**Atualizado em 03/05/2014:**
  
No Ubuntu 14.04 LTS também ocorre esse problema. Instalando o pacote `libappindicator1` e reiniciando a sessão o ícone do Dropbox irá aparecer na barra no sistema.