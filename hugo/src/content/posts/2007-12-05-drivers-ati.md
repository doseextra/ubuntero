---
title: Drivers ATI
author: Ivan Brasil Fuzzer
type: post
date: 2007-12-05T13:54:03+00:00
url: /drivers-ati/
categories:
  - Geral

---
Os resultados da liberação da especificação das placas de vídeo da ATI começam a dar seus primeiros frutos. Uma primeira versão do driver já está disponível. As funcionalidades básicas das placas foram implementadas mas ainda não temos aceleração 2D ou 3D.

As primeiras funcionalidades implementadas são:

  * Capacidade de gerenciar múltiplos monitores
  * Suporte para VGA, DVI, DMS-59 e laptop panels
  * Suporte a detecção de monitor hotplug, DDC, e reconfiguração dinâmica
  * Compatibilidade completa com RandR 1.2
  * Suporte a AtomBIOS para inicialização, tabelas de dados, etc
  * Suporte as mais novas proprietades do RandR 1.3
  * 

Infelizmente este driver está sendo escrito somente para os modelos mais novos da ATI e a minha Radeon 9600 Pro não está nesta lista.

Abaixo a lista das placas suportadas:

  * RV505: Radeon X1550, X1550 64bit
  * RV515: Radeon X1300, X1550, X1600; FireGL V3300, V3350
  * RV516: Radeon X1300, X1550, X1550 64-bit, X1600; FireMV 2250
  * R520: Radeon X1800; FireGL V5300, V7200, V7300, V7350
  * RV530: Radeon X1300 XT, X1600, X1600 Pro, X1650; FireGL V3400, V5200
  * RV535: Radeon X1300, X1650
  * RV550: Radeon X2300 HD
  * RV560: Radeon X1650
  * RV570: Radeon X1950, X1950 GT; FireGL V7400
  * R580: Radeon X1900, X1950; AMD Stream Processor
  * R600: Radeon HD 2900 GT/Pro/XT; FireGL V7600/V8600/V8650
  * RV610: Radeon HD 2350, HD 2400 Pro/XT, HD 2400 Pro AGP; FireGL V4000
  * V630: Radeon HD 2600 LE/Pro/XT, HD 2600 Pro/XT AGP; Gemini RV630; FireGL V3600/V5600
  * M52: Mobility Radeon X1300
  * M54: Mobility Radeon X1400; M54-GL
  * M56: Mobility Radeon X1600; Mobility FireGL V5200
  * M58: Mobility Radeon X1800, X1800 XT; Mobility FireGL V7100, V7200
  * M62: Mobility Radeon X1350
  * M64: Mobility Radeon X1450, X2300
  * M66: Mobility Radeon X1700, X1700 XT; FireGL V5250
  * M68: Mobility Radeon X1900
  * M71: Mobility Radeon HD 2300
  * M72: Mobility Radeon HD 2400; Radeon E2400
  * M74: Mobility Radeon HD 2400 XT
  * M76: Mobility Radeon HD 2600; (Gemini ATI) Mobility Radeon HD 2600 XT
  * RS690: Radeon X1200, X1250, X1270

Onde obter o driver? Você pode baixa o arquivo compactado no endereço <ftp://ftp.freedesktop.org/pub/individual/driver>. O nome do arquivo segue o padrão xf86-video-radeonhd-<versão>.tar.bz2.

Para instalar o driver, descompacte o arquivo baixado e execute o comando ./autogen.sh dentro do diretório onde o driver foi descompactado. Logo enseguida digite make e logo depois make install.

Quem utiliza o X.Org versão 7, ainda são necessários os seguintes comandos:

$ xmkmf -a
     
$ make EXTRA_INCLUDES=&#8221;-I/usr/include/xorg&#8221; all
     
$ make install 

Para finalizar digite estes comandos:

$ mkdir \_b && cd \_b
     
$ ../autogen.sh
     
$ make
     
$ make install 

Estas informações foram fornecidas pelo site <http://wiki.x.org/wiki/radeonhd> e não foram testadas pelo site Ubuntero.