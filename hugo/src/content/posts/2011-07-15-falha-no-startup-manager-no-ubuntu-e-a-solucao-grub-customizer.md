---
title: 'Falha no Startup Manager no Ubuntu – e a solução: GRUB Customizer'
author: Renato
type: post
date: 2011-07-15T20:46:35+00:00
url: /falha-no-startup-manager-no-ubuntu-e-a-solucao-grub-customizer/
categories:
  - Ubuntu
tags:
  - grub
  - grub-customizer
  - Linux
  - startupmanager
  - Ubuntu

---
**O**s que fizeram a última atualização do Kernell do Ubuntu 11.04 ontem (14 de julho) e utilizavam o &#8220;startupmanager&#8221; para configurar o GRUB notaram que o mesmo não funciona mais neste Kernell.

Ou seja, ao inicializar um computador com dual-boot (no meu caso, Windows + Ubuntu) o sistema livre ficou novamente como padrão para inicialização e o startupmanager não consegue mais reconfigurar. Resumindo: o startupmanager NÃO funciona nesta versão do Ubuntu, com o Kernell atualizado.
  
&#8230;
  
Um pouco de história
  
Lá pelos idos de 2008-2009 quem utilizava o Ubuntu configurava o Grub editando o arquivo &#8220;menu.lst&#8221; e ali (em um arquivo texto) definia qual era o sistema padrão para inicializar. Mas com as novas versões do Ubuntu veio o Grub2 e este arquivo não é mais editado da mesma forma, tornando o processo um pouco mais complicado (nem o explicarei aqui). Então os usuários passaram a utilizar o Startupmanager.

&#8230;

**A SOLUÇÃO**

Graças a Deus temos uma comunidade muito interativa e colaborativa, e pesquisando um pouco na Web eu encontrei a solução e aqui replico para vocês (até porque a encontrei em um site que ainda não conhecia).

1)Abra um terminal e adicione o seguinte repositório:

<div>
  <pre class="brush:shell">sudo add-apt-repository ppa:danielrichter2007/grub-customizer</pre>
</div>

2)Atualize os repositórios:

<div>
  <strong></strong></p> 
  
  <pre class="brush:shell">sudo apt-get update</pre>
</div>

3)Instale o software:
  
****

<div>
  <pre class="brush:shell">sudo apt-get install grub-customizer</pre>
  
  <p>
    O aplicativo se tornará disponível em: Acessórios > Ferramentas de Sistema > GRUB Customizer. Se você está utilizando o Ubuntu Natty com o Unity, aperte &#8220;super&#8221; (a famosa tecla &#8220;Windows&#8221;) e na caixa de texto digite &#8220;grub&#8221;. Ele aparecerá logo abaixo.<br /> Agora, dentro do aplicativo, você terá todas as configurações do GRUB, além de ter opções como colocar imagem no fundo de tela, modificar as cores, o tempo de espera e muito mais.
  </p>
  
  <p>
    Todos os créditos vão para:<br /> <a href="http://www.dihitt.com.br/barra/como-configurar-o-grub-utilizando-a-interface-grafica-no-ubuntu">http://www.dihitt.com.br/barra/como-configurar-o-grub-utilizando-a-interface-grafica-no-ubuntu</a><br /> &#8230;<br /> <strong>Por que utilizar o dual-boot?</strong>
  </p>
  
  <p>
    Meu caso é bem simples: eu utilizo Linux há três anos e nele faço tudo o que preciso, em nível profissional e pessoal. Porém, minha esposa prefere o Windows e para ela eu quis deixar as coisas bem simples: ela liga o computador e entra direto no sistema que ela deseja sem precisar intervir no teclado com nenhuma instrução. Mas para outros casos, muitos desenvolvedores trabalham com softwares para as duas plataformas e necessitam do dual-boot. Outra necessidade, por exemplo, é o mercado de trabalho (uma grande porcentagem ainda utiliza Windows somente).
  </p>
  
  <p>
    Observação: não preciso nem lembrar que as melhores distros Linux enxergam as partições NTFS do Windows.
  </p>
  
  <p>
    Abraços a todos, e fiquem com Deus.
  </p>
</div>

<div>
  <div>
    Twitter: @renatobluesboy
  </div>
  
  <div>
    <a href="http://freelinux-br.blogspot.com/">http://freelinux-br.blogspot.com/</a>
  </div>
</div>