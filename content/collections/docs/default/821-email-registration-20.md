---
id: b08a97a3-508b-4fae-9016-85532c3e1b5f
blueprint: doc
title: '8.2.1 Email Registration 2.0'
---
Email Registration 2.0 on  sähköpostirekisteröinnin todennusmekanismi, joka antaa kurssin osallistujien rekisteröityä Builderiin ja luoda käyttäjätunnuksen ja salasanan. Rekisteröinnin jälkeen samaa käyttäjätunnusta ja salasanaa voidaan käyttää kaikissa moduuleissa, joissa sähköpostirekisteröinti on käytössä. Jos toiminto on käytössä, kurssin osallistujien on käytettävä voimassa olevaa ja yksilöllistä sähköpostiosoitetta (tai matkapuhelinnumeroa).

<strong>Kirjautumislomake (Login form)</strong>

Kirjautumislomake on ensimmäinen sivu, jonka kurssilainen näkee, kun hän aloittaa kurssin.

Kirjautumislomakkeessa on sähköpostikenttä.  Kun sähköpostikenttä on täytetty, kurssilainen klikkaa <strong>Seuraava</strong> tai painaa enter, jolloin järjestelmä etsii, onko tili olemassa vai ei.

<img class="wp-image-5446 aligncenter" src="/files/docs/2024/02/Picture1-Login-form-1.png" alt="" width="342" height="266" />
<ol>
 <li><strong>Jos tiliä ei ole vielä olemassa</strong></li>
</ol>
Jos tiliä ei ole olemassa, kun ilmoittautumislomake avautuu, kurssilainen voi lisätä sinne tietonsa (etunimi, sukunimi ja salasana) ja klikata <strong>Rekisteröidy</strong>-painiketta.

<img class="wp-image-5447 aligncenter" src="/files/docs/2024/02/Picture-2-Registration-Form-1.png" alt="" width="298" height="277" />

<strong>Huom! Käyttäjän sähköpostiosoitteen, puhelinnumeron ja kirjautumistunnuksen tulee olla yksilöllisiä.</strong>

<strong>Kirjautumiseen käytettävissä olevat merkit ovat:</strong>
<ul>
 <li>latinalaiset kirjaimet (sekä isot että pienet)</li>
 <li>numerot</li>
 <li>merkit -._@.</li>
</ul>
<strong>Tenantin asetuksista riippuen salasanan vahvuuden tulee olla ”keskivahva (medium)” tai ”vahva”.</strong>

Keskivahva tarkoittaa, että salasanan tulee sisältää:
<ul>
 <li>vähintään 8 kirjainta</li>
 <li>latinalaiset isot kirjaimet</li>
 <li>pienet latinalaiset kirjaimet</li>
</ul>
Vahvat salasanat vaativat lisäksi vähintään yhden erikoissymbolin tästä sarjasta:

!”#$%&amp;'()*+,./:;&lt;=&gt;?@[\]-^_`{|}~

<strong>Huom! Ennen rekisteröitymistä </strong><strong>kurssilaisen</strong> <strong>on vahvistettava sähköpostiosoitteensa tai puhelinnumeronsa PIN-koodilla.</strong>

Sen jälkeen, että kurssilainen on klikannut <strong>Rekisteröidy</strong>-painiketta uusi ponnahdusikkuna avautuu. Siinä kysytään kurssilaiselta, haluaako hän saada pin-koodin sähköpostitse tai puhelimitse. Kun hän on valinnut jommankumman vaihtoehdon, hän saa pin-koodin, joka hänen on syötettävä lomakkeeseen. Tämän jälkeen hän voi aloittaa kurssin.

<img class="wp-image-5448 aligncenter" src="/files/docs/2024/02/Picture3-Send-PIN-code-1.png" alt="" width="317" height="235" />

<strong>Huom! Kurssilaisen on suoritettava tunnistautuminen 10 minuutin sisällä.</strong>

<img class="wp-image-5449 aligncenter" src="/files/docs/2024/02/Picture4-Insert-PIN-Code-1.png" alt="" width="327" height="248" />
<h4>Pin-koodivahvistus</h4>
PIN-koodivarmennus voidaan tehdä käyttämällä käyttäjän sähköpostiosoitetta tai puhelinnumeroa.

Koodi sisältää 6 numeroa, jotka luodaan satunnaisesti ja tallennetaan käyttäjän istuntoon 5 minuutin ajan. Tämän ajanjakson sisällä koodi ei muutu. Klikkaamalla <strong>Lähetä uudelleen</strong> -painiketta käyttäjä saa saman koodin joka kerta, kunnes se vanhenee. Tämän jälkeen järjestelmä luo uuden koodin. Huomaa, että edellinen koodi ei ole enää voimassa.

Numeron syöttö on tavallinen syöttökenttä ja tukee kaikkia yleisiä tekstinmuokkaustoimintoja, kuten kopiointia, liittämistä, muokkaamista, poistamista jne. Kun käyttäjä syöttää kuusi numeroa, vahvistusprosessi käynnistyy automaattisesti.

<strong>2. Jos tili on olemassa, mutta kurssin osallistuja on unohtanut salasanansa</strong>

Kurssilainen klikkaa "<strong>Unohdin salasanan</strong>" -linkkiä. Ponnahdusikkuna tilin palauttamisesta avautuu. Kurssilainen täyttää sähköpostiosoitteensa ja klikkaa <strong>Lähetä PIN-koodi</strong> -painiketta. Kun PIN-koodi on lähetetty sähköpostiosoitteeseen, kurssilainen syöttää koodin uuteen ponnahdusikkunaan. Uusi salasana -ikkuna avautuu, ja kurssilainen voi vaihtaa salasanansa tässä. Kun salasana on vaihdettu, kurssi avautuu.

<strong>3. Kurssilainen on rekisteröitynyt ja muistaa salasanansa.</strong>

Kurssilainen syöttää kirjautumislomakkeen sähköpostiosoitteen ja painaa sitten <strong>Seuraava</strong>-painiketta. Uusi ikkuna avautuu. Tässä hän kirjoittaa salasanan ja painaa <strong>Jatka</strong>-painiketta. Kurssi voidaan nyt aloittaa.
<h4>Turvallisuussuojaus</h4>
Järjestelmässä on sisäinen palomuuri, joka pystyy havaitsemaan ja estämään käyttäjän epäilyttävän toiminnan. Apprixin käytössä oleva palomuuri sisältää useita suojakerroksia.