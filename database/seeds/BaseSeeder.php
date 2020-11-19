<?php

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

abstract class BaseSeeder extends Seeder {
	public abstract function configSection(): string;

	public abstract function seeds(): array;

	public function run() {
		foreach ($this->seeds() as $seed) {
			$table = DB::table(config($this->configSection() . '.table'));

			if ($table->find($seed['id']) === NULL) {
				$entity = [
					'id' => $seed['id'],
					config($this->configSection() . '.columns.code') => $seed['code'],
					config($this->configSection() . '.columns.name') => $seed['name'],
					'created_at' => Carbon::now(),
					'updated_at' => Carbon::now(),
				];
				$table->insert($entity);
			} else if (config($this->configSection() . '.sync')) {
				$entity = $table->find($seed['id']);
				$entity->{config($this->configSection() . '.columns.code')} = $seed['code'];
				$entity->{config($this->configSection() . '.columns.name')} = $seed['name'];
				$entity->updated_at = Carbon::now();
				$table->update((array)$entity);
			}
		}
	}
}
