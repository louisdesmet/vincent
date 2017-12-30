<?php

use Illuminate\Database\Seeder;
use App\Navigation;

class NavigationsTableSeeder extends Seeder {

    private static $NAVIGATIONS = [
        ['page_id' => 1, 'name' => 'home'],
        ['page_id' => 2, 'name' => 'about'],
        ['page_id' => 3, 'name' => 'contact'],
        ['page_id' => 4, 'name' => 'gallery'],
        ['page_id' => 5, 'name' => 'info']
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        foreach (self::$NAVIGATIONS as $NAVIGATION) {
            Navigation::create($NAVIGATION);
        }
    }

}
