---
id: f4a2c77c-b734-45b1-b731-267fd074e90b
blueprint: doc
title: '8.12 Element locking'
seo_noindex: inherit
seo_nofollow: false
seo_canonical_type: entry
sitemap_change_frequency: weekly
sitemap_priority: 0.5
updated_by: 54f1c4c9-2642-4137-9504-e7b3042b847b
updated_at: 1784805653
---
<p>”Elementtien lukitseminen” tarkoittaa, että fasilitaattorit, joilla on elementin lukitusoikeudet, voivat estää muita fasilitaattoreita muokkaamasta tiettyjä elementtejä.</p><p>User Admininistrator voi lukita/avata minkä tahansa elementin.</p><p><strong>Miten elementti lukitaan?</strong></p><p>Klikkaa elementin ylälaidassa olevaa hammasratasymbolia ja valitse vaihtoehto <strong>Lock Element</strong> tai <strong>Unlock Element</strong>.</p><p><img src="statamic://asset::files::docs/2024/09/Locking-element-1.jpg"></p><p>Muokkaustilassa lukko näkyy lukitun elementin päällä.</p><p><img src="statamic://asset::files::docs/2024/09/Locking-element-2.jpg"></p><h3>ADMINISTRATE TYÖKALUN ASETUKSET</h3><p>Jos <a target="_blank" href="222-sisaankirjautuminen-ja-menu-nakyman-toiminnot">Administrate -työkalussa</a> fasilitaattorin ”<strong>Element Locking</strong>”-arvo on ”<strong>View</strong>” , hän ei voi muokata moduulia, vaan muokatakseen moduulia hänen on kopioitava se. Kun moduuli on duplikoitu, duplikoidun moduulin lukittuja elementtejä ei voi enää siirtää eikä muokata, mutta fasilitaattori voi lisätä uusia elementtejä moduuliin. Tässä tapauksessa fasilitaattori ei voi lukita/avata mitään elementtejä.</p><p>Jos Administrate -työkalussa fasilitaattorin &quot;<strong>Element Locking</strong>&quot; – arvo on ” <strong>Edit</strong> ” , hän voi :</p><ul><li><p>lukita minkä tahansa elementin</p></li><li><p>muokata ja poistaa lukituksen </p></li><li><p>muuttaa lukittujen elementtien sijaintia.</p></li></ul><p><img src="statamic://asset::files::docs/2024/09/Locking-element-3.jpg"></p>