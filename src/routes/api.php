<?php

Route::group(['prefix' => 'api/cambodia/' ], function () {
    // Province
    Route::get('provinces', 'Kriyar\CambodiaGeographic\Http\Controllers\Api\CityProvinceApiController@index');
    Route::get('provinces/{province_id}', 'Kriyar\CambodiaGeographic\Http\Controllers\Api\CityProvinceApiController@show');

    // District
    Route::get('districts', 'Kriyar\CambodiaGeographic\Http\Controllers\Api\DistrictApiController@index');
    Route::get('districts/{district_id}', 'Kriyar\CambodiaGeographic\Http\Controllers\Api\DistrictApiController@show');
    Route::get('provinces/{province_id}/districts',	'Kriyar\CambodiaGeographic\Http\Controllers\Api\DistrictApiController@districtInProvince');

    // Commune
    Route::get('communes', 'Kriyar\CambodiaGeographic\Http\Controllers\Api\CommuneApiController@index');
    Route::get('communes/{commune_id}', 'Kriyar\CambodiaGeographic\Http\Controllers\Api\CommuneApiController@show');
    Route::get('districts/{district_id}/communes', 'Kriyar\CambodiaGeographic\Http\Controllers\Api\CommuneApiController@communeInDistrict');
    Route::get('provinces/{province_id}/communes',	'Kriyar\CambodiaGeographic\Http\Controllers\Api\CommuneApiController@communeInProvince');

    // Village
    Route::get('villages', 'Kriyar\CambodiaGeographic\Http\Controllers\Api\VillageApiController@index');
    Route::get('villages/{village_id}', 'Kriyar\CambodiaGeographic\Http\Controllers\Api\VillageApiController@show');
    Route::get('communes/{commune_id}/villages', 'Kriyar\CambodiaGeographic\Http\Controllers\Api\VillageApiController@villageInCommune');
    Route::get('districts/{district_id}/villages', 'Kriyar\CambodiaGeographic\Http\Controllers\Api\VillageApiController@villageInDistrict');
    Route::get('provinces/{province_id}/villages',	'Kriyar\CambodiaGeographic\Http\Controllers\Api\VillageApiController@villageInProvince');
});
