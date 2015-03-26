<?php namespace App\Http\Middleware;

use Closure;
use Auth;
use Redirect;

class SuperUser {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next) {

		if(empty(Auth::user())) {
			return Redirect::to('login');
		}

		if(Auth::user()->super_user == 0) {
			return Redirect::to('login');
		}

		return $next($request);
	}

}
