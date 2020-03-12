<?php

// default route
$routes['get']['']                   = 'Welcome';

$routes['get']['test']               = 'Test/Method';

// habilidades
$routes['post']['habilidade']          = 'HabilidadeController/create';
$routes['put']['habilidade']           = 'HabilidadeController/set';
$routes['get']['habilidade']           = 'HabilidadeController/list';
$routes['get']['habilidade/:id']       = 'HabilidadeController/get';
$routes['delete']['habilidade']        = 'HabilidadeController/del';
