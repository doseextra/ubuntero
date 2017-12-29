---
title: Review – Notebook Dell Inspiron 14R com Ubuntu pré-instalado de fábrica
author: Ivan Brasil Fuzzer
type: post
date: 2013-09-30T13:01:59+00:00
url: /review-notebook-dell-inspiron-14r-com-ubuntu-pre-instalado-de-fabrica/
burl:
  - http://ads.tt/DZCB
  - http://ads.tt/DZCB
categories:
  - Ubuntu
tags:
  - 14R
  - Dell
  - inspiron
  - Linux
  - Ubuntu

---
**Artigo enviado por Jonathan** 

É chato, iniciar um artigo com alguma desculpa, mas não escrevi o artigo antes por problemas pessoais. Cheguei a gravar todo processo, mas por usar uma webcam o áudio ficou horrível, tentei instalar um editor de vídeo para tentar resolver, o que não ajudou, daí a iniciativa de escrever o texto. Quando estava pesquisando sobre este notebook [Inspiron 14R][1], não encontrei muita informação a não ser a do próprio site da Dell, motivando a escrever o artigo pensando em outros usuários que pretendam adquirir uma dessas máquinas. Bem vamos ao que interessa&#8230;

<p style="text-align: center;">
  <a href="http://www.ubuntero.com.br/wp-content/uploads/2013/09/inspiron-14r-1.png"><img class="alignnone size-medium wp-image-6074" alt="inspiron-14r-1" src="http://www.ubuntero.com.br/wp-content/uploads/2013/09/inspiron-14r-1-300x147.png" width="300" height="147" /></a>
</p>

Já na próxima imagem você confere como ele vem bem protegido de fábrica, gostei desse cuidado, o notebook vir com essas bolsas de ar como ocorre com cartuchos do tipo toner.

<p style="text-align: center;">
  <a href="http://www.ubuntero.com.br/wp-content/uploads/2013/09/inspiron-14r-2.png"><img class="alignnone size-medium wp-image-6075" alt="inspiron-14r-2" src="http://www.ubuntero.com.br/wp-content/uploads/2013/09/inspiron-14r-2-300x147.png" width="300" height="147" /></a>
</p>

Dentro do conteúdo da caixa o que vem é bem simples. Apenas manuais, notebook e a fonte de alimentação.

<p style="text-align: center;">
  <a href="http://www.ubuntero.com.br/wp-content/uploads/2013/09/inspiron-14r-3.png"><img class="alignnone size-medium wp-image-6076" alt="inspiron-14r-3" src="http://www.ubuntero.com.br/wp-content/uploads/2013/09/inspiron-14r-3-300x147.png" width="300" height="147" /></a> <a href="http://www.ubuntero.com.br/wp-content/uploads/2013/09/inspiron-14r-4.png"><img class="alignnone size-medium wp-image-6077" alt="inspiron-14r-4" src="http://www.ubuntero.com.br/wp-content/uploads/2013/09/inspiron-14r-4-300x147.png" width="300" height="147" /></a>
</p>

Quem ainda não viu o notebook com Ubuntu pré-instalado, vai curtir estes pequenos cuidados que a Dell teve, como o selo que indica que o sistema é o Linux, super bacana.

<p style="text-align: center;">
  <a href="http://www.ubuntero.com.br/wp-content/uploads/2013/09/inspiron-14r-5.png"><img class="alignnone size-medium wp-image-6078" alt="inspiron-14r-5" src="http://www.ubuntero.com.br/wp-content/uploads/2013/09/inspiron-14r-5-300x147.png" width="300" height="147" /></a>
</p>

Ao ligar o notebook pela primeira vez, nós realizamos a instalação do sistema. Surge uma tela com um pequeno vídeo levando a entender o que encontraremos no sistema. Depois dessa introdução começa realmente a instalação do sistema, algo comum para quem já instalou o Ubuntu alguma vez com configuração de idioma etc&#8230;

<p style="text-align: center;">
  <a href="http://www.ubuntero.com.br/wp-content/uploads/2013/09/inspiron-14r-6.png"><img class="alignnone size-medium wp-image-6079" alt="inspiron-14r-6" src="http://www.ubuntero.com.br/wp-content/uploads/2013/09/inspiron-14r-6-300x147.png" width="300" height="147" /></a>
</p>

Nessa próxima imagem vocês conferem como ficou a configuração do sistema. O sistema vem de fábrica com o Ubuntu precise 12.04, foi a distribuição de longo suporte que a Dell adotou para seus notebooks com Linux, no meu entender uma decisão bem acertada. Todavia devo destacar que o sistema precisa ser atualizado, recordo que logo de início foram necessários baixar pouco mais de 500mb de atualização. Não compreendi o motivo da Dell, não trazer uma imagem mais atualizada do 12.04, atualmente na 12.04.3. A consequência imediata é ter vários programas desatualizados como o libreoffice que estava na versão 3.4.

<p style="text-align: center;">
  <a href="http://www.ubuntero.com.br/wp-content/uploads/2013/09/inspiron-14r-7.png"><img class="alignnone size-medium wp-image-6080" alt="inspiron-14r-7" src="http://www.ubuntero.com.br/wp-content/uploads/2013/09/inspiron-14r-7-300x147.png" width="300" height="147" /></a>
</p>

O sistema tem um boot, bem rápido cerca de 10s à 9s. Muito rápido para abrir programas(óbvio que tem a influência de outros fatores).

Escolhi o Dell [Inspiron 14R][1] de melhor configuração:

  * Core i5 de terceira geração
  * 6 giga de RAM DDR3
  * hd de 1 terabyte
  * placa de video NVIDIA 730m de 2 giga de RAM

Tem algo que devo comentar em maior detalhe, sobre a placa dedicada da NVIDIA, escolhi o notebook por ele vir com ela, pouco depois soube de alguns problemas envolvendo o uso de placas híbridas de vídeo. A placa não tem um driver específico para ela no Linux, devido a tecnologia optimus, olhe o [link][2] . O que fiz foi usar a alternativa chamada bumblebee, para poder economizar bateria, pois antes dela o note esquentava muito rapidamente, já que não conseguia identificar em que momento ativar a placa, o que resolveu a questão.

Não adquiri o notebook para jogar, mas se tivesse vontade, que fosse no mínimo com uma configuração razoável. Tinha imaginado o uso da placa com o programa Blender 3d que utilizo, para fazer coisas mais básicas. Quem mexe com programas 3d deve entender o que estou falando. Como esperamos saber a bateria do notebook tem maior desgaste conforme o uso do sistema. Daí a solução bumblebee e outras aliadas para aumentar o tempo de duração da bateria, caso não tivesse uma tomada próxima. Para se ter uma ideia a bateria na configuração original durava cerca de 4 horas e com as alterações saltou para 7 horas aproximadamente. Esse foi um dos motivos que posteriormente me fizeram quase arrepender de ter comprado com a placa da NVIDIA. Porém para a felicidade geral de todos, a NVIDIA [divulgou recentemente][3] que pretende melhor esse problema.

Para concluir, outra coisa que não gostei muito foi como o sistema veio particionado, acredito que poderia vir com uma partição /home separada, o que não ocorre, ela é útil pois numa futura atualização do sistema você pode manter seus arquivos, apenas atualizando a distribuição sem ter todo esforço de fazer vários backups. No mais o notebook é muito bom, depois das atualizações e pequenos ajustes a máquina ficou ótima. Espero que as informações aqui, possam ter ajudado.

Gostou do review do notebook? Compre por [este link][1] e ajude o site.

 [1]: http://links.lomadee.com/ls/MXBpQjtjbk45MDBKXzsyNzU1NzE0NTswOzE3NjswOzQ7QlI7MztodHRwJTNBJTJGJTJGd3d3LmRlbGwuY29tJTJGYnIlMkZwJTJGaW5zcGlyb24tMTRyLTU0MjElMkZwZCUzRm9jJTNEaTE0cm1hcTUydWIlMjZtb2RlbF9pZCUzRGluc3Bpcm9uLTE0ci01NDIxOzA-.html
 [2]: http://tibyjeffersonx.blogspot.com.br/2013/08/instalando-e-configurando-steam.html
 [3]: http://br-linux.org/2013/01/meia-volta-nvidia-vai-colaborar-com-desenvolvedores-do-driver-open-source-e-disponibilizar-documentacao-de-suas-gpus.html