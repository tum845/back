<?php

use App\Models\Market;
use App\Repositories\MarketRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class MarketRepositoryTest extends TestCase
{
    use MakeMarketTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var MarketRepository
     */
    protected $marketRepo;

    public function setUp()
    {
        parent::setUp();
        $this->marketRepo = App::make(MarketRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateMarket()
    {
        $market = $this->fakeMarketData();
        $createdMarket = $this->marketRepo->create($market);
        $createdMarket = $createdMarket->toArray();
        $this->assertArrayHasKey('id', $createdMarket);
        $this->assertNotNull($createdMarket['id'], 'Created Market must have id specified');
        $this->assertNotNull(Market::find($createdMarket['id']), 'Market with given id must be in DB');
        $this->assertModelData($market, $createdMarket);
    }

    /**
     * @test read
     */
    public function testReadMarket()
    {
        $market = $this->makeMarket();
        $dbMarket = $this->marketRepo->find($market->id);
        $dbMarket = $dbMarket->toArray();
        $this->assertModelData($market->toArray(), $dbMarket);
    }

    /**
     * @test update
     */
    public function testUpdateMarket()
    {
        $market = $this->makeMarket();
        $fakeMarket = $this->fakeMarketData();
        $updatedMarket = $this->marketRepo->update($fakeMarket, $market->id);
        $this->assertModelData($fakeMarket, $updatedMarket->toArray());
        $dbMarket = $this->marketRepo->find($market->id);
        $this->assertModelData($fakeMarket, $dbMarket->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteMarket()
    {
        $market = $this->makeMarket();
        $resp = $this->marketRepo->delete($market->id);
        $this->assertTrue($resp);
        $this->assertNull(Market::find($market->id), 'Market should not exist in DB');
    }
}
