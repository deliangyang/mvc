<?php

use NoahBuscher\Macaw\Macaw;

Macaw::get('/test', 'App\Controller\IndexController@index');
Macaw::dispatch();