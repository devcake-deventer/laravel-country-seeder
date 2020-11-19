# Laravel Country Seeder
_Seed Dutch country names and nationalities to a table of your choice_

## Base seeder
This package comes with a simple base seeder used within most of our projects. It enables us to seed specified tables only in development environments. The default behaviour is to seed the nationalities and/or countries in all environments.

## Usage
There are several ways on how to use this package, the default behavior is configured to place all files (migrations, seeders and base seeder) into your project. We also offer solutions to customize the files copied to your project.

1. Install this package: `composer require devcake-deventer/country-seeder`
2. Publish the configuration: `php artisan vendor:publish --tag=$required-tag`
3. Change the config as desired
4. php artisan db:seed

## Configurable properties
The configuration sections for countries and nationalities are identical, so only the country version is explained below. 

|Key|Default|Description|
|---|---|---|
|`countries.sync`|`true`| Indicates if database entries be kept in sync with the seeder (`true`) or only new entries be inserted (`false`) |
|`countries.table`|`"countries"`| Name of the database table |
|`countries.columns.code`|`"code"`| Name of the code column in the database |
|`countries.columns.name`|`"name"`| Name of the name column in the database |

## Available tags
We provide 4 different tags to publish required files to your project. 

|Tag|Description|
|---|---|
|`country-seeder`| Pulls in all files for seeding nationalities and countries. Including the base seeder|
|`country-seeder-countries`| Pulls in all the files for seeding countries|
|`country-seeder-nationalities`|Pulls in all the files for seeding nationalities|
|`base-seeder`|Only pulls in the base seeder|  
