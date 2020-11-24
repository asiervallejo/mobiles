<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mobile;
use App\Role;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index (Request $request)
    {
        $request->user()->authorizeRoles(['user', 'admin']);
        $lista_mobiles=Mobile::orderBy('name')->get();
        return view('private.home')
        ->with('lista_mobiles',$lista_mobiles);

    }
    /*
    public function someAdminStuff(Request $request)
    {
        $request->user()->authorizeRoles(‘admin’);
        return view(‘some.view’);
    }
    */
}
