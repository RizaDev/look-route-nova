<?php

namespace Riza\LookRoute\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Controller;

class RouteViewController extends Controller
{
    public function index()
    {
        $routes = collect(Route::getRoutes())->map(function ($route) {
            return [
                'uri' => $route->uri,
                'as' => $route->action['as'] ?? '',
                'methods' => $route->methods,
                'action' => $route->action['uses'] ?? '',
                'middleware' => $route->action['middleware'] ?? [],
            ];
        });

        return response()->json($routes);
    }
}
