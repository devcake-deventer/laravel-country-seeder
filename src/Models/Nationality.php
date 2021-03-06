<?php

namespace Devcake\CountrySeeder\Models;

use Illuminate\Database\Eloquent\Model;

class Nationality extends Model
{
    protected $guarded = [];

    public function getTable()
    {
        return config('country.nationalities.table');
    }
}
