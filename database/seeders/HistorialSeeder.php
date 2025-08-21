<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Historial;

class HistorialSeeder extends Seeder
{
    public function run()
    {
        // Crear historiales de prueba
        Historial::create([
            'id_hist' => 'HIST001',
            'fecha' => '2025-01-10',
            'alergias' => 'Penicilina, Polen',
            'notas' => 'Paciente con antecedentes de hipertensión arterial. Control cada 3 meses recomendado.'
        ]);

        Historial::create([
            'id_hist' => 'HIST002',
            'fecha' => '2025-01-12',
            'alergias' => null,
            'notas' => 'Paciente pediátrico sin alergias conocidas. Desarrollo normal para su edad.'
        ]);

        Historial::create([
            'id_hist' => 'HIST003',
            'fecha' => '2025-01-14',
            'alergias' => 'Mariscos',
            'notas' => 'Primera consulta. Se recomienda seguimiento nutricional.'
        ]);
    }
}