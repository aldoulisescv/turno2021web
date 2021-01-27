<?php namespace Tests\Repositories;

use App\Models\StatusTurno;
use App\Repositories\StatusTurnoRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class StatusTurnoRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var StatusTurnoRepository
     */
    protected $statusTurnoRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->statusTurnoRepo = \App::make(StatusTurnoRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_status_turno()
    {
        $statusTurno = StatusTurno::factory()->make()->toArray();

        $createdStatusTurno = $this->statusTurnoRepo->create($statusTurno);

        $createdStatusTurno = $createdStatusTurno->toArray();
        $this->assertArrayHasKey('id', $createdStatusTurno);
        $this->assertNotNull($createdStatusTurno['id'], 'Created StatusTurno must have id specified');
        $this->assertNotNull(StatusTurno::find($createdStatusTurno['id']), 'StatusTurno with given id must be in DB');
        $this->assertModelData($statusTurno, $createdStatusTurno);
    }

    /**
     * @test read
     */
    public function test_read_status_turno()
    {
        $statusTurno = StatusTurno::factory()->create();

        $dbStatusTurno = $this->statusTurnoRepo->find($statusTurno->id);

        $dbStatusTurno = $dbStatusTurno->toArray();
        $this->assertModelData($statusTurno->toArray(), $dbStatusTurno);
    }

    /**
     * @test update
     */
    public function test_update_status_turno()
    {
        $statusTurno = StatusTurno::factory()->create();
        $fakeStatusTurno = StatusTurno::factory()->make()->toArray();

        $updatedStatusTurno = $this->statusTurnoRepo->update($fakeStatusTurno, $statusTurno->id);

        $this->assertModelData($fakeStatusTurno, $updatedStatusTurno->toArray());
        $dbStatusTurno = $this->statusTurnoRepo->find($statusTurno->id);
        $this->assertModelData($fakeStatusTurno, $dbStatusTurno->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_status_turno()
    {
        $statusTurno = StatusTurno::factory()->create();

        $resp = $this->statusTurnoRepo->delete($statusTurno->id);

        $this->assertTrue($resp);
        $this->assertNull(StatusTurno::find($statusTurno->id), 'StatusTurno should not exist in DB');
    }
}
