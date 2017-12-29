---
title: Estrutura de diretórios Linux
author: Edigley Alexandre
type: post
date: 2011-11-26T12:23:52+00:00
url: /estrutura-de-diretorios-linux/
burl:
  - http://ads.tt/48D4
  - http://ads.tt/48D4
  - http://ads.tt/48D4
  - http://ads.tt/48D4
  - http://ads.tt/48D4
  - http://ads.tt/48D4
  - http://ads.tt/48D4
  - http://ads.tt/48D4
  - http://ads.tt/48D4
  - http://ads.tt/48D4
  - http://ads.tt/48D4
  - http://ads.tt/48D4
  - http://ads.tt/48D4
  - http://ads.tt/48D4
  - http://ads.tt/48D4
  - http://ads.tt/48D4
  - http://ads.tt/48D4
  - http://ads.tt/48D4
  - http://ads.tt/48D4
  - http://ads.tt/48D4
  - http://ads.tt/48D4
  - http://ads.tt/48D4
  - http://ads.tt/48D4
  - http://ads.tt/48D4
  - http://ads.tt/48D4
  - http://ads.tt/48D4
  - http://ads.tt/48D4
  - http://ads.tt/48D4
  - http://ads.tt/48D4
  - http://ads.tt/48D4
  - http://ads.tt/48D4
  - http://ads.tt/48D4
  - http://ads.tt/48D4
  - http://ads.tt/48D4
  - http://ads.tt/48D4
  - http://ads.tt/48D4
  - http://ads.tt/48D4
  - http://ads.tt/48D4
  - http://ads.tt/48D4
  - http://ads.tt/48D4
  - http://ads.tt/48D4
  - http://ads.tt/48D4
  - http://ads.tt/48D4
  - http://ads.tt/48D4
categories:
  - Ubuntu
tags:
  - Dicas
  - Linux
  - sistema de arquivos
  - Ubuntu

---
Você já se perguntou por que alguns programas estão localizados em /bin, ou /sbin, ou /usr/bin, ou /usr/sbin?

Por exemplo, os comandos que estão localizados em /usr/bin. Por que não /bin ou /sbin ou /usr/sbin? Qual é a diferença entre todos esses diretórios?

Neste artigo, vamos rever as estruturas do sistema de arquivos Linux e compreender o significado de cada um dos diretórios de alto nível.

<table style="background-color: whitesmoke; text-align: left; width: 300px;" cellspacing="2" cellpadding="2">
  <tr>
    <td style="text-align: center; vertical-align: top; width: 16px;">
    </td>
    
    <td style="vertical-align: top; width: 51px; text-align: left;">
      /bin
    </td>
    
    <td style="text-align: left; vertical-align: top; width: 230px;">
      Executáveis binários
    </td>
  </tr>
  
  <tr>
    <td style="text-align: center; vertical-align: top; width: 16px;">
    </td>
    
    <td style="vertical-align: top; width: 51px; text-align: left;">
      /sbin
    </td>
    
    <td style="text-align: left; vertical-align: top; width: 230px;">
      Sistema binário
    </td>
  </tr>
  
  <tr>
    <td style="text-align: center; vertical-align: top; width: 16px;">
    </td>
    
    <td style="vertical-align: top; width: 51px; text-align: left;">
      /etc
    </td>
    
    <td style="text-align: left; vertical-align: top; width: 230px;">
      Arquivos de Configuração
    </td>
  </tr>
  
  <tr>
    <td style="text-align: center; vertical-align: top; width: 16px;">
    </td>
    
    <td style="vertical-align: top; width: 51px; text-align: left;">
      /dev
    </td>
    
    <td style="text-align: left; vertical-align: top; width: 230px;">
      Arquivos de dispositivos
    </td>
  </tr>
  
  <tr>
    <td style="text-align: center; vertical-align: top; width: 16px;">
    </td>
    
    <td style="vertical-align: top; width: 51px; text-align: left;">
      /proc
    </td>
    
    <td style="text-align: left; vertical-align: top; width: 230px;">
      Informação de processo
    </td>
  </tr>
  
  <tr>
    <td style="text-align: center; vertical-align: top; width: 16px;">
    </td>
    
    <td style="vertical-align: top; width: 51px; text-align: left;">
      /var
    </td>
    
    <td style="text-align: left; vertical-align: top; width: 230px;">
      Arquivos variáveis
    </td>
  </tr>
  
  <tr>
    <td style="text-align: center; vertical-align: top; width: 16px;">
    </td>
    
    <td style="vertical-align: top; width: 51px; text-align: left;">
      /tmp
    </td>
    
    <td style="text-align: left; vertical-align: top; width: 230px;">
      Arquivos temporários
    </td>
  </tr>
  
  <tr>
    <td style="text-align: center; vertical-align: top; width: 16px;">
    </td>
    
    <td style="vertical-align: top; width: 51px; text-align: left;">
      /usr
    </td>
    
    <td style="text-align: left; vertical-align: top; width: 230px;">
      Programas de usuário
    </td>
  </tr>
  
  <tr>
    <td style="text-align: center; vertical-align: top; width: 16px;">
    </td>
    
    <td style="vertical-align: top; width: 51px; text-align: left;">
      /home
    </td>
    
    <td style="text-align: left; vertical-align: top; width: 230px;">
      Diretório pessoal
    </td>
  </tr>
  
  <tr>
    <td style="text-align: center; vertical-align: top; width: 16px;">
    </td>
    
    <td style="vertical-align: top; width: 51px; text-align: left;">
      /boot
    </td>
    
    <td style="text-align: left; vertical-align: top; width: 230px;">
      Arquivos de inicialização
    </td>
  </tr>
  
  <tr>
    <td style="text-align: center; vertical-align: top; width: 16px;">
    </td>
    
    <td style="vertical-align: top; width: 51px; text-align: left;">
      /lib
    </td>
    
    <td style="text-align: left; vertical-align: top; width: 230px;">
      Bibliotecas do sistema
    </td>
  </tr>
  
  <tr>
    <td style="text-align: center; vertical-align: top; width: 16px;">
    </td>
    
    <td style="vertical-align: top; width: 51px; text-align: left;">
      /opt
    </td>
    
    <td style="text-align: left; vertical-align: top; width: 230px;">
      Aplicações opcionais
    </td>
  </tr>
  
  <tr>
    <td style="text-align: center; vertical-align: top; width: 16px;">
    </td>
    
    <td style="vertical-align: top; width: 51px; text-align: left;">
      /mnt
    </td>
    
    <td style="text-align: left; vertical-align: top; width: 230px;">
      Diretório de Montagem
    </td>
  </tr>
  
  <tr>
    <td style="text-align: center; vertical-align: top; width: 16px;">
    </td>
    
    <td style="vertical-align: top; width: 51px; text-align: left;">
      /media
    </td>
    
    <td style="text-align: left; vertical-align: top; width: 230px;">
      Dispositivos de média removíveis
    </td>
  </tr>
  
  <tr>
    <td style="text-align: center; vertical-align: top; width: 16px;">
    </td>
    
    <td style="vertical-align: top; width: 51px; text-align: left;">
      /srv
    </td>
    
    <td style="text-align: left; vertical-align: top; width: 230px;">
      Serviço de dados
    </td>
  </tr>
</table>

&nbsp;

**<span style="padding: 0px; margin: 0px;">1. </span><span style="padding: 0px; margin: 0px;">/ &#8211; Root</span>**

<ul style="margin-bottom: 1.571em; margin-left: 1.571em; margin-right: 0px; margin-top: 0px; padding: 0px;">
  <li>
    <span style="padding: 0px; margin: 0px;"><span style="padding: 0px; margin: 0px;">Todos os arquivos e diretórios começa a partir do diretório raiz.</span></span>
  </li>
  <li>
    <span style="padding: 0px; margin: 0px;"><span style="padding: 0px; margin: 0px;">Usuário root só tem privilégio escrever sob este diretório.</span></span>
  </li>
  <li>
    <span style="padding: 0px; margin: 0px;"><span style="padding: 0px; margin: 0px;">Por favor note que / root é o diretório home do usuário root, o que não é o mesmo que /.</span></span>
  </li>
</ul>

**<span style="padding: 0px; margin: 0px;"><span style="padding: 0px; margin: 0px;">2. </span><span style="padding: 0px; margin: 0px;">/bin &#8211; user binários</span></span>**

<ul style="margin-bottom: 1.571em; margin-left: 1.571em; margin-right: 0px; margin-top: 0px; padding: 0px;">
  <li>
    <span style="padding: 0px; margin: 0px;"><span style="padding: 0px; margin: 0px;">Contém executáveis ​​binários.</span></span>
  </li>
  <li>
    <span style="padding: 0px; margin: 0px;"><span style="padding: 0px; margin: 0px;">Comandos comuns linux que você precisa para usar em single-user modos estão localizados sob este diretório.</span></span>
  </li>
  <li>
    <span style="padding: 0px; margin: 0px;"><span style="padding: 0px; margin: 0px;">Comandos usados ​​por todos os usuários do sistema estão localizados aqui.</span></span>
  </li>
  <li>
    <span style="padding: 0px; margin: 0px;"><span style="padding: 0px; margin: 0px;">Por exemplo: ps, ls, ping, grep, cp.</span></span>
  </li>
</ul>

**<span style="padding: 0px; margin: 0px;"><span style="padding: 0px; margin: 0px;">3. </span><span style="padding: 0px; margin: 0px;">/sbin &#8211; Sistema Binário</span></span>**

<ul style="margin-bottom: 1.571em; margin-left: 1.571em; margin-right: 0px; margin-top: 0px; padding: 0px;">
  <li>
    <span style="padding: 0px; margin: 0px;"><span style="padding: 0px; margin: 0px;">Assim como /bin, /sbin também contém executáveis ​​binários.</span></span>
  </li>
  <li>
    <span style="padding: 0px; margin: 0px;"><span style="padding: 0px; margin: 0px;">Mas, os comandos linux localizado neste diretório são usadas tipicamente pelo aministrator do sistema, para fins de manutenção do sistema.</span></span>
  </li>
  <li>
    <span style="padding: 0px; margin: 0px;"><span style="padding: 0px; margin: 0px;">Por exemplo: iptables, reboot, fdisk ifconfig, swapon</span></span>
  </li>
</ul>

**<span style="padding: 0px; margin: 0px;"><span style="padding: 0px; margin: 0px;">4. </span><span style="padding: 0px; margin: 0px;">/etc &#8211; Arquivos de Configuração</span></span>**

<ul style="margin-bottom: 1.571em; margin-left: 1.571em; margin-right: 0px; margin-top: 0px; padding: 0px;">
  <li>
    <span style="padding: 0px; margin: 0px;"><span style="padding: 0px; margin: 0px;">Contém arquivos de configuração exigido por todos os programas.</span></span>
  </li>
  <li>
    <span style="padding: 0px; margin: 0px;"><span style="padding: 0px; margin: 0px;">Este também contém scripts shell de inicialização e desligamento usado para iniciar / parar programas individuais.</span></span>
  </li>
  <li>
    <span style="padding: 0px; margin: 0px;"><span style="padding: 0px; margin: 0px;">Por exemplo: </span></span>/etc/resolv.conf, /etc/logrotate.conf
  </li>
</ul>

**<span style="padding: 0px; margin: 0px;"><span style="padding: 0px; margin: 0px;">5. </span><span style="padding: 0px; margin: 0px;">/dev &#8211; Arquivos de dispositivos</span></span>**

<ul style="margin-bottom: 1.571em; margin-left: 1.571em; margin-right: 0px; margin-top: 0px; padding: 0px;">
  <li>
    <span style="padding: 0px; margin: 0px;"><span style="padding: 0px; margin: 0px;">Contém os arquivos do dispositivo.</span></span>
  </li>
  <li>
    <span style="padding: 0px; margin: 0px;"><span style="padding: 0px; margin: 0px;">Estes incluem dispositivos terminais, usb, ou qualquer outro dispositivo conectado ao sistema.</span></span>
  </li>
  <li>
    <span style="padding: 0px; margin: 0px;"><span style="padding: 0px; margin: 0px;">Por exemplo: </span></span>/dev/tty1, /dev/usbmon0
  </li>
</ul>

**<span style="padding: 0px; margin: 0px;"><span style="padding: 0px; margin: 0px;">6. </span><span style="padding: 0px; margin: 0px;">/proc &#8211; Informação de Processo</span></span>**

<ul style="margin-bottom: 1.571em; margin-left: 1.571em; margin-right: 0px; margin-top: 0px; padding: 0px;">
  <li>
    <span style="padding: 0px; margin: 0px;"><span style="padding: 0px; margin: 0px;">Contém informações sobre o processo do sistema.</span></span>
  </li>
  <li>
    <span style="padding: 0px; margin: 0px;"><span style="padding: 0px; margin: 0px;">Este é um pseudo sistema de arquivos que contém informações sobre a execução do processo. </span><span style="padding: 0px; margin: 0px;">Por exemplo: / proc / pid} {diretório contém informações sobre o processo com o pid particular.</span></span>
  </li>
  <li>
    <span style="padding: 0px; margin: 0px;"><span style="padding: 0px; margin: 0px;">Este é um sistema de arquivos virtual com informações de texto sobre os recursos do sistema. </span><span style="padding: 0px; margin: 0px;">Por exemplo: /proc/uptime</span></span>
  </li>
</ul>

**<span style="padding: 0px; margin: 0px;"><span style="padding: 0px; margin: 0px;">7. </span><span style="padding: 0px; margin: 0px;">/var &#8211; Arquivos Variáveis</span></span>**

<ul style="margin-bottom: 1.571em; margin-left: 1.571em; margin-right: 0px; margin-top: 0px; padding: 0px;">
  <li>
    Conteúdo dos arquivos que são esperados para crescer podem ser encontrados sob este diretório.
  </li>
  <li>
    <span style="padding: 0px; margin: 0px;"><span style="padding: 0px; margin: 0px;">Isso inclui &#8211; arquivos de sistema de log (/var/log); pacotes e arquivos de banco de dados (/var/lib); e-mails (/var/mail); filas de impressão (/var/spool); arquivos de bloqueio (/var/lock); arquivos temporários necessários entre as reinicializações (/var/tmp);</span></span>
  </li>
</ul>

**<span style="padding: 0px; margin: 0px;"><span style="padding: 0px; margin: 0px;">8. </span><span style="padding: 0px; margin: 0px;">/tmp &#8211; Arquivos temporários</span></span>**

<ul style="margin-bottom: 1.571em; margin-left: 1.571em; margin-right: 0px; margin-top: 0px; padding: 0px;">
  <li>
    <span style="padding: 0px; margin: 0px;"><span style="padding: 0px; margin: 0px;">Diretório que contém arquivos temporários criados pelo sistema e usuários.</span></span>
  </li>
  <li>
    <span style="padding: 0px; margin: 0px;"><span style="padding: 0px; margin: 0px;">Arquivos neste diretório são excluídos quando o sistema for reiniciado.</span></span>
  </li>
</ul>

**<span style="padding: 0px; margin: 0px;"><span style="padding: 0px; margin: 0px;">9. </span><span style="padding: 0px; margin: 0px;">/usr &#8211; Programas de Usuários</span></span>**

<ul style="margin-bottom: 1.571em; margin-left: 1.571em; margin-right: 0px; margin-top: 0px; padding: 0px;">
  <li>
    <span style="padding: 0px; margin: 0px;"><span style="padding: 0px; margin: 0px;">Contém binários, bibliotecas, documentação e código-fonte para os programas de segundo nível.</span></span>
  </li>
  <li>
    <span style="padding: 0px; margin: 0px;"><span style="padding: 0px; margin: 0px;">/usr/bin contém arquivos binários para programas do usuário. </span><span style="padding: 0px; margin: 0px;">Se você não consegue encontrar um binário de usuário em /bin, procure em /usr/bin. </span><span style="padding: 0px; margin: 0px;">Por exemplo: at, awk, cc, menos, scp</span></span>
  </li>
  <li>
    <span style="padding: 0px; margin: 0px;"><span style="padding: 0px; margin: 0px;">/usr/sbin contém arquivos binários para administradores de sistema. </span><span style="padding: 0px; margin: 0px;">Se você não consegue encontrar um sistema binário em /sbin, procure em /usr/sbin. </span><span style="padding: 0px; margin: 0px;">Por exemplo: cron, atd, sshd, useradd, userdel</span></span>
  </li>
  <li>
    <span style="padding: 0px; margin: 0px;"><span style="padding: 0px; margin: 0px;">/usr/lib contém bibliotecas para /usr/bin e /usr/sbin</span></span>
  </li>
  <li>
    <span style="padding: 0px; margin: 0px;"><span style="padding: 0px; margin: 0px;">/usr/local contém usuários de programas que você instala a partir da fonte. </span><span style="padding: 0px; margin: 0px;">Por exemplo, quando você instala o apache a partir da fonte, ele vai em /usr/local/apache2</span></span>
  </li>
</ul>

**<span style="padding: 0px; margin: 0px;"><span style="padding: 0px; margin: 0px;">10. </span><span style="padding: 0px; margin: 0px;">/home &#8211; Diretório pessoal</span></span>**

<ul style="margin-bottom: 1.571em; margin-left: 1.571em; margin-right: 0px; margin-top: 0px; padding: 0px;">
  <li>
    <span style="padding: 0px; margin: 0px;"><span style="padding: 0px; margin: 0px;">Diretórios para todos os usuários armazenarem seus arquivos pessoais.</span></span>
  </li>
  <li>
    <span style="padding: 0px; margin: 0px;"><span style="padding: 0px; margin: 0px;">Por exemplo: /home/edigley, /home/ubuntero</span></span>
  </li>
</ul>

**<span style="padding: 0px; margin: 0px;"><span style="padding: 0px; margin: 0px;">11. </span><span style="padding: 0px; margin: 0px;">/boot &#8211; Arquivos de inicialização</span></span>**

<ul style="margin-bottom: 1.571em; margin-left: 1.571em; margin-right: 0px; margin-top: 0px; padding: 0px;">
  <li>
    <span style="padding: 0px; margin: 0px;"><span style="padding: 0px; margin: 0px;">Contém arquivos de boot carregadores relacionados.</span></span>
  </li>
  <li>
    <span style="padding: 0px; margin: 0px;"><span style="padding: 0px; margin: 0px;">Initrd do kernel, os arquivos vmlinux, grub estão localizados em /boot</span></span>
  </li>
  <li>
    <span style="padding: 0px; margin: 0px;"><span style="padding: 0px; margin: 0px;">Por exemplo: initrd.img-2.6.32-24-generic, vmlinuz-2.6.32-24-generic</span></span>
  </li>
</ul>

**<span style="padding: 0px; margin: 0px;"><span style="padding: 0px; margin: 0px;">12. </span><span style="padding: 0px; margin: 0px;">/lib &#8211; Bibliotecas do sistema</span></span>**

<ul style="margin-bottom: 1.571em; margin-left: 1.571em; margin-right: 0px; margin-top: 0px; padding: 0px;">
  <li>
    <span style="padding: 0px; margin: 0px;"><span style="padding: 0px; margin: 0px;">Contém arquivos de biblioteca que suporta os binários localizado em /bin e /sbin</span></span>
  </li>
  <li>
    <span style="padding: 0px; margin: 0px;"><span style="padding: 0px; margin: 0px;">Nomes de arquivos da biblioteca são ou * ld ou lib *. so .*</span></span>
  </li>
  <li>
    <span style="padding: 0px; margin: 0px;"><span style="padding: 0px; margin: 0px;">Por exemplo: ld-2.11.1.so, libncurses.so.5.7</span></span>
  </li>
</ul>

**<span style="padding: 0px; margin: 0px;"><span style="padding: 0px; margin: 0px;">13. </span><span style="padding: 0px; margin: 0px;">/opt &#8211; Aplicações opcionais</span></span>**

<ul style="margin-bottom: 1.571em; margin-left: 1.571em; margin-right: 0px; margin-top: 0px; padding: 0px;">
  <li>
    <span style="padding: 0px; margin: 0px;"><span style="padding: 0px; margin: 0px;">opt significa opcional.</span></span>
  </li>
  <li>
    <span style="padding: 0px; margin: 0px;"><span style="padding: 0px; margin: 0px;">Contém aplicativos adicionais de fornecedores individuais.</span></span>
  </li>
  <li>
    <span style="padding: 0px; margin: 0px;"><span style="padding: 0px; margin: 0px;">aplicações add-on deve ser instalado sob qualquer <span class="Apple-style-span" style="background-color: white; color: #111111; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 22px;">/opt/ or /opt/ s</span>ub-diretório.</span></span>
  </li>
</ul>

**<span style="padding: 0px; margin: 0px;"><span style="padding: 0px; margin: 0px;">14. </span><span style="padding: 0px; margin: 0px;">/mnt &#8211; Diretório de montagem</span></span>**

<ul style="margin-bottom: 1.571em; margin-left: 1.571em; margin-right: 0px; margin-top: 0px; padding: 0px;">
  <li>
    <span style="padding: 0px; margin: 0px;"><span style="padding: 0px; margin: 0px;">Diretório de montagem temporária onde sysadmins pode montar sistemas de arquivos.</span></span>
  </li>
</ul>

**<span style="padding: 0px; margin: 0px;"><span style="padding: 0px; margin: 0px;">15. </span><span style="padding: 0px; margin: 0px;">/media &#8211; Dispositivos de mídia removível</span></span>**

<ul style="margin-bottom: 1.571em; margin-left: 1.571em; margin-right: 0px; margin-top: 0px; padding: 0px;">
  <li>
    <span style="padding: 0px; margin: 0px;"><span style="padding: 0px; margin: 0px;">Diretório de montagem temporária para dispositivos removíveis.</span></span>
  </li>
  <li>
    <span style="padding: 0px; margin: 0px;"><span style="padding: 0px; margin: 0px;">Para exemplos, /media/cdrom para o CD-ROM; /media/floppy para drives de disquete; /media/cdrecorder para gravador de CD</span></span>
  </li>
</ul>

**<span style="padding: 0px; margin: 0px;"><span style="padding: 0px; margin: 0px;">16. </span><span style="padding: 0px; margin: 0px;">/srv &#8211; Serviço de Dados</span></span>**

<ul style="margin-bottom: 1.571em; margin-left: 1.571em; margin-right: 0px; margin-top: 0px; padding: 0px;">
  <li>
    <span style="padding: 0px; margin: 0px;"><span style="padding: 0px; margin: 0px;">srv significa serviço.</span></span>
  </li>
  <li>
    <span style="padding: 0px; margin: 0px;"><span style="padding: 0px; margin: 0px;">Contém dados do servidor de serviços específicos relacionados.</span></span>
  </li>
  <li>
    <span style="padding: 0px; margin: 0px;"><span style="padding: 0px; margin: 0px;">Por exemplo, /srv/cvs CVS contém dados relacionados.</span></span>
  </li>
</ul>

<div>
  [Traduzido de <a href="http://www.thegeekstuff.com/2010/09/linux-file-system-structure/" target="_blank">www.thegeekstuff.com</a>]
</div>