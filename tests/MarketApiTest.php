<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class MarketApiTest extends TestCase
{
    use MakeMarketTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateMarket()
    {
        $market = $this->fakeMarketData();
        $this->json('POST', '/api/v1/markets', $market);

        $this->assertApiResponse($market);
    }

    /**
     * @test
     */
    public function testReadMarket()
    {
        $market = $this->makeMarket();
        $this->json('GET', '/api/v1/markets/'.$market->id);

        $this->assertApiResponse($market->toArray());
    }

    /**
     * @test
     */
    public function testUpdateMarket()
    {
        $market = $this->makeMarket();
        $editedMarket = $this->fakeMarketData();

        $this->json('PUT', '/api/v1/markets/'.$market->id, $editedMarket);

        $this->assertApiResponse($editedMarket);
    }

    /**
     * @test
     */
    public function testDeleteMarket()
    {
        $market = $this->makeMarket();
        $this->json('DELETE', '/api/v1/markets/'.$market->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/markets/'.$market->id);

        $this->assertResponseStatus(404);
    }
}
