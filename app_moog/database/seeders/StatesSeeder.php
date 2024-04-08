<?php

namespace Database\Seeders;

use App\Models\regions;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = date("Y-m-d H:i:s");

        DB::table("states")->insert([
            [
                "code_state" => 11,
                "name"       => "Rondônia",
                "sticker"    =>"http://www.educadores.diaadia.pr.gov.br/modules/galeria/uploads/11/1409852743bandeirarondonia.png",
                "sigla"       => "RO",
                "code_region"=> 1,
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "code_state" => 12,
                "name"       => "Acre",
                "sticker"    => "http://www.educadores.diaadia.pr.gov.br/modules/galeria/uploads/11/1409852740bandeiraacre.png",
                "sigla"       => "AC",
                "code_region"=> 1,
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "code_state" => 13,
                "name"       => "Amazonas",
                "sticker"    => "http://www.educadores.diaadia.pr.gov.br/modules/galeria/uploads/11/1409852744Bandeira_do_Amazonas.svg.png",
                "sigla"       => "AM",
                "code_region"=> 1,
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "code_state" => 14,
                "name"       => "Roraima",
                "sticker"    =>"http://www.educadores.diaadia.pr.gov.br/modules/galeria/uploads/11/1409852743bandeiraroraima.png",
                "sigla"       => "RR",
                "code_region"=> 1,
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "code_state" => 15,
                "name"       => "Pará",
                "sticker"    =>"http://www.educadores.diaadia.pr.gov.br/modules/galeria/uploads/11/1409852744Bandeira_do_Par.svg.png",
                "sigla"       => "PA",
                "code_region"=> 1,
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "code_state" => 16,
                "name"       => "Amapá",
                "sticker"    => "http://www.educadores.diaadia.pr.gov.br/modules/galeria/uploads/11/1409852744Bandeira_do_Amap.svg.png",
                "sigla"      => "AP",
                "code_region"=> 1,
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "code_state" => 17,
                "name"       => "Tocantins",
                "sticker"    => "http://www.educadores.diaadia.pr.gov.br/modules/galeria/uploads/11/1409852743bandeiratocantins.png",
                "sigla"      => "TO",
                "code_region"=> 1,
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "code_state" => 21,
                "name"       => "Maranhão",
                "sticker"    => "http://www.educadores.diaadia.pr.gov.br/modules/galeria/uploads/11/1409852741bandeiradomaranhao.jpg",
                "sigla"       => "MA",
                "code_region"=> 3,
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "code_state" => 22,
                "name"       => "Piauí",
                "sticker"    =>"http://www.educadores.diaadia.pr.gov.br/modules/galeria/uploads/11/1409852742bandeirapiaui.png",
                "sigla"      => "PI",
                "code_region"=> 3,
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "code_state" => 23,
                "name"       => "Ceará",
                "sticker"    => "http://www.educadores.diaadia.pr.gov.br/modules/galeria/uploads/11/1409852741bandeiraceara.png",
                "sigla"       => "CE",
                "code_region"=> 3,
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "code_state" => 24,
                "name"       => "Rio Grande do Norte",
                "sticker"    =>"http://www.educadores.diaadia.pr.gov.br/modules/galeria/uploads/11/1409852742bandeirariograndedonorte.png",
                "sigla"      => "RN",
                "code_region"=> 3,
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "code_state" => 25,
                "name"       => "Paraíba",
                "sticker"    =>"http://www.educadores.diaadia.pr.gov.br/modules/galeria/uploads/11/1409852742bandeiraparaiba.png",
                "sigla"      => "PB",
                "code_region"=> 3,
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "code_state" => 26,
                "name"       => "Pernambuco",
                "sticker"    =>"http://www.educadores.diaadia.pr.gov.br/modules/galeria/uploads/11/1409852741BandeiradePernambuco.png",
                "sigla"       => "PE",
                "created_at" => $now,
                "code_region"=> 3,
                "updated_at" => $now,
            ], [
                "code_state" => 27,
                "name"       => "Alagoas",
                "sticker"    => "http://www.educadores.diaadia.pr.gov.br/modules/galeria/uploads/11/1409852743Bandeira_de_Alagoas.svg.png",
                "sigla"      => "AL",
                "code_region"=> 3,
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "code_state" => 28,
                "name"       => "Sergipe",
                "sticker"    =>"http://www.educadores.diaadia.pr.gov.br/modules/galeria/uploads/11/1409852743bandeirasergipe.png",
                "sigla"      => "SE",
                "code_region"=> 3,
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "code_state" => 29,
                "name"       => "Bahia",
                "sticker"    => "http://www.educadores.diaadia.pr.gov.br/modules/galeria/uploads/11/1409852741bandeirabahia.png",
                "sigla"       => "BA",
                "code_region"=> 3,
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "code_state" => 31,
                "name"       => "Minas Gerais",
                "sticker"    => "http://www.educadores.diaadia.pr.gov.br/modules/galeria/uploads/11/1409852743Bandeira_de_Minas_Gerais.svg.png",
                "sigla"      => "MG",
                "code_region"=> 4,
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "code_state" => 32,
                "name"       => "Espírito Santo",
                "sticker"    => "http://www.educadores.diaadia.pr.gov.br/modules/galeria/uploads/11/1409852741bandeiraespiritosanto.png",
                "sigla"       => "ES",
                "code_region"=> 4,
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "code_state" => 33,
                "name"       => "Rio de Janeiro",
                "sticker"    => "http://www.educadores.diaadia.pr.gov.br/modules/galeria/uploads/11/1409852742bandeirariodejaneiro.png",
                "sigla"       => "RJ",
                "code_region"=> 4,
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "code_state" => 35,
                "name"       => "São Paulo",
                "sticker"    =>"http://www.educadores.diaadia.pr.gov.br/modules/galeria/uploads/11/1409852744Bandeira_do_estado_de_S_Paulo.svg.png",
                "sigla"       => "SP",
                "code_region"=> 4,
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "code_state" => 41,
                "name"       => "Paraná",
                "sticker"    =>"http://www.educadores.diaadia.pr.gov.br/modules/galeria/uploads/11/1409852742bandeiraparana.png",
                "sigla"       => "PR",
                "created_at" => $now,
                "code_region"=> 2,
                "updated_at" => $now,
            ], [
                "code_state" => 42,
                "name"       => "Santa Catarina",
                "sticker"    =>"http://www.educadores.diaadia.pr.gov.br/modules/galeria/uploads/11/1409852743bandeirasantacatarina.png",
                "sigla"       => "SC",
                "code_region"=> 2,
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "code_state" => 43,
                "name"       => "Rio Grande do Sul",
                "sticker"    =>"http://www.educadores.diaadia.pr.gov.br/modules/galeria/uploads/11/1409852743bandeirariograndedosul.png",
                "sigla"       => "RS",
                "code_region"=> 2,
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "code_state" => 50,
                "name"       => "Mato Grosso do Sul",
                "sticker"    =>"http://www.educadores.diaadia.pr.gov.br/modules/galeria/uploads/11/1409852744bandeira_Mato_Grosso_Sul.png",
                "sigla"       => "MS",
                "code_region"=> 5,
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "code_state" => 51,
                "name"       => "Mato Grosso",
                "sticker"    =>"http://www.educadores.diaadia.pr.gov.br/modules/galeria/uploads/11/1409852742bandeiramatogrosso.png",
                "sigla"       => "MT",
                "code_region"=> 5,
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "code_state" => 52,
                "name"       => "Goiás",
                "sticker"    => "http://www.educadores.diaadia.pr.gov.br/modules/galeria/uploads/11/1409852742bandeiragoias.png",
                "sigla"      => "GO",
                "code_region"=> 5,
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "code_state" => 53,
                "name"       => "Distrito Federal",
                "sticker"    => "http://www.educadores.diaadia.pr.gov.br/modules/galeria/uploads/11/1409852741bandeiradistritofederal.png",
                "sigla"       => "DF",
                "code_region"=> 5,
                "created_at" => $now,
                "updated_at" => $now,
            ],
        ]);
    }
}
