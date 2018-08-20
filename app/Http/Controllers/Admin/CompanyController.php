<?php

namespace App\Http\Controllers\Admin;

use App\Models\Company;
use App\Http\Requests\CompanyStoreRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::orderBy('id','DESC')->get();;
        return view('admin.company.index',compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.company.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\CompanyStoreRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CompanyStoreRequest $request)
    {   
        $company = Company::create($request->only([
            'name',
            'address1',
            'address2',
            'telephone',
            'status'
        ]));

        Session::flash('message','New Company Added ');
        return view('admin.company.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $company = Company::findOrFail($id);
        return view('admin.company.edit',compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {  
        $company=Company::find($id);
        $company->fill([
            'name' => $request->name,
            'address1' => $request->address1,
            'address2'=> $request->address2,
            'telephone'=> $request->telephone,
            'status'=> $request->status
        ])->save();

        Session::flash('message','Company Updated ');
        return redirect('admin/company');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $company = Company::findOrFail($id);
        $company->delete();

        Session::flash('message','Company Deleted ');
        return redirect()->back();
    }
}
