<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller {
    /**
     * Show the guest helpdesk view.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
        return view('guest.helpdesk');
    }
}
