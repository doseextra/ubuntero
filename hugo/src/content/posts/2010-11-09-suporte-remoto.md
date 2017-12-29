---
title: Suporte remoto
author: Ivan Brasil Fuzzer
type: post
date: 2010-11-09T14:30:24+00:00
url: /suporte-remoto/
categories:
  - Ubuntu

---
**Ainda em tempo, quero agradecer ao Tiago Rocha que me deu a dica da conexão reversa pela lista de discussão do [Ubuntu-BR][1]**.

Em meu trabalho necessito dar suporte a usuários Windows e o software utilizado nas estações é o VNC. Não detalharei o procedimento de instalação do VNC no Windows, mas acredito que não seja necessário.

Você deve estar se perguntando qual é o motivo de existir um artigo para falar de conexão remota usando VNC entre Windows e Linux, afinal, se não existe nenhum segredo nisto?

Pense que cada cliente tem um endereço IP, um modem ADSL ou até uma conexão a rádio. Cada usuário teria que fazer as devidas configurações para ter as portas do VNC direcionadas para seus computadores. E se atras de um modem tiver 10 computadores? Direcionar uma porta diferente para cada computador? Alterar a configuração de redirecionamento de porta a cada vez que um computador diferente necessitar de suporte? A resposta para isto é: Faça a configuração de redirecionamento de porta no seu modem e utilize a opção &#8220;Conexões Reversas&#8221; do &#8220;Visualizador de área de trabalho remota&#8221;. Com esta opção, seu cliente pedirá que você conecte no computador dele. Desta maneira, ele não precisará configurar nada além de instalar e definir uma senha no VNC.

Não tenho como entrar em detalhes de configuração de redirecionamento de portas, pois cada modem ADSL tem suas diferenças, então vamos direto à nossa conexão remota.

Para inicio de conversa, abra o &#8220;Visualizador de área de trabalho remota&#8221; que está disponível no menu Aplicativos => Internet => Visualizador de área de trabalho remota.

<p style="text-align: center;">
  <a href="http://www.ubuntero.com.br/wp-content/uploads/2010/11/Captura_de_tela1.png"><img class="alignnone size-thumbnail wp-image-1157" title="Captura_de_tela" src="http://www.ubuntero.com.br/wp-content/uploads/2010/11/Captura_de_tela1-150x140.png" alt="" width="150" height="140" /></a> <a href="http://www.ubuntero.com.br/wp-content/uploads/2010/11/Captura_de_tela-1.png"><img class="alignnone size-thumbnail wp-image-1158" title="Captura_de_tela-1" src="http://www.ubuntero.com.br/wp-content/uploads/2010/11/Captura_de_tela-1-150x88.png" alt="" width="150" height="88" /></a>
</p>

<p style="text-align: left;">
  No &#8220;Visualizador de área de trabalho remota&#8221; vá no menu Arquivo => Conexões reversas.
</p>

<p style="text-align: center;">
  <a href="http://www.ubuntero.com.br/wp-content/uploads/2010/11/Captura_de_tela-2.png"><img class="alignnone size-thumbnail wp-image-1159" title="Captura_de_tela-2" src="http://www.ubuntero.com.br/wp-content/uploads/2010/11/Captura_de_tela-2-150x134.png" alt="" width="150" height="134" /></a>
</p>

<p style="text-align: left;">
  Na janela que se abre, deixe as configurações como na imagem abaixo:
</p>

<p style="text-align: center;">
  <a href="http://www.ubuntero.com.br/wp-content/uploads/2010/11/Captura_de_tela-3.png"><img class="alignnone size-thumbnail wp-image-1160" title="Captura_de_tela-3" src="http://www.ubuntero.com.br/wp-content/uploads/2010/11/Captura_de_tela-3-150x85.png" alt="" width="150" height="85" /></a>
</p>

<p style="text-align: left;">
  A configuração do &#8220;Visualizador de área de trabalho remota&#8221; está pronta para receber novas conexões de outras máquinas. Agora vamos ver como o cliente que usa Windows fará para conectar em nossa máquina.
</p>

<p style="text-align: left;">
  Depois de instalado o VNC no Windows, vá no menu Iniciar => Todos os programas => RealVNC => VNCServer => Add New Client como na imagem abaixo:
</p>

<p style="text-align: center;">
  <a href="http://www.ubuntero.com.br/wp-content/uploads/2010/11/Captura_de_tela-4.png"><img class="alignnone size-thumbnail wp-image-1162" title="Captura_de_tela-4" src="http://www.ubuntero.com.br/wp-content/uploads/2010/11/Captura_de_tela-4-150x79.png" alt="" width="150" height="79" /></a>
</p>

<p style="text-align: left;">
  Será aberta a janela para informar o IP ou nome de domínio para conexão remota. Nesta janela o cliente informará o IP da máquina onde foi configurado o &#8220;Visualizador de área de trabalho remota&#8221;. Este host pode ser um endereço da rede interna, caso os computadores estejam na mesma rede, ou um endereço público, caso os computadores possam se comunicar apenas pela internet.
</p>

<p style="text-align: center;">
  <a href="http://www.ubuntero.com.br/wp-content/uploads/2010/11/Captura_de_tela-6.png"><img class="alignnone size-thumbnail wp-image-1163" title="Captura_de_tela-6" src="http://www.ubuntero.com.br/wp-content/uploads/2010/11/Captura_de_tela-6-150x54.png" alt="" width="150" height="54" /></a>
</p>

<p style="text-align: left;">
  Quando a conexão se estabelecer o cliente terá seu papel de parede removido e ele visualizará uma tela como podemos ver abaixo, veja o ícone do VNC que estará com o fundo preto.
</p>

<p style="text-align: center;">
  <a href="http://www.ubuntero.com.br/wp-content/uploads/2010/11/Captura_de_tela-7.png"><img class="alignnone size-thumbnail wp-image-1164" title="Captura_de_tela-7" src="http://www.ubuntero.com.br/wp-content/uploads/2010/11/Captura_de_tela-7-150x79.png" alt="" width="150" height="79" /></a>
</p>

<p style="text-align: left;">
  Abaixo podemos ver a tela do &#8220;Visualizador de área de trabalho remota&#8221; já com a conexão estabelecida.
</p>

<p style="text-align: center;">
  <a href="http://www.ubuntero.com.br/wp-content/uploads/2010/11/Captura_de_tela-8.png"><img class="alignnone size-thumbnail wp-image-1165" title="Captura_de_tela-8" src="http://www.ubuntero.com.br/wp-content/uploads/2010/11/Captura_de_tela-8-150x88.png" alt="" width="150" height="88" /></a>
</p>

<p style="text-align: left;">
  Espero que esta informação seja útil tanto para quem não conhecia a conexão reversa quanto para quem já a tinha utilizado em ambientes totalmente Windows.
</p>

<p style="text-align: left;">

 [1]: https://lists.ubuntu.com/mailman/listinfo/ubuntu-br