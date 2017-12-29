---
title: Configurando Modem 3G Sony Ericsson MD300 no Ubuntu
author: Ivan Brasil Fuzzer
type: post
date: 2009-10-05T23:16:04+00:00
url: /configurando-modem-3g-sony-ericsson-md300-no-ubuntu/
categories:
  - Ubuntu

---
&nbsp;

<p style="margin-bottom: 0cm; text-align: left;">
  Obs: Essa dica serve para Conexões 3G Claro, variando na criação da conexão em caso de outra operadora.
</p>

<p style="margin-bottom: 0cm; text-align: left;">
  Com o Modem desconectado, clique com o botão direito em conexões de rede e vá até Editar Conexões&#8230;
</p>

<p style="margin-bottom: 0cm; text-align: left;">
  <img class="aligncenter size-medium wp-image-798" src="http://www.ubuntero.com.br/wp-content/uploads/2009/10/Editar1-300x213.png" alt="Editar1" width="300" height="213" />
</p>

<p style="margin-bottom: 0cm; text-align: left;">
  Na aba &#8220;Banda Larga Móvel&#8221; clique em Adicionar e Crie uma nova conexão, Avance&#8230;
</p>

<p style="margin-bottom: 0cm; text-align: left;">
  <img class="aligncenter size-medium wp-image-799" src="http://www.ubuntero.com.br/wp-content/uploads/2009/10/Avançar-300x292.png" alt="Avançar" width="300" height="292" />
</p>

<p style="margin-bottom: 0cm; text-align: left;">
  Selecione o provedor de Serviço (No meu caso e muito comum para esse Modem, &#8220;Claro&#8221;), Avance e Aplique.
</p>

<p style="margin-bottom: 0cm; text-align: left;">
  <img class="aligncenter size-medium wp-image-800" src="http://www.ubuntero.com.br/wp-content/uploads/2009/10/Serviço-300x296.png" alt="Serviço" width="300" height="296" />
</p>

<p style="margin-bottom: 0cm; text-align: left;">
  Selecione a Conexão e clique no botão Editar.
</p>

<p style="margin-bottom: 0cm; text-align: left;">
  <img class="aligncenter size-medium wp-image-801" src="http://www.ubuntero.com.br/wp-content/uploads/2009/10/Editar2-300x222.png" alt="Editar2" width="300" height="222" />
</p>

<p style="margin-bottom: 0cm; text-align: left;">
  Adicione &#8220;bandalarga.&#8221; ao APN da claro, se quiser conectar automaticamente quanto inserir o modem, marque a opção “Conectar automaticamente&#8221; no topo da aba, torne disponível também aos outros usuários dessa maquina marcando a opção “Disponível para todos os usuários”
</p>

<p style="margin-bottom: 0cm; text-align: left;">
  <img class="aligncenter size-medium wp-image-802" src="http://www.ubuntero.com.br/wp-content/uploads/2009/10/Alterando-276x300.png" alt="Alterando" width="276" height="300" />
</p>

<p style="margin-bottom: 0cm; text-align: left;">
  Passe agora para a aba “Configuração Ipv4”, nela deixe a opção “Método” como “Automático (PPP)” e vá em “Aplicar”.
</p>

<p style="margin-bottom: 0cm; text-align: left;">
  <img class="aligncenter size-medium wp-image-803" src="http://www.ubuntero.com.br/wp-content/uploads/2009/10/IPv4-279x300.png" alt="IPv4" width="279" height="300" />
</p>

<p style="margin-bottom: 0cm; text-align: left;">
  Feitos esses passos sua conexão Claro 3G está configurada.
</p>

<p style="margin-bottom: 0cm; text-align: left;">
  Alguns modens 3G possuem Flash drive para armazenar arquivos, e o Ubuntu irá detectar esse Flash drive, precisamos fazer com que ele inicie apenas o Modem, para isso será necessário criar um arquivo de regras.
</p>

<p style="margin-bottom: 0cm; text-align: left;">
  Abra um janela do terminal e digite o seguinte comando:
</p>

<p style="margin-bottom: 0cm; text-align: left;">
  $ sudo gedit /etc/udev/rules.d/50-md300modem.rules
</p>

<p style="margin-bottom: 0cm; text-align: left;">
  Digite sua senha e adicione no arquivo as seguintes linhas:
</p>

<p style="margin-bottom: 0cm; text-align: left;">
  #
</p>

<p style="margin-bottom: 0cm; text-align: left;">
  #ACTION!=&#8221;add&#8221;, GOTO=&#8221;3G_End&#8221;
</p>

<p style="margin-bottom: 0cm; text-align: left;">
  #BUS==&#8221;usb&#8221;, SYSFS{idProduct}==&#8221;1000&#8243;, SYSFS{idVendor}==&#8221;0fd1&#8243;, PROGRAM=&#8221;/bin/sh -c &#8216;echo 3 > /sys/%p/device/bConfigurationValue'&#8221;
</p>

<p style="margin-bottom: 0cm; text-align: left;">
  #LABEL=&#8221;3G_End&#8221;
</p>

<p style="margin-bottom: 0cm; text-align: left;">
  ACTION!=&#8221;add&#8221;, GOTO=&#8221;3G_End&#8221;
</p>

<p style="margin-bottom: 0cm; text-align: left;">
  BUS==&#8221;usb&#8221;, SYSFS{idProduct}==&#8221;d0cf&#8221;, SYSFS{idVendor}==&#8221;0fce&#8221;, NAME=&#8221;modem&#8221; PROGRAM=&#8221;/bin/sh -c &#8216;echo 3 > /sys/%p/device/bConfigurationValue'&#8221;
</p>

<p style="margin-bottom: 0cm; text-align: left;">
  LABEL=&#8221;3G_End&#8221;
</p>

<p style="margin-bottom: 0cm; text-align: left;">
  O Arquivo ficara igual a imagem abaixo:
</p>

<p style="margin-bottom: 0cm; text-align: left;">
  <img class="aligncenter size-medium wp-image-804" src="http://www.ubuntero.com.br/wp-content/uploads/2009/10/Arquivo-300x243.png" alt="Arquivo" width="300" height="243" />
</p>

<p style="margin-bottom: 0cm; text-align: left;">
  Salve o arquivo, feche o terminal e plugue o modem.
</p>

<p style="margin-bottom: 0cm; text-align: left;">
  <strong>Autor: Jean Esperança</strong>
</p>