---
id: b56053c8-719b-4341-ba4e-8531f653c034
blueprint: doc
title: '8.5 Expiration and Reminder (Kurssisuorituksen vanhentumistoiminto)'
---
<b>Expiration and Reminder</b> -ominaisuudella voit ilmoittaa esimerkiksi organisaatiosi henkilökunnalle tai aliurakoitsijoille, että heidän kurssisuorituksensa vanhenee ja on suoritettava uudelleen tietyn ajanjakson kuluttua. Tästä esimerkkinä turvallisuuskoulutus, joka tulee suorittaa esimerkiksi vuoden välein.

Ominaisuuden voi kytkeä päälle vain, jos suorittajan henkilötietoja (esimerkiksi sähköpostiosoite, puhelinnumeron ja ID (yksiköllinen tunniste) kerätään kurssimoduulissa. Nämä tiedot voidaan kerätä SSO-, sähköpostirekisteröinti- tai veronumerotarkistus-tunnistusmenetelmillä.

<strong>Huom!</strong>
<div><b>Expiration</b>-tekstiboksi näytetään koulutuksen alussa. Kun käyttäjä on tunnistettu (<i>esim. käyttäen seuraavia todennusmenetelmiä: Email Registration, SSO, Tax number Check</i>), se sisältää listan käyttäjän aikaisemmat suoritukset ja niiden voimassaolot.
<div class="">
<div class=""><strong>Expiration-ominaisuus toimii rajallisesti Login-elementin kanssa</strong>, koska käyttäjä tunnistetaan vasta Login-elementissä, ja tästä syystä koulutuksen alussa ei ole mahdollista näyttää listaa käyttäjän suorituksista.  Kuitenkin käyttäjää muistutetaan vanhenevasta suorituksesta, kun Expiration-omaisuuden muistutustoiminto (Reminder) on päällä ja koulutuksessa tunnistaudutaan Login-elementillä.
<h4 data-fontsize="20" data-lineheight="30px"></h4>
<h4 class="fusion-responsive-typography-calculated" data-fontsize="20" data-lineheight="30px">Expiration and reminder settings -ikkuna</h4>
Valitse ratassymbolista <strong>Edit Module</strong> -editointinäkymän ylälaidassa <b>Expiration and Reminder</b>

<strong>Expiration and reminder settings</strong> -ikkuna aukeaa.

Ikkunan vasemmalla puoliskolla voit muokata vanhenemistoiminnon ilmoittamaa viestiä kurssin ensimmäisessä Intro-elementissä, jossa muistutetaan suorittajaa kurssin voimassaoloajasta.

Myös <strong>Reminder</strong>-toiminnon asetuksia voi muokata ikkunan oikealla puoliskolla, jos <b>Expiration and Reminder</b> -toiminto on aktiivinen eli ruutu näkymässä on raksittu.

<strong>Huom!</strong> Kun <strong>Remind user</strong> -ruutua ei ole raksittu/aktivoitu, osion asetukset on deaktivoitu näkymässä.
<h4 class="fusion-responsive-typography-calculated" data-fontsize="20" data-lineheight="30px"><strong data-fusion-font="true">Expiration settings (ikkunan vasen puoli)</strong></h4>
Ikkunan vasemmassa puoliskossa voit muokata teksikenttien sisältöä ja voimassaoloaikaa päivissä, kuukausissa tai vuosissa.

Tekstikenttien sisältö näkyy suorittajalle viestinä kurssin ensimmäisellä sivulla, Intro-elementissä. Jos suorittaja on jo suorittanut kyseisen kurssin aikaisemmin, alimman tekstikentän viesti näkyy myös suorittajalle kertoen hänen aikaisempien kurssisuorituksien ajankohdat.

Aikaisempien kurssisuoritusten ajankohdat näkyvät päivämääräformaatissa "vvvv-kk-pp". Jos suoritus ei ole enää voimassa, päivämäärä näkyy yliviivattuna.
<h4 class="fusion-responsive-typography-calculated" data-fontsize="20" data-lineheight="30px">Reminder message before course expires settings (ikkunan oikea puoli)</h4>
Jos haluat, että järjestelmä lähettää muistutusviestin suorittajille ennen kuin heidän kurssisuorituksensa vanhenevat, klikkaa aktiiviseksi ruutu <strong>Remind user before course expires</strong> -osiossa ikkunan oikealla puolella (ruudun voi aktivoida vasta, kun <strong>Expiration settings</strong> -osion ruutu on aktivoitu/raksittu). Muistutuksen voi asettaa päivien, viikkojen tai kuukausien päähän suorituksen vanhenemisesta. Aika vanhenemiseen lasketaan päivissä siitä hetkestä, kun suorittajan kurssisuoritus vanhenee.

<strong>Esimerkiksi:</strong> Jos kurssi suoritettiin 16.9.2020, suorittajan kurssin voimassaoloaika asetetaan 12 kuukaudeksi ja muistutus vanhentumisesta asetetaan lähtemään yksi kuukausi ennen suorituksen vanhentumista, suorittaja saa muistutuksen 16.08.2021.

Ylempi tekstikenttä on sähköpostin aihekenttä ja keskimmäinen kenttä on sähköpostin viestikenttä. Tageja (moduulin nimi, moduulin linkki, kurssin vanhentumispäivämäärä ja yrityksen nimi) voidaan myös käyttää sähköpostin viestissä ja ne muuttuvat tageja vastaaviksi sisällöiksi sähköpostiviestissä. Tekstiä kentissä voi myös tarvittaessa muotoilla. Alimmaisesta kentästä, voit testata muistutusviestin lähetystä valitsemaasi sähköpostiosoitteeseen.

<strong>Huom!</strong> Tagit syötetään viestiin aaltosulkeiden <strong>{ }</strong> väliin.

<strong>Mahdolliset tagit:</strong>
<ul>
 <li>moduulin nimi = {module}</li>
 <li>moduulin linkki = {link}</li>
 <li>suorituksen vanhentumispäivämäärä = {expiration_date}</li>
 <li>yrityksen nimi = {tenant}</li>
</ul>
<strong>Huom!</strong> Jos <strong>Reminder</strong>-muistutustoiminto on integroitu HR-järjestelmään, muistutusviestejä voi lähettää suoraan HR-järjestelmään. Suorittajat vastaanottavat tällöin muistutusviestit valittujen sisäisten viestintäkanavien kautta.
<h3 class="fusion-responsive-typography-calculated" data-fontsize="20" data-lineheight="30px"></h3>
<h4 class="fusion-responsive-typography-calculated" data-fontsize="20" data-lineheight="30px">Miten ominaisuus toimii suorittajan näkökulmasta?</h4>
Kun suorittaja aloittaa kurssin, johon on asetettu voimassaoloaika, hän näkee ilmoituksen tästä <strong>Intro</strong>-elementissä. Viesti sisältää asetuksissa määritetyt tiedot, esimerkiksi suorituksen vanhenemispäivämäärän ja muistutuspäivämäärän.
<ul>
 <li>Jos suorittaja:
<ul>
 <li>ei ole vielä aloittanut kurssia, kurssi alkaa kurssin alusta.</li>
 <li>ei ole vielä suorittanut kurssia loppuun, kurssi jatkuu siitä kohdasta, johon hän kurssissa jäi.</li>
 <li>on jo suorittanut kurssin aikaisemmin, voi hän aloittaa täysin uuden kurssisuorituksen. Suoritus on voimassa, kunnes asetettu voimassaoloaika umpeutuu.</li>
</ul>
</li>
 <li>Jos suorittaja on suorittanut kyseisen kurssin aikaisemmin, näkyvät suorituspäivämäärät viestissä.</li>
 <li>Suorittaja saa muistutusviestin sähköpostiosoitteeseensa, ennen kuin suorituksen voimassaolo vanhentuu.</li>
</ul>
<strong>Huom!</strong>
<ul>
 <li>Jos moduuli monistetaan (<strong>Duplicate</strong>), <strong>Expiration and reminder </strong>-ikkunassa tehdyt asetukset kopioituvat myös uuteen moduulikopioon.</li>
 <li>Vanhtentumismuistutukset voidaan kytkeä päälle tai pois moduulikohtaisesti.</li>
</ul>

<h6 class="p1">Klikkaa kuvia suurentaaksesi niitä.</h6>

<figure class="doc-image"><img src="/files/docs/2024/05/8.5.1-Expiration.png" alt="" loading="lazy"></figure>

<h6>Expiration-tekstiboksi: Kurssin suorittäjä ei suorittanut kurssia aiemmin.</h6>

<figure class="doc-image"><img src="/files/docs/2024/05/8.5.2-Expiration.png" alt="" loading="lazy"></figure>

<h6>Expiration-tekstiboksi:
Kurssin suorittäjä on suorittanut kurssin kahdesti. Ensimmäinen suoritus on vanhentunut ja toinen on edelleen voimassa.</h6>

<figure class="doc-image"><img src="/files/docs/2024/05/8.5.3-Expiration-2.png" alt="" loading="lazy"></figure>

<figure class="doc-image"><img src="/files/docs/2024/05/8.5.4-Expiration-2.png" alt="" loading="lazy"></figure>

<video controls preload="metadata" style="width:100%;border-radius:0.75rem;box-shadow:0 1px 2px 0 rgba(0,0,0,.08);margin-top:1rem">
    <source src="/files/docs/2026/01/Send-manually-191225.mp4" type="video/mp4">
</video>

<video controls preload="metadata" style="width:100%;border-radius:0.75rem;box-shadow:0 1px 2px 0 rgba(0,0,0,.08);margin-top:1rem">
    <source src="/files/docs/2026/01/Aut-reminder-set.mp4" type="video/mp4">
</video>
