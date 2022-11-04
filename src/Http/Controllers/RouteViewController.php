<?php

namespace Riza\LookRoute\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

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
