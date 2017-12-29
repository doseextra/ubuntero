---
title: Ubuntu Server 7.10 Beta
author: Marcos André Lucas
type: post
date: 2007-09-27T23:57:50+00:00
url: /ubuntu-server-710-beta/
burl:
  - http://ads.tt/1YGN
categories:
  - Ubuntu

---
Conforme o anúncio feito pelo Ivan [no post anterior][1], já está disponível a versão beta da nova versão do Ubuntu. No mesmo link indicado, encontramos entre as opções de download a versão Server da distribuição.

Além de compartilhar algumas novidades da versão desktop, algumas alterações são dignas de nota:

  * Utilização do Kernel 2.6.22, pulando o 2.6.21 (7.04 usava 2.6.20)
  * Em decorrência do kernel mais recente, existe agora o suporte a várias otimizações de energia (tickless, dynticks, clockevents), úteis em notebooks, mas que também são uma ótima pedida para servidores menos exigidos em questão de processador, tendo então uma diferença real de consumo.
  * Da mesma forma, herda algumas otimizações feitas pela equipe do kernel (que visam o futuro) no sistema de &#8220;paravirtualização&#8221;, com uma &#8220;Virtual Machine Interface&#8221; melhorada, o que pode impactar significativamente com quem trabalha com soluções do tipo Xen ou Vmware Server para seus servidores.
  * Algumas otimizações feitas pela equipe da Canonical em conjunto com a Intel no sentido de tornar mais eficiente o código do kernel em termos de uso do processador.
  * Alterações no sistema de imagens em sistemas LTSP que visam melhorar a velocidade e performance, além de novas características no sistema de login (autologin, múltiplos servidores, transporte gráfico não-encriptado), principalmente no Edubuntu
  * Facilidades na configuração de profiles de autenticação, com o recurso [AuthClientConfig][2].
  * Tecnologia [AppArmor][3], que promete ser uma maneira fácil de limitar recursos que uma aplicação pode acessar, adicionando assim uma camada de proteção adicional contra vulnerabilidades ainda desconhecidas.
  * Novas opções de instalação padrão, entre elas &#8220;Mail Server&#8221; (Servidor de E-Mail), &#8220;File Server&#8221; (Servidor de Arquivos), &#8220;Print Server&#8221; (Servidor de Impressão), e &#8220;Database Server&#8221; (Servidor Banco de Dados), que se juntam ao já tradicional LAMP e DNS para instalações pré-configuradas, facilitando a construção de configurações comuns.

As alterações que mais saltam à vista, como as novas opções de instalação, por exemplo, são muito bem vindas, e acredito que logo logo surjam na rede alguns casos de teste. Porém, um administrador experiente achará as outras opções, que não são tão divulgadas, muito mais úteis no dia a dia.

É muito bom vermos que a equipe da Canonical está bastante empenhada também na versão Server, além das melhorias já conhecidas da versão Desktop. Em breve, novos artigos testando estas e outras novidades da versão Server, além da tradicional &#8220;Primeira Impressão&#8221;, aqui no Ubuntero, juntamente com outras opções ainda baseadas no 6.06, que é a versão LTS.

 [1]: http://www.ubuntero.com.br/?p=396 "Ubuntu 7.10 Beta"
 [2]: https://wiki.ubuntu.com/AuthClientConfig "AuthClientConfig"
 [3]: http://help.ubuntu.com/community/AppArmor "AppArmor"