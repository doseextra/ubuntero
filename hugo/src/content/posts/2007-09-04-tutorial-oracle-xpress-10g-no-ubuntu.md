---
title: 'Tutorial: Oracle Xpress 10g no Ubuntu'
author: Marcos André Lucas
type: post
date: 2007-09-05T01:39:46+00:00
url: /tutorial-oracle-xpress-10g-no-ubuntu/
burl:
  - http://ads.tt/1YID
categories:
  - Ubuntu

---
Um dos pontos que levantei em meu [primeiro post][1] foi sobre o Oracle rodando em Ubuntu. Pensei então em escrever um tutorial sobre o assunto, mas o tempo era escasso, até que me deparei eu mesmo com a tarefa de ter de fazer isto, e resolvi documentar o processo. Este tutorial pretende mostrar como instalar o Oracle Express no Ubuntu Server.

**Sobre este tutorial:** 

  * Baseado na distribuição Ubuntu 6.0.6 LTS Server.
  * Dificuldade de execução: Fácil
  * Nível de conhecimento: Médio

**Pré-requisitos** 

  * Fundamentos de administração do sistema operacional (familiaridade com terminal, conhecimento de conceitos, instalação de pacotes, configuraçao de ambiente)
  * Conhecimentos básicos sobre o banco de dados Oracle
  * Entendimento do que se quer fazer

<!--more-->

**Para os apressados** 
  
Se você não quer &#8220;perder tempo&#8221; com conceitos, ou só quer uma &#8220;receita de bolo&#8221;, aqui está:

`<br />
sudo su -dd if=/dev/zero of=/swap.img bs=1048576 count=2048<br />
mkswap /swap.img<br />
swapon /swap.img<br />
echo "deb http://oss.oracle.com/debian unstable main non-free" >> /etc/apt/sources.list<br />
apt-get -y update<br />
apt-get -y install libaio bc<br />
apt-get -y install oracle-xe-universal<br />
/etc/init.d/oracle-xe configure<br />
cat << EOF >> /home/oracle/.bashrc<br />
ORACLE_HOME=/usr/lib/oracle/xe/app/oracle/product/10.2.0/server<br />
PATH=$PATH:$ORACLE_HOME/bin<br />
export ORACLE_HOME<br />
export ORACLE_SID=XE<br />
export PATH<br />
EOF<br />
/etc/init.d/oracle-xe restart<br />
` 

Com os comandos acima, você já deve ter rodando uma instalação do Oracle Express totalmente funcional em seu servidor. Aogra vamos saber o porquê de cada comando, e aprofundarmos um pouco mais no assunto.

**Preparando o ambiente**

Para iniciar os trabalhos, vamos logo entrando como usuário root:
  
`<br />
sudo su -<br />
` 
  
O comando sudo é velho conhecido, serve para rodar comandos com permissões administrativas. O comando &#8220;su -&#8221; indica que queremos nos tornar root (e permanecer assim), carregando o seu profile como se fosse um novo login.

Antes de mais nada, o Oracle é um banco que necessita de muita memória RAM. Mas acredito que você já saiba disso. Inclusive, durante a instalação, ele checa a quantidade de memória física e de Swap que você tem no sistema operacional, e decide se continua ou não. Uma boa forma de contornar problemas deste tipo, é adicionar uma boa quantia de memória swap, mesmo que temporariamente, antes de começarmos.

`<br />
dd if=/dev/zero of=/swap.img bs=1048576 count=2048<br />
mkswap /swap.img<br />
swapon /swap.img<br />
` 

O primeiro comando cria um arquivo, vazio, de nome swap.img na raiz de nosso sistema de arquivos, de tamanho 2Gb. O comando mkswap cria a estrutura e o &#8220;filesystem&#8221; de swap neste arquivo, e, por fim, o comando swapon o ativa, adicionando ao swap do sistema temporariamente. O instalador do Oracle necessita de 1,5GB de Swap para 256M de RAM física, e 1,0GB de Swap para 512M de RAM, se desejar, ajuste os valores de acordo com sua necessidade.
  
Arquivos de swap, geralmente possuem um pouco mais de overhead do que se utilizarmos partições, portanto, se você for utilizar em produção, vale a pena deixar uma partição específica para swap.
  
Outra checagem que o pacote de instalação faz, é quanto à memória RAM instalada fisicamente. Se você não tiver pelo menos 256 MB de RAM, o instalador se recusa a continuar.

**Obtendo e Instalando**
  
Existem duas formas de obter e instalar o Oracle. A primeira, é utilizando o sistema de repositórios e adicionando o repositório da Oracle. Pode-se editar manualmente o seu arquivo sources.list ou utilizar o seguinte comando:
  
`<br />
echo "deb http://oss.oracle.com/debian unstable main non-free" >> /etc/apt/sources.list<br />
` 

Existem 3 pacotes no repositório da Oracle:
  
&#8211; oracle-xe : Oracle Database 10g Express Western European Edition
  
&#8211; oracle-xe-client : Oracle Client 10g Express Edition
  
&#8211; oracle-xe-universal : Oracle Database 10g Express Universal Edition
  
Escolha um, e a partir deste momento, é só seguir o usual:
  
`<br />
apt-get update<br />
apt-get install oracle-xe-universal<br />
` 
  
Este pacote depende da biblioteca libaio e do pacote bc, que são baixados automaticamente. Durante a instalação, algumas checagens são feitas, e caso algo não esteja de acordo, um aviso é emitido.
  
Quem já instalou antes o banco em seus outros sabores deve esperar agora alguns ajustes de kernel. Geralmente, o próprio pacote já faz estes ajustes, portanto, não vamos nos preocupar com isso de momento, deixando para fazer algum ajuste fino no caso de um servidor em produção somente.

Outra forma de instalar o banco de dados, é visitando a página da Oracle para baixar o arquivo contendo o pacote .deb e instalando-o manualmente. Se, assim como eu, você também prefere não misturar coisas no seu arquivo sources.list, esta é a maneira mais correta. Visite o endereço:
  
 <a href="http://www.oracle.com/technology/software/products/database/xe/index.html" target="_blank">http://www.oracle.com/technology/software/products/database/xe/index.html</a>
  
E baixe o arquivo .deb. Após, basta utilizar os comandos:
  
`<br />
apt-get install libaio bc<br />
dpkg -i oracle-xe-universal_10.2.0.1-1.0_i386.deb<br />
` 

Nesta forma de instalação, as checagens e os ajustes do sistema operacional também são executadas.

**Configurando o serviço**

Para configurar os parâmetros iniciais, utilize o seguinte comando:
  
`<br />
/etc/init.d/oracle-xe configure<br />
` 

Ele irá solicitar algumas informações, como a porta da ferramenta Web, do listener, bem como a senha para ser utilizada pelo SYS e SYSTEM. Recomendo usar os valores padrão para as portas, e utilizar uma ótima senha para o banco, de preferência diferente da sua senha de root e de seu usuário.

Resta agora configurar as opções de acesso e variáveis de ambiente dos usuários no sistema operacional. Abra o arquivo .bashrc do usuário oracle, e inclua o seguinte:
  
`<br />
ORACLE_HOME=/usr/lib/oracle/xe/app/oracle/product/10.2.0/server<br />
PATH=$PATH:$ORACLE_HOME/bin<br />
export ORACLE_HOME<br />
export ORACLE_SID=XE<br />
export PATH<br />
` 

Adicione estas mesmas linhas para outros usuários que você quer que tenham acesso ao Oracle, ou edite o arquivo /etc/bash.bashrc para extender esta configuração a todos os usuários do sistema. Geralmente, só o usuário oracle já é suficiente.

Outras configurações podem ser feitas, mas neste ponto você já tem o banco totalmente operacional.

**Testando e Utilizando**

Ainda como root, use o seguinte comando para se tornar o usuário oracle:
  
`<br />
su - oracle<br />
` 
  
No prompt que surge, abra o sqlplus
  
`<br />
sqlplus sys as sysdba<br />
` 
  
Aqui, é possível criar usuários, objetos e tudo o mais que um banco necessita. Mas existe uma forma mais fácil, que é através da ferramenta de administração Web. Ela vem liberada para escutar na porta que você configurou anteriormente, mas somente pode ser acessada pela máquina local. Se você estiver em outra máquina e, espero, esta esteja rodando linux, basta utilizar o seguinte comando na máquina cliente:
  
`<br />
ssh -L 8080:localhost:8080 usuario@ip.do.seu.servidor<br />
` 
  
Com isso, estamos mapeando a porta 8080 da máquina cliente para a porta 8080 do servidor. É só abrir o navegador, e acessar:
  
`<br />
http://localhost:8080/apex/<br />
` 
  
Na página que se abre, utilize o usuário system e a senha definida anteriormente. Agora, é só criar seus usuários e começar a utilizar o banco.

**Dicas finais**

  * Caso você esteja instalando na própria máquina, não em um servidor, e dispõe de interface gráfica, algumas aplicações estão disponíveis em /usr/share/applications, com o prefixo oracleexe-, para você adicionar à área de trabalho ou aos menus.
  * Por padrão, os arquivos de dados estão em /usr/lib/oracle/xe/oradata/XE. Você pode parar o banco, mover este diretório para outro lugar (outra partição ou até mesmo outro disco, por exemplo), e criar um link simbólico apontando para a nova localização, reiniciando o banco em seguida.
  * Ao parar e iniciar o banco, você pode usar os comandos do listener do próprio oracle ou, para facilitar, usar os comandos disponibilizados por /etc/init.d/oracle-xe (inclusive checar o status do banco).
  * Quando for configurar um client (em uma máquina windows, por exemplo) lembre-se que o OracleID deste banco é, por padrão, &#8220;XE&#8221;.

 [1]: http://www.fuzzer.com.br/ubuntero/?cat=14