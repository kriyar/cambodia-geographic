<?php

Route::group(['prefix' => 'api/cambodia/' ], function () {
    // Province
    Route::get('provinces', 'Kriyar\CambodiaGeographic\Http\Controller\Api\CityProvinceApiController@index');
    Route::get('provinces/{province_id}', 'Kriyar\CambodiaGeographic\Http\Controller\Api\CityProvinceApiController@show');

    // District
    Route::get('districts', 'Kriyar\CambodiaGeographic\Http\Controller\Api\DistrictApiController@index');
    Route::get('districts/{district_id}', 'Kriyar\CambodiaGeographic\Http\Controller\Api\DistrictApiController@show');
    Route::get('provinces/{province_id}/districts',	'Kriyar\CambodiaGeographic\Http\Controller\Api\DistrictApiController@districtInProvince');

    // Commune
    Route::get('communes', 'Kriyar\CambodiaGeographic\Http\Controller\Api\CommuneApiController@index');
    Route::get('communes/{commune_id}', 'Kriyar\CambodiaGeographic\Http\Controller\Api\CommuneApiController@show');
    Route::get('districts/{district_id}/communes', 'Kriyar\CambodiaGeographic\Http\Controller\Api\CommuneApiController@communeInDistrict');
    Route::get('provinces/{province_id}/communes',	'Kriyar\CambodiaGeographic\Http\Controller\Api\CommuneApiController@communeInProvince');

    // Village
    Route::get('villages', 'Kriyar\CambodiaGeographic\Http\Controller\Api\VillageApiController@index');
    Route::get('villages/{village_id}', 'Kriyar\CambodiaGeographic\Http\Controller\Api\VillageApiController@show');
    Route::get('communes/{commune_id}/villages', 'Kriyar\CambodiaGeographic\Http\Controller\Api\VillageApiController@villageInCommune');
    Route::get('districts/{district_id}/villages', 'Kriyar\CambodiaGeographic\Http\Controller\Api\VillageApiController@villageInDistrict');
    Route::get('provinces/{province_id}/villages',	'Kriyar\CambodiaGeographic\Http\Controller\Api\VillageApiController@villageInProvince');
});
