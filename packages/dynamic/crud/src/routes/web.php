<?php

use Dynamic\Crud\controllers\CrudController;
use Illuminate\Support\Facades\Route;

Route::get('test',function(){
    dd("test");
});

Route::get('controller',[CrudController::class, 'testView']);
