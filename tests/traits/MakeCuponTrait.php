<?php

use Faker\Factory as Faker;
use App\Models\Cupon;
use App\Repositories\CuponRepository;

trait MakeCuponTrait
{
    /**
     * Create fake instance of Cupon and save it in database
     *
     * @param array $cuponFields
     * @return Cupon
     */
    public function makeCupon($cuponFields = [])
    {
        /** @var CuponRepository $cuponRepo */
        $cuponRepo = App::make(CuponRepository::class);
        $theme = $this->fakeCuponData($cuponFields);
        return $cuponRepo->create($theme);
    }

    /**
     * Get fake instance of Cupon
     *
     * @param array $cuponFields
     * @return Cupon
     */
    public function fakeCupon($cuponFields = [])
    {
        return new Cupon($this->fakeCuponData($cuponFields));
    }

    /**
     * Get fake data of Cupon
     *
     * @param array $postFields
     * @return array
     */
    public function fakeCuponData($cuponFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'cupon_code' => $fake->word,
            'cupon_object' => $fake->word,
            'cupon_type' => $fake->word,
            'cupon_is_recuring' => $fake->word,
            'cupon_start' => $fake->word,
            'cupon_end' => $fake->word,
            'cupon_description' => $fake->text,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $cuponFields);
    }
}
