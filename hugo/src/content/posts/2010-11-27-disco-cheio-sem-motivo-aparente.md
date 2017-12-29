---
title: Disco cheio sem motivo aparente
author: Ivan Brasil Fuzzer
type: post
date: 2010-11-27T22:19:14+00:00
url: /disco-cheio-sem-motivo-aparente/
burl:
  - http://ads.tt/7XH
  - http://ads.tt/7XH
  - http://ads.tt/7XH
  - http://ads.tt/7XH
  - http://ads.tt/7XH
  - http://ads.tt/7XH
  - http://ads.tt/7XH
  - http://ads.tt/7XH
  - http://ads.tt/7XH
  - http://ads.tt/7XH
  - http://ads.tt/7XH
  - http://ads.tt/7XH
  - http://ads.tt/7XH
  - http://ads.tt/7XH
  - http://ads.tt/7XH
  - http://ads.tt/7XH
  - http://ads.tt/7XH
  - http://ads.tt/7XH
  - http://ads.tt/7XH
  - http://ads.tt/7XH
  - http://ads.tt/7XH
  - http://ads.tt/7XH
  - http://ads.tt/7XH
  - http://ads.tt/7XH
  - http://ads.tt/7XH
  - http://ads.tt/7XH
  - http://ads.tt/7XH
  - http://ads.tt/7XH
  - http://ads.tt/7XH
  - http://ads.tt/7XH
  - http://ads.tt/7XH
  - http://ads.tt/7XH
  - http://ads.tt/7XH
  - http://ads.tt/7XH
  - http://ads.tt/7XH
  - http://ads.tt/7XH
  - http://ads.tt/7XH
  - http://ads.tt/7XH
  - http://ads.tt/7XH
  - http://ads.tt/7XH
  - http://ads.tt/7XH
  - http://ads.tt/7XH
  - http://ads.tt/7XH
  - http://ads.tt/7XH
  - http://ads.tt/7XH
  - http://ads.tt/7XH
  - http://ads.tt/7XH
  - http://ads.tt/7XH
  - http://ads.tt/7XH
  - http://ads.tt/7XH
categories:
  - Ubuntu
tags:
  - desktop
  - disco rígido
  - hard disk
  - hd
  - Netbook
  - notebook
  - Ubuntu

---
Hoje a tarde liguei meu computador e recebi a mensagem de que minha partição home estava totalmente cheia. Achei muito estranho porque até o último desligamento eu tinha mais de 100 GB livre.

Investigando o problema encontrei um arquivo de log(.xsession-errors) ocupando todo o espaço livre do disco. Analisando o conteúdo do arquivo pude ver a seguinte mensagem sendo repetida inúmeras vezes:

``(nautilus:1882): GConf-CRITICAL **: gconf_value_free: assertion `value != NULL' failed``

Procurando pelo erro cheguei até uma <a href="http://www.uluga.ubuntuforums.org/showthread.php?t=1592348" target="_blank" rel="nofollow">postagem no fórum do Ubuntu</a> onde encontrei o motivo e a solução para tal problema. O problema é um _bug_ no programa ubuntuone-client-gnome e a solução paliativa é simples.

Abra o terminal indo no menu &#8220;**Aplicativos -> Acessórios -> Terminal**&#8221; e digite o seguinte comando:

`gconftool-2 --type bool --set '/apps/ubuntuone/nautilus/show-location' false`

Encerre a sessão atual e faça login novamente que o problema será sanado. Caso ainda tenha o arquivo gigante no seu computador, o mesmo pode ser apagado com o seguinte comando:

`rm ~/.xsession-errors`