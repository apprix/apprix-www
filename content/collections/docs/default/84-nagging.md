---
id: 123ce55f-c7f8-4404-88eb-51360b4d3dac
blueprint: doc
title: '8.4 Nagging'
---
<h4><strong>Toiminnon tarkoitus</strong></h4>
<strong>Nagging</strong> -ominaisuuden (aiemmin nimeltään “Participants and reminders”) avulla voit kutsua henkilöitä suorittamaan verkkokurssin sekä muistuttaa henkilöitä vielä suorittamatta jääneistä kursseista, jotka heidän olisi pitänyt jo suorittaa aikaisemmin.

Kutsut voidaan lähettää <strong>manuaalisesti</strong> tai <strong>automaattisesti</strong> asetusten mukaan. Toiminto vaatii kutsuttavan henkilön sähköpostiosoitteen.
<h4><strong>Toiminnon käyttö</strong></h4>
<ul>
 <li>Toiminto on käytettävissä moduulin muokkaustilassa.</li>
 <li>Klikkaa moduulin <strong>rataskuvaketta</strong> ja valitse <strong>“Nagging…”</strong>.</li>
 <li>Kun automaattinen muistutus on käytössä, valikossa näkyy teksti <strong>“ON”</strong>.</li>
</ul>
<strong>Huom: Moduulin täytyy olla julkaistu, jotta muistutuksia voidaan lähettää.</strong>
<h4><strong>Participants &amp; Reminders pääikkunan rakenne</strong></h4>
<strong>Participants &amp; Reminders </strong>-ikkuna koostuu kolmesta osasta:
<ol>
 <li>Painikkeet osallistujalistan muokkaamiseen</li>
 <li>Osallistujien lista</li>
 <li>Painikkeet muistutusten lähettämiseen manuaalisesti tai automaattisesti</li>
</ol>
<h4><strong>Osallistujien lisääminen ja poistaminen</strong></h4>
<ul>
 <li><strong>Lisääminen:</strong>
<ul>
 <li>Klikkaa <strong>“Add…”</strong>-painiketta.</li>
 <li>Syötä yksi tai useampi sähköpostiosoite (yksi osoite per rivi).</li>
</ul>
</li>
 <li><strong>Poistaminen:</strong>
<ul>
 <li>Valitse rivi osallistujataulukosta.</li>
 <li>Klikkaa “<strong>Delete</strong>…”.</li>
 <li>Voit valita useita rivejä käyttämällä Shift+klikkaus tai Ctrl+klikkaus.</li>
</ul>
</li>
</ul>
<h4> <strong>Kutsujen lähettäminen manuaalisesti</strong></h4>
<ol>
 <li>Valitse yksi tai useampi sähköpostiosoite osallistujataulukosta.</li>
 <li>Klikkaa <strong>“Send reminders manually…”</strong>.</li>
 <li>Avautuu ponnahdusikkuna: <strong>“Send Reminders To Selected Participants By Email”</strong>.</li>
 <li>Täytä muistutuksen <strong>aihe</strong> ja <strong>sisältö</strong>.</li>
 <li>Voit käyttää seuraavia paikkamerkkejä:
<ul>
 <li>suluissa "module" → korvataan moduulin nimellä</li>
 <li>suluissa "link" → korvataan moduulin linkillä</li>
</ul>
</li>
 <li>Klikkaa <strong>“Send to … participants”</strong>.</li>
</ol>
<strong>Lähetyksen jälkeen: </strong>
<ul>
 <li><strong>“Reminders Sent”</strong> -sarake kasvaa yhdellä.</li>
 <li><strong>“Last Reminder”</strong> -sarake päivittyy uudella päivämäärällä.</li>
</ul>
<strong> </strong>
<h4><strong>Kutsujen lähettäminen automaattisesti</strong></h4>
Osallistujien kutsuminen voidaan automatisoida.
<ul>
 <li>Klikkaa <strong>“Automatic Reminder settings…”</strong> avataksesi asetukset.</li>
 <li>Valitse <strong>“Use automated email reminders”</strong> -valintaruutu.</li>
 <li>Voit määrittää:</li>
</ul>
<ul>
 <li>
<ul>
 <li>Muistutusten lähetysvälin</li>
 <li>Muistutusten enimmäismäärän per käyttäjä</li>
 <li>Muistutussähköpostin aiheen ja sisällön</li>
</ul>
</li>
</ul>
<ul>
 <li>Klikkaa “<strong>Save</strong>” tallentaaksesi asetukset.</li>
</ul>
<strong>Lähetyksen jälkeen: </strong>
<ul>
 <li><strong>“Reminders Sent”</strong> -sarake kasvaa yhdellä.</li>
 <li><strong>“Last Reminder”</strong> -sarake päivittyy uudella päivämäärällä.</li>
</ul>
<h4> <strong>Automaattisten kutsujen toiminta</strong></h4>
<ul>
 <li>Kaikki osallistujat saavat saman kutsun, kunnes:
<ol>
 <li>he suorittavat moduulin, tai</li>
 <li>he saavuttavat asetetun muistutusmäärän.</li>
</ol>
</li>
 <li>Voit keskeyttää kutsut tietyiltä osallistujilta painikkeella <strong>“Pause / Unpause…”</strong>.</li>
</ul>
Esimerkkejä osallistujataulukosta
<ul>
 <li><strong>teppo.testinen@apprix.fi</strong> → sai 2 kutsua ja suoritti moduulin. Ei saa enää uusia kutsuja.</li>
 <li><strong>jane.doe@gmail.com</strong> → sai 3 kutsua, ei ole suorittanut. Voi saada lisää kutsuja riippuen asetetusta enimmäismäärästä.</li>
 <li><strong>erkki.esimerkki@gmail.com</strong> → sai 2 kutsua, sitten asetettiin tauolle. Ei saa uusia kutsuja ennen kuin tauko poistetaan.</li>
</ul>
<h4><strong>Automaattisten asetusten lisätiedot </strong></h4>
<strong>Osallistujataulukko</strong>
<ul>
 <li>Uusi osallistuja saa ensimmäisen kutsun heti.</li>
 <li>Seuraava kutsu ajoitetaan asetetun lähetysvälin mukaan.</li>
 <li>Kun osallistuja suorittaa moduulin, uusia kutsuja ei lähetetä.</li>
 <li>Tauolla olevat osallistujat eivät saa kutsuja ennen tauon poistamista.</li>
</ul>
<strong>Lähetysvälit</strong>
<ul>
 <li><strong>Välin kasvattaminen:</strong> kutsut siirtyvät myöhemmäksi.</li>
 <li><strong>Välin lyhentäminen:</strong> osa osallistujista voi saada kutsun heti, riippuen <strong>Last Reminder</strong> -päivästä.</li>
</ul>
<strong>Enimmäismäärä</strong>
<ul>
 <li><strong>Enimmäismäärän kasvattaminen:</strong> osallistujat, jotka olivat saavuttaneet rajan, voivat saada uusia kutsuja.</li>
 <li><strong>Enimmäismäärän pienentäminen:</strong> osallistujat lopettavat kutsujen saamisen heti, kun uusi raja saavutetaan.</li>
</ul>
<h4><strong>Nagging- + Expiration-ominaisuudet</strong></h4>
Jos Nagging- ja Expiration-ominaisuudet ovat käytössä samanaikaisesti:
<ul>
 <li>Nagging-ominaisuudella voi muistuttaa keskeneräisestä suorituksesta tai kutsua henkilö suorittamaan verkkokurssi.</li>
 <li>Kun Expiration-ominaisuus on päällä, kurssin suoritus vanhentuu määritellyn ajan kuluttua.</li>
 <li>Jos lisäksi on päällä Expiration reminders, vanhentumassa olevasta suorituksesta lähtee muistutus.</li>
 <li>Kun suoritus on vanhentunut, suorittajalle voi taas lähettää Nagging-muistutuksia.</li>
</ul>

<h6 class="p1">Klikkaa kuvia suurentaaksesi niitä.</h6>
<h6 class="p1"> </h6>

<h6 class="p1">Kutsu lähetetään manuaalisesti
</h6>

<h6 class="p1"> Kutsu lähetetään automaattisesti
</h6>

<h6 class="p1">Osallistujat ja muistutukset ‑valintaikkunan kolme pääosiota
</h6>

<h6 class="p1"> Esimerkkejä osallistujataulukossa
</h6>

<figure class="doc-image"><img src="https://faq.apprix.fi/wp-content/uploads/2026/01/PR-123.png" alt="" loading="lazy"></figure>

<figure class="doc-image"><img src="https://faq.apprix.fi/wp-content/uploads/2026/01/Picture1.png" alt="" loading="lazy"></figure>