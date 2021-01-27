<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\StatusTurno;

class StatusTurnoApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_status_turno()
    {
        $statusTurno = StatusTurno::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/status_turnos', $statusTurno
        );

        $this->assertApiResponse($statusTurno);
    }

    /**
     * @test
     */
    public function test_read_status_turno()
    {
        $statusTurno = StatusTurno::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/status_turnos/'.$statusTurno->id
        );

        $this->assertApiResponse($statusTurno->toArray());
    }

    /**
     * @test
     */
    public function test_update_status_turno()
    {
        $statusTurno = StatusTurno::factory()->create();
        $editedStatusTurno = StatusTurno::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/status_turnos/'.$statusTurno->id,
            $editedStatusTurno
        );

        $this->assertApiResponse($editedStatusTurno);
    }

    /**
     * @test
     */
    public function test_delete_status_turno()
    {
        $statusTurno = StatusTurno::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/status_turnos/'.$statusTurno->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/status_turnos/'.$statusTurno->id
        );

        $this->response->assertStatus(404);
    }
}
