<?php

namespace App\Http\Middleware;

use App\Http\Controllers\Controller;
use Closure;
use Exception;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

/**
 * Class Https
 *
 * @package App\Http\Middleware
 */
class Https extends Controller
{
    // @todo controller needed ? why ?

    /**
     * @param $request
     * @param Closure $next
     * @param null $guard
     * @return mixed
     * @throws Exception
     */
    public function handle($request, Closure $next) {
        if (!$this->request->secure() && app()->environment() === 'production') {
            return redirect()->to($this->request->getRequestUri(), 302, [], true);
        }
        return $next($this->request);
    }

}
