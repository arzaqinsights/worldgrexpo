<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SiteSetting;

class SiteSettingsSeeder extends Seeder
{
    public function run(): void
    {
        $defaults = [
            'phone_1' => '+91-9810690843',
            'phone_2' => '',
            'phone_3' => '',
            'email_1' => 'support@worldgrexpo.com',
            'email_2' => 'info@worldgrexpo.com',
            'address' => "World Grexpo Global Headquarters\nNew Delhi, India",
            'facebook_url' => 'https://facebook.com/worldgrexpo',
            'twitter_url' => 'https://twitter.com/worldgrexpo',
            'instagram_url' => 'https://instagram.com/worldgrexpo',
            'linkedin_url' => 'https://linkedin.com/company/worldgrexpo',
            'youtube_url' => 'https://youtube.com/@worldgrexpo',
            'whatsapp_url' => 'https://wa.me/919810690843',
        ];

        foreach ($defaults as $key => $value) {
            SiteSetting::updateOrCreate(['key' => $key], ['value' => $value]);
        }
    }
}
