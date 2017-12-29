---
title: Visualizando arquivos .pdf no Mozilla Firefox
author: Rudinei Weschenfelder
type: post
date: 2012-10-01T11:00:56+00:00
url: /visualizando-arquivos-pdf-no-mozilla-firefox/
burl:
  - http://ads.tt/Wf-Ycw
  - http://ads.tt/Wf-Ycw
  - http://ads.tt/Wf-Ycw
  - http://ads.tt/Wf-Ycw
  - http://ads.tt/Wf-Ycw
  - http://ads.tt/Wf-Ycw
  - http://ads.tt/Wf-Ycw
  - http://ads.tt/Wf-Ycw
  - http://ads.tt/Wf-Ycw
  - http://ads.tt/Wf-Ycw
  - http://ads.tt/Wf-Ycw
  - http://ads.tt/Wf-Ycw
  - http://ads.tt/Wf-Ycw
  - http://ads.tt/Wf-Ycw
  - http://ads.tt/Wf-Ycw
  - http://ads.tt/Wf-Ycw
  - http://ads.tt/Wf-Ycw
  - http://ads.tt/Wf-Ycw
  - http://ads.tt/Wf-Ycw
  - http://ads.tt/Wf-Ycw
  - http://ads.tt/Wf-Ycw
  - http://ads.tt/Wf-Ycw
  - http://ads.tt/Wf-Ycw
  - http://ads.tt/Wf-Ycw
  - http://ads.tt/Wf-Ycw
  - http://ads.tt/Wf-Ycw
  - http://ads.tt/Wf-Ycw
  - http://ads.tt/Wf-Ycw
  - http://ads.tt/Wf-Ycw
  - http://ads.tt/Wf-Ycw
  - http://ads.tt/Wf-Ycw
  - http://ads.tt/Wf-Ycw
  - http://ads.tt/Wf-Ycw
  - http://ads.tt/Wf-Ycw
  - http://ads.tt/Wf-Ycw
  - http://ads.tt/Wf-Ycw
  - http://ads.tt/Wf-Ycw
categories:
  - Ubuntu
tags:
  - Dicas
  - Firefox

---
No **[Ubuntero on Air 1][1]** comentamos sobre a possibilidade de **visualizar/abrir arquivos .pdf dentro do navegador Mozilla Firefox**, uma funcionalidade que já existe no Google Chrome e que também será nativa nas próximas versões do Firefox.

Para quem quiser habilitar a opção de **abrir arquivos .pdf no Firefox**, siga as instruções a seguir:

1) Abra o Firefox e na barra de url digite: _**about:config**_ e depois aperte ENTER.<figure id="attachment_4009" style="max-width: 300px" class="wp-caption aligncenter">

[<img class="size-medium wp-image-4009" src="http://www.ubuntero.com.br/wp-content/uploads/2012/09/visualizar-pdf-no-firefox-1-300x157.png" alt="visualizar pdf no firefox (passo 1)" width="300" height="157" />][2]<figcaption class="wp-caption-text">(clique para ampliar)</figcaption></figure> 

2) Irá aparecer uma mensagem pedindo para você tomar cuidado com as modificações que irá fazer, clique em &#8220;**Serei cuidadoso, prometo!**&#8221;<figure id="attachment_4010" style="max-width: 300px" class="wp-caption aligncenter">

[<img class="size-medium wp-image-4010" src="http://www.ubuntero.com.br/wp-content/uploads/2012/09/visualizar-pdf-no-firefox-2-300x211.png" alt="visualizar pdf no Firefox (passo 2)" width="300" height="211" />][3]<figcaption class="wp-caption-text">(clique para ampliar)</figcaption></figure> 

3) Na barra de Localizar, digite: _**pdfjs**_ e nas opções que irão aparecer, dê dois cliques sobre o item_ **pdfjs.disabled**_. Essa ação irá mudar o valor de _true_ para _false_.<figure id="attachment_4011" style="max-width: 300px" class="wp-caption aligncenter">

[<img class="size-medium wp-image-4011" src="http://www.ubuntero.com.br/wp-content/uploads/2012/09/visualizar-pdf-no-firefox-3-300x211.png" alt="visualizar pdf no Firefox (passo 3)" width="300" height="211" />][4]<figcaption class="wp-caption-text">(clique para ampliar)</figcaption></figure> 

Após o procedimento acima, é só fechar e abrir novamente o Firefox e pronto. Agora durante a navegação, ao clicar em um link que contenha arquivo .pdf, ele irá abrir diretamente no navegador.

Se você não gostou dessa nova funcionalidade, **poderá desabilitar** refazendo os passos acima, e no passo 3) dê dois cliques novamente sobre o item _**pdfjs.disabled**_. Essa ação irá mudar o valor de _false_ para _true_. Depois é só fechar e abrir novamente o Firefox para não abrir mais arquivos .pdf diretamente no navegador.

Testado no Ubuntu 12.04 e 12.10 com Firefox versão 15.

 [1]: http://www.ubuntero.com.br/2012/09/ubuntero-on-air-1/ "Ubuntero on Air 1"
 [2]: http://www.ubuntero.com.br/wp-content/uploads/2012/09/visualizar-pdf-no-firefox-1.png
 [3]: http://www.ubuntero.com.br/wp-content/uploads/2012/09/visualizar-pdf-no-firefox-2.png
 [4]: http://www.ubuntero.com.br/wp-content/uploads/2012/09/visualizar-pdf-no-firefox-3.png