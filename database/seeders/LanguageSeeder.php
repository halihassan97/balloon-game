<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Language;

class LanguageSeeder extends Seeder
{
    public function run(): void
    {
        // Insert defaults (adjust as needed)
        Language::updateOrCreate(['code' => 'en'], [
            'name' => 'English',
            'is_default' => true,
            'active' => true,
        ]);

        Language::updateOrCreate(['code' => 'ar'], [
            'name' => 'Arabic',
            'is_default' => false,
            'active' => true,
        ]);
    }
}
