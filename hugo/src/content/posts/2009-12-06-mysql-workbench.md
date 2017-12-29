---
title: MySQL Workbench
author: Ivan Brasil Fuzzer
type: post
date: 2009-12-06T16:54:51+00:00
url: /mysql-workbench/
categories:
  - Ubuntu

---
[<img class="alignleft size-thumbnail wp-image-873" title="mysql workbench" src="http://www.ubuntero.com.br/wp-content/uploads/2009/12/mysql-workbench-150x36.png" alt="mysql workbench" width="150" height="36" />][1]Em meus trabalhos com o wPonto estou utilizando uma ótima ferramenta para modelagem do banco de dados específica para MySQL. Esta ferramenta se chama &#8220;MySQL Workbench&#8221;.

Com o MySQL Workbench é possível escrever e executar consultas e scripts, editar dados, desenvolver visualmente os modelos do banco de dados e gerenciar o servidor MySQL.

A ferramenta é bem intuitiva e recomendo para todos que trabalham com bancos de dados MySQL.

Para instalarmos a ferramenta no Ubuntu devemos seguir os seguintes passos:

  * entre no <a href="http://dev.mysql.com/downloads/select.php?id=8" target="_blank">site do projeto<br /> </a>
  * Onde diz &#8220;Select your operating system&#8221;, seleciona &#8220;Ubuntu Linux&#8221;
  * faça o donwload da versão do seu Ubuntu(para Ubuntu 9.10, baixe a versão para 9.04)
  * ao final do download, dê um duplo clique no pacote .deb baixado e proceda com a instalação com o GDebi

Para sincronizar seus projetos com sua base no servidor, execute o seguinte comando:

  * sudo ln -s /usr/lib/libmysqlclient\_r.so.16 /usr/lib/libmysqlclient\_r.so

Espero que o MySQL Workbench seja de muita utilidade a todos.

 [1]: http://www.ubuntero.com.br/wp-content/uploads/2009/12/mysql-workbench.png