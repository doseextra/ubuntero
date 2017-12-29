---
title: Máquinas virtuais
author: Ivan Brasil Fuzzer
type: post
date: 2007-10-11T18:16:45+00:00
url: /maquinas-virtuais/
categories:
  - Uncategorized

---
Enquanto esperamos a chegada do novo Ubuntu, versão 7.10, para dar continuidade aos artigos sobre migração, vou falar um pouco sobre máquinas virtuais e sobre o programa utilizado para executar e retirar as telas mostradas nos artigos.

Começando pelo básico, o que é uma máquina virtual? Segundo a definição da wikipedia.org, &#8220;Uma máquina virtual (Virtual Machine – VM) pode ser definida como “uma duplicata eficiente e isolada de uma máquina real”.&#8221;. Traduzindo, uma máquina virtual é uma simulação, por software, de uma máquina real.

Estas máquinas virtuais já estão presentes no dia-a-dia de todos nós. Quem nunca usou um emulador de super nintendo, mega drive ou atari? Estes são os exemplos mais clássicos de máquinas virtuais e que muitas pessoas nem imaginam que estão utilizando.

Outro exemplo de máquina virtual é o Java. Diferente das outras máquinas virtuais citadas acima, o Java é uma máquina virtual específica para uma linguagem e não para uma máquina. Confuso mas não tanto, no caso do Java não existe uma máquina física que faça o mesmo, então ela não é uma emulação mas uma implementação do conceito.

Algumas das principais utilizações de máquinas virtuais são:

  * Desktop: Para testar vários sistemas operacionais sem precisar formatar o computador ou fazer várias partições são uma ótima escolha. Além de testar sistemas operacionais, podemos testar programas sem arriscar danificar nossos computadores com a infinidade de vírus ou spywares que podem ser instalados juntamente com programas no caso do Windows.
  * Servidores: Com um único computador físico, podemos ter vários máquinas virtuais rodando como se tivéssemos vários servidores para fins diferentes. Podemos fazer uma máquina virtual para servidor web, outra para servidor de emails e outra para servidor de arquivos. Podemos ainda criar máquinas para teste de novos serviços para disponibilizar para os funcionários e colaboradores sem a necessidade de ter uma máquina física para estes testes.

Das máquinas virtuais disponíveis no mercado já utilizei duas, VMWare e VirtualBox. Meu primeiro contato com este tipo de software foi com o VMWare.

O VMWare é uma solução proprietária e de código fechado. Acredito que seja a solução mais conhecida no mercado corporativo. Nunca tive nenhuma dificuldade em instalar e utilizar esta solução mas também nunca tive dinheiro sobrando para comprar uma licença, utilizando assim as versões de teste disponibilizadas no site do desenvolvedor. Existe uma verão completa e free, VmWare ESX Server, mas nunca utilizei.

Uma solução de código aberto é o VirtualBox. Como nunca fiz a utilização deste tipo de solução em servidores, o VirtualBox sempre atendeu as minhas necessidades de virtualização. Para os artigos de migração do Windows para o Linux é esta máquina virtual que utilizo. A interface é parecida com o VMWare, o que ajuda quem está tentando fazer a migração.

**PS: Nos próximos artigos sobre migração estarei utilizando a versão 7.10 Gutsy e estarei explicando o que mudou nos artigos anteriores.**