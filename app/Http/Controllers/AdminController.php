<?php namespace App\Http\Controllers;

use Auth;
use App\UserInformation;
use App\User;
use DB;
use Redirect;
use Input;
use Validator;
use Hash;

class AdminController extends Controller {

    /**
     * Show the application admin dashboard to the logged in administrator.
     *
     * @return View
     */
    public function getIndex() {

        return view('admin.index', ['pageTitle' => 'Administrator Dashboard']);
    }
}
