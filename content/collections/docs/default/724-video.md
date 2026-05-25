---
id: ed584a43-0946-48fd-92db-c397ea7a72ee
blueprint: doc
title: '7.24 Video'
---
Voit upottaa videon suoraan <strong>Video-elementtiin</strong> kopioimalla upotuskoodin suoratoistopalvelusta (esim. Youtube tai Vimeo). Avaa elementti ja klikkaa <strong>Change Video/Audio</strong> -kenttää. Valitse vasemmanpuoleinen välilehti <strong>Paste video embed code/iframe</strong> ja liitä siihen videon upotuskoodi Youtubesta tai Vimeosta. Paina Done, ja video ilmestyy sivulle.

<strong>HUOM! Builder ei tue YouTube-soittolistojen upottamista, ainoastaan yksittäisten videoiden <b data-stringify-type="bold">upottamista</b>.</strong>

Voit lisätä elementin alkuun esittelytekstin, jonka avulla ohjaat suorittajan huomiota tiettyihin aiheisiin videolla. Kertomalla suorittajalle, että videolla käsitellyistä aiheista esitetään kysymyksiä videon jälkeen, on tehokas tapa saada ihmiset keskittymään videoon.

On suositeltavaa pitää videot mahdollisimman lyhyinä. Jos video on pidempi kuin 1–2 minuuttia, harkitse videon leikkaamista kahteen tai useampaan osaan, jolloin voit lisätä tehtäväelementtejä videoiden väliin.

<strong>Video-elementin päivitetyssä versiossa</strong> suorittajalle voidaan näyttää eteenpäin-painike kesken videon tai vasta sen päätyttyä. Tässä versiossa voit itse määrittää, milloin eteenpäin-painike näytetään suorittajalle. Oletuksena eteenpäin-painike näytetään automaattisesti videon päätyttyä tuetuista videotoistopalveluista, kuten Youtubesta ja Vimeosta, upotetuissa videoissa sekä Builderiin ladatuissa videoissa. Muissa videoissa (esim. Microsoft Stream tai DreamBroker) eteenpäin-painike näytetään tässä versiossa oletuksena 10 sekunnin kuluttua videon alkamisesta.

Suosittelemme käyttämään upotuskoodeja Vimeosta. Apprixilla on yritystili, jonka kautta voimme ladata videoita niin, että niitä voi katsella ainoastaan Builder-kurssimoduuleista eikä videot näy muualla. Jos organisaatiollasi ei ole Vimeo-tiliä, etkä halua upottaa videota esimerkiksi Youtubesta, seuraa näitä askeleita:
<ol>
 <li>Ota yhteyttä: <strong>helpdesk@apprix.fi</strong> ja toimita videot Apprixille (mieluiten MP4-tiedostomuodossa)</li>
 <li>Lisäämme videot piilotettuna Apprixin Vimeo-tilille ja toimitamme teille upotuskoodit videoiden moduuliin lisäystä varten. Voimme myös lisätä videot suoraan oikeille paikoilleen tarvittaessa.</li>
</ol>
Jos haluat tietää, miten upotat videon Vimeo-kanavaltasi Builderiin, katso FAQ:

<a href=”/faq”>/faq</a>: “<strong>Miten upotan videon omalta Vimeo-kanavalta?</strong>”

<ol>
 <li>Avaa video, klikkaa <strong>Share/Jaa</strong>-nappia sen alapuolella ja valitse <strong>Embed/Upota</strong>.</li>
 <li>Nyt näet upotuskoodin. Jos haluat, että käyttäjä ei voi kelata videota, skrollaa hieman alaspäin ja ota raksi pois kohdasta ”Näytä soittimen ohjaimet”.</li>
 <li>Kopioi upotuskoodi ja liitä se video-elementin <strong>Change Video/Audio </strong>-kentän <strong>Paste video embed code/iframe</strong>-välilehden kenttään.</li>
</ol>

<ol>
 <li>Avaa Video-elementti.</li>
 <li>Klikkaa ikkunaa Add your video here. Ponnahdusikkuna <strong>Change Video/Audio</strong> ilmestyy.</li>
 <li>Valitse <strong>Files</strong>-välilehti ja klikkaa <strong>Browse/Upload Files</strong></li>
 <li><strong>Browse Media Library</strong> -ponnahdusikkuna ilmestyy. Jos haluat tallentaa videotiedoston mediakirjastoon, rastita ensin <strong>Show uploaded file in library</strong> -ruutu<strong>.</strong></li>
 <li>Klikkaa <strong>Upload new video file </strong>ja anna videolle nimi. Lataa tiedosto.</li>
</ol>
Mp4-tiedostomuotoa tukee lähes kaikki selaimet ja niiden viimeisimmät selainversiot. Saadaksesi lisää tietoa mp4-tiedostomuotoisista videoista, lue aiheesta lisää: <a href="https://caniuse.com/#feat=mpeg4">https://caniuse.com/#feat=mpeg4</a>

Maksimikoko Builderiin ladatuille videoille on 100MB.

Jos et käytä videopalvelua, joka optimoi videot puolestasi, vaan haluat ladata videoita suoraan tiedostoina Builderiin, niin videotiedostot kannattaa itse ensin optimoida web-käyttöön. Tässä ohje, miten sen voi tehdä Handbrake-nimisellä, ilmaisella open source -ohjelmalla.

Voit ladata ohjelman osoitteesta: <a href="https://handbrake.fr/">https://handbrake.fr/</a>

<strong>Ohjeita käyttöön:</strong>

<strong>Tiedosto</strong>
<ol>
 <li>Käynnistä ohjelma ja valitse videotiedosto “Open”-napista tai raahaa videotiedosto ohjelman päälle</li>
 <li>Laita alalaitaan ”Save as” haluamasi uuden tiedoston nimi ja sijainti
<ul>
 <li><strong>Huom.</strong> Käytä .mp4-tiedostopäätettä .m4v:n sijaan</li>
</ul>
</li>
</ol>
<strong>Summary-välilehti</strong>
<ol>
 <li>Rastita ”<strong>Web optimized</strong>”, jotta videotiedosto voi latautua käyttäjälle osissa</li>
</ol>
<strong>Dimensions-välilehti</strong>
<ol>
 <li>Valitse <strong>Resolution Limit</strong> -alasvetovalikosta joko <strong>1080p</strong> tai <strong>720p</strong> (jälkimmäinen jos video on useamman minuutin pituinen)
<ul>
 <li><strong>Huom. “</strong>Width” pitää olla parillinen luku.</li>
</ul>
</li>
 <li>Valitse ”<strong>Quality: Constant Quality</strong>” välille 23-30 RF (lisäohje alla*).</li>
 <li>Valitse ”<strong>Framerate: Same as source (variable framerate)</strong>”.</li>
</ol>
Kun kaikki on valmista, paina ylälaidasta:<strong> Start Encode!</strong>

*Huom! Laatua / tiedoston kokoa voi halutessa muuttaa Video-tabin Constant Quality -säätimellä:
<ul>
 <li>Numerot on ”väärinpäin” eli 23 on hyvä laatu ja 30 on huono laatu.
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

Mp4-videoformaattia tukevat lähes kaikki nykyaikaiset selaimet. Voit myös ladata webm- tai ogg-videotiedoston mp4-tiedoston rinnalle tukeaksesi muita selaimia, kuten Opera Miniä.

Jos haluat ladata useita videotiedostoja eri muodoissa kerralla, klikkaa ”<strong>Upload new video files…</strong>”  -painiketta, joka avaa tiedostovalitsin-ikkunan (Windowsissa File Explorer, macOS:ssä Finder).
Valitse useita tiedostoja, esim. mp4- ja webm-tiedostot, pitämällä CTRL-näppäintä painettuna Windowsissa tai CMD-näppäintä macOS:ssä ja valitsemalla tarvittavat tiedostot.
Kunkin lähetettävän tiedoston enimmäiskoko on 100 Mt.

<strong>Huom!</strong> Muista lisätä aina mp4-formaatin video. Et voi lisätä webm- tai ogg-videotiedostoja ilman mp4-tiedostoa.

<h6 class="p1">Klikkaa kuvia suurentaaksesi niitä.</h6>

<h5 class="p1 fusion-responsive-typography-calculated" data-fontsize="12" data-lineheight="18px">Päivitetyssä versiossa on mahdollista määrittää, milloin eteenpäin-painike näkyy suorittajalle:</h5>

<h5 class="p1 fusion-responsive-typography-calculated" data-fontsize="12" data-lineheight="18px">Elementin asetukset editointinäkymässä:</h5>

<figure class="doc-image"><img src="/files/docs/2021/08/Video_FI-1.gif" alt="" loading="lazy"></figure>

<figure class="doc-image"><img src="/files/docs/2022/01/video.png" alt="" loading="lazy"></figure>

<figure class="doc-image"><img src="/files/docs/2021/08/Video_Edit_FI-1.gif" alt="" loading="lazy"></figure>

<figure class="doc-image"><img src="/files/docs/2022/05/video-ohje4-1.gif" alt="" loading="lazy"></figure>

<figure class="doc-image"><img src="/files/docs/2021/12/video.png" alt="" loading="lazy"></figure>