---
title: Melhorar qualidade de som de vídeos
author: Ivan Brasil Fuzzer
type: post
date: 2011-10-24T13:15:44+00:00
url: /melhorar-qualidade-de-som-de-videos/
categories:
  - Ubuntu
tags:
  - audacity
  - ffmpeg
  - Linux
  - mencoder
  - openshot
  - som
  - Ubuntu

---
Editando o último vídeo feito para o Ubuntero, tive a necessidade de melhorar a qualidade do som no vídeo final. O que acontece é que as placas de som da maioria dos computadores é analógica e isso por si só já é o suficiente para sempre ter algum ruído no sinal, independente da qualidade da placa ou do microfone usado para a gravação.

Durante a gravação isto pode ser amenizado utilizando microfones de melhor qualidade e regulando de maneira adequada o volume. Mesmo assim, sempre terá um pouco de ruído quando utilizarmos qualquer sistema analógico no processo.

Para resolvermos o problema do ruído precisaremos utilizar pelo menos 3 programas que podemos instalar abrindo o terminal(Ctrl+Alt+t) e digitando o seguinte comando:

<pre class="brush:shell">sudo apt-get install winff audacity openshot</pre>

Depois dos programas editados, abra o winff pressionando a tecla Super e digitando winff.

<p style="text-align: center;">
  <a href="http://www.ubuntero.com.br/wp-content/uploads/2011/10/Captura-de-tela-em-2011-10-23-151458.png"><img class="alignnone size-medium wp-image-2785" title="Captura de tela em 2011-10-23 15:14:58" src="http://www.ubuntero.com.br/wp-content/uploads/2011/10/Captura-de-tela-em-2011-10-23-151458-300x206.png" alt="" width="300" height="206" /></a>
</p>

<p style="text-align: left;">
  Clique no botão Adicionar e selecione o vídeo que quer melhorar o som. O que faremos será separar o som do vídeo para editarmos no audacity depois. Na imagem abaixo você pode ver como deve selecionar as opções para gerar o arquivo de áudio separado.
</p>

<p style="text-align: center;">
  <a href="http://www.ubuntero.com.br/wp-content/uploads/2011/10/Captura-de-tela-em-2011-10-23-151828.png"><img class="alignnone size-medium wp-image-2786" title="Captura de tela em 2011-10-23 15:18:28" src="http://www.ubuntero.com.br/wp-content/uploads/2011/10/Captura-de-tela-em-2011-10-23-151828-300x206.png" alt="" width="300" height="206" /></a>
</p>

<p style="text-align: left;">
  Depois de selecionar o arquivo e as opções conforme a imagem, clique no botão &#8220;Converter&#8221;. Uma janela do terminal será aberta e a conversão começará a ser feita. Quando aparecer a frase &#8220;Pressione enter para continuar&#8221; no terminal, faça o que está sendo pedido e seu arquivo terá sido convertido.
</p>

<p style="text-align: center;">
  <a href="http://www.ubuntero.com.br/wp-content/uploads/2011/10/Captura-de-tela-em-2011-10-23-152524.png"><img class="alignnone size-medium wp-image-2787" title="Captura de tela em 2011-10-23 15:25:24" src="http://www.ubuntero.com.br/wp-content/uploads/2011/10/Captura-de-tela-em-2011-10-23-152524-300x192.png" alt="" width="300" height="192" /></a>
</p>

<p style="text-align: left;">
  Agora vamos a edição para reduzir o ruído do arquivo de áudio que separamos do vídeo. Abra o audacity pressionando a tecla Super e digitando audacity e pressionando Enter.
</p>

<p style="text-align: center;">
  <a href="http://www.ubuntero.com.br/wp-content/uploads/2011/10/Captura-de-tela-em-2011-10-23-160052.png"><img class="alignnone size-medium wp-image-2788" title="Captura de tela em 2011-10-23 16:00:52" src="http://www.ubuntero.com.br/wp-content/uploads/2011/10/Captura-de-tela-em-2011-10-23-160052-300x216.png" alt="" width="300" height="216" /></a>
</p>

<p style="text-align: left;">
  Vá no menu Arquivo >> Importar >> Áudio e selecione o arquivo que acabamos de separar do vídeo. Após importado, clique na ferramenta de lupa e vá clicando nas ondas do áudio até que a escala seja de um segundo. Selecione novamente a ferramenta de seleção e selecione uma parte do áudio que tenha apenas o ruído que deseja remover.
</p>

<p style="text-align: center;">
  <a href="http://www.ubuntero.com.br/wp-content/uploads/2011/10/Captura-de-tela-em-2011-10-23-160416.png"><img class="alignnone size-medium wp-image-2789" title="Captura de tela em 2011-10-23 16:04:16" src="http://www.ubuntero.com.br/wp-content/uploads/2011/10/Captura-de-tela-em-2011-10-23-160416-300x216.png" alt="" width="300" height="216" /></a> <a href="http://www.ubuntero.com.br/wp-content/uploads/2011/10/Captura-de-tela-em-2011-10-23-160537.png"><img class="alignnone size-medium wp-image-2790" title="Captura de tela em 2011-10-23 16:05:37" src="http://www.ubuntero.com.br/wp-content/uploads/2011/10/Captura-de-tela-em-2011-10-23-160537-300x216.png" alt="" width="300" height="216" /></a>
</p>

<p style="text-align: left;">
  Agora vá no menu Efeitos >> &#8220;Remover Ruídos&#8221; e clique no botão &#8220;Get Noise Profile&#8221;. Agora selecione o áudio todo com o atalho Ctrl+a e volte no menu Efeitos >> &#8220;Remover Ruídos&#8221;, mas desta vez clique no botão OK. Neste ponto já pode conferir a diferença visual das ondas e poderá ouvir o áudio sem ou com muito menos ruído.
</p>

<p style="text-align: center;">
  <a href="http://www.ubuntero.com.br/wp-content/uploads/2011/10/Captura-de-tela-em-2011-10-23-161105.png"><img class="alignnone size-medium wp-image-2791" title="Captura de tela em 2011-10-23 16:11:05" src="http://www.ubuntero.com.br/wp-content/uploads/2011/10/Captura-de-tela-em-2011-10-23-161105-300x238.png" alt="" width="300" height="238" /></a> <a href="http://www.ubuntero.com.br/wp-content/uploads/2011/10/Captura-de-tela-em-2011-10-23-160803.png"><img class="alignnone size-medium wp-image-2792" title="Captura de tela em 2011-10-23 16:08:03" src="http://www.ubuntero.com.br/wp-content/uploads/2011/10/Captura-de-tela-em-2011-10-23-160803-300x206.png" alt="" width="300" height="206" /></a> <a href="http://www.ubuntero.com.br/wp-content/uploads/2011/10/Captura-de-tela-em-2011-10-23-160822.png"><img class="alignnone size-medium wp-image-2793" title="Captura de tela em 2011-10-23 16:08:22" src="http://www.ubuntero.com.br/wp-content/uploads/2011/10/Captura-de-tela-em-2011-10-23-160822-300x216.png" alt="" width="300" height="216" /></a>
</p>

<p style="text-align: left;">
  Para finalizar o processo, temos que exportar nosso áudio limpo para podermos usar no próximo passo. Vá no menu Arquivo >> Exportar. Selecione o local onde vai guardar o arquivo, pode ser o mesmo local onde está o som que extraímos do vídeo e com o mesmo nome, basta dizer sim quando for perguntado para substituir. Uma janela para digitar informações sobre o áudio será aberta, estes dados não são obrigatórios mas podem servir para identificar a autoria do mesmo. Editando ou não, clique no botão OK e aguarde o final da exportação.
</p>

<p style="text-align: center;">
  <a href="http://www.ubuntero.com.br/wp-content/uploads/2011/10/Captura-de-tela-em-2011-10-23-164427.png"><img class="alignnone size-medium wp-image-2798" title="Captura de tela em 2011-10-23 16:44:27" src="http://www.ubuntero.com.br/wp-content/uploads/2011/10/Captura-de-tela-em-2011-10-23-164427-300x255.png" alt="" width="300" height="255" /></a> <a href="http://www.ubuntero.com.br/wp-content/uploads/2011/10/Captura-de-tela-em-2011-10-23-164607.png"><img class="alignnone size-medium wp-image-2799" title="Captura de tela em 2011-10-23 16:46:07" src="http://www.ubuntero.com.br/wp-content/uploads/2011/10/Captura-de-tela-em-2011-10-23-164607-300x149.png" alt="" width="300" height="149" /></a>
</p>

<p style="text-align: left;">
  Agora que nosso áudio está devidamente limpo, vamos juntar tudo com o vídeo. Poderíamos gerar um vídeo sem o áudio também e com um comando juntar novamente o vídeo com o áudio sem o ruído, mas este procedimento não se demonstrou preciso com as ferramentas disponíveis. Como alternativa preferi inserir o vídeo e o áudio em faixas diferentes no Openshot e deixei o áudio do vídeo mudo, ficando assim com o áudio que tratamos em outra trilha, mas em sincronia com o vídeo.
</p>

<p style="text-align: left;">
  Este procedimento foi testado com vídeos no formato OGV e pode ter sido isto que não manteve a sincronia entre vídeo e áudio na tentativa de juntar os dois no final do processo, por isso fiz da maneira que mostro neste tutorial. Talvez com vídeos em outros formatos o problema de sincronia não aconteça, mas isto poderá ser motivo para um outro tutorial em um outro momento.
</p>