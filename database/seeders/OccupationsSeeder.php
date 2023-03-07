<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OccupationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $list_occupation=[
            "me"=>"Management & Executive",
            "ae"=>"Architecture And Engineering",
            "adesm"=>"Arts, Design, Entertainment, Sports and Media",
            "bm"=>"Building Maintenance",
            "css"=>"Community and Social Service",
            "cs"=>"Computer Science",
            "cw"=>"Construction Workers",
            "eil"=>"Educational Instruction And Library",
            "fff"=>"Farming, Fishing and Forestry",
            "hpt"=>"Healthcare Practitioners and Technicians",
            "imr"=>"Installation, Maintenance and Repair",
            "lo"=>"Legal Occupations",
            "lpss"=>"Life, Physical and Social Science",
            "m"=>"Military",
            "nhs"=>"Nursing and Healthcare Support",
            "oas"=>"Office and Administrative Support",
            "pcs"=>"Personal Care Service",
            "pfss"=>"Police, Firefighter, Security Service",
            "prm"=>"Production and Manufactouring",
            "rsr"=>"Retail Sales and Related",
            "tl"=>"Transportation and Logistic",
            "h"=>"Housekeeper",
            "rp"=>"Retired or Pensioner",
            "s"=>"Student",
            "u"=>"Unemployed",
        ];

        $lista_ocupacion=[
            "me"=>"Gerencia y Ejecutivo",
            "ae"=>"Arquitectura e Ingeniería",
            "adesm"=>"Artes, Diseño, Entretenimiento, Deportes y Medios",
            "bm"=>"Mantenimiento de edificios",
            "css"=>"Comunidad y Servicio Social",
            "cs"=>"Ciencias de la Computación",
            "cw"=>"Trabajadores de la construcción",
            "eil"=>"Instrucción Educativa Y Biblioteca",
            "fff"=>"Agricultura, Pesca y Silvicultura",
            "hpt"=>"Profesionales y Técnicos de la Salud",
            "imr"=>"Instalación, Mantenimiento y Reparación",
            "lo"=>"Ocupaciones Legales",
            "lpss"=>"Ciencias Sociales, Físicas y de la Vida",
            "m"=>"Militar",
            "nhs"=>"Apoyo de enfermería y atención médica",
            "oas"=>"Oficina y Apoyo Administrativo",
            "pcs"=>"Servicio de Atención Personal",
            "pfss"=>"Policía, Bombero, Servicio de Seguridad",
            "prm"=>"Producción y Fabricación",
            "rsr"=>"Ventas Minoristas y Relacionadas",
            "tl"=>"Transporte y Logística",
            "h"=>"Ama de llaves",
            "rp"=>"Jubilado o Pensionado",
            "s"=>"Estudiante",
            "u"=>"Desempleado",
        ];

        foreach($list_occupation as $key=>$value){
            \DB::table('occupations')->insert(
                array(
                    array(
                        'name'=>$list_occupation[$key],
                        'nombre'=>$lista_ocupacion[$key],
                    ),
                )
            );
        }
    }
}
