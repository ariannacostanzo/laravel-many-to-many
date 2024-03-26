<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $technologies = [
            ['label' => 'HTML', 'color' => 'danger'],
            ['label' => 'CSS', 'color' => 'primary'],
            ['label' => 'ES6', 'color' => 'warning'],
            ['label' => 'Bootstraap', 'color' => 'dark'],
            ['label' => 'Vue', 'color' => 'success'],
            ['label' => 'SQL', 'color' => 'secondary'],
            ['label' => 'php', 'color' => 'info'],
            ['label' => 'Laravel', 'color' => 'danger-subtle'],
        ];

        foreach($technologies as $tech)
        {
            $new_tech = new Technology();

            $new_tech->label = $tech['label'];
            $new_tech->color = $tech['color'];

            $new_tech->save();
        }
    }
}