---
id: a5a95e75-c1f0-424b-92e2-3ca329f39647
blueprint: faq_item
title: 'Mitä tapahtuu moduulin suoritustiedoille, jos poistan moduulista elementin tai kohteen elementistä?'
faq_categories:
  - tilastot
order: 14
answer: '<p>Suoritukset eivät poistu. Moduulin rakenteen muuttaminen aiheuttaa statistiikoissa seuraavat asiat:</p><ul><li>“Progress” näkyy vanhoilla suorituksilla samana kuin ennenkin. Uusilla suorituksilla on sitten moduulin uuden rakenteen mukaisesti progress. Esim. jos moduulissa on aiemmin ollut 10 elementtiä, ja siitä poistaa yhden elementin, niin vanhoilla loppuun asti suorittaneilla näkyy edelleen progress = 10. Uusilla se tieto taas on 9. Tämä sama pätee myös moduulista kerättäviin pisteisiin, jos niitä lähtee muuttamaan.</li><li>Tehtäväelementin poisto (esim. checkbox-two): poistetut tehtäväelementit arkistoidaan, eikä niitä oletuksena näytetä statistiikoissa. Ne saa kuitenkin näkyville "Show archived"-painikkeesta</li><li>Sisältöelementin poisto (esim. info-fullbg): ei vaikutuksia statseihin muuten kuin, että uusilla suorituksilla on eri progress kuin vanhoilla.</li></ul>'
---
