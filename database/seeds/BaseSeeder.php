<?php

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

abstract class BaseSeeder extends Seeder
{
    protected abstract function getTable(): string;

    protected function devOnly(): array
    {
        return [];
    }

    protected function seeds(): array
    {
        return [];
    }

    public function run()
    {
        foreach($this->seeds() as $seed) {
            $table = DB::table($this->getTable());

            if($table->find($seed['id']) === NULL) {
                $seed['created_at'] = Carbon::now();
                $seed['updated_at'] = Carbon::now();
                $table->insert($seed);
            }
        }

        if (app()->environment(['dev', 'development', 'local'])) {
            foreach($this->devOnly() as $seed) {
                $table = DB::table($this->getTable());
    
                if($table->find($seed['id']) === NULL) {
                    $seed['created_at'] = Carbon::now();
                    $seed['updated_at'] = Carbon::now();
                    $table->insert($seed);
                }
            }
        }
    }
}