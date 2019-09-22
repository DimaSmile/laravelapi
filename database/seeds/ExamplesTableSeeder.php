<?php

use Illuminate\Database\Seeder;

class ExamplesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $item = new \App\Example();

        $data = [];
        for($test = 0; $test < 10; $test++){
            $data[$test]['name'] = 'test'.$test;
            $data[$test]['value'] = 300 + $test;
        }

        \DB::table('examples')->insert($data);
    }
}
