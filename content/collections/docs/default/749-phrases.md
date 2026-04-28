---
id: eea55968-55c7-4b37-a2fc-98a9895f4905
blueprint: doc
title: '7.49 Phrases'
---
<strong>Phrases</strong> on tehtäväelementti, jossa suorittajan pitää raahata oikeassa järjestyksessä lauseen sananappeja alkulaatikosta paikoilleen lauseeseen sen alapuolella olevaan loppulaatikkoon. Sananappi voi sisältää yhden tai useamman sanan tekstiä ja osa sananapeista voi olla myös vääriä, mitkä eivät siis kuulu lauseeseen.

Sen jälkeen, että suorittaja on siirtänyt tarvittavat sananapit loppulaatikkoon, hän klikkaa eteenpäin-painiketta oikealla, jolloin Builder tarkistaa, menikö suorittajan kirjoittama lause oikein. Alkulaatikon tilalle ilmestyy vastauslaatikko (punainen, jos vastaus on väärin, vihreä jos vastaus on oikein), jossa annetaan palautetta suorittajalle. Loppulaatikossa ilmestyy oikea lause.

Jos vastaus on 100 % oikein, <strong>OK</strong>-ikoni tulee näkyviin. Jos vastaus on väärä, näkyviin tulee <strong>Ei OK</strong>-ikoni.

<strong>Tässä ideoita milloin tätä elementtiä voisi käyttää:</strong>
<ul>
 <li>rakennettaessa yrityksen missiota tai visiota</li>
 <li>työtehtävissä, jotka edellyttävät tarkkaa sanamuotoa esim. radioviestinnässä.</li>
</ul>
<h4><strong>Elementin muokkausohjeet </strong></h4>
Lisää elementin taustakuva, joka tukee käsiteltävää aihetta.

Klikkaa elementin editointinäkymän ylälaidassa sijaitsevasta oranssista ratasikonista <strong>Element Settings</strong> -vaihtoehtoa.

Lisää tarvittavat raahattavat sananapit <strong>Element Settings</strong> -ikkunasta. Sananapit ilmestyvät elementin oikealle puolelle. Anna sananapille loogisessa järjestyksessä nimet, esim. "<em>A Code of Conduct</em>", "<em>is a set of values</em>", "<em>and principles</em>", "<em>that guide</em>", "<em>an organisation</em>."

Lisää tarvittaessa virheelliset sananapit viimeisen oikean sananapin alapuolelle, esimerkiksi tässä tapauksessa "<em>A Code of behaviour</em>", "<em>is a set of laws</em>" ja "<em>that run</em>". Tässä esimerkissä suorittajan pitäisi siirtää sananappeja, jotka muodostavat seuraavan lauseen: <em>"A Code of Conduct is a set of values and principles that guide an organisation."   </em>

Kytke <strong>Shuffle</strong>-toiminto päälle. Jos toimintoa ei ole aktivoitu, sananapit näkyvät samassa järjestyksessä alkulaatikossa.

Vihreä vastauslaatikko tulee näkyviin, kun klikkaat eteenpäin-painiketta. Kirjoita tähän vastausteksti, joka antaa lisätietoja oikeasta lauseesta. Sama teksti näkyy myös punaisella puolella.

Anna vasempaan ylempään tekstikenttään tietoja kyseisestä lauseesta ja ohjeita suorittajalle, esimerkiksi:

<em>”Vedä oikealla ylhäällä olevat sananapit oikeassa järjestyksessä alla olevaan laatikkoon. Klikkaa eteenpäin-painiketta, kun olet valmis, nähdäksesi tuloksen."</em>

Voit säätää tehtävän vaikeusastetta klikkaamalla vasemmassa yläkulmassa olevaa työkaluikonia. Tämän jälkeen avautuu <strong>Phrase-elementin asetukset</strong>.

Jos Phrase-elementin asetuksissa on aktivoitu vaihtoehto ”<em>Allow only the right number of words to be dragged</em>” ikkunan oikeassa alakulmassa näkyy oikea määrä siirrettäviä sananappeja. Jos tätä vaihtoehtoa ei ole valittu, eteenpäin -painike näytetään sen jälkeen, kun ensimmäinen sananappi on siirretty alempaan laatikkoon.

<strong>Tarkistuslogiikka</strong>

Elementti laskee, kuinka oikein tehtävä on mennyt prosentteina (0-1, 1 = 100%). Statistiikkaan merkitään prosentti. Prosentilla kerrotaan elementille merkattu maksipistemäärä, jolloin saadaan elementistä saadut pisteet.

Prosentin laskemisessa tarkastellaan kolmea asiaa:
<ul>
 <li>kuinka monta oikeaa sanaa suorittaja on valinnut</li>
 <li>kuinka monta väärää sanaa suorittaja on valinnut</li>
 <li>onko koko fraasi oikeassa järjestyksessä</li>
</ul>
<strong>Normal - vaihtoehdon tarkistuslogiikka:</strong>
<ul>
 <li>Jos koko fraasi on oikein, tehtävästä saa 100%</li>
 <li>Jos vastauksessa on jotain virheitä (väärä järjestys, liian vähän tai paljon valittuja sanoja) käyttäjälle annetaan 50% maksimipisteistä.</li>
 <li>Tästä 50%:sta vähennetään prosentteja jokaisen väärän raahatun sanan edestä.</li>
 <li>Tästä 50%:sta jokainen väärin valittu sana pienentää prosenttia, jolla kerrotaan elementin maksimipistemäärä.</li>
 <li>Yhden väärän sanan suhteutettu prosenttiarvo on sama kuin yhden oikean sanan, eli yhdestä väärästä sanasta vähentyy yhtä paljon prosentteja kuin oikeasta sanasta saa.</li>
</ul>

<h6 class="p1">Elementin julkaisutilassa</h6>

<h6 class="p1">Elementin muokkaustilassa</h6>

<h6 class="p1">Elementin asetukset muokkaustilassa</h6>

<figure class="doc-image"><img src="https://faq.apprix.fi/wp-content/uploads/2024/12/Phrases-element-demo.gif" alt="" loading="lazy"></figure>

<figure class="doc-image"><img src="https://faq.apprix.fi/wp-content/uploads/2024/12/Phrases-element-settings-image.png" alt="" loading="lazy"></figure>

<figure class="doc-image"><img src="https://faq.apprix.fi/wp-content/uploads/2024/12/Phrase-asetukset.png" alt="" loading="lazy"></figure>