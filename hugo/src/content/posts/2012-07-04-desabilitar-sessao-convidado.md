---
title: Desabilitar sessão convidado
author: Ivan Brasil Fuzzer
type: post
date: 2012-07-04T11:00:48+00:00
url: /desabilitar-sessao-convidado/
categories:
  - Ubuntu
tags:
  - Linux
  - sessão convidado
  - Ubuntu

---
Já se perguntou para que serve a &#8220;Sessão convidado&#8221;? Esta sessão é muito útil quando várias pessoas precisam usar o computador temporariamente e você não quer que suas configurações sejam alteradas ou até arrumar um problema devido a acesso a sites indevidos. A sessão convidado tem o desktop completo, mas ao efetuar logoff, todas as informações são apagadas para o próximo login na sessão convidado.

Se o computador é utilizado apenas por você, esta funcionalidade deixa de ser interessante e você pode desabilitá-la da seguinte maneira.

Pressione Alt+F2 e digite o seguinte comando:

<pre class="brush:shell">gksu gedit /etc/lightdm/lightdm.conf</pre>

Adicione no final do arquivo esta linha:

<pre class="brush:shell">allow-guest=false</pre>

Salve o arquivo e reinicie o sistema e de quebra libere espaço próximo ao relógio. Para habilitar a sessão convidado novamente, abra o arquivo com o mesmo comando e remova a linha que acabou de adicionar.

<p style="text-align: center;">
  <a href="http://www.ubuntero.com.br/wp-content/uploads/2012/07/Captura-de-tela-de-2012-07-03-213019.png"><img class="alignnone size-medium wp-image-3706" title="Tela de login" src="http://www.ubuntero.com.br/wp-content/uploads/2012/07/Captura-de-tela-de-2012-07-03-213019-300x230.png" alt="" width="300" height="230" /></a> <a href="http://www.ubuntero.com.br/wp-content/uploads/2012/07/Captura-de-tela-de-2012-07-03-213152.png"><img class="alignnone size-medium wp-image-3707" title="Sem usuário na bandeja do sistema" src="http://www.ubuntero.com.br/wp-content/uploads/2012/07/Captura-de-tela-de-2012-07-03-213152-300x163.png" alt="" width="300" height="163" /></a>
</p>