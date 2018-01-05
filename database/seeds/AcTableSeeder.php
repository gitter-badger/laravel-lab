<?php

use Illuminate\Database\Seeder;

class AcTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ac')->insert([
            'id'            => 1,
            'cidade'        => 'Rio Branco',
            'logradouro'    => '20 de Novembro',
            'bairro'        => 'Sobral',
            'cep'           => '69903-695',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 2,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'A',
            'bairro'        => 'Floresta',
            'cep'           => '69906-350',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 3,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'A',
            'bairro'        => 'Terminal Cadeia Velha',
            'cep'           => '69900-520',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 4,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'A',
            'bairro'        => 'Jardim de Alah',
            'cep'           => '69911-290',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 5,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'A',
            'bairro'        => 'Manoel Julião',
            'cep'           => '69912-680',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 6,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'A',
            'bairro'        => 'João Eduardo',
            'cep'           => '69904-665',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 7,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Abacate',
            'bairro'        => 'Morada do Sol',
            'cep'           => '69910-310',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 8,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Abelhas',
            'bairro'        => 'Santa Quitéria',
            'cep'           => '69914-370',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 9,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Absolon de Almeida',
            'bairro'        => 'Cerâmica',
            'cep'           => '69900-430',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 10,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'AC-040',
            'bairro'        => 'Vila Acre',
            'cep'           => '69902-450',
            'tp_logradouro' => 'Rodovia',
        ]);

        DB::table('ac')->insert([
            'id'            => 11,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'AC-040',
            'bairro'        => 'Triângulo',
            'cep'           => '69901-365',
            'tp_logradouro' => 'Rodovia',
        ]);

        DB::table('ac')->insert([
            'id'            => 12,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'AC-040',
            'bairro'        => 'Areal',
            'cep'           => '69902-350',
            'tp_logradouro' => 'Rodovia',
        ]);

        DB::table('ac')->insert([
            'id'            => 13,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'AC-040',
            'bairro'        => 'Triângulo',
            'cep'           => '69902-060',
            'tp_logradouro' => 'Rodovia',
        ]);

        DB::table('ac')->insert([
            'id'            => 14,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'AC-040',
            'bairro'        => 'Corrente',
            'cep'           => '69902-260',
            'tp_logradouro' => 'Rodovia',
        ]);

        DB::table('ac')->insert([
            'id'            => 15,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'AC-040',
            'bairro'        => 'Seis de Agosto',
            'cep'           => '69901-180',
            'tp_logradouro' => 'Rodovia',
        ]);

        DB::table('ac')->insert([
            'id'            => 16,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Acácias',
            'bairro'        => 'Tropical',
            'cep'           => '69910-550',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 17,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Açaí',
            'bairro'        => 'Chácara Ipê',
            'cep'           => '69911-710',
            'tp_logradouro' => 'Alameda',
        ]);

        DB::table('ac')->insert([
            'id'            => 18,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Acre',
            'bairro'        => 'Taquari',
            'cep'           => '69902-240',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 19,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Acre',
            'bairro'        => 'Aeroporto Velho',
            'cep'           => '69903-520',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 20,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Açucenas',
            'bairro'        => 'Primavera',
            'cep'           => '69911-550',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 21,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Adalberto Sena',
            'bairro'        => 'Vila Ivonete',
            'cep'           => '69918-425',
            'tp_logradouro' => 'Conjunto',
        ]);

        DB::table('ac')->insert([
            'id'            => 22,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Adalberto Sena',
            'bairro'        => 'Plácido de Castro',
            'cep'           => '69903-180',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 23,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Adalcides Gallo',
            'bairro'        => 'Plácido de Castro',
            'cep'           => '69903-010',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 24,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Adolfo Barbosa Leite',
            'bairro'        => 'Quinze',
            'cep'           => '69901-240',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 25,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Afonso Amoedo',
            'bairro'        => 'Estação Experimental',
            'cep'           => '69912-410',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 26,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Ajuricaba',
            'bairro'        => 'Capoeira',
            'cep'           => '69910-110',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 27,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Alagoas',
            'bairro'        => 'Bosque',
            'cep'           => '69908-310',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 28,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Alan Kardec',
            'bairro'        => 'Bosque',
            'cep'           => '69908-170',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 29,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Alegria',
            'bairro'        => 'Primavera',
            'cep'           => '69911-420',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 30,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Alegria',
            'bairro'        => 'Nova Estação',
            'cep'           => '69914-170',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 31,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Alencar',
            'bairro'        => 'Bahia',
            'cep'           => '69904-210',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 32,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Alércio Dias',
            'bairro'        => 'Cadeia Velha',
            'cep'           => '69900-500',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 33,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Alércio Dias',
            'bairro'        => 'Cadeia Velha',
            'cep'           => '69900-490',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 34,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Alexandre Farah',
            'bairro'        => 'Bosque',
            'cep'           => '69909-410',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 35,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Alexandre Leitão',
            'bairro'        => 'Estação Experimental',
            'cep'           => '69912-450',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 36,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Alexandre Lopes',
            'bairro'        => 'Bosque',
            'cep'           => '69909-420',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 37,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Almirante Barbosa',
            'bairro'        => 'Izaura Parente',
            'cep'           => '69907-220',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 38,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Almirante Jaceguai',
            'bairro'        => 'Izaura Parente',
            'cep'           => '69907-270',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 39,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Aluízio Bezerra',
            'bairro'        => 'Plácido de Castro',
            'cep'           => '69903-080',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 40,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Álvaro César',
            'bairro'        => 'João Eduardo',
            'cep'           => '69904-130',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 41,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Álvaro Dantas',
            'bairro'        => 'Aviário',
            'cep'           => '69909-310',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 42,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Alvorada',
            'bairro'        => 'Bosque',
            'cep'           => '69909-380',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 43,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Alvoredo',
            'bairro'        => 'Palheiral',
            'cep'           => '69903-750',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 44,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Amapá',
            'bairro'        => 'Cerâmica',
            'cep'           => '69900-270',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 45,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Amazonas',
            'bairro'        => 'Aviário',
            'cep'           => '69910-700',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 46,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Amazônia',
            'bairro'        => 'Cerâmica',
            'cep'           => '69900-365',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 47,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Amélia Araripe',
            'bairro'        => 'Aviário',
            'cep'           => '69909-190',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 48,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Amizade',
            'bairro'        => 'Taquari',
            'cep'           => '69902-230',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 49,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Ana Neri',
            'bairro'        => 'João Eduardo',
            'cep'           => '69904-080',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 50,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Antimary',
            'bairro'        => 'Aviário',
            'cep'           => '69909-260',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 51,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Antônio Boto',
            'bairro'        => 'Aeroporto Velho',
            'cep'           => '69903-490',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 52,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Antônio Camelo',
            'bairro'        => 'Bosque',
            'cep'           => '69908-290',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 53,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Antônio da Rocha Viana',
            'bairro'        => 'Vila Ivonete',
            'cep'           => '69914-610',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 54,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Antônio José Nogueira',
            'bairro'        => 'João Eduardo',
            'cep'           => '69904-615',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 55,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Antônio Monteiro',
            'bairro'        => 'Ipase',
            'cep'           => '69909-350',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 56,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Antônio Rocha Viana',
            'bairro'        => 'Alegria',
            'cep'           => '69908-560',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 57,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Antunes de Alencar',
            'bairro'        => 'Bosque',
            'cep'           => '69908-220',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 58,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Antúrios',
            'bairro'        => 'Adalberto Aragão',
            'cep'           => '69910-630',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 59,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Apucarana',
            'bairro'        => 'João Eduardo',
            'cep'           => '69904-010',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 60,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Aquarela',
            'bairro'        => 'Santa Quitéria',
            'cep'           => '69914-340',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 61,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Araras',
            'bairro'        => 'Chácara Ipê',
            'cep'           => '69911-770',
            'tp_logradouro' => 'Alameda',
        ]);

        DB::table('ac')->insert([
            'id'            => 62,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Ari Rodrigues',
            'bairro'        => 'Abrahão Alab',
            'cep'           => '69907-190',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 63,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Ari Rodrigues',
            'bairro'        => 'Aeroporto Velho',
            'cep'           => '69903-560',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 64,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Arlindo Leal',
            'bairro'        => 'Centro',
            'cep'           => '69908-040',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 65,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Arueira',
            'bairro'        => 'Calafate',
            'cep'           => '69905-820',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 66,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Atenas',
            'bairro'        => 'Jardim Europa',
            'cep'           => '69911-140',
            'tp_logradouro' => 'Alameda',
        ]);

        DB::table('ac')->insert([
            'id'            => 67,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Augusto Monteiro',
            'bairro'        => 'Quinze',
            'cep'           => '69901-230',
            'tp_logradouro' => 'Boulevard',
        ]);

        DB::table('ac')->insert([
            'id'            => 68,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Austrália',
            'bairro'        => 'Jardim Europa',
            'cep'           => '69911-160',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 69,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Aviário',
            'bairro'        => 'Aviário',
            'cep'           => '69909-170',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 70,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Azaléas',
            'bairro'        => 'Chácara Ipê',
            'cep'           => '69911-680',
            'tp_logradouro' => 'Alameda',
        ]);

        DB::table('ac')->insert([
            'id'            => 71,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Azeitona',
            'bairro'        => 'Morada do Sol',
            'cep'           => '69910-250',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 72,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Aziz',
            'bairro'        => 'Quinze',
            'cep'           => '69901-300',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 73,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'B',
            'bairro'        => 'Floresta',
            'cep'           => '69906-210',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 74,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'B',
            'bairro'        => 'João Eduardo',
            'cep'           => '69904-670',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 75,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'B',
            'bairro'        => 'Manoel Julião',
            'cep'           => '69912-660',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 76,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'B',
            'bairro'        => 'Jardim de Alah',
            'cep'           => '69911-300',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 77,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'B',
            'bairro'        => 'Terminal Cadeia Velha',
            'cep'           => '69900-530',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 78,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'B',
            'bairro'        => 'São Francisco',
            'cep'           => '69907-320',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 79,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'B',
            'bairro'        => 'Bahia',
            'cep'           => '69904-330',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 80,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Baguary',
            'bairro'        => 'Taquari',
            'cep'           => '69902-220',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 81,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Baguary',
            'bairro'        => 'Taquari',
            'cep'           => '69902-210',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 82,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Baixa Verde',
            'bairro'        => 'Cadeia Nova',
            'cep'           => '69901-490',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 83,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Baixa Verde',
            'bairro'        => 'Taquari',
            'cep'           => '69902-180',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 84,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Bandeira',
            'bairro'        => 'Centro',
            'cep'           => '69900-050',
            'tp_logradouro' => 'Praça',
        ]);

        DB::table('ac')->insert([
            'id'            => 85,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Barão do Rio Branco',
            'bairro'        => 'Bosque',
            'cep'           => '69908-340',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 86,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Barbosa Lima',
            'bairro'        => 'Base',
            'cep'           => '69908-430',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 87,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Barcelona',
            'bairro'        => 'Jardim Europa',
            'cep'           => '69911-250',
            'tp_logradouro' => 'Alameda',
        ]);

        DB::table('ac')->insert([
            'id'            => 88,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Barra do Sol',
            'bairro'        => 'Cadeia Nova',
            'cep'           => '69901-460',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 89,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Bartolomeu Bueno',
            'bairro'        => 'Bosque',
            'cep'           => '69908-360',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 90,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Bartolomeu Dias',
            'bairro'        => 'Bosque',
            'cep'           => '69909-450',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 91,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Beija-Flor',
            'bairro'        => 'Plácido de Castro',
            'cep'           => '69903-050',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 92,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Beija-Flor',
            'bairro'        => 'Chácara Ipê',
            'cep'           => '69911-590',
            'tp_logradouro' => 'Alameda',
        ]);

        DB::table('ac')->insert([
            'id'            => 93,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Beira-Rio',
            'bairro'        => 'Taquari',
            'cep'           => '69902-250',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 94,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Beira-Rio',
            'bairro'        => 'Cadeia Nova',
            'cep'           => '69901-450',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 95,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Beira-Rio',
            'bairro'        => 'Conquista',
            'cep'           => '69914-670',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 96,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Bela Vista',
            'bairro'        => 'Floresta',
            'cep'           => '69906-370',
            'tp_logradouro' => 'Conjunto',
        ]);

        DB::table('ac')->insert([
            'id'            => 97,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Bela Vista',
            'bairro'        => 'Bosque',
            'cep'           => '69908-280',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 98,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Belém',
            'bairro'        => 'Nova Estação',
            'cep'           => '69907-635',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 99,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Bélgica',
            'bairro'        => 'Jardim Europa',
            'cep'           => '69911-110',
            'tp_logradouro' => 'Alameda',
        ]);

        DB::table('ac')->insert([
            'id'            => 100,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Belo Horizonte',
            'bairro'        => 'Ivete Vargas',
            'cep'           => '69906-435',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 101,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Bem-te-vi',
            'bairro'        => 'Chácara Ipê',
            'cep'           => '69911-660',
            'tp_logradouro' => 'Alameda',
        ]);

        DB::table('ac')->insert([
            'id'            => 102,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Benjamim Constant',
            'bairro'        => 'Centro',
            'cep'           => '69908-520',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 103,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Benjamim Constant',
            'bairro'        => 'Centro',
            'cep'           => '69900-160',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 104,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Benjamim Constant',
            'bairro'        => 'Cerâmica',
            'cep'           => '69900-350',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 105,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Beny Manuela',
            'bairro'        => 'Aviário',
            'cep'           => '69909-330',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 106,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Bertioga',
            'bairro'        => 'Vila Ivonete',
            'cep'           => '69914-570',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 107,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Betel',
            'bairro'        => 'Floresta',
            'cep'           => '69906-231',
            'tp_logradouro' => 'Vila',
        ]);

        DB::table('ac')->insert([
            'id'            => 108,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Blumenau',
            'bairro'        => 'Bahia',
            'cep'           => '69904-250',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 109,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Boa Viagem',
            'bairro'        => 'Primavera',
            'cep'           => '69911-430',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 110,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Boa Vista',
            'bairro'        => 'Estação Experimental',
            'cep'           => '69912-350',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 111,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Boa Vista',
            'bairro'        => 'Chácara Ipê',
            'cep'           => '69911-875',
            'tp_logradouro' => 'Alameda',
        ]);

        DB::table('ac')->insert([
            'id'            => 112,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Boa Vista',
            'bairro'        => 'Ivete Vargas',
            'cep'           => '69906-100',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 113,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Boa Vista',
            'bairro'        => 'Aviário',
            'cep'           => '69910-710',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 114,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Bodocó',
            'bairro'        => 'Cadeia Nova',
            'cep'           => '69901-560',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 115,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Bom Destino',
            'bairro'        => 'Izaura Parente',
            'cep'           => '69907-260',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 116,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Bom Jesus',
            'bairro'        => 'Vila Acre',
            'cep'           => '69902-451',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 117,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Bom Retiro',
            'bairro'        => 'Primavera',
            'cep'           => '69911-410',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 118,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Bosque',
            'bairro'        => 'Estação Experimental',
            'cep'           => '69912-360',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 119,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Botafogo',
            'bairro'        => 'Santa Quitéria',
            'cep'           => '69914-360',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 120,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'BR-364',
            'bairro'        => 'Distrito Industrial',
            'cep'           => '69914-220',
            'tp_logradouro' => 'Rodovia',
        ]);

        DB::table('ac')->insert([
            'id'            => 121,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Brasil',
            'bairro'        => 'Centro',
            'cep'           => '69900-100',
            'tp_logradouro' => 'Avenida',
        ]);

        DB::table('ac')->insert([
            'id'            => 122,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Brasil',
            'bairro'        => 'Base',
            'cep'           => '69908-670',
            'tp_logradouro' => 'Avenida',
        ]);

        DB::table('ac')->insert([
            'id'            => 123,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Buriti',
            'bairro'        => 'Chácara Ipê',
            'cep'           => '69911-740',
            'tp_logradouro' => 'Alameda',
        ]);

        DB::table('ac')->insert([
            'id'            => 124,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Buriti',
            'bairro'        => 'Nova Estação',
            'cep'           => '69914-100',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 125,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'C',
            'bairro'        => 'Palheiral',
            'cep'           => '69903-780',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 126,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'C',
            'bairro'        => 'Floresta',
            'cep'           => '69906-220',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 127,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'C',
            'bairro'        => 'Terminal Cadeia Velha',
            'cep'           => '69900-540',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 128,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'C',
            'bairro'        => 'São Francisco',
            'cep'           => '69907-300',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 129,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'C',
            'bairro'        => 'Manoel Julião',
            'cep'           => '69912-670',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 130,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'C',
            'bairro'        => 'Bahia Nova',
            'cep'           => '69903-545',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 131,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'C',
            'bairro'        => 'João Eduardo',
            'cep'           => '69904-620',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 132,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'C',
            'bairro'        => 'Jardim de Alah',
            'cep'           => '69911-310',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 133,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'C',
            'bairro'        => 'Aeroporto Velho',
            'cep'           => '69903-540',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 134,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'C',
            'bairro'        => 'Bahia',
            'cep'           => '69904-310',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 135,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Cabanelas',
            'bairro'        => 'Seis de Agosto',
            'cep'           => '69901-090',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 136,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Cacoal',
            'bairro'        => 'Palheiral',
            'cep'           => '69903-730',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 137,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Calafate',
            'bairro'        => 'Esperança',
            'cep'           => '69905-800',
            'tp_logradouro' => 'Estrada',
        ]);

        DB::table('ac')->insert([
            'id'            => 138,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Camburiú',
            'bairro'        => 'Vila Ivonete',
            'cep'           => '69914-620',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 139,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Camélias',
            'bairro'        => 'Primavera',
            'cep'           => '69911-510',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 140,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Campo do Rio Branco',
            'bairro'        => 'Capoeira',
            'cep'           => '69910-070',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 141,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Campo Grande',
            'bairro'        => 'João Eduardo',
            'cep'           => '69904-120',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 142,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Campo Novo',
            'bairro'        => 'Plácido de Castro',
            'cep'           => '69903-170',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 143,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Canário',
            'bairro'        => 'Chácara Ipê',
            'cep'           => '69911-670',
            'tp_logradouro' => 'Alameda',
        ]);

        DB::table('ac')->insert([
            'id'            => 144,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Canindé',
            'bairro'        => 'Izaura Parente',
            'cep'           => '69907-240',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 145,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Capixaba',
            'bairro'        => 'João Eduardo',
            'cep'           => '69904-060',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 146,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Carlos Santos',
            'bairro'        => 'João Eduardo',
            'cep'           => '69904-150',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 147,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Carmópolis',
            'bairro'        => 'Abrahão Alab',
            'cep'           => '69907-060',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 148,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Carneiro Leão',
            'bairro'        => 'Bela Vista',
            'cep'           => '69906-425',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 149,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Casa Nova',
            'bairro'        => 'São Francisco',
            'cep'           => '69907-321',
            'tp_logradouro' => 'Conjunto',
        ]);

        DB::table('ac')->insert([
            'id'            => 150,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Castelo Branco',
            'bairro'        => 'Floresta',
            'cep'           => '69906-390',
            'tp_logradouro' => 'Conjunto',
        ]);

        DB::table('ac')->insert([
            'id'            => 151,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Castro Alves',
            'bairro'        => 'Bosque',
            'cep'           => '69908-060',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 152,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Castro Alves',
            'bairro'        => 'Nova Estação',
            'cep'           => '69914-150',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 153,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Catraeiros',
            'bairro'        => 'Centro',
            'cep'           => '69908-000',
            'tp_logradouro' => 'Praça',
        ]);

        DB::table('ac')->insert([
            'id'            => 154,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Catumbi',
            'bairro'        => 'Mascarenhas de Moraes',
            'cep'           => '69906-200',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 155,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Caxias',
            'bairro'        => 'Quinze',
            'cep'           => '69901-280',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 156,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Ceará',
            'bairro'        => 'Base',
            'cep'           => '69908-690',
            'tp_logradouro' => 'Avenida',
        ]);

        DB::table('ac')->insert([
            'id'            => 157,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Ceará',
            'bairro'        => 'Abrahão Alab',
            'cep'           => '69907-000',
            'tp_logradouro' => 'Avenida',
        ]);

        DB::table('ac')->insert([
            'id'            => 158,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Ceará',
            'bairro'        => 'Cadeia Velha',
            'cep'           => '69912-490',
            'tp_logradouro' => 'Avenida',
        ]);

        DB::table('ac')->insert([
            'id'            => 159,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Ceará',
            'bairro'        => 'Centro',
            'cep'           => '69910-130',
            'tp_logradouro' => 'Avenida',
        ]);

        DB::table('ac')->insert([
            'id'            => 160,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Ceará',
            'bairro'        => 'Sobral',
            'cep'           => '69903-670',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 161,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Ceará',
            'bairro'        => 'Cadeia Velha',
            'cep'           => '69900-460',
            'tp_logradouro' => 'Avenida',
        ]);

        DB::table('ac')->insert([
            'id'            => 162,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Ceará',
            'bairro'        => 'Aviário',
            'cep'           => '69909-770',
            'tp_logradouro' => 'Avenida',
        ]);

        DB::table('ac')->insert([
            'id'            => 163,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Cearense',
            'bairro'        => 'Seis de Agosto',
            'cep'           => '69901-100',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 164,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Centauro',
            'bairro'        => 'Ivete Vargas',
            'cep'           => '69906-090',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 165,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Central',
            'bairro'        => 'Bosque',
            'cep'           => '69909-540',
            'tp_logradouro' => 'Avenida',
        ]);

        DB::table('ac')->insert([
            'id'            => 166,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Chico Mendes',
            'bairro'        => 'Geraldo Fleming',
            'cep'           => '69914-010',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 167,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Chile',
            'bairro'        => 'Cerâmica',
            'cep'           => '69900-340',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 168,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Cinco',
            'bairro'        => 'Tancredo Neves',
            'cep'           => '69918-070',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 169,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Cinco',
            'bairro'        => 'Bahia Nova',
            'cep'           => '69904-410',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 170,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Ciríaco',
            'bairro'        => 'Aviário',
            'cep'           => '69909-180',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 171,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Cirilo',
            'bairro'        => 'Adalberto Aragão',
            'cep'           => '69910-650',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 172,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Coelho Ramos',
            'bairro'        => 'Cadeia Nova',
            'cep'           => '69901-580',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 173,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Coimbra',
            'bairro'        => 'Jardim Europa',
            'cep'           => '69911-270',
            'tp_logradouro' => 'Alameda',
        ]);

        DB::table('ac')->insert([
            'id'            => 174,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Colômbia',
            'bairro'        => 'Bosque',
            'cep'           => '69909-700',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 175,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Colombo',
            'bairro'        => 'Capoeira',
            'cep'           => '69910-090',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 176,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Comara',
            'bairro'        => 'Seis de Agosto',
            'cep'           => '69901-190',
            'tp_logradouro' => 'Beco',
        ]);

        DB::table('ac')->insert([
            'id'            => 177,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Conde D\' Eu',
            'bairro'        => 'Estação Experimental',
            'cep'           => '69912-310',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 178,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Conde Francisco',
            'bairro'        => 'Bosque',
            'cep'           => '69909-590',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 179,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Conquista',
            'bairro'        => 'Manoel Julião',
            'cep'           => '69912-700',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 180,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Copacabana',
            'bairro'        => 'Centro',
            'cep'           => '69908-510',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 181,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Copacabana',
            'bairro'        => 'Vila Ivonete',
            'cep'           => '69914-380',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 182,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Coronel Alexandrino',
            'bairro'        => 'Bosque',
            'cep'           => '69909-730',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 183,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Coronel Brandão',
            'bairro'        => 'Bosque',
            'cep'           => '69909-480',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 184,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Coronel Brandão',
            'bairro'        => 'Bosque',
            'cep'           => '69909-470',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 185,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Coronel João Câncio',
            'bairro'        => 'Estação Experimental',
            'cep'           => '69912-440',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 186,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Cravos',
            'bairro'        => 'Primavera',
            'cep'           => '69911-490',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 187,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Cruzeiro do Sul',
            'bairro'        => 'Base',
            'cep'           => '69908-470',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 188,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Cruzeiro do Sul',
            'bairro'        => 'Novo Horizonte',
            'cep'           => '69906-450',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 189,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Cruzeiro do Sul',
            'bairro'        => 'Aeroporto Velho',
            'cep'           => '69903-430',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 190,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Cunha Matos',
            'bairro'        => 'Seis de Agosto',
            'cep'           => '69901-170',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 191,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Cupuaçú',
            'bairro'        => 'Morada do Sol',
            'cep'           => '69910-280',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 192,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Curió',
            'bairro'        => 'Chácara Ipê',
            'cep'           => '69911-810',
            'tp_logradouro' => 'Alameda',
        ]);

        DB::table('ac')->insert([
            'id'            => 193,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Custódio Ferreira',
            'bairro'        => 'Placas',
            'cep'           => '69918-410',
            'tp_logradouro' => 'Estrada',
        ]);

        DB::table('ac')->insert([
            'id'            => 194,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Custódio Freire',
            'bairro'        => 'Bosque',
            'cep'           => '69909-460',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 195,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'D',
            'bairro'        => 'Manoel Julião',
            'cep'           => '69912-665',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 196,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'D',
            'bairro'        => 'Floresta',
            'cep'           => '69906-230',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 197,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'D',
            'bairro'        => 'Jardim de Alah',
            'cep'           => '69911-320',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 198,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'D',
            'bairro'        => 'Terminal Cadeia Velha',
            'cep'           => '69900-550',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 199,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'D',
            'bairro'        => 'São Francisco',
            'cep'           => '69907-310',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 200,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'D',
            'bairro'        => 'Aeroporto Velho',
            'cep'           => '69903-550',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 201,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'da Alegria',
            'bairro'        => 'Bosque',
            'cep'           => '69908-370',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 202,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'da Paz',
            'bairro'        => 'João Eduardo',
            'cep'           => '69904-645',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 203,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'da Paz',
            'bairro'        => 'Nova Estação',
            'cep'           => '69907-625',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 204,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'da Solidão',
            'bairro'        => 'Novo Horizonte',
            'cep'           => '69906-455',
            'tp_logradouro' => 'Beco',
        ]);

        DB::table('ac')->insert([
            'id'            => 205,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'da Usina',
            'bairro'        => 'Aviário',
            'cep'           => '69910-730',
            'tp_logradouro' => 'Estrada',
        ]);

        DB::table('ac')->insert([
            'id'            => 206,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Dália',
            'bairro'        => 'Morada do Sol',
            'cep'           => '69910-480',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 207,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Dálias',
            'bairro'        => 'Primavera',
            'cep'           => '69911-530',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 208,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Dama da Noite',
            'bairro'        => 'Tropical',
            'cep'           => '69910-520',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 209,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Daniel de Matos',
            'bairro'        => 'Nova Estação',
            'cep'           => '69907-610',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 210,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'das Acácias',
            'bairro'        => 'Chácara Ipê',
            'cep'           => '69911-865',
            'tp_logradouro' => 'Alameda',
        ]);

        DB::table('ac')->insert([
            'id'            => 211,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Dez',
            'bairro'        => 'Bahia Nova',
            'cep'           => '69904-460',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 212,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Dez',
            'bairro'        => 'Tancredo Neves',
            'cep'           => '69918-120',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 213,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Dez de Julho',
            'bairro'        => 'Placas',
            'cep'           => '69914-750',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 214,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Dez de Junho',
            'bairro'        => 'Tropical',
            'cep'           => '69910-500',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 215,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Dezenove',
            'bairro'        => 'Tancredo Neves',
            'cep'           => '69918-230',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 216,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Dezenove de Novembro',
            'bairro'        => 'Bosque',
            'cep'           => '69909-600',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 217,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Dezesseis',
            'bairro'        => 'Palheiral',
            'cep'           => '69903-760',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 218,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Dezesseis',
            'bairro'        => 'Tancredo Neves',
            'cep'           => '69918-180',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 219,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Dezesseis',
            'bairro'        => 'Bahia Nova',
            'cep'           => '69904-520',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 220,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Dezesseis de Outubro',
            'bairro'        => 'Quinze',
            'cep'           => '69901-200',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 221,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Dezessete',
            'bairro'        => 'Tancredo Neves',
            'cep'           => '69918-190',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 222,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Dezessete',
            'bairro'        => 'Bahia Nova',
            'cep'           => '69904-530',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 223,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Dezoito',
            'bairro'        => 'Palheiral',
            'cep'           => '69903-790',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 224,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Dezoito',
            'bairro'        => 'Tancredo Neves',
            'cep'           => '69918-220',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 225,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Dezoito',
            'bairro'        => 'Bahia Nova',
            'cep'           => '69904-540',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 226,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Diamantina',
            'bairro'        => 'Cadeia Nova',
            'cep'           => '69901-540',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 227,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Dias Martins',
            'bairro'        => 'Estação Experimental',
            'cep'           => '69912-400',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 228,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Dias Martins',
            'bairro'        => 'Estação Experimental',
            'cep'           => '69912-470',
            'tp_logradouro' => 'Estrada',
        ]);

        DB::table('ac')->insert([
            'id'            => 229,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Dias Martins',
            'bairro'        => 'Chácara Ipê',
            'cep'           => '69911-845',
            'tp_logradouro' => 'Estrada',
        ]);

        DB::table('ac')->insert([
            'id'            => 230,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Dias Martins',
            'bairro'        => 'Jardim de Alah',
            'cep'           => '69911-840',
            'tp_logradouro' => 'Estrada',
        ]);

        DB::table('ac')->insert([
            'id'            => 231,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Dinamarca',
            'bairro'        => 'Jardim Europa',
            'cep'           => '69911-070',
            'tp_logradouro' => 'Alameda',
        ]);

        DB::table('ac')->insert([
            'id'            => 232,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Distrito Industrial Zona A',
            'bairro'        => 'Distrito Industrial',
            'cep'           => '69917-100',
            'tp_logradouro' => 'Conjunto',
        ]);

        DB::table('ac')->insert([
            'id'            => 233,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Distrito Industrial Zona B',
            'bairro'        => 'Distrito Industrial',
            'cep'           => '69917-200',
            'tp_logradouro' => 'Conjunto',
        ]);

        DB::table('ac')->insert([
            'id'            => 234,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Distrito Industrial Zona C',
            'bairro'        => 'Distrito Industrial',
            'cep'           => '69917-300',
            'tp_logradouro' => 'Conjunto',
        ]);

        DB::table('ac')->insert([
            'id'            => 235,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'do Calafate',
            'bairro'        => 'Calafate',
            'cep'           => '69905-801',
            'tp_logradouro' => 'Estrada',
        ]);

        DB::table('ac')->insert([
            'id'            => 236,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Dois',
            'bairro'        => 'Tancredo Neves',
            'cep'           => '69918-010',
            'tp_logradouro' => 'Avenida',
        ]);

        DB::table('ac')->insert([
            'id'            => 237,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Dois',
            'bairro'        => 'Bahia Nova',
            'cep'           => '69904-380',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 238,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Dois',
            'bairro'        => 'Tancredo Neves',
            'cep'           => '69918-040',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 239,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Dois de Abril',
            'bairro'        => 'Placas',
            'cep'           => '69914-770',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 240,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Dois de Abril',
            'bairro'        => 'Tancredo Neves',
            'cep'           => '69918-245',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 241,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Dom Bosco',
            'bairro'        => 'Bosque',
            'cep'           => '69909-390',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 242,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Dom Bosco',
            'bairro'        => 'João Eduardo',
            'cep'           => '69904-640',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 243,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Dom Giocondo',
            'bairro'        => 'Plácido de Castro',
            'cep'           => '69903-150',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 244,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Dom Giocondo',
            'bairro'        => 'Bosque',
            'cep'           => '69908-080',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 245,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Dom Pedro I',
            'bairro'        => 'Estação Experimental',
            'cep'           => '69907-510',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 246,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Dom Pedro II',
            'bairro'        => 'Bosque',
            'cep'           => '69908-130',
            'tp_logradouro' => 'Conjunto',
        ]);

        DB::table('ac')->insert([
            'id'            => 247,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'dos Engenheiros',
            'bairro'        => 'Estação Experimental',
            'cep'           => '69912-515',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 248,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Dourados',
            'bairro'        => 'Conquista',
            'cep'           => '69914-650',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 249,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Doze',
            'bairro'        => 'Tancredo Neves',
            'cep'           => '69918-140',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 250,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Doze',
            'bairro'        => 'Bahia Nova',
            'cep'           => '69904-480',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 251,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Doze de Junho',
            'bairro'        => 'Placas',
            'cep'           => '69914-840',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 252,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Doze de Outubro',
            'bairro'        => 'Placas',
            'cep'           => '69914-800',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 253,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Doze de Outubro',
            'bairro'        => 'Seis de Agosto',
            'cep'           => '69901-120',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 254,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Duque de Caxias',
            'bairro'        => 'Estação Experimental',
            'cep'           => '69912-300',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 255,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'E',
            'bairro'        => 'Bahia',
            'cep'           => '69904-290',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 256,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'E',
            'bairro'        => 'Floresta',
            'cep'           => '69906-240',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 257,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'E',
            'bairro'        => 'Terminal Cadeia Velha',
            'cep'           => '69900-560',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 258,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'E',
            'bairro'        => 'Jardim de Alah',
            'cep'           => '69911-330',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 259,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Éden',
            'bairro'        => 'Seis de Agosto',
            'cep'           => '69901-130',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 260,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Edson Mendes',
            'bairro'        => 'Seis de Agosto',
            'cep'           => '69901-040',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 261,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Eduardo Assmar',
            'bairro'        => 'Seis de Agosto',
            'cep'           => '69901-160',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 262,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Educandos',
            'bairro'        => 'Vila Ivonete',
            'cep'           => '69914-440',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 263,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Egito',
            'bairro'        => 'Capoeira',
            'cep'           => '69910-040',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 264,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Eldorado',
            'bairro'        => 'Bahia',
            'cep'           => '69904-270',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 265,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Eletra',
            'bairro'        => 'Aviário',
            'cep'           => '69909-171',
            'tp_logradouro' => 'Conjunto',
        ]);

        DB::table('ac')->insert([
            'id'            => 266,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Elizabeth',
            'bairro'        => 'Nova Estação',
            'cep'           => '69914-130',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 267,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Epaminondas Jácome',
            'bairro'        => 'Centro',
            'cep'           => '69900-110',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 268,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Epaminondas Jácome',
            'bairro'        => 'Cadeia Velha',
            'cep'           => '69900-115',
            'tp_logradouro' => 'Avenida',
        ]);

        DB::table('ac')->insert([
            'id'            => 269,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Epaminondas Jácome',
            'bairro'        => 'Base',
            'cep'           => '69908-420',
            'tp_logradouro' => 'Avenida',
        ]);

        DB::table('ac')->insert([
            'id'            => 270,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Epaminondas Martins',
            'bairro'        => 'Bosque',
            'cep'           => '69908-320',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 271,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Epitácio Pessoa',
            'bairro'        => 'Izaura Parente',
            'cep'           => '69907-210',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 272,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Equador',
            'bairro'        => 'Cerâmica',
            'cep'           => '69900-310',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 273,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Eros',
            'bairro'        => 'Morada do Sol',
            'cep'           => '69910-410',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 274,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Escócia',
            'bairro'        => 'Jardim Europa',
            'cep'           => '69911-130',
            'tp_logradouro' => 'Alameda',
        ]);

        DB::table('ac')->insert([
            'id'            => 275,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Espanha',
            'bairro'        => 'Jardim Europa',
            'cep'           => '69911-280',
            'tp_logradouro' => 'Alameda',
        ]);

        DB::table('ac')->insert([
            'id'            => 276,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Esperança',
            'bairro'        => 'Nova Estação',
            'cep'           => '69914-080',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 277,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Esperança',
            'bairro'        => 'Cerâmica',
            'cep'           => '69900-360',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 278,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Esperança',
            'bairro'        => 'Esperança',
            'cep'           => '69905-250',
            'tp_logradouro' => 'Conjunto',
        ]);

        DB::table('ac')->insert([
            'id'            => 279,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Esperança II',
            'bairro'        => 'Esperança',
            'cep'           => '69905-400',
            'tp_logradouro' => 'Conjunto',
        ]);

        DB::table('ac')->insert([
            'id'            => 280,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Espírito Santo',
            'bairro'        => 'Bosque',
            'cep'           => '69908-160',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 281,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Estácio de Sá',
            'bairro'        => 'José Augusto',
            'cep'           => '69909-050',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 282,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Estácio de Sá',
            'bairro'        => 'Bahia',
            'cep'           => '69904-320',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 283,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Estado do Acre',
            'bairro'        => 'Base',
            'cep'           => '69908-440',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 284,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Ex-Território',
            'bairro'        => 'José Augusto',
            'cep'           => '69909-160',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 285,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'F',
            'bairro'        => 'Floresta',
            'cep'           => '69906-250',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 286,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'F',
            'bairro'        => 'Manoel Julião',
            'cep'           => '69912-655',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 287,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'F',
            'bairro'        => 'Jardim de Alah',
            'cep'           => '69911-340',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 288,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'F',
            'bairro'        => 'Aeroporto Velho',
            'cep'           => '69903-570',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 289,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'F',
            'bairro'        => 'Bahia',
            'cep'           => '69904-260',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 290,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'F',
            'bairro'        => 'Terminal Cadeia Velha',
            'cep'           => '69900-570',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 291,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Farroupilha',
            'bairro'        => 'Bosque',
            'cep'           => '69908-390',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 292,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Fausto Robalo',
            'bairro'        => 'Centro',
            'cep'           => '69900-140',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 293,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Fausto Robalo',
            'bairro'        => 'Estação Experimental',
            'cep'           => '69912-420',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 294,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Fé de Deus',
            'bairro'        => 'Ivete Vargas',
            'cep'           => '69906-110',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 295,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Feijó',
            'bairro'        => 'Base',
            'cep'           => '69908-480',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 296,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Felicidade',
            'bairro'        => 'Primavera',
            'cep'           => '69911-460',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 297,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Felisbela do Nascimento',
            'bairro'        => 'Capoeira',
            'cep'           => '69910-030',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 298,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Fernando Lira',
            'bairro'        => 'Izaura Parente',
            'cep'           => '69907-280',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 299,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Finlândia',
            'bairro'        => 'Jardim Europa',
            'cep'           => '69911-050',
            'tp_logradouro' => 'Alameda',
        ]);

        DB::table('ac')->insert([
            'id'            => 300,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Flamboyant',
            'bairro'        => 'Chácara Ipê',
            'cep'           => '69911-870',
            'tp_logradouro' => 'Alameda',
        ]);

        DB::table('ac')->insert([
            'id'            => 301,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Flamengo',
            'bairro'        => 'Aviário',
            'cep'           => '69909-240',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 302,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Flaviano',
            'bairro'        => 'João Eduardo',
            'cep'           => '69904-135',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 303,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Flávio Batista',
            'bairro'        => 'Quinze',
            'cep'           => '69901-350',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 304,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Florência Mesquita',
            'bairro'        => 'Vila Ivonete',
            'cep'           => '69914-520',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 305,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Floresta',
            'bairro'        => 'Nova Estação',
            'cep'           => '69914-090',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 306,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Floriano Peixoto',
            'bairro'        => 'Centro',
            'cep'           => '69908-030',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 307,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Fluminense',
            'bairro'        => 'Conquista',
            'cep'           => '69914-640',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 308,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Fonte Nova',
            'bairro'        => 'Geraldo Fleming',
            'cep'           => '69914-040',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 309,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Fontenele Castro',
            'bairro'        => 'Estação Experimental',
            'cep'           => '69912-430',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 310,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Formosa',
            'bairro'        => 'Estação Experimental',
            'cep'           => '69907-590',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 311,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Fortaleza',
            'bairro'        => 'Bahia',
            'cep'           => '69904-360',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 312,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Franca',
            'bairro'        => 'Jardim Europa',
            'cep'           => '69911-040',
            'tp_logradouro' => 'Alameda',
        ]);

        DB::table('ac')->insert([
            'id'            => 313,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Francisco Ferreira da Silva',
            'bairro'        => 'Baixa da Colina',
            'cep'           => '69909-120',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 314,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Francisco Furtado',
            'bairro'        => 'Bosque',
            'cep'           => '69908-260',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 315,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Francisco Mangabeira',
            'bairro'        => 'Bosque',
            'cep'           => '69909-740',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 316,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Francisco Xavier',
            'bairro'        => 'João Eduardo',
            'cep'           => '69904-050',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 317,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Franco Ribeiro',
            'bairro'        => 'Centro',
            'cep'           => '69908-020',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 318,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Frei Caneca',
            'bairro'        => 'Esperança',
            'cep'           => '69905-000',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 319,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Futuro',
            'bairro'        => 'Bosque',
            'cep'           => '69909-530',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 320,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'G',
            'bairro'        => 'Aeroporto Velho',
            'cep'           => '69903-580',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 321,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'G',
            'bairro'        => 'Terminal Cadeia Velha',
            'cep'           => '69900-580',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 322,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'G',
            'bairro'        => 'Jardim de Alah',
            'cep'           => '69911-350',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 323,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'G',
            'bairro'        => 'Floresta',
            'cep'           => '69906-290',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 324,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'G',
            'bairro'        => 'Manoel Julião',
            'cep'           => '69912-675',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 325,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Gabino Bezoro',
            'bairro'        => 'Preventório',
            'cep'           => '69911-820',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 326,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Garças',
            'bairro'        => 'Chácara Ipê',
            'cep'           => '69911-760',
            'tp_logradouro' => 'Alameda',
        ]);

        DB::table('ac')->insert([
            'id'            => 327,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'General Vieira de Melo',
            'bairro'        => 'Floresta',
            'cep'           => '69906-360',
            'tp_logradouro' => 'Alameda',
        ]);

        DB::table('ac')->insert([
            'id'            => 328,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Gênova',
            'bairro'        => 'Jardim Europa',
            'cep'           => '69911-150',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 329,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Geraldo Mesquita',
            'bairro'        => 'Estação Experimental',
            'cep'           => '69907-410',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 330,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Getúlio Vargas',
            'bairro'        => 'Vila Ivonete',
            'cep'           => '69914-000',
            'tp_logradouro' => 'Avenida',
        ]);

        DB::table('ac')->insert([
            'id'            => 331,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Getúlio Vargas',
            'bairro'        => 'Centro',
            'cep'           => '69900-660',
            'tp_logradouro' => 'Avenida',
        ]);

        DB::table('ac')->insert([
            'id'            => 332,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Getúlio Vargas',
            'bairro'        => 'Bosque',
            'cep'           => '69908-650',
            'tp_logradouro' => 'Avenida',
        ]);

        DB::table('ac')->insert([
            'id'            => 333,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Goiás',
            'bairro'        => 'Ivete Vargas',
            'cep'           => '69906-445',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 334,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Gowdevasser Santos',
            'bairro'        => 'Bosque',
            'cep'           => '69908-400',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 335,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Granada',
            'bairro'        => 'Mascarenhas de Moraes',
            'cep'           => '69906-180',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 336,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Granja',
            'bairro'        => 'Aviário',
            'cep'           => '69910-690',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 337,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Graúna',
            'bairro'        => 'Chácara Ipê',
            'cep'           => '69911-780',
            'tp_logradouro' => 'Alameda',
        ]);

        DB::table('ac')->insert([
            'id'            => 338,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Graviola',
            'bairro'        => 'Morada do Sol',
            'cep'           => '69910-300',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 339,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Grêmio Atlético Sampaio',
            'bairro'        => 'José Augusto',
            'cep'           => '69909-040',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 340,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Guajará',
            'bairro'        => 'Vila Ivonete',
            'cep'           => '69914-580',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 341,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Gualter Craveiro',
            'bairro'        => 'Plácido de Castro',
            'cep'           => '69903-090',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 342,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Guanabara',
            'bairro'        => 'João Eduardo',
            'cep'           => '69904-070',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 343,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Guanabara',
            'bairro'        => 'Esperança',
            'cep'           => '69905-200',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 344,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Guaporé',
            'bairro'        => 'Cerâmica',
            'cep'           => '69900-380',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 345,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Guarani',
            'bairro'        => 'Triângulo',
            'cep'           => '69901-345',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 346,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Guarani',
            'bairro'        => 'Aviário',
            'cep'           => '69909-230',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 347,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Guilhermino Bastos',
            'bairro'        => 'Quinze',
            'cep'           => '69901-340',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 348,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Guiomard Santos',
            'bairro'        => 'Bosque',
            'cep'           => '69909-370',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 349,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Guiomard Santos I',
            'bairro'        => 'Bosque',
            'cep'           => '69909-560',
            'tp_logradouro' => 'Conjunto',
        ]);

        DB::table('ac')->insert([
            'id'            => 350,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Guiomard Santos II',
            'bairro'        => 'Bosque',
            'cep'           => '69909-570',
            'tp_logradouro' => 'Conjunto',
        ]);

        DB::table('ac')->insert([
            'id'            => 351,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'H',
            'bairro'        => 'Jardim de Alah',
            'cep'           => '69911-360',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 352,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'H',
            'bairro'        => 'Terminal Cadeia Velha',
            'cep'           => '69900-590',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 353,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'H',
            'bairro'        => 'Floresta',
            'cep'           => '69906-260',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 354,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Halley',
            'bairro'        => 'Adalberto Aragão',
            'cep'           => '69910-610',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 355,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Havaí',
            'bairro'        => 'Sobral',
            'cep'           => '69903-680',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 356,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Henrique Dias',
            'bairro'        => 'Bosque',
            'cep'           => '69908-410',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 357,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Hermínio de Melo',
            'bairro'        => 'Plácido de Castro',
            'cep'           => '69903-130',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 358,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Hernandes Fernandes',
            'bairro'        => 'Quinze',
            'cep'           => '69901-360',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 359,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Hidaldo de Lima',
            'bairro'        => 'Seis de Agosto',
            'cep'           => '69901-050',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 360,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Horizonte',
            'bairro'        => 'Nova Estação',
            'cep'           => '69914-160',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 361,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Hortências',
            'bairro'        => 'Primavera',
            'cep'           => '69911-470',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 362,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Hugo Carneiro',
            'bairro'        => 'Bosque',
            'cep'           => '69908-250',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 363,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'I',
            'bairro'        => 'Morada do Sol',
            'cep'           => '69910-430',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 364,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'I',
            'bairro'        => 'Aeroporto Velho',
            'cep'           => '69903-530',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 365,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'I',
            'bairro'        => 'Terminal Cadeia Velha',
            'cep'           => '69900-600',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 366,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'I',
            'bairro'        => 'Floresta',
            'cep'           => '69906-310',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 367,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Iaco',
            'bairro'        => 'João Eduardo',
            'cep'           => '69904-650',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 368,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Ibiscos',
            'bairro'        => 'Primavera',
            'cep'           => '69911-570',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 369,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Icó',
            'bairro'        => 'Estação Experimental',
            'cep'           => '69907-420',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 370,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Ilson Ribeiro',
            'bairro'        => 'Cadeia Nova',
            'cep'           => '69901-570',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 371,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Independência',
            'bairro'        => 'Baixa da Colina',
            'cep'           => '69909-150',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 372,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Invernada',
            'bairro'        => 'Morada do Sol',
            'cep'           => '69910-220',
            'tp_logradouro' => 'Estrada',
        ]);

        DB::table('ac')->insert([
            'id'            => 373,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Iolanda Lima',
            'bairro'        => 'Plácido de Castro',
            'cep'           => '69903-020',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 374,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Ipanema',
            'bairro'        => 'Vila Ivonete',
            'cep'           => '69914-560',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 375,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Ipase',
            'bairro'        => 'Ipase',
            'cep'           => '69900-220',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 376,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Ipê',
            'bairro'        => 'Chácara Ipê',
            'cep'           => '69911-885',
            'tp_logradouro' => 'Alameda',
        ]);

        DB::table('ac')->insert([
            'id'            => 377,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Ipiranga',
            'bairro'        => 'Plácido de Castro',
            'cep'           => '69903-070',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 378,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Iracema',
            'bairro'        => 'Vila Ivonete',
            'cep'           => '69914-390',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 379,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Irineu Serra',
            'bairro'        => 'Aviário',
            'cep'           => '69909-210',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 380,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Irlanda',
            'bairro'        => 'Jardim Europa',
            'cep'           => '69911-120',
            'tp_logradouro' => 'Alameda',
        ]);

        DB::table('ac')->insert([
            'id'            => 381,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Isaura Parente',
            'bairro'        => 'Bosque',
            'cep'           => '69908-210',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 382,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Isaura Parente',
            'bairro'        => 'Izaura Parente',
            'cep'           => '69907-650',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 383,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Isaura Parente',
            'bairro'        => 'Estação Experimental',
            'cep'           => '69912-605',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 384,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Ita',
            'bairro'        => 'Capoeira',
            'cep'           => '69910-050',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 385,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Itaipú',
            'bairro'        => 'Palheiral',
            'cep'           => '69903-810',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 386,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Itália',
            'bairro'        => 'Jardim Europa',
            'cep'           => '69911-170',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 387,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Itamar Pascoal',
            'bairro'        => 'Vila Ivonete',
            'cep'           => '69914-515',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 388,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Itamaracá',
            'bairro'        => 'Bela Vista',
            'cep'           => '69906-420',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 389,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Itamarati',
            'bairro'        => 'Bahia',
            'cep'           => '69904-200',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 390,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Itapuã',
            'bairro'        => 'Conquista',
            'cep'           => '69914-630',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 391,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Itapuã',
            'bairro'        => 'Vila Ivonete',
            'cep'           => '69914-600',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 392,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'J',
            'bairro'        => 'Terminal Cadeia Velha',
            'cep'           => '69900-610',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 393,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'J',
            'bairro'        => 'Floresta',
            'cep'           => '69906-320',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 394,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Jaburu',
            'bairro'        => 'Chácara Ipê',
            'cep'           => '69911-640',
            'tp_logradouro' => 'Alameda',
        ]);

        DB::table('ac')->insert([
            'id'            => 395,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Jacamim',
            'bairro'        => 'Chácara Ipê',
            'cep'           => '69911-650',
            'tp_logradouro' => 'Alameda',
        ]);

        DB::table('ac')->insert([
            'id'            => 396,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Jaçanã',
            'bairro'        => 'Chácara Ipê',
            'cep'           => '69911-630',
            'tp_logradouro' => 'Alameda',
        ]);

        DB::table('ac')->insert([
            'id'            => 397,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Jaci',
            'bairro'        => 'Chácara Ipê',
            'cep'           => '69911-720',
            'tp_logradouro' => 'Alameda',
        ]);

        DB::table('ac')->insert([
            'id'            => 398,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Jaguari',
            'bairro'        => 'Estação Experimental',
            'cep'           => '69907-490',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 399,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Jaguaribe',
            'bairro'        => 'Estação Experimental',
            'cep'           => '69912-635',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 400,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Jambo',
            'bairro'        => 'Morada do Sol',
            'cep'           => '69910-290',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 401,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Jandaia',
            'bairro'        => 'Estação Experimental',
            'cep'           => '69907-480',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 402,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Japim',
            'bairro'        => 'Chácara Ipê',
            'cep'           => '69911-790',
            'tp_logradouro' => 'Alameda',
        ]);

        DB::table('ac')->insert([
            'id'            => 403,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Jardim América',
            'bairro'        => 'Vila Ivonete',
            'cep'           => '69914-391',
            'tp_logradouro' => 'Conjunto',
        ]);

        DB::table('ac')->insert([
            'id'            => 404,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Jasmin',
            'bairro'        => 'Morada do Sol',
            'cep'           => '69910-450',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 405,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Jasmins',
            'bairro'        => 'Chácara Ipê',
            'cep'           => '69911-690',
            'tp_logradouro' => 'Alameda',
        ]);

        DB::table('ac')->insert([
            'id'            => 406,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Jerusalém',
            'bairro'        => 'João Eduardo',
            'cep'           => '69904-653',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 407,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'João Chalub',
            'bairro'        => 'Manoel Julião',
            'cep'           => '69912-645',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 408,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'João de Oliveira Rola',
            'bairro'        => 'Quinze',
            'cep'           => '69901-330',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 409,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'João Donato',
            'bairro'        => 'Ipase',
            'cep'           => '69909-340',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 410,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'João Gomes',
            'bairro'        => 'Plácido de Castro',
            'cep'           => '69903-120',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 411,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'João Onofre',
            'bairro'        => 'Bosque',
            'cep'           => '69908-300',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 412,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'João Viana',
            'bairro'        => 'Nova Estação',
            'cep'           => '69914-030',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 413,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'João XXIII',
            'bairro'        => 'Bosque',
            'cep'           => '69908-070',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 414,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Joaquim Chaves',
            'bairro'        => 'Aviário',
            'cep'           => '69910-660',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 415,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Joaquim M. Macedo',
            'bairro'        => 'São Francisco',
            'cep'           => '69909-031',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 416,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'José Cunha',
            'bairro'        => 'Triângulo',
            'cep'           => '69902-050',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 417,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'José de Melo',
            'bairro'        => 'Bosque',
            'cep'           => '69908-330',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 418,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'José Galdino',
            'bairro'        => 'Bosque',
            'cep'           => '69909-760',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 419,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'José Magalhães',
            'bairro'        => 'Santa Quitéria',
            'cep'           => '69914-320',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 420,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'José Maria Rios',
            'bairro'        => 'Vila Ivonete',
            'cep'           => '69914-470',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 421,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Juarez Távora',
            'bairro'        => 'Tancredo Neves',
            'cep'           => '69918-400',
            'tp_logradouro' => 'Estrada',
        ]);

        DB::table('ac')->insert([
            'id'            => 422,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Júlio Camilo de Oliveira',
            'bairro'        => 'Quinze',
            'cep'           => '69901-210',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 423,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Júlio César',
            'bairro'        => 'Cerâmica',
            'cep'           => '69900-250',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 424,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Júpiter',
            'bairro'        => 'Adalberto Aragão',
            'cep'           => '69910-580',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 425,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'K',
            'bairro'        => 'Terminal Cadeia Velha',
            'cep'           => '69900-620',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 426,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Karen',
            'bairro'        => 'Conquista',
            'cep'           => '69914-660',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 427,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Kent',
            'bairro'        => 'Bosque',
            'cep'           => '69909-500',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 428,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'L',
            'bairro'        => 'Aeroporto Velho',
            'cep'           => '69903-590',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 429,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'L',
            'bairro'        => 'Terminal Cadeia Velha',
            'cep'           => '69900-630',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 430,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'La Torre',
            'bairro'        => 'Estação Experimental',
            'cep'           => '69907-440',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 431,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Ladislau Ferreira',
            'bairro'        => 'Abrahão Alab',
            'cep'           => '69907-010',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 432,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Laranja',
            'bairro'        => 'Morada do Sol',
            'cep'           => '69910-270',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 433,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Lavousier',
            'bairro'        => 'Bosque',
            'cep'           => '69909-520',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 434,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'LBA',
            'bairro'        => 'Esperança',
            'cep'           => '69905-700',
            'tp_logradouro' => 'Conjunto',
        ]);

        DB::table('ac')->insert([
            'id'            => 435,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Leblon',
            'bairro'        => 'Abrahão Alab',
            'cep'           => '69907-180',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 436,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Leblon',
            'bairro'        => 'Ivete Vargas',
            'cep'           => '69906-440',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 437,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Lei Áurea',
            'bairro'        => 'Preventório',
            'cep'           => '69911-830',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 438,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Leme',
            'bairro'        => 'Mascarenhas de Moraes',
            'cep'           => '69906-190',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 439,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Liberdade',
            'bairro'        => 'Primavera',
            'cep'           => '69911-400',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 440,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Lima',
            'bairro'        => 'Cerâmica',
            'cep'           => '69900-330',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 441,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Lírios',
            'bairro'        => 'Tropical',
            'cep'           => '69910-570',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 442,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Lisboa',
            'bairro'        => 'Jardim Europa',
            'cep'           => '69911-260',
            'tp_logradouro' => 'Alameda',
        ]);

        DB::table('ac')->insert([
            'id'            => 443,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Lourival Ribeiro',
            'bairro'        => 'Taquari',
            'cep'           => '69902-160',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 444,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Lua Nova',
            'bairro'        => 'Cadeia Nova',
            'cep'           => '69901-590',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 445,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Luiz Galvez',
            'bairro'        => 'Floresta',
            'cep'           => '69906-340',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 446,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Luiz Gonzaga',
            'bairro'        => 'São Francisco',
            'cep'           => '69907-360',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 447,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Luiz Pereira',
            'bairro'        => 'Calafate',
            'cep'           => '69905-810',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 448,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Luiz Z. da Silva',
            'bairro'        => 'Estação Experimental',
            'cep'           => '69912-620',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 449,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'M',
            'bairro'        => 'Terminal Cadeia Velha',
            'cep'           => '69900-640',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 450,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Maçã',
            'bairro'        => 'Morada do Sol',
            'cep'           => '69910-260',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 451,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Macapá',
            'bairro'        => 'Estação Experimental',
            'cep'           => '69907-470',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 452,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Machado de Assis',
            'bairro'        => 'Bela Vista',
            'cep'           => '69906-415',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 453,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Madri',
            'bairro'        => 'Jardim Europa',
            'cep'           => '69911-180',
            'tp_logradouro' => 'Alameda',
        ]);

        DB::table('ac')->insert([
            'id'            => 454,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Magé',
            'bairro'        => 'Estação Experimental',
            'cep'           => '69912-320',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 455,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Magnólia',
            'bairro'        => 'Chácara Ipê',
            'cep'           => '69911-850',
            'tp_logradouro' => 'Alameda',
        ]);

        DB::table('ac')->insert([
            'id'            => 456,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Major Salinas',
            'bairro'        => 'José Augusto',
            'cep'           => '69909-070',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 457,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Mamão',
            'bairro'        => 'Morada do Sol',
            'cep'           => '69910-340',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 458,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Manacás',
            'bairro'        => 'Chácara Ipê',
            'cep'           => '69911-880',
            'tp_logradouro' => 'Alameda',
        ]);

        DB::table('ac')->insert([
            'id'            => 459,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Manaus',
            'bairro'        => 'Aviário',
            'cep'           => '69909-320',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 460,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Manga',
            'bairro'        => 'Morada do Sol',
            'cep'           => '69910-370',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 461,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Mangueiras',
            'bairro'        => 'Plácido de Castro',
            'cep'           => '69903-030',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 462,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Manoel Barata',
            'bairro'        => 'Bosque',
            'cep'           => '69908-230',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 463,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Manoel Cassiano',
            'bairro'        => 'Bosque',
            'cep'           => '69908-270',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 464,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Manoel Castor de Araújo',
            'bairro'        => 'Bosque',
            'cep'           => '69908-190',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 465,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Manoel Cezário',
            'bairro'        => 'Capoeira',
            'cep'           => '69910-020',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 466,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Manoel Cezário',
            'bairro'        => 'Centro',
            'cep'           => '69900-465',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 467,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Manoel Julião',
            'bairro'        => 'Izaura Parente',
            'cep'           => '69907-540',
            'tp_logradouro' => 'Conjunto',
        ]);

        DB::table('ac')->insert([
            'id'            => 468,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Manoel Rodrigues de Sousa',
            'bairro'        => 'Bosque',
            'cep'           => '69908-140',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 469,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Maracanã',
            'bairro'        => 'Manoel Julião',
            'cep'           => '69912-695',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 470,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Maranhão',
            'bairro'        => 'Bosque',
            'cep'           => '69908-240',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 471,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Marechal Deodoro',
            'bairro'        => 'Centro',
            'cep'           => '69900-210',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 472,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Marechal Deodoro',
            'bairro'        => 'Aviário',
            'cep'           => '69909-341',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 473,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Marechal Rondon',
            'bairro'        => 'Papouco',
            'cep'           => '69906-150',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 474,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Margaridas',
            'bairro'        => 'Primavera',
            'cep'           => '69911-540',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 475,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Maria Amélia',
            'bairro'        => 'Capoeira',
            'cep'           => '69910-010',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 476,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Maria Amélia',
            'bairro'        => 'João Eduardo',
            'cep'           => '69904-160',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 477,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Maria de Lourdes',
            'bairro'        => 'Taquari',
            'cep'           => '69902-150',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 478,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Maria de Lourdes',
            'bairro'        => 'Triângulo',
            'cep'           => '69902-040',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 479,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Mariano',
            'bairro'        => 'Vila Acre',
            'cep'           => '69902-452',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 480,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Marinho Monte',
            'bairro'        => 'Morada do Sol',
            'cep'           => '69908-630',
            'tp_logradouro' => 'Conjunto',
        ]);

        DB::table('ac')->insert([
            'id'            => 481,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Marinho Monte',
            'bairro'        => 'Bosque',
            'cep'           => '69909-440',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 482,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Marivan de Oliveira',
            'bairro'        => 'Nova Estação',
            'cep'           => '69907-615',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 483,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Marte',
            'bairro'        => 'Morada do Sol',
            'cep'           => '69910-475',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 484,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Martiniano Prado',
            'bairro'        => 'Aviário',
            'cep'           => '69910-720',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 485,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Mascarenhas de Morais',
            'bairro'        => 'Floresta',
            'cep'           => '69906-410',
            'tp_logradouro' => 'Conjunto',
        ]);

        DB::table('ac')->insert([
            'id'            => 486,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Matinha',
            'bairro'        => 'José Augusto',
            'cep'           => '69909-060',
            'tp_logradouro' => 'Beco',
        ]);

        DB::table('ac')->insert([
            'id'            => 487,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Mauá',
            'bairro'        => 'João Eduardo',
            'cep'           => '69904-235',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 488,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Mauá',
            'bairro'        => 'João Eduardo',
            'cep'           => '69904-020',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 489,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Mauro Bittar',
            'bairro'        => 'Floresta',
            'cep'           => '69906-211',
            'tp_logradouro' => 'Conjunto',
        ]);

        DB::table('ac')->insert([
            'id'            => 490,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Melância',
            'bairro'        => 'Morada do Sol',
            'cep'           => '69910-320',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 491,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Melão',
            'bairro'        => 'Morada do Sol',
            'cep'           => '69910-330',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 492,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Men de Sá',
            'bairro'        => 'Bahia',
            'cep'           => '69904-300',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 493,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Mendes Júnior',
            'bairro'        => 'Estação Experimental',
            'cep'           => '69912-530',
            'tp_logradouro' => 'Vila',
        ]);

        DB::table('ac')->insert([
            'id'            => 494,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Mercúrio',
            'bairro'        => 'Morada do Sol',
            'cep'           => '69910-350',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 495,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Milton Matos',
            'bairro'        => 'Bosque',
            'cep'           => '69909-430',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 496,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Milton Santos',
            'bairro'        => 'Bosque',
            'cep'           => '69908-710',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 497,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Minas Gerais',
            'bairro'        => 'Ivete Vargas',
            'cep'           => '69906-000',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 498,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Minas Gerais',
            'bairro'        => 'Bosque',
            'cep'           => '69908-610',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 499,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Mirim',
            'bairro'        => 'Aviário',
            'cep'           => '69909-250',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 500,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Mônaco',
            'bairro'        => 'Jardim Europa',
            'cep'           => '69911-090',
            'tp_logradouro' => 'Alameda',
        ]);

        DB::table('ac')->insert([
            'id'            => 501,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Morango',
            'bairro'        => 'Morada do Sol',
            'cep'           => '69910-230',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 502,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Morro',
            'bairro'        => 'Alegria',
            'cep'           => '69908-550',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 503,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Mozart',
            'bairro'        => 'Abrahão Alab',
            'cep'           => '69907-100',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 504,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Mutema',
            'bairro'        => 'Nova Estação',
            'cep'           => '69914-200',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 505,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Mutum',
            'bairro'        => 'Chácara Ipê',
            'cep'           => '69911-620',
            'tp_logradouro' => 'Alameda',
        ]);

        DB::table('ac')->insert([
            'id'            => 506,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'N',
            'bairro'        => 'Terminal Cadeia Velha',
            'cep'           => '69900-650',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 507,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Nabor Júnior',
            'bairro'        => 'Plácido de Castro',
            'cep'           => '69903-100',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 508,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Nações Unidas',
            'bairro'        => 'Bosque',
            'cep'           => '69908-620',
            'tp_logradouro' => 'Avenida',
        ]);

        DB::table('ac')->insert([
            'id'            => 509,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Nações Unidas',
            'bairro'        => 'Bosque',
            'cep'           => '69909-720',
            'tp_logradouro' => 'Avenida',
        ]);

        DB::table('ac')->insert([
            'id'            => 510,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Nações Unidas',
            'bairro'        => 'Estação Experimental',
            'cep'           => '69912-600',
            'tp_logradouro' => 'Avenida',
        ]);

        DB::table('ac')->insert([
            'id'            => 511,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Nações Unidas',
            'bairro'        => 'Izaura Parente',
            'cep'           => '69907-600',
            'tp_logradouro' => 'Avenida',
        ]);

        DB::table('ac')->insert([
            'id'            => 512,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Nápoli',
            'bairro'        => 'Jardim Europa',
            'cep'           => '69911-200',
            'tp_logradouro' => 'Alameda',
        ]);

        DB::table('ac')->insert([
            'id'            => 513,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Netuno',
            'bairro'        => 'Adalberto Aragão',
            'cep'           => '69910-600',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 514,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Neutel Maia',
            'bairro'        => 'Bosque',
            'cep'           => '69908-200',
            'tp_logradouro' => 'Beco',
        ]);

        DB::table('ac')->insert([
            'id'            => 515,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Nilo Bezerra',
            'bairro'        => 'Cadeia Velha',
            'cep'           => '69900-470',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 516,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Niterói',
            'bairro'        => 'Nova Estação',
            'cep'           => '69914-180',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 517,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Noruega',
            'bairro'        => 'Jardim Europa',
            'cep'           => '69911-060',
            'tp_logradouro' => 'Alameda',
        ]);

        DB::table('ac')->insert([
            'id'            => 518,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Nossa Senhora da Conceição',
            'bairro'        => 'Quinze',
            'cep'           => '69901-250',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 519,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Nossa Senhora das Graças',
            'bairro'        => 'Quinze',
            'cep'           => '69901-260',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 520,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Nossa Senhora de Fátima',
            'bairro'        => 'Estação Experimental',
            'cep'           => '69907-605',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 521,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Nossa Senhora de Fátima',
            'bairro'        => 'Taquari',
            'cep'           => '69902-170',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 522,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Nova',
            'bairro'        => 'Estação Experimental',
            'cep'           => '69912-305',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 523,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Nova Andira',
            'bairro'        => 'Cadeia Nova',
            'cep'           => '69901-510',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 524,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Nova Esperança',
            'bairro'        => 'Esperança',
            'cep'           => '69905-550',
            'tp_logradouro' => 'Conjunto',
        ]);

        DB::table('ac')->insert([
            'id'            => 525,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Nove',
            'bairro'        => 'Tancredo Neves',
            'cep'           => '69918-110',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 526,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Nove',
            'bairro'        => 'Bahia Nova',
            'cep'           => '69904-450',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 527,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Novo Horizonte',
            'bairro'        => 'Novo Horizonte',
            'cep'           => '69918-420',
            'tp_logradouro' => 'Conjunto',
        ]);

        DB::table('ac')->insert([
            'id'            => 528,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Novo Horizonte',
            'bairro'        => 'Aviário',
            'cep'           => '69904-275',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 529,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Novo Horizonte',
            'bairro'        => 'Floresta',
            'cep'           => '69906-221',
            'tp_logradouro' => 'Conjunto',
        ]);

        DB::table('ac')->insert([
            'id'            => 530,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'O',
            'bairro'        => 'Jardim de Alah',
            'cep'           => '69911-370',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 531,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'O',
            'bairro'        => 'Terminal Cadeia Velha',
            'cep'           => '69900-665',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 532,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Oito',
            'bairro'        => 'Bahia Nova',
            'cep'           => '69904-440',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 533,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Oito',
            'bairro'        => 'Tancredo Neves',
            'cep'           => '69918-100',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 534,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Oito',
            'bairro'        => 'Manoel Julião',
            'cep'           => '69912-690',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 535,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Olaria',
            'bairro'        => 'José Augusto',
            'cep'           => '69909-100',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 536,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Oliveiras',
            'bairro'        => 'Tropical',
            'cep'           => '69910-530',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 537,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Omar Sabino',
            'bairro'        => 'Floresta',
            'cep'           => '69906-400',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 538,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Onófrio Alves',
            'bairro'        => 'Quinze',
            'cep'           => '69901-290',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 539,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Onófrio Alves das Neves',
            'bairro'        => 'Quinze',
            'cep'           => '69901-310',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 540,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Onze',
            'bairro'        => 'Tancredo Neves',
            'cep'           => '69918-130',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 541,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Onze',
            'bairro'        => 'Bahia Nova',
            'cep'           => '69904-470',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 542,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Onze de Junho',
            'bairro'        => 'Plácido de Castro',
            'cep'           => '69903-060',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 543,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Operários',
            'bairro'        => 'Plácido de Castro',
            'cep'           => '69903-110',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 544,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Oriente',
            'bairro'        => 'Esperança',
            'cep'           => '69905-100',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 545,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Órion',
            'bairro'        => 'Morada do Sol',
            'cep'           => '69910-360',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 546,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Orquídeas',
            'bairro'        => 'Primavera',
            'cep'           => '69911-520',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 547,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Oscar Passos',
            'bairro'        => 'São Francisco',
            'cep'           => '69909-041',
            'tp_logradouro' => 'Conjunto',
        ]);

        DB::table('ac')->insert([
            'id'            => 548,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Otávio Rola',
            'bairro'        => 'Vila Ivonete',
            'cep'           => '69914-450',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 549,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Ouro Verde',
            'bairro'        => 'Nova Estação',
            'cep'           => '69907-640',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 550,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Ozaninha',
            'bairro'        => 'João Eduardo',
            'cep'           => '69904-015',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 551,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'P',
            'bairro'        => 'Floresta',
            'cep'           => '69906-270',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 552,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'P',
            'bairro'        => 'Terminal Cadeia Velha',
            'cep'           => '69900-670',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 553,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Padre André',
            'bairro'        => 'Bosque',
            'cep'           => '69907-560',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 554,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Padre Cícero',
            'bairro'        => 'Santa Quitéria',
            'cep'           => '69914-350',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 555,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Padre Cícero',
            'bairro'        => 'Nova Estação',
            'cep'           => '69914-120',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 556,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Padre Hugo',
            'bairro'        => 'Bosque',
            'cep'           => '69907-570',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 557,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Padre José',
            'bairro'        => 'Triângulo',
            'cep'           => '69902-020',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 558,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Padre José',
            'bairro'        => 'Triângulo',
            'cep'           => '69902-030',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 559,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Padre Manoel da Nóbrega',
            'bairro'        => 'Bosque',
            'cep'           => '69908-350',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 560,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Padre Thiago',
            'bairro'        => 'Bosque',
            'cep'           => '69907-550',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 561,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Paineiras',
            'bairro'        => 'Chácara Ipê',
            'cep'           => '69911-750',
            'tp_logradouro' => 'Alameda',
        ]);

        DB::table('ac')->insert([
            'id'            => 562,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Palmas',
            'bairro'        => 'Tropical',
            'cep'           => '69910-560',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 563,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Palmeira',
            'bairro'        => 'Nova Estação',
            'cep'           => '69914-070',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 564,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Palmeiral',
            'bairro'        => 'Cadeia Nova',
            'cep'           => '69901-500',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 565,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Palmeiras',
            'bairro'        => 'Tropical',
            'cep'           => '69910-540',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 566,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Palmeiras',
            'bairro'        => 'Chácara Ipê',
            'cep'           => '69911-860',
            'tp_logradouro' => 'Alameda',
        ]);

        DB::table('ac')->insert([
            'id'            => 567,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Panair',
            'bairro'        => 'Base',
            'cep'           => '69908-700',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 568,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Pantanal',
            'bairro'        => 'Aviário',
            'cep'           => '69904-355',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 569,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Papagaio',
            'bairro'        => 'Chácara Ipê',
            'cep'           => '69911-600',
            'tp_logradouro' => 'Alameda',
        ]);

        DB::table('ac')->insert([
            'id'            => 570,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Pará',
            'bairro'        => 'Cadeia Velha',
            'cep'           => '69900-440',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 571,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Paraíba',
            'bairro'        => 'Manoel Julião',
            'cep'           => '69912-705',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 572,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Paraíso',
            'bairro'        => 'Primavera',
            'cep'           => '69911-450',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 573,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Paraná',
            'bairro'        => 'Bosque',
            'cep'           => '69908-150',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 574,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Parati',
            'bairro'        => 'Vila Ivonete',
            'cep'           => '69914-550',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 575,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Paris',
            'bairro'        => 'Jardim Europa',
            'cep'           => '69911-030',
            'tp_logradouro' => 'Alameda',
        ]);

        DB::table('ac')->insert([
            'id'            => 576,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Parque das Nações',
            'bairro'        => 'Izaura Parente',
            'cep'           => '69907-530',
            'tp_logradouro' => 'Conjunto',
        ]);

        DB::table('ac')->insert([
            'id'            => 577,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Particular',
            'bairro'        => 'Quinze',
            'cep'           => '69901-255',
            'tp_logradouro' => 'Estrada',
        ]);

        DB::table('ac')->insert([
            'id'            => 578,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Passarela',
            'bairro'        => 'Nova Estação',
            'cep'           => '69914-110',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 579,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Passeio',
            'bairro'        => 'Taquari',
            'cep'           => '69902-200',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 580,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Paulo César de Oliveira',
            'bairro'        => 'Estação Experimental',
            'cep'           => '69912-510',
            'tp_logradouro' => 'Conjunto',
        ]);

        DB::table('ac')->insert([
            'id'            => 581,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Paz',
            'bairro'        => 'Taquari',
            'cep'           => '69902-190',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 582,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Pedro Álvares Cabral',
            'bairro'        => 'Estação Experimental',
            'cep'           => '69912-370',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 583,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Pedro Vaz',
            'bairro'        => 'Baixa da Colina',
            'cep'           => '69909-130',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 584,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Pera',
            'bairro'        => 'Morada do Sol',
            'cep'           => '69910-420',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 585,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Pereira Passos',
            'bairro'        => 'Seis de Agosto',
            'cep'           => '69901-010',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 586,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Pernambuco',
            'bairro'        => 'Bosque',
            'cep'           => '69908-600',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 587,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Pernambuco',
            'bairro'        => 'Bosque',
            'cep'           => '69907-580',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 588,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Pérolas',
            'bairro'        => 'Primavera',
            'cep'           => '69911-560',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 589,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Perpétua',
            'bairro'        => 'Adalberto Aragão',
            'cep'           => '69910-640',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 590,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Peru',
            'bairro'        => 'Cerâmica',
            'cep'           => '69900-290',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 591,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Pêssego',
            'bairro'        => 'Morada do Sol',
            'cep'           => '69910-240',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 592,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Petrópolis',
            'bairro'        => 'Estação Experimental',
            'cep'           => '69912-500',
            'tp_logradouro' => 'Conjunto',
        ]);

        DB::table('ac')->insert([
            'id'            => 593,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Piauí',
            'bairro'        => 'Papouco',
            'cep'           => '69906-140',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 594,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Picapau',
            'bairro'        => 'Chácara Ipê',
            'cep'           => '69911-610',
            'tp_logradouro' => 'Alameda',
        ]);

        DB::table('ac')->insert([
            'id'            => 595,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Pio Nazário',
            'bairro'        => 'Seis de Agosto',
            'cep'           => '69901-070',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 596,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Pio XII',
            'bairro'        => 'Abrahão Alab',
            'cep'           => '69907-200',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 597,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Pista',
            'bairro'        => 'Aeroporto Velho',
            'cep'           => '69903-460',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 598,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Plácido de Castro',
            'bairro'        => 'Plácido de Castro',
            'cep'           => '69903-160',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 599,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Plácido de Castro',
            'bairro'        => 'Aeroporto Velho',
            'cep'           => '69903-470',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 600,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Plácido de Castro',
            'bairro'        => 'Estação Experimental',
            'cep'           => '69912-460',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 601,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Plínio Brandão',
            'bairro'        => 'Base',
            'cep'           => '69908-490',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 602,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Plutão',
            'bairro'        => 'Morada do Sol',
            'cep'           => '69910-390',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 603,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Poços de Caldas',
            'bairro'        => 'Cadeia Nova',
            'cep'           => '69901-480',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 604,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Ponta Porã',
            'bairro'        => 'Capoeira',
            'cep'           => '69910-100',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 605,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Portela',
            'bairro'        => 'Plácido de Castro',
            'cep'           => '69903-040',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 606,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Porto Acre',
            'bairro'        => 'Placas',
            'cep'           => '69914-720',
            'tp_logradouro' => 'Estrada',
        ]);

        DB::table('ac')->insert([
            'id'            => 607,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Portugal',
            'bairro'        => 'Jardim Europa',
            'cep'           => '69911-080',
            'tp_logradouro' => 'Alameda',
        ]);

        DB::table('ac')->insert([
            'id'            => 608,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Praxedes',
            'bairro'        => 'Seis de Agosto',
            'cep'           => '69901-080',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 609,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Primavera',
            'bairro'        => 'Bahia',
            'cep'           => '69904-350',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 610,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Primavera',
            'bairro'        => 'São Francisco',
            'cep'           => '69907-290',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 611,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Primeiro de Agosto',
            'bairro'        => 'Placas',
            'cep'           => '69914-760',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 612,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Primeiro de Janeiro',
            'bairro'        => 'Placas',
            'cep'           => '69914-830',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 613,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Primeiro de Maio',
            'bairro'        => 'Seis de Agosto',
            'cep'           => '69901-020',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 614,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Princesa Isabel',
            'bairro'        => 'Ivete Vargas',
            'cep'           => '69906-130',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 615,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Princesa Isabel',
            'bairro'        => 'Estação Experimental',
            'cep'           => '69912-380',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 616,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Principal',
            'bairro'        => 'Palheiral',
            'cep'           => '69903-830',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 617,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Principal',
            'bairro'        => 'Bosque',
            'cep'           => '69909-580',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 618,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Procon',
            'bairro'        => 'Vila Ivonete',
            'cep'           => '69914-480',
            'tp_logradouro' => 'Conjunto',
        ]);

        DB::table('ac')->insert([
            'id'            => 619,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Q',
            'bairro'        => 'Terminal Cadeia Velha',
            'cep'           => '69900-680',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 620,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Quarenta',
            'bairro'        => 'Quinze',
            'cep'           => '69901-220',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 621,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Quatorze',
            'bairro'        => 'Bahia Nova',
            'cep'           => '69904-500',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 622,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Quatorze',
            'bairro'        => 'Tancredo Neves',
            'cep'           => '69918-160',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 623,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Quatro',
            'bairro'        => 'Bahia Nova',
            'cep'           => '69904-400',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 624,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Quatro',
            'bairro'        => 'Morada do Sol',
            'cep'           => '69910-440',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 625,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Quatro',
            'bairro'        => 'Tancredo Neves',
            'cep'           => '69918-060',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 626,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Quatro de Outubro',
            'bairro'        => 'Sobral',
            'cep'           => '69903-640',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 627,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Quinari',
            'bairro'        => 'Quinze',
            'cep'           => '69901-320',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 628,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Quintino Bocaiúva',
            'bairro'        => 'Centro',
            'cep'           => '69908-010',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 629,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Quintino Bocaiúva',
            'bairro'        => 'Bosque',
            'cep'           => '69909-400',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 630,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Quinze',
            'bairro'        => 'João Eduardo',
            'cep'           => '69904-170',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 631,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Quinze',
            'bairro'        => 'Bahia Nova',
            'cep'           => '69904-510',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 632,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Quinze',
            'bairro'        => 'Tancredo Neves',
            'cep'           => '69918-170',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 633,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Quinze',
            'bairro'        => 'Palheiral',
            'cep'           => '69903-770',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 634,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Quinze de Novembro',
            'bairro'        => 'Placas',
            'cep'           => '69914-850',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 635,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Quito',
            'bairro'        => 'Cerâmica',
            'cep'           => '69900-320',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 636,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'R',
            'bairro'        => 'Terminal Cadeia Velha',
            'cep'           => '69900-690',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 637,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'R',
            'bairro'        => 'Floresta',
            'cep'           => '69906-300',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 638,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Rádio Farol',
            'bairro'        => 'Sobral',
            'cep'           => '69903-660',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 639,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Rádio Farol',
            'bairro'        => 'Sobral',
            'cep'           => '69903-650',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 640,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Raimundo F. Pinto',
            'bairro'        => 'Manoel Julião',
            'cep'           => '69912-640',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 641,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Raimundo Melo',
            'bairro'        => 'Placas',
            'cep'           => '69914-860',
            'tp_logradouro' => 'Conjunto',
        ]);

        DB::table('ac')->insert([
            'id'            => 642,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Ramos Ferreira',
            'bairro'        => 'Sobral',
            'cep'           => '69903-620',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 643,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Raul Barcelar',
            'bairro'        => 'Aviário',
            'cep'           => '69909-220',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 644,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Recanto Verde',
            'bairro'        => 'Primavera',
            'cep'           => '69911-390',
            'tp_logradouro' => 'Avenida',
        ]);

        DB::table('ac')->insert([
            'id'            => 645,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Revolta',
            'bairro'        => 'Cadeia Nova',
            'cep'           => '69901-520',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 646,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Riachuelo',
            'bairro'        => 'José Augusto',
            'cep'           => '69909-020',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 647,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Rio Branco',
            'bairro'        => 'Nova Estação',
            'cep'           => '69914-140',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 648,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Rio Branco',
            'bairro'        => 'Cerâmica',
            'cep'           => '69900-260',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 649,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Rio de Janeiro',
            'bairro'        => 'Floresta',
            'cep'           => '69906-380',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 650,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Rio de Janeiro',
            'bairro'        => 'Base',
            'cep'           => '69908-695',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 651,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Rio Grande do Sul',
            'bairro'        => 'Aeroporto Velho',
            'cep'           => '69903-420',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 652,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Rio Grande do Sul',
            'bairro'        => 'Base',
            'cep'           => '69906-430',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 653,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Rondônia',
            'bairro'        => 'Bosque',
            'cep'           => '69908-090',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 654,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Roraima',
            'bairro'        => 'Capoeira',
            'cep'           => '69910-060',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 655,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Rosas',
            'bairro'        => 'Primavera',
            'cep'           => '69911-380',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 656,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Rubens Carneiro',
            'bairro'        => 'Abrahão Alab',
            'cep'           => '69907-170',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 657,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Rui Barbosa',
            'bairro'        => 'Base',
            'cep'           => '69908-680',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 658,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Rui Barbosa',
            'bairro'        => 'Centro',
            'cep'           => '69900-120',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 659,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Rui Lino',
            'bairro'        => 'Nova Estação',
            'cep'           => '69907-620',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 660,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Rui Lino',
            'bairro'        => 'Distrito Industrial',
            'cep'           => '69917-405',
            'tp_logradouro' => 'Conjunto',
        ]);

        DB::table('ac')->insert([
            'id'            => 661,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Rui Lino',
            'bairro'        => 'João Eduardo',
            'cep'           => '69904-660',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 662,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Rui Lino',
            'bairro'        => 'João Eduardo',
            'cep'           => '69904-655',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 663,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'S',
            'bairro'        => 'Terminal Cadeia Velha',
            'cep'           => '69900-700',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 664,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Sabiá',
            'bairro'        => 'Chácara Ipê',
            'cep'           => '69911-800',
            'tp_logradouro' => 'Alameda',
        ]);

        DB::table('ac')->insert([
            'id'            => 665,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Saldanha Marinho',
            'bairro'        => 'Estação Experimental',
            'cep'           => '69907-400',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 666,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Salgueiro',
            'bairro'        => 'Cadeia Nova',
            'cep'           => '69901-550',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 667,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Santa Catarina',
            'bairro'        => 'Cadeia Velha',
            'cep'           => '69900-450',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 668,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Santa Cruz',
            'bairro'        => 'Bahia',
            'cep'           => '69904-220',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 669,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Santa Fé',
            'bairro'        => 'Estação Experimental',
            'cep'           => '69912-625',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 670,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Santa Helena',
            'bairro'        => 'Izaura Parente',
            'cep'           => '69907-230',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 671,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Santa Inês',
            'bairro'        => 'São Francisco',
            'cep'           => '69907-340',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 672,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Santa Inês',
            'bairro'        => 'São Francisco',
            'cep'           => '69909-011',
            'tp_logradouro' => 'Estrada',
        ]);

        DB::table('ac')->insert([
            'id'            => 673,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Santa Luzia',
            'bairro'        => 'Aviário',
            'cep'           => '69910-680',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 674,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Santa Luzia',
            'bairro'        => 'João Eduardo',
            'cep'           => '69904-635',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 675,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Santa Madalena',
            'bairro'        => 'João Eduardo',
            'cep'           => '69904-125',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 676,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Santa Maria',
            'bairro'        => 'João Eduardo',
            'cep'           => '69904-610',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 677,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Santa Maria',
            'bairro'        => 'Baixa da Colina',
            'cep'           => '69909-110',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 678,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Santa Rita',
            'bairro'        => 'Nova Estação',
            'cep'           => '69914-020',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 679,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Santa Terezinha',
            'bairro'        => 'João Eduardo',
            'cep'           => '69904-145',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 680,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Santa Terezinha',
            'bairro'        => 'Seis de Agosto',
            'cep'           => '69901-110',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 681,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Santo Afonso',
            'bairro'        => 'José Augusto',
            'cep'           => '69909-030',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 682,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Santo Antônio',
            'bairro'        => 'João Eduardo',
            'cep'           => '69904-605',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 683,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Santo Antônio',
            'bairro'        => 'José Augusto',
            'cep'           => '69909-010',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 684,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Santos Dumont',
            'bairro'        => 'Aeroporto Velho',
            'cep'           => '69903-500',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 685,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'São Cristóvão',
            'bairro'        => 'Novo Horizonte',
            'cep'           => '69906-460',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 686,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'São Cristóvão',
            'bairro'        => 'Aeroporto Velho',
            'cep'           => '69903-450',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 687,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'São Domingos',
            'bairro'        => 'Seis de Agosto',
            'cep'           => '69901-140',
            'tp_logradouro' => 'Beco',
        ]);

        DB::table('ac')->insert([
            'id'            => 688,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'São Edimar',
            'bairro'        => 'João Eduardo',
            'cep'           => '69904-140',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 689,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'São Francisco',
            'bairro'        => 'São Francisco',
            'cep'           => '69909-021',
            'tp_logradouro' => 'Estrada',
        ]);

        DB::table('ac')->insert([
            'id'            => 690,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'São Francisco',
            'bairro'        => 'João Eduardo',
            'cep'           => '69904-035',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 691,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'São Francisco',
            'bairro'        => 'Bahia',
            'cep'           => '69904-280',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 692,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'São Francisco',
            'bairro'        => 'São Francisco',
            'cep'           => '69907-301',
            'tp_logradouro' => 'Conjunto',
        ]);

        DB::table('ac')->insert([
            'id'            => 693,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'São Gabriel',
            'bairro'        => 'Aviário',
            'cep'           => '69909-200',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 694,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'São Januário',
            'bairro'        => 'Bosque',
            'cep'           => '69908-380',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 695,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'São João',
            'bairro'        => 'Palheiral',
            'cep'           => '69903-720',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 696,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'São João',
            'bairro'        => 'Centro',
            'cep'           => '69908-050',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 697,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'São Jorge',
            'bairro'        => 'João Eduardo',
            'cep'           => '69904-100',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 698,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'São José',
            'bairro'        => 'João Eduardo',
            'cep'           => '69904-030',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 699,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'São José',
            'bairro'        => 'Palheiral',
            'cep'           => '69903-710',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 700,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'São Lucas',
            'bairro'        => 'Sobral',
            'cep'           => '69903-690',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 701,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'São Luis',
            'bairro'        => 'Calafate',
            'cep'           => '69905-830',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 702,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'São Luiz',
            'bairro'        => 'Nova Estação',
            'cep'           => '69907-630',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 703,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'São Luiz',
            'bairro'        => 'João Eduardo',
            'cep'           => '69904-090',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 704,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'São Nicolau',
            'bairro'        => 'João Eduardo',
            'cep'           => '69904-110',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 705,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'São Paulo',
            'bairro'        => 'Bosque',
            'cep'           => '69908-120',
            'tp_logradouro' => 'Conjunto',
        ]);

        DB::table('ac')->insert([
            'id'            => 706,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'São Pedro',
            'bairro'        => 'Sobral',
            'cep'           => '69903-630',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 707,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'São Raimundo',
            'bairro'        => 'João Eduardo',
            'cep'           => '69904-625',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 708,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'São Salvador',
            'bairro'        => 'Bahia',
            'cep'           => '69904-240',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 709,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'São Salvador',
            'bairro'        => 'Sobral',
            'cep'           => '69903-610',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 710,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'São Sebastião',
            'bairro'        => 'João Eduardo',
            'cep'           => '69904-630',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 711,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'São Sebastião',
            'bairro'        => 'Vila Ivonete',
            'cep'           => '69914-400',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 712,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'São Vicente',
            'bairro'        => 'Abrahão Alab',
            'cep'           => '69907-645',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 713,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Saturno',
            'bairro'        => 'Adalberto Aragão',
            'cep'           => '69910-585',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 714,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Saudade',
            'bairro'        => 'Bosque',
            'cep'           => '69909-750',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 715,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Sebastião Dantas',
            'bairro'        => 'Estação Experimental',
            'cep'           => '69907-450',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 716,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Seis',
            'bairro'        => 'Tancredo Neves',
            'cep'           => '69918-080',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 717,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Seis',
            'bairro'        => 'Bahia Nova',
            'cep'           => '69904-420',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 718,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Seis de Agosto',
            'bairro'        => 'Seis de Agosto',
            'cep'           => '69901-000',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 719,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Seis de Maio',
            'bairro'        => 'Placas',
            'cep'           => '69914-790',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 720,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Sena Madureira',
            'bairro'        => 'Base',
            'cep'           => '69908-460',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 721,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Senador Kairala',
            'bairro'        => 'Estação Experimental',
            'cep'           => '69907-390',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 722,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Sergipe',
            'bairro'        => 'Cerâmica',
            'cep'           => '69900-370',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 723,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Serra',
            'bairro'        => 'Tropical',
            'cep'           => '69910-510',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 724,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Serva Ribeiro',
            'bairro'        => 'Bosque',
            'cep'           => '69909-550',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 725,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Sete',
            'bairro'        => 'Bahia Nova',
            'cep'           => '69904-430',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 726,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Sete',
            'bairro'        => 'Tancredo Neves',
            'cep'           => '69918-090',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 727,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Sete',
            'bairro'        => 'Manoel Julião',
            'cep'           => '69912-685',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 728,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Sete de Dezembro',
            'bairro'        => 'Placas',
            'cep'           => '69914-810',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 729,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Sete de Setembro',
            'bairro'        => 'Placas',
            'cep'           => '69914-740',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 730,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Severiano',
            'bairro'        => 'Bosque',
            'cep'           => '69908-180',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 731,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Sevilha',
            'bairro'        => 'Jardim Europa',
            'cep'           => '69911-190',
            'tp_logradouro' => 'Alameda',
        ]);

        DB::table('ac')->insert([
            'id'            => 732,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Silvestre Coelho',
            'bairro'        => 'Bosque',
            'cep'           => '69909-360',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 733,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Siqueira Campos',
            'bairro'        => 'Vila Ivonete',
            'cep'           => '69914-510',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 734,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Sobral',
            'bairro'        => 'Sobral',
            'cep'           => '69903-705',
            'tp_logradouro' => 'Estrada',
        ]);

        DB::table('ac')->insert([
            'id'            => 735,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Sobral',
            'bairro'        => 'Sobral',
            'cep'           => '69903-700',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 736,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Sol',
            'bairro'        => 'José Augusto',
            'cep'           => '69909-090',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 737,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Solar',
            'bairro'        => 'Vila Ivonete',
            'cep'           => '69914-500',
            'tp_logradouro' => 'Conjunto',
        ]);

        DB::table('ac')->insert([
            'id'            => 738,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Solidão',
            'bairro'        => 'Aeroporto Velho',
            'cep'           => '69903-440',
            'tp_logradouro' => 'Beco',
        ]);

        DB::table('ac')->insert([
            'id'            => 739,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Suécia',
            'bairro'        => 'Jardim Europa',
            'cep'           => '69911-100',
            'tp_logradouro' => 'Alameda',
        ]);

        DB::table('ac')->insert([
            'id'            => 740,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Suíça',
            'bairro'        => 'Jardim Europa',
            'cep'           => '69911-230',
            'tp_logradouro' => 'Alameda',
        ]);

        DB::table('ac')->insert([
            'id'            => 741,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'T',
            'bairro'        => 'Terminal Cadeia Velha',
            'cep'           => '69900-710',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 742,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Tamandaré',
            'bairro'        => 'Izaura Parente',
            'cep'           => '69907-250',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 743,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Tancredo Neves',
            'bairro'        => 'Vila Ivonete',
            'cep'           => '69914-381',
            'tp_logradouro' => 'Conjunto',
        ]);

        DB::table('ac')->insert([
            'id'            => 744,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Tancredo Neves',
            'bairro'        => 'Bahia',
            'cep'           => '69904-340',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 745,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Tangará',
            'bairro'        => 'Estação Experimental',
            'cep'           => '69912-000',
            'tp_logradouro' => 'Conjunto',
        ]);

        DB::table('ac')->insert([
            'id'            => 746,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Tapajós',
            'bairro'        => 'Estação Experimental',
            'cep'           => '69907-520',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 747,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Tapajós',
            'bairro'        => 'Palheiral',
            'cep'           => '69903-835',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 748,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Tarauacá',
            'bairro'        => 'Base',
            'cep'           => '69908-500',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 749,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Tenente Adherbal Brasil',
            'bairro'        => 'Manoel Julião',
            'cep'           => '69912-650',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 750,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Teodolino Falcão Macedo',
            'bairro'        => 'Placas',
            'cep'           => '69914-730',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 751,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Teotônio Vilella',
            'bairro'        => 'Plácido de Castro',
            'cep'           => '69903-140',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 752,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Terminal',
            'bairro'        => 'Aeroporto Velho',
            'cep'           => '69903-480',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 753,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Terra',
            'bairro'        => 'Adalberto Aragão',
            'cep'           => '69910-620',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 754,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Thamaturgo de Azevedo',
            'bairro'        => 'Ipase',
            'cep'           => '69909-351',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 755,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Thamaturgo de Azevedo',
            'bairro'        => 'Ipase',
            'cep'           => '69900-230',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 756,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Thomé de Souza',
            'bairro'        => 'Floresta',
            'cep'           => '69906-280',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 757,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Tiarajú',
            'bairro'        => 'São Francisco',
            'cep'           => '69907-331',
            'tp_logradouro' => 'Conjunto',
        ]);

        DB::table('ac')->insert([
            'id'            => 758,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Tijuca',
            'bairro'        => 'Mascarenhas de Moraes',
            'cep'           => '69906-170',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 759,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Tiradentes',
            'bairro'        => 'Quinze',
            'cep'           => '69901-270',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 760,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Tiradentes',
            'bairro'        => 'Quinze',
            'cep'           => '69901-275',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 761,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Três',
            'bairro'        => 'Tancredo Neves',
            'cep'           => '69918-000',
            'tp_logradouro' => 'Avenida',
        ]);

        DB::table('ac')->insert([
            'id'            => 762,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Três',
            'bairro'        => 'Tancredo Neves',
            'cep'           => '69918-050',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 763,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Três',
            'bairro'        => 'Bahia Nova',
            'cep'           => '69904-390',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 764,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Três',
            'bairro'        => 'Morada do Sol',
            'cep'           => '69910-380',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 765,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Três de Setembro',
            'bairro'        => 'Placas',
            'cep'           => '69914-780',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 766,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Treze',
            'bairro'        => 'Bahia Nova',
            'cep'           => '69904-490',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 767,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Treze',
            'bairro'        => 'Tancredo Neves',
            'cep'           => '69918-150',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 768,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Treze',
            'bairro'        => 'Estação Experimental',
            'cep'           => '69907-500',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 769,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Trinta',
            'bairro'        => 'Tancredo Neves',
            'cep'           => '69918-340',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 770,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Trinta e Cinco',
            'bairro'        => 'Tancredo Neves',
            'cep'           => '69918-390',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 771,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Trinta e Dois',
            'bairro'        => 'Tancredo Neves',
            'cep'           => '69918-360',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 772,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Trinta e Quatro',
            'bairro'        => 'Tancredo Neves',
            'cep'           => '69918-380',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 773,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Trinta e Seis',
            'bairro'        => 'Estação Experimental',
            'cep'           => '69912-615',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 774,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Trinta e Três',
            'bairro'        => 'Tancredo Neves',
            'cep'           => '69918-370',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 775,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Trinta e Um',
            'bairro'        => 'Tancredo Neves',
            'cep'           => '69918-350',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 776,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Trinta e Um de Março',
            'bairro'        => 'Seis de Agosto',
            'cep'           => '69901-030',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 777,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Triunfo',
            'bairro'        => 'Cadeia Nova',
            'cep'           => '69901-470',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 778,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Tropical I, II, III',
            'bairro'        => 'São Francisco',
            'cep'           => '69907-311',
            'tp_logradouro' => 'Conjunto',
        ]);

        DB::table('ac')->insert([
            'id'            => 779,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Tucano',
            'bairro'        => 'Chácara Ipê',
            'cep'           => '69911-580',
            'tp_logradouro' => 'Alameda',
        ]);

        DB::table('ac')->insert([
            'id'            => 780,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Tucumã',
            'bairro'        => 'Distrito Industrial',
            'cep'           => '69917-400',
            'tp_logradouro' => 'Conjunto',
        ]);

        DB::table('ac')->insert([
            'id'            => 781,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Tucuruí',
            'bairro'        => 'Palheiral',
            'cep'           => '69903-800',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 782,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Túlias',
            'bairro'        => 'Primavera',
            'cep'           => '69911-500',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 783,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Tutóia do Maranhão',
            'bairro'        => 'Estação Experimental',
            'cep'           => '69912-630',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 784,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Ubatuba',
            'bairro'        => 'Vila Ivonete',
            'cep'           => '69914-590',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 785,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Uirapuru',
            'bairro'        => 'Chácara Ipê',
            'cep'           => '69911-730',
            'tp_logradouro' => 'Alameda',
        ]);

        DB::table('ac')->insert([
            'id'            => 786,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Uirapuru',
            'bairro'        => 'Cadeia Nova',
            'cep'           => '69901-530',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 787,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Um',
            'bairro'        => 'Tancredo Neves',
            'cep'           => '69918-030',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 788,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Um',
            'bairro'        => 'Tancredo Neves',
            'cep'           => '69918-020',
            'tp_logradouro' => 'Avenida',
        ]);

        DB::table('ac')->insert([
            'id'            => 789,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Um',
            'bairro'        => 'Bahia Nova',
            'cep'           => '69904-370',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 790,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Universitário',
            'bairro'        => 'Distrito Industrial',
            'cep'           => '69915-300',
            'tp_logradouro' => 'Conjunto',
        ]);

        DB::table('ac')->insert([
            'id'            => 791,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Urano',
            'bairro'        => 'Adalberto Aragão',
            'cep'           => '69910-590',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 792,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Uricuri',
            'bairro'        => 'Chácara Ipê',
            'cep'           => '69911-700',
            'tp_logradouro' => 'Alameda',
        ]);

        DB::table('ac')->insert([
            'id'            => 793,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Uva',
            'bairro'        => 'Morada do Sol',
            'cep'           => '69910-400',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 794,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'V',
            'bairro'        => 'Terminal Cadeia Velha',
            'cep'           => '69900-720',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 795,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Valdomiro Lopes',
            'bairro'        => 'Vila Ivonete',
            'cep'           => '69914-460',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 796,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Valério Magalhães',
            'bairro'        => 'Bosque',
            'cep'           => '69909-710',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 797,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Vasco da Gama',
            'bairro'        => 'Capoeira',
            'cep'           => '69910-080',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 798,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Vasconcelos',
            'bairro'        => 'Triângulo',
            'cep'           => '69902-010',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 799,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Veneza',
            'bairro'        => 'Jardim Europa',
            'cep'           => '69911-210',
            'tp_logradouro' => 'Alameda',
        ]);

        DB::table('ac')->insert([
            'id'            => 800,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Veneza',
            'bairro'        => 'Estação Experimental',
            'cep'           => '69907-430',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 801,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Venezuela',
            'bairro'        => 'Jardim Europa',
            'cep'           => '69911-835',
            'tp_logradouro' => 'Alameda',
        ]);

        DB::table('ac')->insert([
            'id'            => 802,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Venezuela',
            'bairro'        => 'Cerâmica',
            'cep'           => '69900-280',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 803,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Vênus',
            'bairro'        => 'Morada do Sol',
            'cep'           => '69910-470',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 804,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Vera Cruz',
            'bairro'        => 'Aviário',
            'cep'           => '69910-670',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 805,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Vera Cruz',
            'bairro'        => 'Bahia',
            'cep'           => '69904-230',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 806,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Verona',
            'bairro'        => 'Jardim Europa',
            'cep'           => '69911-240',
            'tp_logradouro' => 'Alameda',
        ]);

        DB::table('ac')->insert([
            'id'            => 807,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Veterano Henrique Julião',
            'bairro'        => 'Abrahão Alab',
            'cep'           => '69907-120',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 808,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Veterano Hernesto Sales',
            'bairro'        => 'Abrahão Alab',
            'cep'           => '69907-110',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 809,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Veterano Manoel Avelino',
            'bairro'        => 'Abrahão Alab',
            'cep'           => '69907-140',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 810,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Veterano Manoel Barros',
            'bairro'        => 'Abrahão Alab',
            'cep'           => '69907-150',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 811,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Veterano Telmo Julião',
            'bairro'        => 'Abrahão Alab',
            'cep'           => '69907-130',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 812,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Viena',
            'bairro'        => 'Jardim Europa',
            'cep'           => '69911-220',
            'tp_logradouro' => 'Alameda',
        ]);

        DB::table('ac')->insert([
            'id'            => 813,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Vilhena',
            'bairro'        => 'Palheiral',
            'cep'           => '69903-740',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 814,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Vinte',
            'bairro'        => 'Bahia Nova',
            'cep'           => '69904-550',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 815,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Vinte',
            'bairro'        => 'Tancredo Neves',
            'cep'           => '69918-240',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 816,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Vinte de Março',
            'bairro'        => 'Placas',
            'cep'           => '69914-820',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 817,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Vinte e Cinco',
            'bairro'        => 'Bahia Nova',
            'cep'           => '69904-600',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 818,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Vinte e Cinco',
            'bairro'        => 'Tancredo Neves',
            'cep'           => '69918-290',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 819,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Vinte e Dois',
            'bairro'        => 'Tancredo Neves',
            'cep'           => '69918-260',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 820,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Vinte e Dois',
            'bairro'        => 'Bahia Nova',
            'cep'           => '69904-570',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 821,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Vinte e Nove',
            'bairro'        => 'Tancredo Neves',
            'cep'           => '69918-330',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 822,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Vinte e Oito',
            'bairro'        => 'Tancredo Neves',
            'cep'           => '69918-320',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 823,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Vinte e Oito',
            'bairro'        => 'Estação Experimental',
            'cep'           => '69912-610',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 824,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Vinte e Quatro',
            'bairro'        => 'Bahia Nova',
            'cep'           => '69904-590',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 825,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Vinte e Quatro',
            'bairro'        => 'Tancredo Neves',
            'cep'           => '69918-280',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 826,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Vinte e Quatro de Janeiro',
            'bairro'        => 'Seis de Agosto',
            'cep'           => '69901-150',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 827,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Vinte e Seis',
            'bairro'        => 'Tancredo Neves',
            'cep'           => '69918-300',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 828,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Vinte e Sete',
            'bairro'        => 'Tancredo Neves',
            'cep'           => '69918-310',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 829,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Vinte e Três',
            'bairro'        => 'Bahia Nova',
            'cep'           => '69904-580',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 830,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Vinte e Três',
            'bairro'        => 'Tancredo Neves',
            'cep'           => '69918-270',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 831,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Vinte e Um',
            'bairro'        => 'Tancredo Neves',
            'cep'           => '69918-250',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 832,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Vinte e Um',
            'bairro'        => 'Bahia Nova',
            'cep'           => '69904-560',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 833,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Violeta',
            'bairro'        => 'Morada do Sol',
            'cep'           => '69910-490',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 834,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Violetas',
            'bairro'        => 'Primavera',
            'cep'           => '69911-480',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 835,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Virgílio Lima',
            'bairro'        => 'Capoeira',
            'cep'           => '69910-120',
            'tp_logradouro' => 'Travessa',
        ]);

        DB::table('ac')->insert([
            'id'            => 836,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Virgílio Lima',
            'bairro'        => 'Seis de Agosto',
            'cep'           => '69901-060',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 837,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Visconde de Mauá',
            'bairro'        => 'José Augusto',
            'cep'           => '69909-080',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 838,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Vital Brasil',
            'bairro'        => 'Estação Experimental',
            'cep'           => '69912-390',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 839,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Vitória',
            'bairro'        => 'Nova Estação',
            'cep'           => '69914-210',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 840,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Vitória',
            'bairro'        => 'Primavera',
            'cep'           => '69911-440',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 841,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Vitória Régia',
            'bairro'        => 'Morada do Sol',
            'cep'           => '69910-460',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 842,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Xapuri',
            'bairro'        => 'Aeroporto Velho',
            'cep'           => '69903-510',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 843,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Xapuri',
            'bairro'        => 'Base',
            'cep'           => '69908-450',
            'tp_logradouro' => 'Rua',
        ]);

        DB::table('ac')->insert([
            'id'            => 844,
            'cidade'        => 'Rio Branco',
            'logradouro'    => 'Xavier Maia',
            'bairro'        => 'Vila Ivonete',
            'cep'           => '69918-430',
            'tp_logradouro' => 'Conjunto',
        ]);

    }
}
