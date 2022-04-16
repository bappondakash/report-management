<?php

namespace App\Http\Controllers\Office;

use App\Http\Controllers\Controller;
use App\Models\Location\Distric;
use App\Models\Location\Division;
use App\Models\Location\Upazila;
use App\Models\Office\UpazilaOffice;
use Illuminate\Http\Request;

class UpazilaOfficeController extends Controller
{
    // function for show all divisional offices
    public function index()
    {
        $data['division'] = Division::all();
        $data['distric'] = Distric::all();
        $data['upazila'] = Upazila::all();
        $data['upa_office'] = UpazilaOffice::all();
        return view('admin.office.all_upa_office', $data);
    }

    public function create()
    {
        $division = Division::all();
        return view('admin.office.create_upa_office', compact('division'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'office_name' => 'required',
            'office_email' => 'required',
            'office_mobile' => 'required',
            'office_website' => 'required',
            'division_id' => 'required',
            'distric_id' => 'required',
            'upazila_id' => 'required',
            'office_code' => 'required',
        ]);

        $upa_office = new UpazilaOffice();
        $upa_office->office_name = $request->office_name;
        $upa_office->office_email = $request->office_email;
        $upa_office->office_mobile = $request->office_mobile;
        $upa_office->office_website = $request->office_website;
        $upa_office->division_id = $request->division_id;
        $upa_office->distric_id = $request->distric_id;
        $upa_office->upazila_id = $request->upazila_id;
        $upa_office->office_code = $request->office_code;

        $upa_office->save();

        $notification = array(
            'message' => 'অফিস সফলভাবে তৈরী করা হয়েছে',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.upazila-offices.index')->with($notification);
    }

    public function show($id)
    {

    }

    public function edit($id){
        $data['division'] = Division::all();
        $data['distric'] = Distric::all();
        $data['upazila'] = Upazila::all();
        $data['upa_office'] = UpazilaOffice::find($id);
        return view('admin.office.edit_upa_office', $data);
    }

    public function update(Request $request, $id)
    {
        $upa_office = UpazilaOffice::find($id);

        $upa_office->office_name = $request->office_name;
        $upa_office->office_mobile = $request->office_mobile;
        $upa_office->office_email = $request->office_email;
        $upa_office->office_website = $request->office_website;
        $upa_office->division_id = $request->division_id;
        $upa_office->distric_id = $request->distric_id;
        $upa_office->upazila_id = $request->upazila_id;
        $upa_office->save();
        $notification = array(
            'message' => 'অফিস সফলভাবে তৈরী করা হয়েছে',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.upazila-offices.index')->with($notification);
    }

    public function delete($id){
        UpazilaOffice::find($id)->delete();
        $notification = array(
            'message' => 'অফিস সফলভাবে ডিলেট করা হয়েছে',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.upazila-offices.index')->with($notification);
    }
}
