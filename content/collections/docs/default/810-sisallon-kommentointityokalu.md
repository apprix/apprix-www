---
id: 08b33517-22d3-40a3-bbf9-2e6c51aeac71
blueprint: doc
title: '8.10 Sisällön kommentointityökalu'
---
Apprix Builderilla tehtyjä moduuleja voi kommentoida suoraan moduulin <strong>muokkaus</strong>– tai <strong>esikatselutilassa</strong>. Kommentointityökalu nopeuttaa moduulien arviointi- ja julkaisuprosessia sekä helpottaa niin kommenttien antamista kuin vastaanottamistakin.

Kommentointityökalu sujuvoittaa yhteistyötä ja mahdollistaa useiden eri sidosryhmien antamien kommenttien näkymisen samassa paikassa, juuri oikeassa kohtaa moduulia. Fasilitaattorina näet kommentit myös editointitilassa, jolloin editointi helpottuu ja nopeutuu.
<h4><strong>Kommentointityökalun roolit</strong></h4>
<ul>
 <li><strong>Apprix:n admin</strong>: Apprixin vastuuhenkilö, jolla on super admin käyttäjärooli.</li>
 <li><strong>Fasilitaattori:</strong> Asiakkaan Builderin käyttäjä. Builderin kautta voi määritellä fasilitaattorille eri oikeuksia (katselu ja muokkaus) riippuen siitä mitä hänelle halutaan mahdollistaa.</li>
 <li><strong>Anonyymikäyttäjä:</strong> Tämä käyttäjä tulee esikatselutilaan hänelle annetun salasanasuojatun linkin kautta ilman tunnistautumista (katseluoikeudet).</li>
</ul>
<h4><strong>Miten muutan fasilitaattorin käyttöoikeuksia?</strong></h4>
Jos sinulla on Admin oikeudet,<strong> Administrate</strong>-valikossa voit tarvittaessa muuttaa fasilitaattorin moduulien käyttöoikeuksia. Klikkaa listasta käyttäjän nimeä, jonka käyttöoikeuksia haluat muokata. Klikkaa sen jälkeen "<strong>User's Module Edit &amp; Stats Permissions</strong>" -<strong>Settings</strong> -painiketta.  Voit nyt päivittää fasilitaattorin moduulin käyttöoikeuksia (None, View, Edit).
<h4><strong>Kommentointityökalun esikatseluoikeudet</strong></h4>
Esikatseluoikeuksia voidaan rajata salasanan ja voimassaolopäivän avulla.

<strong> </strong>
<h4><strong>Fasilitaattori käyttöoikeudet</strong></h4>
<strong> Muokkausoikeudet:</strong>
<ul>
 <li>Lukuoikeus kaikkiin kommentteihin</li>
 <li>Kommentointioikeus</li>
 <li>Kommenttien hallinnointioikeudet (ratkaisu, poisto, palautus)</li>
</ul>
<strong>Katseluoikeudet, myös anonyymikäyttäjät</strong>:
<ul>
 <li>Luku-/ kommentointioikeus, lukuun ottamatta poistettuja kommentteja.</li>
</ul>
<h4><strong>Filtterit</strong></h4>
<ul>
 <li>Kommentointityökalun otsikko muuttuu <strong>SHOW</strong>-ponnahdusikkunassa valitsemiesi vaihtoehtojen mukaan (All comments, Unresolved and deleted comments, Unresolved and resolved comments, Unresolved comments)</li>
 <li>Jos olet anonyymikäyttäjä tai fasilitaattori, jolla on vain tämän moduulin katseluoikeudet, et voi tarkastella moduulia muokkaustilassa. Tässä tapauksessa voit tarkastella avoimia ja ratkaistuja kommentteja esikatselutilassa, mutta et poistettuja kommentteja.</li>
 <li>Filtterit muuttavat vain käyttäjän näkymää, eivät kaikkien käyttäjien näkymää.</li>
 <li>Filtterit eivät tallennu muistiin.</li>
</ul>
<h4><strong>Edit Element -näkymä</strong></h4>
Vain moduulin editointi-oikeudet omaavat fasilitaattorit voivat avata moduulin elementit ja muokata kommentteja <strong>Edit</strong>-<strong>tilassa</strong> eli <strong>muokkaustilassa</strong>.

Kun elementti on muokkaustilassa, elementin oikeassa yläkulmassa näkyy vihreä puhekupla. Jos puhekuplan päällä on plusmerkki, kyseisessä elementissä ei ole kommentteja tai ratkaisemattomia kommentteja.

Jos on avoimia kommentteja, puhekuplassa näkyy luku, joka osoittaa avoimien kommenttien määrän.

Jos klikkaat puhekuplaa, kommentointityökalu ilmestyy elementin oikealle puolelle otsikolla <strong>Show: Unresolved comments</strong>.

Klikkaa kommentointityökalun otsikon lopussa olevaa pudotusnuolipainiketta, pienimuotoisempi <strong>SHOW</strong> -ponnahdusikkuna tulee näkyviin. Ratkaisemattomien kommenttien lisäksi voit valita, minkälaisia kommentteja haluat tarkastella: <strong>Ratkaistut (Resolved)</strong> ja/tai <strong>Poistetut (Deleted)</strong>

<strong>Huom! </strong>Näet <strong>Deleted</strong>- painikkeeen vain jos olet moduulin muokkausoikeudet omaava fasilitaattori.

<strong> </strong>
<h4><strong>All Modules -näkymä</strong></h4>
Fasilitaattori, jolla on moduulin katseluoikeudet, voi esikatsella suoraan Builderin " <strong>All Modules</strong>" -näkymästä moduulia, jota hän haluaa kommentoida, klikkaamalla moduulin <strong>Preview</strong>-painiketta.

Moduuli avautuu esikatselutilaan, ja jokaisen elementin kohdalla ikkunan oikeassa yläkulmassa on vihreä puhekupla-ikoni. Elementissä ei ole ratkaisemattomia kommentteja jos puhekupla-ikonissa on plusmerkki. Jos elementissä on ratkaisemattomia kommentteja, puhekuplassa on luku.

Huomaa, että fasilitaattori, jolla on vain katseluoikeudet, voi tarkastella vain ratkaistuja ja ratkaisemattomia kommentteja, mutta ei poistettuja. Katseluoikeuksilla ei voi muuttaa kommentin tilaa.

Kun fasilitaattori haluaa vastata kommenttiin, hänen on klikattava kommentin alla olevaa vastausnuoli-painiketta ja lisättävä vastaus. Kun hän haluaa luoda uuden kommentin, hänen on lisättävä kommentti kommentti-ikkunan alareunasta.

Kun fasilitaattori lisää uuden kommentin <strong>Add comment</strong> -painikkeesta, uusi kommentti ilmestyy kommentti-ikkunan yläosaan. Jos fasilitaattori klikkaa vastausnuoli painiketta ja lisää vastauksensa <strong>Reply to comment</strong> -tekstikenttään, vastaus ilmestyy kommenttivastauksen vastausnuolen alle.

Ratkaisemattomien kommenttien määrä on nähtävissä kommenttiponnahdusikkunan oikealla puolella olevassa puhekuplassa.

<strong> </strong>
<h4><strong>Anonyymikäyttäjät</strong></h4>
<ul>
 <li>Tulevat esikatselutilaan heille annetun salasanasuojatun linkin kautta ilman tunnistautumista</li>
 <li>Syöttävät vapaavalintaisen nimimerkin kommentilleen</li>
 <li>Heillä on samat oikeudet kuin fasilitaattoreilla, joilla on esikatseluoikeudet</li>
 <li>Eivät voi lähettää kommentteja, jos moduulissa ei ole aktivoitu parametri ” <strong>Enable preview sharing for this main module and its submodule</strong> ”<strong>Share module preview</strong>” ikkunassa tai linkin päivämäärä on mennyt umpeen.</li>
</ul>
<strong>Huom!</strong> Nimimerkki tallentuu välilehden muistiin, jotta sitä ei tarvitse kirjoittaa uudestaan.
<h4><strong>Miten  submoduuleja sisältävän moduulin esikatselulinkki esitetään anonyymille käyttäjälle kommentointia varten?</strong></h4>
<ul>
 <li>Klikkaa moduulin <strong>Edit Module</strong> -näkymässä ikkunan oikeassa yläkulmassa olevaa <strong>Preview</strong>-painiketta.</li>
 <li>Valitse <strong>Share</strong> -vaihtoehto, jolloin "<strong>Share module preview</strong>" -ponnahdusikkuna avautuu.</li>
 <li>Aktivoi "<strong>Enable preview sharing for this main module and its submodules</strong>" -painike.</li>
 <li>Asetasalasana esikatselun jakamista varten.</li>
 <li>Määritä esikatselun jakamisen päättymispäivä (enintään kuukauden kuluttua tästä päivästä).</li>
 <li>Klikkaa <strong>Copy link and message</strong> -painiketta.</li>
 <li>Toimita luomasi salasana ja linkki anonyymille käyttäjälle.</li>
</ul>
Suosittelemme, että anonyymi käyttäjä avaa välilehden incognito-tilassa ja syöttää linkin ja salasanan. Anonyymi käyttäjä voi nyt lisätä ja lukea kommentteja, siirtyä päämoduulista submoduuliin ja sitten takaisin päämoduuliin. Huomaa, että jos linkin voimassaoloaika on umpeutunut, moduulia ei voi tarkastella.

On tärkeää huomata, että anonyymi käyttäjä voi lisätä ja lukea kommentteja, mutta hän ei voi poistaa eikä  ratkaista niitä. Tämä rajoitus on käytössä palauteprosessin eheyden säilyttämiseksi.
<h4></h4>
<h4><strong>Miten kommentti lisätään elementtiin?</strong></h4>
Lisää kommentti kommentointityökalun alaosaan <strong>Add comment</strong> – kohdan alla ja klikkaa <strong>Send</strong>. Huomaat, että nimikirjaimesi, nimesi, päivämääräsi ja kommenttiteksti ilmestyvät kommentointityökalun yläosassa olevaan tekstiruutuun.

<strong>Huom!</strong> Kommentit näkyvät uusimmasta vanhimpaan. Kommentien vastaukset puolestaan vastamisjärjestyksessä.

Jos olet moduulin muokkausoikeudet omaava fasilitaattori näet tekstiruudun oikealla puolella kuvakkeen, jossa on kolme pistettä. Klikkaa kuvaketta, jolloin pieni ponnahdusikkuna avautuu. Ikkuna sisältää vaihtoehdot <strong>Resolve</strong> (Ratkaise) ja <strong>Delete</strong> (Poista). Voit muuttaa kommentin tilaa klikkaamalla jompaakumpaa näistä vaihtoehdoista.

Jos kommentti on ratkaistu tai poistettu, voit peruuttaa kommentin ratkaisun ja/tai poistaa sen klikkaamalla tätä kolme pistettä -kuvaketta uudelleen ja valitsemalla haluamasi vaihtoehdon (<strong>Undelete</strong>/<strong>Unresolve</strong>).

Huomaat nyt, että ratkaisemattoman kommentin alla näkyy vastausnuolikuvake aina, kun kommenttia tai vastausta luodaan. Klikkaa vastausnuolikuvaketta, jolloin  <strong>Reply to comment</strong> -tekstiruutu ilmestyy vastausnuolikuvakkeen alapuolelle. Voit kirjoittaa vastauksesi ja valita <strong>Send</strong>, jos haluat vastata kommenttiin. Muussa tapauksessa valitse <strong>Cancel</strong>.

Jos valitset <strong>Send</strong>-painikkeen, nimikirjaimesi, nimesi, päivämääräsi ja kommenttisi näkyvät vastausnuoli -kuvakkeen alla. Huomaa, että kommenttisi alle ilmestyy uusi vastausnuolikuvake.

<strong> </strong>
<h4><strong>Miten moduulin muokkausoikeudet omaava fasilitaattori voi ratkaista kommentin?</strong></h4>
Oletetaan, että kommenttiin on yksi tai useampi vastaus. Jos moduulin muokkausoikeudet omaava fasilitaattori klikkaa kommentin nimikirjaimia tai <strong>Resolve</strong>-painiketta, hän ratkaisee kommentin kaikkine vastauksineen. Kun kommentti on ratkaistu, <strong>OK</strong>-kuvake ilmestyy niiden kuvakkeiden päälle, jotka aiemmin sisälsivät nimikirjaimet.

Jos fasilitaattori sen sijaan klikkaa vain vastausta (reply), hän ratkaisee tai poistaa vain vastauksen eikä kommenttia.

<strong>Huom!</strong>
<ul>
 <li>Vain moduulin muokkausoikeudet omaavat fasilitaattorit voivat ratkaista, jättää ratkaisematta, poistaa ja peruuttaa kommentteja.</li>
 <li>Vihreässä puhekupla-ikonissa näkyy, jos sinulla on yksi tai useampi ratkaisematon kommentti.</li>
 <li>Kommenttiin ei voi vastata, jos se on ratkaistu tai poistettu.</li>
 <li>Tyhjää kommenttia ei voi lähettää</li>
</ul>
<ul>
 <li>Poistetun kommentin vastauksen tilaa ei voi muokata ennen kuin kommentti on palautettu.</li>
</ul>
<h4></h4>
<h4><strong>Edit Module -näkymä</strong></h4>
Kun suljet muokkaustilassa ratkaisemattomia kommentteja sisältävän elementin, ratkaisemattomien kommenttien lukumäärä näkyy <strong>Edit Module</strong> -näkymässä elementin yläosassa. Lisäksi ikkunan oikealle puolelle ilmestyy <strong>Comments</strong>-puhekupla, joka sisältää ratkaisemattomien kommenttien kokonaismäärän (päämoduulin ja submoduulien kommentit kaikki yhdessä).

Klikkaa ikkunan oikealla puolella olevaa <strong>Comments</strong>-puhekuplaa, jolloin <strong>Comments</strong>-ponnahdusikkuna avautuu. Ikkunassa luetellaan niiden moduulien (päämoduuli ja suubmoduulit) nimet, jotka sisältävät ratkaisemattomia kommentteja. Kun kaikki kommentit on ratkaistu, <strong>Comments</strong>-puhekupla poistuu.

<strong>Browse Submodules</strong> valikossa näytetään ratkaisemattomien kommenttien lukumäärä elementin kohdalla ja ratkaisemattomien kommenttien kokonaismäärä yläkulmassa. Puhekupla poistuu jos ei ole kommentteja.

<strong> </strong>
<h4><strong>All Modules -näkymä</strong></h4>
Puhekupla-ikoni päämoduulin kohdalla tarkoittaa, että päämodulissa (tai sen draftissa) tai yhdessäkin submoduulissa (tai sen draftissa) on ratkaisemattomia kommentteja.

Puhekupla-ikoni submoduulin kohdalla tarkoittaa, että submoduulissa (tai sen draftissa) on ratkaisematon  kommentti.
<h4><strong>Draft ominaisuus</strong></h4>
<ul>
 <li>Draftissa kommentit siirtyvät julkaistusta moduulista uuteen draftiin.</li>
 <li>Jos moduulista on draft versio silloin kommentointityökalu ei ole käytössä julkaistun version kanssa, koska kommentit on siirretty draftiin.</li>
 <li>Kun poistat draftin tai elementin, jossa on kommentteja, kommentit poistuvat pysyvästi.</li>
 <li>Browse submodules valikossa näytetään aina julkaistu submoduuli, eikä draft.</li>
</ul>
<strong>Yleisiä huomioita</strong>
<ul>
 <li>Kommentointi ei jätä audit trailiin merkintöjä.</li>
 <li>Builderin näkymä ja kommentointityökalu eivät päivity reaaliaikaisesti, jos toinen fasilitaattori esimerkiksi kirjoittaa yhtä aikaa kommentteja.</li>
</ul>

<h6>Klikkaa videota suurentaaksesi sitä</h6>
<h6><strong>All Modules ja Edit Element -näkymät</strong>
<strong>Moduulin editointi-oikeudet omaava fasilitaattori</strong></h6>
<h6>Kuinka Kommentointi -ominaisuus toimii?</h6>

<h6>Miten ratkaiset tai poistat kommentin?</h6>

<h6>Anonyymikäyttäjät</h6>

<h6>Parametri ” Enable preview sharing for this main module and its submodule ” Share module preview -ikkunassa</h6>

<figure class="doc-image"><img src="/files/docs/2023/12/Comment-edit-module.gif" alt="" loading="lazy"></figure>

<figure class="doc-image"><img src="/files/docs/2023/12/2.-Comment-resolve-and-delete.gif" alt="" loading="lazy"></figure>

<figure class="doc-image"><img src="/files/docs/2023/12/Anomym-resolved.png" alt="" loading="lazy"></figure>

<figure class="doc-image"><img src="/files/docs/2023/12/4.-Preview-link.png" alt="" loading="lazy"></figure>