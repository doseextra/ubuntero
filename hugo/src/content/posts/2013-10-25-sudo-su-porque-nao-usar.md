---
title: Sudo su, porque não usar?
author: Ivan Brasil Fuzzer
type: post
date: 2013-10-25T11:16:43+00:00
url: /sudo-su-porque-nao-usar/
burl:
  - http://ads.tt/H7KG
  - http://ads.tt/H7KG
categories:
  - Ubuntu
tags:
  - Linux
  - segurança
  - sudo
  - Ubuntu

---
<p style="text-align: center;">
  <a href="http://www.ubuntero.com.br/wp-content/uploads/2013/10/tirinha-sudo.png"><img class="alignnone size-medium wp-image-6180" alt="tirinha-sudo" src="http://www.ubuntero.com.br/wp-content/uploads/2013/10/tirinha-sudo-300x249.png" width="300" height="249" /></a>
</p>

Uma prática muito usual entre novos e experientes usuários é a utilização do comando sudo. Ele é muito útil por permitir executar comandos administrativos sem que seja necessário logar-se com o usuário root. Porém, vejo muita gente cometendo um erro e esse é muito difundido por sites que deveriam difundir a maneira correta de se fazer as coisas.

A primeira coisa que temos que corrigir é que o sudo não serve apenas para executar programas como root, ele serve para executar como qualquer outro usuário, depende da política de segurança em suas configurações, o padrão do Ubuntu é executar como root.

A ideia deste post não é falar sobre todas as possibilidades apresentadas pelo comando sudo, mas sim falar sobre uma prática que não é a ideal, o uso do comando &#8220;sudo su&#8221;. Já vi muita gente dizendo que usou o comando &#8220;sudo su&#8221; e não conseguiu executar comandos ou obteve erros na execução, claro que só fiquei sabendo que tinha sido usado o &#8220;sudo su&#8221; depois de muita conversa.

Ao usar o comando &#8220;sudo su&#8221;, você usará o usuário root para fazer suas tarefas sem precisar digitar novamente o comando sudo, porém, você não fez o login como usuário root e arquivos essenciais não foram carregados como o .profile e o .login além de variáveis de ambiante que são específicas do usuário root.

## Como resolver este problema então?

Simples, utilize o comando &#8220;sudo -i&#8221;. Desta forma você continua tendo a mesma funcionalidade, mas agora você será realmente o usuário root e terá carregado tudo o que é necessário para realmente ser considerado um super usuário no Linux, sem precisar habilitar este usuário.

Mesmo mostrando como fazer, eu ainda prefiro não utilizar nenhum dos comandos, o ideal é usar o comando &#8220;sudo -i comando&#8221; que terá o mesmo efeito, mas será só para o comando que está executando, o que evita problemas futuros.

Gostou da dica? Compartilha nas suas redes sociais!