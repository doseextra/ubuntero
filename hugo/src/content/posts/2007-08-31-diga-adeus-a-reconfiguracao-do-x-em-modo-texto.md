---
title: Diga adeus a reconfiguração do X em modo texto
author: Ivan Brasil Fuzzer
type: post
date: 2007-08-31T13:37:52+00:00
url: /diga-adeus-a-reconfiguracao-do-x-em-modo-texto/
burl:
  - http://ads.tt/1YMC
categories:
  - Ubuntu

---
Como de costume, o Ubuntu vem prometendo gigantescos avanços em facilidades para os usuários linux. A novidade agora é o [BulletProof-X][1].

O [BulletProof-X][1] promete fornecer um &#8220;failsafe mode&#8221;. Ao detectar uma falha ao iniciar o X, o BulletProof-X iniciará o X com o driver VESA em 800&#215;600 com 256 cores ou VGA em 640&#215;480 em 16 cores e ainda executará a aplicação displayconfig-gtk para que a configuração do vídeo seja feita sem a necessidade de o usuário ir até a linha de comando executar apt-get reconfigure.

Esta nova facilidade só pode ser testada com o Ubuntu Gutsy instalado no computador. O Live CD, ao detectar uma falha com o X, irá diretamente para o modo VESA sem abrir a aplicação displayconfig-gtk.

 [1]: https://wiki.ubuntu.com/BulletProofX