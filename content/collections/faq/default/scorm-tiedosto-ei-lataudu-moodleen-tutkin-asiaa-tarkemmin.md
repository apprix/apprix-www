---
id: 1bc7fb6c-fbba-4b0c-8119-b7a33a2e10b0
blueprint: faq_item
title: 'SCORM-tiedosto ei lataudu Moodleen. Tutkin asiaa tarkemmin ja huomasin, että index.html-tiedosto ei avaudu paikallisessa selaimessa.'
faq_categories:
  - zipscorm-tiedostot
order: 12
answer: '<p>Tämä johtuu siitä, että SCORM-paketti ei ole suunniteltu toimimaan paikallisesti, vaan se vaatii toimiakseen verkkopohjaisen LMS-järjestelmän (kuten Moodlen). Kun SCORM-paketti avataan suoraan paikallisessa selaimessa, selaimen kehityskonsoliin ilmestyy virheilmoituksia.</p><p>Jotta SCORM-pakettia voidaan käyttää koulutuksessa oikein, User Authentication -asetukseksi tulee valita "No user authentication". Tämän jälkeen paketin pitäisi toimia Moodlessa odotetulla tavalla.</p><p>Ohje: User Authentication -asetuksen muuttaminen</p><ul><li>Avaa moduulin Edit module -näkymä.</li><li>Klikkaa yläreunan hammasrataskuvaketta ja valitse User Authentication…</li><li>Avautuvassa User Authentication Settings -ikkunassa varmista, että “No user authentication” -menetelmä on valittuna.</li><li>Jos jokin muu autentikointimenetelmä on aktiivinen, poista se käytöstä.</li></ul>'
---
