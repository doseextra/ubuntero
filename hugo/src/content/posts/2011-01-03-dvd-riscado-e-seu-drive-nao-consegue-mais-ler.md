---
title: DVD riscado e seu drive não consegue mais ler?
author: Ivan Brasil Fuzzer
type: post
date: 2011-01-03T02:37:55+00:00
url: /dvd-riscado-e-seu-drive-nao-consegue-mais-ler/
categories:
  - Ubuntu
tags:
  - cd
  - ddrescue
  - dvd
  - recuperação
  - recuperar cd
  - recuperar dvd
  - Ubuntu

---
Neste final de semana passei por esta situação com um DVD importante para seu proprietário. Os dados no DVD eram muito importante e uma cópia de segurança era extremamente necessária, no entanto a cópia não foi feita a tempo e a mídia já estava totalmente riscada.

Como solução imediata pensei no comando &#8220;dd&#8221; no terminal, mas para minha surpresa eu conseguia copiar apenas 4.9 MB de dados antes de receber a mensagem de que a mídia estava com defeito. Tentei utilizar outros drives de outros computadores e consegui melhorar a situação para 13 MB, o que ainda não era o suficiente. Foi aí que conheci o &#8220;ddrescue&#8221;.

Este programa está disponível nos repositórios do Ubuntu e pode ser instalo pela Central de programas do Ubuntu

<p style="text-align: center;">
  <a href="http://www.ubuntero.com.br/wp-content/uploads/2011/01/Captura_de_tela.png"><img class="size-thumbnail wp-image-1253 aligncenter" title="Captura_de_tela" src="http://www.ubuntero.com.br/wp-content/uploads/2011/01/Captura_de_tela-150x92.png" alt="" width="150" height="92" /></a>
</p>

<p style="text-align: left;">
  Infelizmente a reparação é feita totalmente pelo terminal. Para executar a recuperação você deve digitar o seguinte comando:
</p>

<p style="text-align: left;">
  <pre class="brush:shell">sudo ddrescue /dev/cdrom imagem.iso</pre>
  
  <p>
    Após digitar o comando e pressionar Enter, aguarde por algum tempo, dependendo do quão danificado estiver o seu DVD a recuperação pode levar muitas horas, o que foi o meu caso. Na imagem abaixo você pode ver como o programa se apresenta enquanto está tentando recuperar uma mídia.
  </p>
  
  <p style="text-align: center;">
    <a href="http://www.ubuntero.com.br/wp-content/uploads/2011/01/Captura_de_tela-1.png"><img class="alignnone size-thumbnail wp-image-1254" title="Captura_de_tela-1" src="http://www.ubuntero.com.br/wp-content/uploads/2011/01/Captura_de_tela-1-150x107.png" alt="" width="150" height="107" /></a>
  </p>
  
  <p style="text-align: left;">
    Ao final do processo de recuperação, grave a imagem criada em uma nova mídia, como fazer isso? Mostrarei em um próximo artigo em breve.
  </p>