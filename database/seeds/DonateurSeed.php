<?php

use App\Models\Contact;
use App\Models\Donateur;
use App\User;
use Illuminate\Database\Seeder;

class DonateurSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Donateur::class, 10)->create();
    }
}
