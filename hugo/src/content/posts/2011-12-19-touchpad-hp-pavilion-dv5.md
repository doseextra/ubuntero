---
title: Touchpad HP Pavilion dv5
author: Ivan Brasil Fuzzer
type: post
date: 2011-12-19T22:25:55+00:00
url: /touchpad-hp-pavilion-dv5/
categories:
  - Ubuntu
tags:
  - dv5
  - hp
  - Linux
  - notebook
  - pavilion
  - touchpad
  - Ubuntu

---
**Artigo enviado por Jean Quenehen([@Jean_7][1])**

Muitos usuários que migram do SO azul para o Ubuntu acabam encontrando algumas dificuldades devido aos seus hardwares. Foi o meu caso. Tenho um HP Pavilion dv5 e ao instalar o Ubuntu constatei que o touchpad não funcionava corretamente, sem botão direito e problemas ao clicar e arrastar.

Como todo novato, recorri ao google e fóruns de linux em busca da solução para o problema. Especificamente sobre esse problema (touchpad no HP) eu não encontrei muita coisa e as poucas informações e sugestões de solução não funcionavam. Até que descobri um modo de fazer o touchpad funcionar. Depois de inicializar o sistema, bastava abrir o terminal e digitar:

<pre class="brush:shell">sudo modprobe -r psmouse
sudo modprobe psmouse proto=imps</pre>

Resolvia, mas não tinha como negar que era um incômodo ter que abrir o terminal e digitar esses comandos toda vez que ligava o computador.

Depois de conversar com algumas pessoas mais experientes e não conseguir uma solução, encontrei um grupo no facebook chamado Linux Brasil. Postei minha dúvida e um participante (Greyson Farias) deu a solução:

**Colocar os comandos sem o sudo em /etc/rc.local antes de exit 0.**

Simples, rápido e eficaz. Agora não tenho mais que ficar digitando essas duas linhas de comando. Acho que irei esquecê-las.

 [1]: http://twitter.com/jean_7