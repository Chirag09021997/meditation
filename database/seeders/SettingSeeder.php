<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = [
            ['key' => 'address', 'value' => null],
            ['key' => 'mobile_no', 'value' => null],
            ['key' => 'mail', 'value' => 'admin@example.com'],
            ['key' => 'map_url', 'value' => null],
            ['key' => 'facebook_url', 'value' => null],
            ['key' => 'twitter_url', 'value' => null],
            ['key' => 'google_url', 'value' => null],
            ['key' => 'instagram_url', 'value' => null],
            ['key' => 'pinterest_url', 'value' => null],
            ['key' => 'youtube_url', 'value' => null],
            ['key' => 'about_thumb', 'value' => null],
        ];

        foreach ($settings as $setting) {
            Setting::create($setting);
        }
    }
}
