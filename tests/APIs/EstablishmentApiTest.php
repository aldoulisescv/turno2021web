<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\Establishment;

class EstablishmentApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_establishment()
    {
        $establishment = Establishment::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/establishments', $establishment
        );

        $this->assertApiResponse($establishment);
    }

    /**
     * @test
     */
    public function test_read_establishment()
    {
        $establishment = Establishment::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/establishments/'.$establishment->id
        );

        $this->assertApiResponse($establishment->toArray());
    }

    /**
     * @test
     */
    public function test_update_establishment()
    {
        $establishment = Establishment::factory()->create();
        $editedEstablishment = Establishment::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/establishments/'.$establishment->id,
            $editedEstablishment
        );

        $this->assertApiResponse($editedEstablishment);
    }

    /**
     * @test
     */
    public function test_delete_establishment()
    {
        $establishment = Establishment::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/establishments/'.$establishment->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/establishments/'.$establishment->id
        );

        $this->response->assertStatus(404);
    }
}
