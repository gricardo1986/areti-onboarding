<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomersSubtypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $list_customers_subtype=[
            "bo"=>"Business Owner",
            "em"=>"Employee",
            "hk"=>"Housekepper",
            "pa"=>"Profesional Athlete",
            "psp"=>"Profesional Service Provider (PSP)**",
            "pf"=>"Public Figure (Celebrities)",
            "rp"=>"Retired or Pensioner",
            "se"=>"Self Employed",
            "s"=>"Student",
            "u"=>"Unemployed",
        ];

        $lista_clientes_subtipo=[
            "bo"=>"Propietario de empresa",
            "em"=>"Empleado",
            "hk"=>"Ama de llaves",
            "pa"=>"Deportista Profesional",
            "psp"=>"Proveedor de servicios profesionales (PSP)**",
            "pf"=>"Figura Pública (Celebridades)",
            "rp"=>"Jubilado o Pensionado",
            "se"=>"Autónomo",
            "s"=>"Estudiante",
            "u"=>"Desempleado",
        ];

        foreach($list_customers_subtype as $key=>$value){
            \DB::table('customers_subtype')->insert(
                array(
                    array(
                        'name'=>$list_customers_subtype[$key],
                        'nombre'=>$lista_clientes_subtipo[$key],
                    ),
                )
            );
        }
    }
}
