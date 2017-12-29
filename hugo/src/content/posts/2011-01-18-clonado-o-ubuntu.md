---
title: Clonando o ubuntu
author: leandro
type: post
date: 2011-01-18T19:15:53+00:00
excerpt: Clonando o Ubuntu/debian
url: /clonado-o-ubuntu/
burl:
  - http://ads.tt/1YIA
  - http://ads.tt/1YIA
  - http://ads.tt/1YIA
  - http://ads.tt/1YIA
  - http://ads.tt/1YIA
  - http://ads.tt/1YIA
  - http://ads.tt/1YIA
  - http://ads.tt/1YIA
  - http://ads.tt/1YIA
  - http://ads.tt/1YIA
  - http://ads.tt/1YIA
  - http://ads.tt/1YIA
  - http://ads.tt/1YIA
  - http://ads.tt/1YIA
  - http://ads.tt/1YIA
  - http://ads.tt/1YIA
  - http://ads.tt/1YIA
  - http://ads.tt/1YIA
  - http://ads.tt/1YIA
  - http://ads.tt/1YIA
  - http://ads.tt/1YIA
  - http://ads.tt/1YIA
  - http://ads.tt/1YIA
  - http://ads.tt/1YIA
  - http://ads.tt/1YIA
  - http://ads.tt/1YIA
  - http://ads.tt/1YIA
  - http://ads.tt/1YIA
  - http://ads.tt/1YIA
  - http://ads.tt/1YIA
  - http://ads.tt/1YIA
  - http://ads.tt/1YIA
  - http://ads.tt/1YIA
  - http://ads.tt/1YIA
  - http://ads.tt/1YIA
  - http://ads.tt/1YIA
  - http://ads.tt/1YIA
  - http://ads.tt/1YIA
  - http://ads.tt/1YIA
  - http://ads.tt/1YIA
  - http://ads.tt/1YIA
  - http://ads.tt/1YIA
  - http://ads.tt/1YIA
  - http://ads.tt/1YIA
  - http://ads.tt/1YIA
  - http://ads.tt/1YIA
  - http://ads.tt/1YIA
  - http://ads.tt/1YIA
  - http://ads.tt/1YIA
  - http://ads.tt/1YIA
categories:
  - Ubuntu
tags:
  - clone
  - megate
  - pacotes
  - Ubuntu

---
As vezes migrar/clonar é o caminho, seja por problemas de hardware, invasões, corrompimento de sistema de arquivos, um &#8220;rm -rf&#8221; mal feito(kkk).. etc

É claro os pacotes, são só os pacotes, temos os dados e as configurações, não é o caso, retrataremos aqui, apenas a seleção de pacotes, mas torcemos pela integridade dos seus backups ;).

pre-requisito:

1- S.O. origem/destino identicos, versão, arquitetura, etc
  
2- Mesma lista de Repositórios e é claro **_sudo apt-get update_**

Salvando a lista na maquina de origem: no console

  * _ **sudo dpkg &#8211;get-selections > packs.txt**_

_ ****_

copie o arquivo _packs.txt para o servidor destino&#8230;._
  
Restaurando a seleção na maquina destino

  * _**cat packs.txt |sudo  dpkg &#8211;set-selections**_

_e em seguida&#8230;</p> 

  * **_sudo apt-get dselect-upgrade_ __**

</em>

ou se preferir utilize a ferramente dselect (apt-get install dselect)

logo após, mãos a obra para restaurar os dados e as configurações, ao menos não será necessário utilizar o **_apt-get_** por um bom tempo.

ABS. L4n

_
  
_