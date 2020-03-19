<?php

use Illuminate\Database\Seeder;

class formsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $forms=[
           [
            'title' =>'abcde',
            'desc'=>'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
           ],
           [
            'title' =>'abcde',
            'desc'=>'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
           ],
           [
            'title' =>'abcde',
            'desc'=>'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'
           ],

        ];
        DB::table('forms')->insert($forms);
    }
}
