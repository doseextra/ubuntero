---
title: Comprimindo imagens com o Trimage
author: Daniel Quirino
type: post
date: 2013-01-15T10:00:55+00:00
url: /comprimindo-imagens-com-o-trimage/
burl:
  - http://ads.tt/TMG
  - http://ads.tt/TMG
  - http://ads.tt/TMG
  - http://ads.tt/TMG
  - http://ads.tt/TMG
  - http://ads.tt/TMG
  - http://ads.tt/TMG
  - http://ads.tt/TMG
  - http://ads.tt/TMG
  - http://ads.tt/TMG
  - http://ads.tt/TMG
  - http://ads.tt/TMG
  - http://ads.tt/TMG
  - http://ads.tt/TMG
  - http://ads.tt/TMG
  - http://ads.tt/TMG
  - http://ads.tt/TMG
  - http://ads.tt/TMG
  - http://ads.tt/TMG
  - http://ads.tt/TMG
  - http://ads.tt/TMG
  - http://ads.tt/TMG
  - http://ads.tt/TMG
  - http://ads.tt/TMG
  - http://ads.tt/TMG
  - http://ads.tt/TMG
  - http://ads.tt/TMG
  - http://ads.tt/TMG
  - http://ads.tt/TMG
  - http://ads.tt/TMG
  - http://ads.tt/TMG
  - http://ads.tt/TMG
  - http://ads.tt/TMG
categories:
  - Ubuntu
tags:
  - compressão
  - Imagens
  - Linux
  - Trimage
  - Ubuntu

---
Precisando diminuir o tamanho em disco de arquivos de imagem mas sem diminuir a qualidade ou resolução? Use o **Trimage** para comprimir seus arquivos.

O Trimage é um software **multi-plataforma** e linha de comando que  utiliza-se dos mais altos níveis de compressão disponíveis para diminuir o tamanho de arquivos de imagens sem perda de qualidade (via OptiPNG, Pngcrush, advpng e jpegoptim dependendo do arquivo &#8211; no momento só são suportados PNG e JPEG.). Seu uso é simples: basta selecionar um arquivo (ou vários) que ele comprimi automaticamente.

<p style="text-align: center;">
  <a href="http://www.ubuntero.com.br/?attachment_id=4400" rel="lightbox"><img class="wp-image-4400 aligncenter" title="Trimage - comprime imagens multi-plataforma" alt="Trimage - comprime imagens multi-plataforma" src="http://www.ubuntero.com.br/wp-content/uploads/2013/01/trimage.png" width="497" height="195" /></a>
</p>

Nem sempre os resultados são perceptíveis (em alguns testes ele chegou a comprimir certo arquivo em apensa 0,1%, já outros arquivos chegaram a comprimir mais de 40% do tamanho), entretanto, para quem precisa de arquivos menores mantendo a mesma qualidade, o Trimage se sai como um bom companheiro.

A instalação pode ocorrer via **Central de Programas** do **Ubuntu** ou através do **Terminal**.

No Ubuntu 12.10/12.04/11.10/11.04 para instalar via linha de comando, basta ir no terminal e digitar:

<pre class="brush:shell">sudo apt-get install trimage</pre>

<p class="brush:shell">
  Para quem ainda usa o Ubuntu 10.10/10.04/9.04 é preciso adicionar o repositório:
</p>

<pre class="brush:shell">sudo add-apt-repository ppa:kilian/trimage
sudo apt-get update
sudo apt-get install trimage</pre>

Para quem preferir, é possível utilizar o Trimage via linha de comando.
  
Para comprimir um arquivo específico faça (um dos dois comandos):

<pre class="brush:shell">trimage -f FILENAME
trimage --file=FILENAME</pre>

Substituindo FILENAME pelo nome do seu arquivo.
  
Para comprimir os arquivos de um diretório inteiro faça (um dos dois comandos):

<pre class="brush:shell">trimage -d DIRETORIO
trimage --directory=DIRETORIO</pre>

Também substituindo DIRETORIO pelo nome do diretório que possui os arquivos.
  
As demais opções no terminal são:

<pre class="brush:shell">--version (Versão de Software)
-h, --help (Ajuda)
-v, --verbose (Modo padrão)
-q, --quiet (Quiet Mode)</pre>

Como de costume, espero que a dica seja útil, e qualquer observação é só colocar nos comentários

Vi enquanto navegava pelo _<a href="http://www.noobslab.com/2013/01/trimage-image-compressor-for.html" target="_blank" rel="nofollow">noobsLAB</a>._ Peguei os códigos da linha de comando no _<a href="http://trimage.org/" target="_blank" rel="nofollow">Site do desenvolvedor</a>_

Abraços.