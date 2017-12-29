---
title: Unity 2D em placa sem aceleração 3D
author: Anderson Henrique
type: post
date: 2011-02-13T13:43:22+00:00
url: /unity-2d-em-placa-sem-aceleracao-3d/
categories:
  - Ubuntu
tags:
  - 2d
  - aceleração 3d
  - Ubuntu
  - Unity

---
Primeiramente olá a todos, eu me chamo Anderson Henrique e esse é o meu primeiro post aqui no Ubuntero. Essa é uma dica que a meu ver pode ser bastante útil a vários donos de notebook com placas problemáticas, por exemplo SiS (como é o meu caso) ou VIA, onde o desempenho é demasiado baixo ou nulo.

É algo muito simples de se fazer, então se você está com vontade de testar a nova interface, mas não tem um hardware bom, então isso vai te ajudar. Tudo será feito pelo terminal, então vamos lá e abra um. Assim que aberto digite:
  
**sudo add-apt-repository ppa:unity-2d-team/unity-2d-daily**

Em seguida, digite:
  
**sudo apt-get update**

E para finalizar:
  
**sudo apt-get install unity-qt-default-settings**

 ****
  
Uma atualização fez com que fosse possível mostrar os espaços de trabalho, não me ficou claro se é necessário fazer o passo a seguir quando for instalar pela primeira vez, mas por segurança, digite no terminal:
  
**sudo apt-get remove libqtdee1** ****

<p style="text-align: center;">
  <p style="text-align: center;">
    <strong> </strong>
  </p>
  
  <p style="text-align: center;">
    <strong> </strong>
  </p>
  
  <p style="text-align: center;">
    <strong> </strong>
  </p>
  
  <p>
    <img src="http://img3.imageshack.us/img3/7559/unity2d1.png" alt="Rodando Unity 2D em meu notebook com placa SiS" />
  </p>