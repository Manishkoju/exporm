<?php

namespace App\Http\Controllers\Admin;

use App\Models\Capability;
use App\Http\Requests\CapabilityStoreRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;

class CapabilityController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $capabilities = Capability::orderBy('id','DESC')->get();
        return view('admin.capability.create',compact('capabilities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CapabilityStoreRequest $request)
    {
        $capabilities = Capability::create($request->only([
            'title',
            'status'
        ]));

        Session::flash('message','New UserCapability Added ');
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
        $capability = Capability::findOrFail($id);
        return view('admin.capability.edit',compact('capability'));
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
        $capability=Capability::find($id);
        $capability->fill($request->only([
            'title',
            'status'
        ]))->save();

        Session::flash('message','UserCapability Updated Successfully ');
        return redirect('admin/capability/create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Capability  $capability)
    {   
        $capability->delete();
        Session::flash('message','UserCapability Deleted ');
        return redirect()->back();

    }
}
