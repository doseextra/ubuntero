---
title: Beagle Search
author: Ivan Brasil Fuzzer
type: post
date: 2006-07-07T03:34:19+00:00
url: /beagle-search/
burl:
  - http://ads.tt/40FW
  - http://ads.tt/40FW
categories:
  - Ubuntu
tags:
  - .net
  - beagle
  - google desktop
  - indexar arquivos
  - Linux
  - mono
  - Ubuntu

---
Não quero deixar o blog parado mas como isso é inevitável neste final de semana vou &#8220;plagiar&#8221; um post do meu amigo <a title="Mundo Andre" href="http://mundoandre.blogspot.com/" target="_blank">Andre</a>.

Hoje vou falar sobre o Beagle, aplicativo que permite fazer buscas em seu computador sem a necessidade de varrer todo o HD toda vez que se quer procurar alguma coisa.

A idéia do Beagle é a mesma do Google Desktop. O Beagle indexa os arquivos, emails, histórico do navegador e tudo que você tem no computador que pode ser identificado por alguma palavra. Com esses índices prontos, não é necessário sair varrendo o HD toda vez que se quer procurar alguma coisa pois tudo já está pronto esperando por ser procurado, como em um banco de dados.

A instalação padrão do Ubuntu não traz o Beagle instalado mas os pacotes estão disponíveis nos repositórios. Não vou passar comandos de shell para que você instale o Beagle. Já que inventaram o Synaptic, não custa nada abrir ele e clicar no botão de procurar e fazer a busca pelo pacote. Assim é muito mais simples e intuitivo.

Para rodar o daemon de indexação do beagle, entre no terminal e digite como usuário nomal, não use o root.

$ beagled

O deamon irá gerar um log com o progresso da indexação em ~/.beagle/Log.

Seguindo os passos que encontrei no site do Beagle, descobri algo que me surpreendeu. Ao executar o comando:

$ beagled &#8211;fg &#8211;debug &#8211;replace

As primeiras linhas de resultado me reportaram o seguinte:

$ Debug: Starting Beagle Daemon (version 0.2.6)
  
$ Debug: Running on Mono 1.1.13.6

Traduzindo: o Beagle é feito em .Net. Mais precisamente em Mono.

Isso acima foi só uma curiosidade. Voltando ao Beagle, agora você deve estar se perguntando como começar a indexação? A indexação começou no momento em que foi digitado o comando &#8220;beagled&#8221;. Por padrão, tudo será indexado em seu computador. Como você pode não gostar desta idéia, existe uma interface de indexação &#8220;beagle-settings&#8221; para que você posso escolher o que deve e não deve ser indexado.

A indexação será feita aos poucos sem nenhuma interferência no que você estiver fazendo. Quando o processador estiver &#8220;vago&#8221; o beagle aproveita o tempo para fazer o seu trabalho. Existe a opção de forçar a indexação completa do seu computador(isso consome bastante recursos). Para forçar a indexação, depois de rodar o beagle, execute o seguinde comando no terminal:

$ export BEAGLE\_EXERCISE\_THE_DOG=1

Existe também a possibilidade de gerar índices estáticos. Estes índices podem ser feitos para dados que não são modificados com frequência como partições NTFS e FAT32. Não vou entrar em detalhes sobre isso.

Depois desse monte de configuração que não deve ter sido interessante para muita gente(até parece que o blog é super visitado) , vamos utilizar de verdade o Beagle. Pelo menos no meu Ubuntu não foi criado nenhum atalho no menu para facilitar a inicialização do programa. Para iniciar o Beagle Search pressione Alt+F2 e digite o comando &#8220;beagle-search&#8221;. Pronto, agora você pode começar suas buscas com muito mais eficiência.

Antes que eu me esqueça, existe um plugin do Beagle para o firefox que pode ser encontrado em <a title="Firefox Extension" href="http://beagle-project.org/Firefox_Extension" target="_blank">http://beagle-project.org/Firefox_Extension</a>.
  
Para quem não tinha o que escrever acho que já escrevi muito por hoje. Abaixo seguem as tradicionais screenshots, dessa vez do Beagle Search.

&nbsp;

<div style="text-align: center;">
  <a class="imagelink" title="Beagle Search" href="http://fuzzer.com.br/ubuntero/wp-content/uploads/2006/07/Desktop%20Search.png"><img id="image20" alt="Beagle Search" src="http://fuzzer.com.br/ubuntero/wp-content/uploads/2006/07/Desktop%20Search.thumbnail.png" /></a><a class="imagelink" title="Beagle Search 1" href="http://fuzzer.com.br/ubuntero/wp-content/uploads/2006/07/Desktop%20Search%201.png"><img id="image23" alt="Beagle Search 1" src="http://fuzzer.com.br/ubuntero/wp-content/uploads/2006/07/Desktop%20Search%201.thumbnail.png" /></a>
</div>