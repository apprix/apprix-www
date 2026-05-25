---
id: 4c63e488-2a30-45ce-b75a-c13d556e94c6
blueprint: faq_item
title: 'Millä logiikalla määräytyy se, mihin kohtaan moduulia suorittaja ohjataan, kun hän avaa koulutuksen uudelleen?'
category: 'Yleiset'
order: 6
answer: '<p>Moduuli toimii siten, että tietyillä tunnuksilla kirjautuessa aloitetaan koulutus, joka jatkuu niin kauan kunnes kyseinen käyttäjä on päässyt viimeiselle sivulle (Finish-elementti).</p><p>Mikäli käyttäjä lopettaa moduulin suorituksen kesken, seuraavalla kerralla, suoritus jatkuu samalta sivulta, johon jäätiin.</p><p>Jos moduulissa on submoduuleja ja submoduulia ei ole suoritettu loppuun, käyttäjän on aloitettava submoduuli alusta.</p><p>Mikäli moduulissa on Pass/Fail elementti ja käyttäjä ei pääse läpi lopputestistä, jos suorituskertojen määrä ei ylitä sallittua maksimimäärää, hänet ohjataan automaattisesti lopputestin alkuun (Pass/Fail settings:ssä määritettyyn elementtiin “Retry from here”, eli lopputestin alkuun). Muussa tapauksessa hän aloittaa koko koulutuksen alusta (Intro-elementistä).</p><p>Tässä tapauksessa käyttäjä voi kokeilla testiä kaksi kertaa. Jos hän ei läpäise testiä kahdella yrityskerralla, hänen on aloitettava moduuli uudelleen alusta (Intro-elementistä).</p>'
---
