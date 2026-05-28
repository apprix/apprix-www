---
id: 36542d2d-9349-4b0f-bd59-5a8d9662d7e4
blueprint: doc
title: '7.29 Login'
seo_noindex: false
seo_nofollow: false
seo_canonical_type: entry
sitemap_change_frequency: weekly
sitemap_priority: 0.5
updated_by: 680e1400-32cd-4415-9b61-d630b47576db
updated_at: 1779937836
---
<p><strong>Login</strong>-elementti räätälöidään jokaiselle asiakkaalle erikseen. Joskus Login-elementit sisältävät teknisiä integraatioita esimerkiksi muihin ympäristöihin, mutta useimmiten elementti kerää lisätietoa suorittajista tilastointia varten. Käyttäjätunnistus ja kirjautuminen kurssimoduuliin määritetään yleensä erikseen moduulin asetuksissa (esim. SSO, IP Guard, sähköpostirekisteröinti).</p><p>Huomaathan, että suorittaja on tunnistettava, jotta hänestä voidaan kerätä yksilöitävää tilastotietoa. Tyypillisimmin tämä saavutetaan moduulikohtaisesti päälle kytkettävällä asetuksella, kuten <a href="/help/82-user-authentication-kayttajatodennus"><strong>SSO:lla</strong></a>. Jos Login-elementti on räätälöity vaatimaan yksilöllistä tunnistetta (esim. sähköpostiosoite, verotunnus), sitä mahdollisesti voidaan käyttää myös suorittajan tunnistamistarkoitukseen. Lisätietoa organisaationne räätälöidystä Login-elementistä voit saada tarkastelemalla elementtiä sen editointinäkymässä.</p><p><strong>Vinkki:</strong> <strong>Form</strong>‑elementti on parannettu versio Login‑elementistä. Saat lisätietoa Form‑elementistä tästä linkistä: <a href="/help/754-form">7.54 Form</a></p><p></p><h3><strong> Elementti julkaisutilassa ( Published mode )</strong></h3><p><img src="statamic://asset::files::docs/2021/08/Login_FI.jpg"></p><h3>Elementin asetukset editointinäkymässä</h3><p><img src="statamic://asset::files::docs/2021/08/Login_Edit_FI.gif"></p><h3>Myös ryhmäkirjautumiselle on oma Login-elementtinsä.</h3><p><img src="statamic://asset::files::docs/2021/08/Group_Login_FI.jpg"></p>