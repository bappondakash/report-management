<?php

namespace App\Http\Controllers\Location;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Location\Division;
use App\Models\Location\Distric;
use App\Models\Location\Upazila;

class UpazilaController extends Controller
{
    // function for get all division
    public function index()
    {
        $upazila = Upazila::all();
        return view('admin.location.all_upazila', compact('upazila'));
    }

    public function create()
    {
        $division = Division::all();
        return view('admin.location.create_upazila',  compact('division'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'upazila_name' => 'required',
            'division_id' => 'required',
            'distric_id' => 'required'
        ]);
        $upazila = new Upazila();
        $upazila->upazila_name = $request->upazila_name;
        $upazila->division_id = $request->division_id;
        $upazila->distric_id = $request->distric_id;
        $upazila->save();
        $notification = array(
            'message' => 'উপজেলা সফলভাবে তৈরী করা হয়েছে',
            'alert-type' => 'info'
        );
        return redirect()->route('admin.upazila.index')->with($notification);
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $data['upazila'] = Upazila::find($id);
        $data['division'] = Division::all();
        $data['distric'] = Distric::all();
        return view('admin.location.edit_upazila', $data);
    }

    public function update(Request $request, $id)
    {
        $upazila = Upazila::find($id);
        $upazila->upazila_name = $request->upazila_name;
        $upazila->division_id = $request->division_id;
        $upazila->distric_id = $request->distric_id;
        $upazila->save();
        $notification = array(
            'message' => 'উপজেলা সফলভাবে আপডেট করা হয়েছে',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.upazila.index')->with($notification);
    }

    public function delete($id)
    {
        Upazila::find($id)->delete();
        $notification = array(
            'message' => 'জেলা সফলভাবে ডিলেট করা হয়েছে',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.upazila.index')->with($notification);
    }
}
