---
title: Resolvendo problema ao abrir o cliente de twitter Polly
author: Ivan Brasil Fuzzer
type: post
date: 2013-11-18T17:50:23+00:00
url: /resolvendo-problema-ao-abrir-o-cliente-de-twitter-polly/
burl:
  - http://ads.tt/K80R
  - http://ads.tt/K80R
categories:
  - Ubuntu
tags:
  - bug
  - keyring
  - Linux
  - Polly
  - python
  - Twitter
  - Ubuntu

---
Após uma atualização do cliente de Twitter Polly, não consegui mais abrir o programa. Fui notar isso só alguns dias após fazer a atualização devido ao feriadão onde não tinha internet disponível para acessar o programa.

O erro que estava sendo mostrado é o seguinte:

<pre class="brush:plain">Polly 0.93.11 (pre-alpha 3.11)
Copyright (C) 2011 Marcelo Hashimoto
cache path: /home/ivan/.cache/polly
config path: /home/ivan/.config/polly
data home: /home/ivan/.local/share/polly
Traceback (most recent call last):
  File "/usr/bin/polly", line 241, in &lt;module&gt;
    from polly import setting, gui
  File "/usr/lib/python2.7/dist-packages/polly/__init__.py", line 344, in &lt;module&gt;
    import external, setting, proxy, shortener, iconset, twitter, gui
  File "/usr/lib/python2.7/dist-packages/polly/gui/__init__.py", line 177, in &lt;module&gt;
    import frontend, dialog, color, font, theme, basic, status, twitter, header, indicator, stream, shell
  File "/usr/lib/python2.7/dist-packages/polly/gui/twitter/__init__.py", line 992, in &lt;module&gt;
    import lead, post, topic, shelf, database, account
  File "/usr/lib/python2.7/dist-packages/polly/gui/twitter/account.py", line 40, in &lt;module&gt;
    from polly.external import keyring
  File "/usr/lib/python2.7/dist-packages/polly/external/keyring/__init__.py", line 9, in &lt;module&gt;
    from keyring.core import set_keyring, get_keyring, set_password, get_password
ImportError: No module named keyring.core</pre>

O mais importante nestas linhas todas é a última linha que diz exatamente o que está faltando no sistema(ok, nem tão exatamente assim).

A solução é bem simples, basta instalar o pacote python-keyring que não está na lista de dependências do pacote polly. Para instalar, abra a central de programas do Ubuntu e procure por python-keyring.

Selecione o pacote e clique em instalar.

<p style="text-align: center;">
  <a href="http://www.ubuntero.com.br/wp-content/uploads/2013/11/python-keyring.png"><img class="alignnone size-medium wp-image-6263" alt="python-keyring" src="http://www.ubuntero.com.br/wp-content/uploads/2013/11/python-keyring-300x169.png" width="300" height="169" /></a>
</p>

Digite a sua senha e aguarde o pacote ser instalado. Após isso é só abrir o programa como sempre fez.