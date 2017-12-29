---
title: Área de Trabalho mostrando arquivos da pasta pessoal
author: Ivan Brasil Fuzzer
type: post
date: 2013-08-20T14:32:11+00:00
url: /area-de-trabalho-mostrando-arquivos-da-pasta-pessoal/
burl:
  - http://ads.tt/AD7J
  - http://ads.tt/AD7J
categories:
  - Ubuntu
tags:
  - 13.04
  - 13.10
  - área de trabalho
  - Nautilus
  - Ubuntu

---
Ainda não encontrei o que gerou o problema, mas eu estava com minha área de trabalho mostrando os arquivos e pastas da pastas pessoal. Isto aconteceu após voltar o Ubuntu da versão 13.10 para a 13.04 mantendo a mesma partição home que também havia sido utilizada pelo [Elementary OS][1](não estou dizendo que a culpa é do [Elementary OS][1]).

Uma breve busca pelos arquivos de configuração do sistema e o problema foi resolvido. O arquivo de configuração onde são definidas as pastas padrão do sistema estava sem a referência para a área de trabalho, estava apenas apontando para o home.

Como resolver? Abra o gerenciador de arquivos, segundo ícone do lançador se você não mudou ele de lugar.

<p style="text-align: center;">
  <a href="http://www.ubuntero.com.br/wp-content/uploads/2013/08/nautilus-1.png"><img class="alignnone size-full wp-image-5909" alt="nautilus-1" src="http://www.ubuntero.com.br/wp-content/uploads/2013/08/nautilus-1.png" width="188" height="118" /></a>
</p>

Agora pressione as teclas Ctrl+h para mostrar os arquivos e pastas ocultos e procure pela pasta .config e entrenela. Lá procure pelo arquivo user-dirs.dir e abra-o.

<p style="text-align: center;">
  <a href="http://www.ubuntero.com.br/wp-content/uploads/2013/08/nautilus-2.png"><img class="alignnone size-medium wp-image-5910" alt="nautilus-2" src="http://www.ubuntero.com.br/wp-content/uploads/2013/08/nautilus-2-300x252.png" width="300" height="252" /></a> <a href="http://www.ubuntero.com.br/wp-content/uploads/2013/08/nautilus-3.png"><img class="alignnone size-medium wp-image-5911" alt="nautilus-3" src="http://www.ubuntero.com.br/wp-content/uploads/2013/08/nautilus-3-300x252.png" width="300" height="252" /></a>
</p>

O arquivo deve estar com a seguinte informação para estar correto:

<pre class="brush:plain"># This file is written by xdg-user-dirs-update
# If you want to change or add directories, just edit the line you're
# interested in. All local changes will be retained on the next run
# Format is XDG_xxx_DIR="$HOME/yyy", where yyy is a shell-escaped
# homedir-relative path, or XDG_xxx_DIR="/yyy", where /yyy is an
# absolute path. No other format is supported.
# 
XDG_DESKTOP_DIR="$HOME/Área de Trabalho"
XDG_DOWNLOAD_DIR="$HOME/Downloads"
XDG_TEMPLATES_DIR="$HOME/Modelos"
XDG_PUBLICSHARE_DIR="$HOME/Público"
XDG_DOCUMENTS_DIR="$HOME/Documentos"
XDG_MUSIC_DIR="$HOME/Música"
XDG_PICTURES_DIR="$HOME/Imagens"
XDG_VIDEOS_DIR="$HOME/Vídeos"</pre>

Caso não esteja, você pode alterar os caminhos, lembrando que o &#8220;$HOME/&#8221; deve estar presente em todas as linhas.

Para valer a nova configuração, é necessário reiniciar a sessão ou o computador.

 [1]: http://www.ubuntero.com.br/2013/08/videocast-41-elementary-os/