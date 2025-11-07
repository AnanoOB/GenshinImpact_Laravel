<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Aquí definimos todas las rutas del proyecto Genshin Impact.
| Usamos bucles para reducir código repetitivo en personajes.
|--------------------------------------------------------------------------
*/

//Página Home - Principal
Route::get('/', fn() => view('Principal'));

//Páginas generales
Route::get('/personajes', fn() => view('Personajes'));
Route::get('/inicio-sesion', fn() => view('InicioSesion'));

//Regiones
Route::get('/mondstadt', fn() => view('Mondstadt'));
Route::get('/liyue', fn() => view('Liyue'));
Route::get('/inazuma', fn() => view('Inazuma'));
Route::get('/sumeru', fn() => view('Sumeru'));
Route::get('/natlan', fn() => view('Natlan'));

//Personajes con vista propia (nuestros favs jsjs)
$personajes = [
    'bennett', 'ifa', 'lisa', 'Neuvillette', 'Zhongli'
];
foreach ($personajes as $personaje) {
    Route::get(strtolower($personaje), fn() => view($personaje));
}

//Personajes o páginas aún no disponibles (usarán "Proximamente.blade.php")
$proximamente = [
    'arataki', 'ganyu', 'yelan', 'hutao', 'ayaka', 'kazuha', 'nahida',
    'wanderer', 'tartaglia', 'raiden', 'shenhe', 'yae', 'clorinde',
    'arlecchino', 'furina', 'albedo', 'amber', 'aino', 'alhacen',
    'barbara', 'beidou', 'baizhu', 'candace', 'collei', 'citlali',
    'chasca', 'chiori', 'chevreuse', 'charlotte', 'cyno', 'diluc',
    'diona', 'dehya', 'dahlia', 'dori', 'fishl', 'faruzan', 'flins',
    'freminet', 'gorou', 'gaming', 'ineffa', 'iansan', 'jean', 'kachina',
    'kaveh', 'keching', 'kinich', 'kirara', 'kuki', 'kujou', 'klee',
    'laila', 'lan', 'lauma', 'lynette', 'lyney', 'mavuika', 'mika',
    'mona', 'mualani', 'navia', 'ningguang', 'nilou', 'ororon', 'qiqi',
    'razor', 'rosaria', 'sacarosa', 'kokomi', 'sayu', 'shogun', 'skirk',
    'sigewine', 'sethos', 'thoma', 'trotamundos', 'tignari', 'venti',
    'varesa', 'wriothesley', 'xingqiu', 'xiao', 'xiangling', 'xilonen',
    'xianyun', 'xinyan', 'yoimiya', 'yun'
];

foreach ($proximamente as $nombre) {
    Route::get("/$nombre", fn() => view('Proximamente'));
}