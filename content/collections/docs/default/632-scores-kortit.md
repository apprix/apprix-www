---
id: 07cc8e2f-de2f-4a19-aae3-76d18cc53e02
blueprint: doc
title: '6.3.2 Scores - Kortit'
---
<h4><strong>Task-tyyppiset elementit</strong></h4>
Oletuksena task-tyyppiset elementit ovat ainoita, jotka keräävät pisteitä (muutamia poikkeuksia lukuun ottamatta), joten tämä kortti näyttää kaikki moduulissa olevat pisteytettävät elementit, <strong>jos</strong> niitä ei ole erikseen visualisoitu.

<strong>Huom!</strong> Tilastoja näytetään vain loppuun suoritetuista suorituksista.

Kortin vasemmassa reunassa näkyy:
<ul>
 <li>Elementin nimi (Edit Module-näkymän elementin yläpuolella näkyvä teksti),</li>
 <li>Elementin otsikko (Edit Module-näkymän elementin yleinen otsikko tai kysymyksen nimi)</li>
 <li>Elementin sivunumero (#n).</li>
</ul>
Jos elementti sisältää erillisiä väittämiä, joihin kurssin suorittajan tulee vastata  (esim. Checkbox elementissä) väittämät ilmestyvät kyseisen elementin alle erillisiksi riveiksi (on myös poikkeuksia,  koska elementti on voinut olla räätälöity).

Jos prosenttia ei pysty laskemaan, tulee näkyviin <strong>N/A = Not Available, ei saatavilla</strong>. Mikäli kysymys ei ole pisteytettävä, vaan tekstimuotoinen, prosentin sijaan näkyy vastausten lukumäärä.

<strong>Huom!</strong>
<ul>
 <li>Koska monet elementit ovat räätälöityjä, mikäli haluat nähdä muita tehtäväelementtejä visualisoituina, ota yhteyttä Apprixiin.</li>
 <li>Jos prosenttiosuutta ei voitu laskea, riville N/A ilmestyy kysymysmerkki. Kun siirrät hiiren kysymysmerkin päälle, ohjeteksti tulee näkyviin.</li>
</ul>
<h4><strong>Prosenttien laskukaavat</strong></h4>
1) (Käytetään kun <strong>elementin</strong> maksimipistemäärä on &gt; 0, esim. Checkbox-elementti)

<strong>Elementin pistemäärä =</strong>

(Suorittajien kokonaispistemäärä * elementin maksimipistemäärä) / (vastausten lukumäärä * elementin maksimipistemäärä) * 100.

<strong>Huom!</strong> Mikäli <strong>Edit Points</strong> työkalussa elementin pistemäärä on 0 eli ”oikeita pisteitä” ei jaeta, tällöin maksimipistemäärä on sama kuin tehtäväkohtien lukumäärää, eli oletetaan jokaisen tehtäväkohdan olevan 1 pisteen arvoinen.

2) (Käytetään kun elementin <strong>Edit pointspisteet</strong> ovat 0)

Elementin yksittäisen <strong>kysymyksen</strong> pistemäärä =

(Suorittajien kokonaispistemäärä * yhden kysymyksen maksimipistemäärä) / (suoritusten lukumäärä * yhden kysymyksen maksimipistemäärä) * 100.

<h6><strong>Scores -Kortit</strong></h6>

<figure class="doc-image"><img src="/files/docs/2023/03/Task-elements.png" alt="" loading="lazy"></figure>