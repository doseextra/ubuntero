---
title: Teclado ABNT2 sem “.”
author: Ivan Brasil Fuzzer
type: post
date: 2008-11-17T00:47:46+00:00
url: /teclado-abnt2-sem/
burl:
  - http://ads.tt/1YI2
  - http://ads.tt/1YI2
  - http://ads.tt/1YI2
  - http://ads.tt/1YI2
  - http://ads.tt/1YI2
  - http://ads.tt/1YI2
  - http://ads.tt/1YI2
  - http://ads.tt/1YI2
  - http://ads.tt/1YI2
  - http://ads.tt/1YI2
  - http://ads.tt/1YI2
  - http://ads.tt/1YI2
  - http://ads.tt/1YI2
  - http://ads.tt/1YI2
  - http://ads.tt/1YI2
  - http://ads.tt/1YI2
  - http://ads.tt/1YI2
  - http://ads.tt/1YI2
  - http://ads.tt/1YI2
  - http://ads.tt/1YI2
  - http://ads.tt/1YI2
  - http://ads.tt/1YI2
  - http://ads.tt/1YI2
  - http://ads.tt/1YI2
  - http://ads.tt/1YI2
  - http://ads.tt/1YI2
  - http://ads.tt/1YI2
  - http://ads.tt/1YI2
  - http://ads.tt/1YI2
  - http://ads.tt/1YI2
  - http://ads.tt/1YI2
  - http://ads.tt/1YI2
  - http://ads.tt/1YI2
  - http://ads.tt/1YI2
  - http://ads.tt/1YI2
  - http://ads.tt/1YI2
  - http://ads.tt/1YI2
  - http://ads.tt/1YI2
  - http://ads.tt/1YI2
  - http://ads.tt/1YI2
  - http://ads.tt/1YI2
  - http://ads.tt/1YI2
  - http://ads.tt/1YI2
  - http://ads.tt/1YI2
  - http://ads.tt/1YI2
  - http://ads.tt/1YI2
  - http://ads.tt/1YI2
  - http://ads.tt/1YI2
  - http://ads.tt/1YI2
  - http://ads.tt/1YI2
  - http://ads.tt/1YI2
  - http://ads.tt/1YI2
  - http://ads.tt/1YI2
categories:
  - Ubuntu

---
Se você tem um teclado padrão ABNT2, deve ter notado que após as últimas atualizações o teclado ficou sem o &#8220;.&#8221;. Acredito que é quase impossível viver sem esta tecla pois precisamos dela para digitarmos endereços de internet, escrever textos simples e algumas pessoas precisam do &#8220;.&#8221; para acessar endereços IP.

Acredito que logo tenhamos a correção do pacote que está no atrapalhando, mas para quem não pode esperar, vamos a uma solução temporária.

Abra o gerenciador de pacotes Synaptic e procure pelo pacote xkb-data. Selecione o pacote e vá no menu &#8220;Pacote&#8221; e em &#8220;forçar versão&#8221;. Na janela que se abre, seleciona a versão &#8220;1.3-2ubuntu4 (intrepid)&#8221;.

Efetue log-off e login e o problema estará resolvido até que o pacote seja atualizado novamente. Fique atento ao Ubuntero que assim que o pacote corrigido sair nós avisaremos.

**Devemos lembrar que este erro está acontecendo apenas para pessoas que habilitaram o repositório &#8220;proposed&#8221;. Este repositório é exatamente para testes e pacotes com bugs são mais frequentes do que podemos imaginar. Se quiser evitar este tipo de problema, não habilite o repositório proposed.**