---
title: Personalize as notificações do Ubuntu
author: Ivan Brasil Fuzzer
type: post
date: 2010-07-20T15:02:51+00:00
url: /personalize-as-notificacoes-do-ubuntu/
categories:
  - Ubuntu

---
Quantas vezes você já olhou para as notificações do Ubuntu e pensou em como poderia fazer para alterar o comportamento ou visual? Muitas pessoas já me fizeram esta pergunta e agora eu tenho a resposta.

Para podermos fazer estas alterações, de maneira simples, teremos que instalar um pequeno programa e atualizar a versão do notificador, para isso siga os passos abaixo:

  * Abra o terminal em **Aplicativos > Acessórios > Terminal**
  * Digite os comandos: 
      * sudo add-apt-repository ppa:leolik/leolik
      * sudo add-apt-repository ppa:amandeepgrewal/notifyosdconfig
      * sudo apt-get update && sudo aptitude upgrade
      * sudo apt-get install notifyosdconfig

O programa será instalado e estará disponível no menu **Aplicativos > Acessórios > NotifyOSD Configuration**

<p style="text-align: center;">
  <a href="http://www.ubuntero.com.br/wp-content/uploads/2010/07/Captura_de_tela-11.png"><img class="size-thumbnail wp-image-994 aligncenter" title="Captura_de_tela-1" src="http://www.ubuntero.com.br/wp-content/uploads/2010/07/Captura_de_tela-11-150x118.png" alt="" width="150" height="118" /></a>
</p>

Como você pode ver na imagem acima, o programa é intuitivo, mesmo estando em inglês. Basta alterar as opções e clicar em **Apply** para ver como ficarão suas notificações. Caso queira voltar ao original, pode usar esta tela acima para voltar as configurações padrão.