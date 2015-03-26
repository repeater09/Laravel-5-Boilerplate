<?php namespace App\Http\Controllers;

use Input;
use Hash;
use Validator;
use Redirect;
use Auth;
use App\UserInformation;
use App\User;

class LoginController extends Controller {

    /**
     * Show the login page.
     *
     * @return View
     */
    public function getLogin() {

        return view('login.login', ['pageTitle' => 'Login']);
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
    /**
     * Logout's current user
     *
     * @return Redirect
     */
    public function getLogout() {
        Auth::logout();

        return Redirect::to('/');
    }
    /**
     * Show the sign-up page.
     *
     * @return View
     */
    public function getSignup() {

        return view('login.signup', ['pageTitle' => 'Sign Up']);
    }
    /**
     * Process the sign-up form and save user
     *
     * @return Redirect
     */
    public function postSignup() {

        $rules = [
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:5',
            'confirm_password' => 'required|same:password',
            'first_name' => 'required',
            'last_name' => 'required',
        ];

        $userdata = Input::all();

        $validation = Validator::make($userdata, $rules);

        if($validation->fails()){
            return Redirect::to('sign-up')->withErrors($validation)->withInput();
        }

        $userdata['password'] = Hash::make($userdata['password']);
        $userdata['confirm_password'] = Hash::make($userdata['confirm_password']);

        $user = new User();
            $user->email = $userdata['email'];
            $user->password = $userdata['password'];
            if(!empty($userdata['super_user'])) {
                $user->super_user = 1;
            } else {
                $user->super_user = 0;
            }
        $user->save();

        $users_information = new UserInformation();
            $users_information->user_id = $user->id;
            $users_information->first_name = ucwords($userdata['first_name']);
            $users_information->last_name = ucwords($userdata['last_name']);
        $users_information->save();

        if(Auth::attempt(array('email' => $userdata['email'], 'password' => Input::get('password')))){

            if(Auth::user()->super_user == 1) {
                return Redirect::intended('admin/dashboard');
            } else {
                return Redirect::intended('dashboard');
            }
        } else {
            return Redirect::to('login')->with('success', 'Please login to continue');
        }
    }
}
