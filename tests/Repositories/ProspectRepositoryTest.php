<?php namespace Tests\Repositories;

use App\Models\Prospect;
use App\Repositories\ProspectRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class ProspectRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var ProspectRepository
     */
    protected $prospectRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->prospectRepo = \App::make(ProspectRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_prospect()
    {
        $prospect = Prospect::factory()->make()->toArray();

        $createdProspect = $this->prospectRepo->create($prospect);

        $createdProspect = $createdProspect->toArray();
        $this->assertArrayHasKey('id', $createdProspect);
        $this->assertNotNull($createdProspect['id'], 'Created Prospect must have id specified');
        $this->assertNotNull(Prospect::find($createdProspect['id']), 'Prospect with given id must be in DB');
        $this->assertModelData($prospect, $createdProspect);
    }

    /**
     * @test read
     */
    public function test_read_prospect()
    {
        $prospect = Prospect::factory()->create();

        $dbProspect = $this->prospectRepo->find($prospect->id);

        $dbProspect = $dbProspect->toArray();
        $this->assertModelData($prospect->toArray(), $dbProspect);
    }

    /**
     * @test update
     */
    public function test_update_prospect()
    {
        $prospect = Prospect::factory()->create();
        $fakeProspect = Prospect::factory()->make()->toArray();

        $updatedProspect = $this->prospectRepo->update($fakeProspect, $prospect->id);

        $this->assertModelData($fakeProspect, $updatedProspect->toArray());
        $dbProspect = $this->prospectRepo->find($prospect->id);
        $this->assertModelData($fakeProspect, $dbProspect->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_prospect()
    {
        $prospect = Prospect::factory()->create();

        $resp = $this->prospectRepo->delete($prospect->id);

        $this->assertTrue($resp);
        $this->assertNull(Prospect::find($prospect->id), 'Prospect should not exist in DB');
    }
}
