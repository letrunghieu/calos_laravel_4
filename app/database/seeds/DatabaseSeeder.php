<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		// $this->call('UserTableSeeder');
		$this->call('UnitTableSeeder');
		$this->call('UserTableSeeder');
		$this->call('AnnouncementSeeder');
		$this->call('ActivitySeeder');
	}

}