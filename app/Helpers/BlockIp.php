<?php

/*
    funcion comun creada por Galy Ricardo para ser usada en varias partes del sistema en general
*/
namespace App\Helpers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Country;

class BlockIp{

    static function verify_ip($request_ip)
    {
        //dd($request_ip);
        $file = Storage::path('public/IP2LOCATION-LITE-DB1.IPV6.BIN'); 

        $db = new \IP2Location\Database($file, \IP2Location\Database::FILE_IO);

        $records = $db->lookup($request_ip, \IP2Location\Database::ALL);
        //dd($records['countryCode']);
        $records['countryCode']='CO';
        
        $whitelist=Country::where("active",1)->get(); //dd(count($whitelist));

        $verified_country=false;
        if(count($whitelist)!=0){
            foreach($whitelist as $wl){
                
                //echo $records['countryCode'] ."/". $wl->code."<br>";
                
                if($records['countryCode'] == "-"){
                    //abort(403, "localhost IP");
                    return false;
                    break;
                }
                
                if($records['countryCode'] == $wl->code){
                    //$verified_country=true;
                    return true;
                    break;
                }
                
            }

            if(!$verified_country){
                //abort(403, "You are restricted to access the site. Your Ip Address is not able to view this point");
                return false;
            }
        }
        else{
            //abort(403, "There is no whitelist");
            return false;
        }

        //return true;
    }
}