---
id: f51b849f-9605-4a27-a19b-efc2c08e50d0
blueprint: doc
title: '7.54 Form'
---
Form‑elementti on tehokas työkalu, jonka avulla voit helposti ja luotettavasti kerätä tarkkaa tietoa kurssin osallistujilta.
Yleisin käyttötapa on kerätä lisätietoja, joita ei saada todennusmenetelmästä, tai tietoja, joita tarvitaan vain tietyssä moduulissa. Elementti sisältää valmiita, validoituja kenttiä, kuten Etunimi, Sukunimi, Puhelinnumero, Päivämäärä, Sähköposti, EU‑y‑tunnus / ALV‑tunnus sekä suomalainen veronumero. Voit myös lisätä valintaruutuja, valikkokenttiä tai luoda mukautettuja kenttiä ilman validointia.

<strong>Muokkausohjeet</strong>

Kun avaat Form‑elementin, ponnahdusikkuna avautuu. Siinä voit määrittää elementin otsikon ja johdannon. Jos johdantoa ei tarvita, poista teksti ohittaaksesi ponnahdusikkunan.
<strong>Huom!</strong> Jos ponnahdusikkunassa on tekstiä, sen voi avata uudelleen milloin tahansa napsauttamalla kysymysmerkkiä elementin vasemmassa yläkulmassa.

Elementin keskellä näkyy tekstilaatikko. Käytä tekstilaatikkoa lisäohjeiden antamiseen tai poista teksti, jos sitä ei tarvita. Lisää sitten taustakuva elementtiin.

Avaa <strong>Element Settings</strong> ‑valikko rataskuvakkeesta elementin yläosasta määrittääksesi, kuinka monta kenttää lomakkeeseen sisällytetään. Käytettävissä olevia kenttiä ovat esimerkiksi Etunimi, Sukunimi, Puhelinnumero, Päivämäärä, Sähköposti, EU‑y‑tunnus / ALV‑tunnus ja suomalainen veronumero. Valitut kentät näkyvät lomakkeessa.

<strong>Kenttien muokkaaminen lomakkeen tekstilaatikossa</strong>
<ol>
 <li><strong>Avaa riviasetukset</strong>
<ul>
 <li>Napsauta työkalukuvaketta rivin yläosassa.</li>
 <li>Riviasetusten ponnahdusikkuna avautuu, jossa voit säätää rivin asetuksia.</li>
</ul>
</li>
 <li><strong>Valitse kenttätyyppi</strong>
<ul>
 <li>Valitse kenttätyyppi valikosta napsauttamalla nuolta.</li>
 <li>Esimerkiksi valitse <em>Etunimi</em>.</li>
 <li>ID‑avainsanan ehdotusikkuna avautuu.</li>
</ul>
</li>
 <li><strong>Määritä ID‑avainsana</strong>
<ul>
 <li>Napsauta ehdotettua <em>first_name</em>‑kenttää.</li>
 <li>Ponnahdusikkuna sulkeutuu, ja viesti <em>“Field configured for participant identification”</em> näkyy riviasetuksissa.</li>
</ul>
</li>
 <li><strong>Aseta pakollinen kenttä</strong>
<ul>
 <li>Valitse <strong>Mandatory</strong>‑ruutu tarvittaessa.</li>
 <li>Kun valittuna, otsikon loppuun ilmestyy asteriski (*) (esim. <em>Etunimi*</em>).</li>
</ul>
</li>
 <li><strong>Muokkaa validointiviestiä</strong>
<ul>
 <li>Vie hiiri rivin yläosan työkalukuvakkeen päälle.</li>
 <li>Tekstilaatikko avautuu (oletuksena englanniksi), jossa osallistujia ohjeistetaan tarkistamaan, ettei Etunimi‑kentässä ole ylimääräisiä merkkejä.</li>
 <li>Vaihda tekstilaatikon kieli tarvittaessa.</li>
</ul>
</li>
 <li><strong>Toista muille kentille</strong></li>
</ol>
<ul>
 <li>Noudata samoja vaiheita kaikille lisäkentille.</li>
</ul>
<strong> </strong>

<strong>Huomioitavaa</strong>
<ul>
 <li>ID‑avainsanan ehdotusikkuna avautuu vain, kun valitset <em>Etunimi</em>, <em>Sukunimi</em> tai <em>Sähköposti</em>.</li>
 <li>Muista lisätä linkki tietosuojakäytäntöön tarvittaessa, jos sitä ei ole jo annettu todennusvaiheessa.</li>
</ul>
<strong>Kenttävalidointi</strong>
<ul>
 <li>Kaikki valikossa olevat vakiokenttätyypit sisältävät muotovalidoinnin.</li>
 <li>Kun muokkaat otsikkotekstiä, validointiviesti tulee näkyviin muokattavaksi.</li>
 <li>Virheilmoituksia tulee aina käyttää kenttämuodon validoinnissa. Jos tekstiä ei ole syötetty, näytetään oletuksena englanninkielinen virheilmoitus.</li>
 <li>Voit halutessasi käyttää mukautettua kenttää, jossa ei ole validointia.</li>
</ul>
<strong>Kenttä‑ID</strong>
<ul>
 <li>Kenttä‑ID:tä käytetään tilastojen sarakeotsikkona.</li>
 <li>Sitä voidaan käyttää myös ominaisuuksissa ja integraatioissa.</li>
</ul>
<strong>ID‑avainsanat</strong>
<ul>
 <li>ID‑avainsanat on varattu erityistapauksiin, kuten osallistujien sähköpostien keräämiseen.</li>
 <li>Niitä voidaan käyttää ominaisuuksien, kuten muistutusten kanssa.</li>
 <li>Mikä tahansa moduulille käyttöön ottamasi todennusmenetelmä ohittaa nämä avainsanat.</li>
</ul>

<h6>Form-elementti? Tässä esimerkki</h6>

<figure class="doc-image"><img src="/files/docs/2025/12/Form-First-name-5-1.png" alt="" loading="lazy"></figure>

<h6>Row options - "Choose field type"</h6>

<figure class="doc-image"><img src="/files/docs/2025/12/Form-First-Name-1.png" alt="" loading="lazy"></figure>

<h6>Kuinka aloittaa elementin muokkaaminen?</h6>

<figure class="doc-image"><img src="/files/docs/2025/12/Form-First-Name2-1.png" alt="" loading="lazy"></figure>

<h6>Lomakkeen muokkaaminen</h6>

<figure class="doc-image"><img src="/files/docs/2025/12/Form-First-name-4-OK-1.png" alt="" loading="lazy"></figure>