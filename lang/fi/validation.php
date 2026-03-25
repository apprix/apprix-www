<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    */

    'accepted' => ':attribute täytyy hyväksyä.',
    'accepted_if' => ':attribute täytyy hyväksyä kun :other on :value.',
    'active_url' => ':attribute ei ole kelvollinen URL-osoite.',
    'after' => ':attribute täytyy olla päivämäärä :date jälkeen.',
    'after_or_equal' => ':attribute täytyy olla päivämäärä :date tai sen jälkeen.',
    'alpha' => ':attribute saa sisältää vain kirjaimia.',
    'alpha_dash' => ':attribute saa sisältää vain kirjaimia, numeroita, viivoja ja alaviivoja.',
    'alpha_num' => ':attribute saa sisältää vain kirjaimia ja numeroita.',
    'array' => ':attribute täytyy olla taulukko.',
    'before' => ':attribute täytyy olla päivämäärä ennen :date.',
    'before_or_equal' => ':attribute täytyy olla päivämäärä :date tai sitä ennen.',
    'between' => [
        'numeric' => ':attribute täytyy olla välillä :min ja :max.',
        'file' => ':attribute täytyy olla välillä :min ja :max kilotavua.',
        'string' => ':attribute täytyy olla välillä :min ja :max merkkiä.',
        'array' => ':attribute täytyy sisältää :min – :max kohdetta.',
    ],
    'boolean' => ':attribute kentän täytyy olla tosi tai epätosi.',
    'confirmed' => ':attribute vahvistus ei täsmää.',
    'current_password' => 'Salasana on virheellinen.',
    'date' => ':attribute ei ole kelvollinen päivämäärä.',
    'date_equals' => ':attribute täytyy olla päivämäärä :date.',
    'date_format' => ':attribute ei vastaa muotoa :format.',
    'declined' => ':attribute täytyy hylätä.',
    'declined_if' => ':attribute täytyy hylätä kun :other on :value.',
    'different' => ':attribute ja :other täytyy olla erilaisia.',
    'digits' => ':attribute täytyy olla :digits numeroa.',
    'digits_between' => ':attribute täytyy olla välillä :min ja :max numeroa.',
    'dimensions' => ':attribute kuvan mitat ovat virheelliset.',
    'distinct' => ':attribute kentässä on duplikaattiarvo.',
    'email' => ':attribute täytyy olla kelvollinen sähköpostiosoite.',
    'ends_with' => ':attribute täytyy päättyä johonkin seuraavista: :values.',
    'enum' => 'Valittu :attribute on virheellinen.',
    'exists' => 'Valittu :attribute on virheellinen.',
    'file' => ':attribute täytyy olla tiedosto.',
    'filled' => ':attribute kenttä täytyy olla täytetty.',
    'gt' => [
        'numeric' => ':attribute täytyy olla suurempi kuin :value.',
        'file' => ':attribute täytyy olla suurempi kuin :value kilotavua.',
        'string' => ':attribute täytyy olla pidempi kuin :value merkkiä.',
        'array' => ':attribute täytyy sisältää enemmän kuin :value kohdetta.',
    ],
    'gte' => [
        'numeric' => ':attribute täytyy olla suurempi tai yhtä suuri kuin :value.',
        'file' => ':attribute täytyy olla vähintään :value kilotavua.',
        'string' => ':attribute täytyy olla vähintään :value merkkiä.',
        'array' => ':attribute täytyy sisältää vähintään :value kohdetta.',
    ],
    'image' => ':attribute täytyy olla kuva.',
    'in' => 'Valittu :attribute on virheellinen.',
    'in_array' => ':attribute kenttää ei ole :other.',
    'integer' => ':attribute täytyy olla kokonaisluku.',
    'ip' => ':attribute täytyy olla kelvollinen IP-osoite.',
    'ipv4' => ':attribute täytyy olla kelvollinen IPv4-osoite.',
    'ipv6' => ':attribute täytyy olla kelvollinen IPv6-osoite.',
    'json' => ':attribute täytyy olla kelvollinen JSON-merkkijono.',
    'lt' => [
        'numeric' => ':attribute täytyy olla pienempi kuin :value.',
        'file' => ':attribute täytyy olla pienempi kuin :value kilotavua.',
        'string' => ':attribute täytyy olla lyhyempi kuin :value merkkiä.',
        'array' => ':attribute täytyy sisältää vähemmän kuin :value kohdetta.',
    ],
    'lte' => [
        'numeric' => ':attribute täytyy olla pienempi tai yhtä suuri kuin :value.',
        'file' => ':attribute täytyy olla enintään :value kilotavua.',
        'string' => ':attribute täytyy olla enintään :value merkkiä.',
        'array' => ':attribute ei saa sisältää enempää kuin :value kohdetta.',
    ],
    'mac_address' => ':attribute täytyy olla kelvollinen MAC-osoite.',
    'max' => [
        'numeric' => ':attribute ei saa olla suurempi kuin :max.',
        'file' => ':attribute ei saa olla suurempi kuin :max kilotavua.',
        'string' => ':attribute ei saa olla pidempi kuin :max merkkiä.',
        'array' => ':attribute ei saa sisältää enempää kuin :max kohdetta.',
    ],
    'mimes' => ':attribute täytyy olla tiedostotyyppiä: :values.',
    'mimetypes' => ':attribute täytyy olla tiedostotyyppiä: :values.',
    'min' => [
        'numeric' => ':attribute täytyy olla vähintään :min.',
        'file' => ':attribute täytyy olla vähintään :min kilotavua.',
        'string' => ':attribute täytyy olla vähintään :min merkkiä.',
        'array' => ':attribute täytyy sisältää vähintään :min kohdetta.',
    ],
    'multiple_of' => ':attribute täytyy olla :value:n monikerta.',
    'not_in' => 'Valittu :attribute on virheellinen.',
    'not_regex' => ':attribute muoto on virheellinen.',
    'numeric' => ':attribute täytyy olla numero.',
    'password' => 'Salasana on virheellinen.',
    'present' => ':attribute kenttä täytyy olla läsnä.',
    'prohibited' => ':attribute kenttä on kielletty.',
    'prohibited_if' => ':attribute kenttä on kielletty kun :other on :value.',
    'prohibited_unless' => ':attribute kenttä on kielletty ellei :other ole :values.',
    'prohibits' => ':attribute kenttä estää :other olemasta läsnä.',
    'regex' => ':attribute muoto on virheellinen.',
    'required' => ':attribute kenttä on pakollinen.',
    'required_array_keys' => ':attribute kentän täytyy sisältää: :values.',
    'required_if' => ':attribute kenttä on pakollinen kun :other on :value.',
    'required_unless' => ':attribute kenttä on pakollinen ellei :other ole :values.',
    'required_with' => ':attribute kenttä on pakollinen kun :values on läsnä.',
    'required_with_all' => ':attribute kenttä on pakollinen kun :values ovat läsnä.',
    'required_without' => ':attribute kenttä on pakollinen kun :values ei ole läsnä.',
    'required_without_all' => ':attribute kenttä on pakollinen kun mikään :values ei ole läsnä.',
    'same' => ':attribute ja :other täytyy täsmätä.',
    'size' => [
        'numeric' => ':attribute täytyy olla :size.',
        'file' => ':attribute täytyy olla :size kilotavua.',
        'string' => ':attribute täytyy olla :size merkkiä.',
        'array' => ':attribute täytyy sisältää :size kohdetta.',
    ],
    'starts_with' => ':attribute täytyy alkaa jollakin seuraavista: :values.',
    'string' => ':attribute täytyy olla merkkijono.',
    'timezone' => ':attribute täytyy olla kelvollinen aikavyöhyke.',
    'unique' => ':attribute on jo varattu.',
    'uploaded' => ':attribute lataus epäonnistui.',
    'url' => ':attribute täytyy olla kelvollinen URL-osoite.',
    'uuid' => ':attribute täytyy olla kelvollinen UUID.',

    /*
    |--------------------------------------------------------------------------
    | Custom Statamic Validation Language Lines
    |--------------------------------------------------------------------------
    */

    'unique_entry_value' => 'Tämä arvo on jo varattu.',
    'unique_user_value' => 'Tämä arvo on jo varattu.',
    'duplicate_field_handle' => 'Kenttää, jonka kahva on :handle, ei voi käyttää useammin kuin kerran.',
    'one_site_without_origin' => 'Vähintään yhdellä sivustolla ei saa olla alkuperää.',
    'origin_cannot_be_disabled' => 'Ei voi valita poistettua alkuperää.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    */

    'attributes' => [],

];
