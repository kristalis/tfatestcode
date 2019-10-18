<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
      //  $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('home', ['users'=>$users]);   
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('useredit', ['user'=>$user]);
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->save();
        return redirect('home')->with('success', 'Contact updated!');

    }

    public function destroy($id)
    {
       $user=User::find($id);
       $user->delete();
       return redirect('home');
    
    }


}
