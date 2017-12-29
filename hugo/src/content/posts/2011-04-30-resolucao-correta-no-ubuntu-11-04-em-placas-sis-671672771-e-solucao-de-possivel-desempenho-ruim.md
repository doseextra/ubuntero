---
title: Resolução correta no Ubuntu 11.04 em placas SiS 671/672/771, e solução de possível desempenho ruim
author: Anderson Henrique
type: post
date: 2011-05-01T00:14:15+00:00
url: /resolucao-correta-no-ubuntu-11-04-em-placas-sis-671672771-e-solucao-de-possivel-desempenho-ruim/
categories:
  - Ubuntu
tags:
  - 11.04
  - Linux
  - natty
  - sis
  - sismedia
  - Ubuntu
  - Unity

---
Notícia muito boa aos proprietários de placas SiS que assim como eu, ficaram sem o Unity 3D, mas que não perdem a esperança de um dia conseguir poder utilizar o Compiz em nossos computadores ou notebooks.

Mas antes da solução final, uma pequena história. Na manhã do dia 28 &#8211; quinta-feira &#8211; amanheci com um ar de animação, o novo Ubuntu estava por vir, melhor do que nunca &#8211; sim, sou do time que apoia o Unity. Chequei alguns sites sobre Ubuntu por volta das seis da manhã, e nenhum continha informações sobre a versão atual. Como todas as manhãs de segunda à sexta, me arrumei para ir para a escola, e sete em ponto eu estava lá. Durante o intervalo da 2ª para a 3º aula, peguei me celular para checar se já houvera o lançamento do Ubuntu 11.04 e vi que havia ocorrido.

Chegando em casa, por volta das 11:30, tentei colocar pra baixar, mas como a internet estava muito ruim, esperei pela hora do almoço na casa de minha vó para poder baixar, já que &#8211; é exatamente da casa dela onde redigo esse texto &#8211; aqui a rede é muito boa. Fui almoçar e deixei baixando, quando retornei restavam apenas 2 horas e 40 minutos, então, fui para casa, sai, fui para o reforço de matemática, fui no comércio comprar uns DVDs pra fazer o backup, e quando cheguei na casa de minha avó por volta de cinco da tarde, salvei tudo o que tinha pra salvar e então instalei.

Lá vou eu todo ansioso pra testar o Ubuntu na sua versão final &#8211; venho testando desde o alpha 2 e sabia exatamente o que fazer ao iniciar pela primeira vez. Coloquei o driver sismedia &#8211; que mostrarei como fazer daqui a pouco &#8211; mas encontrei um grande problema, o sistema estava muito lento, quase impossível de utilizar, mas aí encontrei a solução em algo que não tinha nada haver com o assunto.

O que fiz foi seguir alguns passos pra corrigir o plymouth e voilà o sistema estava muito rápido. Não sei se vai funcionar na sua máquina, mas é bem possível que sim. Mas agora, vamos à instalação do driver sismedia, para o qual eu criei um script para facilitar tudo.

> [**Download do script**][1] (atualizado)

Basta que baixe, descompacte e rode pelo terminal

Vamos agora corrigir o desempenho. Faça isso:

1 &#8211; No **Terminal**, digite:

<pre class="brush:shell">sudo gedit /etc/default/grub</pre>

2 -Localize a linha &#8220;**#GRUB_GFXMODE=640&#215;480**&#8221; e, abaixo dela, adicione a seguinte:

> GRUB\_GFXPAYLOAD\_LINUX=1280&#215;800

4 &#8211; Atualize as configurações do Grub e gere uma nova imagem initramfs:

<pre class="brush:shell">sudo update-grub2 && sudo update-initramfs -u</pre>

5 &#8211; Reinicie o sistema.

Fácil não?

##### PS: O tema sairá sim, fiquem frios, mais tardar amanhã e eu também vou trazer um aviso com relação aos temas.

Até mais, abraço a todos.

 [1]: http://www.ubuntero.com.br/wp-content/uploads/2011/07/Driver-sismedia-11.04-e-10.10.sh_.tar.gz