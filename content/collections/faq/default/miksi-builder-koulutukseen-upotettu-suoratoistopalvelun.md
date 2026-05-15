---
id: 398368cb-0fe5-4257-8d79-97d97cfcb3f2
blueprint: faq_item
title: 'Miksi Builder koulutukseen upotettu suoratoistopalvelun video toistuu Builderissä, mutta ei LMS:ään viedyn SCORM paketin kautta?'
category: 'Video'
order: 11
answer: '<p>Video ei mahdollisesti toistu LMS:ssä siitä syystä, että suoratoistopalvelusta upotetun videon asetuksissa ei ole sallittu käytetyn LMS:n domainia, jonka alle SCORM paketin kautta latautuva videosisältö upotetaan. Koska video toistuu Builderissä, suoratoistopalvelussa asetetut videon asetukset todennäköisesti sallivat sisällön upottamisen Builder domainin alle (builder.apprix.fi).</p><p>Yleisesti ongelma on ratkaistavissa siten, että suoratoistopalvelun videoasetuksista sallitaan videon upottaminen tarvittavan LMS domainin alle. Esimerkiksi Vimeo-suoratoistopalvelussa tämä tapahtuu navigoimalla Vimeo-videon hallintasivulle ja muokkamalla domaineja, joiden alle sisältö sallitaan upottaa. Lisätietoa Vimeo-videon asetusten muuttamisesta: https://help.vimeo.com/hc/en-us/articles/12426259908881-How-to-embed-my-video</p><p>Jos Builder koulutuksessa käytetään Apprixin Vimeo-kanavalta upotettavaa videota ja tälläista videota käyttävää Builder koulutusta ei ole aiemmin viety SCORM pakettina asiakkaan LMS:ään, toimitattehan meille LMS:n domainin, jonka alla SCORM paketin sisältö näkyy, jotta voimme lisätä domainin Vimeo-videon asetuksiin sallittujen upottavien domainien listalle.</p>'
---
