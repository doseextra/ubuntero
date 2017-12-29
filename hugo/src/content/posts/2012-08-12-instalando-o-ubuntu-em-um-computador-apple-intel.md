---
title: Instalando o Ubuntu em um computador Apple Intel
author: Ivan Brasil Fuzzer
type: post
date: 2012-08-12T20:39:23+00:00
url: /instalando-o-ubuntu-em-um-computador-apple-intel/
categories:
  - Ubuntu
tags:
  - Linux
  - mac
  - Ubuntu

---
<p style="text-align: center;">
  <a href="http://www.ubuntero.com.br/wp-content/uploads/2012/08/ubuntu-no-mac.png"><img class="size-thumbnail wp-image-3881 alignnone" title="ubuntu no mac" src="http://www.ubuntero.com.br/wp-content/uploads/2012/08/ubuntu-no-mac-150x112.png" alt="" width="150" height="112" /></a>
</p>

Tendo como inspiração a façanha do Andrei durante o FISL, o qual instalou paralelamente ao MacOS o Ubuntu, resolvi também realizar o processo.

Como a preguiça de ver como que funciona o rFit, baixa-lo e instala-lo era mais forte, resolvi fazer a instalação usando apenas o CD do Ubuntu 12.04 LTS 32bits.

### Implementação

Depois desta breve introdução, iniciei o iMac, que vem com o MacOSX Leopard por padrão, e particionei o disco usando a ferramenta nativa BootCamp, como se fosse instalar paralelamente no disco o Windows. A ferramenta é bastante intuitiva e ao final do processo pediu para inserir o CD de instalação do Windows e reiniciar o iMac. Foi neste ponto que inseri o CD do Ubuntu no lugar do CD do Windows na maior cara de pau.

Vale lembrar que desde que a Apple abandonou a plataforma PowerPC em 2005 em prol dos processadores Intel, a mesma utiliza como gerenciamento de boot uma interpretação própria do sistema EFI, que não é completamente compatível com o atual UEFI (Sim, o polêmico sistema de boot que será usado no Windows 8). Isto significa que para rodar sistemas operacionais diferentes não basta ser compatível com o UEFI e portanto é necessário utilizar a antiga BIOS. E é neste ponto que o próprio MacOSX, através do BootCamp, emula um sistema de BIOS, permitindo assim a utilização de outros sistemas operacionais, no caso o Ubuntu.

Ao iniciar o iMac com o CD do Ubuntu (para selecionar a opção de boot no Mac tem que segurar a tecla alt pressionada durante a inicialização), logo após o processo de particionamento do disco, ao iniciar a instalação do Ubuntu escolhi o a opção avançada de particionamento de disco, aonde o gerenciador de partições me mostrou a existência de uma partição FAT32 criada pelo BootCamp.

Esta partição FAT32 foi excluída e em seu lugar foi criada uma partição EXT4 com o ponto de montagem raiz (também conhecido como /). Não criei partições para outros pontos de montagem como o /home e nem de SWAP, mas isto foi apenas uma escolha pessoal (lembrem-se, a instalação foi no modo preguiça).

Seguindo a instalação foi instalado o GRUB como gerenciador de boot (como de praxe) e em sua conclusão a maquina foi reiniciada.

Depois de reiniciar o iMac na opção &#8220;Windows&#8221;, surge na tela o grub com o Ubuntu pronto para rer iniciado.

Logo após a instalação segui um tutorial da canonical para configurar a câmera iSight e feito isto tinha um iMac com Ubuntu 12.04 LTS instalado e funcionando plenamente.

Conforme o quadro a seguir podemos ver o hardware detectado, e sim, mais uma maquina com vídeo ATI, que para a minha alegria funciona surpreendentemente bem.

### Lista de hardware detectado

<pre class="brush:plain">dtumelero@UbuntuMac:~$ uname -a 
Linux UbuntuMac 3.2.0-27-generic-pae #43-Ubuntu SMP Fri Jul 6 15:06:05 UTC 2012 i686 i686 i386 GNU/Linux 
dtumelero@UbuntuMac:~$ lspci 
00:00.0 Host bridge: Intel Corporation Mobile 945GM/PM/GMS, 943/940GML and 945GT Express Memory Controller Hub (rev 03) 
00:01.0 PCI bridge: Intel Corporation Mobile 945GM/PM/GMS, 943/940GML and 945GT Express PCI Express Root Port (rev 03) 
00:07.0 Performance counters: Intel Corporation Device 27a3 (rev 03) 
00:1b.0 Audio device: Intel Corporation N10/ICH 7 Family High Definition Audio Controller (rev 02) 
00:1c.0 PCI bridge: Intel Corporation N10/ICH 7 Family PCI Express Port 1 (rev 02) 
00:1c.1 PCI bridge: Intel Corporation N10/ICH 7 Family PCI Express Port 2 (rev 02) 
00:1d.0 USB controller: Intel Corporation N10/ICH 7 Family USB UHCI Controller #1 (rev 02) 
00:1d.1 USB controller: Intel Corporation N10/ICH 7 Family USB UHCI Controller #2 (rev 02) 
00:1d.2 USB controller: Intel Corporation N10/ICH 7 Family USB UHCI Controller #3 (rev 02) 
00:1d.3 USB controller: Intel Corporation N10/ICH 7 Family USB UHCI Controller #4 (rev 02) 
00:1d.7 USB controller: Intel Corporation N10/ICH 7 Family USB2 EHCI Controller (rev 02) 
00:1e.0 PCI bridge: Intel Corporation 82801 Mobile PCI Bridge (rev e2) 
00:1f.0 ISA bridge: Intel Corporation 82801GBM (ICH7-M) LPC Interface Bridge (rev 02) 
00:1f.1 IDE interface: Intel Corporation 82801G (ICH7 Family) IDE Controller (rev 02) 
00:1f.2 IDE interface: Intel Corporation 82801GBM/GHM (ICH7-M Family) SATA Controller [IDE mode] (rev 02) 
00:1f.3 SMBus: Intel Corporation N10/ICH 7 Family SMBus Controller (rev 02) 
01:00.0 VGA compatible controller: Advanced Micro Devices [AMD] nee ATI M56P [Radeon Mobility X1600] 
02:00.0 Ethernet controller: Marvell Technology Group Ltd. 88E8053 PCI-E Gigabit Ethernet Controller (rev 22) 
03:00.0 Network controller: Broadcom Corporation BCM4311 802.11a/b/g (rev 01) 
04:03.0 FireWire (IEEE 1394): LSI Corporation FW322/323 (rev 61) 
dtumelero@UbuntuMac:~$ lsusb 
Bus 001 Device 001: ID 1d6b:0002 Linux Foundation 2.0 root hub 
Bus 002 Device 001: ID 1d6b:0001 Linux Foundation 1.1 root hub 
Bus 003 Device 001: ID 1d6b:0001 Linux Foundation 1.1 root hub 
Bus 004 Device 001: ID 1d6b:0001 Linux Foundation 1.1 root hub 
Bus 005 Device 001: ID 1d6b:0001 Linux Foundation 1.1 root hub 
Bus 002 Device 002: ID 05ac:1003 Apple, Inc. Hub in Pro Keyboard [Mitsumi, A1048] 
Bus 005 Device 004: ID 05ac:8206 Apple, Inc. Bluetooth HCI 
Bus 005 Device 003: ID 05ac:8240 Apple, Inc. IR Receiver [built-in] 
Bus 002 Device 003: ID 15d9:0a33 Trust International B.V. Optical Mouse 
Bus 002 Device 004: ID 05ac:020b Apple, Inc. Pro Keyboard [Mitsumi, A1048/US layout] 
Bus 001 Device 007: ID 05ac:8501 Apple, Inc. Built-in iSight [Micron] 
dtumelero@UbuntuMac:~$</pre>

**Fonte: <https://help.ubuntu.com/community/MactelSupportTeam/AppleiSight>**

**Artigo enviado por Diego Tumelero**