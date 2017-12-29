---
title: Ocultar Acesso remoto na tela de login do Ubuntu
author: Rudinei Weschenfelder
type: post
date: 2012-12-12T10:10:21+00:00
url: /ocultar-acesso-remoto-na-tela-de-login-do-ubuntu/
burl:
  - http://ads.tt/13VH
  - http://ads.tt/13VH
  - http://ads.tt/13VH
  - http://ads.tt/13VH
  - http://ads.tt/13VH
  - http://ads.tt/13VH
  - http://ads.tt/13VH
  - http://ads.tt/13VH
  - http://ads.tt/13VH
  - http://ads.tt/13VH
  - http://ads.tt/13VH
  - http://ads.tt/13VH
  - http://ads.tt/13VH
  - http://ads.tt/13VH
  - http://ads.tt/13VH
  - http://ads.tt/13VH
  - http://ads.tt/13VH
  - http://ads.tt/13VH
  - http://ads.tt/13VH
  - http://ads.tt/13VH
  - http://ads.tt/13VH
  - http://ads.tt/13VH
  - http://ads.tt/13VH
  - http://ads.tt/13VH
  - http://ads.tt/13VH
  - http://ads.tt/13VH
  - http://ads.tt/13VH
  - http://ads.tt/13VH
  - http://ads.tt/13VH
  - http://ads.tt/13VH
  - http://ads.tt/13VH
  - http://ads.tt/13VH
  - http://ads.tt/13VH
  - http://ads.tt/13VH
categories:
  - Ubuntu
tags:
  - Dicas
  - Personalização
  - Ubuntu

---
A versão 12.10 do **Ubuntu** veio com uma nova funcionalidade chamada &#8220;**Acesso remoto**&#8221; na tela de &#8220;boas-vindas&#8221; (tela de login), conforme pode ser vista na imagem abaixo:<figure id="attachment_4208" style="max-width: 250px" class="wp-caption aligncenter">

<a href="http://www.ubuntero.com.br/wp-content/uploads/2012/12/desativar-acesso-remoto-login-ubuntu-1.png" rel="lightbox"><img class=" wp-image-4208  " title="acesso remoto na tela de login ubuntu" alt="acesso remoto na tela de login ubuntu" src="http://www.ubuntero.com.br/wp-content/uploads/2012/12/desativar-acesso-remoto-login-ubuntu-1.png" width="250" height="210" /></a><figcaption class="wp-caption-text">clique para ampliar</figcaption></figure> 

Através dessa opção é possível acessar um **servidor remoto** sem a necessidade de logar primeiro na máquina.

O &#8220;Acesso remoto&#8221; na tela de login está habilitado por padrão no Ubuntu 12.10, e como a grande maioria dos usuários não utiliza essa funcionalidade, existe a possibilidade de ocultar essa opção na tela de login.

Siga os passos a seguir para **ocultar o &#8220;Acesso remoto&#8221; na tela de login**:

Abra o terminal e digite:

<pre class="brush:plain">sudo gedit /etc/lightdm/lightdm.conf</pre>

No final do arquivo adicione:

<pre class="brush:plain">greeter-show-remote-login=false</pre><figure id="attachment_4209" style="max-width: 200px" class="wp-caption aligncenter">

<a href="http://www.ubuntero.com.br/wp-content/uploads/2012/12/desativar-acesso-remoto-login-ubuntu-2.png" rel="lightbox"><img class=" wp-image-4209   " title="desativar acesso remoto login ubuntu" alt="desativar acesso remoto login ubuntu" src="http://www.ubuntero.com.br/wp-content/uploads/2012/12/desativar-acesso-remoto-login-ubuntu-2-150x93.png" width="200" height="160" /></a><figcaption class="wp-caption-text">clique para ampliar</figcaption></figure> 

Salve o arquivo e reinicie o computador.

Observe que agora a tela de login do Ubuntu não terá mais a opção de &#8220;Acesso remoto&#8221;:<figure id="attachment_4210" style="max-width: 250px" class="wp-caption aligncenter">

<a href="http://www.ubuntero.com.br/wp-content/uploads/2012/12/desativar-acesso-remoto-login-ubuntu-3.png" rel="lightbox"><img class="size-medium wp-image-4210 " title="desativar acesso remoto no login do ubuntu 12.10" alt="desativar acesso remoto no login do ubuntu 12.10" src="http://www.ubuntero.com.br/wp-content/uploads/2012/12/desativar-acesso-remoto-login-ubuntu-3-300x245.png" width="250" height="210" /></a><figcaption class="wp-caption-text">clique para ampliar</figcaption></figure> 

Quer desfazer tudo isso e voltar a exibir novamente a opção de &#8220;Acesso remoto&#8221;?

Então abra o Terminal e digite:

<pre class="brush:plain">sudo gedit /etc/lightdm/lightdm.conf</pre>

Após remova a linha:

<pre class="brush:plain">greeter-show-remote-login=false</pre>

Salve o arquivo e reinicie o computador.

Agora a opção de Acesso remoto irá aparecer novamente.

Boa sorte! 😉