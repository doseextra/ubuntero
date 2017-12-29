---
title: Modem ONDA MSA190UP no Ubuntu Natty 11.04
author: Ivan Brasil Fuzzer
type: post
date: 2011-06-29T12:14:19+00:00
url: /modem-onda-msa190up-no-ubuntu-natty-11-04/
categories:
  - Ubuntu
tags:
  - 3g
  - Linux
  - modem
  - modem 3g
  - msa190up
  - onda
  - tim
  - Ubuntu
  - vivo

---
Eventualmente me aparecem com estes modems 3G ching-ling que nossas operadoras adoram vender. Este ditod modems sempre dão algum trabalho para quem usa Linux, e o problema é a fabricação porca que inventaram para eles. Geralmente eles são ao mesmo tempo Pendrives e Modems, sendo que a identificação do hardware é a mesma para os dois dispositivos que estão em um só. Nem preciso dizer que isso é uma grande gambiarra e que só podia gerar problemas.

O último que me apareceu foi este ONDA MSA190UP que, embora reconhecido pelo sistema, não conectava e logicamente não navegava. Depois de algumas tentativas triviais recorri a internet e encontrei uma postagem do blog [Webyts][1] que resolveu o problema.

A primeira coisa a fazer é criar um arquivo “/etc/usb\_modeswitch.d/19d2:2000:uPr=ONDA\_WCDMA\_Technologies\_MSM”. Para isso abra o gedit pressionando as teclas ALT+F2 e digitando o comando &#8220;gksu gedit /etc/usb\_modeswitch.d/19d2:2000:uPr=ONDA\_WCDMA\_Technologies\_MSM&#8221;.

No arquivo aberto copie o conteúdo abaixo, cole e salve o arquivo.

<pre class="brush:plain">###################
# ZTE devices
# Onda MSA190UP

DefaultVendor= 0x19d2
DefaultProduct= 0x2000

TargetVendor= 0x19d2
TargetProductList="0001,0002,0015,0016,0017,0031,0037,0052,0055,0063,0064,0091,0108,0128,0091,0092"

MessageContent="55534243123456782000000080000c85010101180101010101000000000000"</pre>

O segundo passo é criar o arquivo “/etc/udev/rules.d/77-mm-zte-port-types.rules” da mesma maneira que foi feita acima apenas trocando o arquivo. Copie o texto abaixo, cole e salve o arquivo.

<pre class="brush:plain">ACTION!="add|change", GOTO="mm_zte_port_types_end"
SUBSYSTEM!="tty", GOTO="mm_zte_port_types_end"

SUBSYSTEMS=="usb", ATTRS{idVendor}=="19d2", GOTO="mm_zte_port_types_vendorcheck"
GOTO="mm_zte_port_types_end"

LABEL="mm_zte_port_types_vendorcheck"
SUBSYSTEMS=="usb", ATTRS{bInterfaceNumber}=="?*", ENV{.MM_USBIFNUM}="$attr{bInterfaceNumber}"

ATTRS{idProduct}=="0091", ENV{.MM_USBIFNUM}=="04", ENV{ID_MM_ZTE_PORT_TYPE_MODEM}="1"
ATTRS{idProduct}=="0091", ENV{.MM_USBIFNUM}=="01", ENV{ID_MM_ZTE_PORT_TYPE_AUX}="1"

LABEL="mm_zte_port_types_end"</pre>

Depois disto, conecte o modem no computador e clique no menu de redes e vá em Editar conexões.

<p style="text-align: center;">
  <a href="http://www.ubuntero.com.br/wp-content/uploads/2011/06/menu-redes.png"><img class="alignnone size-thumbnail wp-image-2379" title="menu redes" src="http://www.ubuntero.com.br/wp-content/uploads/2011/06/menu-redes-110x150.png" alt="menu redes" width="110" height="150" /></a>
</p>

Selecione a aba &#8220;Banda larga móvel&#8221; e clique em adicionar.

<p style="text-align: center;">
  <a href="http://www.ubuntero.com.br/wp-content/uploads/2011/06/redes.png"><img class="alignnone size-thumbnail wp-image-2380" title="redes" src="http://www.ubuntero.com.br/wp-content/uploads/2011/06/redes-150x104.png" alt="redes" width="150" height="104" /></a> <a href="http://www.ubuntero.com.br/wp-content/uploads/2011/06/banda-larga.png"><img class="alignnone size-thumbnail wp-image-2381" title="banda larga" src="http://www.ubuntero.com.br/wp-content/uploads/2011/06/banda-larga-150x105.png" alt="aba banda larga" width="150" height="105" /></a>
</p>

<p style="text-align: left;">
  Siga os passos das imagens abaixo tendo atenção de selecionar a sua operadora de conexão 3G.
</p>

<p style="text-align: center;">
  <a href="http://www.ubuntero.com.br/wp-content/uploads/2011/06/2.png"><img class="alignnone size-thumbnail wp-image-2382" title="configuração 3G" src="http://www.ubuntero.com.br/wp-content/uploads/2011/06/2-150x113.png" alt="configuração 3G" width="150" height="113" /></a> <a href="http://www.ubuntero.com.br/wp-content/uploads/2011/06/3.png"><img class="alignnone size-thumbnail wp-image-2383" title="configuração 3G" src="http://www.ubuntero.com.br/wp-content/uploads/2011/06/3-150x113.png" alt="configuração 3G" width="150" height="113" /></a> <a href="http://www.ubuntero.com.br/wp-content/uploads/2011/06/4.png"><img class="alignnone size-thumbnail wp-image-2384" title="configuração 3G" src="http://www.ubuntero.com.br/wp-content/uploads/2011/06/4-150x112.png" alt="configuração 3G" width="150" height="112" /></a> <a href="http://www.ubuntero.com.br/wp-content/uploads/2011/06/5.png"><img class="alignnone size-thumbnail wp-image-2385" title="configuração 3G" src="http://www.ubuntero.com.br/wp-content/uploads/2011/06/5-150x112.png" alt="configuração 3G" width="150" height="112" /></a>
</p>

<p style="text-align: left;">
  Espero que funcione para todos, eu testei com chip da VIVO e TIM.
</p>

<p style="text-align: left;">
  Gostaria de lembrar que a <a href="http://t.co/w29sbun">Vakinha</a> que vai sortear uma <a href="http://shop.canonical.com/product_info.php?products_id=828">caneca Oficial do Ubuntu</a> ainda está rolando. Basta doar o mínimo de R$ 5,00 para participar do sorteio. O endereço da <a href="http://t.co/w29sbun">vakinha</a> é <a href="http://t.co/w29sbun">http://t.co/w29sbun</a>
</p>

 [1]: http://webyts.com/geral/configurando-modem-onda-msa190up-no-ubuntu-natty-11-04/