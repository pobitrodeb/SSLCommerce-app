<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */

    // ############ For SSL Commerce ###########
    protected $except = [
        '/pay-via-ajax', '/success','/cancel','/fail','/ipn'
    ];
}
