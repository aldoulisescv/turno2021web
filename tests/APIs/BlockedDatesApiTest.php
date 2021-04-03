<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\BlockedDates;

class BlockedDatesApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_blocked_dates()
    {
        $blockedDates = BlockedDates::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/blocked_dates', $blockedDates
        );

        $this->assertApiResponse($blockedDates);
    }

    /**
     * @test
     */
    public function test_read_blocked_dates()
    {
        $blockedDates = BlockedDates::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/blocked_dates/'.$blockedDates->id
        );

        $this->assertApiResponse($blockedDates->toArray());
    }

    /**
     * @test
     */
    public function test_update_blocked_dates()
    {
        $blockedDates = BlockedDates::factory()->create();
        $editedBlockedDates = BlockedDates::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/blocked_dates/'.$blockedDates->id,
            $editedBlockedDates
        );

        $this->assertApiResponse($editedBlockedDates);
    }

    /**
     * @test
     */
    public function test_delete_blocked_dates()
    {
        $blockedDates = BlockedDates::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/blocked_dates/'.$blockedDates->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/blocked_dates/'.$blockedDates->id
        );

        $this->response->assertStatus(404);
    }
}
