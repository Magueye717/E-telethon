<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	public function run()
	{
		$this->call('ContactSeed');
		$this->command->info('Contact table seeded!');

		$this->call('DonateurSeed');
		$this->command->info('Donateur table seeded!');
		
		$this->call('UserSeed');
        $this->command->info('User table seeded!');
	}
}