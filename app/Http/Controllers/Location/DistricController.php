<?php

namespace App\Http\Controllers\Location;

use App\Http\Controllers\Controller;
use App\Models\Location\Distric;
use App\Models\Location\Division;
use Illuminate\Http\Request;

class DistricController extends Controller
{
    // function for get all division
    public function index()
    {
        $distric = Distric::all();
        return view('admin.location.all_distric', compact('distric'));
    }

    public function create()
    {
        $division = Division::all();
        return view('admin.location.create_distric',  compact('division'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'distric_name' => 'required',
            'division_id' => 'required'
        ]);
        $distric = new Distric();
        $distric->distric_name = $request->distric_name;
        $distric->division_id = $request->division_id;
        $distric->save();
        $notification = array(
            'message' => 'জেলা সফলভাবে তৈরী করা হয়েছে',
            'alert-type' => 'info'
        );
        return redirect()->route('admin.districs.index')->with($notification);
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $data['distric'] = Distric::find($id);
        $data['division'] = Division::all();
        return view('admin.location.edit_distric', $data);
    }

    public function update(Request $request, $id)
    {
        $distric = Distric::find($id);
        $distric->distric_name = $request->distric_name;
        $distric->division_id = $request->division_id;
        $distric->save();
        $notification = array(
            'message' => 'জেলা সফলভাবে আপডেট করা হয়েছে',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.districs.index')->with($notification);
    }

    public function delete($id)
    {
        Distric::find($id)->delete();
        $notification = array(
            'message' => 'জেলা সফলভাবে ডিলেট করা হয়েছে',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.districs.index')->with($notification);
    }
}



