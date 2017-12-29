---
title: Atualizando uma imagem .iso do Ubuntu com zsync
author: Rudinei Weschenfelder
type: post
date: 2012-08-04T20:46:34+00:00
url: /atualizando-uma-imagem-iso-do-ubuntu-com-zsync/
categories:
  - Ubuntu
tags:
  - Dicas
  - Linux
  - terminal
  - Ubuntu
  - zsync

---
Essa dica é para quem costuma baixar com frequência as imagens .iso do Live CD/DVD do Ubuntu e também para economizar no consumo de tráfego de dados de sua internet.

Usando o _zsync_ é possível fazer uma atualização da imagem .iso que você já baixou, aonde será feita uma comparação entre as imagens e irá baixar somente as diferenças.

Exemplo: você tem a imagem .iso de uma versão Alpha 2 e quer baixar a Alpha 3, usando o _zsync_ será feita uma leitura da imagem que você possui e comparar com a nova imagem a ser baixada, após irá iniciar o download de somente as diferenças entre os arquivos.

Vamos para a parte prática:

**Instalando o zsync**
  
Abra o terminal e digite:

<pre class="brush:shell">sudo apt-get install zsync -y</pre>

<p style="text-align: center;">
  <a href="http://www.ubuntero.com.br/wp-content/uploads/2012/08/zsync-ubuntu-instalacao.png"><img class="aligncenter  wp-image-3817" src="http://www.ubuntero.com.br/wp-content/uploads/2012/08/zsync-ubuntu-instalacao.png" alt="Instalação do zsync no Ubuntu" width="470" height="160" /></a>
</p>

**Atualizando uma imagem .iso**
  
No terminal e acesse o diretório (pasta) aonde está a imagem .iso que deverá ser atualizada, neste exemplo, está no diretório Downloads:

<pre class="brush:shell">cd Downloads/</pre>

<p style="text-align: center;">
  <a href="http://www.ubuntero.com.br/wp-content/uploads/2012/08/zsync-ubuntu-diretorio-download.png"><img class="aligncenter  wp-image-3818" src="http://www.ubuntero.com.br/wp-content/uploads/2012/08/zsync-ubuntu-diretorio-download.png" alt="Acessando diretório de download para executar o zsync" width="470" height="160" /></a>
</p>

seguindo no terminal vamos atualizar a imagem:

<pre class="brush:shell">zsync http://cdimage.ubuntu.com/releases/12.10/alpha-3/quantal-desktop-amd64.iso.zsync</pre>

<p style="text-align: center;">
  <a href="http://www.ubuntero.com.br/wp-content/uploads/2012/08/zsync-ubuntu-comando-atualizar-imagem-iso1.png"><img class="aligncenter wp-image-3828" src="http://www.ubuntero.com.br/wp-content/uploads/2012/08/zsync-ubuntu-comando-atualizar-imagem-iso1.png" alt="Comando para atualizar uma imagem iso do Ubuntu usando zsync" width="470" height="160" /></a>
</p>

O comando acima irá fazer uma comparação entre a imagem 64 bits quantal-desktop-amd64.iso que está no diretório atual e a nova imagem a ser baixada, após irá baixar e atualizar para a versão alpha-3.

<p style="text-align: center;">
  <a href="http://www.ubuntero.com.br/wp-content/uploads/2012/08/zsync-ubuntu-verifcando-imagem-iso.png"><img class="aligncenter wp-image-3820" src="http://www.ubuntero.com.br/wp-content/uploads/2012/08/zsync-ubuntu-verifcando-imagem-iso.png" alt="zsync ubuntu verifcando imagem iso" width="470" height="160" /></a><br /> <a href="http://www.ubuntero.com.br/wp-content/uploads/2012/08/zsync-ubuntu-atualizando-imagem-iso.png"><img class="aligncenter wp-image-3821" src="http://www.ubuntero.com.br/wp-content/uploads/2012/08/zsync-ubuntu-atualizando-imagem-iso.png" alt="zsync ubuntu atualizando imagem iso" width="470" height="160" /></a><br /> <a href="http://www.ubuntero.com.br/wp-content/uploads/2012/08/zsync-ubuntu-atualizacao-iso-concluida.png"><img class="aligncenter wp-image-3822" src="http://www.ubuntero.com.br/wp-content/uploads/2012/08/zsync-ubuntu-atualizacao-iso-concluida.png" alt="zsync ubuntu atualizacao iso concluída" width="470" height="160" /></a>
</p>

Seguindo a ideia do exemplo acima, quando sair a versão Beta 1, Beta 2 ou versão final do Ubuntu é só acessar o endereço <a href="http://cdimage.ubuntu.com/releases/12.10/" rel="nofollow" target="_blank">http://cdimage.ubuntu.com/releases/12.10/</a> selecionar a versão desejada, localizar o link do arquivo .iso.zsync, copiar o link e colar logo após o comando _zsync_, exemplo:

<pre class="brush:shell">zsync http://cdimage.ubuntu.com/releases/12.10/beta-1/quantal-desktop-amd64.iso.zsync</pre>

Observe que foi substituído somente o **/alpha-3/** para **/beta-1/** no comando de atualização da imagem .iso

Assim você irá economizar tempo e tráfego de dados do seu plano de internet.

Boa sorte! 😉
  
Conheça a comunidade Ubuntu Brasil &#8211; <a title="Conheça a Comunidade Ubuntu Brasil" href="http://www.ubuntu-br.org/participe" rel="nofollow" target="_blank">http://www.ubuntu-br.org/participe</a>

Fonte: <a href="https://help.ubuntu.com/community/ZsyncCdImage" rel="nofollow" target="_blank">https://help.ubuntu.com/community/ZsyncCdImage</a>