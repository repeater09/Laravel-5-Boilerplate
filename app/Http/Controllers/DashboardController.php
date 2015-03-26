<?php namespace App\Http\Controllers;

class DashboardController extends Controller {

    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */
    public function getIndex() {
        return view('dashboard.index', ['pageTitle' => 'Dashboard']);
    }

}
