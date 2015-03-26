<?php namespace App\Http\Controllers;

use Input;
use Hash;
use Validator;
use Redirect;
use Auth;

class HomeController extends Controller {

	/**
	 * Show the home page.
	 *
	 * @return View
	 */
	public function getIndex() {
		return view('home', ['pageTitle' => 'Page title goes here']);
	}

	/**
	 * Show the login page.
	 *
	 * @return View
	 */
	public function getLogin() {

		return view('login', ['pageTitle' => 'Login']);
	}

	/**
	 * POST login form and determine if admin or standard user and redirect
	 *
	 * @return Redirect
	 */
	public function postLogin() {

		$userdata = [
			'email' => Input::get('email'),
			'password' => Input::get('password')
		];

		$rules = [
			'email' => 'required|email|exists:users',
			'password' => 'required'
		];

		$message = [
			'email.exists' => 'The email you entered does not exist.',
		];

		$login_failed = 'Your email or password do not match please try again';

		$validation = Validator::make($userdata, $rules, $message);

		if($validation->fails()){
			return Redirect::back()->withErrors($validation)->withInput();
		}

		if(Auth::attempt($userdata)){

			if(Auth::user()->super_user == 1) {
				return Redirect::to('admin/dashboard');
			}

			return Redirect::to('dashboard');
		} else {
			return Redirect::back()->withErrors($login_failed);
		}
	}
	public function getLogout() {
		Auth::logout();

		return Redirect::to('/');
	}

}
