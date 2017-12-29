---
title: Mudanças na resolução DNS no Ubuntu 12.04
author: Ivan Brasil Fuzzer
type: post
date: 2012-02-27T17:36:06+00:00
url: /mudancas-na-resolucao-dns-no-ubuntu-12-04/
categories:
  - Ubuntu
tags:
  - 12.04
  - dns
  - dnsmasq
  - Linux
  - Ubuntu

---
<p style="text-align: center;">
  <img class="alignnone size-medium wp-image-3306" title="DNS" src="http://www.ubuntero.com.br/wp-content/uploads/2012/02/DNS-300x240.jpg" alt="" width="300" height="240" />
</p>

Se você pretende migrar pra o Ubuntu 12.04 e costuma fazer configurações manuais diretamente no arquivo resolv.conf esta notícia é para você.

As mudanças são resultado da implementação do [foundations-p-dns-resolving][1] e as duas maiores mudanças são:

## Mudança no gerenciamento do resolvconf

O resolvconf é um conjunto de scripts que gerenciam a resolução DNS. A diferença mais notável será que toda a configuração feita diretamente no arquivo resolv.conf será perdida sempre que os scripts do resolvconf seja invocado. Ao invés de usar o arquivo, o usuário deve fazer alteração através de ferramentas como o gerenciador de redes ou então outros arquivos segmentados.

Mas o melhor ainda é dar uma olhada no manpage do resolvconf.

## Usar dnsmasq como &#8220;resolvedor&#8221; local

Esta é a segunda grande mudança. Nas instalações Desktop, o servidor DNS passará a ser o endereço 127.0.0.1 que apontará para um servidor dnsmasq.

Isto foi feito pensando, entre outras coisas, em ajudar a melhorar o tratamento de DNS em redes VPN, principalmente em caso de splits(quedas).

Em caso de quedas, o gerenciador de DNS poderá enviar requisições para vários servidores DNS sem que o usuário fique sabendo disso pois as suas requisições sempre irão para o mesmo endereço local 127.0.0.1.

Para saber mais detalhes sobre esta mudança, recomendo visitar [este site][2](em inglês).

 [1]: https://blueprints.launchpad.net/ubuntu/+spec/foundations-p-dns-resolving
 [2]: http://www.stgraber.org/2012/02/24/dns-in-ubuntu-12-04/