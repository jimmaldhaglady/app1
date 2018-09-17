<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aboutController extends Controller
{
   $route = Route::current();

$name = $route->getName();

$actionName = $route->getActionName();
}
