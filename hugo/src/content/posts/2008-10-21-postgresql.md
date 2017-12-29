---
title: Postgresql
author: Ivan Brasil Fuzzer
type: post
date: 2008-10-21T19:59:55+00:00
url: /postgresql/
categories:
  - Ubuntu

---
Voltando aos primordios do blog, um post ao estilo twitter.

Como disse em um artigo anterior, estou fazendo algumas alterações em um sistema de ponto eletrônico. Este sistema utiliza banco de dados Postgresql. Quando instalado no Ubuntu, o postgresql não faz nenhuma pergunta sobre a senha que será definida para o usuário postgres. Para resolver este &#8220;problema&#8221; siga estes passos:

Mude para o usuário root:
   
$ su &#8211;</p> 

$ passwd postgres

Mude para o usuário postgres:
   
$ su postgres

Digite o comando:
   
$ psql -c &#8220;ALTER USER postgres WITH PASSWORD &#8216;novasenha'&#8221; -d template1

Apenas substitua &#8216;novasenha&#8217; pela senha que deseja. </ul> 

Pronto, com estes passos simples você terá definido uma nova senha para o usuário postgres e poderá utilizar o banco de dados.