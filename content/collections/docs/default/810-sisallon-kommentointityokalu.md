---
id: 08b33517-22d3-40a3-bbf9-2e6c51aeac71
blueprint: doc
title: '8.10 Sisällön kommentointityökalu'
---
<p>Apprix Builderilla tehtyjä moduuleja voi kommentoida suoraan moduulin <strong>muokkaus</strong>– tai <strong>esikatselutilassa</strong>. Kommentointityökalu nopeuttaa moduulien arviointi- ja julkaisuprosessia sekä helpottaa niin kommenttien antamista kuin vastaanottamistakin.</p><p>Kommentointityökalu sujuvoittaa yhteistyötä ja mahdollistaa useiden eri sidosryhmien antamien kommenttien näkymisen samassa paikassa, juuri oikeassa kohtaa moduulia. Fasilitaattorina näet kommentit myös editointitilassa, jolloin editointi helpottuu ja nopeutuu.</p><h3>Kommentointityökalun roolit</h3><ul>
 <li><strong>Apprix:n admin</strong>: Apprixin vastuuhenkilö, jolla on super admin käyttäjärooli.</li>
 <li><strong>Fasilitaattori:</strong> Asiakkaan Builderin käyttäjä. Builderin kautta voi määritellä fasilitaattorille eri oikeuksia (katselu ja muokkaus) riippuen siitä mitä hänelle halutaan mahdollistaa.</li>
 <li><strong>Anonyymikäyttäjä:</strong> Tämä käyttäjä tulee esikatselutilaan hänelle annetun salasanasuojatun linkin kautta ilman tunnistautumista (katseluoikeudet).</li>
</ul><h3>Miten muutan fasilitaattorin käyttöoikeuksia?</h3><p>Jos sinulla on Admin oikeudet,<strong> Administrate</strong>-valikossa voit tarvittaessa muuttaa fasilitaattorin moduulien käyttöoikeuksia. Klikkaa listasta käyttäjän nimeä, jonka käyttöoikeuksia haluat muokata. Klikkaa sen jälkeen "<strong>User's Module Edit &amp; Stats Permissions</strong>" -<strong>Settings</strong> -painiketta.  Voit nyt päivittää fasilitaattorin moduulin käyttöoikeuksia (None, View, Edit).</p><h3>Kommentointityökalun esikatseluoikeudet</h3><p>Esikatseluoikeuksia voidaan rajata salasanan ja voimassaolopäivän avulla.</p><h3>Fasilitaattori käyttöoikeudet</h3><h3>Muokkausoikeudet:</h3><ul>
 <li>Lukuoikeus kaikkiin kommentteihin</li>
 <li>Kommentointioikeus</li>
 <li>Kommenttien hallinnointioikeudet (ratkaisu, poisto, palautus)</li>
</ul><p><strong>Katseluoikeudet, myös anonyymikäyttäjät</strong>:</p><ul>
 <li>Luku-/ kommentointioikeus, lukuun ottamatta poistettuja kommentteja.</li>
</ul><h3>Filtterit</h3><ul>
 <li>Kommentointityökalun otsikko muuttuu <strong>SHOW</strong>-ponnahdusikkunassa valitsemiesi vaihtoehtojen mukaan (All comments, Unresolved and deleted comments, Unresolved and resolved comments, Unresolved comments)</li>
 <li>Jos olet anonyymikäyttäjä tai fasilitaattori, jolla on vain tämän moduulin katseluoikeudet, et voi tarkastella moduulia muokkaustilassa. Tässä tapauksessa voit tarkastella avoimia ja ratkaistuja kommentteja esikatselutilassa, mutta et poistettuja kommentteja.</li>
 <li>Filtterit muuttavat vain käyttäjän näkymää, eivät kaikkien käyttäjien näkymää.</li>
 <li>Filtterit eivät tallennu muistiin.</li>
</ul><h3>Edit Element -näkymä</h3><p>Vain moduulin editointi-oikeudet omaavat fasilitaattorit voivat avata moduulin elementit ja muokata kommentteja <strong>Edit</strong>-<strong>tilassa</strong> eli <strong>muokkaustilassa</strong>.</p><p>Kun elementti on muokkaustilassa, elementin oikeassa yläkulmassa näkyy vihreä puhekupla. Jos puhekuplan päällä on plusmerkki, kyseisessä elementissä ei ole kommentteja tai ratkaisemattomia kommentteja.</p><p>Jos on avoimia kommentteja, puhekuplassa näkyy luku, joka osoittaa avoimien kommenttien määrän.</p><p>Jos klikkaat puhekuplaa, kommentointityökalu ilmestyy elementin oikealle puolelle otsikolla <strong>Show: Unresolved comments</strong>.</p><p>Klikkaa kommentointityökalun otsikon lopussa olevaa pudotusnuolipainiketta, pienimuotoisempi <strong>SHOW</strong> -ponnahdusikkuna tulee näkyviin. Ratkaisemattomien kommenttien lisäksi voit valita, minkälaisia kommentteja haluat tarkastella: <strong>Ratkaistut (Resolved)</strong> ja/tai <strong>Poistetut (Deleted)</strong></p><p><strong>Huom! </strong>Näet <strong>Deleted</strong>- painikkeeen vain jos olet moduulin muokkausoikeudet omaava fasilitaattori.</p><h3>All Modules -näkymä</h3><p>Fasilitaattori, jolla on moduulin katseluoikeudet, voi esikatsella suoraan Builderin " <strong>All Modules</strong>" -näkymästä moduulia, jota hän haluaa kommentoida, klikkaamalla moduulin <strong>Preview</strong>-painiketta.</p><p>Moduuli avautuu esikatselutilaan, ja jokaisen elementin kohdalla ikkunan oikeassa yläkulmassa on vihreä puhekupla-ikoni. Elementissä ei ole ratkaisemattomia kommentteja jos puhekupla-ikonissa on plusmerkki. Jos elementissä on ratkaisemattomia kommentteja, puhekuplassa on luku.</p><p>Huomaa, että fasilitaattori, jolla on vain katseluoikeudet, voi tarkastella vain ratkaistuja ja ratkaisemattomia kommentteja, mutta ei poistettuja. Katseluoikeuksilla ei voi muuttaa kommentin tilaa.</p><p>Kun fasilitaattori haluaa vastata kommenttiin, hänen on klikattava kommentin alla olevaa vastausnuoli-painiketta ja lisättävä vastaus. Kun hän haluaa luoda uuden kommentin, hänen on lisättävä kommentti kommentti-ikkunan alareunasta.</p><p>Kun fasilitaattori lisää uuden kommentin <strong>Add comment</strong> -painikkeesta, uusi kommentti ilmestyy kommentti-ikkunan yläosaan. Jos fasilitaattori klikkaa vastausnuoli painiketta ja lisää vastauksensa <strong>Reply to comment</strong> -tekstikenttään, vastaus ilmestyy kommenttivastauksen vastausnuolen alle.</p><p>Ratkaisemattomien kommenttien määrä on nähtävissä kommenttiponnahdusikkunan oikealla puolella olevassa puhekuplassa.</p><h3>Anonyymikäyttäjät</h3><ul>
 <li>Tulevat esikatselutilaan heille annetun salasanasuojatun linkin kautta ilman tunnistautumista</li>
 <li>Syöttävät vapaavalintaisen nimimerkin kommentilleen</li>
 <li>Heillä on samat oikeudet kuin fasilitaattoreilla, joilla on esikatseluoikeudet</li>
 <li>Eivät voi lähettää kommentteja, jos moduulissa ei ole aktivoitu parametri ” <strong>Enable preview sharing for this main module and its submodule</strong> ”<strong>Share module preview</strong>” ikkunassa tai linkin päivämäärä on mennyt umpeen.</li>
</ul><p><strong>Huom!</strong> Nimimerkki tallentuu välilehden muistiin, jotta sitä ei tarvitse kirjoittaa uudestaan.</p><h3>Miten  submoduuleja sisältävän moduulin esikatselulinkki esitetään anonyymille käyttäjälle kommentointia varten?</h3><ul>
 <li>Klikkaa moduulin <strong>Edit Module</strong> -näkymässä ikkunan oikeassa yläkulmassa olevaa <strong>Preview</strong>-painiketta.</li>
 <li>Valitse <strong>Share</strong> -vaihtoehto, jolloin "<strong>Share module preview</strong>" -ponnahdusikkuna avautuu.</li>
 <li>Aktivoi "<strong>Enable preview sharing for this main module and its submodules</strong>" -painike.</li>
 <li>Asetasalasana esikatselun jakamista varten.</li>
 <li>Määritä esikatselun jakamisen päättymispäivä (enintään kuukauden kuluttua tästä päivästä).</li>
 <li>Klikkaa <strong>Copy link and message</strong> -painiketta.</li>
 <li>Toimita luomasi salasana ja linkki anonyymille käyttäjälle.</li>
</ul><p>Suosittelemme, että anonyymi käyttäjä avaa välilehden incognito-tilassa ja syöttää linkin ja salasanan. Anonyymi käyttäjä voi nyt lisätä ja lukea kommentteja, siirtyä päämoduulista submoduuliin ja sitten takaisin päämoduuliin. Huomaa, että jos linkin voimassaoloaika on umpeutunut, moduulia ei voi tarkastella.</p><p>On tärkeää huomata, että anonyymi käyttäjä voi lisätä ja lukea kommentteja, mutta hän ei voi poistaa eikä  ratkaista niitä. Tämä rajoitus on käytössä palauteprosessin eheyden säilyttämiseksi.</p><h3>Miten kommentti lisätään elementtiin?</h3><p>Lisää kommentti kommentointityökalun alaosaan <strong>Add comment</strong> – kohdan alla ja klikkaa <strong>Send</strong>. Huomaat, että nimikirjaimesi, nimesi, päivämääräsi ja kommenttiteksti ilmestyvät kommentointityökalun yläosassa olevaan tekstiruutuun.</p><p><strong>Huom!</strong> Kommentit näkyvät uusimmasta vanhimpaan. Kommentien vastaukset puolestaan vastamisjärjestyksessä.</p><p>Jos olet moduulin muokkausoikeudet omaava fasilitaattori näet tekstiruudun oikealla puolella kuvakkeen, jossa on kolme pistettä. Klikkaa kuvaketta, jolloin pieni ponnahdusikkuna avautuu. Ikkuna sisältää vaihtoehdot <strong>Resolve</strong> (Ratkaise) ja <strong>Delete</strong> (Poista). Voit muuttaa kommentin tilaa klikkaamalla jompaakumpaa näistä vaihtoehdoista.</p><p>Jos kommentti on ratkaistu tai poistettu, voit peruuttaa kommentin ratkaisun ja/tai poistaa sen klikkaamalla tätä kolme pistettä -kuvaketta uudelleen ja valitsemalla haluamasi vaihtoehdon (<strong>Undelete</strong>/<strong>Unresolve</strong>).</p><p>Huomaat nyt, että ratkaisemattoman kommentin alla näkyy vastausnuolikuvake aina, kun kommenttia tai vastausta luodaan. Klikkaa vastausnuolikuvaketta, jolloin  <strong>Reply to comment</strong> -tekstiruutu ilmestyy vastausnuolikuvakkeen alapuolelle. Voit kirjoittaa vastauksesi ja valita <strong>Send</strong>, jos haluat vastata kommenttiin. Muussa tapauksessa valitse <strong>Cancel</strong>.</p><p>Jos valitset <strong>Send</strong>-painikkeen, nimikirjaimesi, nimesi, päivämääräsi ja kommenttisi näkyvät vastausnuoli -kuvakkeen alla. Huomaa, että kommenttisi alle ilmestyy uusi vastausnuolikuvake.</p><h3>Miten moduulin muokkausoikeudet omaava fasilitaattori voi ratkaista kommentin?</h3><p>Oletetaan, että kommenttiin on yksi tai useampi vastaus. Jos moduulin muokkausoikeudet omaava fasilitaattori klikkaa kommentin nimikirjaimia tai <strong>Resolve</strong>-painiketta, hän ratkaisee kommentin kaikkine vastauksineen. Kun kommentti on ratkaistu, <strong>OK</strong>-kuvake ilmestyy niiden kuvakkeiden päälle, jotka aiemmin sisälsivät nimikirjaimet.</p><p>Jos fasilitaattori sen sijaan klikkaa vain vastausta (reply), hän ratkaisee tai poistaa vain vastauksen eikä kommenttia.</p><h3>Huom!</h3><ul>
 <li>Vain moduulin muokkausoikeudet omaavat fasilitaattorit voivat ratkaista, jättää ratkaisematta, poistaa ja peruuttaa kommentteja.</li>
 <li>Vihreässä puhekupla-ikonissa näkyy, jos sinulla on yksi tai useampi ratkaisematon kommentti.</li>
 <li>Kommenttiin ei voi vastata, jos se on ratkaistu tai poistettu.</li>
 <li>Tyhjää kommenttia ei voi lähettää</li>
</ul><ul>
 <li>Poistetun kommentin vastauksen tilaa ei voi muokata ennen kuin kommentti on palautettu.</li>
</ul><h3>Edit Module -näkymä</h3><p>Kun suljet muokkaustilassa ratkaisemattomia kommentteja sisältävän elementin, ratkaisemattomien kommenttien lukumäärä näkyy <strong>Edit Module</strong> -näkymässä elementin yläosassa. Lisäksi ikkunan oikealle puolelle ilmestyy <strong>Comments</strong>-puhekupla, joka sisältää ratkaisemattomien kommenttien kokonaismäärän (päämoduulin ja submoduulien kommentit kaikki yhdessä).</p><p>Klikkaa ikkunan oikealla puolella olevaa <strong>Comments</strong>-puhekuplaa, jolloin <strong>Comments</strong>-ponnahdusikkuna avautuu. Ikkunassa luetellaan niiden moduulien (päämoduuli ja suubmoduulit) nimet, jotka sisältävät ratkaisemattomia kommentteja. Kun kaikki kommentit on ratkaistu, <strong>Comments</strong>-puhekupla poistuu.</p><p><strong>Browse Submodules</strong> valikossa näytetään ratkaisemattomien kommenttien lukumäärä elementin kohdalla ja ratkaisemattomien kommenttien kokonaismäärä yläkulmassa. Puhekupla poistuu jos ei ole kommentteja.</p><h3>All Modules -näkymä</h3><p>Puhekupla-ikoni päämoduulin kohdalla tarkoittaa, että päämodulissa (tai sen draftissa) tai yhdessäkin submoduulissa (tai sen draftissa) on ratkaisemattomia kommentteja.</p><p>Puhekupla-ikoni submoduulin kohdalla tarkoittaa, että submoduulissa (tai sen draftissa) on ratkaisematon  kommentti.</p><h3>Draft ominaisuus</h3><ul>
 <li>Draftissa kommentit siirtyvät julkaistusta moduulista uuteen draftiin.</li>
 <li>Jos moduulista on draft versio silloin kommentointityökalu ei ole käytössä julkaistun version kanssa, koska kommentit on siirretty draftiin.</li>
 <li>Kun poistat draftin tai elementin, jossa on kommentteja, kommentit poistuvat pysyvästi.</li>
 <li>Browse submodules valikossa näytetään aina julkaistu submoduuli, eikä draft.</li>
</ul><h3>Yleisiä huomioita</h3><ul>
 <li>Kommentointi ei jätä audit trailiin merkintöjä.</li>
 <li>Builderin näkymä ja kommentointityökalu eivät päivity reaaliaikaisesti, jos toinen fasilitaattori esimerkiksi kirjoittaa yhtä aikaa kommentteja.</li>
</ul><h3>Kuinka Kommentointi -ominaisuus toimii?</h3>
<p><strong>All Modules ja Edit Element -näkymät</strong></p>
<p><strong>Moduulin editointi-oikeudet omaava fasilitaattori</strong></p>

<p></p>

<p><img src="/files/docs/2023/12/Comment-edit-module.gif"></p>

<p></p>

<p><img src="/files/docs/2023/12/2.-Comment-resolve-and-delete.gif"></p>

<p></p>

<p><img src="/files/docs/2023/12/Anomym-resolved.png"></p>

<p></p>

<p><img src="/files/docs/2023/12/4.-Preview-link.png"></p>

<p></p>
