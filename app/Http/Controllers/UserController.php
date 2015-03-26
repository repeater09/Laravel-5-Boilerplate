<?php namespace App\Http\Controllers;

use Auth;
use App\UserInformation;
use App\User;
use DB;
use Redirect;
use Input;
use Validator;
use Hash;

class UserController extends Controller {

    /**
     * Show all the users
     *
     * @return View
     */
    public function getIndex() {

        $user = User::leftJoin('users_information', 'users_information.user_id', '=', 'users.id')
            ->get();

        return view('users.index', ['pageTitle' => 'Administrator Dashboard | Users', 'user' => $user]);
    }

    /**
     * Delete the user @id = id of selected user
     *
     * @return Redirect
     */
    public function deleteUser($id) {

        if(Auth::user()->id == $id) {
            return Redirect::back()->with('error', 'You cannot delete your own account.');
        }

        DB::table('users_information')
            ->where('user_id', '=', $id)
            ->delete();

        $user = User::find($id);

        $user->delete();

        return Redirect::to('admin/dashboard/users')->with('error', 'User Deleted');
    }
    /**
     * Show the create user page.
     *
     * @return View
     */
    public function getCreate() {

        return view('users.create', ['pageTitle' => 'Create Account']);
    }
    /**
     * Process the create user form and save user
     *
     * @return Redirect
     */
    public function postCreate() {

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
            return Redirect::back()->withErrors($validation)->withInput();
        }


        $user = new User();
        $user->email = $userdata['email'];
        $user->password = Hash::make($userdata['password']);
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

        Return Redirect::to('admin/dashboard/users')->with('success', 'Account successfully created!');
    }
    /**
     * Show the edit user page.
     *
     * @return View
     */
    public function getEdit($user_id) {

        $user = User::leftJoin('users_information', 'users_information.user_id', '=', 'users.id')
            ->where('users.id', '=', $user_id)
            ->first();

        return view('users.edit', ['pageTitle' => 'Edit Account', 'user' => $user]);
    }
    /**
     * Process the create user form and save user
     *
     * @return Redirect
     */
    public function postEdit($user_id) {

        $rules = [
            'first_name' => 'required',
            'last_name' => 'required',
        ];

        $userdata = Input::all();

        $validation = Validator::make($userdata, $rules);

        if($validation->fails()){
            return Redirect::back()->withErrors($validation)->withInput();
        };

        if(!empty($userdata['password']) || !empty($userdata['confirm_password'])) {
            $rules = [
                'password' => 'required|min:5',
                'confirm_password' => 'required|same:password',
            ];

            $validation = Validator::make($userdata, $rules);

            if($validation->fails()){
                return Redirect::back()->withErrors($validation)->withInput();
            }
        }

        $user = User::find($user_id);
        $user->password = Hash::make($userdata['password']);
        if(!empty($userdata['super_user'])) {
            $user->super_user = 1;
        } else {
            $user->super_user = 0;
        }
        $user->save();

        $users_information = UserInformation::where('user_id', '=', $user_id)->first();
        $users_information->user_id = $user->id;
        $users_information->first_name = ucwords($userdata['first_name']);
        $users_information->last_name = ucwords($userdata['last_name']);
        $users_information->save();

        Return Redirect::to('admin/dashboard/users')->with('success', 'Account successfully edited!');
    }
    /**
     * Show the edit user page.
     *
     * @return View
     */
    public function getStandardEdit($user_id) {

        if(Auth::user()->id != $user_id) {
            return Redirect::back()->with('error', 'You cannot edit this account');
        }

        $user = User::leftJoin('users_information', 'users_information.user_id', '=', 'users.id')
            ->where('users.id', '=', $user_id)
            ->first();

        return view('users.standardEdit', ['pageTitle' => 'Edit Account', 'user' => $user]);
    }
    /**
     * Process the create user form and save user
     *
     * @return Redirect
     */
    public function postStandardEdit($user_id) {

        $rules = [
            'first_name' => 'required',
            'last_name' => 'required',
        ];

        $userdata = Input::all();

        $validation = Validator::make($userdata, $rules);

        if($validation->fails()){
            return Redirect::back()->withErrors($validation)->withInput();
        };

        if(!empty($userdata['password']) || !empty($userdata['confirm_password'])) {
            $rules = [
                'password' => 'required|min:5',
                'confirm_password' => 'required|same:password',
            ];

            $validation = Validator::make($userdata, $rules);

            if($validation->fails()){
                return Redirect::back()->withErrors($validation)->withInput();
            }
        }

        $user = User::find($user_id);
        $user->password = Hash::make($userdata['password']);
        if(!empty($userdata['super_user'])) {
            $user->super_user = 1;
        } else {
            $user->super_user = 0;
        }
        $user->save();

        $users_information = UserInformation::where('user_id', '=', $user_id)->first();
        $users_information->user_id = $user->id;
        $users_information->first_name = ucwords($userdata['first_name']);
        $users_information->last_name = ucwords($userdata['last_name']);
        $users_information->save();

        Return Redirect::to('dashboard')->with('success', 'Account successfully edited!');
    }
}
