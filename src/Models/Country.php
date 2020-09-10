<?php

namespace Devcake\CountrySeeder\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $guarded = [];

    public function getTable()
    {
        return config('CountrySeeder.table_name');
    }
}
