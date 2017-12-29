---
title: Como configurar o Ubuntu 11.04 com placa SIS671
author: Renato
type: post
date: 2011-07-07T12:03:29+00:00
url: /como-configurar-o-ubuntu-11-04-com-placa-sis671/
categories:
  - Ubuntu
tags:
  - Linux
  - sis
  - Ubuntu

---
<div>
  <div>
    <img class="alignleft" src="http://3.bp.blogspot.com/-V2YXKQNhlSI/Tewau5UpM9I/AAAAAAAAAng/-uYoFeX6N10/s400/images.jpeg" alt="" border="0" />Anteriormente comentei sobre como configurar o Ubuntu 10.04 para trabalhar com a placa SIS 671. Já que entramos na &#8220;era Unity&#8221; (nova interface que aparentemente será o padrão nas novas versões), vou expor sobre como configurar o driver da Sis671 no Ubuntu 11.04 🙂
  </div>
  
  <p>
    1)Baixe o driver <a href="http://www.4shared.com/file/xtT3dUny/xorg-driver-sis671-ubuntu1104t.html">aqui. </a><br /> 2)Descompacte (por exemplo, na pasta Downloads).
  </p>
  
  <div>
    3)Vamos copiar alguns arquivos para os seus locais corretos para que tudo funcione ok. Abra um terminal, navegue até a pasta &#8220;downloads&#8221; (ou outra pasta onde você descompactou seus arquivos) e digite:
  </div>
  
  <p>
    sudo cp sis671_drv.so /usr/lib/xorg/modules/drivers<br /> E depois:<br /> sudo cp xorg.conf /etc/X11/
  </p>
  
  <div>
    Reinicie o computador e já poderá usufruir da resolução correta. Mas é claro que você vai querer o Unity, certo? De posse do Ubuntu já instalado e depois de ter rodado os comandos acima com êxito, abra um terminal e digite:
  </div>
  
  <p>
    sudo apt-get install unity-2d
  </p>
  
  <div>
    Reinicie seu computador e verá que a interface padrão é o Unity 2-d (o que já é bem interessante não é? 🙂 Mas se você, assim como eu, também quer alguns efeitos interessantes (transparências no terminal e ao pressionar a tecla &#8220;super&#8221; no Unity), faça o seguinte:
  </div>
  
  <p>
    -ALT+F2 e depois digite gconf-editor<br /> -Navegue até apps > metacity > general<br /> -Habilite compositing_manager<br /> Alguns efeitos de sombra nas janelas, transparência no terminal, etc, ficarão bem legais.<br /> Você poderá enfrentar problemas para reproduzir vídeos no VLC media player depois destas configurações, mas não tem problema: entre nas preferências do VLC e na saída de vídeo altere para X11.<br /> TOTEM e BANSHEE. Você terá que configurá-los também. Para tanto:<br /> 1. Tecle Alt+F2 e digite o comando gstreamer-properties. A janela &#8220;Seletor de sistemas multimídia&#8221; será aberta;<br /> 2. Na aba Vídeo, opção Plug-in, selecione &#8220;X Window System (no Xv)&#8221;;<br /> 3. No Device Escolha a opção SIS/315/330/340/340 series video bLiitter.
  </p>
  
  <p>
    Fiquem com Deus.<br /> Twitter: @renatobluesboy
  </p>
</div>

<div>
  <a href="http://freelinux-br.blogspot.com/">http://freelinux-br.blogspot.com</a>
</div>