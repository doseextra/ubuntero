---
title: Recupere arquivos e até partições com o TestDisk
author: Ivan Brasil Fuzzer
type: post
date: 2013-04-18T02:10:42+00:00
url: /recupere-arquivos-e-ate-particoes-com-o-testdisk/
burl:
  - http://ads.tt/2JKX
  - http://ads.tt/2JKX
  - http://ads.tt/2JKX
  - http://ads.tt/2JKX
  - http://ads.tt/2JKX
  - http://ads.tt/2JKX
  - http://ads.tt/2JKX
  - http://ads.tt/2JKX
  - http://ads.tt/2JKX
  - http://ads.tt/2JKX
  - http://ads.tt/2JKX
  - http://ads.tt/2JKX
  - http://ads.tt/2JKX
  - http://ads.tt/2JKX
  - http://ads.tt/2JKX
  - http://ads.tt/2JKX
  - http://ads.tt/2JKX
  - http://ads.tt/2JKX
  - http://ads.tt/2JKX
  - http://ads.tt/2JKX
  - http://ads.tt/2JKX
  - http://ads.tt/2JKX
  - http://ads.tt/2JKX
  - http://ads.tt/2JKX
  - http://ads.tt/2JKX
  - http://ads.tt/2JKX
  - http://ads.tt/2JKX
  - http://ads.tt/2JKX
  - http://ads.tt/2JKX
categories:
  - Ubuntu
tags:
  - hd
  - Linux
  - partição
  - recuperação
  - testdisk
  - Ubuntu

---
Você está instalando o **Ubuntu** e seleciona uma partição, escolhe um tipo de sistema de arquivos e marca para formatar. Começa o processo de instalação do sistema e você lembra que aquela não era a partição que você queria formatar. Alguns palavrões passam pela cabeça, outros são ditos mas o que prevalece é o desespero ao lembrar dos arquivos que você perdeu. Calma, não se apavore. Assim que terminar sua instalação, volte ao seu live CD ou pendrive, ou ainda plugue o HD em outro computador com Ubuntu e comece a restauração com o programa **TestDisk**.

O programa **TestDisk**, embora o nome não seja muito bom, é capaz de **restaurar partições formatadas** até mais de uma vez, eu mesmo já reparei uma partição depois de o HD ser formatado 3 vezes, claro que não garanto que isso vá ser feito sempre.

O programa pode ser instalado via **Central de programas do Ubuntu** habilitando o  **Repositório Universe**. Abra a Central de programas do Ubuntu, pode ser via live CD ou outra mídia live, vá no menu `Editar` e em **Canais de software**.

<p style="text-align: center;">
  <a href="http://www.ubuntero.com.br/wp-content/uploads/2013/04/canais-de-software.png" rel="lightbox"><img class="alignnone size-thumbnail wp-image-5149" title="Canais de Software do Ubuntu" alt="Canais de Software do Ubuntu" src="http://www.ubuntero.com.br/wp-content/uploads/2013/04/canais-de-software-150x101.png" width="150" height="101" /></a> <a href="http://www.ubuntero.com.br/wp-content/uploads/2013/04/universe.png" rel="lightbox"><img class="alignnone size-thumbnail wp-image-5150" title="Repositório Universe Ubuntu" alt="Repositório Universe Ubuntu" src="http://www.ubuntero.com.br/wp-content/uploads/2013/04/universe-150x80.png" width="150" height="80" /></a>
</p>

Depois que os repositórios forem atualizados, procure por **TestDisk** e faça a instalação clicando no botão instalar.

<p style="text-align: center;">
  <a href="http://www.ubuntero.com.br/wp-content/uploads/2013/04/testdisk.png" rel="lightbox"><img class="alignnone size-thumbnail wp-image-5151" title="testdisk via Central de Programas" alt="testdisk via Central de Programas" src="http://www.ubuntero.com.br/wp-content/uploads/2013/04/testdisk-150x103.png" width="150" height="103" /></a>
</p>

A utilização do programa é toda por linha de comando e exige atenção e conhecimento do conteúdo a ser recuperado. Para começar o trabalho, abra o terminal pressionando `Ctrl+Alt+T` e digite o comando:

<pre class="brush:shell">sudo testdisk</pre>

A primeira tela se refere ao log do que vai ser feito no programa, eu costumo selecionar a primeira opção que é &#8220;Create&#8221; para criar um novo log.

<p style="text-align: center;">
  <a href="http://www.ubuntero.com.br/wp-content/uploads/2013/04/testdisk-1.png" rel="lightbox"><img class="alignnone size-thumbnail wp-image-5152" title="testdisk-1" alt="testdisk-1" src="http://www.ubuntero.com.br/wp-content/uploads/2013/04/testdisk-1-150x95.png" width="150" height="95" /></a>
</p>

Selecione qual o disco será o alvo da avaliação e restauração.

<p style="text-align: center;">
  <a href="http://www.ubuntero.com.br/wp-content/uploads/2013/04/testdisk-2.png" rel="lightbox"><img class="size-thumbnail wp-image-5153 alignnone" title="testdisk-2" alt="testdisk-2" src="http://www.ubuntero.com.br/wp-content/uploads/2013/04/testdisk-2-150x95.png" width="150" height="95" /></a>
</p>

Algumas informações podem ser mostradas, pressione Enter para continuar.

<p style="text-align: center;">
  <a href="http://www.ubuntero.com.br/wp-content/uploads/2013/04/testdisk-3.png" rel="lightbox"><img class="alignnone size-thumbnail wp-image-5154" title="testdisk-3" alt="testdisk-3" src="http://www.ubuntero.com.br/wp-content/uploads/2013/04/testdisk-3-150x95.png" width="150" height="95" /></a>
</p>

Selecione o tipo de partições que o programa deve procurar, na maioria dos casos seleciona a primeira opção que é Intel.

<p style="text-align: center;">
  <a href="http://www.ubuntero.com.br/wp-content/uploads/2013/04/testdisk-4.png" rel="lighbox"><img class="alignnone size-thumbnail wp-image-5155" title="testdisk-4" alt="testdisk-4" src="http://www.ubuntero.com.br/wp-content/uploads/2013/04/testdisk-4-150x95.png" width="150" height="95" /></a>
</p>

Agora selecione novamente a opção padrão que neste caso é Analyse.

<p style="text-align: center;">
  <a href="http://www.ubuntero.com.br/wp-content/uploads/2013/04/testdisk-5.png" rel="lightbox"><img class="alignnone size-thumbnail wp-image-5157" title="testdisk-5" alt="testdisk-5" src="http://www.ubuntero.com.br/wp-content/uploads/2013/04/testdisk-5-150x95.png" width="150" height="95" /></a>
</p>

Será mostrada a situação atual do disco com as partições existentes.

<p style="text-align: center;">
  <a href="http://www.ubuntero.com.br/wp-content/uploads/2013/04/testdisk-6.png" rel="lightbox"><img class="alignnone size-thumbnail wp-image-5158" title="testdisk-6" alt="testdisk-6" src="http://www.ubuntero.com.br/wp-content/uploads/2013/04/testdisk-6-150x95.png" width="150" height="95" /></a>
</p>

Se o que você precisa estava na tela anterior, selecione a partição que quer restaurar e aguarde o procedimento, caso contrário pressione Enter para fazer uma busca rápida.

<p style="text-align: center;">
  <a href="http://www.ubuntero.com.br/wp-content/uploads/2013/04/testdisk-7.png" rel="lightbox"><img class="alignnone size-thumbnail wp-image-5159" title="testdisk-7" alt="testdisk-7" src="http://www.ubuntero.com.br/wp-content/uploads/2013/04/testdisk-7-150x95.png" width="150" height="95" /></a>
</p>

Perceba que o programa já encontrou uma antiga instalação do Ubuntu, falo isso porque conheço o HD que está sendo analisado. Agora eu posso restaurar estas partições ou seguir em frente para fazer uma busca mais profunda que é o que vamos fazer. Para isso pressione Enter Uma vez para ir para a próxima tela e mais uma para começar a procura profunda.

<p style="text-align: center;">
  <a href="http://www.ubuntero.com.br/wp-content/uploads/2013/04/testdisk-8.png" rel="lightbox"><img class="alignnone size-thumbnail wp-image-5160" title="testdisk-8" alt="testdisk-8" src="http://www.ubuntero.com.br/wp-content/uploads/2013/04/testdisk-8-150x95.png" width="150" height="95" /></a>
</p>

Agora você aguarda que dependendo do tamanho do HD isto pode demorar bastante.

<p style="text-align: center;">
  <a href="http://www.ubuntero.com.br/wp-content/uploads/2013/04/testdisk-9.png" rel="lighbox"><img class="alignnone size-thumbnail wp-image-5161" title="testdisk-9" alt="testdisk-9" src="http://www.ubuntero.com.br/wp-content/uploads/2013/04/testdisk-9-150x95.png" width="150" height="95" /></a>
</p>

Ao final você verá todas as partições que foram encontradas no disco e poderá restaurar a que for necessária. Agora presta mais atenção quando for formatar um disco 😛