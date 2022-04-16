<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Basic\Designation;
use Illuminate\Http\Request;

class DesignationController extends Controller
{
    // function for show all designation
    public function index()
    {
        $designation = Designation::all();
        return view('admin.designation.all_designation', compact('designation'));
    }

    // function for create new designation
    public function create()
    {
        return view('admin.designation.create_designation');
    }

    public function store(Request $request)
    {
        $request->validate([
            'designation_name' => 'required',
            'role_level' => 'required',
        ]);

        $designation = new Designation;

        $designation->designation_name = $request->designation_name;
        $designation->role_level = $request->role_level;

        $designation->save();

        $notification = array(
            'message' => 'পদবী সফলভাবে তৈরী করা হয়েছে',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }


    public function show($id)
    {

    }


    public function edit($id)
    {
        $designation = Designation::find($id);
        return view('admin.designation.edit_designation', compact('designation'));
    }

    public function update(Request $request, $id)
    {
        $designation = Designation::find($id);

        $designation->designation_name = $request->designation_name;
        $designation->role_level = $request->role_level;

        $designation->save();

        $notification = array(
            'message' => 'পদবী সফলভাবে পরিবর্তন করা হয়েছে',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);

    }

    public function delete($id)
    {
        Designation::find($id)->delete();

        $notification = array(
            'message' => 'পদবী সফলভাবে ডিলিট করা হয়েছে',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.designations.index')->with($notification);
    }


}
