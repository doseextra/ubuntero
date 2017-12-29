---
title: Ubuntu Server 6.06 LTS
author: Marcos André Lucas
type: post
date: 2007-05-20T03:44:27+00:00
url: /ubuntu-server-606-lts/
burl:
  - http://ads.tt/1YGO
  - http://ads.tt/1YGO
categories:
  - Ubuntu

---
Olá! Meu nome é Marcos André Lucas, sou programador e administrador de redes, e moro em Erechim &#8211; RS. Conforme dito pelo Ivan [neste post][1], eu estarei escrevendo alguns posts mais focados no lado &#8220;servidor&#8221; do Ubuntu e do Linux em geral. Assim, me junto ao colega André, no qual eu me &#8220;inspirei&#8221; na maior cara dura para este início, por meio do seu [primeiro post][2] 🙂 .

Sou usuário Linux a pelo menos 5 anos, como profissional (por hobby, não lembro). Iniciei com RedHat, logo passando para o Conectiva Linux e nesta me apegando um pouco, sempre usando em servidores. Quando do Conectiva 9 (sofrível) e então do Conectiva 10 (o melhor), migrei também meu desktop para o Linux. Neste meio tempo, já trabalhei com Suse, UnitedLinux, Slackware, Debian, e desde 2005 passei a testar o Ubuntu, adotando este como meu Desktop definitivo quando da versão Ubuntu 6.06 LTS. De lá para cá, tento estudar melhor o Ubuntu Server para migrar os servidores já existentes e também focando em novas soluções.

E é exatamente neste ponto que eu quero focar o meu primeiro post: Ubuntu Server 6.06 LTS.

O que mais chamou a atenção neste lançamento do Ubuntu foi o suporte LTS, garantindo as atualizações por pelo menos 5 anos para servidores. Para Desktop&#8217;s, geralmente, isto não influencia, mas quando falamos de servidores em produção, não é incomum encontrarmos sistemas rodando por anos a fio sem parada, fazendo todas as operações de manutenção &#8220;a quente&#8221;. Além do lado técnico, temos também o lado &#8220;comercial&#8221;: é muito &#8220;mais fácil&#8221; convencer &#8220;aquele&#8221; gerente de TI sobre a solução a ser adotada, se você tiver uma empresa como a Canonical garantindo o suporte.

A instalação segue o padrão do Debian, e é rápido e relativamente simples fazer uma instalação básica. Algumas opções padrão do instalador também são uma mão na roda, como as partições LVM e a opção LAMP para servidores Web. Para instalações de muitos servidores, ou de instalações automatizadas (útil para clientes distantes), a opção existe e está lá, mas tive a opinião pessoal que o processo não está ainda muito bem documentado, dificultando a utilização deste recurso.

Caso desejado, pode se optar pela instalação onde o conjunto de pacotes instalados é minimalista, apenas o suficiente para entrar na rede e mais um pouco, opção na medida para instalar um servidor desde o início. Nenhuma porta está aberta no desde o primeiro boot, sendo uma preocupação a menos. Porém, uma característica talvez indesejada é que ele vai abrindo as portas automaticamente conforme você instala os pacotes.

Em alguns testes, notei que é fácil e rápido levantar um servidor de E-mail, um servidor Web, ou de aplicações de Intranet (Samba, Nfs, Cups, etc). Em 10 minutos, todos os pacotes já estavam rodando, com uma configuração inicial satisfatória e bem fechada. Porém, a customização de certos parâmetros &#8220;fora do usual&#8221;, se mostraram um pouco difíceis, visto que o sistema não ajuda em nada a localizar as opções ou os arquivos de configuração, e quando estes se encontram facilmente, estão sub-divididos em várias partes não muito bem documentadas. Isto pode ter sido apenas um efeito inicial, por eu ainda não estar acostumado com a estrutura do mesmo, mas acredito que poderia ser dado neste detalhe (estrutura e documentação) a mesma atenção dispensada à interface gráfica, de maneira a ter um &#8220;melhor acabamento&#8221; (e aqui não estou falando de beleza).

Após estas impressões iniciais, a conclusão: em geral, o Ubuntu Server 6.06LTS provê um bom ponto de partida para a construção de servidores, mas só. Você deve saber o que está fazendo (mas se você está fazendo um SERVIDOR, se pressupõe que você saiba), e o conjunto de software incluídos nos repositórios padrão é de uma gama incrível, faltando apenas um ou outro pacote, mas que se encontra nos repositórios universais. Acredito que com o maior uso que a distribuição já está tendo, e seguindo este caminho, é apenas questão de tempo até as empresas começarem a homologar serviços para esta distribuição (alô, Oracle?). Em breve, colocarei minhas impressões sobre outras versões do Ubuntu, como elas melhoraram (ou não), e também detalhando mais os testes de acordo com cada área e serviço.

 [1]: http://www.fuzzer.com.br/ubuntero/?p=176
 [2]: http://www.fuzzer.com.br/ubuntero/?p=175