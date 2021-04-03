<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\StatusTurno;

class StatusTurnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StatusTurno::create([
            'name' => 'solicitado',
            'description' => 'Cuando se crean los turnos entran como solicitados',
        ]);
        StatusTurno::create([
            'name' => 'rechazado',
            'description' => 'Cuando el establecimiento rechaza la solicitud del cliente, y agrega comentarios',
        ]);
        StatusTurno::create([
            'name' => 'agendado',
            'description' => 'Cuando el establecimiento autorize el turno, cambia a pendiente (puede ser autorizado automaticamente)',
        ]);
        StatusTurno::create([
            'name' => 'confirmado',
            'description' => 'El Cliente confirma que asistirá, antes de la fecha de cancelación',
        ]);
        StatusTurno::create([
            'name' => 'cancelado',
            'description' => 'El Cliente cancela el turno, antes de la fecha de cancelación, agrega comentarios, o razones',
        ]);
        StatusTurno::create([
            'name' => 'atendiendo',
            'description' => 'Cuando el cliente llega al establecimiento, el cliente confirma que llegó, el establecimiento confirma que llegó, con que el establecimiento confirme es suficiente, puede ser en automatico al llegar la hora',
        ]);
        StatusTurno::create([
            'name' => 'atendido',
            'description' => 'Cuando el establecimiento finaliza el servicio, agrega comentarios',
        ]);
        StatusTurno::create([
            'name' => 'calificado',
            'description' => 'Cuando el califica el servicio, agrega comentarios',
        ]);
    }
}
