<?php

namespace Tests;

use Illuminate\Support\Facades\DB;

require_once __DIR__ . '/../database/seeds/BaseSeeder.php';
require_once __DIR__ . '/../database/seeds/CountryTableSeeder.php';
require_once __DIR__ . '/../database/seeds/NationalityTableSeeder.php';

class SeederTest extends TestCase {
	public function testInsertsNewData() {
		$seeder = new \NationalityTableSeeder();
		$seeder->run();
		$this->assertEquals(count($seeder->seeds()), DB::table('nationalities')->get()->count());
		$this->assertEquals('0300', DB::table('nationalities')->find(1)->code);
	}

	public function testUpdatesSyncedData() {
		$seeder = new \NationalityTableSeeder();
		$seeder->run();

		app()['config']->set('country.nationalities.sync', true);
		DB::table('nationalities')->update(['id' => 1, 'code' => 'UPDATED']);
		$this->assertEquals('UPDATED', DB::table('nationalities')->find(1)->code);

		$seeder->run();
		$this->assertEquals('0300', DB::table('nationalities')->find(1)->code);
	}

	public function testDoesntUpdateUnsyncedData() {
		$seeder = new \NationalityTableSeeder();
		$seeder->run();

		app()['config']->set('country.nationalities.sync', false);
		DB::table('nationalities')->where('id', 1)->update(['code' => 'UPDATED']);
		$this->assertEquals('UPDATED', DB::table('nationalities')->find(1)->code);

		$seeder->run();
		$this->assertEquals('UPDATED', DB::table('nationalities')->find(1)->code);
	}

	public function testRespectsColumnRenamesOnInsert() {
		app()['config']->set('country.nationalities.columns.code', 'search_code');
		$this->refreshDB();
		$seeder = new \NationalityTableSeeder();
		$seeder->run();

		$entity = DB::table('nationalities')->find(1);
		$this->assertObjectNotHasAttribute('code', $entity);
		$this->assertEquals('0300', $entity->search_code);
	}

	public function testRespectsColumnRenamesOnUpdate() {
		app()['config']->set('country.nationalities.columns.code', 'search_code');
		$this->refreshDB();
		$seeder = new \NationalityTableSeeder();
		$seeder->run();

		app()['config']->set('country.nationalities.sync', true);
		DB::table('nationalities')->where('id', 1)->update(['search_code' => 'UPDATED']);
		$entity = DB::table('nationalities')->find(1);
		$this->assertObjectNotHasAttribute('code', $entity);
		$this->assertEquals('UPDATED', $entity->search_code);

		$seeder->run();
		$entity = DB::table('nationalities')->find(1);
		$this->assertObjectNotHasAttribute('code', $entity);
		$this->assertEquals('0300', $entity->search_code);

	}
}
