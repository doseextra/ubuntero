---
title: exFAT no Ubuntu
author: Ivan Brasil Fuzzer
type: post
date: 2012-08-02T13:39:41+00:00
url: /exfat-no-ubuntu/
categories:
  - Ubuntu
tags:
  - exfat
  - fisl
  - Linux
  - macos
  - Ubuntu

---
<p style="text-align: center;">
  <a href="http://www.ubuntero.com.br/wp-content/uploads/2012/08/antes-depois-33.jpg"><img class="alignnone size-thumbnail wp-image-3810" title="antes e depois(ex gorda)" src="http://www.ubuntero.com.br/wp-content/uploads/2012/08/antes-depois-33-150x112.jpg" alt="" width="150" height="112" /></a>
</p>

Durante o [FISL 13][1] convivi com pessoas que utilizam Linux em seus Mac&#8217;s e inevitavelmente um pendrive com sistema de arquivos exFAT caiu em minhas mãos. No primeiro momento eu disse para a pessoa que o sistema de arquivos não era suportado pelo Linux, mas ele mesmo me disse que tem uma maneira de habilitar este suporte e me passou o link que está no final do artigo. Antes que eu esqueça, quem deu a dica foi o [Andrei Zuse][2].

Para sermos rápidos, abra o terminal pressionando Ctrl+Alt+t e digite os seguintes comandos:

<pre class="brush:shell">sudo apt-add-repository ppa:relan/exfat
sudo apt-get update
sudo apt-get install fuse-exfat</pre>

Pronto, agora o seu Ubuntu tem suporte a exFAT, a versão do Ubuntu tem que ser igual ou superior a 11.10 para o pendrive ser montado automagicamente, caso seja anterior a montagem tem que ser feita manualmente.

**Fonte: [UbuntuDicas][3]**

 [1]: http://fisl.org.br/13/
 [2]: https://www.facebook.com/andrei.j.zuse
 [3]: http://www.ubuntudicas.com.br/blog/2012/01/como-habilitar-exfat-no-ubuntu/