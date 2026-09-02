<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Beneficiary;

class BeneficiarySeeder extends Seeder
{
    public function run(): void
    {
        $beneficiaries = [
            ['name' => 'JOSE FRANCISCO RODRIGUEZ ARIAS', 'email' => 'jose.rodriguez@example.com', 'degree' => 'ADM. EMPRESAS Y TURISMO - EGRESADO'],
            ['name' => 'LISETH YULIANA CARRILLO ALVAREZ', 'email' => 'liseth.carrillo@example.com', 'degree' => 'CONTADURIA PUBLICA'],
            ['name' => 'MARIA CAMILIA ARIAS ARIAS', 'email' => 'maria.arias@example.com', 'degree' => 'ING. AGROINDUSTRIAL'],
            ['name' => 'LUCAS DE LOS REYES ARIAS FUENTES', 'email' => 'lucas.arias@example.com', 'degree' => 'LIC. EDUCACION FISICA'],
            ['name' => 'TAINA YISETH ARIAS ARIAS', 'email' => 'taina.arias@example.com', 'degree' => 'ING. BIOLOGICA'],
            ['name' => 'MAIRETH JULIANA MONTERO MONTERO', 'email' => 'maireth.montero@example.com', 'degree' => 'BIOLOGIA'],
            ['name' => 'LICETH CAROLINA CACERES ESTRADA', 'email' => 'liceth.caceres@example.com', 'degree' => 'ING. AMBIENTAL'],
            ['name' => 'SANTIAGO DUVAN MAESTRE OÑATE', 'email' => 'santiago.maestre@example.com', 'degree' => 'ING. BIOLOGICA'],
            ['name' => 'DANIELA ANDREA CARRILLO CARRILLO', 'email' => 'daniela.carrillo@example.com', 'degree' => 'CONTADURIA PUBLICA'],
            ['name' => 'NATALIA EUGENIA MARTINEZ CACERES', 'email' => 'natalia.martinez@example.com', 'degree' => 'INSTRUMENTACION QUIRURGICA'],
            ['name' => 'JASSAIMA MOLIETH ARIZA VILLAZON', 'email' => 'jassaima.ariza@example.com', 'degree' => 'MICROBIOLOGIA'],
            ['name' => 'JULIANA JOSE MAESTRE VILLAZON', 'email' => 'juliana.maestre@example.com', 'degree' => 'ING. AMBIENTAL'],
            ['name' => 'LUIS ALEJANDRO FUENTES CORZO', 'email' => 'luis.fuentes@example.com', 'degree' => 'ING. SISTEMAS - EGRESADO'],
            ['name' => 'YONDER JOSE MINDIOLA IZQUIERDO', 'email' => 'yonder.mindiola@example.com', 'degree' => 'ING. AGRONOMICA'],
            ['name' => 'GERMAN SEGUNDO MAESTRE MONTERO', 'email' => 'german.maestre@example.com', 'degree' => 'CONTADURIA PUBLICA'],
            ['name' => 'RAUL RAFAEL ROMERO ARIAS', 'email' => 'raul.romero@example.com', 'degree' => 'ING. BIOLOGICA'],
            ['name' => 'LUNA GRACIA MAESTRE OÑATE', 'email' => 'luna.maestre@example.com', 'degree' => 'SOCIOLOGIA'],
            ['name' => 'LUISA MARIA CASTRO ARIAS', 'email' => 'luisa.castro@example.com', 'degree' => 'SIN ESPECIFICAR'],
            ['name' => 'KAROL SOFIA CARRILLO ARIAS', 'email' => 'karol.carrillo@example.com', 'degree' => 'MEDICINA'],
            ['name' => 'DIENER GABRIEL FUENTES', 'email' => 'diener.fuentes@example.com', 'degree' => 'ADMINISTRACION DE EMPRESAS'],
            ['name' => 'JESUS DAZA BANDERA', 'email' => 'jesus.daza@example.com', 'degree' => 'MEDICINA'],
            ['name' => 'ROSA ANGELA PINTO', 'email' => 'rosa.pinto@example.com', 'degree' => 'EGRESADA'],
            ['name' => 'ISAIAS ANDRES MONTAÑO', 'email' => 'isaias.montano@example.com', 'degree' => 'ING. ELECTRONICA'],
            ['name' => 'BETSY LILIANA MAESTRE', 'email' => 'betsy.maestre@example.com', 'degree' => 'ECONOMIA - EGRESADO'],
            ['name' => 'GERARDO ENRIQUE MENDOZA CACERES', 'email' => 'gerardo.mendoza@example.com', 'degree' => 'ENFERMERIA - EGRESADO'],
            ['name' => 'ANDREA CAROLINA MONTERO', 'email' => 'andrea.montero@example.com', 'degree' => 'SEGURIDAD Y SALUD EN EL TRABAJO'],
        ];

        foreach ($beneficiaries as $data) {
            Beneficiary::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'degree' => $data['degree'],
                'is_active' => true,
            ]);
        }
    }
}
