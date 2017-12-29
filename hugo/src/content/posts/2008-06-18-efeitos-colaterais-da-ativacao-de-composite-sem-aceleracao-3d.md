---
title: Efeitos colaterais da ativação de composite sem aceleração 3D
author: Ivan Brasil Fuzzer
type: post
date: 2008-06-18T14:41:13+00:00
url: /efeitos-colaterais-da-ativacao-de-composite-sem-aceleracao-3d/
categories:
  - Geral
  - Ubuntu

---
Durante minha última palestra sobre Customização do Ubuntu 8.04, dei uma dica para o pessoal que não tem placa aceleradora 3D mas quer usufruir de alguns poucos efeitos de embelezamento do Ubuntu. Uma pequena alteração no gconf-editor faz com que as janelas tenham sombra e possibilita o uso do avant-window-navigator. Assim que eu transformar a palestra em um artigo vocês terão o gostinho de testar esta funcionalidade.

Os principais efeitos colaterais desta alteração são:

  * Provável perda de desempenho: máquinas com processadores menos privilegiados podem perder um pouco do desempenho principalmente quando utilizando o avant-window-navigator.
  * Alguns vídeos rodam apenas em players específicos com as configurações padão: Sem fazer alterações nas configurações dos players, os vídeos parecerão não ter imagem, mostrando apenas uma tela preta.