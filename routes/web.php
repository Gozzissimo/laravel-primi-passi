<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/mtb', function () {
    $bikes = [
        [
            'brand' => 'Canyon',
            'model' => 'Stoic 4',
            'size' => 'L',
            'image' => 'https://www.canyon.com/dw/image/v2/BCML_PRD/on/demandware.static/-/Sites-canyon-master/default/dw029eec72/images/full/full_2022_/2021/full_2022_stoic-4_gn-bk_P5.png',
        ],
        [
            'brand' => 'Giant',
            'model' => 'Fathom',
            'size' => 'XS',
            'image' => 'https://www.bikextreme.it/13899/giant-fathom-29-1-2021-desert-sage.jpg',
        ],
        [
            'brand' => 'Canyon',
            'model' => 'Spectral',
            'size' => 'L',
            'image' => 'https://www.canyon.com/on/demandware.static/-/Sites-canyon-master/default/dw24c8695a/images/full/full_2022_/2022/full_2022_spectral-cf-8_3188_bk-bk_P5.png',
        ],
    ];

    return view('mtb', ['bikes' => $bikes]);
})->name('mtb');

Route::get('/road', function () {
    $bikes = [
        [
            'brand' => 'Trek',
            'model' => 'Emonda',
            'size' => 'L',
            'image' => 'https://evolutionbikes.it/wp-content/uploads/2020/07/trek-Emonda-SL-6-Disc-Pro_21_32562_B_Primary.jpg',
        ],
        [
            'brand' => 'Specialized',
            'model' => 'SL7',
            'size' => 'M',
            'image' => 'https://www.cingolanibikeshop.com/media/catalog/product/cache/95a9ec7e94fa9050228d69bfb5860e97/t/a/tarmac_comp_rival.jpg',
        ],
        [
            'brand' => 'Cannondale',
            'model' => 'Supersix',
            'size' => 'S',
            'image' => 'https://www.ciclimontanini.com/wp-content/uploads/2020/08/products-3309.jpg',
        ],
    ];

    return view('road', ['bikes' => $bikes]);
})->name('road');

Route::get('/', function () {
    return view('home');
});


