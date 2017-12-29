---
title: Migrando para Linux(Instalando programas parte 2)
author: Ivan Brasil Fuzzer
type: post
date: 2007-08-08T16:45:06+00:00
url: /migrando-para-linuxinstalando-programas-parte-2/
burl:
  - http://ads.tt/1YK2
categories:
  - Ubuntu

---
Voltando as atividades normais vamos falar da segunda forma de instalar programas no Ubuntu. Infelizmente nem todos os programas estão disponíveis em repositórios mas sempre existe um pacote com a extensão deb(programa.deb).

Para você entender melhor, um pacote é arquivo que contém o programa, scripts de instalação e listagem de dependências do programa. Estes pacotes facilitam a instalação por não exigirem que o usuário configure a compilação do programa. Básicamente existem dois tipos de pacotes para Linux, RPM e DEB.

Os pacotes RPM são utilizados pelas distribuições baseadas no Red Hat(Fedora, CentOS, Mandriva, Suse, etc). Estas distribuições começaram seu desenvolvimento com base no Red Hat e então adotaram o empacotamento de aplicações no formato RPM.

Os pacotes DEB são utilizados pelas distribuições baseadas no Debian(Ubuntu, Linspire, Kurumin, Xandros, etc). Estas distribuições começaram seu desenvolvimento com base no Debian e então adotaram o empacotamento de aplicações no formato DEB. Algumas delas, como o Ubuntu, continuam baseando seu desenvolvimento na árvore do Debian, fazendo suas modificações e personalizações.

Agora que você já sabe o que é um pacote e porque o Ubuntu utiliza o formato DEB, vamos fazer a instalação de um pacote para ver como a coisa funciona na prática.

Escolhi uma aplicação que não é de código aberto mas que é necessária para muitas pessoas. O skype para linux não segue o mesmo ritmo de desenvolvimento do skype para windows mas tem as principais funções que são referentes a conversas por voz.

A primeira coisa que temos que fazer é baixar o pacote do skype no site <http://www.skype.com.br/intl/en/download/skype/linux/>. Na imagem abaixo você pode ver como é página. As distribuições suportadas são mostradas e você deve clicar onde está o ícone do Ubuntu seguido da versão(Feisty Fawn 7.04).

<center>
  <a href='http://www.ubuntero.com.br/wp-content/uploads/2007/08/gdebi-1.png' title='Migrando para Linux(Instalando programas parte 2)'><img src='http://www.ubuntero.com.br/wp-content/uploads/2007/08/gdebi-1.thumbnail.png' alt='Migrando para Linux(Instalando programas parte 2)' /></a>
</center>

Na janela que se abre selecione &#8220;Save to disk&#8221;(Salvar para o disco) e espere o download ser concluído.

<center>
  <a href='http://www.ubuntero.com.br/wp-content/uploads/2007/08/gdebi-2.png' title='Migrando para Linux(Instalando programas parte 2)'><img src='http://www.ubuntero.com.br/wp-content/uploads/2007/08/gdebi-2.thumbnail.png' alt='Migrando para Linux(Instalando programas parte 2)' /></a>&nbsp;&nbsp;<a href='http://www.ubuntero.com.br/wp-content/uploads/2007/08/gdebi-3.png' title='Migrando para Linux(Instalando programas parte 2)'><img src='http://www.ubuntero.com.br/wp-content/uploads/2007/08/gdebi-3.thumbnail.png' alt='Migrando para Linux(Instalando programas parte 2)' /></a>&nbsp;&nbsp;<a href='http://www.ubuntero.com.br/wp-content/uploads/2007/08/gdebi-4.png' title='Migrando para Linux(Instalando programas parte 2)'><img src='http://www.ubuntero.com.br/wp-content/uploads/2007/08/gdebi-4.thumbnail.png' alt='Migrando para Linux(Instalando programas parte 2)' /></a>
</center>

Com o download concluído clique em &#8220;Open&#8221;(Abrir). Uma nova janela será aberta. Esta é a janela do Gdebi, ferramenta visual para a instalação de pacotes. A instalação de pacotes .deb pode ser feita também pela linha de comando mas usar a linha de comando não é a idéia destes tutoriais nem do Ubuntu.

<center>
  <a href='http://www.ubuntero.com.br/wp-content/uploads/2007/08/gdebi-5.png' title='Migrando para Linux(Instalando programas parte 2)'><img src='http://www.ubuntero.com.br/wp-content/uploads/2007/08/gdebi-5.thumbnail.png' alt='Migrando para Linux(Instalando programas parte 2)' /></a>
</center>

Clique agore em &#8220;Instalar Pacote&#8221; e a nossa conhecida tela para digitar a senha de administração será mostrada. Digite a senha e a instalação começará.

<center>
  <a href='http://www.ubuntero.com.br/wp-content/uploads/2007/08/gdebi-6.png' title='Migrando para Linux(Instalando programas parte 2)'><img src='http://www.ubuntero.com.br/wp-content/uploads/2007/08/gdebi-6.thumbnail.png' alt='Migrando para Linux(Instalando programas parte 2)' /></a>
</center>

Observe que as dependências serão resolvidas automaticamente pelo Gdebi. Espere que as dependências sejam baixadas.

<center>
  <a href='http://www.ubuntero.com.br/wp-content/uploads/2007/08/gdebi-7.png' title='Migrando para Linux(Instalando programas parte 2)'><img src='http://www.ubuntero.com.br/wp-content/uploads/2007/08/gdebi-7.thumbnail.png' alt='Migrando para Linux(Instalando programas parte 2)' /></a>
</center>

Quando você ver a tela abaixo, a instalação do pacote terá terminado.

<center>
  <a href='http://www.ubuntero.com.br/wp-content/uploads/2007/08/gdebi-8.png' title='Migrando para Linux(Instalando programas parte 2)'><img src='http://www.ubuntero.com.br/wp-content/uploads/2007/08/gdebi-8.thumbnail.png' alt='Migrando para Linux(Instalando programas parte 2)' /></a>
</center>

Você pode fechar as janelas que estão abertas e encontrar o skype instalado no menu Aplicações -> Internet -> Skype.

<center>
  <a href='http://www.ubuntero.com.br/wp-content/uploads/2007/08/gdebi-9.png' title='Migrando para Linux(Instalando programas parte 2)'><img src='http://www.ubuntero.com.br/wp-content/uploads/2007/08/gdebi-9.thumbnail.png' alt='Migrando para Linux(Instalando programas parte 2)' /></a>&nbsp;&nbsp;<a href='http://www.ubuntero.com.br/wp-content/uploads/2007/08/gdebi-10.png' title='Migrando para Linux(Instalando programas parte 2)'><img src='http://www.ubuntero.com.br/wp-content/uploads/2007/08/gdebi-10.thumbnail.png' alt='Migrando para Linux(Instalando programas parte 2)' /></a>
</center>

Ainda existe uma terceira maneira de instalar programas. No próximo artigo irei mostrar o Gerenciador de Pacotes Synaptic. Este gerenciador é muito mais completo que o &#8220;Adicionar/Remover&#8221; e o Gdebi, porém pode parecer um pouquinho mais complexo.

Artigos relacionados

  * [Migrando para Linux(Email)][1]
  * [Migrando para Linux(Gerenciador de arquivos)][2]
  * [Migrando para Linux(Messenger)][3]
  * [Migrando para Linux(Instalando programas parte 3)][4]
  * [Migrando para Linux(Instalando programas)][5]
  * [Migrando para Linux(Instalação)][6]<li
[>Migrando para Linux][7]</li>

 [1]: http://www.ubuntero.com.br/?p=185
 [2]: http://www.ubuntero.com.br/?p=383
 [3]: http://www.ubuntero.com.br/?p=183
 [4]: http://www.ubuntero.com.br/?p=330
 [5]: http://www.ubuntero.com.br/?p=186
 [6]: http://www.ubuntero.com.br/?p=249
 [7]: http://www.ubuntero.com.br/?p=203