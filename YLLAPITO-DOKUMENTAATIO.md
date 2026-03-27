# Apprix.fi-sivuston yllapito-dokumentaatio

Statamic CMS — Versio 1.0 | Paivitetty 23.3.2026

---

## Sisallysluettelo

1. [Johdanto](#1-johdanto)
2. [Kirjautuminen ja hallintapaneeli](#2-kirjautuminen-ja-hallintapaneeli)
3. [Blogikirjoittajan opas](#3-blogikirjoittajan-opas)
4. [Uutisten hallinta](#4-uutisten-hallinta)
5. [Asiakastarinat](#5-asiakastarinat)
6. [Sivujen sisallon muokkaaminen](#6-sivujen-sisallon-muokkaaminen)
7. [Navigaatio](#7-navigaatio)
8. [Monikielisyys](#8-monikielisyys)
9. [Assets — kuvat ja tiedostot](#9-assets--kuvat-ja-tiedostot)
10. [Yhteydenottolomake](#10-yhteydenottolomake)
11. [Kayttajien hallinta](#11-kayttajien-hallinta)
12. [Yleiset yllapitotehtavat](#12-yleiset-yllapitotehtavat)
13. [Pikaluukut ja muistilista](#13-pikaluukut-ja-muistilista)

---

## 1. Johdanto

### 1.1 Mita tama dokumentaatio sisaltaa

Tama dokumentaatio on kattava opas Apprix Oy:n verkkosivuston (www2.apprix.fi) yllapitoon ja sisallonhallintaan. Sivusto on rakennettu Statamic-sisallonhallintajarjestelmalla, joka toimii Laravel-sovelluskehyksen paalla.

Dokumentaatio kattaa kaikki paivittaiset yllapitotoimenpiteet: blogijulkaisujen luomisen, sivujen muokkaamisen, kuvien hallinnan, monikielisen sisallon yllapidon seka tekniset yllapitotehtavat.

### 1.2 Kenelle se on tarkoitettu

Dokumentaatio palvelee kahta paakayttajaryhmaa:

1. **Sisallontuottajat** — blogikirjoittajat, markkinointitiimi ja muut ei-tekniset kayttajat, jotka luovat ja paivittavat sisaltoa.
2. **Tekniset yllapitajat** — kehittajat ja jarjestelmavalvojat, jotka vastaavat sivuston teknisesta toiminnasta, kayttajahallinnasta ja vianmaarityksesta.

### 1.3 Kayttajaroolit ja vastuualueet

Statamic tukee erilaisia kayttajarooleja. Sivustolla on kaytossa seuraavat:

| Rooli | Vastuualueet |
|-------|-------------|
| Paakayttaja (Super Admin) | Taysi hallintaoikeus kaikkiin toimintoihin, kayttajien hallinta, asetukset |
| Sisallontuottaja | Artikkelien ja sivujen luominen ja muokkaaminen, kuvien lisaaminen |

HUOMIO: Kayttajaroolit ja niiden oikeudet maaritellaan Statamicin hallintapaneelissa. Pyri aina kayttamaan vahimman oikeuden periaatetta — anna kayttajille vain ne oikeudet, joita he tarvitsevat.

### 1.4 Miten dokumentaatiota kaytetaan

- **Sisallontuottajat**: Aloita luvuista 2 ja 3. Luku 2 opastaa kirjautumisen ja hallintapaneelin kayton, luku 3 kattaa blogijulkaisujen luomisen.
- **Tekniset yllapitajat**: Luvut 6–12 kasittelevat sivuston rakenteen, navigaation, monikielisyyden ja tekniset yllapitotehtavat.
- Kayta sisallysluetteloa siirtyaksesi suoraan tarvitsemaasi aiheeseen.

---

## 2. Kirjautuminen ja hallintapaneeli

### 2.1 Kirjautuminen Statamic Control Paneliin

1. Avaa selaimessa osoite: **https://www2.apprix.fi/cp**
2. Syota sahkopostiosoitteesi ja salasanasi.
3. Napsauta **Log in**.

HUOMIO: Jos olet unohtanut salasanasi, kayta "Forgot password" -toimintoa kirjautumissivulla. Saat sahkopostiisi linkin salasanan vaihtamiseen.

VINKKI: Kaytta aina ajantasaista selainta (Chrome, Firefox, Edge tai Safari). Statamicin hallintapaneeli toimii parhaiten uusimmilla selainversioilla.

### 2.2 Hallintapaneelin yleiskatsaus

Kirjautumisen jalkeen naet Statamicin hallintapaneelin (Control Panel, "CP"). Paneeli on sivuston hallinnan keskuspiste, josta kaytetaan kaikkia sisallonhallinnan toimintoja.

Hallintapaneelin paanakyma sisaltaa:

- **Dashboard** — yleiskatsaus viimeisimpiin muutoksiin
- **Collections** — sisaltokokoelmat (sivut, artikkelit)
- **Navigations** — valikkorakenteet
- **Taxonomies** — luokittelut ja tagit
- **Assets** — kuvat ja tiedostot
- **Globals** — yleiset asetukset ja yhteiset tiedot
- **Forms** — lomakkeet ja niiden vastaukset
- **Users** — kayttajien hallinta

### 2.3 Kayttoliittyman paaosat ja navigointi

Hallintapaneelin vasemman reunan sivupalkki toimii paanavigaationa. Ylareunassa nakyy nykyinen osio ja kayttajan nimi. Oikeasta ylakulmasta paaset muokkaamaan omia tietojasi ja kirjautumaan ulos.

**Sivupalkin paaosiot:**

1. **Collections** — sisaltaa kaikki sisaltokokoelmat:
   - **Pages** — sivuston sivut (etusivu, tuotesivut, yrityssivu jne.)
   - **Articles** — blogiartikkelit ja uutiset
2. **Taxonomies** — sisaltaa luokittelut:
   - **Tags** — artikkelien tunnisteet (esim. "elearning", "tyoturvallisuus", "uutiset")
3. **Navigation** — valikkorakenteet:
   - **Main** — paanavigaatio
   - **Footer** — alatunnisteen navigaatio
4. **Assets** — mediatiedostot:
   - **Images** — kuvat
   - **Files** — muut tiedostot (PDF:t, artikkelikuvat)
5. **Globals** — yleiset asetukset:
   - **Configuration** — yleiset sivuston asetukset
   - **SEO** — hakukoneoptimointiasetukset
   - **Social Media** — sosiaalisen median tilit
   - **Browser Appearance** — selaimen ulkoasuasetukset
6. **Forms** — lomakkeet:
   - **Contact** — yhteydenottolomake
7. **Users** — kayttajien hallinta

---

## 3. Blogikirjoittajan opas

Blogiartikkelit sijaitsevat **Articles**-kokoelmassa. Ne nakyvataan sivuston Ajankohtaista-sivulla osoitteessa /ajankohtaista.

### 3.1 Uuden blogijulkaisun luominen askel askeleelta

1. Kirjaudu hallintapaneeliin (ks. luku 2.1).
2. Napsauta vasemmasta sivupalkista **Collections** > **Articles**.
3. Napsauta oikeasta ylakulmasta **Create Entry** -painiketta.
4. Valitse sivusto (site), jolle artikkeli luodaan:
   - **default** = suomenkielinen versio
   - **en** = englanninkielinen versio
   - **sv** = ruotsinkielinen versio
5. Tayta kaikki vaaditut kentat (ks. kohta 3.2).
6. Tallenna artikkeli napsauttamalla **Save** tai kayta nappaimistoa: Ctrl+S (Windows) / Cmd+S (Mac).

### 3.2 Kenttien tayttaminen

Artikkelin muokkausnakyma sisaltaa seuraavat kentat:

**Paakentat (Main-valilehti):**

| Kentta | Tyyppi | Pakollinen | Kuvaus |
|--------|--------|-----------|--------|
| Title (Otsikko) | Teksti | Kylla | Artikkelin otsikko. Nakyy listauksissa, artikkelin ylareunassa ja selaimen valilehdessa. |
| Date (Paivays) | Paivamaara | Kylla | Julkaisupaivamaara. Maarittaa artikkelin jarjestyksen listauksissa. |
| Intro (Ingressi) | Tekstialue | Ei | Lyhyt tiivistelma (max 220 merkkia). Nakyy artikkelilistauksissa korttien kuvaustekstina. |
| Image (Kansikuva) | Kuva | Ei | Artikkelin paakuva. Nakyy listauksissa ja artikkelin alussa. Valitse kuva Assets-kirjastosta tai lataa uusi. |
| Article (Sisalto) | Bard-editori | Kylla | Artikkelin varsinainen sisalto. Tukee rikasta tekstia, kuvia, videoita, taulukoita ja lainauksia. |
| Slug (URL-osoite) | Automaattinen | Kylla | Muodostuu automaattisesti otsikosta. Voit muokata tarvittaessa. Max 200 merkkia. |

**Sivupalkki (Sidebar):**

| Kentta | Tyyppi | Pakollinen | Kuvaus |
|--------|--------|-----------|--------|
| Author (Kirjoittaja) | Teksti | Ei | Kirjoittajan nimi. Nakyy artikkelisivulla. |
| Tags (Tagit) | Taksonomia | Ei | Valitse olemassa olevista tageista tai luo uusia. Kaytossa mm. "elearning", "uutiset", "tyoturvallisuus", "builder". |

**SEO-valilehti:**

SEO-valilehti sisaltaa hakukonenakyvyyteen vaikuttavat asetukset. Naihin kuuluvat:

- **SEO Title** — mukautettu otsikko hakukoneille (jatetaan tyhjana, jos halutaan kayttaa artikkelin otsikkoa)
- **SEO Description** — metakuvaus hakukoneille (suositus: 150–160 merkkia)
- **Open Graph** — sosiaalisen median jakoasetukset (kuva, otsikko)
- **Sitemap** — hakukoneen sivukartta-asetukset

VINKKI: Tayta aina vahintaan SEO Description -kentta. Hyva metakuvaus parantaa artikkelin nakyvyytta hakutuloksissa ja lisaa klikkausprosenttia.

### 3.3 Kuvien lisaaminen ja Assets-kirjaston kaytto

**Kansikuvan lisaaminen:**

1. Napsauta Image-kentan **Browse** tai **Upload** -painiketta.
2. Valitse kuva olemassa olevista kuvista tai lataa uusi tiedosto.
3. Suositellut kuvakoot: vahintaan 1200 x 630 pikkselia (toimii myos sosiaalisen median jaossa).
4. Tuetut formaatit: JPG, PNG, WebP.

**Kuvien lisaaminen artikkelin sisaltoon (Bard-editorissa):**

1. Aseta kursori kohtaan, johon haluat kuvan.
2. Napsauta editorin tyokalupalkin kuvakuvaketta tai kirjoita "/" ja valitse "Image".
3. Valitse kuva Assets-kirjastosta tai lataa uusi.
4. Lisaa kuvalle vaihtoehtoinen teksti (alt-teksti) saavutettavuutta varten.

HUOMIO: Kayta aina kuvallista alt-tekstia. Se on tarkeaa saavutettavuuden ja hakukoneoptimoinnin kannalta.

**Muun median lisaaminen Bard-editoriin:**

- **Video**: Lisaa YouTube- tai Vimeo-linkki videon upottamiseksi.
- **Taulukko**: Lisaa taulukko tietojen jasenneltyyn esittamiseen.
- **Lainaus (Pull Quote)**: Korosta tarkea lainaus tai keskeinen viesti.
- **Painikkeet**: Lisaa toimintakehotuspainike (CTA) artikkeliin.

### 3.4 Julkaiseminen, luonnokset ja ajastettu julkaisu

**Valitton julkaisu:**

1. Tayta kaikki kentat.
2. Varmista, etta artikkelin tila on **Published** (vihrea kytkin oikeassa ylareunassa).
3. Napsauta **Save**. Artikkeli nakyy valittomasti sivustolla.

**Luonnoksen tallentaminen:**

1. Tayta kentat haluamallasi tavalla.
2. Aseta tila **Draft**-tilaan kytkimesta (oikea ylakulma).
3. Napsauta **Save**. Luonnos tallentuu mutta ei nay julkisella sivustolla.

**Ajastettu julkaisu:**

1. Aseta Date-kenttaan tuleva paivamaara.
2. Aseta tila **Published**.
3. Tallenna artikkeli.

HUOMIO: Ajastettu julkaisu toimii vain, jos palvelimelle on konfiguroitu Statamicin ajastustehtava (scheduler). Varmista tekniselta yllapitajalta, etta ajastus on kaytossa.

### 3.5 Julkaistun artikkelin muokkaaminen

1. Siirry **Collections** > **Articles**.
2. Etsi muokattava artikkeli listasta. Voit kayttaa hakutoimintoa tai selata paivamaaran mukaan.
3. Napsauta artikkelin otsikkoa avataksesi muokkausnakyma.
4. Tee haluamasi muutokset.
5. Napsauta **Save**.

HUOMIO: Muutokset nakyvataan sivustolla valittomasti tallennuksen jalkeen. Tarkista aina muutosten oikeellisuus ennen tallennusta.

### 3.6 Artikkelin poistaminen tai piilottaminen

**Artikkelin piilottaminen (suositeltu):**

1. Avaa artikkeli muokattavaksi.
2. Vaihda tila **Draft**-tilaan kytkimesta.
3. Tallenna. Artikkeli sailyy jarjestelmassa mutta ei nay julkisella sivustolla.

**Artikkelin poistaminen pysyvasti:**

1. Siirry **Collections** > **Articles**.
2. Valitse poistettava artikkeli valintaruudusta.
3. Napsauta **Actions** > **Delete**.
4. Vahvista poistaminen.

HUOMIO: Poistettua artikkelia ei voi palauttaa. Kaytta mieluummin Draft-tilaa, jos et ole varma poiston pysyvyydesta.

---

## 4. Uutisten hallinta

### 4.1 Uuden uutisen lisaaminen

Apprix-sivustolla uutiset ja blogiartikkelit kaytetaan samaa **Articles**-kokoelmaa. Ero niiden valilla tehdaan tagien avulla.

Uuden uutisen luominen:

1. Luo uusi artikkeli (ks. luku 3.1).
2. Tayta kentat normaalisti.
3. Lisaa **Tags**-kenttaan tagi **"uutiset"**.
4. Tallenna ja julkaise.

### 4.2 Uutisen kentat ja rakenne

Uutisten kentat ovat samat kuin blogijulkaisuissa (ks. luku 3.2). Kaikki artikkelit kayttavat samaa blueprint-maarittelya.

### 4.3 Ero blogin ja uutisten valilla

| Ominaisuus | Blogi | Uutinen |
|-----------|-------|---------|
| Kokoelma | Articles | Articles |
| Erottava tekija | Tagit kuten "elearning", "builder" | Tagi "uutiset" |
| Nakyma sivustolla | Ajankohtaista-sivu | Ajankohtaista-sivu |
| Rakenne | Sama | Sama |

VINKKI: Kayta johdonmukaista tagien kayttoa. Taman avulla artikkelit voidaan suodattaa ja ryhmitella sivustolla oikein.

**Kaytossa olevia tageja:**

- blogi
- uutiset
- elearning
- tyoturvallisuus
- sisallontuotanto
- hrd
- koulutustyokalu
- verkkoperehdytys
- direktiivit
- builder
- mycourses
- checklist-engine
- perehdytys
- oppiminen
- hr
- digitaalinen-koulutus

---

## 5. Asiakastarinat

### 5.1 Asiakastarinoiden hallinnointi

Asiakastarinat (referenssit) ovat osa **Pages**-kokoelmaa. Ne sijaitsevat "Asiakkaat & caset" -sivulla, joka on rakennettu Page Builder -tyokalulla.

Asiakastarinat eivat ole omassa kokoelmassaan, vaan ne on toteutettu sivun page_builder-kentan sisalla kayttaen erilaisia osioita, kuten:

- **Testimonials** — asiakkaiden lainaukset ja palautteet
- **Logo Carousel** — asiakaslogojen karuselli
- **Feature Row** — kuva-teksti-osiot asiakastapauksille
- **Stats** — avainluvut ja tilastot

### 5.2 Asiakastarinan muokkaaminen

1. Siirry **Collections** > **Pages**.
2. Etsi sivu nimelta **"Asiakkaat & caset"** (referenssit).
3. Avaa sivu muokattavaksi.
4. Selaa page_builder-kentan osioita ja muokkaa haluttua sisaltoa.
5. Tallenna muutokset.

### 5.3 Testimonials-osion muokkaaminen

Asiakaspalautteet (Testimonials) sisaltavat seuraavat kentat:

| Kentta | Kuvaus |
|--------|--------|
| Eyebrow | Pieni ylateksti osion ylapuolella |
| Title | Osion otsikko |
| Intro | Johdantoteksti |
| Clients | Asiakaslogot |
| Quotes | Lainaukset (teksti ja kirjoittajan nimi) |

Uuden lainauksen lisaaminen:

1. Avaa Testimonials-osio page_builderissa.
2. Napsauta **Quotes**-kohdan **Add** -painiketta.
3. Tayta lainauksen teksti (**Text**) ja kirjoittajan nimi (**Author**).
4. Tallenna sivu.

---

## 6. Sivujen sisallon muokkaaminen

### 6.1 Sivuston sivurakenne

Sivusto koostuu seuraavista paasivuista:

| Sivu | URL | Kuvaus |
|------|-----|--------|
| Koti (etusivu) | / | Paaobjektisivu hero-osiolla, logokarusellilla, ominaisuuskorteilla ja CTA:lla |
| Palvelut & tuotteet | /palvelut | Tuotteiden ja palveluiden yleissivu |
| Apprix Builder | /palvelut/builder | Builder-sisallontuotantotyokalun tuotesivu |
| MyCourses | /palvelut/mycourses | MyCourses LMS -tuotesivu |
| Checklist Engine | /palvelut/checklist-engine | Checklist Engine -tuotesivu |
| Koemoottori | /palvelut/koemoottori | Koemoottori-tuotesivu |
| Sisallontuotanto | /palvelut/sisallontuotanto | Sisallontuotantopalvelun sivu |
| Asiantuntijapalvelut | /palvelut/asiantuntijapalvelut | Asiantuntijapalveluiden sivu |
| Asiakkaat & caset | /referenssit | Asiakasreferenssit ja asiakastarinat |
| Yritys | /yritys | Apprix Oy:n esittelysivu |
| Ajankohtaista | /ajankohtaista | Blogiartikkelien ja uutisten listaussivu |
| Tietosuoja | /tietosuoja | Tietosuojaseloste |
| Tietoturva | /tietoturva | Tietoturvakaytannot |
| 404-sivu | (automaattinen) | Virhesivu puuttuville sivuille |

### 6.2 Page Builder — sivujen muokkaaminen

Sivujen sisalto rakennetaan **Page Builder** -tyokalulla. Se on modulaarinen jarjestelma, jossa sivu koostuu erilaisista uudelleenkaytettavista osioista (sections/blocks).

**Sivun muokkaaminen:**

1. Siirry **Collections** > **Pages**.
2. Napsauta muokattavan sivun otsikkoa.
3. Sivun **page_builder**-kentta sisaltaa kaikki sivun osiot.
4. Muokkaa olemassa olevia osioita tai lisaa uusia.
5. Tallenna muutokset.

**Kaytettavissa olevat Page Builder -osiot:**

A. Kuva ja teksti:

| Osio | Kuvaus |
|------|--------|
| Article | Pitkamuotoinen artikkelisisalto medialla (kuvat, videot, lainaukset, taulukot) |

B. Interaktiiviset osiot:

| Osio | Kuvaus |
|------|--------|
| Form | Lomakeosio — valitse ja nayta lomake sivulla |
| Contact Wizard | Monivaiheinen yhteydenottolomake (premium-versio) |
| Cards | Linkitettavat sisaltokortit tekstilla |
| FAQ | Avattava kysymys-vastaus-akkordeon (sisaltaa schema.org JSON-LD -merkinnon hakukoneille) |

C. Markkinointiosiot:

| Osio | Kuvaus |
|------|--------|
| Hero | Sivun paahero-osio otsikolla, tekstilla, painikkeilla ja kuvalla |
| Product Hero | Tuotesivujen tumma hero-osio tilastoilla ja luottamuslauseella |
| Logo Carousel | Animoitu asiakaslogojen karuselli |
| Feature Row | Teksti + kuva -osio (kaannettava puoli) |
| Feature Grid | Numeroitu ominaisuuslista tuotesivuille |
| Feature Cards | Kompakti 2x2 ikonikorttien ruudukko |
| Articles Index | Viimeisimpien artikkelien listaus haulla ja suodatuksella |
| CTA | Toimintakehotusosio painikkeella |
| Team Cards | Tiimin jasen -kortit kuvilla ja yhteystiedoilla |
| Stats | Avainlukumittarit |
| Link Cards | Tutkittavat linkkikortit |
| Testimonials | Asiakaspalautekortit lainauksilla |

**Uuden osion lisaaminen Page Builderiin:**

1. Selaa page_builder-kentan loppuun.
2. Napsauta **Add Set** -painiketta.
3. Valitse haluttu osiotyyppi listasta.
4. Tayta osion kentat.
5. Voit jarjestaa osioita raahaamalla niita ylospain tai alaspain.
6. Tallenna sivu.

**Osion poistaminen tai piilottaminen:**

- **Piilottaminen**: Napsauta osion oikeassa reunassa olevaa kolmen pisteen valikkoa ja valitse **Disable**. Osio sailyy mutta ei nay sivustolla.
- **Poistaminen**: Napsauta kolmen pisteen valikkoa ja valitse **Delete**.

### 6.3 Etusivun sisaltoalueet

Etusivu (Koti) on rakennettu seuraavista Page Builder -osioista:

1. **Hero** — paaotsikko, teksti, painikkeet ("Pyydeta demo", "Katso palvelut") ja kuva
2. **Logo Carousel** — asiakaslogojen karuselli otsikolla "Luotettu osaamisen kehittamisen kumppani"
3. **Feature Cards** — "Miksi Apprix" -osio ikonikorteilla
4. **Feature Row** -osiot — tuotteiden esittelyosiot kuva-teksti-yhdistelmilla
5. **Stats** — avainluvut (esim. koulutusten maara, suoritukset vuodessa)
6. **Testimonials** — asiakaspalautteita
7. **CTA** — toimintakehotus ("Pyydeta demo" tai vastaava)

VINKKI: Etusivun muokkaaminen on helpointa avaamalla kyseinen osio ja muokkaamalla vain tarvittavia kenttia. Osioiden jarjestysta voi muuttaa raahaamalla.

### 6.4 Globals — yhteiset tiedot

Globals-osio sisaltaa sivuston yleiset tiedot, jotka nakyvataan useilla sivuilla.

**Configuration-globaali sisaltaa:**

| Kentta | Kuvaus |
|--------|--------|
| Error 404 Entry | 404-virhesivun maarittely |
| Copyright Name | Tekijanoikeusteksti (Apprix Oy) |
| Copyright Since | Tekijanoikeusvuosi (2003) |
| Privacy Statement | Tietosuojaselosteen tyyppi ja linkki |
| Cookie Notice | Evastehuomautuksen tyyppi ja linkki |
| Footer Description | Alatunnisteen kuvausteksti |
| Footer Contact Title | Alatunnisteen yhteystietojen otsikko |
| Footer Contacts | Yhteyshenkiloiden nimet, puhelinnumerot ja sahkopostit |
| Footer Email | Yleinen sahkopostiosoite |
| Footer About Title | "Lisaa Apprixista" -osion otsikko |

**Alatunnisteen yhteystietojen paivittaminen:**

1. Siirry **Globals** > **Configuration**.
2. Selaa kohtaan **Footer Contacts**.
3. Muokkaa olemassa olevia tietoja tai lisaa uusi yhteystieto **Add Row** -painikkeella.
4. Tayta kentät: Name (nimi), Phone (puhelin), Email (sahkoposti).
5. Tallenna.

**SEO-globaali** sisaltaa sivuston oletusasetukset hakukoneoptimointiin, kuten:
- Sivuston oletus-metakuvaukset
- JSON-LD (Knowledge Graph) -asetukset
- Sosiaalisen median jakoasetukset
- Sivukartta-asetukset
- Analytiikka- ja seurantakoodit

**Social Media -globaali** sisaltaa sosiaalisen median tilit:
- LinkedIn, Facebook, Instagram, YouTube jne.
- Uuden tilin lisaaminen: napsauta **Add Account** ja valitse alusta.

---

## 7. Navigaatio

### 7.1 Paanavigaation rakenne

Sivuston paanavigaatio on konfiguroitu **Main**-navigaatiossa. Se tukee enintaan **kahta tasoa** (max_depth: 2).

Nykyinen paanavigaation rakenne:

```
Palvelut & tuotteet
  +-- Builder
  +-- MyCourses
  +-- Checklist Engine
  +-- Koemoottori
  +-- Sisallontuotanto
  +-- Asiantuntijapalvelut
Asiakkaat & caset
Yritys
Ajankohtaista
```

**Paanavigaation muokkaaminen:**

1. Siirry **Navigation** > **Main**.
2. Naet navigaatiopuun, jossa kohteet ovat raahattavissa.
3. **Kohteen lisaaminen**: Napsauta **Add Nav Item** ja valitse sivu Pages-kokoelmasta.
4. **Alasivun lisaaminen**: Raahaa kohde toisen kohteen alle alatason luomiseksi.
5. **Kohteen poistaminen**: Napsauta kohdetta ja valitse **Remove**.
6. **Jarjestyksen muuttaminen**: Raahaa kohteita haluttuun jarjestykseen.
7. Tallenna muutokset.

HUOMIO: Paanavigaatio tukee korkeintaan kahta tasoa. Kolmannen tason alasivuja ei voi lisata navigaatioon.

### 7.2 Alatunnisteen navigaatio

Alatunnisteen (footer) navigaatio on konfiguroitu **Footer**-navigaatiossa.

Nykyinen alatunnisteen navigaatio:

```
Yritys
Asiakkaat & caset
Tietosuoja
Tietoturva
```

Alatunnisteen navigaation muokkaaminen toimii samalla tavalla kuin paanavigaatio (ks. kohta 7.1).

### 7.3 Kielinavigaation yllapito

Kieliversiot (suomi, englanti, ruotsi) nakyvataan sivuston ylaosassa automaattisesti. Kielinavigaation yllapito ei vaadi erillistä toimenpidetta — se perustuu sivuston monikielisyyskonfiguraatioon (ks. luku 8).

Jokaisella kielella on oma navigaatiopuunsa:
- **default** — suomenkielinen navigaatio
- **en** — englanninkielinen navigaatio
- **sv** — ruotsinkielinen navigaatio

Kun muokkaat navigaatiota, varmista etta vaihdat oikean kieliversion valitsemalla oikean siten ylareunasta.

---

## 8. Monikielisyys

Sivusto on konfiguroitu kolmelle kielelle:

| Koodi | Kieli | Kuvaus |
|-------|-------|--------|
| default | Suomi (fi) | Paakieli — kaikki sisalto luodaan ensin suomeksi |
| en | Englanti | Englanninkielinen versio |
| sv | Ruotsi | Ruotsinkielinen versio |

### 8.1 Kuinka sisalto kaannetaan uudelle kielelle

**Sivun kaantaminen:**

1. Siirry **Collections** > **Pages**.
2. Avaa kaannettava sivu (suomenkielinen versio).
3. Oikeassa ylareunassa nakyy kielivalitsin. Napsauta haluamaasi kielta (esim. **en**).
4. Jos kaannosta ei ole viela olemassa, Statamic luo uuden version sivusta.
5. Kaanna kentat (otsikko, sisalto jne.) kohdekielelle.
6. Tallenna.

**Artikkelin kaantaminen:**

1. Siirry **Collections** > **Articles**.
2. Avaa artikkeli.
3. Kayta kielivalitsinta oikeassa ylareunassa.
4. Kaanna haluamasi kentat.
5. Tallenna.

HUOMIO: Kaikki kentat eivat ole kaannettavissa (localizable). Esimerkiksi Page Builder -kentta (page_builder) ei ole oletuksena lokalisoitava, jolloin kaikki kieliversiot jakavat saman sisaltorakenteen. Artikkeleissa useimmat kentat ovat kaannettavissa.

### 8.2 Olemassa olevan kaannoksen paivittaminen

1. Siirry kyseiseen kokoelmaan (Pages tai Articles).
2. Vaihda oikeaan kieliversioon kielivalitsimella.
3. Muokkaa tarvittavia kenttia.
4. Tallenna.

### 8.3 Mita tapahtuu jos kaannos puuttuu

Jos tietylle sivulle tai artikkelille ei ole kaannosta jollakin kielella:

- Sivu ei nay kyseisella kielella navigaatiossa.
- Jos kayttaja yrittaa avata puuttuvan kaannoksen suoralla URL-osoitteella, han nakee 404-virhesivun.

VINKKI: Priorisoi aina suomenkielisen sisallon luominen ensin. Kaannokset voi lisata myohemmin.

**Globals-kaannosten hallinta:**

Myos globaalit asetukset (Configuration, SEO) ovat kaytettavissa kielikohtaisesti. Vaihda kieliversio globaalin muokkausnakyma ylareunassa.

---

## 9. Assets — kuvat ja tiedostot

### 9.1 Assets-sailiot

Sivustolla on kaytossa seuraavat assets-sailiot (containers):

| Sailio | Kuvaus | Kayttotarkoitus |
|--------|--------|----------------|
| Images | Kuvat | Sivuston yleiset kuvat, herokuvat, taustakuvat |
| Files | Tiedostot | Artikkelien kuvat, PDF-tiedostot, muut dokumentit |
| Favicons | Faviconit | Selaimen kuvakkeet (tekniset) |
| Social Images | Sosiaalisen median kuvat | Automaattisesti generoitavat jakokuvat (tekniset) |

### 9.2 Kuvien lisaaminen Assets-kirjastoon

1. Siirry **Assets** vasemmasta sivupalkista.
2. Valitse oikea sailio (**Images** tai **Files**).
3. Napsauta **Upload** -painiketta.
4. Valitse ladattavat tiedostot tietokoneeltasi.
5. Odota latauksen valmistumista.

Voit myos luoda kansioita tiedostojen jarjestelyyn:
1. Napsauta **Create Folder** -painiketta.
2. Anna kansiolle kuvaava nimi.
3. Lataa tiedostot kansioon.

### 9.3 Suositellut kuvaformaatit ja -koot

| Kayttotarkoitus | Suositeltu koko | Formaatti |
|----------------|----------------|-----------|
| Hero-kuvat | 1920 x 1080 px | JPG, WebP |
| Artikkelin kansikuva | 1200 x 630 px | JPG, WebP |
| Asiakaslogot | 200 x 100 px (lapinakyva tausta) | PNG, SVG |
| Tiimikuvat | 400 x 400 px (neliopohjainen) | JPG, WebP |
| Open Graph (sosiaalinen media) | 1200 x 630 px | JPG, PNG |

VINKKI: Optimoi kuvat ennen lataamista. Kaytta esimerkiksi TinyPNG- tai Squoosh-palvelua kuvakokojen pienentamiseen ilman nay:kyvaa laadun heikkenemista.

HUOMIO: Liian suuret kuvatiedostot (yli 2 Mt) hidastavat sivuston latautumista. Pyri pitamaan kuvatiedostot alle 500 kt kokoisina.

### 9.4 Kuvien nimeaminen ja hakemistorakenne

**Nimeamiskaytannot:**

- Kaytta kuvaavia, pienikokoisilla nimilla: `hero-builder-tuotesivu.jpg`
- Valta skandinaavisia merkkeja (a, o, a) tiedostonimissa
- Kaytta tavuviivaa sanojen valissa: `asiakastarina-finavia.jpg`
- Valta valilyonteja tiedostonimissa

**Hakemistorakenne:**

- **Images**-sailio: sivuston yleiset kuvat (logot, herot, taustakuvat)
- **Files**-sailio: artikkeleihin liittyvat kuvat ja PDF-tiedostot

### 9.5 Kuvien alt-tekstit

Jokaiselle kuvalle tulee maarittaa alt-teksti (vaihtoehtoinen teksti):

1. Napsauta kuvaa Assets-kirjastossa.
2. Tayta **Alt Text** -kentta kuvaavalla tekstilla.
3. Jos kuva on puhtaasti koristeellinen (ei valita tietoa), voit merkita sen **Exempt from alt** -kytkimella.
4. Tallenna.

HUOMIO: Alt-tekstit ovat pakollisia saavutettavuuslainsaadannon (EU:n saavutettavuusdirektiivi) noudattamiseksi.

### 9.6 Vanhojen kuvien poistaminen

1. Siirry **Assets**-osioon.
2. Etsi poistettava kuva.
3. Valitse kuva ja napsauta **Delete**.
4. Vahvista poistaminen.

HUOMIO: Varmista aina ennen poistamista, ettei kuva ole kaytossa millaan sivulla tai artikkelissa. Puuttuva kuva aiheuttaa rikkinaisen kuvan sivustolla.

---

## 10. Yhteydenottolomake

### 10.1 Lomakkeen kuvaus

Sivustolla on kaytossa monivaiheinen **Contact Wizard** -yhteydenottolomake. Lomake on konfiguroitu **contact**-nimisena lomakkeena.

Lomake koostuu useista vaiheista:

| Vaihe | Sisalto |
|-------|---------|
| Vaihe 1 | Mita etsitte? (vaihtoehdot: oppimisymparisto, sisallontuotantotyokalu, raataloity koulutus, valmiskoulutus) |
| Vaihe 2 | Kayttotarkoitus (sisainen, ulkoinen, molemmat) |
| Vaihe 3 | Toimiala ja lisatiedot |
| Vaihe 4 | Yhteystiedot (nimi, yritys, sahkoposti, puhelin, viesti) |

Lomake sisaltaa roskapostisuodattimen (honeypot-kentta: "fax").

### 10.2 Lomakevastausten tarkastelu

1. Siirry **Forms** > **Contact** vasemmasta sivupalkista.
2. Naet listan kaikista vastauksista aikajärjestyksessa.
3. Napsauta yksittaista vastausta nahdaksesi kaikki taytot.

**Sahkopostiilmoitukset:**

Lomake lahettaa automaattisesti kaksi sahkopostia:

1. **Omistajailmoitus** — lahetetaan osoitteeseen, joka on maaritelty lomakkeen asetuksissa (info@site.com)
2. **Lahettajavahvistus** — lahetetaan lomakkeen tayttajalle

HUOMIO: Tarkista saannollisesti lomakevastaukset hallintapaneelissa. Sahkoposti-ilmoitukset voivat joskus paatya roskapostikansioon.

### 10.3 Lomakevastausten hallinta

- **Vastausten vienti**: Voit vieda vastaukset CSV-muodossa napsauttamalla **Export** -painiketta vastauslistassa.
- **Vastauksen poistaminen**: Valitse vastaus ja napsauta **Delete**.

---

## 11. Kayttajien hallinta

### 11.1 Uuden kayttajan luominen

1. Siirry **Users** vasemmasta sivupalkista.
2. Napsauta **Create User**.
3. Tayta vaadittavat kentat:
   - **Name** — kayttajan nimi
   - **Email** — sahkopostiosoite (kaytetaan myos kirjautumiseen)
   - **Password** — salasana (vahintaan 8 merkkia suositeltava)
4. Maarita kayttajalle rooli ja ryhma (ks. kohta 11.2).
5. Halutessasi lisaa kayttajan avatar (profiilikuva) Images-kirjastosta.
6. Tallenna.

### 11.2 Roolien ja oikeuksien maarittaminen

Kayttajalle voidaan maarittaa:

- **Roles** — roolit maarittavat, mita toimintoja kayttaja voi tehda (esim. sisallon muokkaus, kayttajien hallinta)
- **Groups** — ryhmat kokoavat kayttajia yhteen ja voivat periya rooleja

Roolien ja ryhmien maarittaminen:

1. Avaa kayttajan profiili **Users**-osiossa.
2. Valitse sopivat roolit **Roles**-kentasta.
3. Valitse sopivat ryhmat **Groups**-kentasta.
4. Tallenna.

HUOMIO: Ole varovainen Super Admin -roolin myontamisessa. Super Adminilla on rajoittamaton paasy kaikkiin hallintapaneelin toimintoihin.

VINKKI: Blogikirjoittajille riittaa tavallisesti rooli, joka sallii artikkelien luomisen ja muokkaamisen seka kuvien lataamisen.

### 11.3 Kayttajan poistaminen tai deaktivointi

**Kayttajan poistaminen:**

1. Siirry **Users**-osioon.
2. Valitse poistettava kayttaja.
3. Napsauta **Actions** > **Delete**.
4. Vahvista poistaminen.

HUOMIO: Poistettua kayttajaa ei voi palauttaa. Kayttajan luoma sisalto sailyy sivustolla, mutta kayttaja itse ei voi enaa kirjautua.

---

## 12. Yleiset yllapitotehtavat

### 12.1 Valimuistin tyhjentaminen

Statamic kayttaa valimuistia sivuston suorituskyvyn parantamiseksi. Joskus valimuisti on tyhjennettava, jotta muutokset nakyvataan oikein.

**Valimuistin tyhjentaminen hallintapaneelista:**

1. Siirry hallintapaneelin **Utilities**-osioon (jos kaytettavissa).
2. Valitse **Clear Cache**.
3. Napsauta **Clear**.

**Valimuistin tyhjentaminen komentorivilta (tekniset yllapitajat):**

1. Kirjaudu palvelimelle SSH-yhteylla.
2. Siirry sivuston juurikansioon.
3. Suorita komento:
   ```
   php artisan cache:clear
   php artisan statamic:stache:warm
   ```

VINKKI: Tyhjenna valimuisti aina suurten sisaltopaivitysten jalkeen tai jos huomaat, etta muutokset eivat nay sivustolla.

### 12.2 Hakuindeksin paivitys

Sivuston haku kayttaa paikallista hakuindeksia, joka kattaa sivut ja artikkelit.

**Hakuindeksit:**

| Indeksi | Sisalto | Kentát |
|---------|---------|--------|
| default | Kaikki sisalto | title, page_builder, intro, article |
| articles | Artikkelit | title, intro, article |

**Hakuindeksin paivittaminen komentorivilta:**

```
php artisan statamic:search:update
```

Tama komento paivittaa molemmat indeksit. Suorita komento, jos:
- Uudet artikkelit eivat loydy haulla
- Sivuston hakutulokset nayttavat vanhentuneita tietoja
- Olet tehnyt suuria sisaltopaivityksia

### 12.3 Vianmaaritys — mita tehda jos jokin menee pieleen

**Ongelma: Muutokset eivat nay sivustolla**

1. Varmista, etta olet tallentanut muutokset hallintapaneelissa.
2. Tarkista, etta sisalto on **Published**-tilassa (ei Draft).
3. Tyhjenna selaimen valimuisti (Ctrl+Shift+R / Cmd+Shift+R).
4. Tyhjenna Statamicin valimuisti (ks. kohta 12.1).

**Ongelma: Kuva ei nay sivustolla**

1. Tarkista, etta kuva on ladattu Assets-kirjastoon.
2. Varmista, etta kuva on valittu oikeassa kentassa.
3. Tarkista kuvan tiedostomuoto (JPG, PNG, WebP tuettuja).
4. Varmista, ettei kuvatiedostoa ole poistettu Assets-kirjastosta.

**Ongelma: Lomakevastauksia ei tule**

1. Tarkista sahkoposti-ilmoitusten asetukset (**Forms** > **Contact** > asetukset).
2. Tarkista roskapostikansio.
3. Testaa lomake itse tayyttamalla se sivustolla.
4. Ota yhteytta tekniseen yllapitoon, jos ongelma jatkuu.

**Ongelma: Kayttaja ei pysty kirjautumaan**

1. Varmista, etta sahkopostiosoite on kirjoitettu oikein.
2. Kaytta "Forgot password" -toimintoa salasanan nollaamiseen.
3. Tarkista, ettei kayttajatilia ole poistettu.
4. Ota yhteytta paakayttajaan.

**Ongelma: Sivusto nayttaa virhesivun (500-virhe)**

1. Tama on tekninen virhe. Ala yrita korjata sita itse.
2. Ota valittomasti yhteytta tekniseen yllapitoon.
3. Ilmoita: mika sivu aiheutti virheen, mita olit tekemassa, ja milloin virhe ilmeni.

### 12.4 Yhteystiedot teknisiin ongelmiin

Teknisissa ongelmissa ota yhteytta sivuston tekniseen yllapitoon:

- Sivuston kehitys ja tekninen tuki: ota yhteytta yrityksen IT-vastaavaan tai sivuston kehittajaan
- Kiireelliset ongelmat (sivusto alhaalla, tietoturvaongelma): ilmoita valittomasti esimiehellesi ja tekniselle yllapidolle

---

## 13. Pikaluukut ja muistilista

### 13.1 Tarkeimmat URL-osoitteet

| Osoite | Kuvaus |
|--------|--------|
| https://www2.apprix.fi/ | Julkinen sivusto (suomi) |
| https://www2.apprix.fi/en/ | Julkinen sivusto (englanti) |
| https://www2.apprix.fi/sv/ | Julkinen sivusto (ruotsi) |
| https://www2.apprix.fi/cp | Statamic-hallintapaneeli (Control Panel) |
| https://www2.apprix.fi/cp/collections/articles | Artikkelien hallinta |
| https://www2.apprix.fi/cp/collections/pages | Sivujen hallinta |
| https://www2.apprix.fi/cp/globals | Yleiset asetukset |
| https://www2.apprix.fi/cp/navigation/main | Paanavigaation hallinta |
| https://www2.apprix.fi/cp/assets/browse/images | Kuvien hallinta |
| https://www2.apprix.fi/cp/forms/contact | Yhteydenottolomakkeen vastaukset |

### 13.2 Tiivistelma tarkeimmista toiminnoista

| Toiminto | Polku hallintapaneelissa |
|----------|------------------------|
| Uusi artikkeli | Collections > Articles > Create Entry |
| Muokkaa sivua | Collections > Pages > (valitse sivu) |
| Lataa kuva | Assets > Images tai Files > Upload |
| Muokkaa navigaatiota | Navigation > Main tai Footer |
| Muokkaa alatunnistetta | Globals > Configuration > Footer |
| Muokkaa SEO-asetuksia | Globals > SEO |
| Tarkista lomakevastaukset | Forms > Contact |
| Lisaa kayttaja | Users > Create User |
| Lisaa kaannos | Avaa sisalto > Vaihda kieli ylareunasta |

### 13.3 Usein kysytyt kysymykset

**K: Kuinka nopeasti muutokset nakyvataan sivustolla?**
V: Muutokset nakyvataan yleensa valittomasti tallennuksen jalkeen. Jos muutokset eivat nay, tyhjenna selaimen valimuisti (Ctrl+Shift+R) tai Statamicin valimuisti.

**K: Voinko peruuttaa tekemiani muutoksia?**
V: Statamic tallentaa sisallon Git-versionhallintaan, joten muutokset voidaan tarvittaessa palauttaa teknisen yllapidon toimesta. Hallintapaneelissa ei kuitenkaan ole sisaanrakennettua "kumoa"-toimintoa, joten ole huolellinen muutoksia tehdessasi.

**K: Miten lisaan uuden sivun sivustolle?**
V: Siirry Collections > Pages > Create Entry. Tayta otsikko, lisaa Page Builder -osioita ja tallenna. Muista lisata sivu myos navigaatioon (ks. luku 7).

**K: Miten vaihdan alatunnisteessa nakyvia yhteystietoja?**
V: Siirry Globals > Configuration ja muokkaa Footer Contacts -kohtaa.

**K: Kuinka monta kieliversiota sivustolla on?**
V: Kolme: suomi (paakieli), englanti ja ruotsi.

**K: Miten lisaan uuden tagin artikkeliin?**
V: Avaa artikkeli muokattavaksi, siirry Tags-kenttaan sivupalkissa ja kirjoita uuden tagin nimi. Statamic luo tagin automaattisesti.

**K: Miten muutan sivun URL-osoitetta?**
V: Muokkaa sivun **Slug**-kenttaa. HUOMIO: URL-osoitteen muuttaminen rikkoo vanhat linkit. Harkitse uudelleenohjauksen (redirect) asettamista vanhasta osoitteesta uuteen.

**K: Missa lomakkeen vastaukset sailytetaan?**
V: Lomakevastaukset tallentuvat Statamicin tietokantaan ja ovat luettavissa hallintapaneelin Forms > Contact -osiossa. Lisäksi vastauksista lahetetaan sahkoposti-ilmoitus.

**K: Miten lisaan uuden sosiaalisen median tilin?**
V: Siirry Globals > Social Media, napsauta "Add Account" ja valitse haluamasi alusta (LinkedIn, Facebook, Instagram jne.).

---

*Taman dokumentaation on laatinut tekninen dokumentaatioasiantuntija Apprix Oy:n henkilokunnan kayttoon. Dokumentaatio perustuu sivuston tekniseen rakenteeseen ja Statamic CMS:n ominaisuuksiin.*

*Paivita tata dokumentaatiota aina, kun sivuston rakenne tai toiminnallisuus muuttuu merkittavasti.*
