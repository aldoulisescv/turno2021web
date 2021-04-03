<?php namespace Tests\Repositories;

use App\Models\BlockedDates;
use App\Repositories\BlockedDatesRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class BlockedDatesRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var BlockedDatesRepository
     */
    protected $blockedDatesRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->blockedDatesRepo = \App::make(BlockedDatesRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_blocked_dates()
    {
        $blockedDates = BlockedDates::factory()->make()->toArray();

        $createdBlockedDates = $this->blockedDatesRepo->create($blockedDates);

        $createdBlockedDates = $createdBlockedDates->toArray();
        $this->assertArrayHasKey('id', $createdBlockedDates);
        $this->assertNotNull($createdBlockedDates['id'], 'Created BlockedDates must have id specified');
        $this->assertNotNull(BlockedDates::find($createdBlockedDates['id']), 'BlockedDates with given id must be in DB');
        $this->assertModelData($blockedDates, $createdBlockedDates);
    }

    /**
     * @test read
     */
    public function test_read_blocked_dates()
    {
        $blockedDates = BlockedDates::factory()->create();

        $dbBlockedDates = $this->blockedDatesRepo->find($blockedDates->id);

        $dbBlockedDates = $dbBlockedDates->toArray();
        $this->assertModelData($blockedDates->toArray(), $dbBlockedDates);
    }

    /**
     * @test update
     */
    public function test_update_blocked_dates()
    {
        $blockedDates = BlockedDates::factory()->create();
        $fakeBlockedDates = BlockedDates::factory()->make()->toArray();

        $updatedBlockedDates = $this->blockedDatesRepo->update($fakeBlockedDates, $blockedDates->id);

        $this->assertModelData($fakeBlockedDates, $updatedBlockedDates->toArray());
        $dbBlockedDates = $this->blockedDatesRepo->find($blockedDates->id);
        $this->assertModelData($fakeBlockedDates, $dbBlockedDates->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_blocked_dates()
    {
        $blockedDates = BlockedDates::factory()->create();

        $resp = $this->blockedDatesRepo->delete($blockedDates->id);

        $this->assertTrue($resp);
        $this->assertNull(BlockedDates::find($blockedDates->id), 'BlockedDates should not exist in DB');
    }
}
