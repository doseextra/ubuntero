---
title: Compartilhando arquivos entre Linux e Windows usando o SAMBA
author: Renato
type: post
date: 2011-03-26T11:00:38+00:00
url: /compartilhando-arquivos-entre-linux-e-windows-usando-o-samba/
categories:
  - Ubuntu

---
<div>
  Muitas vezes precisamos compartilhar arquivos em uma rede onde o servidor (ou mesmo uma estação) é Linux e o &#8220;cliente&#8221; é Windows. Fiquei pensando se havia uma maneira fácil, com modo gráfico, para fazê-lo. E tem. Mas primeiro vamos utilizar o Terminal para fazer uma instalação e, depois, uma configuração.
</div>

1)Abra um terminal e digite:

<pre class="brush:shell">sudo apt-get install system-config-samba</pre>

Isso irá instalar a interface gráfica do samba no seu Ubuntu.
  
2)Agora vamos alterar o nome do seu grupo de trabalho. No terminal, digite:

<pre class="brush:shell">sudo gedit /etc/samba/smb.conf</pre>

Em &#8220;global&#8221;, altere o workgroup para o grupo de trabalho desejado (considerando-se ser uma rede doméstica). Salve e feche o arquivo. Reinicie o samba com o comando:

<pre class="brush:shell">sudo /etc/init.d/smb restart</pre>

<div>
  Percebi, em experiência realizada entre dois notebooks em rede doméstica, que se colocarmos o Windows no mesmo grupo de trabalho que o Linux (o mesmo workgroup do arquivo smb.conf) as coisas ficam &#8220;facilitadas&#8221;. No máximo irá pedir usuário e senha (acessando a partir do Windows). Esse login e essa senha são definidos dentro do Ubuntu em &#8220;Sistema > administração > SAMBA&#8221;.<br /> Encontrei o vídeo abaixo (em Inglês) muito interessante sobre compartilhamento de arquivos entre Linux e Windows, vale a pena conferir.<br /> <a href="http://www.youtube.com/watch?v=89hjWOb8qmY">File Sharing With Ubuntu 9.04 Using Samba</a>
</div>

<div>
  Publiquei anteriormente dois posts a respeito de redes AD-HOC, <a href="http://freelinux-br.blogspot.com/2011/02/rede-ad-hoc-entre-ubuntu-e-windows.html">você pode lê-los aqui.</a><br /> Fiquem todos com Deus.
</div>

Meu Twitter: [@renatobluesboy][1]

 [1]: http://twitter.com/renatobluesboy