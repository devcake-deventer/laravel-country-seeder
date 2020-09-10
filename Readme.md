# Laravel Country Seeder
_Seed Dutch country names to a table of your choice_

## Usage

1. Install this package: `composer require devcake-dventer/country-sseder`
2. Publish the configuration: `php artisan vendor:publish --tag=country-seeder`
3. Change the config as desired
4. php artisan db:seed

## Usage within multi tenant setup

1. Go to step 1 & 2 of the normal usage guide
2. Move the migration to the tenant folder
3. Change the config file so it matches your setup 
4. php artisan tenant:seed


## Configurable properties
|Key|Default|Description|
|---|---|---|
|`table_name`|countries| Name of the table to seed|