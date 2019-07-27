[![Total Downloads](https://poser.pugx.org/kriyar/cambodia-geographic/downloads)](https://packagist.org/packages/kriyar/cambodia-geographic)
[![License](https://poser.pugx.org/kriyar/cambodia-geographic/license)](https://packagist.org/packages/kriyar/cambodia-geographic)
[![Monthly Downloads](https://poser.pugx.org/kriyar/cambodia-geographic/d/monthly)](https://packagist.org/packages/kriyar/cambodia-geographic)

## This package aim to provide a list of Cambodia provinces and its sub-region such as districts, communes, and villages.

### A basic RESTful API for getting all the cities/provinces, district/khan, commune/sangkat, village.

### Installation

- Step 1: Run command

  `composer require kriyar/cambodia-geographic`

- Step 2: Add `"Kriyar\\CambodiaGeographic\\": "vendor/kriyar/cambodia-geographic/src/"` to `composer.json` under `autoload` inside Laravel root directory, then run command `composer dump-autoload`

  ```json

    "autoload": {
        "psr-4": {
            "App\\": "app/",
            "Kriyar\\CambodiaGeographic\\": "vendor/kriyar/cambodia-geographic/src/"
        },
        "classmap": [
            "database/seeds",
            "database/factories"
        ]
    },

  ```
        
- Step 3: Add service provider in `config/app.php` under `providers` array

  ```json

    'providers' => [
    
        .......,        
        Kriyar\CambodiaGeographic\CambodiaGeographicServiceProvider::class        
    ],

  ```

- Step 4: Run command to publish database and seeder

  `php artisan vendor:publish --tag=cambodia-geographic-migrations`

  `php artisan vendor:publish --tag=cambodia-geographic-seeds`

- Step 5: Add these lines in the `/database/seeds/DatabaseSeeder.php`

  ```json

    $this->call('CityProvinceTableSeeder');
    $this->call('DistrictTableSeeder');
    $this->call('CommuneTableSeeder');
    $this->call('VillageTableSeeder');

  ```

- Step 6: Run this in your terminal `composer dump-autoload`, then run `php artisan migrate --seed`

- Step 7: Go to [http://localhost:8000/api/cambodia/provinces](http://localhost:8000/api/cambodia/provinces)

- Enjoy!


### Endpoints

- `/api/cambodia/provinces` - List all the cities/provinces

- `/api/cambodia/provinces/{province_id}` - Details of the city/province

- `/api/cambodia/districts` - List all the districs in Cambodia

- `/api/cambodia/districts/{district_id}` - Details of the district

- `/api/cambodia/provinces/{province_id}/districts` - List all the districs of the province

- `/api/cambodia/communes` - List all the communes in Cambodia

- `/api/cambodia/communes/{commune_id}` - Details of the commune

- `/api/cambodia/districts/{district_id}/communes` - List all the communes of the district

- `/api/cambodia/provinces/{province_id}/communes` - List all the commune of the province

- `/api/cambodia/villages` - List all the villages in Cambodia

- `/api/cambodia/villages/{village_id}` - Details of the village

- `/api/cambodia/communes/{commune_id}/villages` - List all the villages of the commune

- `/api/cambodia/districts/{district_id}/villages` - List all the villages of the district

- `/api/cambodia/provinces/{province_id}/villages` - List all the villages of the province

### Future

- Soon, will add interface for CRUD operation to make it easy for managing data of city/province, district, commune, village.

### Credits:

Data of cities/provinces and postal code:

- https://www.tourismcambodia.com/tourist-information/phnom-penh-postal-code.htm

- http://www.cambodiapostcode.com/provinces.html

- https://github.com/skanel/cambodia-province-district-commune-village

### DISCLAIMER

> The data is offered FOR FREE and anybody can use at their own risk. 
> The data is offered AS IS. While I will strive to keep this data up to date, I do not claim that this is a comprehensive listing and some data may be outdated or missing. 
> I will not be held liable for any inaccuracies or errors found in the data. I am not responsible for final end-user utilization of this data and any damages the user might incur in its use.

