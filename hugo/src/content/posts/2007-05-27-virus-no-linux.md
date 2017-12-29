---
title: Vírus no Linux
author: Ivan Brasil Fuzzer
type: post
date: 2007-05-27T22:45:35+00:00
url: /virus-no-linux/
categories:
  - Geral
  - Ubuntu

---
<img src='http://www.fuzzer.com.br/ubuntero/wp-content/uploads/2007/05/virus.jpg' alt='Vírus' align="left" />Um comentário de um artigo anterior me deixou bastante surpreso. Uma pessoa estava com medo de entrar em seu home banking pelo Linux por não ter um anti-vírus instalado.

Vamos começar este artigo definindo o que é um vírus. Vírus é um programa mal intencionado que faz alguma coisa que você não gostaria que fosse feito com sua máquina. Outra caracterísca de um vírus é a capacidade de se espalhar por arquivos no sitema operacional e principalmente a capacidade de se enviar para outros computadores na rede ou na internet.

No Linux, ao contrário de outras plataformas, o sitema de arquivos trabalha com permissões por usuários e grupos e isso dificulta muito a propagação de um programa mal intencionado. Trocando em miúdos, para um arquivo ser infectado é necessário que o usuário permita que isso seja feito e para que este arquivo se propague para arquivos que são de outros usuários, só se o usuário root executar este arquivo e permitir isso.

Não é impossível de se encontrar vírus para Linux, no entanto estes vírus são, em sua maioria, &#8220;vírus conceito&#8221; que consegue infectar os arquivos do Linux se executados como root e não tem a capacidade de se propagar pela internet.

Alguns podem se perguntar então porque existem anti-vírus que rodam em Linux? A resposta é simples, estes anti-vírus rodam na maioria das vezes em servidores de emails ou de arquivos e fazem a varredura em arquivos do windows. O trabalho deles é ajudar a proteger computadores que não executam Linux como Sistema Operacional.

O Ubuntu tem, por padrão, o usuário root &#8220;desabilitado&#8221; e isso ajuda a evitar que os raros vírus para Linux sejam malígnos para o sistema.

A dica de nunca executar programas desconhecidos vale para qualquer Sistema Operacional, inclusive Linux. Além desta dica, você nunca deverá navegar na internet utilizando o usuário root e deverá utiliza-lo apenas quendo for realmente necessário.