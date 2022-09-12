<?php

namespace App\Http\Middleware;

use App\Article;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\Guard;

class ScheduleListMiddleware
{
    /**
     * The Guard implementation.
     *
     * @var Guard
     */
    protected $auth;

    /**
     * Create a new filter instance.
     *
     * @param  Guard  $auth
     * @return void
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }
    
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if ($this->auth->getUser()->u_type == "Student" || $this->auth->getUser()->u_type == "Coordinator" || $this->auth->getUser()->u_type == "Supervisor" || $this->auth->getUser()->u_type == "Supervisor/Evaluator"   ) {
            return $next($request);
        }

        abort(403, 'Unauthorized.');
    }
}
