---
title: O ponto está de volta
author: Ivan Brasil Fuzzer
type: post
date: 2008-11-20T18:03:04+00:00
url: /o-ponto-esta-de-volta/
categories:
  - Ubuntu

---
Accepted updated package, please test:

xkeyboard-config (1.3-2ubuntu4.2) intrepid-proposed; urgency=low
   
.
     
* 100\_abnt2\_jp106.diff: The previous fix was wrong. ABNT2 has KPPT
       
which should produce keycode 129. Thanks Leonardo Couto!
       
(LP: #272606)

Para quem não entendeu, esta é a notificação de que os pontos do teclado ABNT2 foram corrigidos. Estou escrevendo este post com a atualização aplicada e posso confirmar que os pontos do teclado alpha-numérico e numérico estão funcionando novamente.