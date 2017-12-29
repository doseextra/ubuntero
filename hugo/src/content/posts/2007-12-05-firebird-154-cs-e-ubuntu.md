---
title: Firebird 1.5 CS e Ubuntu
author: Ivan Brasil Fuzzer
type: post
date: 2007-12-06T02:06:52+00:00
url: /firebird-154-cs-e-ubuntu/
categories:
  - Geral
  - Ubuntu

---
**Artigo alterado: versão atual do firebird é 1.5.5, então o artigo teve esta informação atualizada.**

A alguns dias atras tive um grande problema com os pacotes do SGBD Firebird 1.5 Classic Server disponíveis nos repositórios do Ubuntu. A instalação dos pacotes ocorria perfeitamente sem nenhuma mensagem de erro. Antes de instalar o Firebird, já tinha instalado o xinetd para que os processos fossem lançados da maneira correta. Os scripts eram eram gerados corretamente e o xinetd era iniciado, no entanto os processos do firebird não iniciavam.

Passei um dia inteiro encima deste problema até que consegui a ajuda de duas almas caridosas. Pedi a um amigo(Piccoli) se ele tinha alguma idéia e ele pediu ajuda a uma lista de discussão a qual ele participa e de lá veio a solução.

Meu salvador foi Eduardo Jedliczka que sugeriu o seguinte:

  * Baixar o pacote RPM do [site do Firebird][1]
  * apt-get install ssh xinetd libstdc++5 alien rpm
  * useradd firebird (com senha firebird)
  * alien firebirdcs-1.5.5.4926-1.i386.rpm &#8211;scripts
  * dpkg –i firebirdcs-1.5.5.4926-1.i386.deb
  * cd /opt/firebird/bin
  * ./CSrestoreRootRunUser.sh
  * ./changeDBAPassword.sh

Estes passos foram testados e funcionaram perfeitamente no servidor em questão.

Se vocês está se perguntando porque eu fazia questão de instalar a versão Classic Server, a versão Classic Server inicia um processo para cada conexão feita ao banco. Isto faz com que conexões demoradas não tomem o processador todo para si, repartindo tempos de processador com outras conexões, ao contrário da versão Super Server que tem um único processo que apesar de executar mais rápido, trava o processador até concluir a execução da conexão.

No caso do sistema desenvolvido pela empresa onde trabalho, existem alguns relatórios que são muito demorados e que ficam alguns minutos sendo processados. A versão Super Server tornaria o trabalho dos outros usuários um inferno(isso já foi testado). A maior vantagem do Super Server é a facilidade de instalação, o que não é mais problema depois deste &#8220;mini-manual&#8221;.

 [1]: http://www.firebirdsql.org/index.php?op=files&id=engine_155