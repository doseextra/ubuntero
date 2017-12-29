---
title: ubuntu-br.org fora
author: Ivan Brasil Fuzzer
type: post
date: 2011-01-13T00:49:14+00:00
url: /ubuntu-br-org-fora/
categories:
  - Ubuntu
tags:
  - Canonical
  - dns
  - Ubuntu
  - wiki

---
Artigo de utilidade pública retirado do blog do [André Gondim][1]

No dia 31 de dezembro de 2010 foi identificado que o domínio não estava disponível. Porém imaginou-se tratar de algo passageiro e foi aberto um ticket de verificação junto aos sysadmin da Canonical.

Inicialmente parecia tratar-se de problema onde uma simples reinicialização de máquina resolveria, como já ocorreu em outras
  
oportunidades. Ao ser investigado mais a fundo, foi constatado, ainda sem explicação do porque, que houve uma perda na zona do DNS do ubuntu-br.org. E já foi solicitado a correção do mesmo junto a quem cuida do domínio.

Diversos contatos com o time de infra da canonical (#canonical-sysadmin, na Freenode) foram feitos desde quando o problema começou, na tentativa de solucionar o problema:

Dia 3 de janeiro:
  
<Ursinha> lamont, hi, we have a problem with ubuntu-br.org DNS, since 31 Dec
  
<Ursinha> lamont, there’s an open RT for that, #16281
  
<lamont> Ursinha: I saw the ticket, I’d expect to see some action this week on that.  I don’t directly have anyway to fix the issue myself, and those who do are all on bank holiday today (UK)
  
<Ursinha> ah, but thanks for the heads up lamont
  
<lamont> yeah – I wish I could say “fixed”

Dia 4 de janeiro:
  
<licio> hey guys
  
<licio> does anyone have a update for this ticket 16281? * agy has a look
  
<licio> looks like the dns*.noris.net are not answering for ubuntu-br.org :/
  
<agy> licio: yes. we’ve already contacted them, but i’ll try follow up
  
<licio> agy, great, so it on their hands now
  
<licio> agy, thanks for helping 😉
  
<agy> licio: np, sorry i couldn’t be more help at the moment

Nesse meio tempo, contatos pela RT foram feitos. Nada resolvido.

Dia 10 de janeiro:
  
<Ursinha> hi all
  
<Ursinha> ubuntu-br DNS isn’t working since last days of Dec. last year, this makes impossible to access our wiki or pages. RT is #16268
  
<Ursinha> this is really critical for us
  
<jpds> Ursinha: Email sent.
  
<Ursinha> jpds, thank you very much

Um email é enviado para os responsáveis pelos servidores.

Dia 11 de janeiro:
  
<Ursinha> jpds, hi… is there anything I could do to help with the ubuntu-br.org dns problem? It’s been down for 14 days and community is doing more and more pressure every day… and they’re not wrong: we just cannot work with translations and docs while our wiki is unavailable

Numa conversa em pvt, Ursinha foi informada que um time de pessoas da comunidade é o responsável pela maioria dos domínios ubuntu-$CC.org, e que estes são aqueles que resolverão nosso problema. Essa infraestrutura portanto não está sob os cuidados da Canonical, mas desse time. O contato com eles já foi feito ontem por email, e hoje novamente por IRC. Continuaremos fazendo contatos diários até que o problema seja resolvido. Estamos procurando uma instancia maior a quem possamos recorrer nestes casos, considerando que ficarmos sem acesso ao wiki é extremamente prejudicial para vários times de trabalho do Ubuntu-BR.

Consideramos essa situação séria e uma falta de respeito com todos os usuários. Estamos trabalhando pra que a situação seja normalizada e possamos finalmente começar os trabalhos do ano de 2011.

É possível, ainda que de forma alternativa usar o domínio ubuntubrasil.org que tem a entrada para o planeta.ubuntubrasil.org, mas não tem do wiki.

 [1]: http://andregondim.eti.br/2011/01/ubuntu-br-org-fora/