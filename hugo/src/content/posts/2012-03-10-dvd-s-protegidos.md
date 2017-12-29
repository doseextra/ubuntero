---
title: DVD’s protegidos
author: Ivan Brasil Fuzzer
type: post
date: 2012-03-10T12:45:53+00:00
url: /dvd-s-protegidos/
categories:
  - Ubuntu
tags:
  - dvd
  - dvd protegido
  - Linux
  - medibuntu
  - multimidia
  - Ubuntu

---
A ideia de fazer este artigo veio do pedido de ajuda de um Ubuntero que entrou em contato comigo por e-mail para tentar resolver o problema com alguns DVD&#8217;s protegidos. Sim isto mostra muito bem porque estas proteções não são nada boas.

Sem enrolação, vamos ao que é necessário para que todos possam assistir aos seus DVD&#8217;s originais que custaram caro.

Abra o terminal, pressione Ctrl+Alt+t, e digite ou cole estes comandos(os comandos são bem grandes, por isso recomendo que copie e cole):

<pre class="brush:shell">sudo -E wget --output-document=/etc/apt/sources.list.d/medibuntu.list http://www.medibuntu.org/sources.list.d/$(lsb_release -cs).list && sudo apt-get --quiet update && sudo apt-get --yes --quiet --allow-unauthenticated install medibuntu-keyring && sudo apt-get --quiet update
sudo apt-get install app-install-data-medibuntu apport-hooks-medibuntu</pre>

Depois digite o seguinte comando:

<pre class="brush:shell">sudo apt-get install libdvdcss2</pre>

Pronto, agora você já consegue assistir aos seus DVD&#8217;s.

O que fizemos com estes comandos foi adicionar o repositório Medibuntu que é um repositório de programas e bibliotecas voltado a sistemas multimídia. Nele temos algumas bibliotecas que não podem ser distribuídas por padrão por exigirem pagamento de licenças em alguns países, isto não se aplica ao Brasil.

Se quiser saber mais sobre o Medibuntu, visite o site do projeto em <http://medibuntu.org/>