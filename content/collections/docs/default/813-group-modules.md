---
id: 30c4e460-0604-444c-92c6-fef1753e5332
blueprint: doc
title: '8.13 Group Modules'
---
Voit lisätä moduulit moduuliryhmään, jotta kurssin osallistujat voivat suorittaa koulutuksen eri kieliversiomoduuleista minkä tahansa. Tämä käytännössä tarkoittaa sitä, että <strong>Nagging</strong> (Participants &amp; Reminders) <strong>asetukset</strong> ovat jaettu samassa moduuliryhmässä olevien moduulien kanssa. Mukaan lukien Nagging asetuksiin lisätyt sähköpostisoitteet ja Nagging muistutusasetukset. Muut asetukset, kuten User authentication ja Expiration asetukset, sekä tilastot ovat edelleen moduulikohtaisia.

<strong>Module Group ja Nagging muokkausohjeet</strong>

Lisää moduuli moduuliryhmään seuraavasti:
<ol>
 <li>Avaa moduuliryhmään lisättävä moduuli <strong>Edit</strong>-tilaan</li>
 <li>Valitse yläratasvalikosta “<strong>Module Groups…</strong>”</li>
 <li>Luo moduulille uusi ryhmä valitsemalla “<strong>Add to new group</strong>” tai lisää moduuli olemassa olevaan ryhmään valitsemalla “<strong>Add to existing group</strong>”</li>
</ol>
Muokkaa <strong>Nagging</strong> (toiselta nimeltään <strong>Participants &amp; Reminders</strong>) asetuksia seuraavasti lisätäksesi tarvittavat sähköpostiosoitteet ja laittaaksesi Nagging automaattimuistutuksen päälle:
<ol>
 <li>Avaa moduuliryhmään lisättävä moduuli <strong>Edit</strong>-tilaan</li>
 <li>Valitse yläratasvalikosta “<strong>Nagging…</strong>”</li>
 <li>Lisää tarvittaessa puuttuvat muistutettavien henkilöiden sähköpostiosoitteet valitsemalla “<strong>Add</strong>…”.</li>
 <li>Syötä tekstikenttään sähköpostiosoitteet eri riveille ja paina “<strong>Add participants</strong>”</li>
 <li>Muokkaa Nagging automaattimuistutusasetuksia painamalla “<strong>Automatic Reminder Settings…</strong>”.</li>
 <li>Laita “<strong>Use automated email reminders</strong>” päälle ja muokkaa tavittaessa muistutusväli tiputusvalikosta “<strong>Send reminders until course completed every</strong>” ja muistutusten maksimilukumäärä tiputusvalikosta “<strong>Max. number of reminders per user</strong>”.</li>
 <li>Syötä sitten sähköpostin aihe “<strong>Subject</strong>” kenttään ja sähköpostiviestin sisältö alempaa isoon tekstikenttään. Lisätietoa sisällön muokkaamisesta ja mm. muuttujien käytöstä löydät kysymysmerkkikuvakkeet takaa. Esimerkiksi kohta <strong>{link}</strong> korvataan moduulin osoitteella. Jos moduuli on linkitetty MyCoursesiin, suosittelemme korvaamaan <strong>{link}</strong> kohdan MyCoursesin kurssilinkillä. Tällaisen kurssilinkin kautta käyttäjä voi itse valita, minkä kieliversioista suorittaa.</li>
</ol>
<strong>Tiedon nälkä? </strong><strong>Tässä on lisää!</strong>

<strong> </strong><strong>Mitä linkkiä Builder koulutuksen suorittaja voi käyttää, kun koulutuksen kieliversioita on useampi?</strong>

Kun kieliversioita on useampi, suosittelemme antamaan suorittajalle sellaisen linkin, jonka kautta hän voi valita kieliversioiden välillä ennen varsinaisen koulutuksen suorittamista. Linkki tulisi johtaa paikkaan, johon kieliversiot on linkitetty. Esimerkiksi linkki Landing Pageen tai MyCourses kurssiin.

Ominaisuuksien, kuten Nagging ja Expiration, muistutusviesteissä on tärkeää käyttää tätä linkkiä, jotta suorittaja löytää paikan, jonka kautta suorittaa koulutuksen.

Kun koulutuksen kieliversiot on linkitetty MyCoursesiin, suosittelemme antamaan suorittajalle MyCourses kurssilinkin. Kun koulutuksen kieliversiot on linkitetty Landing Page moduuliin, suosittelemme antamaan suorittajalle suoran linkin Landing Page moduuliin.

<strong> </strong>

<strong>Mikä ero on MyCourses kurssilla, Landing Page koulutusnappilla ja Builderin Module Groupilla?</strong>

<strong> </strong>MyCourses kurssi, Landing Page koulutusnappi ja Module Group ovat tapoja ryhmittää eri moduulit (esim. kieliversiomoduulit) yhdeksi kokonaisuudeksi.
<ul>
 <li>Kun tällä tavalla linkitetyistä moduuleista on jokin suoritettu, kokonaisuus katsotaan suoritetuksi.</li>
 <li>Kun MyCoursesissa kurssiin jokin linkitetty moduuli on suoritettu, MyCourses kurssikokonaisuus katsotaan suoritetuksi.</li>
 <li>Kun Landing Page koulutusnappiin jokin linkitetty moduuli on suoritettu, koulutusnappi näkyy suoritettuna.</li>
 <li>Kun Module Groupiin kuuluvista moduuleista jokin on suoritettu, Builder ominaisuudet, kuten Nagging, katsovat kokonaisuuden suoritetuksi ja tällöin kokonaisuuden suorittamisesta ei enää muistuteta.</li>
</ul>
<strong>Miten MyCourses kurssilinkit toimivat?</strong>

<strong> </strong>Kun loppukäyttäjä avaa MyCourses kurssilinkin, häntä pyydetään kirjautumaan MyCoursesiin, jos hän ei ole vielä kirjautunut. Sen jälkeen hän näkee MyCourses kurssin kielivalintadialogin, josta hän voi valita kielen, jolla hän suorittaa kurssin.

<strong>Miten lähetetään muistutusviesti MyCourses käyttäjille, jotka eivät ole vielä suorittaneet MyCourses kurssia, jolla on kaksi tai useampi kieliversio?</strong>

MyCourses kurssiin linkitetyt Builder moduulit tulee ryhmittää Module Groups ominaisuudella sekä tälle ryhmälle moduuleita tulee määrittää Nagging muistutusasetukset niin, että muistutusviesti sisältää linkin MyCourses kurssiin.

<h6><strong>Group Modules &amp; MyCourse - esimerkki</strong></h6>

<figure class="doc-image"><img src="/files/docs/2025/02/End-user.png" alt="" loading="lazy"></figure>

<h6> Group Modules &amp; Landing Page - esimerkki</h6>

<figure class="doc-image"><img src="/files/docs/2025/02/Landing-page-for-gropu-modules.png" alt="" loading="lazy"></figure>

<h6>Group Modules - asetukset</h6>

<figure class="doc-image"><img src="/files/docs/2025/02/Module-group-2.png" alt="" loading="lazy"></figure>

<h6> Tässä esimerkkikuva tilanteesta, jossa moduuli on lisätty moduuliryhmään nimeltä “Group modules Euro”.</h6>

<figure class="doc-image"><img src="/files/docs/2025/02/Module-Group-3.png" alt="" loading="lazy"></figure>

<h6>Participants &amp; Reminders - asetukset</h6>

<figure class="doc-image"><img src="/files/docs/2025/02/Participants-and-reminders.png" alt="" loading="lazy"></figure>