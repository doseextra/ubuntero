---
title: Adicionar repositórios estando atras de um firewall
author: Ivan Brasil Fuzzer
type: post
date: 2011-01-20T11:05:27+00:00
url: /adicionar-repositorios-estando-atras-de-um-firewall/
categories:
  - Ubuntu
tags:
  - desktop
  - firewall
  - notebook
  - Proxy
  - Servidor
  - universidade

---
Artigo retirado e traduzido do site [OMGUbuntu][1], tradução livre.

Tendo problemas com o Ubuntu na Universidade? [MadnessRed][2] tem a solução.

Um grande número de empresas e universidades bloqueiam todas as portas desconhecidas. Isto inclui as portas usadas para adicionar repositórios.

Este problema pode ser manobrado utilizando a porta 80 para adquirir a chave, MadnessRed escreveu um script para fazer isto, mas este script tenta outras portas primeiro ao utilizar o comando apt-add-repository e isto pode levar alguns anos até falhar.

Aqui está a melhor solução que ele encontrou, editar o script para que o apt-add-repository utilize a porta 80.

  1. Pressione Alt+F2 e digite &#8220;gksu gedit /usr/lib/python2.6/dist-packages/softwareproperties/ppa.py&#8221;
  2. Procure pela linha 88 e altere &#8220;keyserver.ubuntu.com&#8221; para &#8220;hkp://keyserver.ubuntu.com:80&#8221;
  3. Salve e feche.

Agora o apt-add-repository irá pegar as chaves pela porta 80, que provavelmente não estará bloqueada.

 [1]: http://www.omgubuntu.co.uk/2011/01/how-to-add-repositories-to-ubuntu-from-behind-a-firewall
 [2]: http://twitter.com/madnessred