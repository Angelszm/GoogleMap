<?php


use Cornford\Googlmapper\Facades\MapperFacade;
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
   Mapper::map(
   	53.381128999999990000, 
   	-1.470085000000040000,
  [
  	'zoom' => 16,
    'draggable' => true,
    'marker' => true,
    'eventAfterLoad' => 'circleListener(maps[0].shapes[0].circle_0);'
    
]
   );

   return view('welcome');
});



