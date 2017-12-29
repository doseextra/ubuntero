---
title: Conexão remota com o VNC
author: Ivan Brasil Fuzzer
type: post
date: 2013-09-02T14:16:18+00:00
url: /conexao-remota-com-o-vnc/
burl:
  - http://ads.tt/B2B9
  - http://ads.tt/B2B9
categories:
  - Ubuntu
tags:
  - conexão remota
  - Linux
  - Ubuntu
  - vnc

---
<p style="text-align: center;">
   <a href="http://www.ubuntero.com.br/wp-content/uploads/2013/09/realvnc-logo.png"><img class="alignnone size-thumbnail wp-image-5960" alt="realvnc-logo" src="http://www.ubuntero.com.br/wp-content/uploads/2013/09/realvnc-logo-150x140.png" width="150" height="140" /></a>
</p>

Pode parecer simples, mas há maneiras diferentes de fazer uma conexão VNC para suporte remoto e a que eu mais gosto é a conexão reversa. Já mostramos no site [como configurar o computador que vai dar o suporte][1], mas ficou faltando dizer como fazer a conexão do outro lado quando o computador é Linux.

Para começo de conversa, abra a Central de Programas do Ubuntu e procure por &#8220;x11vnc&#8221;, sem as aspas, e clique em instalar. Digite sua senha quando for pedido e aguarde a instalação terminar.

<p style="text-align: center;">
  <a href="http://www.ubuntero.com.br/wp-content/uploads/2013/09/x11vnc-1.png"><img class="alignnone size-medium wp-image-5964" alt="x11vnc-1" src="http://www.ubuntero.com.br/wp-content/uploads/2013/09/x11vnc-1-300x175.png" width="300" height="175" /></a> <a href="http://www.ubuntero.com.br/wp-content/uploads/2013/09/x11vnc-2.png.png"><img class="alignnone size-medium wp-image-5966" alt="x11vnc-2.png" src="http://www.ubuntero.com.br/wp-content/uploads/2013/09/x11vnc-2.png-300x175.png" width="300" height="175" /></a>
</p>

Tecle Alt+F2 para digitar o comando de conexão.

<pre class="brush:plain">x11vnc -connect nomeouipdocomputador:5500</pre>

Substitua o &#8220;nomeouipdocomputador&#8221; pelo nome ou ip do computador onde que o seu suporte lhe passar. Pronto, a máquina de suporte terá recebido sua conexão e poderá dar o suporte de uma maneira muito melhor.

 [1]: http://www.ubuntero.com.br/2010/11/suporte-remoto/