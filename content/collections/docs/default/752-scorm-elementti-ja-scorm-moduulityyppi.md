---
id: 8d7050e8-e082-4ff9-99aa-021ec43e377f
blueprint: doc
title: '7.52 SCORM elementti ja SCORM moduulityyppi'
---
Voit käyttää <strong>SCORM</strong> elementtiä upottaaksesi SCORM zip-pakettitiedostossa olevan sisällön osaksi moduulia. Voit tuoda (eng. upload) SCORM sisällön zip-pakettitiedostona editoimalla SCORM elementtiä ja valitsemalla tiedoston omalta laitteelta. SCORM paketti voi olla oma ja muiden tahojen tekemä.

<strong>SCORM elementtiä</strong> voi myös käyttää tavallista moduulityyppiä käyttävässä moduulissa.

Tavallisessa moduulissa SCORM-elementtiä voi käyttää kuin muita elementtejä, mutta suosittelemme SCORM-moduulityyppiä käyttävässä moduulissa käytettävän vain yhtä SCORM-elementtiä.

<strong>SCORM moduulityypillä</strong> tehty moduuli eroaa tavallisella moduulityypillä tehdystä moduulista siten, että moduuliin ei voi lisätä muun kuin SCORM elementin ja fasilitaattorina editointitilassa näkyvät intro- ja finish-elementit eivät näy koulutusta suorittavalle. Toisin sanoen suorittaja ei näe muuta kuin SCORM zip-pakettitiedostossa olevan sisällön koulutusta suorittaessa. Huom! Kun kurssilainen on suorittanut SCORM-elementin sisällön, moduuli merkitään suoritetuksi.

<strong>Huom!</strong> Jos SCORM elementissä käytetään Builderillä luotua SCORM pakettia, suorituksessa annetut vastaukset ja pisteet kertyvät sen koulutuksen tilastoihin, josta SCORM paketti on luotu. Esimerkiksi Builder koulutuksessa A on SCORM elementti. SCORM elementtiin on upotettu Builder koulutuksesta B luotu SCORM paketti. SCORM elementissä näkyvässä Builder koulutuksessa B annetut vastaukset ja pisteet kertyvät Builder koulutuksen B tilastoihin.
<h4><strong>Muokkausohjeet</strong></h4>
<strong>Miten luodaan moduuli, jossa käytetään SCORM-moduulityyppiä?</strong>

Suosittelemme SCORM-moduulityyppiä käyttävässä moduulissa käytettävän vain yhtä SCORM-elementtiä.
<ul>
 <li>Klikkaa ”<strong>Create</strong>” -painiketta sivun vasemmassa reunassa. Moduulityypin valintaikkuna avautuu.</li>
 <li>Valitse ”<strong>SCORM</strong>”-moduulityyppi ja mahdollinen haluamasi template.</li>
 <li>Anna uudelle SCORM-moduulille nimi ja klikkaa Save-painiketta. SCORM-moduuli on nyt luotu.</li>
 <li>Klikkaa ”<strong>Add element</strong>”. Lisää SCORM-elementti uuteen moduuliin vetämällä se intro- ja finish-elementtien väliin. Klikkaa Save-painiketta.</li>
 <li>Klikkaa SCORM-elementtiä. Elementti avautuu.</li>
 <li>Klikkaa elementin keskellä olevaa ”<strong>Valitse tiedosto</strong>” -painiketta. ”<strong>Avaa</strong>”-ikkuna avautuu.</li>
 <li>Valitse <strong>SCORM-zip-pakettitiedosto</strong> ja klikkaa ”<strong>Avaa</strong>”-painiketta. Tämän jälkeen sinulle ilmoitetaan, onko tiedoston lataus onnistunut. Jos tiedoston lataus on onnistunut, SCORM-tiedoston sisältö näkyy SCORM-elementissä. <strong>Huom!</strong> Esikatselu- ja julkaisutilassa SCORM-moduulin Intro- ja Finish-elementtejä ei näytetä käyttäjälle.</li>
</ul>
<strong>Huom!</strong>
<ul>
 <li>Jos valittu moduuli ei käytä SCORM-moduulityyppiä, voit lisätä moduulin muitakin elementtejä. SCORM moduulityypissä on saatavilla vain SCORM-elementti.</li>
 <li>Kun esikatselee preview-tilassa Builder koulutusta, jossa on toinen Builder koulutus upotettuna SCORM elementtiin, myös upotettua Builder koulutusta esikatsellaan preview-tilassa.</li>
</ul>
<strong>Apprix Builderista haettujen SCORM pakettien toiminta ja tietoturva</strong>

Yleisesti ottaen viimeisimmät suoritustiedot lähetetään käyttäjän siirtyessä moduulin toiselle sivulle. Kun käyttäjä  siirtyy moduulin viimeiselle sivulle (käytännössä finish-elementtiin), koulutus merkitään suoritetuksi (completed) nykyiseen suoritukseen. Lisäksi, kun käytetään SCORM-pakettia ja käyttäjä siirtyy viimeiselle sivulle, koulutuksen upottavalle järjestelmälle, kuten LMS:lle, ilmoitetaan SCORM-rajapinnan kautta, että koulutus on suoritettu onnistuneesti.

<strong> </strong>Tavallista SCORM-pakettia (ns. Online SCORM-pakettia) käytettäessä koulutuksen tarvitsema sisältö ja yleinen Builder koulutusten toiminnan määrittävä koodi (navigation) haetaan Builderin osoitteesta. Lisäksi pakettiin sisällytetään muita paketin luomishetkellä Builder-koulutuksessa tarvittavia tiedostoja, kuten Builderiin viedyt (eng. uploaded) koulutuksessa käytetyt tiedostot sekä asiakaskohtaisen koodin ja sen vaatimat tiedostot. Suoritustiedot lähetetään Builderiin sekä Apprix tilastoihin.

Offline SCORM-pakettia käytettäessä kaikki koulutuksen tarvitsema data (sisältäen sisällöt), koodi ja muut tarvittavat tiedostot sisältyvät pakettiin. Offline SCORM-paketti tekee Apprixin osoitteisiin kutsuja ainoastaan suoritustietojen lähettämiseksi Apprix tilastoihin (ei Builderiin).

Apprixin osoitteisiin tehtävissä kutsuissa käytetään HTTPS-protokollaa tietojen turvalliseen lataamiseen ja lähettämiseen.

Lisätietoja SCORMista löydät Builderin usein kysyttyjen kysymysten osiosta.

ZIP/SCORM-Tiedosto: https://faq.apprix.fi/

<h6 class="p1">Miten luodaan moduuli, jossa käytetään SCORM-moduulityyppiä?</h6>

<figure class="doc-image"><img src="https://faq.apprix.fi/wp-content/uploads/2025/04/SCORM-module-creation2.gif" alt="" loading="lazy"></figure>