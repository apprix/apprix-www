---
id: e85ddbfa-4a53-4098-84f1-42de0faab850
blueprint: doc
title: '8.2 User Authentication (käyttäjätodennus)'
---
<p class="p1">Tästä osiosta löydät jo toteutetut, Builderiin integroidut käyttäjätodennustavat kurssien suorittajien tunnistamiseen.</p>
<p class="p1">Kysy mahdollisesta toteutuksesta omaan Builder-asiakasympäristöönne <strong><a href="#yhteystiedot">Apprix-yhteyshenkilöltäsi/asiakkuusvastaavaltasi</a></strong>.</p>
<b>User Authentication</b> -asetuksissa voit valita, millä käyttäjätodennustavalla suorittaja tunnistetaan hänen tullessa moduuliin.

Alla on luettelo mahdollisista tunnistustavoista:

<b>Ei käyttäjän tunnistusta</b>
<ul>
 <li aria-level="1">Mahdollistaa suorittajien osallistumisen kurssille kirjautumatta sisään millään Builderin kirjautumistavalla.</li>
 <li aria-level="1">Kaikki moduulin linkin saaneet voivat suorittaa koulutuksen.</li>
 <li aria-level="1">Tämä menetelmä on useimmiten käytetty, kun moduuli sisältää sisäänkirjautumiselementin (Login-elementti) tai kun koulutus voidaan suorittaa nimettömästi eikä se sisällä arkaluonteisia tietoja.</li>
</ul>
<b>Email registration (aiemmin "Consumer Login")</b>
<ul>
 <li aria-level="1">Mahdollistaa suorittajien rekisteröitymisen Builderiin sekä käyttäjätunnuksen ja salasanan luomisen.</li>
 <li aria-level="1">Samaa käyttäjätunnusta ja salasanaa voidaan käyttää kaikissa moduuleissa (sähköpostirekisteröinnin ollessa päällä) rekisteröitymisen jälkeen.</li>
 <li aria-level="1">Edellyttää puhelimen tai voimassa olevan henkilökohtaisen sähköpostiosoitteen käyttöä.</li>
 <li aria-level="1">Käytetään useimmiten ulkopuolisille suorittajille ja työntekijöille.</li>
</ul>
<b>MyCourses LMS Sign-On</b>
<ul>
 <li aria-level="1">Mahdollistaa pääsyn koulutukseen Apprix MyCourses LMS:stä.</li>
 <li aria-level="1">Edellyttää, että suorittaja kirjautuu ensin MyCourses-palveluun organisaatiolle määritetyillä sallituilla kirjautumistavoilla.</li>
 <li aria-level="1">Käytetään, kun moduuli sijoitetaan MyCourse-kurssiin kielimoduulina.</li>
</ul>
<b>Sympa ID check</b>
<ul>
 <li aria-level="1">Suorittajan on syötettävä Sympa-tunnus, paikallistunnus, etunimi ja sukunimi.</li>
 <li aria-level="1">Tunnukset on löydyttävä järjestelmästä ja nimien on vastattava tunnusten tietoja.</li>
</ul>
<b>Flexim tag reader</b>
<ul>
 <li aria-level="1">Suorittajat voivat kirjautua sisään käyttämällä Flexim-tunnistetta tunnisteenlukijassa.</li>
 <li aria-level="1">Jos Flexim-tunnisteenlukijaa ei ole saatavilla, suorittajat voivat kirjautua sisään työntekijätunnuksellaan, etunimellään ja sukunimellään.</li>
 <li aria-level="1">Jos käytät työntekijätunnusta, sen tulee löytyä järjestelmästä ja nimen tulee vastata tunnuksen tietoja.</li>
</ul>
<b>Single Sign-On (SSO)</b>
<ul>
 <li aria-level="1">Single sign-on <b>(SSO)</b> on ominaisuus, jonka avulla monesta Builderin ulkopuolisesta palvelusta on mahdollista kirjautua Builderiin yksittäisen kirjautumisen kautta. Tarkoituksena on välttää useita peräkkäisiä kirjautumisia ja sujuvoittaa loppukäyttäjien sovelluspalveluiden käyttöä.</li>
 <li aria-level="1">Sallii suorittajien kirjautumisen automaattisesti sisään yrityksen tunnuksilla.</li>
 <li aria-level="1">Edellyttää, että suorittajalla on tunnistetiedot sisäisessä järjestelmässä (esim. Active Directory, Google Workspace).</li>
 <li aria-level="1">Käytetään useimmiten sisäisille työntekijöille.</li>
</ul>
<b>Tax number check (vero.fi)</b>
<ul>
 <li aria-level="1">Suorittajan tulee syöttää veronumero, etunimi, sukunimi ja syntymäaika.</li>
 <li aria-level="1">Veronumeron tulee löytyä Suomen julkisesta veronumerorekisteristä. Huomioithan, että kaikki suomalaiset veronumerot eivät ole rekisterissä - henkilön tai työnantajan on lisättävä ne julkiseen rekisteriin.</li>
 <li aria-level="1">Etunimen, sukunimen ja syntymäajan on vastattava veronumeron tietoja. Mahdollisista useista etunimistä tulee kirjoittaa vähintään yksi. Nimissä sallitaan kolme kirjoitusvirhettä.</li>
 <li aria-level="1">Käytetään, kun vaaditaan, että yrityksen työntekijöiden veronumerot ovat julkisessa rekisterissä.</li>
</ul>
<b>IP Guard</b>
<ul>
 <li aria-level="1">Sallii pääsyn vain, jos suorittaja tulee tietystä IP-osoitteesta.</li>
 <li aria-level="1">Käytetään kun organisaatiossa on käytössä VPN. Sallitaan pääsy vain, jos suorittaja on ensin kirjautunut VPN-verkkoon.</li>
 <li aria-level="1">Joissakin tapauksissa käytetään myös rajoittamaan pääsyä vain tiettyyn paikkaan, esim. tehdas- tai toimistorakennukseen. </li>
 <li aria-level="1">Joissakin tapauksissa käytetään myös määrittämään, ohjataanko suorittaja kertakirjautumiseen vai ei. </li>
</ul>

<h6 class="p1">Klikkaa kuvia suurentaaksesi niitä.</h6>

<figure class="doc-image"><img src="https://faq.apprix.fi/wp-content/uploads/2024/04/User-Authentication.png" alt="" loading="lazy"></figure>

<figure class="doc-image"><img src="https://faq.apprix.fi/wp-content/uploads/2024/04/User-authentication-settings.jpg" alt="" loading="lazy"></figure>

<figure class="doc-image"><img src="https://faq.apprix.fi/wp-content/uploads/2022/03/Select_Domains-600x334.png" alt="" loading="lazy"></figure>