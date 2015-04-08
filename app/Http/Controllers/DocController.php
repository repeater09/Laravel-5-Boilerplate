<?php namespace App\Http\Controllers;


class DocController extends Controller
{

    /**
     * Show the documentation page.
     *
     * @return View
     */
    public function getDoc()
    {
        return view('site.doc', ['pageTitle' => 'Documentation']);
    }
}