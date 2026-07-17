---
id: 36542d2d-9349-4b0f-bd59-5a8d9662d7e4
blueprint: doc
title: '7.29 Login'
seo_noindex: false
seo_nofollow: false
seo_canonical_type: entry
sitemap_change_frequency: weekly
sitemap_priority: 0.5
updated_by: 54f1c4c9-2642-4137-9504-e7b3042b847b
updated_at: 1784303275
---
<p><strong>Login</strong>-elementti räätälöidään jokaiselle asiakkaalle erikseen. Joskus <strong>Login</strong>-elementit sisältävät teknisiä integraatioita esimerkiksi muihin ympäristöihin, mutta useimmiten elementti kerää lisätietoa suorittajista tilastointia varten. Käyttäjätunnistus ja kirjautuminen kurssimoduuliin määritetään yleensä erikseen moduulin asetuksissa (esim. SSO, IP Guard, sähköpostirekisteröinti).</p><p>Huomaathan, että suorittaja on tunnistettava, jotta hänestä voidaan kerätä yksilöitävää tilastotietoa. Tyypillisimmin tämä saavutetaan moduulikohtaisesti päälle kytkettävällä asetuksella, kuten <a href="/help/82-user-authentication-kayttajatodennus"><strong>SSO:lla</strong></a>. Jos <strong>Login</strong>-elementti on räätälöity vaatimaan yksilöllistä tunnistetta (esim. sähköpostiosoite, verotunnus), sitä mahdollisesti voidaan käyttää myös suorittajan tunnistamistarkoitukseen. Lisätietoa organisaationne räätälöidystä <strong>Login</strong>-elementistä voit saada tarkastelemalla elementtiä sen editointinäkymässä.</p><p><strong>Vinkki:</strong> <a href="/help/754-form"><strong>Form</strong>‑elementti </a>on parannettu versio <strong>Login</strong>‑elementistä.</p><h3><strong>Elementti julkaisutilassa</strong></h3><p><img src="statamic://asset::files::docs/2021/08/Login_FI.jpg"></p><h3>Elementin asetukset editointinäkymässä</h3><p><img src="statamic://asset::files::docs/2021/08/Login_Edit_FI.gif"></p><h3>Myös ryhmäkirjautumiselle on oma Login-elementtinsä.</h3><p><img src="statamic://asset::files::docs/2021/08/Group_Login_FI.jpg"></p>