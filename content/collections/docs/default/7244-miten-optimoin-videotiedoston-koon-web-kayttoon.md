---
id: befa7af3-9466-45a0-993a-83d887cbde2c
blueprint: doc
title: '7.24.4 Miten optimoin videotiedoston koon web-käyttöön?'
---
<p>Jos et käytä videopalvelua, joka optimoi videot puolestasi, vaan haluat ladata videoita suoraan tiedostoina Builderiin, niin videotiedostot kannattaa itse ensin optimoida web-käyttöön. Tässä ohje, miten sen voi tehdä Handbrake-nimisellä, ilmaisella open source -ohjelmalla.</p>

<p>Voit ladata ohjelman osoitteesta: <a href="https://handbrake.fr/">https://handbrake.fr/</a></p>

<p><strong>Ohjeita käyttöön:</strong></p>

<p><strong>Tiedosto</strong></p>
<ol>
 <li>Käynnistä ohjelma ja valitse videotiedosto "Open"-napista tai raahaa videotiedosto ohjelman päälle</li>
 <li>Laita alalaitaan "Save as" haluamasi uuden tiedoston nimi ja sijainti
<ul>
 <li><strong>Huom.</strong> Käytä .mp4-tiedostopäätettä .m4v:n sijaan</li>
</ul>
</li>
</ol>
<p><strong>Summary-välilehti</strong></p>
<ol>
 <li>Rastita "<strong>Web optimized</strong>", jotta videotiedosto voi latautua käyttäjälle osissa</li>
</ol>
<p><strong>Dimensions-välilehti</strong></p>
<ol>
 <li>Valitse <strong>Resolution Limit</strong> -alasvetovalikosta joko <strong>1080p</strong> tai <strong>720p</strong> (jälkimmäinen jos video on useamman minuutin pituinen)
<ul>
 <li><strong>Huom. "</strong>Width" pitää olla parillinen luku.</li>
</ul>
</li>
 <li>Valitse "<strong>Quality: Constant Quality</strong>" välille 23-30 RF (lisäohje alla*).</li>
 <li>Valitse "<strong>Framerate: Same as source (variable framerate)</strong>".</li>
</ol>
<p>Kun kaikki on valmista, paina ylälaidasta:<strong> Start Encode!</strong></p>

<p>*Huom! Laatua / tiedoston kokoa voi halutessa muuttaa Video-tabin Constant Quality -säätimellä:</p>
<ul>
 <li>Numerot on "väärinpäin" eli 23 on hyvä laatu ja 30 on huono laatu.
<ul>
 <li>Alle 20 on tarpeettoman hyvä laatu web-käyttöön ja 30 päälle on jo liian huono laatu.</li>
 <li>Pienetkin muutokset voivat tehdä ison eron tarvittaessa (ja logaritmisesti eli 20-21 välillä on isompi ero kuin 29-30),
<ul>
 <li>720p videossa voi 20 ja 23 välillä olla 1/3 kokoeroa tiedostossa, eli kokeilemiseen kannattaa käyttää muutama läpiveto etenkin pitkien videoiden kanssa (jos siis videota ei voi pilkkoa useampaan pieneen videoon; tai jos tietää, että kohderyhmä tarvitsee tiedostokooltaan hyvin kevyen videon).</li>
</ul>
</li>
</ul>
</li>
</ul>
