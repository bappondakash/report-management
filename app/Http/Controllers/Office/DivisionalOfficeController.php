<?php

namespace App\Http\Controllers\Office;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Office\DivisionalOffice;
use App\Models\Location\Division;

class DivisionalOfficeController extends Controller
{
    // function for show all divisional offices
    public function index()
    {
        $data['division'] = Division::all();
        $data['divoffice'] = DivisionalOffice::all();
        return view('admin.office.all_div_office', $data);
    }

    public function create()
    {
        $division = Division::all();
        return view('admin.office.create_div_office', compact('division'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'office_name' => 'required',
            'office_email' => 'required',
            'office_mobile' => 'required',
            'office_website' => 'required',
            'division_id' => 'required',
            'office_code' => 'required',
        ]);

        $divoffice = new DivisionalOffice;

        $divoffice->office_name = $request->office_name;
        $divoffice->office_email = $request->office_email;
        $divoffice->office_mobile = $request->office_mobile;
        $divoffice->office_website = $request->office_website;
        $divoffice->division_id = $request->division_id;
        $divoffice->office_code = $request->office_code;

        $divoffice->save();

        $notification = array(
            'message' => 'অফিস সফলভাবে তৈরী করা হয়েছে',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.divisional-offices.index')->with($notification);
    }

    public function show($id)
    {

    }

    public function edit($id){
        $data['division'] = Division::all();
        $data['divoffice'] = DivisionalOffice::find($id);
        return view('admin.office.edit_div_office', $data);
    }

    public function update(Request $request, $id)
    {
        $divoffice = DivisionalOffice::find($id);

        $divoffice->office_name = $request->office_name;
        $divoffice->office_mobile = $request->office_mobile;
        $divoffice->office_email = $request->office_email;
        $divoffice->office_website = $request->office_website;
        $divoffice->division_id = $request->division_id;
        $divoffice->save();
        $notification = array(
            'message' => 'অফিস সফলভাবে তৈরী করা হয়েছে',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.divisional-offices.index')->with($notification);
    }

    public function delete($id){
        DivisionalOffice::find($id)->delete();
        $notification = array(
            'message' => 'অফিস সফলভাবে ডিলেট করা হয়েছে',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.divisional-offices.index')->with($notification);
    }
}
