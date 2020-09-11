# Laravel Country Seeder
_Seed Dutch country names and nationalities to a table of your choice_

## Base seeder
This package comes with a simple base seeder used within most of our projects. It enables us to seed specified tables only in development environments. The default behaviour is to seed the nationalities and/or countries in all environments.

## Usage
There are several ways on how to use this package, the default behavior is configured to place all files (migrations, seeders and base seeder) into your project. We also offer solutions to customize the files copied to your project.

1. Install this package: `composer require devcake-deventer/country-sseder`
2. Publish the configuration: `php artisan vendor:publish --tag=$required-tag`
3. Change the config as desired
4. php artisan db:seed

## Configurable properties
|Key|Default|Description|
|---|---|---|
|`country_table_name`|countries| Name of the table to seed countries in|
|`nationalities_table_name`|nationalities|Name of the table to seed nationalities in

## Available tags
We provide 4 different tags to publish required files to your project. 

|Tag|Description|
|---|---|
|`country-seeder`| Pulls in all files for seeding nationalities and countries. Including the base seeder|
|`country-seeder-countries`| Pulls in all the files for seeding countries|
|`country-seeder-nationalities`|Pulls in all the files for seeding nationalities|
|`base-seeder`|Only pulls in the base seeder|  