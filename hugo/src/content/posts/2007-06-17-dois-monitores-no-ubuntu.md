---
title: Dois monitores no Ubuntu
author: Ivan Brasil Fuzzer
type: post
date: 2007-06-17T19:23:42+00:00
url: /dois-monitores-no-ubuntu/
categories:
  - Geral
  - Ubuntu

---
<img src='http://www.fuzzer.com.br/ubuntero/wp-content/uploads/2007/06/displayconfig1.jpg' alt='DisplayConfigGTK' align="right" />A algum tempo atras costumava utilizar dois monitores no windows para algumas tarefas como deixar o winamp rodando no monitor com menor resolução enquanto eu trabalhava no outro monitor em minhas coisas ou deixava o menor monitor com os problemas da maratona de programação enquanto tentava resolve-los no outro monitor. No windows isto era extremamente fácil de ser configurado com o software da placa de vídeo, já no linux eu nunca consegui fazer com nenhuma das placas de vídeo que eu tinha(Nvidia e ATI). Sei que isso era possível apenas por ver tutoriais em fórums pela internet. As dicas dos fórums mostravam alterações que deveriam ser feitas no arquivo xorg.conf mas nenhuma dica funcionou comigo e com várias pessoas.

Ao que tudo indica, esta tarefa deixará de ser tão complexa como era em versões anteriores do Ubuntu. Não é nada oficial mas possívelmente o [ConfigDislplayGTK][1] será adicionado como padrão no Ubuntu em sua próxima versão.

Usuários da versão 7.04(Feisty Fawn) é possível instalar o [ConfigDislplayGTK][1] seguindos os passos abaixo:

Faça o download dos arquivos [guidance-backends][2] e [displayconfig-gtk][3].
  
Depois de fazer o download dos dois arquivos, de um duplo clique no arquivo guidance-backends\_0.8.0-1ubuntu3\_i386.deb para fazer sua instalação e em seguida faça o mesmo com o arquivo displayconfig-gtk\_0.2+20070605ubuntu1\_all.deb.
  
Depois de finalizada a instalação, vá no menu &#8220;Sistema -> Administração -> Screens and Graphics&#8221; e faça a sua configuração.

 [1]: https://wiki.ubuntu.com/DisplayConfigGTK
 [2]: http://glatzor.de/filesink/displayconfig/feisty/guidance-backends_0.8.0-1ubuntu3_i386.deb
 [3]: http://glatzor.de/filesink/displayconfig/feisty/displayconfig-gtk_0.2+20070605ubuntu1_all.deb