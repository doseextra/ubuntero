---
title: Resolvendo problema de repositórios que impede a abertura da Central de Programas
author: Ivan Brasil Fuzzer
type: post
date: 2013-05-03T13:37:51+00:00
url: /resolvendo-problema-de-repositorios-que-impede-a-abertura-da-central-de-programas/
burl:
  - http://ads.tt/3DNE
  - http://ads.tt/3DNE
  - http://ads.tt/3DNE
  - http://ads.tt/3DNE
  - http://ads.tt/3DNE
  - http://ads.tt/3DNE
  - http://ads.tt/3DNE
  - http://ads.tt/3DNE
  - http://ads.tt/3DNE
  - http://ads.tt/3DNE
  - http://ads.tt/3DNE
  - http://ads.tt/3DNE
  - http://ads.tt/3DNE
  - http://ads.tt/3DNE
  - http://ads.tt/3DNE
  - http://ads.tt/3DNE
  - http://ads.tt/3DNE
  - http://ads.tt/3DNE
  - http://ads.tt/3DNE
  - http://ads.tt/3DNE
  - http://ads.tt/3DNE
  - http://ads.tt/3DNE
  - http://ads.tt/3DNE
  - http://ads.tt/3DNE
  - http://ads.tt/3DNE
  - http://ads.tt/3DNE
categories:
  - Ubuntu
tags:
  - Central de programas
  - Fix
  - Linux
  - Ubuntu

---
<img class="size-full wp-image-5277 aligncenter" title="Logo Central de programas do Ubuntu" alt="Logo Central de programas do Ubuntu" src="http://www.ubuntero.com.br/wp-content/uploads/2013/05/central-de-programas.png" width="200" height="200" />

Já estou vendo que vai ter gente comentando que o **Ubuntu** só tem problema, mas isto não é verdade, apenas quando fico sabendo de um que tem solução eu divulgo a solução.

Se ao tentar abrir a **Central de programas do Ubuntu** você está recebendo um erro parecido com este:

`"Erro: Abrindo o cache (E: Encountered a section with no package: header, E: problem with Mergelist /var/lib/apt/lists/br.archive.ubuntu.com_ubuntu_dists_raring_universe_i18n_Translation-pt, E:The package listsor status file could not be parsed or opened.)"`

A solução é bem simples. Abra o terminal pressionando `Ctrl+Alt+t` e digite os seguintes comandos:

<pre class="brush:shell">sudo rm /var/lib/apt/lists/* -vf
sudo apt-get update</pre>

Agora você pode voltar a abrir a Central de programas do Ubuntu sem mais problemas.