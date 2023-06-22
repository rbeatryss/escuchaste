<?php

namespace Database\Seeders;

use App\Models\Snippet;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SnippetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('snippet')->truncate();
        Snippet::factory()->count(10)->create();
    }
}
