---
id: 01dfb933-ccd0-4c9c-a1bd-7d284d625b50
blueprint: doc
title: '7.30 Pass/Fail & Pass/Fail Always'
---
<b>Pass/Fail</b>-elementillä voit ilmoittaa suorittajalle, ettei hän ole läpäissyt moduulin lopputestiä ja kertoa seuraavista toimenpiteistä. Elementti voidaan lisätä joko heti moduulin lopputestin jälkeen tai moduulin loppuun ennen loppuyhteenvetoa (Commitment, Feedback), jos moduulissa lasketaan suorituspisteitä koko moduulista. Lopputesti voi koostua mistä tahansa tehtäväelementeistä, mutta useimmiten se koostuu esimerkiksi peräkkäisistä Checkbox tai Multichoice-elementeistä.

Jos elementtiä käytetään lopputestin yhteydessä eikä muilla kuin lopputestin pisteillä ole väliä suorituksen kurssin läpäisyn suhteen, kannattaa muiden kuin lopputestiin kuuluvien tehtäväelementtien pisteet poistaa (kirjata 0 pisteeksi), jolloin ainoastaan testipisteet huomioidaan kurssin läpipääsyssä. Pisteitä voit muuttaa valitsemalla <a href="#editpoints"><b>Edit Points</b></a> moduulin editointinäkymän ylälaidassa olevasta <b>ratassymbolista</b>. Voit myös muuttaa samasta näkymästä prosentuaalista läpipääsyrajaa.

Submoduulirakenteessa, jossa on testi lopussa, lisätään testissä mukana olevat elementit ja <b>Pass/Fail</b>-elementti yleensä submoduulivalikon (<b>Submenu Buttons</b>) jälkeen päämoduuliin. 

<b>Huom!</b> <b>Pass/Fail</b>-elementtiä ei tule lisätä <strong>viimeiseksi elementiksi ennen </strong><b>Finish</b><strong>-elementtiä</strong>, sillä Pass/Fail-elementti ei tällöin toimi oikein.

Erillisellä lisätyöllä voi <b>Pass/Fail</b> -elementin saada toimimaan myös submoduulien lopussa, jolloin submoduulit pitää läpäistä hyväksytysti päästäkseen eteenpäin kurssissa. Jos submoduulirakenteen loppuun ei tule testiä ja on tärkeää, että kaikki submoduulien pisteet otetaan huomioon läpipääsyn suhteen, lisätään tällöin <b>Pass/Fail</b>-elementti jokaisen submoduulin viimeiseksi elementiksi. Tällöin suorittaja ohjataan submoduulista submoduulivalikkoon (<b>Submenu Buttons</b>) vasta päästessään submoduulin hyväksyttävästi läpi. Jos suorittaja ei saa tarpeeksi pisteitä <span>submoduulista läpäistäkseen sen, hänet ohjataan takaisin submoduulin alkuun. <b><a href="#yhteystiedot">Otathan yhteyttä Apprixiin</a></b>,</span> jos edellä kuvatulle toiminnallisuudelle ilmenee organisaatiossasi tarve tai haluatte kuulla siitä lisää.

<b>Huom!</b> <b>Pass/Fail </b>-elementtinäkymä ilmestyy suorittajalle <strong>vain silloin</strong>, jos suorittaja <strong>ei läpäise</strong> lopputestiä.

Kun suorittaja on käyttänyt mahdolliset testin uusimisyritykset, hän joutuu palaamaan takaisin kertaamaan kurssimateriaaleja ja aloittamaan uudelleen alusta. Suorittajan lopullinen suoritustulos sekä epäonnistuneet yritykset tallennetaan tilastoihin. Käyttämällä <a href="#login"><b>Login-elementtiä</b></a> ja <a href="#sso"><b>SSO-ominaisuutta</b></a> voidaan suodattaa epäonnistuneet yritykset, kun halutaan tarkastella vain lopullista suoritustulosta.

<strong>Huom!</strong>

<strong>Esikatselutilassa</strong> (Preview mode) <strong>moduulin tilastotietoja ei tallenneta</strong>. Tästä syystä ”<strong>Pass/Fail</strong>” ja ” <strong>Failure</strong>” -elementit eivät myöskään toimi esikatselutilassa. <strong>Pisteet lasketaan vain Julkaistu-tilassa (Published mode).</strong>

Miksi Builder toimii näin? Koska tilastoihin tallennetaan kurssilaisten <strong>suoritustiedot</strong> eikä moduulin <strong>testaustietoja</strong>.
<h4 class="" data-fontsize="20" data-lineheight="30px">Elementin muokkausohjeet</h4>
<ol>
 <li>Avaa elementti editointinäkymässä.</li>
 <li>Voit aloittaa lisäämällä elementtiin taustakuvan.</li>
 <li>Klikkaa sitten elementin editointinäkymässä vasemmassa kulmassa olevaa <b>ratassymbolia</b>, josta avautuu elementin asetukset ponnahdusikkunaan. Asetuksissa voit muuttaa seuraavia asetuksia:
<ul>
 <li>elementin/sivun, josta suorittaja jatkaa epäonnistuneen yrityksen jälkeen (esimerkiksi lopputestin ensimmäinen elementti)</li>
 <li>uusintayritysten määrän</li>
</ul>
</li>
 <li>Klikkaa valikosta sitä elementtiä, johon haluat, että suorittaja ohjataan yrittämään uudelleen. Nuolen pitäisi nyt siirtyä kyseiseen elementtiin.</li>
 <li>Valitse sitten uusintayritysten määrä alasvetovalikosta oranssilla taustalla.
<ul>
 <li>Jos uusintayritysten määrä on asetettu nollaksi, suorittajan täytyy aloittaa moduuli alusta heti ensimmäisen yrityksen jälkeen.</li>
</ul>
</li>
 <li>Klikkaa Done, kun asetukset ovat valmiit.</li>
</ol>
Voit myös muokata tekstejä, jotka ilmestyvät uusintayritysten jälkeen. Tekstialueita on kolme:
<ol>
 <li>Ensimmäinen alue näkyvissä jokaisella epäonnistuneella yrityksellä.</li>
 <li>Toinen tekstialue tulee näkyviin, jos myös suorittajan seuraava yritys epäonnistuu.</li>
 <li>Kolmas alue tulee näkyviin, kun suorittajan täytyy suorittaa kurssi uudelleen alusta asti.</li>
</ol>
Huom! Your points/Pisteesi -kohtaa ei pysty muokkaamaan, sillä suorittajan pistemäärä päivittyy kenttään automaattisesti tuloslaskelman mukaisesti.

<b>Huomioithan myös, että...</b>
<ul>
 <li>jos moduulissa on <b>Hotspot</b>-elementtejä, joihin on lisätty yksi tai useampi <b>True/False</b>-kysymys, on nämä pisteet käytettävissä <b>Edit Points</b> -ikkunassa, mutta <strong>niitä ei lasketa tai huomioida Pass/Fail -elementissä</strong>. 
<ul>
 <li>Tämä tarkoittaa, että Edit Points -ikkunassa on asetettava 0 pistettä Hotspot-elementille, sillä Edit Points -ominaisuus laskee Hotspot-elementin True/False-kysymysten pisteet, mutta Pass/Fail-elementti ei käytä eikä huomoi niitä laskettaessa lopullisia pisteitä.</li>
</ul>
</li>
 <li>jos lisäät tai poistat kohteita moduulista tai submoduulista, joka sisältää Pass/Fail-elementin, muista tarkistaa uudelleen Pass/Fail-elementin asetuksista (ratas elementtinäkymän vasemmassa yläkulmassa) elementti/moduulin kohta, josta uusi yritys tulisi aloittaa.</li>
 <li>kun teet moduulia, jossa on Pass/Fail- tai Pass/Fail Always-elementti ja <strong>duplikoit</strong> <strong>moduulin,</strong> <strong>niin tarkista Pass/Fail-elementin uudelleen aloituskohta.</strong> Duplikaatissa moduulissa Pass/Fail- ja Pass/Fail Always-elementtien uudelleen aloituskohtaa ei löydy ja se on oletuksena introsta seuraava elementti.</li>
</ul>

<h4><b>Pass/Fail Always</b></h4>
<strong>Miten Pass/Fail Always -elementti eroaa Pass/Fail -elementistä?</strong>

<b>Pass/Fail Always</b>-elementti näkyy myös onnistuneen testin jälkeen, kun kurssin suorittaja on saanut tarpeeksi pisteitä läpäistäkseen testin. Elementissä suorittaja näkee myös oikeiden vastausten/pisteiden määrän suhteessa maksimipistemäärään.
<h4><b>Elementin muokkausohjeet</b></h4>
<ul>
 <li>Klikkaa elementtinäkymän vasemmassa yläkulmassa sijaitsevaa rataskuvaketta muuttaaksesi asetuksia, kuten <b>Pass/Fail</b>-elementissä (katso ylempää samasta osiosta Pass/Fail-elementin ohjeet).</li>
 <li>Muokkaa teksti, joka näytetään, kun kurssin suorittaja ei ole läpäissyt testiä ja teksti, joka näytetään, kun kurssin suorittaja on läpäissyt testin.</li>
</ul>

<h6 class="p1">Klikkaa kuvia suurentaaksesi niitä.</h6>

<figure class="doc-image"><img src="/files/docs/2021/09/PassFail_1_FI.jpg" alt="" loading="lazy"></figure>

<h5 class="p1 fusion-responsive-typography-calculated" data-fontsize="12" data-lineheight="18px">Elementin asetukset editointinäkymässä:</h5>

<figure class="doc-image"><img src="/files/docs/2021/09/PassFail_2_FI.jpg" alt="" loading="lazy"></figure>

<h5>Pass/Fail Always -elementti: Suorittaja ei läpäissyt testiä / Suorittaja läpäisi testin</h5>

<figure class="doc-image"><img src="/files/docs/2021/09/PassFail_Edit_FI.gif" alt="" loading="lazy"></figure>

<figure class="doc-image"><img src="/files/docs/2020/09/passfail1-1.png" alt="" loading="lazy"></figure>

<figure class="doc-image"><img src="/files/docs/2020/09/test-1.jpg" alt="" loading="lazy"></figure>

<figure class="doc-image"><img src="/files/docs/2020/09/passfail2-1.png" alt="" loading="lazy"></figure>

<figure class="doc-image"><img src="/files/docs/2020/09/passfail3-1.png" alt="" loading="lazy"></figure>

<figure class="doc-image"><img src="/files/docs/2021/10/PassFail_Always-1.png" alt="" loading="lazy"></figure>