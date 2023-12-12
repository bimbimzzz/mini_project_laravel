<?php

namespace App\Http\Controllers;

use App\Models;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateStoreRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $users = DB::table('users')
        ->when($request->input('name'), function($query, $name){
            return $query->where('name', 'like', '%'.$name.'%');
        })->paginate(10);
        return view ('pages.user.index', compact('users'));
    }


    public function create()
    {
        return view ('pages.user.create.user-create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        User::create
        (
            [
                'name'=>$request['name'],
                'email'=>$request['email'],
                'roles'=>$request['roles'],
                'password'=>Hash::make($request['password'] )
            ]
        );

        return redirect(route('user.index'))->with('success', 'New User Succesfully');
    }

    public function edit(User $user)
    {
        return view ('pages.user.create.user-edit')->with('user', $user);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStoreRequest $request, User $user)
    {
        $validate = $request->validated();
        $user->update($validate);

        return redirect()->route('user.index')->with('success', 'Edit User Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
