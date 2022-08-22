<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CallSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\User::factory()->create([
            'name' => 'Maria de jesus',
            'email' => 'mjsm.mdrs@example.com',
        ]);
    }
}
