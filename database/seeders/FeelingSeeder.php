<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Feeling;
class FeelingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Feeling::create([
            'feeling' => 'Happy',
            'image' => 'not available'
        ]);
        Feeling::create([
            'feeling' => 'Sad',
            'image' => 'not available'
        ]);
        Feeling::create([
            'feeling' => 'Love',
            'image' => 'not available'
        ]);
        Feeling::create([
            'feeling' => 'Peace',
            'image' => 'not available'
        ]);
        Feeling::create([
            'feeling' => 'Hate',
            'image' => 'not available'
        ]);
        Feeling::create([
            'feeling' => 'Surprise',
            'image' => 'not available'
        ]);
    }
}
