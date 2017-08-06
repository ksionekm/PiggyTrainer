<?php

use Illuminate\Database\Seeder;

class TrainingTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trainingTypes = [
            ['id' => 1, 'name' => 'Running', 'social' => false],
            ['id' => 2, 'name' => 'Bike', 'social' => false],
            ['id' => 3, 'name' => 'Squash', 'social' => true],
            ['id' => 4, 'name' => 'Swimming', 'social' => false],
            ['id' => 5, 'name' => 'Football', 'social' => true],
            ['id' => 6, 'name' => 'Basketball', 'social' => true]
        ];

        DB::table('training_types')->insert($trainingTypes);
    }
}
