---
title: Apache OpenOffice 4.0 no Ubuntu 13.04
author: Ivan Brasil Fuzzer
type: post
date: 2013-07-24T16:22:39+00:00
url: /apache-openoffice-4-0-no-ubuntu-13-04/
burl:
  - http://ads.tt/8K8A
categories:
  - Ubuntu
tags:
  - Linux
  - openoffice
  - Ubuntu

---
O **Ubuntu** já vem com uma **suíte de escritório** instalado por padrão e esta suíte é o **LibreOffice**, no entanto, pode ser que você prefira se manter no já consagrado **OpenOffice**, que deu origem ao LibreOffice (mais informações no [Opencast 12a][1] e [Opencast 12b][2]). Veja os passos para a instalação da versão 4.0 do OpenOffice.

Abra o terminal digitando `Ctrl+Alt+t` e comece desinstalando todos os pacotes do LibreOffice (se souber como manter os dois, sugira as modificações no tutorial).

<pre class="brush:shell">sudo apt-get purge libreoffice*</pre>

Faça o download no site do [OpenOffice][3]. Descompacte o conteúdo do arquivo baixado. Vou considerar que tenha baixado no diretório Downloads e que seu terminal abra na sua pasta Home como é o padrão. No terminal digite os seguintes comandos:

<pre class="brush:shell">cd Downloads
tar xvzf Apache_OpenOffice_4.0.0_Linux_x86-64_install-deb_pt-BR.tar.gz
cd pt-BR/DEBS
sudo dpkg -i *.deb
cd desktop-integration
sudo dpkg -i *.deb</pre>

Pronto, o OpenOffice está instalado. Vamos agora a primeira configuração. Pressione e solte a tecla `Super` e digite `openoffice`. A primeira opção é o que queremos. Ao abrir, uma janela será mostrada para configurarmos, nada muito complicado.

<p align="center">
  <a href="http://www.ubuntero.com.br/wp-content/uploads/2013/07/openoffice-1.png" rel="lightbox-album"><img class="alignnone size-medium wp-image-5807" title="OpenOffice no Ubuntu - Tela 1" alt="OpenOffice no Ubuntu - Tela 1" src="http://www.ubuntero.com.br/wp-content/uploads/2013/07/openoffice-1-300x189.png" width="300" height="189" /></a> <a href="http://www.ubuntero.com.br/wp-content/uploads/2013/07/openoffice-2.png" rel="lightbox-album"><img class="alignnone size-medium wp-image-5808" title="OpenOffice no Ubuntu - Tela 2" alt="OpenOffice no Ubuntu - Tela 2" src="http://www.ubuntero.com.br/wp-content/uploads/2013/07/openoffice-2-300x189.png" width="300" height="189" /></a>
</p>

<p align="center">
  <a href="http://www.ubuntero.com.br/wp-content/uploads/2013/07/openoffice-3.png" rel="lightbox-album"><img class="alignnone size-medium wp-image-5809" title="OpenOffice no Ubuntu - Tela 3" alt="OpenOffice no Ubuntu - Tela 3" src="http://www.ubuntero.com.br/wp-content/uploads/2013/07/openoffice-3-300x214.png" width="300" height="214" /></a> <a href="http://www.ubuntero.com.br/wp-content/uploads/2013/07/openoffice-4.png" rel="lightbox-album"><img class="alignnone size-medium wp-image-5813" title="OpenOffice no Ubuntu - Tela 4" alt="OpenOffice no Ubuntu - Tela 4" src="http://www.ubuntero.com.br/wp-content/uploads/2013/07/openoffice-4-300x163.png" width="300" height="163" /></a>
</p>

Agora é só usar o OpenOffice como sua suíte de escritório.

 [1]: http://www.ubuntero.com.br/2012/06/opencat-12a-libreoffice/
 [2]: http://www.ubuntero.com.br/2012/06/opencast-12b-libreoffice/
 [3]: http://www.openoffice.org/download/