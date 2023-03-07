<?php
return [

    //create account
    'first_name.required'=> 'first name is required',
    'first_name.min'=> 'first name must be have 3 characters',
    'last_name.required'=> 'last name is required',
    'last_name.min'=> 'last name must be have 3 characters',
    'email_address.required'=> 'email address is required',
    'email_address.email'=> 'email address must be valid',
    'email_address.min'=> 'email must be have 3 characters',
    'phone_code_id.required'=> 'country code is required',
    'phone_number.required'=> 'phone number is required',

    //verify code
    'message_code.error'=>"Your code wasn't verify, please check your code",

    //summary
    'date_birth.required' => 'Date Birth is required',
    'country_birth_id.required' => 'Country Birth is required',
    'country_birth_id.exists' => 'Country Birth is not especified',
    'social_security_number.required' => 'Social Security Number is required',

    'street_address.required' => 'Street Address is required',
    'country_address_id.required' => 'Country Address is required',
    'country_address_id.exists' => 'Country Address is not especified',
    'city_address.required' => 'City Address is required',
    'state_address.required' => 'State Address is required',
    'zip_code_address.required' => 'Zip Code is required',

    'occupation.required' => 'Occupation is required',
    'customer_subtype.required' => 'Customer Subtype is required',
    'annual_income.required' => 'Annual Income is required',
    'description_position.required' => 'Description Position is required',
    'political_exposure_disclosure.required' => 'Political Exposure Disclosure is required',

    'account_purposes.required' => 'Account Purposes is required',

    'source_wealths.required' => 'Source Wealths is required',

    'source_fund.required' => 'Source Funds is required',

    'incoming_average_account.required' => 'Incoming Average Account is required',
    'incoming_quantity.required' => 'Incoming Quantity is required',
    'outgoing_average_account.required' => 'Outgoing Average Account is required',
    'outgoing_quantity.required' => 'Outgoing Quantity is required',

    'country_receive_one.required'=> 'Country Receive One is required',
    'country_receive_two.required'=> 'Country Receive Two is required',
    'country_receive_three.required'=> 'Country Receive Three is required',
    'country_send_one.required'=> 'Country Send One is required',
    'country_send_two.required'=> 'Country Send Two is required',
    'country_send_three.required'=> 'Country Send Three is required',

];