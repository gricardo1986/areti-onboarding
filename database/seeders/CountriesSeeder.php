<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Storage;

use App\Imports\CountriesImport;
use Maatwebsite\Excel\Facades\Excel;

class CountriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $file = Storage::path('public/paises.csv');

        Excel::import(new CountriesImport, $file);

        $us=\App\Models\Country::where("code","US")->first();
        $us->active='1';
        $us->save();

        $co=\App\Models\Country::where("code","CO")->first();
        $co->active='1';
        $co->save();

        return "Paises Guardado!";
    }
}
