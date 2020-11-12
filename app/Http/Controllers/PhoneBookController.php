<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class PhoneBookController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    protected function create(Request $request)
    {
        $data_array=$request->input();
        $request->validate([
            'name' => ['required', 'string', 'min:3', 'max:255'],
            'number' => ['required', 'string', 'digits_between:12,20'],
        ]);



        User::create([
            'name' => $data_array['name'],
            'number' => $data_array['number'],
        ]);

        return response()->redirectTo('/');
    }
    protected function view()
    {
        return view('phonebook');
    }
    protected function index()
    {
        $some_data=User::all();
        return view('home',['some_data'=>$some_data]);
    }
    protected function store()
    {
        ;
    }
    protected function edit()
    {
        ;
    }
    protected function destroy()
    {
        ;
    }
    protected function update()
    {
        ;
    }
}
