<?php

namespace App\Http\Controllers\Location;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Location\Division;
use Session;

class DivisionController extends Controller
{
    // function for get all division
    public  function index(){
        $division = Division::all();
        return view('admin.location.all_division', compact('division'));
    }

    public function create(){
        return view('admin.location.create_division');
    }

    public function store(Request $request){
        $request->validate([
            'division_name' => 'required'
        ]);
        $division = new Division();
        $division->division_name = $request->division_name;
        $division->save();
        $notification = array(
            'message' => 'বিভাগ সফলভাবে তৈরী করা হয়েছে',
            'alert-type' => 'info'
        );
        return redirect()->route('admin.divisions.index')->with($notification);
    }

    public function show($id){

    }
    public function edit($id)
    {
        $division = Division::find($id);
        return view('admin.location.edit_division', compact('division'));
    }

    public function update(Request $request, $id){
        $division = Division::find($id);

        $division->division_name = $request->division_name;
        $division->save();
        $notification = array(
            'message' => 'বিভাগ সফলভাবে আপডেট করা হয়েছে',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.divisions.index')->with($notification);
    }

    public function delete($id){
        Division::find($id)->delete();
        $notification = array(
            'message' => 'বিভাগ সফলভাবে ডিলেট করা হয়েছে',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.divisions.index')->with($notification);
    }
}
