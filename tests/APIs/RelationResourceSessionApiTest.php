<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\RelationResourceSession;

class RelationResourceSessionApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_relation_resource_session()
    {
        $relationResourceSession = RelationResourceSession::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/relation_resource_sessions', $relationResourceSession
        );

        $this->assertApiResponse($relationResourceSession);
    }

    /**
     * @test
     */
    public function test_read_relation_resource_session()
    {
        $relationResourceSession = RelationResourceSession::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/relation_resource_sessions/'.$relationResourceSession->id
        );

        $this->assertApiResponse($relationResourceSession->toArray());
    }

    /**
     * @test
     */
    public function test_update_relation_resource_session()
    {
        $relationResourceSession = RelationResourceSession::factory()->create();
        $editedRelationResourceSession = RelationResourceSession::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/relation_resource_sessions/'.$relationResourceSession->id,
            $editedRelationResourceSession
        );

        $this->assertApiResponse($editedRelationResourceSession);
    }

    /**
     * @test
     */
    public function test_delete_relation_resource_session()
    {
        $relationResourceSession = RelationResourceSession::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/relation_resource_sessions/'.$relationResourceSession->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/relation_resource_sessions/'.$relationResourceSession->id
        );

        $this->response->assertStatus(404);
    }
}
