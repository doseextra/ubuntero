---
title: Apt-get upgrade ou dist-upgrade?
author: Ivan Brasil Fuzzer
type: post
date: 2015-06-21T13:35:42+00:00
url: /apt-get-upgrade-ou-dist-upgrade/
categories:
  - Ubuntu
tags:
  - apt-get
  - dist-upgrade
  - Linux
  - terminal
  - Ubuntu
  - upgrade

---
Para quem utiliza o terminal, mesmo que já tenha alguma experiência, a palavra dist-upgrade ainda gera bastante confusão e, ao contrário do que muita gente imagina, não vai atualizar sua distribuição para uma versão mais nova como por exemplo da 14.10 para a 15.04.

Para auxiliar nesta explicação, vou apelar para o manual do comando(man apt-get):

> upgrade
  
> upgrade é usado para instalar as versões mais recentes de todos os pacotes presentemente instalados no sistema a partir das fontes enumeradas em /etc/apt/sources.list. Os pacotes presentemente instalados com versões novas são obtidos e instalados; em nenhumas circunstâncias os pacotes presentemente instalados serão removidos, nem pacotes já  instalados serão obtidos e instalados.Os pacotes presentemente instalados com novas versões e que não possam ser atualizados sem alterarem o estado da instalação de outro pacote serão deixados na versão presente. Deve ser executado primeiro um update para que o apt-get fique a saber que estão disponíveis novas versões de pacotes.
> 
> dist-upgrade
  
> dist-upgrade adicionalmente a executar a função do upgrade, também lida inteligentemente com as alterações de dependências com as novas versões de pacotes; o apt-get tem um sistema de resolução de conflitos &#8216;inteligente&#8217;, que irá tentar atualizar os pacotes mais importantes a custo dos pacotes menos importantes, caso necessário. Portanto, o comando dist-upgrade pode remover alguns pacotes. O ficheiro /etc/apt/sources.list contém uma lista de localizações de onde obter os ficheiros de pacotes desejados. Veja também apt_preferences(5) para um mecanismo para sobrepor as definições gerais em pacotes individuais.

Resumindo: Os dois comandos irão atualizar os pacotes já instalados no seu sistema, porém o dist-upgrade é mais completo e inteligente. Provavelmente você terá menos problemas futuros se utilizar o dist-upgrade ao invés de utilizar apenas o upgrade.

Ainda ficou alguma dúvida sobre as duas opções do comando apt-get? Mande sua pergunta nos comentários que responderemos assim que possível.