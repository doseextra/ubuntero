---
title: Indicador de Uso de CPU, Memória e Rede no Ubuntu 11.04
author: Ivan Brasil Fuzzer
type: post
date: 2011-05-03T14:17:39+00:00
url: /indicador-de-uso-de-cpu-memoria-e-rede-no-ubuntu-11-04/
categories:
  - Ubuntu
tags:
  - 11.04
  - indicator
  - Linux
  - natty
  - Ubuntu

---
<span style="color: #ff0000;"><strong>OBS: O PROGRAMA PODE CAUSAR VAZAMENTO DE MEMÓRIA OCASIONANDO UM USO DE MEMÓRIA EXORBITANTE PELO COMPIZ.</strong></span>

Uma das coisas que me desagradou no Ubuntu 11.04 foi exatamente não ter um applet para visualizar em tempo real o que estava acontecendo com meu processador, memória e rede. Hoje, foi divulgada uma solução que mostra apenas os gráficos, sem tooltip com velocidades e porcentagens, que descrevo abaixo:

<p style="text-align: center;">
  <a href="http://www.ubuntero.com.br/wp-content/uploads/2011/05/Captura_de_tela.png"><img class="alignnone size-medium wp-image-2219" title="Indicador de uso de cpu, memória e rede" src="http://www.ubuntero.com.br/wp-content/uploads/2011/05/Captura_de_tela-300x38.png" alt="Indicador de uso de cpu, memória e rede" width="300" height="38" /></a>
</p>

Por enquanto não existe um PPA para  a instalação dos pacotes mas basta fazer o download do arquivo conforme a sua plataforma:

<!--download id="31"-->

<!--download id="32"-->

Depois de feito o download, dê um duplo clique no arquivo .deb baixado e clique no botão Instalar. Depois de instalado pressione a tecla Super e solte e digite System Load Indicator. A primeira, e provavelmente única, opção que aparecerá será a aplicação que deve ser iniciada.

Caso saia um PPA eu volto a postar informando a todos.

Fonte: [Web Upd8][1]

 [1]: http://www.webupd8.org/2011/05/network-memory-and-cpu-usage-indicator.html