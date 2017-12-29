---
title: 5º Tema – Elementary
author: Anderson Henrique
type: post
date: 2011-03-26T21:16:44+00:00
url: /5º-tema-elementary/
categories:
  - Ubuntu
tags:
  - 5º tema
  - elementary
  - série de temas
  - tema
  - Ubuntu

---
<!-- 		@page { margin: 2cm } 		P { margin-bottom: 0.21cm } -->Essa semana não tive tempo algum para planejar um tema bem elaborado, mas não foi algo necessariamente ruim, já que o post de hoje, é destinado completamente à instalação do Elementary, que é, sem sombra de dúvidas um dos temas mais usados como base para outros, se esse não for o mais. Mas convenhamos, se já o instalou, sabe bem do que falo, é simplesmente incrível. Com seus tons cinzas, e alguns pontos mais escuros, fazem do mesmo, uma das melhores alternativas para temas. Mas sabem o melhor de tudo isso? O Elementary tem um repositório, fazendo que sempre tenhas as últimas melhorias para o tema. A instalação do tema é bastante simples, e após instalado, basta que selecione nas 

_Preferências de Aparência._ Para realizar a instalação basta que tenha terminal aberto <span style="font-size: x-small;">(</span><span style="font-size: x-small;"><em><strong>Aplicações → Acessórios → Terminal</strong></em></span><span style="font-size: x-small;"><em>). </em></span>

<p lang="pt-BR">
  <span style="font-size: small;">Antes de instalarmos o tema, quero frisar que há duas opções para o tema, a instalação simples, que somente instala o tema GTK, pacotes de ícones e alguns wallpapers. Por outro lado, temos a instalação completa do tema, com tudo o que vem no tema simples, mais funcionalidades para o Nautilus. </span><span style="font-size: small;">Caso queira somente a instalação simples, digite:</span>
</p>

<p lang="pt-BR">
  <span style="font-size: small;"></p> 
  
  <pre class="brush:shell">sudo add-apt-repository ppa:elementaryart && sudo apt-get update && sudo apt-get install elementary-theme elementary-icon-theme elementary-wallpapers</pre>
  
  <p>
    </span>Mas caso deseje a versão completa do tema, rode o seguinte no terminal aberto:
  </p>
  
  <p lang="pt-BR">
    <pre class="brush:shell">sudo add-apt-repository ppa:am-monkeyd/nautilus-elementary-ppa && sudo add-apt-repository ppa:elementaryart && sudo apt-get update && sudo apt-get install elementary-theme elementary-icon-theme elementary-wallpapers && sudo apt-get upgrade && nautilus -q</pre>
    
    <p>
      Feito isso já terá o tema instalado em vossa máquina. Para por o tema pronto para funcionar em sua máquina basta ir nas Preferências de Aparência e selecionar o Elementary <span style="font-size: x-small;">(</span><span style="font-size: x-small;"><em><strong>Sistema → Preferência → Aparência). </strong></em></span>
    </p>
    
    <p lang="pt-BR">
      <span style="font-size: small;">Creio que o seu sistema irá tentar selecionar o tema de ícones </span><span style="font-size: small;"><em>Elementary Dark, </em></span><span style="font-size: small;">mas o mesmo acaba retornando um erro informando não est</span><span style="font-size: small;">ar</span><span style="font-size: small;"> instalado, para isso selecione o ícone de nome </span><span style="font-size: small;"><em>Elementary. </em></span>
    </p>
    
    <p lang="pt-BR">
      <span style="font-size: small;">Agora, vamos instalar a AWN, uma excelente dock. O processo de instalação é simples, vá no terminal e digite:</span>
    </p>
    
    <p lang="pt-BR">
      <span style="font-size: small;"></p> 
      
      <pre class="brush:shell">sudo add-apt-repository ppa:awn-testing/ppa && sudo apt-get update && sudo apt-get install avant-window-navigator-trunk</pre>
      
      <p>
        </span>
      </p>
      
      <p>
        <span style="font-size: small;">Feito isso, terá ela instalada em seu sistema. Se for de seu gosto, substitua o painel do Gnome pela dock, para isso, vá no terminal e digite o seguinte:</span>
      </p>
      
      <blockquote>
        <p>
          <span style="font-size: small;">gconf-editor</span>
        </p>
      </blockquote>
      
      <p>
        <span style="font-size: small;">Vá em </span><span style="font-size: small;"><em>Desktop, Session, gnome </em></span><span style="font-size: small;">e lá altere o valor de nome </span><span style="font-size: small;"><em>gnome-panel </em></span><span style="font-size: small;">por </span><span style="font-size: small;"><em>avant-window-navigator</em></span><span style="font-size: small;">. Antes de fechar a sessão para que seja efetuada a retirada do painel, é recomendado que abra a AWN. Adicione um novo dock, movendo-o para cima e adicione mini aplicações para substituir o painel do Gnome. São ele o AWN Main Menu, File Browser Launcher, o Sistray e o Indicator Applet. Depois coloque a AWN para arrancar com o sistema. </span><span style="font-size: small;">Pronto, agora basta usufruir de um dos mais belos temas já criados. Até semana que vem e fiquem abaixo com um print da minha tela. </span>
      </p><figure id="attachment_1970" style="max-width: 547px" class="wp-caption aligncenter">
      
      <a href="http://www.ubuntero.com.br/wp-content/uploads/2011/03/5º-tema.png"><img class="size-large wp-image-1970  " title="Tema Elementary" src="http://www.ubuntero.com.br/wp-content/uploads/2011/03/5º-tema-1024x614.png" alt="" width="547" height="327" /></a><figcaption class="wp-caption-text">*Clique na imagem para ampliar*</figcaption></figure>