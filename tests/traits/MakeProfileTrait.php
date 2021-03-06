<?php

use Faker\Factory as Faker;
use App\Models\Profile;
use App\Repositories\ProfileRepository;

trait MakeProfileTrait
{
    /**
     * Create fake instance of Profile and save it in database
     *
     * @param array $profileFields
     * @return Profile
     */
    public function makeProfile($profileFields = [])
    {
        /** @var ProfileRepository $profileRepo */
        $profileRepo = App::make(ProfileRepository::class);
        $theme = $this->fakeProfileData($profileFields);
        return $profileRepo->create($theme);
    }

    /**
     * Get fake instance of Profile
     *
     * @param array $profileFields
     * @return Profile
     */
    public function fakeProfile($profileFields = [])
    {
        return new Profile($this->fakeProfileData($profileFields));
    }

    /**
     * Get fake data of Profile
     *
     * @param array $postFields
     * @return array
     */
    public function fakeProfileData($profileFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'user_id' => $fake->randomDigitNotNull,
            'profile_province' => $fake->word,
            'profile_regency' => $fake->word,
            'profile_district' => $fake->word,
            'profile_address' => $fake->word,
            'profile_birthday' => $fake->word,
            'profile_genre' => $fake->word,
            'profile_job' => $fake->word,
            'profile_latitude' => $fake->word,
            'profile_longitude' => $fake->word,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $profileFields);
    }
}
