<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

use App\Models\Country;
use Exception;

class CountriesImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $rows)
    {
        try{
            foreach ($rows as $row) 
            {
                echo trim($row[0])."->".trim($row[1])."->".trim($row[3])."->".trim($row[5])."<br>";
                
                if(!is_null($row[1]) && !is_null($row[3])){

                    if(trim($row[1])!="name"){
                        $country=new Country;
                        $country->name = trim($row[1]);
                        $country->nombre = trim($row[0]);
                        if(trim($row[3])!="iso2")
                            $country->code = trim($row[3]);
                        if(trim($row[5])!="phone_code")
                            $country->phone_code = trim($row[5]);
                        $country->active=0;
                        $country->save();
                    } 
                }   
                
            }
        }
        catch(Exception $e){
            die($e->getMessage());
        }
    }
}
