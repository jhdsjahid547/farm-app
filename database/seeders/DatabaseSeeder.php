<?php

namespace Database\Seeders;

use App\Models\Cattle;
use App\Models\CattleCategory;
use App\Models\CattleCategoryOption;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com'
        ]);
        CattleCategory::insert([
            [ 'title' => 'Type', 'code' => '101'],
            [ 'title' => 'Gender', 'code' => '102'],
            [ 'title' => 'Subsection', 'code' => '103'],
            [ 'title' => 'Breed', 'code' => '104']
        ]);
        CattleCategoryOption::insert([
            [ 'cattle_category_id' => 1, 'name' => 'Cow'],
            [ 'cattle_category_id' => 1, 'name' => 'Goat'],
            [ 'cattle_category_id' => 1, 'name' => 'Sheep'],
            [ 'cattle_category_id' => 1, 'name' => 'Dummba'],
            [ 'cattle_category_id' => 2, 'name' => 'Male'],
            [ 'cattle_category_id' => 2, 'name' => 'Female'],
            [ 'cattle_category_id' => 3, 'name' => 'Deshal'],
            [ 'cattle_category_id' => 3, 'name' => 'shahai-wall'],
            [ 'cattle_category_id' => 3, 'name' => 'freezian'],
            [ 'cattle_category_id' => 3, 'name' => 'jercy'],
            [ 'cattle_category_id' => 4, 'name' => 'calf'],
            [ 'cattle_category_id' => 4, 'name' => 'hipper'],
            [ 'cattle_category_id' => 4, 'name' => 'bull']
        ]);
        Cattle::factory(20)->create();
    }
}
