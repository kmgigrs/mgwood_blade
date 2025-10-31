<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.Main');
});

Route::get('/about-us', function () {
    return view('pages.About');
});

Route::get('/calculate', function () {
    return view('pages.Calculate');
});

Route::get('/event', function () {
    return view('pages.Event');
});

Route::get('/gallery', function () {
    return view('pages.Gallery');
});

Route::get('/products', function () {
    return view('pages.Product');
});

Route::get('/certificates', function () {
    return view('pages.Certificates');
});

Route::get('/contact-us', function () {
    return view('pages.Contact');
});

// PEFC POLICY
Route::get('/pefc-policy', function () {
    return view('pages.Policy');
});
// EMPLOYMENT POLICY
Route::get('/employment-policy', function () {
    return view('pages.EmploymentPolicy');
});
// EUDR
Route::get('/eudr/regulations', function () {
    return view('pages.eudr.regulations');
});
Route::get('/eudr/products/plywood', function () {
    return view('pages.eudr.products.plywood');
});

// PRODUCTS
Route::get('/product/finger-joint-laminated-board', function () {
    return view('pages.product.FJL');
});
Route::get('/product/wood-pellet', function () {
    return view('pages.product.Woodpellet');
});
Route::get('/product/white-prime', function () {
    return view('pages.product.WhitePrime');
});
Route::get('/product/kaka-door', function () {
    return view('pages.product.Kakadoor');
});
Route::get('/product/kaka-kusen', function () {
    return view('pages.product.Kakakusen');
});
Route::get('/product/komo-certified-product', function () {
    return view('pages.product.KOMO');
});


//Halaman Plywood
Route::get('/product/plywood', function () {
    return view('pages.product.plywood.Home');
});
Route::get('/product/plywood/wrapping-ply', function () {
    return view('pages.product.plywood.Wrapping');
});
Route::get('/product/plywood/marine-ply', function () {
    return view('pages.product.plywood.Marine');
});
Route::get('/product/plywood/ordinary-ply', function () {
    return view('pages.product.plywood.Ordinary');
});
Route::get('/product/plywood/birch-ply', function () {
    return view('pages.product.plywood.Birch');
});
Route::get('/product/plywood/birch-ply', function () {
    return view('pages.product.plywood.Birch');
});
Route::get('/product/plywood/filmface-ply', function () {
    return view('pages.product.plywood.Filmface');
});
Route::get('/product/plywood/floorbase-ply', function () {
    return view('pages.product.plywood.Floorbase');
});
Route::get('/product/plywood/flexi-ply', function () {
    return view('pages.product.plywood.Flexi');
});
Route::get('/product/plywood/doorblank-ply', function () {
    return view('pages.product.plywood.Doorblank');
});
Route::get('/product/plywood/blockboard-ply', function () {
    return view('pages.product.plywood.Blockboard');
});
Route::get('/product/plywood/vibraguard', function () {
    return view('pages.product.plywood.Vibraguard');
});

Route::get('/product/plywood/plywood-baru', function () {
    return view('pages.product.plywood.plywood-baru');
});


//Halaman Sertifikat
Route::get('/cert/carb', function () {
    return view('pages.cert.carb');
});
Route::get('/cert/ce', function () {
    return view('pages.cert.ce');
});
Route::get('/cert/epa', function () {
    return view('pages.cert.epa');
});
Route::get('/cert/fsc', function () {
    return view('pages.cert.fsc');
});
Route::get('/cert/fsc-coc', function () {
    return view('pages.cert.fsc-coc');
});
Route::get('/cert/jas', function () {
    return view('pages.cert.jas');
});
Route::get('/cert/marine-plywood', function () {
    return view('pages.cert.marine');
});
Route::get('/cert/svlk', function () {
    return view('pages.cert.svlk');
});
Route::get('/cert/pefc', function () {
    return view('pages.cert.pefc');
});
Route::get('/cert/komo', function () {
    return view('pages.cert.komo');
});
Route::get('/cert/sni', function () {
    return view('pages.cert.sni');
});
Route::get('/cert/iso-9001', function () {
    return view('pages.cert.iso9001');
});
Route::get('/cert/ukca', function () {
    return view('pages.cert.ukca');
});
Route::get('/cert/wood-pellet', function () {
    return view('pages.cert.woodpellet');
});

Route::post("/tellme", "App\Http\Controllers\contact_us@save");
