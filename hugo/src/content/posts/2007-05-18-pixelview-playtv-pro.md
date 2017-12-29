---
title: PixelView PlayTV Pro
author: Ivan Brasil Fuzzer
type: post
date: 2007-05-18T14:21:35+00:00
url: /pixelview-playtv-pro/
categories:
  - Ubuntu

---
**Testado também no Ubuntu 8.04 e aprovado sem alterações.**

<img src='http://www.ubuntero.com.br/wp-content/uploads/2007/05/prolinkpixelviewplaytvpro2_2.jpg' alt='PixelView PlayTV Pro' align="left" />Parece que o Ubuntu Feisty Fawn veio para resolver todos os meus problemas com linux. Como já disse anteriormente, o microfone do meu notebook passou a funcionar perfeitamente sem necessidade de configurações especiais. Agora minha placa de TV também está funcionando e consigo sintonizar mais canais em relação ao que conseguia quando utilizava windows.
  
No caso da placa de TV, tive que fazer algumas configurações manuais. O modelo da minha placa de TV é a do Título.
  
Agora vamos ao que interessa. Primeiramente você precisa instalar um programa para assistir TV e um programa para localizar os canais. Abra o Synaptic(Sistema/Administração/Gerenciador de pacotes Synaptic) e procure pelo programa &#8220;scantv&#8221; e &#8220;tvtime&#8221; e os selecione para instalação dando um duplo clique no pacote. Clique em aplicar e espere os pacotes serem baixados e instalados.
  
Agora abra o terminal que se encontra no menu Aplicações/Acessórios/Terminal. Digite &#8220;sudo su&#8221;, apenas &#8220;sudo comando&#8221; não funcionou para mim. Como super usuário digite os comandos:


     
$ rmmod bt878</p> 

$ rmmod bttv

$ rmmod tuner

$ modprobe bttv card=37 tuner=1

$ modprobe bt878

$ exit

$ scantv </ul> 

**Atualização: Caso o scantv apresente o erro &#8220;vbi: open failed [/dev/vbi]&#8221;, faça um link para este dispositivo digitando o seguinte comando:
   
$ ln -s /dev/vbi0 /dev/vbi</p> 

Volte a executar o comando &#8220;scantv&#8221; e tudo deve funcionar.</strong>

Se você tem uma placa de TV igual a minha, isso irá funcionar perfeitamente e você pode abrir o tvtime e assistir seus canais favoritos. Caso não funcione e você não saiba qual é o modelo de sua placa e do tuner, execute [este script][1] no terminal como super usuário(root), o conjunto de &#8220;card&#8221; e &#8220;tuner&#8221; que obtiver o maior resultado de canais deve corresponder ao seu equipamento. Se você sabe o modelo exato da sua placa e do seu tuner, abaixo tenho uma lista de valores que devem ser utilizados para cada um.

Cards:</p> 

  * card=1 &#8211; MIRO PCTV
  * card=2 &#8211; Hauppauge (bt848)
  * card=3 &#8211; STB
  * card=4 &#8211; Intel
  * card=5 &#8211; Diamond DTV2000
  * card=6 &#8211; AVerMedia TVPhone
  * card=7 &#8211; MATRIX-Vision MV-Delta
  * card=8 &#8211; Fly Video II (Bt848)
  * card=9 &#8211; TurboTV
  * card=10 &#8211; Hauppauge (bt878)
  * card=11 &#8211; MIRO PCTV pro
  * card=12 &#8211; ADS Technologies Channel Surfer TV
  * card=13 &#8211; AVerMedia TVCapture 98
  * card=14 &#8211; Aimslab VHX
  * card=15 &#8211; Zoltrix TV-Max
  * card=16 &#8211; Pixelview PlayTV (bt878)
  * card=17 &#8211; Leadtek WinView 601
  * card=18 &#8211; AVEC Intercapture
  * card=19 &#8211; LifeView FlyKit w/o Tuner
  * card=20 &#8211; CEI Raffles Card
  * card=21 &#8211; Lucky Star Image World ConferenceTV
  * card=22 &#8211; Phoebe Tv Master + FM (CPH050)
  * card=23 &#8211; Modular Technology MM205 PCTV, bt878
  * card=24 &#8211; [many vendors] CPH05X/06X (bt878)
  * card=25 &#8211; Terratec/Vobis TV-Boostar
  * card=26 &#8211; Newer Hauppauge WinCam (bt878)
  * card=27 &#8211; MAXI TV Video PCI2
  * card=28 &#8211; Terratec TerraTV+
  * card=29 &#8211; Imagenation PXC200
  * card=30 &#8211; FlyVideo 98
  * card=31 &#8211; iProTV
  * card=32 &#8211; Intel Create and Share PCI
  * card=33 &#8211; Terratec TerraTValue
  * card=34 &#8211; Leadtek WinFast 2000
  * card=35 &#8211; Flyvideo 98 (LR50Q) / Chronos Video Shuttle II
  * card=36 &#8211; Flyvideo 98FM (LR50Q) / Typhoon TView TV/FMTuner
  * card=37 &#8211; PixelView PlayTV pro
  * card=38 &#8211; TView99 CPH06X
  * card=39 &#8211; Pinnacle PCTV Studio/Rave
  * card=40 &#8211; STB2
  * card=41 &#8211; AVerMedia TVPhone 98
  * card=42 &#8211; ProVideo PV951
  * card=43 &#8211; Little OnAir TV
  * card=44 &#8211; Sigma TVII-FM
  * card=45 &#8211; MATRIX-Vision MV-Delta 2
  * card=46 &#8211; Zoltrix Genie TV/FM
  * card=47 &#8211; Terratec TV/Radio+
  * card=48 &#8211; Dynalink Magic TView
  * card=49 &#8211; GV-BCTV3
  * card=50 &#8211; Prolink PV-BT878P+4E / PixelView PlayTV PAK /Lenco MXTV-9578 CP
  * card=51 &#8211; Eagle Wireless Capricorn2 (bt878A)
  * card=52 &#8211; Pinnacle PCTV Studio Pro
  * card=53 &#8211; Typhoon TView RDS + FM Stereo / KNC1 TV Station RDS
  * card=54 &#8211; Lifetec LT 9415 TV (LR90 Rev.F)
  * card=55 &#8211; BESTBUY Easy TV (CPH031)
  * card=56 &#8211; FlyVideo &#8217;98/FM
  * card=57 &#8211; GrandTec &#8216;Grand Video Capture&#8217;
  * card=58 &#8211; Phoebe TV Master Only (No FM) CPH060
  * card=59 &#8211; TV Capturer (CPH03X)
  * card=60 &#8211; MM100PCTV
  * card=61 &#8211; AG Electronics GMV1
  * card=62 &#8211; BESTBUY Easy TV (bt878)
  * card=63 &#8211; ATI TV-Wonder
  * card=64 &#8211; ATI TV-Wonder VE
  * card=65 &#8211; FlyVideo 2000S
  * card=66 &#8211; Terratec TValueRadio
  * card=67 &#8211; GV-BCTV4/PCI
  * card=68 &#8211; 3Dfx VoodooTV FM (Euro), VoodooTV 200 (USA)
  * card=69 &#8211; Active Imaging AIMMS
  * card=70 &#8211; PV-BT878P+
  * card=71 &#8211; Flyvideo 98EZ (capture only)
  * card=72 &#8211; Prolink PV-BT878P+9B (PlayTV Pro rev.9B FM+NICAM)
  * card=73 &#8211; Sensoray 311
  * card=74 &#8211; RemoteVision MX (RV605)
  * card=75 &#8211; Powercolor MTV878/ MTV878R/ MTV878F
  * card=76 &#8211; Canopus WinDVR PCI (COMPAQ Presario 3524JP, 5112JP)
  * card=77 &#8211; GrandTec Multi Capture Card (Bt878)
  * card=78 &#8211; Jetway TV/Capture JW-TV878-FBK, Kworld KW-TV878RF
  * card=79 &#8211; DSP Design TCVIDEO
  * card=80 &#8211; Hauppauge WinTV PVR
  * card=81 &#8211; GV-BCTV5/PCI
  * card=82 &#8211; Osprey 100/150 (878)
  * card=83 &#8211; Osprey 100/150 (848)
  * card=84 &#8211; Osprey 101 (848)
  * card=85 &#8211; Osprey 101/151
  * card=86 &#8211; Osprey 101/151 w/ svid
  * card=87 &#8211; Osprey 200/201/250/251
  * card=88 &#8211; Osprey 200/250
  * card=89 &#8211; Osprey 210/220
  * card=90 &#8211; Osprey 500
  * card=91 &#8211; Osprey 540
  * card=92 &#8211; Osprey 2000
  * card=93 &#8211; IDS Eagle
  * card=94 &#8211; Pinnacle PCTV Sat 
  * card=95 &#8211; Formac ProTV II (bt878) 
  * card=96 &#8211; MachTV
  * card=97 &#8211; Euresys Picolo
  * card=98 &#8211; ProVideo PV150
  * card=99 &#8211; AD-TVK503
  * card=100 &#8211; Hercules Smart TV Stereo
  * card=101 &#8211; Pace TV & Radio Card 
  * card=102 &#8211; IVC-200
  * card=103 &#8211; Grand X-Guard / Trust 814PCI 
  * card=104 &#8211; Nebula Electronics DigiTV
  * card=105 &#8211; ProVideo PV143
  * card=106 &#8211; PHYTEC VD-009-X1 MiniDIN (bt878)
  * card=107 &#8211; PHYTEC VD-009-X1 Combi (bt878)
  * card=108 &#8211; PHYTEC VD-009 MiniDIN (bt878)
  * card=109 &#8211; PHYTEC VD-009 Combi (bt878)
  * card=110 &#8211; IVC-100
  * card=111 &#8211; IVC-120G
  * card=112 &#8211; pcHDTV HD-2000 TV
  * card=113 &#8211; Twinhan DST + clones
  * card=114 &#8211; Winfast VC100
  * card=115 &#8211; Teppro TEV-560/InterVision IV-560
  * card=116 &#8211; SIMUS GVC1100
  * card=117 &#8211; NGS NGSTV+
  * card=118 &#8211; LMLBT4
  * card=119 &#8211; Tekram M205 PRO
  * card=120 &#8211; Conceptronic CONTVFMi

Tuners:</p> 

  * tuner=0 &#8211; Temic PAL (4002 FH5)
  * tuner=1 &#8211; Philips PAL_I
  * tuner=2 &#8211; Philips NTSC
  * tuner=3 &#8211; Philips SECAM
  * tuner=4 &#8211; NoTuner
  * tuner=5 &#8211; Philips PAL
  * tuner=6 &#8211; Temic NTSC (4032 FY5)
  * tuner=7 &#8211; Temic PAL_I (4062 FY5)
  * tuner=8 &#8211; Temic NTSC (4036 FY5)
  * tuner=9 &#8211; Alps HSBH1
  * tuner=10 &#8211; Alps TSBE1
  * tuner=11 &#8211; Alps TSBB5
  * tuner=12 &#8211; Alps TSBE5
  * tuner=13 &#8211; Alps TSBC5
  * tuner=14 &#8211; Temic PAL_BG (4006FH5)
  * tuner=15 &#8211; Alps TSCH6
  * tuner=16 &#8211; Temic PAL_DK (4016 FY5)
  * tuner=17 &#8211; Philips NTSC_M (MK2)
  * tuner=18 &#8211; Temic PAL_I (4066 FY5)
  * tuner=19 &#8211; Temic PAL* auto (4006 FN5)
  * tuner=20 &#8211; Temic PAL (4009 FR5)
  * tuner=21 &#8211; Temic NTSC (4039 FR5)
  * tuner=22 &#8211; Temic PAL/SECAM multi (4046 FM5)
  * tuner=23 &#8211; Philips PAL_DK
  * tuner=24 &#8211; Philips PAL/SECAM multi (FQ1216ME)
  * tuner=25 &#8211; LG PAL_I+FM (TAPC-I001D)
  * tuner=26 &#8211; LG PAL_I (TAPC-I701D)
  * tuner=27 &#8211; LG NTSC+FM (TPI8NSR01F)
  * tuner=28 &#8211; LG PAL_BG+FM (TPI8PSB01D)
  * tuner=29 &#8211; LG PAL_BG (TPI8PSB11D)
  * tuner=30 &#8211; Temic PAL* auto + FM (4009 FN5)
  * tuner=31 &#8211; SHARP NTSC_JP (2U5JF5540)
  * tuner=32 &#8211; Samsung PAL TCPM9091PD27
  * tuner=33 &#8211; MT2032 universal
  * tuner=34 &#8211; Temic PAL_BG (4106 FH5)
  * tuner=35 &#8211; Temic PAL\_DK/SECAM\_L (4012 FY5)
  * tuner=36 &#8211; Temic NTSC (4136 FY5)
  * tuner=37 &#8211; LG PAL (newer TAPC series)
  * tuner=38 &#8211; Philips PAL/SECAM multi (FM1216ME MK3)
  * tuner=39 &#8211; LG NTSC (newer TAPC series)
  * tuner=40 &#8211; HITACHI V7-J180AT
  * tuner=41 &#8211; Philips PAL_MK (FI1216 MK)
  * tuner=42 &#8211; Philips 1236D ATSC/NTSC daul in
  * tuner=43 &#8211; Philips NTSC MK3 (FM1236MK3 or FM1236/F)
  * tuner=44 &#8211; Philips 4 in 1 (ATI TV Wonder Pro/Conexant)
  * tuner=45 &#8211; Microtune 4049 FM5

Algumas distribuições, como o Mandriva, já estão vindo com o novo driver bttv que é capaz de detectar o modelo da placa e tuner sem a necessidade de configurações manuais. Quem sabe uma atualização de drivers, ou uma próxima versão do Ubuntu, já tenhamos esta facilidade.
  
Em um futuro não muito distante, pretendo falar sobre o sintonizador de rádio FM e sobre o controle remoto.

 [1]: http://www.ubuntero.com.br/wp-content/uploads/2007/05/placatv