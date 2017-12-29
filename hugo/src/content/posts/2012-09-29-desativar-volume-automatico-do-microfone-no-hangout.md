---
title: Desativar volume automático do microfone no Hangout
author: Ivan Brasil Fuzzer
type: post
date: 2012-09-29T23:41:26+00:00
url: /desativar-volume-automatico-do-microfone-no-hangout/
burl:
  - http://ads.tt/xJROYw
  - http://ads.tt/xJROYw
  - http://ads.tt/xJROYw
  - http://ads.tt/xJROYw
  - http://ads.tt/xJROYw
  - http://ads.tt/xJROYw
  - http://ads.tt/xJROYw
  - http://ads.tt/xJROYw
  - http://ads.tt/xJROYw
  - http://ads.tt/xJROYw
  - http://ads.tt/xJROYw
  - http://ads.tt/xJROYw
  - http://ads.tt/xJROYw
  - http://ads.tt/xJROYw
  - http://ads.tt/xJROYw
  - http://ads.tt/xJROYw
  - http://ads.tt/xJROYw
  - http://ads.tt/xJROYw
  - http://ads.tt/xJROYw
  - http://ads.tt/xJROYw
  - http://ads.tt/xJROYw
  - http://ads.tt/xJROYw
  - http://ads.tt/xJROYw
  - http://ads.tt/xJROYw
  - http://ads.tt/xJROYw
  - http://ads.tt/xJROYw
  - http://ads.tt/xJROYw
  - http://ads.tt/xJROYw
  - http://ads.tt/xJROYw
  - http://ads.tt/xJROYw
  - http://ads.tt/xJROYw
  - http://ads.tt/xJROYw
  - http://ads.tt/xJROYw
  - http://ads.tt/xJROYw
  - http://ads.tt/xJROYw
  - http://ads.tt/xJROYw
  - http://ads.tt/xJROYw
categories:
  - Ubuntu
tags:
  - hangout
  - Linux
  - Ubuntu

---
Depois de participar, e desistir, de alguns hangout&#8217;s devido a problemas com áudio, finalmente encontrei uma solução.

O Google Hangout implementa controle automático de volume e não permite que isto seja desabilitado na tela de configuração. O problema é que em locais com muito ruído, como onde eu moro, em algum momento o hangout tenta subir o volume para captar o ruído de fundo e isso causa chiadeira para todos que estão ouvindo.

Para resolver você deve ir nas configurações do hangout e salve a configuração sem precisar fazer nenhum tipo de alteração.

<p style="text-align: center;">
  <a href="http://www.ubuntero.com.br/wp-content/uploads/2012/09/Captura-de-tela-de-2012-09-29-203328.png"><img class="alignnone size-thumbnail wp-image-4004" title="Configuração google hangout" src="http://www.ubuntero.com.br/wp-content/uploads/2012/09/Captura-de-tela-de-2012-09-29-203328-150x101.png" alt="" width="150" height="101" /></a>
</p>

Agora temos que editar o arquivo .config/google-googletalkplugin/options que foi criado. Para isso abra o arquivo no gedit ou outro editor simples de arquivos  e altere a linha audio-flags. Você deve deixar como abaixo:

<pre class="brush:plain">audio-flags=1</pre>

Pronto agora o hangout não tentará alterar o seu volume automaticamente.