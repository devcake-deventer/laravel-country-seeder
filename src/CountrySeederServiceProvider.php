<?php

namespace Devcake\CountrySeeder;

use Illuminate\Support\ServiceProvider;

class CountrySeederServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishResources();
        }
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/country.php', 'country');
        $this->app->bind('CountrySeeder', function () {
            return new CountrySeeder();
        });
    }

    protected function publishResources()
    {
        $this->publishes([
            __DIR__ . '/../config/country.php' => config_path('country.php'),
            __DIR__ . '/../database/migrations/create_countries_table.php' => database_path('migrations/' . date('Y_m_d_His', time()) . '_create_countries_table.php'),
            __DIR__ . '/../database/seeds/BaseSeeder.php' => database_path('seeders/BaseSeeder.php'),
            __DIR__ . '/../database/seeds/CountryTableSeeder.php' => database_path('seeds/CountryTableSeeder.php'),
            __DIR__ . '/../database/seeds/NationalityTableSeeder.php' => database_path('seeds/NationalityTableSeeder.php'),
            __DIR__ . '/../database/migrations/create_nationalities_table.php' => database_path('migrations/' . date('Y_m_d_His', time()) . '_create_nationalities_table.php'),
        ], 'country-seeder');

        $this->publishes([
            __DIR__ . '/../config/country.php' => config_path('country.php'),
            __DIR__ . '/../database/seeds/CountryTableSeeder.php' => database_path('seeds/CountryTableSeeder.php'),
            __DIR__ . '/../database/migrations/create_countries_table.php' => database_path('migrations/' . date('Y_m_d_His', time()) . '_create_countries_table.php'),
        ], 'country-seeder-countries');

        $this->publishes([
            __DIR__ . '/../config/country.php' => config_path('country.php'),
            __DIR__ . '/../database/seeds/NationalityTableSeeder.php' => database_path('seeds/NationalityTableSeeder.php'),
            __DIR__ . '/../database/migrations/create_nationalities_table.php' => database_path('migrations/' . date('Y_m_d_His', time()) . '_create_nationalities_table.php'),
        ], 'country-seeder-nationalities');

        $this->publishes([
            __DIR__ . '/../database/seeds/BaseSeeder.php'
        ], 'base-seeder');
    }
}
