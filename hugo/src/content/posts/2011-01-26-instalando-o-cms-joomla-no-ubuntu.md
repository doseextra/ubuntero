---
title: Instalando o CMS Joomla no Ubuntu
author: Eduardo Barbosa
type: post
date: 2011-01-26T10:15:52+00:00
url: /instalando-o-cms-joomla-no-ubuntu/
burl:
  - http://ads.tt/1YEC
  - http://ads.tt/1YEC
  - http://ads.tt/1YEC
  - http://ads.tt/1YEC
  - http://ads.tt/1YEC
  - http://ads.tt/1YEC
  - http://ads.tt/1YEC
  - http://ads.tt/1YEC
  - http://ads.tt/1YEC
  - http://ads.tt/1YEC
  - http://ads.tt/1YEC
  - http://ads.tt/1YEC
  - http://ads.tt/1YEC
  - http://ads.tt/1YEC
  - http://ads.tt/1YEC
  - http://ads.tt/1YEC
  - http://ads.tt/1YEC
  - http://ads.tt/1YEC
  - http://ads.tt/1YEC
  - http://ads.tt/1YEC
  - http://ads.tt/1YEC
  - http://ads.tt/1YEC
  - http://ads.tt/1YEC
  - http://ads.tt/1YEC
  - http://ads.tt/1YEC
  - http://ads.tt/1YEC
  - http://ads.tt/1YEC
  - http://ads.tt/1YEC
  - http://ads.tt/1YEC
  - http://ads.tt/1YEC
  - http://ads.tt/1YEC
  - http://ads.tt/1YEC
  - http://ads.tt/1YEC
  - http://ads.tt/1YEC
  - http://ads.tt/1YEC
  - http://ads.tt/1YEC
  - http://ads.tt/1YEC
  - http://ads.tt/1YEC
  - http://ads.tt/1YEC
  - http://ads.tt/1YEC
  - http://ads.tt/1YEC
  - http://ads.tt/1YEC
  - http://ads.tt/1YEC
  - http://ads.tt/1YEC
  - http://ads.tt/1YEC
  - http://ads.tt/1YEC
  - http://ads.tt/1YEC
  - http://ads.tt/1YEC
  - http://ads.tt/1YEC
  - http://ads.tt/1YEC
categories:
  - Ubuntu
tags:
  - apache
  - cms
  - hospedagem
  - joomla
  - Mysql
  - PHP
  - Servidor
  - Ubuntu

---
<span style="color: #000000;">Para iniciar, gostaria de responder a uma simples e importante dúvida que insiste em aparecer quando ouvimos o termo CMS. Afinal, o que é um CMS? Ele significa Content Management System, ou Sistema Gerenciador de Conteúdo. Mais especificamente, ele serve pra ajudar você a criar um website. Simples não? Tudo se torna ainda mais simples, quando o CMS é o Joomla. O sistema Joomla é um dos mais completos, por possuir muitos recursos. Além disso, ele é um dos mais fáceis de ser utilizado. Ele é decididamente Software Livre e foi escrito em PHP e MySql.</span>

** <span style="color: #003366;">Agora vamos partir para a instalação.</span>**

 <span style="color: #000000;"></span><span style="color: #ff0000;">Para obter o Joomla, basta acessar o site http://www.joomla.com.br/</span>

<span style="color: #000000;">É necesário que alguns softwares estejam devidamente instalados.<br /> </span>

<span style="color: #000000;">1. MySql – Banco de dados</span>

<span style="color: #000000;">2. Php – Linguagem Web </span>

<span style="color: #000000;">3. Apache – Servidor Web</span>

<span style="color: #000000;">Para que a instalação aconteça de maneira suave e sem maiores problemas, é importante que os softwares citados estejam instalados e configurados.</span>

<span style="color: #000000;">No <span style="color: #ff9900;"><strong>Ubuntu</strong></span>, esses softwares podem ser baixados pelo terminal:</span>

**<span style="color: #000000;">sudo apt-get install apache</span>**

**<span style="color: #000000;">sudo apt-get install mysql-client</span>**

**<span style="color: #000000;">sudo apt-get install myql-server</span>**

**<span style="color: #000000;">sudo apt-get install php5-mysql</span>**

**<span style="color: #000000;">sudo apt-get install php5</span>**

<span style="color: #000000;">Após fazer o Download do software através do site, vá no Diretório Download. O nome do arquivo será parecido com Joomla-1-15-22.zip. Clique com o botão direito do mouse em cima do arquivo e escolha a opção Extrair aqui. A pasta criada terá o nome semelhante a Joomla-1-15-22. Renomeie a pasta com o nome Joomla.</span>

<span style="color: #000000;">Agora vamos copiar o diretório criado para o diretório web do Ubuntu, que se localiza em</span>

**<span style="color: #000000;">/var/www</span>**

<span style="color: #000000;">Para copiar abra o terminal com o comando <strong>Ctrl + Alt + T</strong></span>

<span style="color: #000000;">Acesse o diretório Download com o comando <strong>cd Download</strong></span>

<span style="color: #000000;">Com o comando <strong>sudo cp -r Joomla/ /var/www</strong>, a pasta Joomla será copiada para o diretório web.</span>

<span style="color: #000000;">Após copiar a pasta, abra novamente o terminal do Ubuntu com o comando <strong>Ctrl + Alt + T</strong></span>

<span style="color: #000000;">Digite o comando <strong>mysql -u root -p</strong></span>

<span style="color: #000000;">Uma senha será pedida. Se nas instalações dos pacotes anteriores você não definiu nenhuma senha, é só apertar Enter, porém, se definiu, digite a senha e aperte Enter.</span>

<span style="color: #000000;">Se tudo ocorrer como esperado, uma menságem como essa será mostrada:</span>

<span style="color: #000000;"><br /> </span>

_<span style="color: #000000;">Welcome to the MySQL monitor. Commands end with ; or \g.</span>_

_<span style="color: #000000;">Your MySQL connection id is 81</span>_

_<span style="color: #000000;">Server version: 5.1.41-3ubuntu12.7 (Ubuntu)</span>_

_<span style="color: #000000;">Type &#8216;help;&#8217; or &#8216;\h&#8217; for help. Type &#8216;\c&#8217; to clear the current input statement.</span>_

_<span style="color: #000000;">mysql></span>_

<span style="color: #000000;">Esse é o sinal para prosseguir.</span>

<span style="color: #000000;">Digite <strong>create database Joomla;</strong></span>

<span style="color: #000000;">A instalação está praticamente concluida. A partir de agora, ela será feita através do próprio navegador. Então feche o Terminal e abra o Navegador. Digite na barra de endereço a url <strong>http://localhost/Joomla</strong>. </span>

<span style="color: #000000;">A primeira página de instalação será carregada. Nela, escolha o idioma Português e clique em Próximo.</span>

<span style="color: #000000;">Na página dois, </span><span style="color: #000000;"><span style="color: #000000;">observe </span>que um erro foi encontrado, ele está marcado de vermenho.</span>

<span style="color: #000000;">Para resolver esse problema, abra o Terminal e digite o comando <strong>sudo chown -R www-data.www-data /var/www/Joomla/</strong></span>

<span style="color: #000000;">Após digitar esse comando, volte ao navegador e clique em <strong>Verificar Novamente</strong>. Atualize a página.<br /> </span>

<span style="color: #000000;">Veja que não existe mais problemas. Clique em Próximo.</span>

<span style="color: #000000;">É exibida na página quatro, a licença GNU/GPL. Clique em Próximo.</span>

<span style="color: #000000;">No Passo 4, é só seguir as dicas oferecidas na própria página. Preencha os campos em branco e clique em Próximo.</span>

<span style="color: #000000;">No Passo 5 você pode deixar os campos em branco. Clique em Próximo.</span>

<span style="color: #000000;">No Passo 6, os campos como <strong>Nome do Site</strong>, <strong>Seu e-mail</strong>, <strong>Senha do admin</strong> e <strong>Confirme a senha do admin</strong>, serão preenchidos de acordo com o desejado. Após preencher, clique em <strong>Instalar exemplo de conteudo</strong>.</span>

<span style="color: #000000;">Clique em Próximo.</span>

<span style="color: #000000;">Como está escrito na página, <span style="color: #003366;"><strong>Parabéns! O Joomla! Está instalado.</strong></span></span>

<span style="color: #000000;">Agora o que você precisa é apagar o Diretório de Instalação.</span>

<span style="color: #000000;">Abra o Terminal e digite <strong>sudo rm -rf /var/www/Joomla/installation</strong></span>

<span style="color: #000000;"><br /> </span>

**<span style="color: #003366;">Pronto. Você já pode criar seu web site num dos Gerenciadores de Conteúdo mais arrojados que existe. Além de tudo, ele é Software Livre. Aproveite!<br /> </span>**