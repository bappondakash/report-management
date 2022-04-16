<?php

namespace App\Http\Controllers\Basic;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Basic\ReportType;

class ReportTypeController extends Controller
{
    // function for get all division
    public  function index(){
        $r_type = ReportType::all();
        return view('admin.basic.all_report_type', compact('r_type'));
    }

    public function create(){
        return view('admin.basic.create_report_type');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required'
        ]);
        $r_type = new ReportType();
        $r_type->name = $request->name;
        $r_type->save();
        $notification = array(
            'message' => 'রিপোর্টের ধরণ সফলভাবে তৈরী করা হয়েছে',
            'alert-type' => 'info'
        );
        return redirect()->route('admin.report-type.index')->with($notification);
    }

    public function show($id){

    }
    public function edit($id)
    {
        $r_type = ReportType::find($id);
        return view('admin.basic.edit_report_type', compact('r_type'));
    }

    public function update(Request $request, $id){
        $r_type = ReportType::find($id);

        $r_type->name = $request->name;
        $r_type->save();
        $notification = array(
            'message' => 'রিপোর্টের ধরণ সফলভাবে আপডেট করা হয়েছে',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.report-type.index')->with($notification);
    }

    public function delete($id){
        ReportType::find($id)->delete();
        $notification = array(
            'message' => 'রিপোর্টের ধরণ সফলভাবে ডিলেট করা হয়েছে',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.report-type.index')->with($notification);
    }
}
