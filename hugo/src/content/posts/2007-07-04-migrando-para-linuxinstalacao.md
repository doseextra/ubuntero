---
title: Migrando para Linux(Instalação)
author: Ivan Brasil Fuzzer
type: post
date: 2007-07-04T19:46:24+00:00
url: /migrando-para-linuxinstalacao/
burl:
  - http://ads.tt/1YK4
  - http://ads.tt/1YK4
categories:
  - Ubuntu

---
  * _Os passos para instalação da versão 7.10 continuam os mesmos deste tutorial._

Dando continuidade a série de artigos sobre migração de Windows para Linux, vamos agora fazer a preparação e instalação do sistema. Eu recomendo que a instalação seja feita por alguém que já tem conhecimento para isso. Se você julga ter este conhecimento então vá em frente. Caso se sinta meio inseguro, procure alguém que já tenha feito a instalação, pode entrar em contato comigo se morar em Erechim, para garantir o sucesso na instalação.

Porque estou recomendando que a instalação seja feita por alguém experiente? Porque este processo envolve backup e particionamento de disco e estas coisas não são muito conhecidas por usuários mais leigos.

Então vamos por a mão na massa. Em primeiro lugar você deve decidir se fará um tratamento de choque ou irá tomar doses homeopáticas de linux.

Independente da escolha, pelo tratamento de choque ou pelas doses homeopáticas, faça uma cópia de todos os arquivos que julgue importantes, isso inclui suas músicas e fotos. Essa cópia pode ser em outro disco rígido ou em CD&#8217;s e DVD&#8217;s. Feita a cópia de segurança de seus arquivos, vamos então obter uma cópia do CD de instalação do Ubuntu. Para obter uma cópia exitem três maneiras diferentes. A primeira é fazer o download da imagem ISO neste [link][1] e gravar em um CD. A segunda é pedindo uma cópia para alguém, algumas pessoas, como eu, possuem cópias para distribuição gratuita e também imagens para gravação de CD&#8217;s. Para usufruir da última maneira você deve parar para pensar um pouco, pois você fará um pedido para que a Canonical, empresa que mantém comercialmente o Ubuntu, mande para você gratuitamente algumas cópias dos CD&#8217;s de instalação. Para fazer o pedido entre no site [shipit][2], se cadastre e faça seu pedido. O site é todo em inglês. Volto a repetir, só peça os CD&#8217;s se não tiver como baixar a imagem ou pedir para que alguém baixe e grave para você.

Depois de obter sua cópia do Ubuntu você precisará alterar a sequência de boot na bios do seu computador. Para entrar nas configurações da bios fique apertando a tecla Del durante a inicialização do computador. O próximo passo não posso ajudar com muita exatidão, pois as bios não seguem um padrão. Você deve procurar por uma opção de sequencia de boot e deixar o CD em primeiro lugar. Depois de encontrar e efetuar esta configuração saia da bios salvando as alterações. Com o CD do Ubuntu dentro do drive espere até que a tela abaixo apareça em sua tela.

<center>
  <a href='http://www.ubuntero.com.br/wp-content/uploads/2007/05/tela-0.jpg' title='tela-0.jpg'><img src='http://www.ubuntero.com.br/wp-content/uploads/2007/05/tela-0.thumbnail.jpg' alt='tela-0.jpg' /></a>
</center>

Minha primeira recomendação é que nesta tela seja pressionada a tecla &#8220;F2&#8221; para que seja feita a escolha do idioma. Navegue com o teclado até a opção &#8220;Português do Brasil&#8221; como na figura abaixo.

<center>
  <a href='http://www.ubuntero.com.br/wp-content/uploads/2007/05/tela-1.png' title='tela-1.png'><img src='http://www.ubuntero.com.br/wp-content/uploads/2007/05/tela-1.thumbnail.png' alt='tela-1.png' /></a>
</center>

Feito isto, seu menu deve mudar para o português do Brasil e ficar como está na figura abaixo. A opção de iniciar o Ubuntu fica marcada como padrão então você deve apenas pressiona &#8220;Enter&#8221; para começar o carregamento. Este processo demora um pouco porque o Ubuntu estará rodando diretamente pelo CD que está no drive.

<center>
  <a href='http://www.ubuntero.com.br/wp-content/uploads/2007/05/tela-2.png' title='tela-2.png'><img src='http://www.ubuntero.com.br/wp-content/uploads/2007/05/tela-2.thumbnail.png' alt='tela-2.png' /></a>
</center>

Você terá que esperar um tempo até ter uma tela como esta logo abaixo. Esta tela terá dois ícones no desktop. Em um dos ícones, &#8220;Exemples&#8221;, você terá alguns arquivos que não nos interessa explorar agora, e no outro ícone, &#8220;Instalar o sistema no computador&#8221;, você poderá começar o processo de instalação.

<center>
  <a href='http://www.ubuntero.com.br/wp-content/uploads/2007/05/tela-3.png' title='tela-3.png'><img src='http://www.ubuntero.com.br/wp-content/uploads/2007/05/tela-3.thumbnail.png' alt='tela-3.png' /></a>
</center>

Na próxima tela vamos começar de fato com a instalação do Ubuntu. O primeiro passo é selecionar o idioma no qual o sistema será instalado. Neste tutorial já fizemos a seleção do idioma na primeira tela do CD. Esta opção está disponível caso você queira alterar o idioma escolhido na inicialização ou caso não tenha escolhido um. Se você selecionou o idioma &#8220;Português do Brasil&#8221; na primeira tela, nada precisa ser mudado agora, basta clicar no botão &#8220;Avançar&#8221;.

<center>
  <a href='http://www.fuzzer.com.br/ubuntero/wp-content/uploads/2007/07/tela-4.png' title='Migrando para Linux(Instalação)'><img src='http://www.fuzzer.com.br/ubuntero/wp-content/uploads/2007/07/tela-4.thumbnail.png' alt='Migrando para Linux(Instalação)' /></a>
</center>

Na próxima tela será feita a configuração do fuso horário. Você pode escolher o fuso horário mais adequado ao local onde você mora, no meu caso é o fuso de São Paulo. A seleção do fuso pode ser feita clicando nos pontos do mapa ou na caixa de seleção que diz &#8220;Fuso horário&#8221;.

<center>
  <a href='http://www.fuzzer.com.br/ubuntero/wp-content/uploads/2007/07/tela-5.png' title='Migrando para Linux(Instalação)'><img src='http://www.fuzzer.com.br/ubuntero/wp-content/uploads/2007/07/tela-5.thumbnail.png' alt='Migrando para Linux(Instalação)' /></a>
</center>

Na tela seguinte você deve escolher o layout do seu teclado. É extremamente recomendável que você teste teclas como ç , . ; ? / \ | [ ] { } para ter certeza de que escolheu o layout correto. Clique em avançar e vá para o próximo passo.

<center>
  <a href='http://www.fuzzer.com.br/ubuntero/wp-content/uploads/2007/07/tela-6.png' title='Migrando para Linux(Instalação)'><img src='http://www.fuzzer.com.br/ubuntero/wp-content/uploads/2007/07/tela-6.thumbnail.png' alt='Migrando para Linux(Instalação)' /></a>
</center>

A seguinte tela irá aparecer até o carregamento do particionador de disco.

<center>
  <a href='http://www.fuzzer.com.br/ubuntero/wp-content/uploads/2007/07/tela-7.png' title='Migrando para Linux(Instalação)'><img src='http://www.fuzzer.com.br/ubuntero/wp-content/uploads/2007/07/tela-7.thumbnail.png' alt='Migrando para Linux(Instalação)' /></a>
</center>

Este é o passo mais temido e mais crítico da instalação. Eu estou demonstrando como fazer uma instalação onde apenas o Ubuntu será instalado. Não descreverei como fazer a instalação para um dual boot com o Windows principalmente porque este sistema operacional não é o alvo do blog e por ter grandes chances de algo sair errado se o usuário não souber o que está fazendo. Então faça como na próxima janela e selecione a opção &#8220;Assistido &#8211; usar o disco inteiro&#8221; e clique em &#8220;Avançar&#8221;.

<center>
  <a href='http://www.fuzzer.com.br/ubuntero/wp-content/uploads/2007/07/tela-8.png' title='Migrando para Linux(Instalação)'><img src='http://www.fuzzer.com.br/ubuntero/wp-content/uploads/2007/07/tela-8.thumbnail.png' alt='Migrando para Linux(Instalação)' /></a>
</center>

A próxima janela mostra uma novidade da versão 7.04. Agora é possível migrar configurações de uma conta do Microsoft Windows caso ele esteja instalado na máquina. Utilizei ela em algumas máquinas durante o FLISOL e funcionou perfeitamente. Clique novamente em &#8220;Avançar&#8221; e vá para a próxima tela.

<center>
  <a href='http://www.fuzzer.com.br/ubuntero/wp-content/uploads/2007/07/tela-9.png' title='Migrando para Linux(Instalação)'><img src='http://www.fuzzer.com.br/ubuntero/wp-content/uploads/2007/07/tela-9.thumbnail.png' alt='Migrando para Linux(Instalação)' /></a>
</center>

Nesta tela você irá identificar o principal usuário deste computador. Este usuário terá acesso a tarefas administrativas através do comando &#8220;sudo&#8221; no terminal e &#8220;gksu&#8221; no modo gráfico. A senha atribuída para este usuário é de extrema importância devido a ser a mesma senha pedida ao executar qualquer tarefa administrativa. Clique em &#8220;Avançar&#8221; novamente.

<center>
  <a href='http://www.fuzzer.com.br/ubuntero/wp-content/uploads/2007/07/tela-10.png' title='Migrando para Linux(Instalação)'><img src='http://www.fuzzer.com.br/ubuntero/wp-content/uploads/2007/07/tela-10.thumbnail.png' alt='Migrando para Linux(Instalação)' /></a>
</center>

<center>
  <a href='http://www.fuzzer.com.br/ubuntero/wp-content/uploads/2007/07/tela-11.png' title='Migrando para Linux(Instalação)'><img src='http://www.fuzzer.com.br/ubuntero/wp-content/uploads/2007/07/tela-11.thumbnail.png' alt='Migrando para Linux(Instalação)' /></a>
</center>

Na janela abaixo é mostrado um resumo de tudo que será feito na sua máquina. Leia com atenção os dados contidos nesta tela e se tudo estiver como desejado clique no botão &#8220;Advanced&#8221;.

<center>
  <a href='http://www.fuzzer.com.br/ubuntero/wp-content/uploads/2007/07/tela-12.png' title='Migrando para Linux(Instalação)'><img src='http://www.fuzzer.com.br/ubuntero/wp-content/uploads/2007/07/tela-12.thumbnail.png' alt='Migrando para Linux(Instalação)' /></a>
</center>

O passo anterior não é obrigatório mas é recomendável. Nesta pequena janela que aparece, selecione a opção &#8220;Participate in the package usage survey?&#8221; e pressione o botão &#8220;OK&#8221;. Com isso você estará colaborando com a pesquisa de popularidade de pacotes instalados. É com essa pesquisa que a Canonical decide onde irá concentrar os esforços de desenvolvimento de novas aplicações e melhoramentos em programas para a próxima versão. O próximo e último passo antes do começo da instalação própriamente dita é clicar no botão &#8220;Instalar&#8221;.

<center>
  <a href='http://www.fuzzer.com.br/ubuntero/wp-content/uploads/2007/07/tela-13.png' title='Migrando para Linux(Instalação)'><img src='http://www.fuzzer.com.br/ubuntero/wp-content/uploads/2007/07/tela-13.thumbnail.png' alt='Migrando para Linux(Instalação)' /></a>
</center>

A instalação será iniciad e você verá uma tela parecida com esta abaixo onde todos os passos da instalação serão descritos e uma porcentagem do andamento da instalação será mostrada.

<center>
  <a href='http://www.fuzzer.com.br/ubuntero/wp-content/uploads/2007/07/tela-14.png' title='Migrando para Linux(Instalação)'><img src='http://www.fuzzer.com.br/ubuntero/wp-content/uploads/2007/07/tela-14.thumbnail.png' alt='Migrando para Linux(Instalação)' /></a>
</center>

Quando a instalação terminar você verá a tela a seguir.

<center>
  <a href='http://www.fuzzer.com.br/ubuntero/wp-content/uploads/2007/07/tela-15.png' title='Migrando para Linux(Instalação)'><img src='http://www.fuzzer.com.br/ubuntero/wp-content/uploads/2007/07/tela-15.thumbnail.png' alt='Migrando para Linux(Instalação)' /></a>
</center>

Agora você pode escolher reiniciar o sistema e começar a trabalhar diretamente do sistema instalado no seu disco ou continuar utilizando o sistema pelo liveCD. Se escolher continuar utilizando o liveCD é bom lembrar que as alterações e arquivos alterados não afetarão o sistema instalado no disco e terão que ser refeitas quando passar a utilizar o sistema instalado. Para seguir com o tutorial escolha reiniciar a opção &#8220;Reiniciar agora&#8221;. Não esqueça de tirar o CD do drive quando for pedido.

Ao reiniciar o sistema você verá uma tela, como a que segue logo abaixo, onde deverá entrar primeiramente com um nome de usuário(o nome que você especificou durante a instalação) e logo após a senha(também informada durante a instalação). Digite os dados e pressione enter para ir para a próxima tela.

<center>
  <a href='http://www.fuzzer.com.br/ubuntero/wp-content/uploads/2007/07/tela-16.png' title='Migrando para Linux(Instalação)'><img src='http://www.fuzzer.com.br/ubuntero/wp-content/uploads/2007/07/tela-16.thumbnail.png' alt='Migrando para Linux(Instalação)' /></a>&nbsp;&nbsp;<a href='http://www.fuzzer.com.br/ubuntero/wp-content/uploads/2007/07/tela-17.png' title='Migrando para Linux(Instalação)'><img src='http://www.fuzzer.com.br/ubuntero/wp-content/uploads/2007/07/tela-17.thumbnail.png' alt='Migrando para Linux(Instalação)' /></a>
</center>

Com isso você estará dentro do seu Ubuntu e, se estiver conectado a internet, receberá uma notificação de que existem atualizações para serem feitas. Diferentemente do Windows que você está acostumado, com software livre, principalmente Ubuntu, assim que um problema de software é detectado e corrigido, a correção estará disponível para download. A idéia de segurança do Linux se deve também a isso. Você fica com seu programa vulnerável durante o mínimo de tempo possível.

Para começar a baixar e instalar as atualizações disponíveis clique uma vez no ícone laranja que fica na parte superior direita da sua tela.

<center>
  <a href='http://www.fuzzer.com.br/ubuntero/wp-content/uploads/2007/07/tela-18.png' title='Migrando para Linux(Instalação)'><img src='http://www.fuzzer.com.br/ubuntero/wp-content/uploads/2007/07/tela-18.thumbnail.png' alt='Migrando para Linux(Instalação)' /></a>
</center>

O &#8220;Gerenciador de Atualizações&#8221; será aberto e listará todos os pacotes disponíveis para atualização juntamente com o tamanho total do download necessário. Clique em &#8220;Instalar Atualizações&#8221;.

<center>
  <a href='http://www.fuzzer.com.br/ubuntero/wp-content/uploads/2007/07/tela-19.png' title='Migrando para Linux(Instalação)'><img src='http://www.fuzzer.com.br/ubuntero/wp-content/uploads/2007/07/tela-19.thumbnail.png' alt='Migrando para Linux(Instalação)' /></a>
</center>

Uma tela será mostrada pedindo a senha para tarefas administrativa. Digite a senha do usuário criado durante a instalação. O Ubuntu reconhece que o primeiro usuário criado tem privilégios de administrador do sistema por ter sido ele quem instalou o mesmo.

<center>
  <a href='http://www.fuzzer.com.br/ubuntero/wp-content/uploads/2007/07/tela-20.png' title='Migrando para Linux(Instalação)'><img src='http://www.fuzzer.com.br/ubuntero/wp-content/uploads/2007/07/tela-20.thumbnail.png' alt='Migrando para Linux(Instalação)' /></a>
</center>

Enquanto os pacotes de atualizações são baixados e atualizados você verá esta tela.

<center>
  <a href='http://www.fuzzer.com.br/ubuntero/wp-content/uploads/2007/07/tela-21.png' title='Migrando para Linux(Instalação)'><img src='http://www.fuzzer.com.br/ubuntero/wp-content/uploads/2007/07/tela-21.thumbnail.png' alt='Migrando para Linux(Instalação)' /></a>
</center>

Quando as atualizações acabarem de ser instaladas você netão verá uma janela informando o final da instalação onde você simplesmente deverá cliar em fechar e logo após clicar feche a janela que estava aberta anteriormente.

<center>
  <a href='http://www.fuzzer.com.br/ubuntero/wp-content/uploads/2007/07/tela-22.png' title='Migrando para Linux(Instalação)'><img src='http://www.fuzzer.com.br/ubuntero/wp-content/uploads/2007/07/tela-22.thumbnail.png' alt='Migrando para Linux(Instalação)' /></a>&nbsp;&nbsp;<a href='http://www.fuzzer.com.br/ubuntero/wp-content/uploads/2007/07/tela-23.png' title='Migrando para Linux(Instalação)'><img src='http://www.fuzzer.com.br/ubuntero/wp-content/uploads/2007/07/tela-23.thumbnail.png' alt='Migrando para Linux(Instalação)' /></a>
</center>

Após fazer a atualização pode ser necessário reiniciar o computador para que todas as alterações tenham efeito, principalmente se o Kernel for atualizado. Isto pode ser feito pelo menu &#8220;Sistema -> Sair&#8221; ou no ícone vermelho no canto superior direito da sua tela.

Espero que este tutorial seja de grande utilidade para você. Tentei expor todos os detalhes da instalação do Ubuntu, incluindo os passos triviais, para que o mínimo possível de dúvidas permanecessem em sua cabeça. Caso ainda fique alguma dúvida, não exite em deixá-la registrada nos comentários do artigo que farei o possível para responder.

Nos próximos artigos desta série irei começar a falar sobre alguns programas que substituirão os programas usados no Windows. Até a próxima.

Artigos relacionados

  * [Migrando para Linux(Email)][3]
  * [Migrando para Linux(Gerenciador de arquivos)][4]
  * [Migrando para Linux(Messenger)][5]
  * [Migrando para Linux(Instalando programas parte 3)][6]
  * [Migrando para Linux(Instalando programas parte 2)][7]
  * [Migrando para Linux(Instalando programas)][8]<li
[>Migrando para Linux][9]</li>

 [1]: http://releases.ubuntu.com/feisty/ubuntu-7.04-desktop-i386.iso
 [2]: https://shipit.ubuntu.com/
 [3]: http://www.ubuntero.com.br/?p=185
 [4]: http://www.ubuntero.com.br/?p=383
 [5]: http://www.ubuntero.com.br/?p=183
 [6]: http://www.ubuntero.com.br/?p=330
 [7]: http://www.ubuntero.com.br/?p=318
 [8]: http://www.ubuntero.com.br/?p=186
 [9]: http://www.ubuntero.com.br/?p=203