CICLE FORMATIU DE GRAU SUPERIOR --- ASIX

**EXAMEN PRÀCTIC DE PHP**

Sessions · Autenticació · Control d\'accés

  ---------------------- ------------------------------------------------
  **Mòdul**              Programació Web amb PHP

  **Cicle**              Grau Superior ASIX

  **Durada**             1 hora i 30 minuts

  **Puntuació màxima**   7 punts

  **Material permès**    Màquina virtual sense accés a Internet

  **Alumne/a**           

  **Data**               
  ---------------------- ------------------------------------------------

**Instruccions generals**

-   Llegeix atentament tot l\'enunciat abans de començar.

-   Tens accés als arxius PHP del projecte a la màquina virtual.
    Edita\'ls directament.

-   Per detectar els errors, navega per l\'aplicació al navegador i
    observa els missatges del servidor.

-   No es permet accés a Internet durant la prova.

-   Entrega: aquest document Word emplenat + els arxius PHP corregits a
    la carpeta del projecte.

**PART 1 --- Correcció d\'errors (5 punts)**

El codi del projecte conté 10 errors distribuïts entre els arxius
index.html, processar.php, admin.php, meva_pagina.php i bbdd.php.

**Per a cada error has de:**

-   Fer una captura de pantalla del missatge d\'error que mostra el
    navegador.

-   Indicar la línia de codi incorrecta.

-   Escriure la línia de codi corregida.

-   Explicar per què és un error i com l\'has resolt.

**Cada error val 0,5 punts.**

**Taula orientativa dels errors:**

  ---------------------------------------------------------------------------
  **\#**   **Arxiu**           **Tipus d\'error**
  -------- ------------------- ----------------------------------------------
  1        index.html          Error HTML --- camp input amb name incorrecte

  2        processar.php       Fatal error --- arxiu no trobat

  3        processar.php       Notice --- index no definit al \$\_POST

  4        admin.php           Error lògic --- redirecció sempre activa

  5        admin.php           Warning --- variable no vàlida al foreach

  6        admin.php           Parse error --- tag PHP mal tancat

  7        meva_pagina.php     Fatal error --- arxiu no trobat

  8        meva_pagina.php     Warning --- clau de sessió no definida

  9        bbdd.php            Warning --- clau d\'array incorrecta

  10       bbdd.php            Parse error --- error de sintaxi
  ---------------------------------------------------------------------------

**Respostes Part 1**

**Error 1 --- index.html**

**Captura de pantalla de l\'error al navegador:**

  -----------------------------------------------------------------------
  *\[ Enganxa aquí la captura de pantalla \]*

  -----------------------------------------------------------------------

**Línia de codi incorrecta:**

  -----------------------------------------------------------------------

  -----------------------------------------------------------------------

**Línia de codi corregida:**

  -----------------------------------------------------------------------

  -----------------------------------------------------------------------

**Explicació:**

  -----------------------------------------------------------------------

  -----------------------------------------------------------------------

**Error 2 --- processar.php**

**Captura de pantalla de l\'error al navegador:**

  -----------------------------------------------------------------------
  *\[ Enganxa aquí la captura de pantalla \]*

  -----------------------------------------------------------------------

**Línia de codi incorrecta:**

  -----------------------------------------------------------------------

  -----------------------------------------------------------------------

**Línia de codi corregida:**

  -----------------------------------------------------------------------

  -----------------------------------------------------------------------

**Explicació:**

  -----------------------------------------------------------------------

  -----------------------------------------------------------------------

**Error 3 --- processar.php**

**Captura de pantalla de l\'error al navegador:**

  -----------------------------------------------------------------------
  *\[ Enganxa aquí la captura de pantalla \]*

  -----------------------------------------------------------------------

**Línia de codi incorrecta:**

  -----------------------------------------------------------------------

  -----------------------------------------------------------------------

**Línia de codi corregida:**

  -----------------------------------------------------------------------

  -----------------------------------------------------------------------

**Explicació:**

  -----------------------------------------------------------------------

  -----------------------------------------------------------------------

**Error 4 --- admin.php**

**Captura de pantalla de l\'error al navegador:**

  -----------------------------------------------------------------------
  *\[ Enganxa aquí la captura de pantalla \]*

  -----------------------------------------------------------------------

**Línia de codi incorrecta:**

  -----------------------------------------------------------------------

  -----------------------------------------------------------------------

**Línia de codi corregida:**

  -----------------------------------------------------------------------

  -----------------------------------------------------------------------

**Explicació:**

  -----------------------------------------------------------------------

  -----------------------------------------------------------------------

**Error 5 --- admin.php**

**Captura de pantalla de l\'error al navegador:**

  -----------------------------------------------------------------------
  *\[ Enganxa aquí la captura de pantalla \]*

  -----------------------------------------------------------------------

**Línia de codi incorrecta:**

  -----------------------------------------------------------------------

  -----------------------------------------------------------------------

**Línia de codi corregida:**

  -----------------------------------------------------------------------

  -----------------------------------------------------------------------

**Explicació:**

  -----------------------------------------------------------------------

  -----------------------------------------------------------------------

**Error 6 --- admin.php**

**Captura de pantalla de l\'error al navegador:**

  -----------------------------------------------------------------------
  *\[ Enganxa aquí la captura de pantalla \]*

  -----------------------------------------------------------------------

**Línia de codi incorrecta:**

  -----------------------------------------------------------------------

  -----------------------------------------------------------------------

**Línia de codi corregida:**

  -----------------------------------------------------------------------

  -----------------------------------------------------------------------

**Explicació:**

  -----------------------------------------------------------------------

  -----------------------------------------------------------------------

**Error 7 --- meva_pagina.php**

**Captura de pantalla de l\'error al navegador:**

  -----------------------------------------------------------------------
  *\[ Enganxa aquí la captura de pantalla \]*

  -----------------------------------------------------------------------

**Línia de codi incorrecta:**

  -----------------------------------------------------------------------

  -----------------------------------------------------------------------

**Línia de codi corregida:**

  -----------------------------------------------------------------------

  -----------------------------------------------------------------------

**Explicació:**

  -----------------------------------------------------------------------

  -----------------------------------------------------------------------

**Error 8 --- meva_pagina.php**

**Captura de pantalla de l\'error al navegador:**

  -----------------------------------------------------------------------
  *\[ Enganxa aquí la captura de pantalla \]*

  -----------------------------------------------------------------------

**Línia de codi incorrecta:**

  -----------------------------------------------------------------------

  -----------------------------------------------------------------------

**Línia de codi corregida:**

  -----------------------------------------------------------------------

  -----------------------------------------------------------------------

**Explicació:**

  -----------------------------------------------------------------------

  -----------------------------------------------------------------------

**Error 9 --- bbdd.php**

**Captura de pantalla de l\'error al navegador:**

  -----------------------------------------------------------------------
  *\[ Enganxa aquí la captura de pantalla \]*

  -----------------------------------------------------------------------

**Línia de codi incorrecta:**

  -----------------------------------------------------------------------

  -----------------------------------------------------------------------

**Línia de codi corregida:**

  -----------------------------------------------------------------------

  -----------------------------------------------------------------------

**Explicació:**

  -----------------------------------------------------------------------

  -----------------------------------------------------------------------

**Error 10 --- bbdd.php**

**Captura de pantalla de l\'error al navegador:**

  -----------------------------------------------------------------------
  *\[ Enganxa aquí la captura de pantalla \]*

  -----------------------------------------------------------------------

**Línia de codi incorrecta:**

  -----------------------------------------------------------------------

  -----------------------------------------------------------------------

**Línia de codi corregida:**

  -----------------------------------------------------------------------

  -----------------------------------------------------------------------

**Explicació:**

  -----------------------------------------------------------------------

  -----------------------------------------------------------------------

**PART 2 --- Crear moderador.php (2 punts)**

Crea un nou arxiu anomenat moderador.php que compleixi tots els
requisits següents:

1.  Inicia la sessió correctament amb session_start().

2.  Comprova que existeix la sessió i que el rol és exactament
    \"moderador\". Si no es compleix, redirigeix a index.html.

3.  Inclou bbdd.php amb require_once per accedir a l\'array de nodes.

4.  Mostra un missatge de benvinguda amb el nom d\'usuari de la sessió.

5.  Mostra una taula HTML amb els nodes que tinguin l\'estat actiu
    (true). Columnes: Nom i Tipus.

6.  Afegeix un enllaç per tancar sessió que apunti a logout.php.

**Criteris d\'avaluació:**

  -----------------------------------------------------------------------
  **Criteri**                                         **Punts**
  --------------------------------------------------- -------------------
  session_start() i comprovació de sessió + rol       0,5 pts
  correctes                                           

  require_once de bbdd.php correcte                   0,25 pts

  Benvinguda amb nom d\'usuari de la sessió           0,25 pts

  Taula HTML amb foreach i filtre d\'estat actiu      0,75 pts
  correcte                                            

  Enllaç de logout funcional                          0,25 pts
  -----------------------------------------------------------------------
