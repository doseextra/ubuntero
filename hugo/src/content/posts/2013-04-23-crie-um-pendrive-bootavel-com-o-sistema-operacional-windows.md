---
title: Crie um pendrive bootável com o sistema operacional Windows
author: Ivan Brasil Fuzzer
type: post
date: 2013-04-23T11:00:54+00:00
url: /crie-um-pendrive-bootavel-com-o-sistema-operacional-windows/
burl:
  - http://ads.tt/2T26
  - http://ads.tt/2T26
  - http://ads.tt/2T26
  - http://ads.tt/2T26
  - http://ads.tt/2T26
  - http://ads.tt/2T26
  - http://ads.tt/2T26
  - http://ads.tt/2T26
  - http://ads.tt/2T26
  - http://ads.tt/2T26
  - http://ads.tt/2T26
  - http://ads.tt/2T26
  - http://ads.tt/2T26
  - http://ads.tt/2T26
  - http://ads.tt/2T26
  - http://ads.tt/2T26
  - http://ads.tt/2T26
  - http://ads.tt/2T26
  - http://ads.tt/2T26
  - http://ads.tt/2T26
  - http://ads.tt/2T26
  - http://ads.tt/2T26
  - http://ads.tt/2T26
  - http://ads.tt/2T26
  - http://ads.tt/2T26
  - http://ads.tt/2T26
  - http://ads.tt/2T26
  - http://ads.tt/2T26
categories:
  - Ubuntu
tags:
  - Linux
  - PPA
  - Ubuntu
  - Windows
  - WinUSB

---
Eu sei que muitos podem estar estranhando o título deste artigo, mas nada foi digitado errado. No mundo do software livre tem espaço para todos, até para técnicos que precisam instalar outros sistemas operacionais que não são software livre. Estes profissionais, muitas vezes, instalam software pirata, mas deixaremos isso para a consciência de cada um, nesse artigo vamos levar em conta que a cópia do sistema operacional é legal.

Utilizar CD/DVD já está fora de moda, é muito mais fácil ter um pendrive por perto na hora do aperto e você pode precisar instalar aquele outro sistema operacional em computadores que não tem drive de CD/DVD e seguindo a regra, com software livre pode-se fazer tudo, até **gerar um pendrive com um sistema operacional** que não é software livre.

Para esta tarefa vamos utilizar o **WinUSB** e para instalar siga estes passos (lembrando que não nos responsabilizamos pelo conteúdo do PPA):

Abra o terminal pressionando `Ctrl+Alt+T` e execute os seguintes comandos (só de sacanagem não vou mostrar como adicionar o PPA em modo gráfico):

<pre class="brush:shell">sudo add-apt-repository ppa:colingille/freshlight -y
sudo apt-get update 
sudo apt-get install winusb</pre>

Agora pressione e solte a tecla `Super` (também conhecida como tecla `Windows`) e digite `winusb` e pressione `Enter`.

<a href="http://www.ubuntero.com.br/wp-content/uploads/2013/04/winusb-1.png" rel="lightbox"><img class="size-thumbnail wp-image-5216 aligncenter" title="WinUSB - Screen 1" alt="WinUSB - Screen 1" src="http://www.ubuntero.com.br/wp-content/uploads/2013/04/winusb-1-113x150.png" width="113" height="150" /></a>

Este é o programa que lhe permitirá **criar pendrives &#8220;bootáveis&#8221; diretamente do seu Ubuntu**. Para usar é simples. Escolha se quer utilizar uma imagem ou um CD/DVD com o Windows, no caso da imagem é necessário indicar onde está a imagem e no caso de ser um CD/DVD, você deve especificar qual é o dispositivo onde o CD/DVD está inserido. Em _target device_ você escolhe o pendrive que será inutilizado, digo, agraciado com o instalador do Windows.

<a href="http://www.ubuntero.com.br/wp-content/uploads/2013/04/winusb-2.png" rel="lightbox"><img class="size-thumbnail wp-image-5217 aligncenter" title="WinUSB - Screen 2" alt="WinUSB - Screen 2" src="http://www.ubuntero.com.br/wp-content/uploads/2013/04/winusb-2-113x150.png" width="113" height="150" /></a>

Esta dica foi retirada do site <a href="http://sejalivre.org/winusb-ferramenta-para-criar-pendrive-bootavel-do-windows-no-ubuntu/" target="_blank" rel="nofollow">SejaLivre</a>