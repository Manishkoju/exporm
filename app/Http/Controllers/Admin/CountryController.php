<?php

namespace App\Http\Controllers\Admin;

use App\Models\Country;
use App\Http\Requests\CountryStoreRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.country.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $countries = Country::orderBy('id','DESC')->get();
        return view('admin.country.create',compact('countries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param   App\Http\Requests\CountryStoreRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CountryStoreRequest $request)
    {
        $country = Country::create($request->only([
            'name',
            'status'
        ]));

        Session::flash('message','New Country Added ');
        return redirect()->back();
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
        $country = Country::findOrFail($id);
        return view('admin.country.edit',compact('country'));
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
        $country = Country::find($id);
        $country->fill([
            'name' => $request->name,
            'status'=> $request->status
        ])->save();

        Session::flash('message','Company Updated ');
        return redirect('admin/country/create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $company = Country::findOrFail($id);
        $company->delete();

        Session::flash('message','Country Deleted ');
        return redirect()->back();
    }
}
