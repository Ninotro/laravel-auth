<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Project;
use Illuminate\Support\Facades\DB; // Aggiungi questa riga per utilizzare la classe DB

class ProjectSeeder extends Seeder
{
    public function run()
    {
        
        Project::factory()->count(10)->create();
    }
}