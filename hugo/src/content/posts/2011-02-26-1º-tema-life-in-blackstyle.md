---
title: 1º tema – Life in BlackStyle
author: Anderson Henrique
type: post
date: 2011-02-27T02:26:35+00:00
url: /1º-tema-life-in-blackstyle/
bb-custom-tags:
  - ubuntu, tema, série visual, dica
  - ubuntu, tema, série visual, dica
  - ubuntu, tema, série visual, dica
  - ubuntu, tema, série visual, dica
  - ubuntu, tema, série visual, dica
  - ubuntu, tema, série visual, dica
  - ubuntu, tema, série visual, dica
  - ubuntu, tema, série visual, dica
  - ubuntu, tema, série visual, dica
  - ubuntu, tema, série visual, dica
  - ubuntu, tema, série visual, dica
  - ubuntu, tema, série visual, dica
  - ubuntu, tema, série visual, dica
  - ubuntu, tema, série visual, dica
  - ubuntu, tema, série visual, dica
  - ubuntu, tema, série visual, dica
  - ubuntu, tema, série visual, dica
  - ubuntu, tema, série visual, dica
  - ubuntu, tema, série visual, dica
  - ubuntu, tema, série visual, dica
  - ubuntu, tema, série visual, dica
  - ubuntu, tema, série visual, dica
  - ubuntu, tema, série visual, dica
  - ubuntu, tema, série visual, dica
  - ubuntu, tema, série visual, dica
  - ubuntu, tema, série visual, dica
  - ubuntu, tema, série visual, dica
  - ubuntu, tema, série visual, dica
  - ubuntu, tema, série visual, dica
  - ubuntu, tema, série visual, dica
  - ubuntu, tema, série visual, dica
  - ubuntu, tema, série visual, dica
  - ubuntu, tema, série visual, dica
  - ubuntu, tema, série visual, dica
  - ubuntu, tema, série visual, dica
  - ubuntu, tema, série visual, dica
  - ubuntu, tema, série visual, dica
  - ubuntu, tema, série visual, dica
  - ubuntu, tema, série visual, dica
  - ubuntu, tema, série visual, dica
  - ubuntu, tema, série visual, dica
  - ubuntu, tema, série visual, dica
  - ubuntu, tema, série visual, dica
  - ubuntu, tema, série visual, dica
  - ubuntu, tema, série visual, dica
  - ubuntu, tema, série visual, dica
  - ubuntu, tema, série visual, dica
  - ubuntu, tema, série visual, dica
  - ubuntu, tema, série visual, dica
categories:
  - Ubuntu

---
<!-- 		@page { margin: 2cm } 		P { margin-bottom: 0.21cm } 		A:link { so-language: zxx } -->É com muito orgulho que vos falo que hoje inicio um projeto de temas aqui no Ubuntero. A ideia original eu vi no 

[UbuntuEd][1] que é um outro excelente site sobre o Ubuntu. É o seguinte, nos meus passeios pela internet, conheci esse site, e por lá vi uma série de temas a cada dia múltiplo de 10.

Tomando como base essa ideia, resolvi montar uma série de temas, e no caso aqui do Ubuntero, todo sábado procurarei trazer um novo conjunto de temas. O que farei será basicamente isso: selecionarei por aí alguns pacotes de temas, e os unirei até obter um visual agradável.

Quando tive a ideia de fazer essa série aqui no site fiquei pensando: “Ah, deve ser moleza selecionar alguns pacotes de temas, unir e criar um visual bacana”. Mal sabia eu que estava mortalmente enganado. Procurar, temas, pacotes de ícones e tudo mais é algo realmente difícil. Bem, se o artigo não lhes agradar, desculpem-me.

Como artigo inaugural dessa série, vos trago hoje, um tema dark, que irá agradar mesmo aos que não gostam desse estilo ao meu ver. Denomino ele de _Life in BlackStyle_, ou em português, Vida densa. Esse tema tem como base os temas Murrina LimeLight, o tema Dust que já vem por padrão no Ubuntu e o pacote de temas JEY!style Gnome Icons. Vamos, primeiramente instalar o tema Murrina LimeLight em vosso Ubuntu. O tema pode ser obtido no link a seguir, basta que [**Clique Aqui**.][2]

Após feito o download, extraia em uma pasta qualquer, abra a pasta resultante da extração, e o localize em seu interior uma pasta de mesmo nome do tema, e logo em seguida, vá no menu Sistema -> Preferência -> Aparência. Copie a pasta para dentro da janela Aparência e pronto, estará instalado.

Agora que instalou o Murrina LimeLight, instale o pacote de temas, o JEY!style, que pode ser conseguido [**Nesse Link**.][3] O procedimento é ainda mais simples, já que está em tar.gz, basta que somente copie o tema e pronto, está instalado. Mas bem, antes de irmos à montagem do nosso tema, recomendo a instalação do Elementary, para dar melhor possibilidades ao _Life in BlackStyle_. Para instalar o Elementary, basta rodar num terminal:

> **sudo add-apt-repository ppa:am-monkeyd/nautilus-elementary-ppa && sudo apt-get update && sudo apt-get upgrade && nautilus -q** 

Vamos finalmente à montagem do nosso tema. Prefiro demonstrar em vídeo, mas como minhas internet não ajuda a fazer o vídeo, fico devendo. Mas antes de mais nada, vos darei uma dica bônus&#8230; uma não, duas. Primeiramente instalar a Avant Window Navigator, e também como usá-la no lugar do painel do Gnome. Mais ou menos como abaixo:  <img class="aligncenter" src="http://leetleech.org/images/27571592116271008282.png" alt="Desktop" />Primeiramente faça o seguinte no terminal:

> **sudo add-apt-repository ppa:awn-testing/ppa && sudo apt-get update && sudo apt-get install avant-window-navigator-trunk**

Depois basta editar suas configurações e utilizar o efeito Lucido. Para substituir pelo painel do Gnome, vá num terminal e digite:

> **gconf-editor**

Então, vá em Desktop -> gnome -> session -> required_components e no lugar de **gnome-panel**, digite **avant-window-navigator**. Voltando à configuração da Avant Window Navigator, clique em adiconar uma sub-dock. Feche as configurações, e abra a da nova dock. Diminua seu tamanho para 18px e coloque ela na parte superior. Recomendo adicionar os applets Indicador do Sistema e Área de notificação para substituir as funções do painel do Gnome.

Agora vamos à parte de colocar o tema em prática. Nas configurações de aparência, clique em qualquer tema e em seguida clique em **Personalizar.** Em **Controles** role a barra de rolagem, até que encontre o nome **Murrina LimeLight**. Em **Margem de janela** selecione **Dust**. E em ícones, selecione o **JEY!style**. Veja o resultado, e salve o tema para quando quiser usá-lo não precisar fazer toda a seleção novamente.

Bem, é isso, espero que tenham gostado do tema que montei hoje, e espero semana vem, fazer um post melhor com um vídeo demonstrando e explicando como aplicar tudo. Tchau.

 [1]: http://ubuntued.info/
 [2]: http://www.filesonic.com/file/26390507/Murrina_LimeLight_by_fredericorama.rar
 [3]: http://www.mediafire.com/?m4yiw1njgmi