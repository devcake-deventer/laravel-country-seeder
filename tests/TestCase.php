<?php

namespace Tests;

require __DIR__ . '/../database/migrations/create_countries_table.php';
require __DIR__ . '/../database/migrations/create_nationalities_table.php';

use Devcake\CountrySeeder\CountrySeederServiceProvider;

abstract class TestCase extends \Orchestra\Testbench\TestCase {
	const DB = __DIR__ . '/database.sqlite';

	protected function setUp() {
		parent::setUp();
		touch(self::DB);
		(new \CreateCountriesTable())->up();
		(new \CreateNationalitiesTable())->up();
	}

	protected function refreshDB() {
		$cct = new \CreateCountriesTable();
		$cnt = new \CreateNationalitiesTable();
		$cct->down();
		$cnt->down();
		$cct->up();
		$cnt->up();
	}

	protected function getEnvironmentSetUp($app) {
		$app['config']->set('database.default', 'testbench');
		$app['config']->set('database.connections.testbench', [
			'driver' => 'sqlite',
			'database' => './tests/database.sqlite',
			'prefix' => '',
		]);
		$app['config']->set('country', include __DIR__ . '/../config/country.php');
	}

	protected function getPackageProviders($app) {
		return [CountrySeederServiceProvider::class];
	}

	protected function tearDown() {
		parent::tearDown();
		unlink(self::DB);
	}
}
