<?php

use Faker\Factory as Faker;
use App\Models\Market;
use App\Repositories\MarketRepository;

trait MakeMarketTrait
{
    /**
     * Create fake instance of Market and save it in database
     *
     * @param array $marketFields
     * @return Market
     */
    public function makeMarket($marketFields = [])
    {
        /** @var MarketRepository $marketRepo */
        $marketRepo = App::make(MarketRepository::class);
        $theme = $this->fakeMarketData($marketFields);
        return $marketRepo->create($theme);
    }

    /**
     * Get fake instance of Market
     *
     * @param array $marketFields
     * @return Market
     */
    public function fakeMarket($marketFields = [])
    {
        return new Market($this->fakeMarketData($marketFields));
    }

    /**
     * Get fake data of Market
     *
     * @param array $postFields
     * @return array
     */
    public function fakeMarketData($marketFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'market_name' => $fake->word,
            'market_icon' => $fake->word,
            'market_country' => $fake->word,
            'market_province' => $fake->word,
            'market_regency' => $fake->word,
            'market_district' => $fake->word,
            'latitude' => $fake->word,
            'market_longitude' => $fake->word,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $marketFields);
    }
}
