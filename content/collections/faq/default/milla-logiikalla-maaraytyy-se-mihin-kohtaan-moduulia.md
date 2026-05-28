---
id: 4c63e488-2a30-45ce-b75a-c13d556e94c6
blueprint: faq_item
title: 'Millä logiikalla määräytyy se, mihin kohtaan moduulia suorittaja ohjataan, kun hän avaa koulutuksen uudelleen?'
faq_categories:
  - yleiset
order: 6
answer: 'Moduuli toimii siten, että tietyillä tunnuksilla kirjautuessa aloitetaan koulutus, joka jatkuu niin kauan kunnes kyseinen käyttäjä on päässyt viimeiselle sivulle (<strong>Finish</strong>-elementti). Mikäli käyttäjä <strong>lopettaa</strong> moduulin suorituksen kesken, seuraavalla kerralla, suoritus jatkuu <strong>samalta sivulta</strong>, johon jäätiin. Jos moduulissa on submoduuleja ja submoduulia ei ole suoritettu loppuun, käyttäjän on aloitettava submoduuli alusta. Mikäli moduulissa on <strong>Pass/Fail</strong> elementti ja käyttäjä ei pääse läpi lopputestistä, jos suorituskertojen määrä ei ylitä sallittua maksimimäärää, hänet ohjataan automaattisesti lopputestin alkuun<strong> (Pass/Fail settings</strong>:ssä määritettyyn elementtiin<strong> “Retry from here”</strong>, eli lopputestin alkuun<strong>).</strong> Muussa tapauksessa hän aloittaa koko koulutuksen alusta (<strong>Intro-elementistä</strong>). <img src="/files/docs/2022/06/FAQ-Pass_Fail-settings.png" alt="" width="385" style="max-width:100%;height:auto;display:block;margin:0.75rem 0;"> <img src="/files/docs/2022/06/FAQ-Pass_Fail-flow.png" alt="" width="718" style="max-width:100%;height:auto;display:block;margin:0.75rem 0;"> <em>Tässä tapauksessa käyttäjä voi kokeilla testiä kaksi kertaa. Jos hän ei läpäise testiä kahdella yrityskerralla, hänen on aloitettava moduuli uudelleen alusta (Intro-elementistä).</em>'
---
