---
title: Como imprimir no SIAFI, utilizando UBUNTU.
author: Ivan Brasil Fuzzer
type: post
date: 2011-02-27T15:36:03+00:00
url: /como-imprimir-no-siafi-utilizando-ubuntu/
bb-custom-tags:
  - SIAFI, UBUNTU, impressao, gtklp
  - SIAFI, UBUNTU, impressao, gtklp
  - SIAFI, UBUNTU, impressao, gtklp
  - SIAFI, UBUNTU, impressao, gtklp
  - SIAFI, UBUNTU, impressao, gtklp
  - SIAFI, UBUNTU, impressao, gtklp
  - SIAFI, UBUNTU, impressao, gtklp
  - SIAFI, UBUNTU, impressao, gtklp
  - SIAFI, UBUNTU, impressao, gtklp
  - SIAFI, UBUNTU, impressao, gtklp
  - SIAFI, UBUNTU, impressao, gtklp
  - SIAFI, UBUNTU, impressao, gtklp
  - SIAFI, UBUNTU, impressao, gtklp
  - SIAFI, UBUNTU, impressao, gtklp
  - SIAFI, UBUNTU, impressao, gtklp
  - SIAFI, UBUNTU, impressao, gtklp
  - SIAFI, UBUNTU, impressao, gtklp
  - SIAFI, UBUNTU, impressao, gtklp
  - SIAFI, UBUNTU, impressao, gtklp
  - SIAFI, UBUNTU, impressao, gtklp
  - SIAFI, UBUNTU, impressao, gtklp
  - SIAFI, UBUNTU, impressao, gtklp
  - SIAFI, UBUNTU, impressao, gtklp
  - SIAFI, UBUNTU, impressao, gtklp
  - SIAFI, UBUNTU, impressao, gtklp
  - SIAFI, UBUNTU, impressao, gtklp
  - SIAFI, UBUNTU, impressao, gtklp
  - SIAFI, UBUNTU, impressao, gtklp
  - SIAFI, UBUNTU, impressao, gtklp
  - SIAFI, UBUNTU, impressao, gtklp
  - SIAFI, UBUNTU, impressao, gtklp
  - SIAFI, UBUNTU, impressao, gtklp
  - SIAFI, UBUNTU, impressao, gtklp
  - SIAFI, UBUNTU, impressao, gtklp
  - SIAFI, UBUNTU, impressao, gtklp
  - SIAFI, UBUNTU, impressao, gtklp
  - SIAFI, UBUNTU, impressao, gtklp
  - SIAFI, UBUNTU, impressao, gtklp
  - SIAFI, UBUNTU, impressao, gtklp
  - SIAFI, UBUNTU, impressao, gtklp
  - SIAFI, UBUNTU, impressao, gtklp
  - SIAFI, UBUNTU, impressao, gtklp
  - SIAFI, UBUNTU, impressao, gtklp
  - SIAFI, UBUNTU, impressao, gtklp
  - SIAFI, UBUNTU, impressao, gtklp
  - SIAFI, UBUNTU, impressao, gtklp
  - SIAFI, UBUNTU, impressao, gtklp
  - SIAFI, UBUNTU, impressao, gtklp
  - SIAFI, UBUNTU, impressao, gtklp
categories:
  - Ubuntu
tags:
  - gtklp
  - Impressao
  - SIAFI

---
O **SIAFI** é o Sistema Integrado de Administração Financeira do Governo Federal, um sistema onde pode-se acompanhar os gastos públicos, quanto de crédito que tem um órgão por exemplo, quanto que custou tal licitação, o que foi comprado. Esse sistema poderoso no primeiro momento não imprime de forma natural no Ubuntu, abaixo a dica:

&nbsp;

Instalar o gtklp

sudo apt-get install gtklp

Depois criar o arquivo hodprint , pode-se usar outro editor de texto, mas prefiro o nano.

sudo nano /usr/bin/ , irá abrir o editor coloque o seguinte conteúdo:

#!/bin/bash
  
gtklp $1
  
rm -f $1

se estiver utilizando o nano dê um ctrl+o coloque o nome hodprint e ctrl+x para sair.
  
Depois disso mude a permissão
  
sudo chmod 755 hodprint
  
Após isso entre no SIAFI, entre na sessão da impressora, quando aparecer a tela que mostra a conectividade da impressora selecione &#8220;Arquivo>>Configuração de impressora&#8221; e selecione o botão &#8220;Reconfigurar todos&#8221;, o conteúdo caminho deverá ter : &#8220;**/tmp/hodprint.* | hodprint $<**&#8221; deixe a configuração como na figura abaixo:

![Tela Siafi][1]

Assim sua impressora padrão estará configurada para imprimir, mas ainda não imprimirá a tela do SIAFI, para configurar a tela faça o seguinte:
  
Entre no SIAFI, em &#8220;Arquivo&#8221; e &#8220;Configuração de Tela&#8221; , na opção &#8220;Utilizar modo impressão Java&#8221; marcar como &#8220;não&#8221; e clique em &#8220;OK&#8221;, depois clique em &#8220;Arquivo&#8221; novamente e selecione &#8220;Configuração de impressora&#8221; e deixe como no procedimento feito acima. Seguindo esses passos estará configurado e imprimindo no SIAFI.

**Autor: João Pedro Bernardo Fontoura**

 [1]: http://4.bp.blogspot.com/_bmR-2d1IkNY/TO5kWAXdWJI/AAAAAAAAAAQ/VLF2Xxn15hA/s400/tela.conf.impressora.jpg