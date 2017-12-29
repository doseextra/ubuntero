---
title: Não sabe a chave do ppa que adicionou nos canais de software?
author: Ivan Brasil Fuzzer
type: post
date: 2010-07-20T21:19:13+00:00
url: /nao-sabe-a-chave-do-ppa-que-adicionou-nos-canais-de-software/
categories:
  - Ubuntu

---
GPG error: http://ppa.launchpad.net jaunty release:
  
The following signatures couldn&#8217;t be verified because
  
the public key is not available: NO_PUBKEY DAA9427DCBF475C3

Ao atualizar ou adicionar um repositório ppa já viu uma mensagem como a acima? Com a disseminação de repositórios ppa surgiram muitos tutorias pela internet de como adicionar repositórios para instalação de alguns programas, o que estes tutoriais esquecem ou omitem são as chaves dos repositórios.

Para resolver este problema sem ter que correr atras das tais chaves, siga estes passos.

  * Baixe este script <http://www.mediafire.com/?gnkmbteymna>
  * Mova o script para sua pasta pessoal
  * Abra o terminal em **Aplicativos > Acessórios > Terminal** e digite os seguintes comandos: 
      * cd ~
      * chmod +x ./lauchpad-update.sh
      * ./launchpad-update.sh

Pode ser necessário executar mais de uma vez o comando &#8220;./launchpad-update.sh&#8221; mas é um trabalho que não dói e vai resolver seus problemas.