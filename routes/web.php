<?php

route::get('/archivo', [
    'uses' => 'ControllerPractica@archivo',
    'as' => 'archivo'
]);
route::get('/diego', [
    'uses' => 'ControllerPractica@diego',
    'as' => 'diego'
]);
route::get('/davinci', [
    'uses' => 'ControllerPractica@davinci',
    'as' => 'davinci'
]);
route::get('/salvador', [
    'uses' => 'ControllerPractica@salvador',
    'as' => 'salvador'
]);
route::get('/miguel', [
    'uses' => 'ControllerPractica@miguel',
    'as' => 'miguel'
]);
route::get('/pablo', [
    'uses' => 'ControllerPractica@pablo',
    'as' => 'pablo'
]);
route::get('/', [
    'uses' => 'ControllerPractica@login',
    'as' => 'login'
]);
route::post('/valida', 'ControllerPractica@validarlogin');
