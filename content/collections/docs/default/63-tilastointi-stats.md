---
id: eab240be-5034-4623-9408-79bb3df057b0
blueprint: doc
title: '6.3 Tilastointi (Stats)'
---
Kun moduuli on julkaistu, (<b>Published</b>), se alkaa kerryttää tilastoa. Voit tarkastella moduulin tilastoja eli statistiikkaa klikkaamalla <strong>Stats</strong>-nappia  <b>All Modules</b>-näkymässä tai moduulin <strong>Edit Module</strong> -editointinäkymässä. Statistiikasta näet kaikki suoritustiedot ajantasaisina.

<strong>Huom!</strong> Käyttäjätietojen kerääminen vaatii, että moduulissa on Login-elementti, tai toinen tunnistautumistapa (esim.: Email Registration, Consumer Login, SSO/Single sign on tai Tax number check) päällä moduuliasetuksista (katso <strong>User Authentication</strong> -työkalu ratassymboli moduulin editointinäkymässä).

<strong>Huom!</strong> Tiedot kerätään erikseen kullekin moduulille ja submoduulille. 
<h4>Stats-ikkunan toiminnot:</h4>
<ul>
 <li><b>Overview</b>-näkymästä näet koosteen moduulin tilastoista
<ul>
 <li><b>Duration</b> (moduulin/Päämoduulin kesto, jos moduulissa submoduuleita) vastaa suorittajan viettämää aikaa moduulissa. </li>
</ul>
</li>
 <li><b>Users</b>-välilehdeltä näet kaikki moduulin läpäisseet eli moduulin loppuun asti käyneet suorittajat. Voit käyttää myös hakukenttää suorittajien nimien suodattamiseen.</li>
 <li><strong>Big Data</strong> -välilehdeltä voit tarkastella kaikkien kurssille osallistuneiden suorittajien tilastoja ja yksityiskohtaista, elementtikohtaista statistiikkaa.
<ul>
 <li aria-level="1"><b>Show Finished</b> -painike: näyttää vain onnistuneesti moduulin loppuun asti viedyt suoritukset (<b>Finished</b> = 1)</li>
 <li aria-level="1"><b>Show Unfinished </b>-painike: näyttää sekä onnistuneesti loppuun asti viedyt suoritukset että keskeneräiset suoritukset (<b>Finished</b> = 0)</li>
 <li aria-level="1"><b>Show Archived </b>-painike<b>: </b>Jos tehtävän sisältävä elementti (esim. True/False, CheckBox) on poistettu moduulista moduulin julkaisemisen jälkeen, näiden tehtäväelementtien keräämät tiedot näkyvät tilastoissa, kun tämä vaihtoehto on valittu.</li>
 <li><b>Big Data</b> -välilehdessä voit myös suodattaa sarakkeita ja ladata analysoitavat tiedot klikkaamalla <b>Export</b>-painiketta. 
<ul>
 <li>Voit käyttää myös <b>Search-</b>hakukenttää hakutulosten suodattamiseen.</li>
</ul>
</li>
 <li><strong>Progress</strong>-sarake<strong>:</strong> näyttää suorittajan etenemisen moduulissa (esim. 3 = 3. elementti moduulissa). 
<ul>
 <li>Jos suorittaja menee moduulissa taaksepäin ja kirjautuu sitten ulos, Builder tallentaa tilastoon viimeisen "sijainnin" (Progress) eli elementin, jossa hän on ollut ennen uloskirjautumista. </li>
 <li>Jos hän on edennyt moduulin viimeiseen elementtiin (<strong>Finish</strong>-elementtiin asti), merkitään se "<strong>Finished= 1</strong>". Tällöin "Finished= 1"-merkintä ei muutu, vaikka käyttäjä siirtyisi viimeiseltä sivulta taaksepäin ja sen jälkeen kirjautuisi ulos.</li>
</ul>
</li>
 <li>"<b>Score</b>"/"<b>Max Score</b>" -sarake: moduulin "suorittajan pisteet" / "maksimipisteet". 
<ul>
 <li>Pisteet nollataan, jos suorittaja palaa moduuliin myöhemmin ja aloittaa moduulin uudelleen.</li>
</ul>
</li>
</ul>
</li>
 <li><strong>Feedback</strong>-välilehti: Jos moduuli sisältää<strong> Feedback</strong>-elementin palautteelle, suorittajien palautteet näkyvät <b>Feedback</b>-välilehdessä.
<ul>
 <li>Huom! <b>Feedback</b>-välilehdelle tallentuu myös vapaamuotoiset palautteet, jotka suorittajat ovat kirjoittaneet <b>Feedback</b> -tekstikenttään <b>Feedback</b>-elementin oikealle puolelle.</li>
 <li>Jos haluat tarkastella kaikkia Feedback-elementissä annettuja palautteita, avaa <b>Big Data</b> -välilehti.</li>
</ul>
</li>
</ul>
<b>Vinkki!</b> Jos organisaatiossasi olisi tarvetta myös laajemmille, räätälöidyille suoritusraporteille, tutustu myös <a href="#extended-reports"><b>Extended Reports -lisäominaisuuteen.</b></a>

<h6 class="p1">Voit tarkastella moduulin tilastoja klikkaamalla Stats-nappia.</h6>

<figure class="doc-image"><img src="/files/docs/2024/05/All-modules-stats.png" alt="" loading="lazy"></figure>

<h6>Mistä löydät moduulin Big Datan (tilastot)?</h6>

<figure class="doc-image"><img src="/files/docs/2024/05/Edit-module-stats.png" alt="" loading="lazy"></figure>

<h6><strong><i>Jos kurssimoduuli on suoritettu onnistuneesti loppuun asti, </i><i>Finished</i><i>-sarakkeen arvo on 1. Jos kurssimoduulin suorittaminen loppuun asti on epäonnistunut, Finished-sarakkeen arvo on 0.</i></strong></h6>

<figure class="doc-image"><img src="/files/docs/2021/02/Stats.png" alt="" loading="lazy"></figure>

<h6>Miten tilastotietoja voidaan etsiä ja viedä Big Datasta?</h6>

<figure class="doc-image"><img src="/files/docs/2021/02/Stats1.png" alt="" loading="lazy"></figure>

<h6>Feedback-näkymässä näet koulutuksen loppuun asti suorittaneiden palautteet.</h6>

<figure class="doc-image"><img src="/files/docs/2021/02/Stats2.png" alt="" loading="lazy"></figure>

<h6>Feedback-elementti kerryttää tilastoa Feedback-välilehdelle.</h6>

<figure class="doc-image"><img src="/files/docs/2021/02/Stats3.png" alt="" loading="lazy"></figure>