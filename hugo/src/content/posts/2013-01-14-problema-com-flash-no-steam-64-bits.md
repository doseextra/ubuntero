---
title: Problema com flash no Steam 64 bits
author: Ivan Brasil Fuzzer
type: post
date: 2013-01-14T19:38:23+00:00
url: /problema-com-flash-no-steam-64-bits/
burl:
  - http://ads.tt/TMQ
  - http://ads.tt/TMQ
  - http://ads.tt/TMQ
  - http://ads.tt/TMQ
  - http://ads.tt/TMQ
  - http://ads.tt/TMQ
  - http://ads.tt/TMQ
  - http://ads.tt/TMQ
  - http://ads.tt/TMQ
  - http://ads.tt/TMQ
  - http://ads.tt/TMQ
  - http://ads.tt/TMQ
  - http://ads.tt/TMQ
  - http://ads.tt/TMQ
  - http://ads.tt/TMQ
  - http://ads.tt/TMQ
  - http://ads.tt/TMQ
  - http://ads.tt/TMQ
  - http://ads.tt/TMQ
  - http://ads.tt/TMQ
  - http://ads.tt/TMQ
  - http://ads.tt/TMQ
  - http://ads.tt/TMQ
  - http://ads.tt/TMQ
  - http://ads.tt/TMQ
  - http://ads.tt/TMQ
  - http://ads.tt/TMQ
  - http://ads.tt/TMQ
  - http://ads.tt/TMQ
  - http://ads.tt/TMQ
  - http://ads.tt/TMQ
  - http://ads.tt/TMQ
  - http://ads.tt/TMQ
categories:
  - Jogos
  - Ubuntu
tags:
  - flash
  - Jogos
  - Linux
  - Steam
  - Ubuntu

---
<p style="text-align: center;">
  <a href="http://www.ubuntero.com.br/wp-content/uploads/2013/01/Captura-de-tela-de-2013-01-14-172218.png" rel="lightbox"><img class="size-medium wp-image-4458 aligncenter" title="Problema com flash no Steam Ubuntu 64 bits" alt="Problema com flash no Steam Ubuntu 64 bits" src="http://www.ubuntero.com.br/wp-content/uploads/2013/01/Captura-de-tela-de-2013-01-14-172218-300x168.png" width="300" height="168" /></a>
</p>

Se você, com muitos Ubunteros, está usando o **Steam** Beta e seu **Ubuntu** é **64 bits**, já deve ter notado que os vídeos em **flash** não são mostrados. O problema é simples de ser resolvido e é causado pelo Steam não pegar o flash instalado no sistema, ele usa um que deveria estar na pasta de configuração do próprio Steam, mas não está.

Para contornar este pequeno empecilho siga estes passos:

  1. Baixe o flash do site por este <a href="http://get.adobe.com/flashplayer/completion/?installer=Flash_Player_11.2_for_other_Linux_%28.tar.gz%29_32-bit" target="_blank" rel="nofollow">link</a>.
  2. Descompacte o arquivo libflashplayer.so na sua pasta pessoal.
  3. Crie o diretório de plugins com o comando <pre class="brush:shell">mkdir -p ~/.local/share/Steam/ubuntu12_32/plugins</pre>

  4. Copie o arquivo libflashplayer.so para a pasta criada com o comando <pre class="brush:shell">cp ~/install_flash_player_11_linux.i386/libflashplayer.so ~/.local/share/Steam/ubuntu12_32/plugins</pre>

  5. Instale o pacote com o comando <pre class="brush:shell">sudo apt-get install libxt6:i386</pre>

  6. Reinicie o Steam.

No meu caso que tinha instalado o Steam no primeiro beta que apareceu de forma extra oficial, foi necessário mais um passo que foi copiar o arquivo libflashplayer.so para outro tiretório. Para isso usei os seguintes comandos:

<pre class="brush:shell">mkdir ~/Steam/ubuntu12_32/plugins
cp libflashplayer.so ~/Steam/ubuntu12_32/plugins/</pre>

Pronto, agora você pode ver os vídeos dos jogos antes de baixar.

Fonte: <a href="http://www.webupd8.org/2013/01/how-to-get-flash-player-to-work-with.html" target="_blank" rel="nofollow">WebUpd8</a>