<?php
return [

    //create account
    'first_name.required'=> 'nombre es requerido',
    'first_name.min'=> 'nombre debe tener minimo 3 cáracteres',
    'last_name.required'=> 'apellido es requerido',
    'last_name.min'=> 'apellido debe tener minimo 3 cáracteres',
    'email_address.required'=> 'correo electrónico es requerido',
    'email_address.email'=> 'correo electrónico debe ser válido',
    'email_address.min'=> 'correo electrónico debe tener minimo 3 cáracteres',
    'phone_code_id.required'=> 'código de país es requerido',
    'phone_number.required'=> 'número de télefono es requerido',

    //verify code
    'message_code.error'=>"Tu Código no fue verificado, por favor chequea tu Código",

    //summary
    'date_birth.required' => 'Se requiere fecha de nacimiento',
    'country_birth_id.required' => 'País de nacimiento es obligatorio',
    'country_birth_id.exists' => 'País de nacimiento no especificado',
    'social_security_number.required' => 'Se requiere Número de Seguro Social',

    'street_address.required' => 'La dirección de la calle es obligatoria',
    'country_address_id.required' => 'Se requiere la dirección del país',
    'country_address_id.exists' => 'No se especifica la dirección del país',
    'city_address.required' => 'La dirección de la ciudad es obligatoria',
    'state_address.required' => 'Se requiere la dirección del estado',
    'zip_code_address.required' => 'Se requiere código postal',

    'occupation.required' => 'Se requiere ocupación',
    'customer_subtype.required' => 'Se requiere subtipo de cliente',
    'annual_income.required' => 'Se requiere ingreso anual',
    'description_position.required' => 'Se requiere la descripción del puesto',
    'policy_exposure_disclosure.required' => 'Se requiere divulgación de exposición política',

    'account_purposes.required' => 'Se requiere el propósito de la cuenta',

    'source_wealths.required' => 'Se requiere fuente de riqueza',

    'source_fund.required' => 'Se requieren fondos de origen',

    'incoming_average_account.required' => 'Se requiere cuenta promedio entrante',
    'incoming_quantity.required' => 'Se requiere la cantidad entrante',
    'outgoing_average_account.required' => 'Se requiere una cuenta promedio saliente',
    'outgoing_quantity.required' => 'Se requiere la cantidad saliente',

    'country_receive_one.required'=> 'Se requiere el país de recepción uno',
    'country_receive_two.required'=> 'Se requiere el país de recepción dos',
    'country_receive_three.required'=> 'Se requiere el país de recepción tres',
    'country_send_one.required'=> 'Se requiere el país de envío uno',
    'country_send_two.required'=> 'Se requiere el país de envío dos',
    'country_send_three.required'=> 'Se requiere el país de envío tres',
];