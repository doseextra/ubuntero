---
title: Erro de certificado do MSN no Pidgin
author: Ivan Brasil Fuzzer
type: post
date: 2010-11-21T19:26:43+00:00
url: /erro-de-certificado-do-msn-pidgin/
categories:
  - Ubuntu

---
<p style="text-align: center;">
  <a href="http://www.ubuntero.com.br/wp-content/uploads/2010/11/Captura_de_tela4.png"><img class="alignnone size-full wp-image-1190" title="Captura_de_tela" src="http://www.ubuntero.com.br/wp-content/uploads/2010/11/Captura_de_tela4.png" alt="" width="507" height="260" /></a>
</p>

Nos últimos dias o Pidgin passou a apresentar um erro de certificado e raramente se conectava ao protocolo MSN. O problema, logicamente, está diretamente relacionado a mudanças no protocolo feitas pelo desenvolvedor que neste caso é a Microsoft.

Para resolvermos este problema feche o pidgin e execute o comando abaixo no terminal:

<pre class="brush:shell">wget http://claudio-novais.info/ubuntuedFiles/omega.contacts.msn.com -O "omega.contacts.msn.com" && mkdir -p ~/.purple/certificates/x509/tls_peers && mv omega.contacts.msn.com ~/.purple/certificates/x509/tls_peers</pre>

Depois disto é só abrir o pidgin e o problema estará resolvido. Infelizmente esta solução não é permanente e você poderá ter que usá-la mais de uma vez.

O comando foi retirado do blog [Ubuntued][1]

 [1]: http://ubuntued.info/problema-do-certificado-omega-contacts-msn-com-no-pidgin