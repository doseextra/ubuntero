---
title: Mais funções para o menu “Pasta pessoal”
author: Ivan Brasil Fuzzer
type: post
date: 2011-10-31T10:00:03+00:00
url: /mais-funcoes-para-o-menu-pasta-pessoal/
categories:
  - Ubuntu
tags:
  - Linux
  - Nautilus
  - pasta pessoal
  - Ubuntu
  - Unity

---
O Menu Pasta pessoal, aquele que abre o gerenciador de arquivos, tem uma única função que não é sempre a mais útil. Neste botão do lançador do Unity apenas uma pasta pode ser aberta, mas repetidas vezes precisamos abrir outras pastas que estão na pasta pessoal.

Para resolver este pequeno problema, adicionando as pastas, Vídeos, Imagens, Documentos e Downloads abra o terminal pressionando as teclas Ctrl+Alt+t e colando o conteúdo abaixo e pressionando Enter.

<pre class="brush:shell">echo "[Desktop Entry]

Name=Home Folder
Comment=Open your personal folder
TryExec=nautilus
Exec=nautilus --no-desktop
Icon=user-home
Terminal=false
StartupNotify=true
Type=Application
Categories=GNOME;GTK;Core;
OnlyShowIn=GNOME;Unity;
X-GNOME-Bugzilla-Bugzilla=GNOME
X-GNOME-Bugzilla-Product=nautilus
X-GNOME-Bugzilla-Component=general
X-Ubuntu-Gettext-Domain=nautilus

X-Ayatana-Desktop-Shortcuts=Videos;Documents;Music;Pictures;Downloads
[Videos Shortcut Group]
Name=Videos
Exec=nautilus Vídeos
TargetEnvironment=Unity

[Documents Shortcut Group]
Name=Documents
Exec=nautilus Documentos
TargetEnvironment=Unity

[Music Shortcut Group]
Name=Music
Exec=nautilus Música
TargetEnvironment=Unity

[Pictures Shortcut Group]
Name=Pictures
Exec=nautilus Imagens
TargetEnvironment=Unity

[Downloads Shortcut Group]
Name=Downloads
Exec=nautilus Downloads
TargetEnvironment=Unity" | sudo tee /usr/share/applications/nautilus-home.desktop</pre>

Sua senha de usuário será requerida. Digite sua senha e pode clicar com o botão direito do mouse no ícone da pasta pessoal para ver o resultado.

<p style="text-align: center;">
  <a href="http://www.ubuntero.com.br/wp-content/uploads/2011/10/Captura-de-tela-em-2011-10-31-000505.png"><img class="alignnone size-thumbnail wp-image-2892" title="Captura de tela em 2011-10-31 00:05:05" src="http://www.ubuntero.com.br/wp-content/uploads/2011/10/Captura-de-tela-em-2011-10-31-000505-143x150.png" alt="" width="143" height="150" /></a>
</p>

<p style="text-align: left;">
  O que este amontoado de linhas faz é editar as configurações do ícone &#8220;Home Folder&#8221; que se encontra em &#8220;/usr/share/applications/nautilus-home.desktop&#8221; e adicionar novas entradas a ele. Para exemplificar vou por uma entrada e explicar:
</p>

<pre class="brush:shell">[Documents Shortcut Group]
Name=Documentos
Exec=nautilus Documentos
TargetEnvironment=Unity</pre>

Na primeira linha acima é especificado que estamos entrando com os dados de um ítem no lançador da aplicação. Na segunda linha especificamos um nome. Na terceira vai o comando a ser executado por aquela entrada e na última onde isso vai rodar.

Seguindo esta lógica podemos adicionar a abertura de outra pastas no menu, como por exemplo, uma entrada para a pasta do Ubuntu One.