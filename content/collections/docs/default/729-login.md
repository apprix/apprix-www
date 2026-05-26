---
id: 36542d2d-9349-4b0f-bd59-5a8d9662d7e4
blueprint: doc
title: '7.29 Login'
---
<p class="p2"><b>Login</b>-elementti räätälöidään jokaiselle asiakkaalle erikseen. Joskus Login-elementit sisältävät teknisiä integraatioita esimerkiksi muihin ympäristöihin, mutta useimmiten elementti kerää lisätietoa suorittajista tilastointia varten. Käyttäjätunnistus ja kirjautuminen kurssimoduuliin määritetään yleensä erikseen moduulin asetuksissa (esim. SSO, IP Guard, sähköpostirekisteröinti).</p>
<p class="p2">Huomaathan, että suorittaja on tunnistettava, jotta hänestä voidaan kerätä yksilöitävää tilastotietoa. Tyypillisimmin tämä saavutetaan moduulikohtaisesti päälle kytkettävällä asetuksella, kuten <a href="#sso"><b>SSO:lla</b></a>. Jos Login-elementti on räätälöity vaatimaan yksilöllistä tunnistetta (esim. sähköpostiosoite, verotunnus), sitä mahdollisesti voidaan käyttää myös suorittajan tunnistamistarkoitukseen. Lisätietoa organisaationne räätälöidystä Login-elementistä voit saada tarkastelemalla elementtiä sen editointinäkymässä.</p>
<strong>Vinkki:</strong> <strong>Form</strong>‑elementti on parannettu versio Login‑elementistä.
Saat lisätietoa Form‑elementistä tästä linkistä:
<a href="/help/754-form">7.54 Form</a>

<h6 class="p1">Klikkaa kuvia suurentaaksesi niitä.</h6>

<figure class="doc-image"><img src="/files/docs/2021/08/Login_FI.jpg" alt="" loading="lazy"></figure>

<h5 class="p1 fusion-responsive-typography-calculated" data-fontsize="12" data-lineheight="18px">Elementin asetukset editointinäkymässä</h5>

<figure class="doc-image"><img src="/files/docs/2021/08/Login_Edit_FI.gif" alt="" loading="lazy"></figure>

<h5>Myös ryhmäkirjautumiselle on oma Login-elementtinsä.</h5>

<figure class="doc-image"><img src="/files/docs/2021/08/Group_Login_FI.jpg" alt="" loading="lazy"></figure>