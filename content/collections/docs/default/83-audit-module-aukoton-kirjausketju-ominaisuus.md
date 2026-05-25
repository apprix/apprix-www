---
id: 7ca8956c-d4f8-4c2f-b8e0-29a31be07c18
blueprint: doc
title: '8.3 Audit Module (aukoton kirjausketju -ominaisuus)'
---
<b>Audit Module</b> -toiminto eli aukoton kirjausketju (Audit Trail) on kronologisessa järjestyksessä muodostuva muutoshistoria, johon kirjautuu reaaliaikaisesti kaikki moduuliin tehdyt muutokset.
<ul>
 <li><b>Jos haluat aktivoida Audit Module -toiminnon:</b> klikkaa moduulin <b>ratassymbolia</b> editointinäkymässä ja valitsemalla alasvetovalikosta <b>Audit Module</b>. Jos Audit Module -toiminto on päällä, kirjaushistorian sisältävä <b>About Module</b> -ponnahdusikkuna ilmestyy.</li>
 <li><b>Jos haluat ottaa Audit Module -toiminnon pois päältä:</b> klikkaa samasta alasvetovalikosta <b>Module Audit off</b>. Jos Audit Module -toiminto kytketään pois päältä, toiminnon poiskytkemisestä ilmoittava ponnahdusikkuna ilmestyy.</li>
 <li>Tarkastellaksesi kirjaushistoriaa valitse <b>About this module</b> -toiminto moduulin editointinäkymässä ratassymbolin alasvetovalikosta. Voit vaihtoehtoisesti tarkastella kirjaushistoriaa myös klikkaamalla <b>Last modified</b> -tekstilinkkiä moduulin oikeassa yläkulmassa Menu-näkymässä.
<ul>
 <li>Jos <b>Audit Module</b> -ominaisuus on päällä, moduulin muutoshistorian sisältävä <b>About Module</b> -ponnashduikkuna aukeaa.</li>
 <li>Jos <b>Audit Module </b>-ominaisuus ei ole kytketty päälle, näet ponnahdusikkunan, joka ilmoittaa, ettei ominaisuus ole kytketty päälle.</li>
</ul>
</li>
 <li>Huomioithan, että kerätty data on mahdollista ladata PDF-, CSV- tai Excel-tiedostomuodossa.</li>
</ul>
Sivulla olevassa esimerkkikuvassa on nähtävissä, miten moduulin teksteille ja kuville tehdyt muutokset näkyvät kirjaushistoriassa.
<h4>User's Permissions -valikko</h4>
Käyttäjähallinta-asetuksien <b>User's Permissions</b> -valikossa on kolme lupavaihtoehtoa <b>Audit Module</b> -toiminnon käyttöön:
<ul>
 <li>Alla näkyvillä asetuksilla käyttäjä voi aktivoida tai kytkeä pois päältä kaikkien olemassa olevien moduulien <b>Audit Module</b> -toiminnon.</li>
</ul>
<div>
<img class="wp-image-2380 aligncenter" src="/files/docs/2020/08/Userpermissions1.png" alt="" width="244" height="130" />
<ul>
 <li>Alla näkyvillä asetuksilla käyttäjä voi aktivoida tai kytkeä pois päältä kaikkien olemassa olevien moduulien <b>Audit Module</b> -toiminnon.</li>
</ul>
<img class="wp-image-2385 aligncenter" src="/files/docs/2020/08/none_edit1.png" alt="" width="229" height="135" />
<ul>
 <li>Alla näkyvillä asetuksilla käyttäjä pystyy hallinnoimaan <b>Audit Module</b> -toimintoa ainoastaan itse luomissaan moduuleissa, mutta ei muissa olemassa olevissa moduuleissa.</li>
</ul>
<img class="wp-image-2383 aligncenter" src="/files/docs/2020/08/noneview1.png" alt="" width="242" height="129" />

Sivulla olevassa kuvassa näkyy ABCDE-esimerkkimoduulin kirjattu muutoshistoria <b>Audit Module</b> -toiminnolla:

Rivi 1: Moduulin on luonut käyttäjä Apprix Test2.
Rivi 2: Sama käyttäjä on kytkenyt Audit Module -toiminnon päälle.
Rivi 3: Moduuliin on lisätty uusi Hotpot-elementti.
Rivi 4: Moduuliin on lisätty uusi Info Full Background -elementti.
Rivi 5: Info Full Background -elementti on vaihtanut paikkaa moduulissa kohdasta 1. kohtaan 2.
Rivi 6: Hotspot-elementti on vaihtanut paikkaa moduulissa kohdasta 1. kohtaan 3.
Rivi 7: Finish-elementti on vaihtanut paikkaa moduulissa kohdasta 2. kohtaan 4.
<h4>Kirjattavat historiatiedot muutoksista moduulissa</h4>
Seuraavat tiedot kirjataan muutoshistoriaan, kun <b>Audit Module</b> -toiminto on kytketty päälle:
<ul>
 <li>Muutettu sisältö elementeissä (esimerkiksi teksti, kuvat, videot)</li>
 <li>Lisätyt, poistetut tai paikkaa vaihtaneet elementit </li>
 <li>Moduulin ja elementtien nimimuutokset</li>
 <li>Käyttäjien salasanojen päälle- tai poiskytkentä</li>
 <li>Julkaistut ja julkaisemattomat moduulit (Published/Unpublished Modules)</li>
 <li>Monistetut moduulit (Module Duplicates)</li>
</ul>
<strong>Huom</strong>! Muista ladata Builderin sivu uudestaan, jotta Administrate -&gt; Client -&gt; Features -&gt; Audit / Full on Publishing (to display archived files also incremental to be on) asetus tulee käyttöön.

<h6 class="p1">Klikkaa kuvia suurentaaksesi niitä.</h6>

<figure class="doc-image"><img src="/files/docs/2022/03/R_audit_module.png" alt="" loading="lazy"></figure>

<figure class="doc-image"><img src="/files/docs/2020/08/audit3.png" alt="" loading="lazy"></figure>

<figure class="doc-image"><img src="/files/docs/2020/08/audit2.png" alt="" loading="lazy"></figure>

<figure class="doc-image"><img src="/files/docs/2020/08/Userpermissions2.png" alt="" loading="lazy"></figure>

<figure class="doc-image"><img src="/files/docs/2020/08/none_edit2.png" alt="" loading="lazy"></figure>

<figure class="doc-image"><img src="/files/docs/2020/08/noneview2.png" alt="" loading="lazy"></figure>

<figure class="doc-image"><img src="/files/docs/2020/08/Userpermissions3.png" alt="" loading="lazy"></figure>