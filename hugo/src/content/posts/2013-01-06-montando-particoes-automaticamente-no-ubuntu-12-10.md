---
title: Montando Partições Automaticamente no Ubuntu 12.10
author: Daniel Quirino
type: post
date: 2013-01-06T19:00:28+00:00
url: /montando-particoes-automaticamente-no-ubuntu-12-10/
burl:
  - http://ads.tt/TQQ
  - http://ads.tt/TQQ
  - http://ads.tt/TQQ
  - http://ads.tt/TQQ
  - http://ads.tt/TQQ
  - http://ads.tt/TQQ
  - http://ads.tt/TQQ
  - http://ads.tt/TQQ
  - http://ads.tt/TQQ
  - http://ads.tt/TQQ
  - http://ads.tt/TQQ
  - http://ads.tt/TQQ
  - http://ads.tt/TQQ
  - http://ads.tt/TQQ
  - http://ads.tt/TQQ
  - http://ads.tt/TQQ
  - http://ads.tt/TQQ
  - http://ads.tt/TQQ
  - http://ads.tt/TQQ
  - http://ads.tt/TQQ
  - http://ads.tt/TQQ
  - http://ads.tt/TQQ
  - http://ads.tt/TQQ
  - http://ads.tt/TQQ
  - http://ads.tt/TQQ
  - http://ads.tt/TQQ
  - http://ads.tt/TQQ
  - http://ads.tt/TQQ
  - http://ads.tt/TQQ
  - http://ads.tt/TQQ
  - http://ads.tt/TQQ
  - http://ads.tt/TQQ
  - http://ads.tt/TQQ
  - http://ads.tt/TQQ
categories:
  - Ubuntu
tags:
  - Linux
  - ntfs
  - Ubuntu
  - Windows

---
Olá Ubunteros!

Aqui vai uma dica para quem usa o **Ubuntu** em _dual boot_ com o **Windows** ou possui HD&#8217;s ou partições em NTFS.

Quem usa o Ubuntu sabe que o formato padrão dos arquivos de sistemas não é o famoso NTFS usado pela Microsoft no Windows (entre os mais comuns no **Linux** estão os Ext2, Ext3, Ext4, JFS e btrfs), e que, por padrão, partições que possuem o NTFS como formato padrão de arquivos de sistema não são montadas automaticamente na inicialização do Ubuntu, o que às vezes pode se tornar um problema ou simplesmente se tornar algo incômodo (no meu caso, minhas bibliotecas de músicas, fotos e documentos ficam numa partição NTFS comum ao Windows e ao Ubuntu, e que eventualmente, quando não montada, fazia o **Clementine** não encontrar minhas músicas assim que fosse inciado, dentre outras coisas mais, que por vezes incomodaram minha paciência).

Entretanto, segui estes passos abaixo e resolvi meu problema com a inicialização automática de partições NTFS no meu Ubuntu 12.10 (Não testei no 12.04 LTS, mas acredito que funcione bem do mesmo jeito). Para colocar sua partição/HD NTFS para montar automaticamente é simples:

Primeiro abra o Terminal com `Ctrl+Alt+T` e digite:

<pre class="brush:shell">sudo blkid</pre>

Este comando vai listar as partições do seu PC e dizer o formato de cada uma.
  
Vamos precisar do campo com o **UUID** das partições **NTFS**.

Copie o campo **UUID** da partição **NTFS**

<a href="http://www.ubuntero.com.br/2013/01/montando-particoes-automaticamente-no-ubuntu-12-10/sudo-blkid-uuid-ntfs/" rel="lightbox"><img class="wp-image-4276 aligncenter" title="Montar partição ntfs automaticamente no ubuntu" alt="Montar partição ntfs automaticamente no ubuntu" src="http://www.ubuntero.com.br/wp-content/uploads/2013/01/sudo-blkid-UUID-NTFS.png" width="508" height="161" /><br /> </a>Neste caso utilizarei o UUID da partição &#8220;Arquivos e Backups&#8221;.

Agora, ainda no Terminal, rode o comando:

<pre class="brush:shell">gksu gedit /etc/fstab</pre>

<p style="text-align: justify;">
  Quando o arquivo abrir, adicione esse trecho ao final do arquivo (na última linha mesmo):
</p>

<pre class="brush:shell">UUID=xxxxxxxxxxx /media/Windows ntfs-3g defaults 0 0</pre>

Substituindo o UUID pelo UUID da partição NTFS que você escolheu para montar automaticamente.
  
Deve ficar algo parecido com isso:

<p style="text-align: center;">
  <a href="http://www.ubuntero.com.br/2013/01/montando-particoes-automaticamente-no-ubuntu-12-10/uuid-gedit-adicionado/" rel="lightbox"><img class="wp-image-4282 aligncenter" title="UUID gedit adicionado" alt="UUID gedit adicionado" src="http://www.ubuntero.com.br/wp-content/uploads/2013/01/UUID-gedit-adicionado.png" width="543" height="418" /></a>
</p>

Agora salve as modificações no arquivo, feche e execute o seguinte comando para criar a pasta  `/media/Windows`

<pre class="brush:shell">sudo mkdir -p /media/Windows</pre>

E para terminar execute o comando para ter as permissões de acesso a pasta criada, no caso se tornar o “dono” dela:

<pre class="brush:shell">sudo chown -R username /media/Windows</pre>

Substituindo `username` pelo nome de sua conta de usuário.

Pronto! Agora é só reiniciar o PC que a partição vai ser montada automaticamente!

E aí? Tudo funcionou direitinho com você também? Qualquer dúvida ou observação é só colocar aí nos comentários.

Até a próxima.

Vi enquanto navegava pelo _<a href="http://www.liberiangeek.net/2012/12/automatically-mount-ntfs-partitions-in-ubuntu-12-10-quantal-quetzal/" target="_blank" rel="nofollow">Liberian Geek</a>._