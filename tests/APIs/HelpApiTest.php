<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\Help;

class HelpApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_help()
    {
        $help = Help::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/helps', $help
        );

        $this->assertApiResponse($help);
    }

    /**
     * @test
     */
    public function test_read_help()
    {
        $help = Help::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/helps/'.$help->id
        );

        $this->assertApiResponse($help->toArray());
    }

    /**
     * @test
     */
    public function test_update_help()
    {
        $help = Help::factory()->create();
        $editedHelp = Help::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/helps/'.$help->id,
            $editedHelp
        );

        $this->assertApiResponse($editedHelp);
    }

    /**
     * @test
     */
    public function test_delete_help()
    {
        $help = Help::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/helps/'.$help->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/helps/'.$help->id
        );

        $this->response->assertStatus(404);
    }
}
