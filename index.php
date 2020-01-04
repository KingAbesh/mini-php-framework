<?php

$database = require 'core/bootstrap.php';

$router = new Router;

require 'routes.php';

require $router->direct('about/culture');

