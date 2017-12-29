---
title: VirtualBox utilizando “Interface do Hospedeiro”
author: Ivan Brasil Fuzzer
type: post
date: 2008-02-07T17:50:11+00:00
url: /virtualbox-utilizando-interface-do-hospedeiro/
categories:
  - Ubuntu

---
<img src='http://www.ubuntero.com.br/wp-content/uploads/2008/02/logo_vbox.png' alt='logo_vbox.png' align="left" />Desde que comecei a utilizar o VirtualBox como solução doméstica para virtualização tenho tentado fazer minhas máquinas virtuais se comunicarem com os demais computadores da rede, até hoje não tinha tido sucesso. Sempre tentei fazer a coisa da maneira mais difícil possível. Tentando sem ler documentação não consegui chegar nem perto da solução desejada. Ontem em uma inspirada madrugada resolvi ler a documantação do VirtualBox e lá estava um capítulo explicando como fazer isto no Ubuntu e outras distribuições Linux.

Vamos aos passos para fazer tudo funcionar.

A primeira coisa a fazer é instalar o pacote bridge-utils

$ sudo apt-get install bridge-utils 

Depois você deve adicionar uma entrada no arquivo /etc/network/interfaces que descreva a &#8220;ponte&#8221;. Abaixo um exemplo de uma ponte chamada br0.

auto br0
  
iface br0 inet dhcp
      
bridge_ports eth0 

No exemplo temos uma rede com endereçamento IP dinâmico mas nada impede que você defina um endereço IP fixo.

Reinicie os serviços de rede com o seguinte comando:

$ sudo /etc/init.d/networking restart 

Com isso a ponte será iniciada mesmo reiniciando o sistema.

Agora siga os seguintes passos que são específicos para sistemas Ubuntu e Debian:

$ sudo apt-get install uml-utilities 

Para que o VirtualBox tenha acesso a interface, o usuário que rodará a máquina virtual deve ser adicionado ao grupo uml-net. Execute o comando abaixo substituindo <user> pelo usuário que executará a máquina virtual:

$ sudo gpasswd -a <user> uml-net 

Será necessário logar novamente para que as permissões sejam aplicadas.

Agora você deve descrever uma entrada TAP no arquivo /etc/network/interfaces como abaixo:

auto tap0
  
iface tap0 inet manual
      
up ifconfig $IFACE 0.0.0.0 up
      
down ifconfig $IFACE down
      
tunctl_user <user> 

Novamente substitua <user> pelo usuário que executará a máquina virtual. Altere também a linha onde está escrito &#8220;bridge\_ports eth0&#8221; para que fique &#8220;bridge\_ports eth0 tap0&#8221; sem as aspas.

Reinicie os serviços de rede e a mágica estará feita.

Como esta empreitada foi realizada durante a madrugada, podem haver algumas falhas neste tutorial. Não exite em reportar meus esquecimentos nos comentários.

Querendo conhecer mais um pouco sobre o VirtualBox, temos um bom tutorial no blog do [Leandro Santiago][1].

 [1]: http://leandrosan.wordpress.com/2008/02/09/utilizando-a-caixa-virtual-a-seu-favor/