<?php namespace Tests\Repositories;

use App\Models\RelationResourceSession;
use App\Repositories\RelationResourceSessionRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class RelationResourceSessionRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var RelationResourceSessionRepository
     */
    protected $relationResourceSessionRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->relationResourceSessionRepo = \App::make(RelationResourceSessionRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_relation_resource_session()
    {
        $relationResourceSession = RelationResourceSession::factory()->make()->toArray();

        $createdRelationResourceSession = $this->relationResourceSessionRepo->create($relationResourceSession);

        $createdRelationResourceSession = $createdRelationResourceSession->toArray();
        $this->assertArrayHasKey('id', $createdRelationResourceSession);
        $this->assertNotNull($createdRelationResourceSession['id'], 'Created RelationResourceSession must have id specified');
        $this->assertNotNull(RelationResourceSession::find($createdRelationResourceSession['id']), 'RelationResourceSession with given id must be in DB');
        $this->assertModelData($relationResourceSession, $createdRelationResourceSession);
    }

    /**
     * @test read
     */
    public function test_read_relation_resource_session()
    {
        $relationResourceSession = RelationResourceSession::factory()->create();

        $dbRelationResourceSession = $this->relationResourceSessionRepo->find($relationResourceSession->id);

        $dbRelationResourceSession = $dbRelationResourceSession->toArray();
        $this->assertModelData($relationResourceSession->toArray(), $dbRelationResourceSession);
    }

    /**
     * @test update
     */
    public function test_update_relation_resource_session()
    {
        $relationResourceSession = RelationResourceSession::factory()->create();
        $fakeRelationResourceSession = RelationResourceSession::factory()->make()->toArray();

        $updatedRelationResourceSession = $this->relationResourceSessionRepo->update($fakeRelationResourceSession, $relationResourceSession->id);

        $this->assertModelData($fakeRelationResourceSession, $updatedRelationResourceSession->toArray());
        $dbRelationResourceSession = $this->relationResourceSessionRepo->find($relationResourceSession->id);
        $this->assertModelData($fakeRelationResourceSession, $dbRelationResourceSession->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_relation_resource_session()
    {
        $relationResourceSession = RelationResourceSession::factory()->create();

        $resp = $this->relationResourceSessionRepo->delete($relationResourceSession->id);

        $this->assertTrue($resp);
        $this->assertNull(RelationResourceSession::find($relationResourceSession->id), 'RelationResourceSession should not exist in DB');
    }
}
