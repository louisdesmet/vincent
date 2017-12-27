<?php

use Illuminate\Database\Seeder;
use App\Page;

class PagesTableSeeder extends Seeder
{
    private static $PAGES = [
        ['name' => 'home'],
        ['name' => 'about'],
        ['name' => 'contact'],
        ['name' => 'gallery'],
        ['name' => 'info']
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        foreach (self::$PAGES as $PAGE) {
            Page::create($PAGE);
        }
    }
}
