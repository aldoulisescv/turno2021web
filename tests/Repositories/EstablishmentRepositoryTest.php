<?php namespace Tests\Repositories;

use App\Models\Establishment;
use App\Repositories\EstablishmentRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class EstablishmentRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var EstablishmentRepository
     */
    protected $establishmentRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->establishmentRepo = \App::make(EstablishmentRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_establishment()
    {
        $establishment = Establishment::factory()->make()->toArray();

        $createdEstablishment = $this->establishmentRepo->create($establishment);

        $createdEstablishment = $createdEstablishment->toArray();
        $this->assertArrayHasKey('id', $createdEstablishment);
        $this->assertNotNull($createdEstablishment['id'], 'Created Establishment must have id specified');
        $this->assertNotNull(Establishment::find($createdEstablishment['id']), 'Establishment with given id must be in DB');
        $this->assertModelData($establishment, $createdEstablishment);
    }

    /**
     * @test read
     */
    public function test_read_establishment()
    {
        $establishment = Establishment::factory()->create();

        $dbEstablishment = $this->establishmentRepo->find($establishment->id);

        $dbEstablishment = $dbEstablishment->toArray();
        $this->assertModelData($establishment->toArray(), $dbEstablishment);
    }

    /**
     * @test update
     */
    public function test_update_establishment()
    {
        $establishment = Establishment::factory()->create();
        $fakeEstablishment = Establishment::factory()->make()->toArray();

        $updatedEstablishment = $this->establishmentRepo->update($fakeEstablishment, $establishment->id);

        $this->assertModelData($fakeEstablishment, $updatedEstablishment->toArray());
        $dbEstablishment = $this->establishmentRepo->find($establishment->id);
        $this->assertModelData($fakeEstablishment, $dbEstablishment->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_establishment()
    {
        $establishment = Establishment::factory()->create();

        $resp = $this->establishmentRepo->delete($establishment->id);

        $this->assertTrue($resp);
        $this->assertNull(Establishment::find($establishment->id), 'Establishment should not exist in DB');
    }
}
