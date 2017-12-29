---
title: Re-habilitar os ícones na bandeja do sistema
author: Ivan Brasil Fuzzer
type: post
date: 2011-05-02T12:00:18+00:00
url: /re-habilitar-os-icones-na-bandeja-do-sistema/
categories:
  - Ubuntu
tags:
  - Linux
  - systray
  - Ubuntu

---
Instalou o Ubuntu 11.04 e viu que algumas aplicações não aparecem mais na bandeja? Isto acontece porque o Ubuntu 11.04 utiliza uma &#8220;lista branca&#8221; dos aplicativos que podem ocupar esta área para evitar que a barra superior fique poluída com muitas aplicações.

Esta função, quando bem utilizada, é útil e pode ser restabelecida com os seguintes comandos no terminal:

### Restabelecer para todos os programas

<pre class="brush:shell">gsettings set com.canonical.Unity.Panel systray-whitelist "['all']"</pre>

### Restabelecer aplicações específicas

<pre class="brush:shell">gsettings set com.canonical.Unity.Panel systray-whitelist "['JavaEmbeddedFrame', 'Mumble', 'Wine', 'Skype', 'hp-systray', 'YOUR_APPLICATION']"</pre>

Substitua &#8216;YOUR_APPLICATION&#8217; pela aplicação que deve entrar na &#8220;lista branca&#8221;, os outros aplicativos fazem parte da lista padrão.

Depois do comando é necessário encerrar a sessão e iniciar novamente.