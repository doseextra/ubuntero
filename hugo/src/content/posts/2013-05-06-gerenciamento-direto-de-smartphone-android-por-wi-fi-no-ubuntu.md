---
title: Gerenciamento direto de Smartphone Android por wi-fi no Ubuntu
author: Ivan Brasil Fuzzer
type: post
date: 2013-05-06T12:30:23+00:00
url: /gerenciamento-direto-de-smartphone-android-por-wi-fi-no-ubuntu/
burl:
  - http://ads.tt/3IP9
  - http://ads.tt/3IP9
  - http://ads.tt/3IP9
  - http://ads.tt/3IP9
  - http://ads.tt/3IP9
  - http://ads.tt/3IP9
  - http://ads.tt/3IP9
  - http://ads.tt/3IP9
  - http://ads.tt/3IP9
  - http://ads.tt/3IP9
  - http://ads.tt/3IP9
  - http://ads.tt/3IP9
  - http://ads.tt/3IP9
  - http://ads.tt/3IP9
  - http://ads.tt/3IP9
  - http://ads.tt/3IP9
  - http://ads.tt/3IP9
  - http://ads.tt/3IP9
  - http://ads.tt/3IP9
  - http://ads.tt/3IP9
  - http://ads.tt/3IP9
  - http://ads.tt/3IP9
  - http://ads.tt/3IP9
  - http://ads.tt/3IP9
categories:
  - Ubuntu
tags:
  - Android
  - Linux
  - Ubuntu

---
**Artigo enviado por Cailon França de Castro([@cailondecastro][1])**

Por vezes temos que transferir um arquivo do **smartphone** para o computador (ou o inverso) mas nos damos conta de que não estamos com o cabo USB ou nos é desconfortável remover o cartão de memória e adapta-lo ao PC ou notebook. Outra coisa bem desconfortável era a necessidade de estarem conectados notebook e smartphone em uma mesma rede wi-fi por meio de um roteador para transferir arquivos.

Assim resolvi escrever este _post_ demonstrando uma solução simples para conectar diretamente o aparelho com **Android** e o computador com **Ubuntu** criando um ponto de acesso através do <a title="Baixe o AirdDroid no seu Android" href="https://play.google.com/store/apps/details?id=com.sand.airdroid&hl=pt_BR" target="_blank" rel="nofollow">AirDroid</a> (programa disponível no Google Play).

*Para realizar os procedimentos que serão descritos a seguir não é necessário instalar nenhum software no seu computador. Instale apenas o AirDroid no smartphone.

Após instalar o AirDroid no seu aparelho Android acesse-o pelo menu do seu smartphone:
  
<a href="http://www.ubuntero.com.br/wp-content/uploads/2013/05/airdroid-1.png" rel="lightbox"><img class="size-medium wp-image-5320 aligncenter" title="AirDroid Tela 1" alt="AirDroid Tela 1" src="http://www.ubuntero.com.br/wp-content/uploads/2013/05/airdroid-1-200x300.png" width="200" height="300" /></a>

Quando o AirDroid abrir toque na opção ferramentas na parte superior da tela (ou arraste a tela para esquerda), depois escolha a opção &#8216;Tethering&#8217;:

<p style="text-align: center;">
  <a href="http://www.ubuntero.com.br/wp-content/uploads/2013/05/airdroid-2.png" rel="lightbox-album"><img class="alignnone size-medium wp-image-5321" title="AirDroid Tela 2" alt="AirDroid Tela 2" src="http://www.ubuntero.com.br/wp-content/uploads/2013/05/airdroid-2-200x300.png" width="200" height="300" /></a> <a href="http://www.ubuntero.com.br/wp-content/uploads/2013/05/airdroid-3.png" rel="lightbox-album"><img class="alignnone size-medium wp-image-5322" title="AirDroid Tela 3" alt="AirDroid Tela 3" src="http://www.ubuntero.com.br/wp-content/uploads/2013/05/airdroid-3-200x300.png" width="200" height="300" /></a>
</p>

Depois de tocar na opção Tethering o AirDroid solicita que seja ativado um &#8216;ponto de acesso portátil&#8217; no seu smartphone, para ativar seu ponto de acesso toque em iniciar depois marque a opção &#8216;ponto de acesso Wi-Fi&#8217; no seu smartphone:

<p style="text-align: center;">
  <a href="http://www.ubuntero.com.br/wp-content/uploads/2013/05/airdroid-4.png" rel="lightbox-album"><img class="alignnone size-medium wp-image-5323" title="AirDroid Tela 4" alt="AirDroid Tela 4" src="http://www.ubuntero.com.br/wp-content/uploads/2013/05/airdroid-4-200x300.png" width="200" height="300" /></a> <a href="http://www.ubuntero.com.br/wp-content/uploads/2013/05/airdroid-5.png" rel="lightbox-album"><img class="alignnone size-medium wp-image-5324" title="AirDroid Tela 5" alt="AirDroid Tela 5" src="http://www.ubuntero.com.br/wp-content/uploads/2013/05/airdroid-5-200x300.png" width="200" height="300" /></a>
</p>

Agora você precisa conectar o seu computador ao smartphone, vá no ícone de rede do seu computador, selecione o seu aparelho e conecte:

<p style="text-align: center;">
  <a href="http://www.ubuntero.com.br/wp-content/uploads/2013/05/airdroid-6.png" rel="lightbox-album"><img class="alignnone size-medium wp-image-5325" title="Tela de conexão Wi-fi Ubuntu" alt="Tela de conexão Wi-fi Ubuntu" src="http://www.ubuntero.com.br/wp-content/uploads/2013/05/airdroid-6-300x300.png" width="300" height="300" /></a> <a href="http://www.ubuntero.com.br/wp-content/uploads/2013/05/airdroid-7.png" rel="lightbox-album"><img class="alignnone size-medium wp-image-5326" title="Tela de autenticação Wi-fi Ubuntu" alt="Tela de autenticação Wi-fi Ubuntu" src="http://www.ubuntero.com.br/wp-content/uploads/2013/05/airdroid-7-300x122.png" width="300" height="122" /></a>
</p>

*os aparelhos tem um nome e senha de rede próprios de fábrica, você pode altera-los (ou visualizar sua senha) na opção &#8216;configurar ponto de acesso&#8217;:

<p style="text-align: center;">
  <a href="http://www.ubuntero.com.br/wp-content/uploads/2013/05/airdroid-8.png" rel="lightbox"><img class="aligncenter size-medium wp-image-5327" title="Tela de conexão Wi-fi Android" alt="Tela de conexão Wi-fi Android" src="http://www.ubuntero.com.br/wp-content/uploads/2013/05/airdroid-8-200x300.png" width="200" height="300" /></a>
</p>

Depois de estabelecida a conexão entre o PC e o smartphone é mostrado na tela do smartphone um endereço IP para acessa-lo no computador. Abra seu navegador de internet e digite o endereço mostrado no AirDroid, então aparecerá uma mensagem de confirmação na tela do seu smartphone, depois é só aceitar a conexão.

<p style="text-align: center;">
  <a href="http://www.ubuntero.com.br/wp-content/uploads/2013/05/airdroid-9.png" rel="lightbox"><img class="aligncenter size-medium wp-image-5328" title="Tela inicial do AirDroid via acesso remoto" alt="Tela inicial do AirDroid via acesso remoto" src="http://www.ubuntero.com.br/wp-content/uploads/2013/05/airdroid-9-300x168.png" width="300" height="168" /></a>
</p>

Desse modo você terá acesso total ao seu aparelho Android direto no seu navegador e poderá carregar e baixar arquivos, ouvir músicas, digitar e enviar mensagens e até mesmo acessar a câmera do smartphone.

**OBS: este modo de acesso é recomendado quando você não pode (ou não quer) usar um roteador como ponte para enviar ou baixar seus arquivos.**

*Disponível para Android 2.3 ou superior.

 [1]: https://twitter.com/cailondecastro