---
title: Recuperando arquivos apagados com o PhotoRec
author: Ivan Brasil Fuzzer
type: post
date: 2013-04-20T15:58:12+00:00
url: /recuperando-arquivos-apagados-com-o-photorec/
burl:
  - http://ads.tt/2O1S
  - http://ads.tt/2O1S
  - http://ads.tt/2O1S
  - http://ads.tt/2O1S
  - http://ads.tt/2O1S
  - http://ads.tt/2O1S
  - http://ads.tt/2O1S
  - http://ads.tt/2O1S
  - http://ads.tt/2O1S
  - http://ads.tt/2O1S
  - http://ads.tt/2O1S
  - http://ads.tt/2O1S
  - http://ads.tt/2O1S
  - http://ads.tt/2O1S
  - http://ads.tt/2O1S
  - http://ads.tt/2O1S
  - http://ads.tt/2O1S
  - http://ads.tt/2O1S
  - http://ads.tt/2O1S
  - http://ads.tt/2O1S
  - http://ads.tt/2O1S
  - http://ads.tt/2O1S
  - http://ads.tt/2O1S
  - http://ads.tt/2O1S
  - http://ads.tt/2O1S
  - http://ads.tt/2O1S
  - http://ads.tt/2O1S
  - http://ads.tt/2O1S
categories:
  - Ubuntu
tags:
  - Linux
  - PhotoRec
  - recuperar arquivos
  - testdisk
  - Ubuntu

---
Em um artigo anterior mostrei **[como recuperar partições usando o programa TestDisk][1]**, mas o título dizia que também era possível **recuperar arquivos** e é isto que mostrarei neste artigo. Juntamente com o **TestDisk**, o **PhotoRec** é instalado e é ele quem pode te salvar depois de ter apagado arquivos importantes. O mais importante neste processo é evitar utilizar o disco ou pendrive que contém os dados a ser recuperados para evitar que os dados sejam sobrescritos e a recuperação seja impossível. Para este tutorial vou levar em conta que você seguiu os passos do artigo anterior onde era ensinado [**como instalar o TestDisk**][2]. Abra o Terminal pressionado `Ctrl+Alt+t` e digite o comando:

<pre class="brush:shell">sudo photorec</pre>

Agora escolha o dispositivo onde estavam os arquivos que deseja recuperar. <a href="http://www.ubuntero.com.br/wp-content/uploads/2013/04/photorec-1.png" rel="lightbox"><img class="size-thumbnail wp-image-5170 aligncenter" title="photorec-1" alt="photorec-1" src="http://www.ubuntero.com.br/wp-content/uploads/2013/04/photorec-1-150x95.png" width="150" height="95" /></a> Agora escolha uma partição para procurar ou todo o disco. <a href="http://www.ubuntero.com.br/wp-content/uploads/2013/04/photorec-2.png" rel="lightbox"><img class="size-thumbnail wp-image-5171 aligncenter" title="photorec-2" alt="photorec-2" src="http://www.ubuntero.com.br/wp-content/uploads/2013/04/photorec-2-150x95.png" width="150" height="95" /></a> Escolha o sistema de arquivos do HD ou pendrive onde a procura será feita. <a href="http://www.ubuntero.com.br/wp-content/uploads/2013/04/photorec-3.png" rel="lightbox"><img class="size-thumbnail wp-image-5172 aligncenter" title="photorec-3" alt="photorec-3" src="http://www.ubuntero.com.br/wp-content/uploads/2013/04/photorec-3-150x95.png" width="150" height="95" /></a> Selecione onde irá salvar os arquivos encontrados e quando estiver no diretório pressione a tecla C.

<p style="text-align: center;">
  <a href="http://www.ubuntero.com.br/wp-content/uploads/2013/04/photorec-5.png" rel="lightbox"><img class="size-thumbnail wp-image-5173" title="photorec-5" alt="photorec-5" src="http://www.ubuntero.com.br/wp-content/uploads/2013/04/photorec-5-150x95.png" width="150" height="95" /></a> <a href="http://www.ubuntero.com.br/wp-content/uploads/2013/04/photorec-6.png" rel="lightbox"><img class="size-thumbnail wp-image-5174" title="photorec-6" alt="photorec-6" src="http://www.ubuntero.com.br/wp-content/uploads/2013/04/photorec-6-150x95.png" width="150" height="95" /></a>
</p>

Agora é só aguardar a conclusão do processo que vai demorar conforme o tamanho do dispositivo.

<p style="text-align: center;">
  <a href="http://www.ubuntero.com.br/wp-content/uploads/2013/04/photorec-7.png" rel="lightbox"><img class="size-thumbnail wp-image-5175" title="photorec-7" alt="photorec-7" src="http://www.ubuntero.com.br/wp-content/uploads/2013/04/photorec-7-150x95.png" width="150" height="95" /></a> <a href="http://www.ubuntero.com.br/wp-content/uploads/2013/04/photorec-8.png" rel="lightbox"><img class="size-thumbnail wp-image-5176" title="photorec-8" alt="photorec-8" src="http://www.ubuntero.com.br/wp-content/uploads/2013/04/photorec-8-150x95.png" width="150" height="95" /></a>
</p>

Quando finalizado, você verá uma estrutura de diretórios parecida com esta abaixo onde estarão os arquivos recuperados. <a href="http://www.ubuntero.com.br/wp-content/uploads/2013/04/photorec-10.png" rel="lightbox"><img class="size-thumbnail wp-image-5177 aligncenter" title="photorec-10" alt="photorec-10" src="http://www.ubuntero.com.br/wp-content/uploads/2013/04/photorec-10-150x108.png" width="150" height="108" /></a>

 [1]: http://www.ubuntero.com.br/2013/04/recupere-arquivos-e-ate-particoes-com-o-testdisk/ "Como recuperar partições usando o programa testdisk no Ubuntu"
 [2]: http://www.ubuntero.com.br/2013/04/recupere-arquivos-e-ate-particoes-com-o-testdisk/ "Recupere arquivos e até partições com o testdisk"