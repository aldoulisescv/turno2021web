<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\Prospect;

class ProspectApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_prospect()
    {
        $prospect = Prospect::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/prospects', $prospect
        );

        $this->assertApiResponse($prospect);
    }

    /**
     * @test
     */
    public function test_read_prospect()
    {
        $prospect = Prospect::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/prospects/'.$prospect->id
        );

        $this->assertApiResponse($prospect->toArray());
    }

    /**
     * @test
     */
    public function test_update_prospect()
    {
        $prospect = Prospect::factory()->create();
        $editedProspect = Prospect::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/prospects/'.$prospect->id,
            $editedProspect
        );

        $this->assertApiResponse($editedProspect);
    }

    /**
     * @test
     */
    public function test_delete_prospect()
    {
        $prospect = Prospect::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/prospects/'.$prospect->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/prospects/'.$prospect->id
        );

        $this->response->assertStatus(404);
    }
}
