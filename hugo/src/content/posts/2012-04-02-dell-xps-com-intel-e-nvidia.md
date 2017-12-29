---
title: Dell XPS com Intel e Nvidia
author: Ivan Brasil Fuzzer
type: post
date: 2012-04-02T16:30:40+00:00
url: /dell-xps-com-intel-e-nvidia/
categories:
  - Ubuntu
tags:
  - bumblebee
  - hibrida
  - intel
  - Linux
  - nvidia
  - optimus
  - Ubuntu

---
<p style="text-align: center;">
  <a href="http://www.ubuntero.com.br/wp-content/uploads/2012/04/images.jpeg"><img class="alignnone size-full wp-image-3427" title="images" src="http://www.ubuntero.com.br/wp-content/uploads/2012/04/images.jpeg" alt="" width="193" height="261" /></a>
</p>

Usuários de notebooks com placas de vídeo híbridas Intel e Nvidia tem enfrentado graves problemas referentes a má utilização do hardware devido a baixa qualidade dos drivers disponíveis para Linux. Além de a mudança entre as placas não ser feita, os usuários sofrem também com o superaquecimento de seus equipamentos, nem preciso dizer que isto reduz a vida útil do computador e das baterias.

Para resolver este problema, em um notebook Dell XPS os seguintes passos resolveram:

Instalar a última versão dos drivers de vídeo. Abra o terminal pressionando Ctrl+Alt+t e digite os seguintes comandos:

<pre class="brush:shell">sudo add-apt-repository ppa:ubuntu-x-swat/x-updates
sudo apt-get update
sudo apt-get upgrade</pre>

Agora ative o gerenciamento de energia.

<pre class="brush:shell">sudo gedit /etc/default/grub</pre>

Procure a linha:

<pre class="brush:shell">GRUB_CMDLINE_LINUX_DEFAULT=”quiet splash"</pre>

E substitua pela seguinte:

<pre class="brush:shell">GRUB_CMDLINE_LINUX_DEFAULT=”quiet splash pcie_aspm=force”</pre>

Atualize o grub para que as mudanças passem a valer:

<pre class="brush:shell">sudo update-grub</pre>

Instale e configure o bumblebee:

<pre class="brush:shell">sudo add-apt-repository ppa:bumblebee/stable
sudo apt-get update
sudo apt-get install bumblebee
sudo apt-get install acpi-call-tools</pre>

Depois de instalar, você precisa adicionar você mesmo ao bumblebee. Substitua o &#8220;seuusuario&#8221; para o usuário que usa para entrar no sistema.

<pre class="brush:shell">sudo usermod -a -G bumblebee seuusuario</pre>

Abra o arquivo bumblebee.conf

<pre class="brush:shell">sudo gedit /etc/bumblebee/bumblebee.conf</pre>

Procure pelas duas linhas abaixo e tenha certeza de que no final está com Y marcado

<pre class="brush:shell">STOP_SERVICE_ON_EXIT=Y
ENABLE_POWER_MANAGEMENT=Y</pre>

Abra o arquivo xorg.conf.nvidia

<pre class="brush:shell">sudo gedit /etc/bumblebee/xorg.conf.nvidia</pre>

Tenha certeza de que se parece com isto:

<pre class="brush:shell">Section "ServerLayout"
Identifier "Layout0" **YOUR'S MAYBE DIFFERENT DO NOT CHANGE**
Option "AutoAddDevices" "false"
EndSection
Section "Files"
ModulePath "/usr/lib/nvidia-current/xorg,/usr/lib/xorg/modules"
EndSection

Section "Device"
Identifier "Device1" **YOUR'S MAYBE DIFFERENT DO NOT CHANGE**
Driver "nvidia"
VendorName "NVIDIA Corporation"
BusID "01:00:0" **YOUR'S MAYBE DIFFERENT DO NOT CHANGE**
Option "NoLogo" "true"
Option "UseEDID" "false"
Option "ConnectedMonitor" "DFP-0" **YOUR'S MAYBE DIFFERENT DO NOT CHANGE**
EndSection</pre>

Agora você terá que encontrar o comando &#8220;call on&#8221; e &#8220;call off&#8221; corretos para a sua placa. Utilize este site(<http://hybrid-graphics-linux.tuxfamily.org/index.php?title=ACPI_calls>) para encontrar o seu. No exemplo abaixo vamos utilizar um computador Dell L502X com uma placa GT540M.

Crie o arquivo cardoff com o segundo comando:

<pre class="brush:shell">sudo gedit /etc/bumblebee/cardoff</pre>

Copie os dados que coletou no site acima que no nosso caso é:

<pre class="brush:shell">\_SB.PCI0.PEG0.PEGP._DSM {0xF8,0xD8,0x86,0xA4,0xDA,0x0B,0x1B,0x47,0xA7,0x2B,0x60,0x42,0xA6,0xB5,0xBE,0xE0} 0x100 0x1A {0x1,0x0,0x0,0x3}
\_SB.PCI0.PEG0.PEGP._PS3</pre>

Crie o arquivo cardon co o seguinte comando:

<pre class="brush:shell">sudo gedit /etc/bumblebee/cardon</pre>

Copie os dados que coletou no site que no nosso caso é:

<pre class="brush:shell">\_SB.PCI0.PEG0.PEGP._PS0</pre>

<p class="brush:shell">
  Agora seu computador estará configurado para o &#8220;Optimus&#8221;. Quando quiser abrir um programa usando a placa de vídeo Nvidia, utilize o comando do programa com a palavra optirun na frente como no exemplo onde abrimos o gedit utilizando a placa de vídeo Nvidia.
</p>

<pre class="brush:shell">optirun gedit</pre>

<p class="brush:shell">
  <strong>Este artigo foi enviado para a lista de usuários de software livre <a href="http://tchelinux.org/site/doku.php">Tchelinux</a> e teve sua publicação autorizada por André Mazzoti Moreira.</strong>
</p>