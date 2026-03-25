<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    */

    'accepted' => ':attribute måste accepteras.',
    'accepted_if' => ':attribute måste accepteras när :other är :value.',
    'active_url' => ':attribute är inte en giltig URL.',
    'after' => ':attribute måste vara ett datum efter :date.',
    'after_or_equal' => ':attribute måste vara ett datum efter eller lika med :date.',
    'alpha' => ':attribute får bara innehålla bokstäver.',
    'alpha_dash' => ':attribute får bara innehålla bokstäver, siffror, bindestreck och understreck.',
    'alpha_num' => ':attribute får bara innehålla bokstäver och siffror.',
    'array' => ':attribute måste vara en lista.',
    'before' => ':attribute måste vara ett datum före :date.',
    'before_or_equal' => ':attribute måste vara ett datum före eller lika med :date.',
    'between' => [
        'numeric' => ':attribute måste vara mellan :min och :max.',
        'file' => ':attribute måste vara mellan :min och :max kilobyte.',
        'string' => ':attribute måste vara mellan :min och :max tecken.',
        'array' => ':attribute måste ha mellan :min och :max objekt.',
    ],
    'boolean' => ':attribute fältet måste vara sant eller falskt.',
    'confirmed' => ':attribute bekräftelsen stämmer inte.',
    'current_password' => 'Lösenordet är felaktigt.',
    'date' => ':attribute är inte ett giltigt datum.',
    'date_equals' => ':attribute måste vara ett datum lika med :date.',
    'date_format' => ':attribute matchar inte formatet :format.',
    'declined' => ':attribute måste avvisas.',
    'declined_if' => ':attribute måste avvisas när :other är :value.',
    'different' => ':attribute och :other måste vara olika.',
    'digits' => ':attribute måste vara :digits siffror.',
    'digits_between' => ':attribute måste vara mellan :min och :max siffror.',
    'dimensions' => ':attribute har ogiltiga bilddimensioner.',
    'distinct' => ':attribute fältet har ett duplikatvärde.',
    'email' => ':attribute måste vara en giltig e-postadress.',
    'ends_with' => ':attribute måste sluta med något av följande: :values.',
    'enum' => 'Det valda :attribute är ogiltigt.',
    'exists' => 'Det valda :attribute är ogiltigt.',
    'file' => ':attribute måste vara en fil.',
    'filled' => ':attribute fältet måste ha ett värde.',
    'gt' => [
        'numeric' => ':attribute måste vara större än :value.',
        'file' => ':attribute måste vara större än :value kilobyte.',
        'string' => ':attribute måste vara längre än :value tecken.',
        'array' => ':attribute måste ha fler än :value objekt.',
    ],
    'gte' => [
        'numeric' => ':attribute måste vara större än eller lika med :value.',
        'file' => ':attribute måste vara minst :value kilobyte.',
        'string' => ':attribute måste vara minst :value tecken.',
        'array' => ':attribute måste ha minst :value objekt.',
    ],
    'image' => ':attribute måste vara en bild.',
    'in' => 'Det valda :attribute är ogiltigt.',
    'in_array' => ':attribute fältet finns inte i :other.',
    'integer' => ':attribute måste vara ett heltal.',
    'ip' => ':attribute måste vara en giltig IP-adress.',
    'ipv4' => ':attribute måste vara en giltig IPv4-adress.',
    'ipv6' => ':attribute måste vara en giltig IPv6-adress.',
    'json' => ':attribute måste vara en giltig JSON-sträng.',
    'lt' => [
        'numeric' => ':attribute måste vara mindre än :value.',
        'file' => ':attribute måste vara mindre än :value kilobyte.',
        'string' => ':attribute måste vara kortare än :value tecken.',
        'array' => ':attribute måste ha färre än :value objekt.',
    ],
    'lte' => [
        'numeric' => ':attribute måste vara mindre än eller lika med :value.',
        'file' => ':attribute måste vara högst :value kilobyte.',
        'string' => ':attribute måste vara högst :value tecken.',
        'array' => ':attribute får inte ha fler än :value objekt.',
    ],
    'mac_address' => ':attribute måste vara en giltig MAC-adress.',
    'max' => [
        'numeric' => ':attribute får inte vara större än :max.',
        'file' => ':attribute får inte vara större än :max kilobyte.',
        'string' => ':attribute får inte vara längre än :max tecken.',
        'array' => ':attribute får inte ha fler än :max objekt.',
    ],
    'mimes' => ':attribute måste vara en fil av typen: :values.',
    'mimetypes' => ':attribute måste vara en fil av typen: :values.',
    'min' => [
        'numeric' => ':attribute måste vara minst :min.',
        'file' => ':attribute måste vara minst :min kilobyte.',
        'string' => ':attribute måste vara minst :min tecken.',
        'array' => ':attribute måste ha minst :min objekt.',
    ],
    'multiple_of' => ':attribute måste vara en multipel av :value.',
    'not_in' => 'Det valda :attribute är ogiltigt.',
    'not_regex' => ':attribute formatet är ogiltigt.',
    'numeric' => ':attribute måste vara ett nummer.',
    'password' => 'Lösenordet är felaktigt.',
    'present' => ':attribute fältet måste finnas.',
    'prohibited' => ':attribute fältet är förbjudet.',
    'prohibited_if' => ':attribute fältet är förbjudet när :other är :value.',
    'prohibited_unless' => ':attribute fältet är förbjudet om inte :other finns i :values.',
    'prohibits' => ':attribute fältet förbjuder :other från att finnas.',
    'regex' => ':attribute formatet är ogiltigt.',
    'required' => ':attribute fältet är obligatoriskt.',
    'required_array_keys' => ':attribute fältet måste innehålla poster för: :values.',
    'required_if' => ':attribute fältet är obligatoriskt när :other är :value.',
    'required_unless' => ':attribute fältet är obligatoriskt om inte :other finns i :values.',
    'required_with' => ':attribute fältet är obligatoriskt när :values finns.',
    'required_with_all' => ':attribute fältet är obligatoriskt när :values finns.',
    'required_without' => ':attribute fältet är obligatoriskt när :values inte finns.',
    'required_without_all' => ':attribute fältet är obligatoriskt när ingen av :values finns.',
    'same' => ':attribute och :other måste stämma överens.',
    'size' => [
        'numeric' => ':attribute måste vara :size.',
        'file' => ':attribute måste vara :size kilobyte.',
        'string' => ':attribute måste vara :size tecken.',
        'array' => ':attribute måste innehålla :size objekt.',
    ],
    'starts_with' => ':attribute måste börja med något av följande: :values.',
    'string' => ':attribute måste vara en sträng.',
    'timezone' => ':attribute måste vara en giltig tidszon.',
    'unique' => ':attribute är redan taget.',
    'uploaded' => ':attribute kunde inte laddas upp.',
    'url' => ':attribute måste vara en giltig URL.',
    'uuid' => ':attribute måste vara ett giltigt UUID.',

    /*
    |--------------------------------------------------------------------------
    | Custom Statamic Validation Language Lines
    |--------------------------------------------------------------------------
    */

    'unique_entry_value' => 'Detta värde är redan taget.',
    'unique_user_value' => 'Detta värde är redan taget.',
    'duplicate_field_handle' => 'Fält med handtaget :handle kan inte användas mer än en gång.',
    'one_site_without_origin' => 'Minst en webbplats måste sakna ursprung.',
    'origin_cannot_be_disabled' => 'Kan inte välja ett inaktiverat ursprung.',

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
