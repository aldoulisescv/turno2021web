<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\Turno;

class TurnoApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_turno()
    {
        $turno = Turno::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/turnos', $turno
        );

        $this->assertApiResponse($turno);
    }

    /**
     * @test
     */
    public function test_read_turno()
    {
        $turno = Turno::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/turnos/'.$turno->id
        );

        $this->assertApiResponse($turno->toArray());
    }

    /**
     * @test
     */
    public function test_update_turno()
    {
        $turno = Turno::factory()->create();
        $editedTurno = Turno::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/turnos/'.$turno->id,
            $editedTurno
        );

        $this->assertApiResponse($editedTurno);
    }

    /**
     * @test
     */
    public function test_delete_turno()
    {
        $turno = Turno::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/turnos/'.$turno->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/turnos/'.$turno->id
        );

        $this->response->assertStatus(404);
    }
}
