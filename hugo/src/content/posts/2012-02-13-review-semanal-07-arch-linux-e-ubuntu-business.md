---
title: Review semanal 07 – Arch Linux e Ubuntu Business
author: Ivan Brasil Fuzzer
type: post
date: 2012-02-13T10:43:58+00:00
url: /review-semanal-07-arch-linux-e-ubuntu-business/
burl:
  - http://ads.tt/TLE
  - http://ads.tt/TLE
  - http://ads.tt/TLE
  - http://ads.tt/TLE
  - http://ads.tt/TLE
  - http://ads.tt/TLE
  - http://ads.tt/TLE
  - http://ads.tt/TLE
  - http://ads.tt/TLE
  - http://ads.tt/TLE
  - http://ads.tt/TLE
  - http://ads.tt/TLE
  - http://ads.tt/TLE
  - http://ads.tt/TLE
  - http://ads.tt/TLE
  - http://ads.tt/TLE
  - http://ads.tt/TLE
  - http://ads.tt/TLE
  - http://ads.tt/TLE
  - http://ads.tt/TLE
  - http://ads.tt/TLE
  - http://ads.tt/TLE
  - http://ads.tt/TLE
  - http://ads.tt/TLE
  - http://ads.tt/TLE
  - http://ads.tt/TLE
  - http://ads.tt/TLE
  - http://ads.tt/TLE
  - http://ads.tt/TLE
  - http://ads.tt/TLE
  - http://ads.tt/TLE
  - http://ads.tt/TLE
  - http://ads.tt/TLE
  - http://ads.tt/TLE
  - http://ads.tt/TLE
  - http://ads.tt/TLE
  - http://ads.tt/TLE
  - http://ads.tt/TLE
  - http://ads.tt/TLE
  - http://ads.tt/TLE
  - http://ads.tt/TLE
  - http://ads.tt/TLE
  - http://ads.tt/TLE
categories:
  - Ubuntu
  - VídeoCast
tags:
  - Arch Linux
  - Linux
  - Review
  - Ubuntu
  - Vídeo

---
Problemas de energia marcaram meu final de semana e atrasaram a edição do _review_ e a gravação do **Opencast** que vai atrasa em mais uma semana.

No review desta semana mostro a difícil tarefa de instalar a distribuição **Arch Linux** e um pouco do recém lançado **Ubuntu Business Desktop Remix**.

<div class="video">
</div>

<p class="button">
  <a title="Assistir no Youtube" onclick="javascript:_gaq.push(['_trackEvent','outbound-article','http://www.youtube.com']);" href="http://www.youtube.com/watch?v=cnSYsc-VX7g" target="_blank" rel="nofollow">Assistir no Youtube</a>
</p>

## Links do episódio

  * <a href="http://www.archlinux.org/" target="_blank" rel="nofollow">Arch Linux</a>
  * <a href="http://www.ubuntu.com/business/desktop/remix/download" target="_blank" rel="nofollow">Ubuntu Business Desktop Remix</a>

Instalação do Arch Linux

Para a instalação segui as dicas do livro abaixo que está livremente disponível para download.

Após a instalação passei por problemas que não estavam documentas no livro ou não tive tanta paciência para procurar no livro. O primeiro problema que tive foi ao tentar atualizar o sistema onde erros eram mostrados, mas resolvei com dois simples comando:

<pre class="brush:shell">mv /etc/pacman.conf /etc/pacman.conf.old
cp /etc/pacman.conf.pacnew /etc/pacman.conf</pre>

Depois o sistema não queria atualizar porque o arquivo de configuração das partições já existia e resolvi com o seguinte comando:

<pre class="brush:shell">pacman -S filesystem --force</pre>

Novamente apareceram erros referentes ao _locales.sh_ que resolvi apagando o arquivo.

Por último fiz a instalação da interface gráfica do Gnome com o seguinte comando:

<pre class="brush:shell">pacman -S gnome</pre>

Apenas pressionei Enter quando me eram feitas perguntas sobre outros pacotes para instalar.

Feito isto eu tinha o básico do sistema instalado com uma interface gráfica.

Para mais informações recomendo fortemente a <a href="https://wiki.archlinux.org/index.php/Main_Page" target="_blank" rel="nofollow">wiki</a> da distribuição para tirar dúvidas e resolver problemas.