<?php namespace Tests\Repositories;

use App\Models\Help;
use App\Repositories\HelpRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class HelpRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var HelpRepository
     */
    protected $helpRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->helpRepo = \App::make(HelpRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_help()
    {
        $help = Help::factory()->make()->toArray();

        $createdHelp = $this->helpRepo->create($help);

        $createdHelp = $createdHelp->toArray();
        $this->assertArrayHasKey('id', $createdHelp);
        $this->assertNotNull($createdHelp['id'], 'Created Help must have id specified');
        $this->assertNotNull(Help::find($createdHelp['id']), 'Help with given id must be in DB');
        $this->assertModelData($help, $createdHelp);
    }

    /**
     * @test read
     */
    public function test_read_help()
    {
        $help = Help::factory()->create();

        $dbHelp = $this->helpRepo->find($help->id);

        $dbHelp = $dbHelp->toArray();
        $this->assertModelData($help->toArray(), $dbHelp);
    }

    /**
     * @test update
     */
    public function test_update_help()
    {
        $help = Help::factory()->create();
        $fakeHelp = Help::factory()->make()->toArray();

        $updatedHelp = $this->helpRepo->update($fakeHelp, $help->id);

        $this->assertModelData($fakeHelp, $updatedHelp->toArray());
        $dbHelp = $this->helpRepo->find($help->id);
        $this->assertModelData($fakeHelp, $dbHelp->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_help()
    {
        $help = Help::factory()->create();

        $resp = $this->helpRepo->delete($help->id);

        $this->assertTrue($resp);
        $this->assertNull(Help::find($help->id), 'Help should not exist in DB');
    }
}
