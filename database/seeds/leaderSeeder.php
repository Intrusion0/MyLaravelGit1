<?php

use Illuminate\Database\Seeder;
use App\Leader;
use PhpParser\Lexer;

class leaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Leader::class, 50) -> create();
    }
}
