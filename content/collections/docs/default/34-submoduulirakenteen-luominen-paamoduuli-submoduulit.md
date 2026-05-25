---
id: b827ca8f-c002-4e84-a9ac-d51ac232c750
blueprint: doc
title: '3.4 Submoduulirakenteen luominen (päämoduuli + submoduuli(t))'
---
<h4><strong>Milloin submoduulirakennetta on suositeltavaa käyttää?</strong></h4>
Jos haluat moduuliisi sisällysluettelon ja mahdollisuuden jakaa sisällön osioihin tai aihealueittain, käytä Submodules-toiminnallisuutta. Tällöin moduulirakenne jakautuu niin sanottuun päämoduuliin ja sille alisteisiin submoduuleihin.

Submoduulirakenteen hyödyt:
<ul>
 <li>Pitkissä moduulirakenteissa kokonaisuuden hahmottaminen suorittajalle helpottuu.</li>
 <li>Moduulirakenteen muokkaaminen on jatkossa sinulle helpompaa, kun sisältö on jaoteltu, eikä pitkänä yhtenäisenä moduulina.</li>
 <li>Voit määrittää, ovatko moduulin osiot pakollisia vai vapaaehtoisia suorittajille koulutuksesta saatavan suoritusmerkinnän suhteen.</li>
 <li>Voit kätevästi jatkossa lisätä tai irrottaa osioita.</li>
 <li>Kurssin suorittaja voi suorittaa moduulin osissa, jos päämoduulissa on Login-elementti tai jos käyttäjän todennusmenetelmä (esim. SSO) on käytössä.
<ul>
 <li>Login-elementti lisätään päämoduuliin ennen <a href="#submenubuttons"><b>Submenu Buttons</b></a> -elementtiä, joka toimii valikkosivuna submoduuleille.</li>
 <li>Tällöin hän voi jatkaa suoritusta viimeksi kokonaan suorittamastaan osiosta eteenpäin, eikä esimerkiksi pitkää koulutusta tarvitse suorittaa yhdellä istumalla.</li>
</ul>
</li>
</ul>

<h6 class="p1">Päämoduuli, joka sisältää kaksi submoduulia muokkaustilassa.</h6>

<h6 class="p1">Submenu buttons -elementti Julkaistu-tilassa.</h6>

<h4><strong>Submoduulirakenteen luominen</strong></h4>
Submoduulirakenteita voi luoda monessa eri toimintajärjestyksessä, mutta tässä esimerkissä aloitamme päämoduulista ja etenemme sitten submoduulien luomiseen.

<b>Vaihe 1: Päämoduulin luominen</b>
<ol>
 <li>Luo ensin tavallinen moduuli, kuten kohdassa Moduulin luominen (”Create”). Nimeä tämä moduuli käyttötarkoitusta ja kurssin aihetta kuvaavasti kuten ohjeistaan kohdassa <a href="#moduulinnimeaminen"><b>Moduulin nimeäminen</b></a>. Rakenteen hahmottamisen ja jatkotyöstämisen helpottamiseksi on suositeltavaa lisätä päämoduulin nimen perään sana "päämoduuli". Esimerkiksi: Turvallisuuskoulutus – päämoduuli.</li>
 <li>Lisää moduulirakenteeseen <b>Submenu Buttons</b> -elementti, tarvittaessa nimeä se, siirrä se oikeaan paikkaan moduulissa, tallenna muutokset painamalla <b>Save </b>ja avaa elementti.</li>
 <li>Elementin vasemmassa laidassa olevaan otsikkokenttään voit nimetä valikon (esim. "Valikko" tai "Koulutusvalikko") ja alla olevaan teksikenttään voit antaa suorittajalle rakenteen suorittamiseen liittyviä ohjeita. Elementin ylälaidassa olevasta oranssista rattaasta voit:
<ul>
 <li>lisätä valikkoon painikkeita linkitettäville submoduuleille <b>Add button</b> -painikkeesta.
<ul>
 <li>Lisää jokaiselle submoduulille oma painike ja nimeä painikkeet tulevien submoduulien nimillä, jolloin samoin nimetyn submoduulin linkkaaminen oikeaan painikkeeseen on vaivatonta.</li>
 <li>Submoduulit on suositeltavaa nimetä niiden sisältöä tai aihealuetta kuvaavasti.</li>
 <li>Lisää perään aika-arvio submoduulin suorittamiseen kuluvasta ajasta.</li>
</ul>
</li>
 <li>määrittää, onko submoduulit suoritettava osoitetussa järjestyksessä (ensimmäinen ensimmäisenä jne.) vai voiko suorittaja itse valita järjestyksen, jossa submoduulit suorittaa.</li>
 <li>määrittää, ovatko kaikki submoduulit pakollisia vai vapaaehtoisia, jolloin suorittajan ei tarvitse suorittaa kaikkia submoduuleja jatkaakseen loppuun ja ansaitakseen suoritusmerkinnän.</li>
</ul>
</li>
 <li>Kun olet tyytyväinen <strong>Submenu buttons</strong> -elementin asetuksiin, sulje elementti ja poistu moduulista.</li>
</ol>
<b>Vaihe 2: Submoduulin luominen</b>
<ol>
 <li>Luo uusi tavallinen moduuli painikkeesta <b>Create</b>. Nimeä moduuli sen submoduulipainiketta vastaavalla nimellä, jolloin submoduulipainikkeen ja sitä vastaavan submoduulin linkittäminen yhteen on vaivatonta.
<ul>
 <li>On suositeltavaa lisätä submoduulin nimen perään myös submoduulirakenteen/koko koulutuksen nimi (esim. "Johdanto turvallisuuteen – Turvallisuuskoulutus"). Tällöin jos submoduuli syystä tai toisesta irrotetaan submoduulirakenteesta, se on vaivatonta löytää ja linkata takaisin oikeaan päämoduuliin.</li>
</ul>
</li>
 <li>Aloitetaan muunnos tavallisesta moduulista submoduuliksi. Vie hiiri <b>Save</b>-painikkeen vieressä olevan <strong>Submodule Settings</strong> -painikkeen päälle ja klikkaa avautuvasta valikosta painiketta <strong>Change to submodule</strong>. Näkymään pitäisi nyt avautua ikkuna, jossa on nähtävissä kaikki päämoduulit, joihin voi linkittää submoduuleja. Klikkaa submoduuliasi vastaavaa painikkeen nimeä luomastasi menuvalikosta ja submoduuli linkkautuu päämoduuliin.
<ul>
 <li>Huom! Jos yrität muuttaa aikaisemmin julkaisemaasi moduulia (<strong>Published</strong>) submoduuliksi, <strong>Submodule Settings</strong> -painike ei ole näkyvissä. Poista moduuli julkaisusta (<strong>Unpublish</strong>), jos haluat muuttaa moduulin submoduuliksi.</li>
</ul>
</li>
 <li>Toista vaiheet 1. – 3. jokaisen submoduulin kohdalla, kunnes moduulirakenne on valmis.
<ul>
 <li>Huom! Ainoastaan julkaisemattomia (<b>Unpublished</b>) moduuleja voi linkata päämoduuleihin.</li>
 <li>Jotta submoduulivalikon painikkeet johtavat submoduuleihin submoduulirakennetta esikatseltaessa tai suoritettaessa, on submoduulit julkaistava (<b>Publish</b>). Julkaistujen submoduulien viereen ilmestyy submoduulilistauksessa vihreä pallo.</li>
</ul>
</li>
</ol>
<b>Vaihe 3: Submoduulien muokkaaminen</b>
<ol>
 <li>Voit muokata submoduuleja tavallisen moduulin tapaan. Klikkaa moduulin editointinäkymässä submoduuli auki klikkaamalla submoduulin nimeä submoduulirakenteen submoduulilistauksessa. </li>
 <li>Pääset takaisin päämoduulin joko klikkaamalla päämoduulin otsikkoa submoduulin ollessa auki tai klikkaamalla alhaalla vasemmalla näkymässä <strong>To main module</strong> -painiketta.</li>
</ol>

<h6>Miten Submenu Buttons -elementti lisätään päämoduuliin ja miten sen alavalikon asetuksia (Submenu settings) muokataan?</h6>

<figure class="doc-image"><img src="/files/docs/2020/04/Esimerkki_submoduulit.png" alt="" loading="lazy"></figure>

<h6>Miten tehdä moduulista submoduuli ja linkittää se sitten päämoduuliin?</h6>

<figure class="doc-image"><img src="/files/docs/2020/09/Esimerkkikoulutus_menu.jpg" alt="" loading="lazy"></figure>

<h6>Miten päämoduuliin linkitetyt submoduulit julkaistaan?</h6>

<figure class="doc-image"><img src="/files/docs/2024/07/Main-module-submodule-1.gif" alt="" loading="lazy"></figure>

<h6>Julkaistujen submoduulien viereen ilmestyy submoduulilistauksessa vihreä pallo.</h6>

<figure class="doc-image"><img src="/files/docs/2024/07/Main-module-submodule-2.gif" alt="" loading="lazy"></figure>

<figure class="doc-image"><img src="/files/docs/2024/07/Main-module-submodule-3-1.gif" alt="" loading="lazy"></figure>

<figure class="doc-image"><img src="/files/docs/2024/07/published-submodules-green-balls.png" alt="" loading="lazy"></figure>