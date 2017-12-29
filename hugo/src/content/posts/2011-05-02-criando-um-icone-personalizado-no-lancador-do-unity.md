---
title: Criando um Ícone Personalizado no Lançador do Unity
author: Andre Almeida
type: post
date: 2011-05-02T21:06:28+00:00
url: /criando-um-icone-personalizado-no-lancador-do-unity/
categories:
  - Ubuntu

---
Por um motivo de incopatibilidade da nova posição do Menu das Aplicações (Applications Menus) eu precisei desativar a nova posição para a aplicação Workbench.

### Desativando o Menu de Aplicações Global para uma aplicaçao

Para desativar o menu para uma aplicação basta iniciar aplicação com o comando abaixo (exemplo para o Editor de Textos Gedit)

> UBUNTU_MENUPROXY= gedit

Substituindo o gedit pela aplicação que você desejar iniciar.

### Desativando o Menu de Aplicações Global para todas as aplicações

Se você deseja desativar o menu de aplicações para todas as aplicações no Unity execute o comando abaixo:

> sudo echo &#8220;export UBUNTU_MENUPROXY=&#8221; > /etc/X11/Xsession.d/81ubuntumenuproxy

Depois basta reiniciar o computador.

Para reabilitar o Menu de Aplicações no modo padrão basta remover o arquivo com o código abaixo:
  
sudo rm /etc/X11/Xsession.d/81ubuntumenuproxy

Fonte: [Web Upd8][1]

### Fixando um ícone personalizado no Lançador do Unity

No meu caso, eu desejava criar um ícone no lançador para iniciar o MySQL Workbench sem o Menu de Aplicações global do Unity.

Para isso vá até a pasta /usr/share/applications/ e edite o lançador como desejar clicando com o botão direito sobre o ícone e clique em Propriedades.

Porém para desativar o menu do Workbench isso não funciou e eu precisei editar o lançador num editor de texto e definir o comando que inicia o programa um pouco diferente, para editar executei o seguinte comando:

> sudo gedit MySQLWorkbench.desktop

E deixei o arquivo assim:
  
[Desktop Entry]
  
Name=MySQL Workbench
  
Comment=MySQL Database Design Tool
  
Exec=env UBUNTU_MENUPROXY= /usr/bin/mysql-workbench
  
Terminal=false
  
Type=Application
  
Icon=/usr/share/mysql-workbench/images/MySQLWorkbench-48.png
  
Categories=GTK;Database;Development;Application

Fonte: [Ask Ubuntu][1]

 [1]: http://www.webupd8.org/2011/03/disable-appmenu-global-menu-in-ubuntu.html