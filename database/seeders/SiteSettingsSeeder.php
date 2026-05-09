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
            'email_1' => 'support@World Grexpo.in',
            'email_2' => '',
            'address' => "India's MSME Headquarters\nNew Delhi, India",
            'facebook_url' => 'https://facebook.com/World Grexpo',
            'twitter_url' => 'https://twitter.com/World Grexpo',
            'instagram_url' => 'https://instagram.com/World Grexpo',
            'linkedin_url' => 'https://linkedin.com/company/World Grexpo',
            'youtube_url' => 'https://youtube.com/@World Grexpo',
            'whatsapp_url' => 'https://wa.me/919810690843',
        ];

        foreach ($defaults as $key => $value) {
            SiteSetting::updateOrCreate(['key' => $key], ['value' => $value]);
        }
    }
}
