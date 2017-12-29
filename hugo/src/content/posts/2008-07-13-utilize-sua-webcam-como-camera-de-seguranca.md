---
title: Utilize sua Webcam como câmera de segurança
author: Ivan Brasil Fuzzer
type: post
date: 2008-07-14T01:19:26+00:00
url: /utilize-sua-webcam-como-camera-de-seguranca/
categories:
  - Geral
  - Ubuntu

---
Webcam funcionando e a vontade de achar uma utilidade além de mostrar a cara para os parentes. Isto me fez procurar por programas que utilizassem a webcam para diversos fins. Um dos programas que acabei conhecendo foi o Motion.

Motion é um programa que detecta movimento em imagens geradas por uma câmera e as guarda em algum lugar para posterior consulta. Além de salvar as imagens sempre que algum movimento é detectado, o programa permite que imagens sejam exibidas pela web em tempo real.

A instalação do Motion no Ubuntu é muito fácil. Vá até o Gerenciador de programas e instale o Motion como descrito [neste artigo][1], apenas substitua o programa a ser procurado pelo Motion.

Com o programa instalado, inicie o programa pelo terminal, digitando o comando &#8220;sudo motion&#8221; sem as aspas, ou pressionando as teclas Alt+F2 e executando o comando &#8220;gksu motion&#8221; sem as aspas.

Para visualizar as imagens salvas, vá até o diretório /tmp/motion . Para visualizar sua câmera em tempo real, abra o navegador Firefox e digite o endereço http://localhost:8081.

Para personalizar as configurações do Motion, edite o arquivo /etc/motion/motion.conf . Vejam algumas configurações importantes e interessantes.

  * **daemon off** &#8211; altere esta opção para on para que o programa rode em background 
  * **videodevice /dev/video0** &#8211; aponte para o dispositivo da sua câmera
  * **width 320** &#8211; altere para um tamanho que melhor lhe convenha
  * **height 240** &#8211; altere para um tamanho que melhor lhe convenha
  * **framerate 2** &#8211; número de quadros a ser capturado por segundo
  * **auto_brightness off** &#8211; se sua câmera não tem correção de brilho automático, é interessante alterar o valor para on
  * **quality 75** &#8211; qualidade da imagem capturada
  * **ffmpeg\_video\_codec swf** &#8211; formato do vídeo salvo. Os formatos suportados são: mpeg1, mpeg4, msmpeg4, swf, flv e ffv1
  * **locate off** &#8211; se alterado para on, desenha um quadro indicando onde ocorreu o movimento na imagem
  * **target_dir /tmp/motion** &#8211; local onde as imagens e vídeos serão salvos
  * **webcam_port 8081** &#8211; porta para acesso web
  * **webcam_localhost on** &#8211; se estiver on, permite acesso pelo navegador somente local, se estiver off, permite que qualquer computador veja as imagens pelo navegador

Estas são apenas as configurações que eu julguei mais interessantes. O arquivo de configuração é todo comentado(em inglês) o que facilita bastante qualquer alteração. Existe também a opção de salvar os logs de captura em vários bancos de dados.

 [1]: http://www.ubuntero.com.br/?p=330