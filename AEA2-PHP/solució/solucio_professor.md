CICLE FORMATIU DE GRAU SUPERIOR --- ASIX · ÚS EXCLUSIU DEL PROFESSOR

**SOLUCIÓ I RÚBRICA --- EXAMEN PHP**

Sessions · Autenticació · Control d\'accés

**⚠ Document confidencial --- No distribuir als alumnes**

**Resum de puntuació**

  -----------------------------------------------------------------------
  **Part**                                **Puntuació**   **Sobre**
  --------------------------------------- --------------- ---------------
  Part 1 --- Correcció de 10 errors (×0,5 \_\_\_\_        5 pts
  pts)                                                    

  Part 2 --- moderador.php                \_\_\_\_        2 pts

  **TOTAL**                               **\_\_\_\_**    **7 pts**
  -----------------------------------------------------------------------

**Part 1 --- Rúbrica de correcció**

  ---------------------------------------------------------------------------------------------
  **\#**   **Arxiu**         **Error**                    **Correcció**               **Pts**
  -------- ----------------- ---------------------------- --------------------------- ---------
  1        index.html        name=\"usuari\"              name=\"username\"           **0,5**

  2        processar.php     require_once                 require_once                **0,5**
                             \"credencial.php\"           \"credencials.php\"         

  3        processar.php     \$\_POST\[\"user\"\]         \$\_POST\[\"username\"\]    **0,5**

  4        admin.php         \"administrador\"            \"admin\"                   **0,5**

  5        admin.php         foreach (\$node              foreach (\$nodes            **0,5**

  6        admin.php         \$node\[\"name\"\]           \$node\[\"nom\"\]           **0,5**

  7        meva_pagina.php   require_once \"base.php\"    require_once \"bbdd.php\"   **0,5**

  8        meva_pagina.php   \$\_SESSION\[\"usuario\"\]   \$\_SESSION\[\"usuari\"\]   **0,5**

  9        bbdd.php          \"estaat\"                   \"estat\"                   **0,5**

  10       bbdd.php          Falta coma entre nodes       Afegir , després del segon  **0,5**
                                                          node                        
  ---------------------------------------------------------------------------------------------

**Part 1 --- Solucions detallades**

**Error 1 --- index.html · Error HTML**

**Codi incorrecte:**

  -----------------------------------------------------------------------
  Usuari: \<input type=\"text\" name=\"usuari\" required\>

  -----------------------------------------------------------------------

**Codi correcte:**

  -----------------------------------------------------------------------
  Usuari: \<input type=\"text\" name=\"username\" required\>

  -----------------------------------------------------------------------

**Explicació:**

  -----------------------------------------------------------------------
  El camp input té name=\"usuari\" però processar.php llegeix
  \$\_POST\[\"username\"\]. Com que el name no coincideix, el valor mai
  arriba al servidor i l\'usuari sempre queda buit. Correcció: canviar
  name=\"usuari\" per name=\"username\".

  -----------------------------------------------------------------------

**0,5 punts**

**Error 2 --- processar.php · Fatal error**

**Codi incorrecte:**

  -----------------------------------------------------------------------
  require_once \"credencial.php\";

  -----------------------------------------------------------------------

**Codi correcte:**

  -----------------------------------------------------------------------
  require_once \"credencials.php\";

  -----------------------------------------------------------------------

**Explicació:**

  -----------------------------------------------------------------------
  El nom de l\'arxiu és incorrecte: \"credencial.php\" no existeix,
  l\'arxiu correcte és \"credencials.php\" (amb s final). PHP llança un
  Fatal error i atura l\'execució completament.

  -----------------------------------------------------------------------

**0,5 punts**

**Error 3 --- processar.php · Notice --- index no definit**

**Codi incorrecte:**

  -----------------------------------------------------------------------
  \$username = \$\_POST\[\"user\"\] ?? \"\";

  -----------------------------------------------------------------------

**Codi correcte:**

  -----------------------------------------------------------------------
  \$username = \$\_POST\[\"username\"\] ?? \"\";

  -----------------------------------------------------------------------

**Explicació:**

  -----------------------------------------------------------------------
  S\'intenta llegir \$\_POST\[\"user\"\] però el formulari envia el camp
  amb name=\"username\". La clau \"user\" no existeix al \$\_POST i per
  tant \$username sempre és una cadena buida, impedint el login.

  -----------------------------------------------------------------------

**0,5 punts**

**Error 4 --- admin.php · Error lògic --- redirecció sempre activa**

**Codi incorrecte:**

  -----------------------------------------------------------------------
  \$\_SESSION\[\"rol\"\] !== \"administrador\"

  -----------------------------------------------------------------------

**Codi correcte:**

  -----------------------------------------------------------------------
  \$\_SESSION\[\"rol\"\] !== \"admin\"

  -----------------------------------------------------------------------

**Explicació:**

  -----------------------------------------------------------------------
  La sessió guarda el rol com a \"admin\" (definit a credencials.php)
  però la comprovació busca \"administrador\". Com que mai coincideix,
  tots els usuaris ---inclòs l\'administrador--- són redirigits al login.

  -----------------------------------------------------------------------

**0,5 punts**

**Error 5 --- admin.php · Warning --- argument no vàlid al foreach**

**Codi incorrecte:**

  -----------------------------------------------------------------------
  foreach (\$node as \$node):

  -----------------------------------------------------------------------

**Codi correcte:**

  -----------------------------------------------------------------------
  foreach (\$nodes as \$node):

  -----------------------------------------------------------------------

**Explicació:**

  -----------------------------------------------------------------------
  S\'utilitza \$node (singular) com a array del foreach, però \$node no
  és un array sinó una variable inexistent. PHP llança un Warning:
  Invalid argument supplied for foreach i la taula queda buida. La
  variable correcta és \$nodes.

  -----------------------------------------------------------------------

**0,5 punts**

**Error 6 --- admin.php · Parse error --- tag PHP mal tancat**

**Codi incorrecte:**

  -----------------------------------------------------------------------
  \<td\>\<?php echo \$node\[\"tipus\"\]; \</td\>

  -----------------------------------------------------------------------

**Codi correcte:**

  -----------------------------------------------------------------------
  \<td\>\<?php echo \$node\[\"tipus\"\]; ?\>\</td\>

  -----------------------------------------------------------------------

**Explicació:**

  -----------------------------------------------------------------------
  Falta el tag de tancament ?\> després de l\'echo. PHP interpreta tot el
  que ve a continuació com a codi PHP en lloc de HTML, generant un Parse
  error que atura l\'execució de tota la pàgina.

  -----------------------------------------------------------------------

**0,5 punts**

**Error 7 --- meva_pagina.php · Fatal error --- arxiu no trobat**

**Codi incorrecte:**

  -----------------------------------------------------------------------
  require_once \"base.php\";

  -----------------------------------------------------------------------

**Codi correcte:**

  -----------------------------------------------------------------------
  require_once \"bbdd.php\";

  -----------------------------------------------------------------------

**Explicació:**

  -----------------------------------------------------------------------
  \"base.php\" no existeix al projecte. PHP llança un Fatal error: Failed
  to open required \"base.php\" i la pàgina no es carrega. L\'arxiu
  correcte és bbdd.php.

  -----------------------------------------------------------------------

**0,5 punts**

**Error 8 --- meva_pagina.php · Warning --- clau de sessió no definida**

**Codi incorrecte:**

  -----------------------------------------------------------------------
  \$\_SESSION\[\"usuario\"\]

  -----------------------------------------------------------------------

**Codi correcte:**

  -----------------------------------------------------------------------
  \$\_SESSION\[\"usuari\"\]

  -----------------------------------------------------------------------

**Explicació:**

  -----------------------------------------------------------------------
  La sessió emmagatzema el nom d\'usuari amb la clau \"usuari\" (en
  català), no \"usuario\" (en castellà). PHP llança un Warning: Undefined
  array key i el nom d\'usuari no es mostra al missatge de benvinguda.

  -----------------------------------------------------------------------

**0,5 punts**

**Error 9 --- bbdd.php · Warning --- clau d\'array incorrecta**

**Codi incorrecte:**

  -----------------------------------------------------------------------
  \"estaat\" =\> true

  -----------------------------------------------------------------------

**Codi correcte:**

  -----------------------------------------------------------------------
  \"estat\" =\> true

  -----------------------------------------------------------------------

**Explicació:**

  -----------------------------------------------------------------------
  La clau del primer node és \"estaat\" (amb doble a) en lloc de
  \"estat\". Quan els foreach dels altres arxius intenten accedir a
  \$node\[\"estat\"\], PHP llança un Warning: Undefined array key i el
  valor d\'estat és null, mostrant incorrectament el node com a Inactiu.

  -----------------------------------------------------------------------

**0,5 punts**

**Error 10 --- bbdd.php · Parse error --- error de sintaxi**

**Codi incorrecte:**

  -----------------------------------------------------------------------
  \[\"nom\" =\> \"NAS-DATA-02\", \...true\] // falta coma

  -----------------------------------------------------------------------

**Codi correcte:**

  -----------------------------------------------------------------------
  \[\"nom\" =\> \"NAS-DATA-02\", \...true\], // amb coma

  -----------------------------------------------------------------------

**Explicació:**

  -----------------------------------------------------------------------
  Falta la coma després del segon element de l\'array \$nodes. PHP llança
  un Parse error: syntax error unexpected \"\[\" i l\'arxiu no s\'executa
  en absolut, provocant un Fatal error a totes les pàgines que fan
  require_once \"bbdd.php\".

  -----------------------------------------------------------------------

**0,5 punts**

**Part 2 --- Solució moderador.php (2 punts)**

  ----------------------------------------------------------------------------------------
  **Criteri**                                      **Indicadors**              **Punts**
  ------------------------------------------------ --------------------------- -----------
  session_start() i comprovació de sessió + rol    Comprova isset + rol ===    0,5
                                                   moderador + redirecció      

  require_once de bbdd.php correcte                Inclou bbdd.php             0,25
                                                   correctament                

  Benvinguda amb nom d\'usuari de la sessió        Mostra                      0,25
                                                   \$\_SESSION\[\"usuari\"\]   

  Taula amb foreach i filtre d\'estat actiu        foreach correcte + if       0,75
                                                   \$node\[\"estat\"\] ===     
                                                   true                        

  Enllaç de logout funcional                       href=\"logout.php\" present 0,25

  **TOTAL**                                                                    **2 pts**
  ----------------------------------------------------------------------------------------

**Codi de referència --- moderador.php:**

+-----------------------------------------------------------------------+
| \<?php                                                                |
|                                                                       |
| session_start();                                                      |
|                                                                       |
| if (!isset(\$\_SESSION\[\"rol\"\]) \|\| \$\_SESSION\[\"rol\"\] !==    |
| \"moderador\") {                                                      |
|                                                                       |
| header(\"Location: index.html\");                                     |
|                                                                       |
| exit();                                                               |
|                                                                       |
| }                                                                     |
|                                                                       |
| require_once \"bbdd.php\";                                            |
|                                                                       |
| ?\>                                                                   |
|                                                                       |
| \<!DOCTYPE html\>                                                     |
|                                                                       |
| \<html\>                                                              |
|                                                                       |
| \<head\>                                                              |
|                                                                       |
| \<meta charset=\"utf-8\"\>                                            |
|                                                                       |
| \<title\>Zona Moderador\</title\>                                     |
|                                                                       |
| \</head\>                                                             |
|                                                                       |
| \<body\>                                                              |
|                                                                       |
| \<h2\>Zona Moderador\</h2\>                                           |
|                                                                       |
| \<p\>Benvingut \<?php echo \$\_SESSION\[\"usuari\"\]; ?\>\</p\>       |
|                                                                       |
| \<a href=\"logout.php\"\>Tancar sessió\</a\>                          |
|                                                                       |
| \<hr\>                                                                |
|                                                                       |
| \<table border=\"1\" cellpadding=\"8\"\>                              |
|                                                                       |
| \<tr\>                                                                |
|                                                                       |
| \<th\>Nom\</th\>                                                      |
|                                                                       |
| \<th\>Tipus\</th\>                                                    |
|                                                                       |
| \</tr\>                                                               |
|                                                                       |
| \<?php foreach (\$nodes as \$node): ?\>                               |
|                                                                       |
| \<?php if (\$node\[\"estat\"\] === true): ?\>                         |
|                                                                       |
| \<tr\>                                                                |
|                                                                       |
| \<td\>\<?php echo \$node\[\"nom\"\]; ?\>\</td\>                       |
|                                                                       |
| \<td\>\<?php echo \$node\[\"tipus\"\]; ?\>\</td\>                     |
|                                                                       |
| \</tr\>                                                               |
|                                                                       |
| \<?php endif; ?\>                                                     |
|                                                                       |
| \<?php endforeach; ?\>                                                |
|                                                                       |
| \</table\>                                                            |
|                                                                       |
| \</body\>                                                             |
|                                                                       |
| \</html\>                                                             |
+-----------------------------------------------------------------------+

*Nota: s\'accepten altres implementacions correctes del filtre d\'estat
actiu, per exemple:*

-   if (\$node\[\"estat\"\]) --- també vàlid (booleà truthy)

-   if (\$node\[\"estat\"\] == true) --- vàlid amb comparació laxa
