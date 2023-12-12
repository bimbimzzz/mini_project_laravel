<?php

namespace App\Http\Controllers;

use App\Models;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreCompanyRequest;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $companies = DB::table('companies')
        ->when($request->input('name'), function($query, $name){
            return $query->where('name', 'like', '%'.$name.'%');
        })->paginate(10);
        return view ('pages.user.company', compact('companies'));
    }

    public function create()
    {
        return view ('pages.user.create.company-create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCompanyRequest $request)
    {
        Company::create
        (
            [
                'name'=>$request['name'],
                'address'=>$request['address'],
                'email'=>$request['email'],
            ]
        );

        return redirect(route('companies.index'))->with('success', 'Add Company Successfully');
    }

    // public function edit()
    // {
    //     return view ('pages.user.create.company-create');
    // }

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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
