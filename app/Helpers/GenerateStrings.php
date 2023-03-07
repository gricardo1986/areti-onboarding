<?php

/*
    funcion comun creada por Galy Ricardo para ser usada en varias partes del sistema en general
*/
namespace App\Helpers;


class GenerateStrings{

	
	static function random_characters() {

		$strength = 30;
		$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    $input_length = strlen($permitted_chars);
	    $random_string = '';
	    for($i = 0; $i < $strength; $i++) {
	        $random_character = $permitted_chars[mt_rand(0, $input_length - 1)];
	        $random_string .= $random_character;
	    }
	 
	    return $random_string;
	}
	 
 
}
?>