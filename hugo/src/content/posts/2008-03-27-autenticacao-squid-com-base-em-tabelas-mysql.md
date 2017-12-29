---
title: Autenticação Squid com base em Tabelas MySql
author: Marcos André Lucas
type: post
date: 2008-03-28T00:16:23+00:00
url: /autenticacao-squid-com-base-em-tabelas-mysql/
burl:
  - http://ads.tt/1YI6
  - http://ads.tt/1YI6
  - http://ads.tt/1YI6
  - http://ads.tt/1YI6
  - http://ads.tt/1YI6
  - http://ads.tt/1YI6
  - http://ads.tt/1YI6
  - http://ads.tt/1YI6
  - http://ads.tt/1YI6
  - http://ads.tt/1YI6
  - http://ads.tt/1YI6
  - http://ads.tt/1YI6
  - http://ads.tt/1YI6
  - http://ads.tt/1YI6
  - http://ads.tt/1YI6
  - http://ads.tt/1YI6
  - http://ads.tt/1YI6
  - http://ads.tt/1YI6
  - http://ads.tt/1YI6
  - http://ads.tt/1YI6
  - http://ads.tt/1YI6
  - http://ads.tt/1YI6
  - http://ads.tt/1YI6
  - http://ads.tt/1YI6
  - http://ads.tt/1YI6
  - http://ads.tt/1YI6
  - http://ads.tt/1YI6
  - http://ads.tt/1YI6
  - http://ads.tt/1YI6
  - http://ads.tt/1YI6
  - http://ads.tt/1YI6
  - http://ads.tt/1YI6
  - http://ads.tt/1YI6
  - http://ads.tt/1YI6
  - http://ads.tt/1YI6
  - http://ads.tt/1YI6
  - http://ads.tt/1YI6
  - http://ads.tt/1YI6
  - http://ads.tt/1YI6
  - http://ads.tt/1YI6
  - http://ads.tt/1YI6
  - http://ads.tt/1YI6
  - http://ads.tt/1YI6
  - http://ads.tt/1YI6
  - http://ads.tt/1YI6
  - http://ads.tt/1YI6
  - http://ads.tt/1YI6
  - http://ads.tt/1YI6
  - http://ads.tt/1YI6
  - http://ads.tt/1YI6
  - http://ads.tt/1YI6
  - http://ads.tt/1YI6
  - http://ads.tt/1YI6
categories:
  - Ubuntu
tags:
  - Autenticação
  - Autenticação Squid
  - Avançado
  - Mysql
  - Proxy
  - Servidor
  - Squid
  - Squid+MySql
  - Tutorial
  - Ubuntu

---
Um assunto muito recorrente, para quem trabalha com administração de proxy&#8217;s, é a necessidade de se fazer autenticação dos usuários com base em uma determinada lista de acesso. Geralmente, é questão apenas de fazer a configuração correta do Squid, definir alguns arquivos texto com as informações e pronto. Porém, no caso de empresas grandes, é desejável que esta informação seja reutilizada a partir de alguma já existente, geralmente em forma de dados em tabelas de um banco de dados qualquer.

Utilizo em algumas empresas um script bem simples, que eu mesmo desenvolvi, para esta tarefa. Qual não foi minha surpresa, ao saber que fazer isto é uma dúvida bastante buscada na Internet por outras pessoas e, quase sempre, não resolvida. A maioria utiliza alguns projetos complicados, outros já recomendam partir para alguma solução mais rebuscada (e, talvez, até mais correta) como LDAP e outros.

Porém, basta um script e uma ou outra configuração e a questão está resolvida. Decidi então compartilhar, aqui, o script que instalo nas máquinas que administro. Seu uso é bem simples. Na verdade, se você pegar e simplesmente seguir os passos aqui descritos, verás que é algo trivial. Porém, para manter a qualidade dos artigos aqui publicados, este serve também como um tutorial para que você entenda um pouco mais do funcionamento dos mecanismos de autenticação do Squid.

**Sobre este tutorial:**

  * Baseado na distribuição Ubuntu 7.10 Server
  * Dificuldade de execução: Fácil
  * Nivel de conhecimento: Avançado

**Pré-requisitos** 

  * Conhecimentos básicos sobre o proxy Squid
  * Conhecimentos básicos sobre o banco de dados MySql
  * Entendimento prévio do que se pretende fazer
  * Servidor Linux já instalado e configurado
  * Banco de dados MySql e Squid já instalados e configurados

<!--more-->

**Para os apressados**
  
Se você não quer “perder tempo” com conceitos, ou só quer uma “receita de bolo”, aqui estão os procedimentos, considerando a instalação do pacote php5-cli (desconsidere se já instalado):
  
`<br />
$ sudo su -<br />
Password: sua_senha<br />
# cat << EOF > CriaBanco_AutenticaSquid.sql<br />
CREATE DATABASE AutenticaSquid;<br />
USE AutenticaSquid;<br />
CREATE TABLE Usuarios (<br />
nome varchar(255) NOT NULL,<br />
senha varchar(255) NOT NULL,<br />
ativo tinyint(1) NOT NULL default '1',<br />
PRIMARY KEY (nome),<br />
KEY nome (nome)<br />
) COMMENT = 'AutenticaSquid - Usuarios';<br />
INSERT INTO Usuarios VALUES ('usuario1', encrypt('senha1'), 1);<br />
INSERT INTO Usuarios VALUES ('usuario2', encrypt(''), 0);<br />
EOF<br />
# mysql -u usuario_do_banco -p < CriaBanco_AutenticaSquid.sql<br />
Password: senha_do_banco<br />
# apt-get install php5-cli<br />
# cd /usr/lib/squid<br />
` 
  
`<br />
# cat << EOF > mysqlt_auth</p>
<pre>
#!/usr/bin/php
<?
        $link = mysqli_connect("localhost", "usuario_do_banco", "senha_do_banco");
        if (!$link) {
                printf("Erro ao conectar com o banco de dados: %s\n", mysqli_connect_error());
                die();
        }
        $selectdb = mysqli_select_db($link, "AutenticaSquid");
        if (!$selectdb) {
                printf("Erro ao abrir o banco de dados: %s\n", mysqli_error($link));
                die();
        }
        while ( fscanf(STDIN, "%s %s", $nome, $senha) ) {
                $select = "SELECT nome, senha FROM Usuarios WHERE nome = '".$nome."' AND ativo = 1";
                $Query = mysqli_query($link, $select);
                $nrRegistros = mysqli_num_rows($Query);
                $erro = true;
                while ( $Registro = mysqli_fetch_array($Query) ) {
                        $erro = false;
                        if ( crypt($senha, $Registro[senha]) == $Registro[senha] ) printf("OK\n");
                        else printf("ERR\n");
                }
                if ($erro) printf("ERR\n");
        }
?>
EOF
</pre>
<p>`
  
`<br />
# vi /etc/squid/squid.conf<br />
(...)<br />
auth_param basic children 5<br />
auth_param basic realm Descrição do seu servidor<br />
auth_param basic credentialsttl 2 hour<br />
auth_param basic program /usr/lib/squid/mysqlt_auth<br />
(...)<br />
acl usuarios proxy_auth "/etc/squid/usuarios"<br />
http_access allow usuarios<br />
http_access deny all<br />
(...)<br />
# cat << EOF > /etc/squid/usuarios<br />
usuario1<br />
usuario2<br />
EOF<br />
# /etc/init.d/squid restart<br />
` 
  
Com os comandos e procedimentos acima, você já deve ter a configuração pronta e totalmente funcional em seu servidor. Aogra vamos saber o porquê de cada comando e procedimento, e aprofundarmos um pouco mais no assunto.

**Preparando o ambiente**

Para iniciar os trabalhos, vamos logo entrando como usuário &#8220;root&#8221;:
  
`<br />
$ sudo su -<br />
Password: sua_senha<br />
#<br />
` 
  
O comando sudo é velho conhecido, serve para rodar comandos com permissões administrativas. O comando “su -” indica que queremos nos tornar root (e permanecer assim), carregando o seu profile como se fosse um novo login.

Não será objeto deste tutorial a instalação do Squid e do MySql, pois estamos partindo do pressuposto que estes já estão rodando, conforme os pré-requisitos citados anteriormente. Em artigos futuros, talvez este assunto seja abordado. Portando, cheque se o seu proxy Squid já funciona adequadamente, se os usuários conseguem navegar por ele, se você já tem um banco de dados MySql rodando, se a as tabelas estão criadas, enfim&#8230; faça uma checagem geral.

Caso você não as tenha, segue um script de exemplo para criação do banco em MySql, já com a tabela e dois usuários de teste, sendo um desabilitado.

`<br />
# cat << EOF > CriaBanco_AutenticaSquid.sql<br />
CREATE DATABASE AutenticaSquid;<br />
USE AutenticaSquid;<br />
CREATE TABLE Usuarios (<br />
nome varchar(255) NOT NULL,<br />
senha varchar(255) NOT NULL,<br />
ativo tinyint(1) NOT NULL default '1',<br />
PRIMARY KEY (nome),<br />
KEY nome (nome)<br />
) COMMENT = 'AutenticaSquid - Usuarios';<br />
INSERT INTO Usuarios VALUES ('usuario1', encrypt('senha1'), 1);<br />
INSERT INTO Usuarios VALUES ('usuario2', encrypt(''), 0);<br />
EOF<br />
# mysql -u usuario_do_banco -p < CriaBanco_AutenticaSquid.sql<br />
Password: senha_do_banco<br />
` 

**Obtendo e Instalando**

O script é escrito em PHP, então necessitamos a instalação dos pacotes referentes ao interpretador por linha de comando desta linguagem de script, que pode ser feita da seguinte forma:

`<br />
# apt-get install php5-cli<br />
` 

Feita a instalação, entramos no diretório referente aos mecanismos de autenticação do Squid (no Ubuntu Server, &#8220;/usr/lib/squid&#8221;):

`<br />
# cd /usr/lib/squid<br />
` 

Neste diretório, há um programa e/ou script para cada mecanismo de autenticação instalado. O funcionamento é simples, o Squid chama o executável deste diretório, passa através da entrada padrão o nome e a senha que o usuário digitou, recebendo de volta &#8220;OK&#8221; ou &#8220;ERR&#8221; conforme o caso.

Iremos criar um novo arquivo, definindo o seu conteúdo, chamado &#8220;mysqlt_auth&#8221; (será o nome de nosso programa de autenticação). Pode copiar e colar o código abaixo, alterando os valores necessários para se adaptar ao seu banco de dados:

`<br />
# cat << EOF > mysqlt_auth</p>
<pre>
#!/usr/bin/php
<?
        $link = mysqli_connect("localhost", "usuario_do_banco", "senha_do_banco");
        if (!$link) {
                printf("Erro ao conectar com o banco de dados: %s\n", mysqli_connect_error());
                die();
        }
        $selectdb = mysqli_select_db($link, "AutenticaSquid");
        if (!$selectdb) {
                printf("Erro ao abrir o banco de dados: %s\n", mysqli_error($link));
                die();
        }
        while ( fscanf(STDIN, "%s %s", $nome, $senha) ) {
                $select = "SELECT nome, senha FROM Usuarios WHERE nome = '".$nome."' AND ativo = 1";
                $Query = mysqli_query($link, $select);
                $nrRegistros = mysqli_num_rows($Query);
                $erro = true;
                while ( $Registro = mysqli_fetch_array($Query) ) {
                        $erro = false;
                        if ( crypt($senha, $Registro[senha]) == $Registro[senha] ) printf("OK\n");
                        else printf("ERR\n");
                }
                if ($erro) printf("ERR\n");
        }
?>
EOF
</pre>
<p>`
  
O funcionamento do script é simples:

  * Conecta ao MySql
  * Seleciona o banco de dados criado
  * Lê da entrada padrão o nome e senha do usuário
  * Pesquisa na tabela Usuarios por usuarios ativos (ativo=1) que contenham aquele nome
  * Assume que houve erro.
  * Se foi encontrado um registro, assume que não houve erro.
  * Compara a encriptação da senha digitada se confere com a senha criptografada armazenada.
  * Caso sejam iguais, mostra OK.
  * Caso sejam diferentes, mostra ERR.
  * Caso tenha havido erro, mostra ERR.
  * Recomeça a leitura da entrada padrão.

**Configurando o Serviço**

Para que o Squid &#8220;enxergue&#8221; o novo esquema de autenticação, é necessário que façamos a devida alteração em seu arquivo de configuração. Edite o arquivo /etc/squid/squid.conf e verifique que há uma diretiva que &#8220;aponta&#8221; para o programa de autenticação, bastando então alterá-lo:

`<br />
# vi /etc/squid/squid.conf<br />
(...)<br />
auth_param basic children 5<br />
auth_param basic realm Descrição do seu servidor<br />
auth_param basic credentialsttl 2 hour<br />
auth_param basic program /usr/lib/squid/mysqlt_auth<br />
(...)<br />
` 

Para cofigurar as ACL&#8217;s, você faz da mesma forma como faria a autenticação da forma &#8220;normal&#8221;. Para fins de exemplo, aqui está um conjunto de ACL&#8217;s que deixa um usuário navegar e barra todos os outros acessos:

`<br />
# vi /etc/squid/squid.conf<br />
(...)<br />
acl usuarios proxy_auth "/etc/squid/usuarios"<br />
http_access allow usuarios<br />
http_access deny all<br />
(...)<br />
# cat << EOF > /etc/squid/usuarios<br />
usuario1<br />
usuario2<br />
EOF<br />
#<br />
` 

Veja que, devido à simplicidade de nosso script, ainda precisamos de um arquivo auxiliar ( no caso, /etc/squid/usuarios ) contendo o nome de todos os usuários cadastrados. Desta forma, ele irá buscar a senha e se está ativo ou não no MySql, mas ainda é necessário inserir aqui o seu nome.

Terminada a configuração do Squid, devemos reinicializar o Squid:

`<br />
# /etc/init.d/squid restart<br />
` 

Outras ACL&#8217;s e configurações podem ser feitas, em conjunto com as aqui mostradas, bastando você alterar o arquivo de configuração conforme desejado.

**Testando e Utilizando**

Para verificar se o Squid carregou o script corretamente, use o seguinte comando para visualizar se ele está rodando:
  
`<br />
#  ps aux | grep mysqlt_auth<br />
proxy     5821  0.0  0.9  22408  4708 ?        Ss   06:37   0:00 /usr/bin/php /usr/lib/squid/mysqlt_auth<br />
proxy     5822  0.0  0.9  22412  4704 ?        Ss   06:37   0:00 /usr/bin/php /usr/lib/squid/mysqlt_auth<br />
proxy     5823  0.0  0.8  22408  4540 ?        Ss   06:37   0:00 /usr/bin/php /usr/lib/squid/mysqlt_auth<br />
proxy     5824  0.0  0.8  22408  4540 ?        Ss   06:37   0:00 /usr/bin/php /usr/lib/squid/mysqlt_auth<br />
proxy     5825  0.0  0.8  22408  4540 ?        Ss   06:37   0:00 /usr/bin/php /usr/lib/squid/mysqlt_auth<br />
root     30390  0.0  0.1   2972   748 pts/0    R+   20:35   0:00 grep mysqlt_auth<br />
#<br />
` 

Veja que há 5 instâncias do Script servindo ao Squid.
  
Se não houver nenhuma instância, basta checar o arquivo /var/log/squid/cache.log atrás de mensagens de erro. Em uma situação normal, ele deve mostrar o seguinte:

`<br />
# cat /var/log/squid/cache.log | grep helperOpenServers<br />
2008/12/31 23:37:09| helperOpenServers: Starting 5 'mysqlt_auth' processes<br />
` 

Para verificar a autenticação dos usuários em si, rode o script manualmente:

`<br />
# /usr/lib/squid/mysqlt_auth<br />
usuario1 senha1<br />
OK<br />
usuario2 senha2<br />
ERR<br />
<ctrl+d><br />
#<br />
` 

Como se vê, executando o comando e digitando o usuário e a senha a cada linha, separados por espaço, ele informa se tem acesso ou não. O CTRL+D indica fim de arquivo, e o comando é encerrado.

**Dicas finais**

  * Os caminhos, comandos e procedimentos aqui indicados, tomam como base o Ubuntu 7.10 Server. Porém, pode ser utilizado com pequenas adaptações para Ubuntu 6.06 LTS Server, outras versões, e até mesmo outras distribuições.
  * Você pode escrever uma página Web, em PHP ou outra linguagem dinâmica, que consulta as informações do banco, e gerencia os usuários, com troca de senhas, etc. Inclusive, utilizo uma solução assim que eu mesmo desenvolvi.
  * Lembre-se que aqui foi mostrado como fazer autenticação com informações de tabelas no Squid. Você deve saber trabalhar com proxy&#8217;s, autenticação, e todas as suas complicações (não funcionar com proxy transparente, configuração no browser, etc).