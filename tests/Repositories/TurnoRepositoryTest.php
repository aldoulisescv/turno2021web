<?php namespace Tests\Repositories;

use App\Models\Turno;
use App\Repositories\TurnoRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class TurnoRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var TurnoRepository
     */
    protected $turnoRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->turnoRepo = \App::make(TurnoRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_turno()
    {
        $turno = Turno::factory()->make()->toArray();

        $createdTurno = $this->turnoRepo->create($turno);

        $createdTurno = $createdTurno->toArray();
        $this->assertArrayHasKey('id', $createdTurno);
        $this->assertNotNull($createdTurno['id'], 'Created Turno must have id specified');
        $this->assertNotNull(Turno::find($createdTurno['id']), 'Turno with given id must be in DB');
        $this->assertModelData($turno, $createdTurno);
    }

    /**
     * @test read
     */
    public function test_read_turno()
    {
        $turno = Turno::factory()->create();

        $dbTurno = $this->turnoRepo->find($turno->id);

        $dbTurno = $dbTurno->toArray();
        $this->assertModelData($turno->toArray(), $dbTurno);
    }

    /**
     * @test update
     */
    public function test_update_turno()
    {
        $turno = Turno::factory()->create();
        $fakeTurno = Turno::factory()->make()->toArray();

        $updatedTurno = $this->turnoRepo->update($fakeTurno, $turno->id);

        $this->assertModelData($fakeTurno, $updatedTurno->toArray());
        $dbTurno = $this->turnoRepo->find($turno->id);
        $this->assertModelData($fakeTurno, $dbTurno->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_turno()
    {
        $turno = Turno::factory()->create();

        $resp = $this->turnoRepo->delete($turno->id);

        $this->assertTrue($resp);
        $this->assertNull(Turno::find($turno->id), 'Turno should not exist in DB');
    }
}
