---
title: 4º Tema – Vancouver 2010 1º aniversário
author: Anderson Henrique
type: post
date: 2011-03-19T21:11:34+00:00
url: /4º-tema-vancouver-2010-1º-aniversario/
categories:
  - Ubuntu
tags:
  - Personalização
  - tema
  - Ubuntu
  - vancouver

---
Olá, é com muito gosto que vos apresento hoje o quarto tema da série aqui no Ubuntero. O tema de hoje foi criado por um brasileiro, &#8211; que está de parabéns &#8211; o Gustavo Reis. O tema é relativamente &#8220;simples&#8221;, mas foi essa &#8220;simplicidade&#8221; que me levou à adicioná-lo à série de temas. Hoje não terá nenhum vídeo, estou com problemas na rede, mas o processo de instalação é relativamente simples. Primeiro é necessário que tenhamos o pacote em mãos para instalarmos, para isso faça o download **[clicando aqui][1]**.

Após feito o download em uma pasta a seu gosto, extraia o arquivo em _.zip_ e dentro da pasta resultante da extração encontrará várias sub-pastas, onde encontrará todos os arquivos necessários para o tema. Vamos agora então começar a instalação.

Vá em _Sistema; Preferências; Aparência._ Mova para as Preferências de Aparência a pasta Vancouver2010 e o arquivo Vancocons.tar.gz assim terá instalado o tema e também os ícones. Talvez os ícones corretos podem não aparecer por padrão, então caso isso aconteça, vá em _Personalizar_ e na guia _Ícones_ selecione o ícone de mesmo nome do arquivo tar.gz.

Agora vamos adicionar ao Painel do Gnome, uma imagem para que fique com aparência de gelo. No painel superior do Gnome, clique em _Propriedades_ e em _Plano de Fundo_ vá em _Imagem de fundo_ e selecione dentro da pasta do tema o arquivo _menu do ubuntu 3.png_.

Agora vamos adicionar um fundo ao _Nautilus_, para isso ainda na pasta vá no menu do mesmo e clique em _Editar_ e vá em _Planos de fundo e emblemas_ e selecione a imagem de nome _Fundo do nautilus.png_.

Feito, vamos instalar o tema para Google Chrome ou Chromium; vamos fazer isso abrindo o arquivo em .crx dentro da pasta Google Chrome no browser, para isso use o comando Crtl + O e navegue até a pasta. A única coisa que deixo à escolha de vocês, é o quesito fontes. Eu acho melhor deixar as fontes padrão do Ubuntu, mas se não o quiser, instale-as.

Falta agora a tela de login e a splash screen. Para por a funcionar a tela de login, vá como root até a pasta /usr/share/gdm/.themes e copie a pasta Vancouver2010 1st Birthday GDM Theme. Quanto à splash screen vá até a pasta da extração e rode os seguintes comandos;

> _sudo cp -RVancouver2010-1st-sudo cp -RBirthday-Ubuntu-10.10-Vancouver2010-1st-theme/Birthday-Ubuntu-10.10-/lib/plymouth/themes/theme/sudo update-/lib/plymouth/themes/alternativessudo update-alternatives&#8211;install&#8211;install/lib/plymouth/themes/de/lib/plymouth/themes/deffault.plymouthault.plymouthdefault.plymouthdefault.plymouth/lib/plymouth/themes/Van /lib/plymouth/themes/Vancouver2010-1st-couver2010-1st-Birthday-Birthday-Ubuntu-10.10-Ubuntu-10.10-theme/Vancouver2010-theme/Vancouver2010-1st-1st-Birthday-Ubuntu-Birthday-Ubuntu-10.10-10.10-theme.plymouththeme.plymouth 100100sudo update-alternativessudo update&#8212;configalternatives &#8211;configdefault.plymouthdefault.plymouth && sudo update-initramfs -u_

Agora basta que selecione o Plano de Fundo da Área de Trabalho que deseje e já se tem o tema funcionando em perfeito estado. Abaixo confira uma screen.

<p style="text-align: center">
  &nbsp;
</p>

<img class="aligncenter" src="http://leetleech.org/images/31269684583857091656.png" alt="" />

 [1]: http://www.4shared.com/file/Mt3B-Jk4/Vancouver2010_Theme.html