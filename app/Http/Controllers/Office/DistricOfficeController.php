<?php

namespace App\Http\Controllers\Office;

use App\Http\Controllers\Controller;
use App\Models\Location\Distric;
use App\Models\Location\Division;
use App\Models\Office\DistricOffice;
use Illuminate\Http\Request;

class DistricOfficeController extends Controller
{
    // function for show all divisional offices
    public function index()
    {
        $data['division'] = Division::all();
        $data['distric'] = Distric::all();
        $data['dis_office'] = DistricOffice::all();
        return view('admin.office.all_dis_office', $data);
    }

    public function create()
    {
        $division = Division::all();
        return view('admin.office.create_dis_office', compact('division'));
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
            'office_code' => 'required'
        ]);

        $dis_office = new DistricOffice();
        $dis_office->office_name = $request->office_name;
        $dis_office->office_email = $request->office_email;
        $dis_office->office_mobile = $request->office_mobile;
        $dis_office->office_website = $request->office_website;
        $dis_office->division_id = $request->division_id;
        $dis_office->distric_id = $request->distric_id;
        $dis_office->office_code = $request->office_code;

        $dis_office->save();

        $notification = array(
            'message' => 'অফিস সফলভাবে তৈরী করা হয়েছে',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.distric-offices.index')->with($notification);
    }

    public function show($id)
    {

    }

    public function edit($id){
        $data['division'] = Division::all();
        $data['distric'] = Distric::all();
        $data['dis_office'] = DistricOffice::find($id);
        return view('admin.office.edit_dis_office', $data);
    }

    public function update(Request $request, $id)
    {
        $dis_office = DistricOffice::find($id);

        $dis_office->office_name = $request->office_name;
        $dis_office->office_mobile = $request->office_mobile;
        $dis_office->office_email = $request->office_email;
        $dis_office->office_website = $request->office_website;
        $dis_office->division_id = $request->division_id;
        $dis_office->distric_id = $request->distric_id;
        $dis_office->save();
        $notification = array(
            'message' => 'অফিস সফলভাবে তৈরী করা হয়েছে',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.distric-offices.index')->with($notification);
    }

    public function delete($id){
        DistricOffice::find($id)->delete();
        $notification = array(
            'message' => 'অফিস সফলভাবে ডিলেট করা হয়েছে',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.distric-offices.index')->with($notification);
    }
}
