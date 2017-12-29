---
title: Ubuntu Forums está de volta e o que aconteceu foi explicado
author: Ivan Brasil Fuzzer
type: post
date: 2013-07-31T13:50:06+00:00
url: /ubuntu-forums-esta-de-volta-e-o-que-aconteceu-foi-explicado/
burl:
  - http://ads.tt/94HD
  - http://ads.tt/94HD
categories:
  - Ubuntu
tags:
  - falha
  - fórum
  - Linux
  - Ubuntu

---
O **<a title="Ubuntu Forums" href="http://www.ubuntuforums.org/" target="_blank" rel="nofollow">Ubuntu Forums</a>** está de volta a ativa depois do ataque e invasão sofridos. No blog da Canonical temos os detalhes do que aconteceu e o que foi feito para que o fórum voltasse ao ar.

## O que aconteceu?

No dia 14 de julho, um atacante conseguiu logar em uma conta de um moderador. Esta conta era de um membro da comunidade. Esta conta tinha poderes para publicar comunicados e o sistema vBulletin, sistema do fórum, permite que comunicados sejam postados em HTML sem verificação por código malicioso.

O atacante enviou um comunicado para outros 3 administradores dizendo que algo estava errado com o servidor. Um dos administradores entrou rapidamente no site e verificou que nada havia de errado e respondeu a mensagem privada. Em conversa com o suporte do sistema vBulletin, chegaram a conclusão que o atacante usou uma técnica de XSS onde foi possível que os cookies de uma sessão fossem enviados para ele.

Com as informações do administrador, o atacante teve acesso ao painel de administração e conseguiu fazer todo o estrago que nós já sabemos.

## O que o atacante conseguiu acessar?

O atacante teve acesso total ao sistema vBulletin e ao usuário www-data no servidor de aplicação do fórum. Com esse acesso ele pode ler e escrever no banco de dados dos sistema. Foi usada esta permissão para baixar a tabela de usuários onde as senhas estavam armazenadas com o algoritmo MD5. O total de usuários baixados foi de 1.82 milhões.

## O que o atacante não conseguiu acessar?

O Atacante não conseguiu ter acesso root ou a outras pastas de outros usuários onde outras páginas ou sistemas estavam. Também não conseguiu acesso a outros bancos de dados e nem teve acesso a outros serviços ou repositórios de código.

## O que a Canonical não sabe?

A Canonical ainda não sabe como o atacante teve acesso a primeira conta que originou todo o problema. Como o comunicado foi apagado por um dos administradores, não se sabe exatamente como o XSS funcionava.

## O que foi feito?

Para o sistema voltar ao ar, algumas medidas foram tomadas.

  * Foi enviado um email para cada usuário do sistema informado o que aconteceu e pedindo que a senha de outros serviços sejam mudadas por segurança, principalmente onde eram usados o mesmo email e senha do fórum.
  * Foi feito um backup dos dados do sistema e uma nova instalação foi feita para garantir que nenhum arquivo alterado fosse reusado.
  * As senhas de todos os usuários foram geradas novamente de maneira aleatória.
  * Os dados foram importados de maneira manual avaliando todas as tabelas para não haver riscos de algo estranho estar no banco de dados.

Outras medidas também foram tomadas e mais detalhes podem ser vistos no comunicado no <a href="http://blog.canonical.com/2013/07/30/ubuntu-forums-are-back-up-and-a-post-mortem/" target="_blank" rel="nofollow">blog da Canonical</a>.

&nbsp;