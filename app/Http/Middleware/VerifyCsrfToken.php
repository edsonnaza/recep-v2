<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        'http://localhost:8000/recepguardar',
        'http://127.0.0.1:8000/recepguardar',
         'http://127.0.0.1:8000/apirecep',
         'http://127.0.0.1:8001/api',
            'http://localhost:8001/api',
            'http://localhost/recepapi',
        
    ];
}
