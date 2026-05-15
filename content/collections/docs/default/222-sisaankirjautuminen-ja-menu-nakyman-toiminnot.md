---
id: 06dafea1-a114-4c2f-9a7e-0d58d41b1eb3
blueprint: doc
title: '2.2.2 Sisäänkirjautuminen ja Menu-näkymän toiminnot'
---
<p>Jos kuulut organisaatiosi pääkäyttäjiin, voi sinulla näkyä myös näkymässä vasemmalla <strong>Administrate-sivuvalikko</strong>, josta voi muokata käyttäjähallinta-asetuksia. Voit valikon kautta:</p>

<ul>
 <li>luoda uusia käyttäjiä ja muokata käyttäjien kirjautumistietoja
<ul>
 <li>vaihtaa käyttäjätunnuksen, sähköpostin tai salasanan</li>
</ul>
</li>
 <li>muokata käyttäjien käyttöoikeuksia
<ul>
 <li><strong>Vinkki:</strong> Jos et ole varma, mihin moduuleihin käyttäjälle tulisi myöntää oikeudet, myönnä oikeudet vain niihin moduuleihin, joista olet varma.</li>
</ul>
</li>
 <li>poistaa käyttöoikeudet käyttäjältä (deaktivoida käyttäjä)</li>
</ul>

<h4 class="" data-fontsize="18" data-lineheight="27px"><strong>Miten luon uuden käyttäjän?</strong></h4>
<ol>
 <li>Klikkaa <b>Administrate</b>-näkymässä<b> Add User</b> -painiketta.</li>
 <li>Täytä vaaditut tiedot ja klikkaa <b>Save.</b></li>
 <li>Ponnahdusikkuna ilmestyy, jossa kerrotaan, että kirjautumistiedot on lähetetty uuden käyttäjän sähköpostiin automaattisesti.
<ul>
 <li>Uusi käyttäjä saa kaksi sähköpostiviestiä: toisessa on käyttäjätunnus ja Builderin kirjautumislinkki, toisessa salasana.</li>
</ul>
</li>
 <li>Kun uusi käyttäjä klikkaa linkkiä sähköpostissa, häntä pyydetään kirjautumaan Builderiin tunnuksillaan ja vaihtamaan salasana. Käyttäjä voi vaihtaa salasanan valitsemalla<b> Change password</b> tiliasetuksista <b>Menu</b>-näkymän ylälaidassa.
<ul>
 <li>Uuden salasanan tulisi sisältää ainakin 8 merkkiä, isoja ja pieniä kirjaimia, ainakin yksi numero ja erikoismerkki.</li>
</ul>
</li>
 <li>Kun uusi salasana on asetettu ja käyttäjä klikkaa <b>Continue</b>, hänelle ilmoitetaan, että salasana on vaihdettu ja <b>Menu-näkymä</b> avautuu.</li>
</ol>
Myös vanhat käyttäjät voivat vaihtaa salasanansa Menu-näkymän tiliasetuksista klikkaamalla <b>Change Password</b>.

<h4 class="fusion-responsive-typography-calculated" data-fontsize="18" data-lineheight="27px"><strong>Miten muutan käyttäjän käyttöoikeuksia?</strong></h4>
<b>Administrate</b>-valikossa voit myös muuttaa käyttöoikeuksia. Klikkaa listasta käyttäjän nimeä, jonka käyttöoikeuksia haluat muokata. Nyt näet hänen käyttäjätietonsa, jonka alla näkyvät käyttöoikeudet moduuleihin.
<h3 class="fusion-responsive-typography-calculated" data-fontsize="20" data-lineheight="30px"><strong data-fusion-font="true">User's Permissions -valikko</strong></h3>
<ul>
 <li><strong>User management:</strong>
<ul>
 <li><strong>Edit-vaihtoehto:</strong> käyttäjällä on oikeus lisätä uusia käyttäjiä.</li>
 <li><strong>None-vaihtoehto:</strong> käyttäjällä ei ole oikeutta lisätä uusia käyttäjiä.</li>
</ul>
</li>
</ul>
<ul>
 <li><strong>Modules accessible:</strong>
<ul>
 <li><strong>On-vaihtoehto: </strong>käyttäjä näkee moduulit All Modules -ikkunassa.</li>
 <li><strong>Off-vaihtoehto: </strong>All Modules -ikkuna on tyhjä, eikä käyttäjä voi nähdä mitään moduulia.</li>
</ul>
</li>
</ul>
<ul>
 <li><strong>Default Module Access:</strong>
<ul>
 <li><strong>None-vaihtoehto:</strong> käyttäjä näkee ainoastaan omat moduulinsa.</li>
 <li><strong>View (System Default)-vaihtoehto: </strong>käyttäjälla on katseluoikeudet kaikkiin olemassa oleviin ja tuleviin moduuleihin, mutta ei muokkausoikeuksia.</li>
 <li><strong>Edit-vaihtoehto: </strong>käyttäjällä on muokkausoikeudet kaikkiin olemassa oleviin ja tuleviin moduuleihin.</li>
</ul>
</li>
</ul>
<h4 class="fusion-responsive-typography-calculated" data-fontsize="18" data-lineheight="27px"><b>Pääkäyttäjäoikeudet </b></h4>
Myönnä pääkäyttäjäoikeudet valitsemalla vaihtoehto <b>Edit </b>valikosta <b>User Management</b>.
<h4 class="fusion-responsive-typography-calculated" data-fontsize="18" data-lineheight="27px"><b>Yleinen katseluoikeus moduuleihin</b></h4>
Myönnä katseluoikeudet kaikkiin olemassa oleviin ja tuleviin moduuleihin valitsemalla <b>View</b> valikosta <b>Default Module Access.</b>
<h4 class="fusion-responsive-typography-calculated" data-fontsize="18" data-lineheight="27px"><b>Yleinen moduulien muokkausoikeus</b></h4>
Myönnä muokkausoikeudet kaikkiin olemassa oleviin ja tuleviin moduuleihin valitsemalla <b>Edit </b>valikosta <b>Default Module Access</b>.
<h4 class="fusion-responsive-typography-calculated" data-fontsize="18" data-lineheight="27px"><b>Yksittäisten moduulien muokkausoikeus </b></h4>
<p class="fusion-responsive-typography-calculated" data-fontsize="18" data-lineheight="27px"><b>(User's Module Edit &amp; Stats Permissions -valikko)</b></p>
Vaihtoehtoisesti voit pääkäyttäjänä antaa myös oikeuksia käyttäjälle vain tiettyihin moduuleihin. Huomioi kuitenkin, että kaikilla Builder-käyttäjillä on automaattisesti muokkausoikeudet itse luomiinsa moduuleihin. Muiden moduulien suhteen voi pääkäyttäjä muokata käyttöoikeuksia moduulikohtaisesti klikkaamalla <strong>Settings</strong> ja valitsemalla jonkun seuraavista käyttöoikeuksista muokattavan moduulin kohdalla <strong>Access-valikosta</strong>:
<ul>
 <li><strong>None (System Default)-vaihtoehto:</strong> Käyttäjä ei pysty katselemaan eikä muokkaamaan moduulia.</li>
 <li><strong>View-vaihtoehto:</strong> Käyttäjä pystyy katselemaan moduulia, mutta ei muokkaamaan sitä</li>
 <li><strong>Edit-vaihtoehto:</strong> Käyttäjä pystyy muokkaamaan moduulia.</li>
</ul>
<strong>Statistics-ruutu:</strong> Käyttäjälle voi myöntää oikeudet tarkastella tietyn moduulin statistiikkaa ilman muokkausoikeuksia moduuliin. Rastita tällöin ruutu ja valitse <strong>View-oikeudet</strong> moduulin <strong>Access</strong>-<strong>valikosta. </strong>Jos et halua myöntää oikeutta statistiikan tarkasteluun, jätä ruutu tyhjäksi.
<h4 class="fusion-responsive-typography-calculated" data-fontsize="18" data-lineheight="27px"><b>Palauta salasana</b></h4>
Palauta käyttäjän salasana klikkaamalla <b>Reset Password</b> -painiketta. Käyttäjä vastaanottaa kaksi sähköpostiviestiä: toisessa on käyttäjätunnus ja Builderin kirjautumislinkki, toisessa uusi salasana. Käyttäjä voi myös itse vaihtaa oman salasanansa milloin tahansa valitsemalla <b>Change Password Menu</b>-näkymän tiliasetuksista näkymän ylälaidassa.
<h4 class="fusion-responsive-typography-calculated" data-fontsize="18" data-lineheight="27px"><b>Käyttäjäoikeuksien poistaminen (käyttäjän deaktivointi)</b></h4>
Deaktivoi ja poista käyttäjän oikeudet klikkaamalla Administrate-valikossa käyttäjän nimeä, jonka käyttöoikeuksia haluat muokata. Klikkaa <b>Deactivate User</b> -painiketta. Tunnistat poistetun käyttäjän siitä, että nimen vieressä on <b>X</b>-symboli. Voit milloin tahansa aktivoida käyttäjän uudelleen klikkaamalla uudelleen käyttäjän nimeä ja valitsemalla <b>Activate user.</b>

<h6>Miten luot uuden käyttäjän?
Klikkaa ” Add User...” -painiketta Administrate-näkymässä.</h6>

<h6>User’s Permissions -valikko</h6>
<h6>Miten annat käyttöoikeudet uudelle käyttäjälle?</h6>

<h6 class="p1">Yksittäisten moduulien muokkausoikeus (User’s Module Edit &amp; Stats Permissions -valikko)</h6>

<h6 class="p1">Palauta käyttäjän salasana klikkaamalla Reset Password -painiketta.</h6>
<h6 class="p1">Deaktivoi ja poista käyttäjän oikeudet klikkaamalla Deactivate User -painiketta.</h6>

<figure class="doc-image"><img src="/files/docs/2025/03/2.2.2.-add-users-1.png" alt="" loading="lazy"></figure>

<figure class="doc-image"><img src="/files/docs/2025/03/2.2.2.user-permission2-1.png" alt="" loading="lazy"></figure>

<figure class="doc-image"><img src="/files/docs/2025/03/2.2.2.-module-editing-permission-1.png" alt="" loading="lazy"></figure>

<figure class="doc-image"><img src="/files/docs/2025/03/2.2.2.-reset-password2-1.png" alt="" loading="lazy"></figure>