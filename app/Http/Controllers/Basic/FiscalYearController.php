<?php

namespace App\Http\Controllers\Basic;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Basic\FiscalYear;

class FiscalYearController extends Controller
{
    // function for get all division
    public  function index(){
        $fiscal_year = FiscalYear::all();
        return view('admin.basic.fiscal_year', compact('fiscal_year'));
    }

    public function create(){
        return view('admin.basic.create_fiscal_year');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required'
        ]);
        $fiscal_year = new FiscalYear();
        $fiscal_year->name = $request->name;
        $fiscal_year->save();
        $notification = array(
            'message' => 'অর্থবছর সফলভাবে তৈরী করা হয়েছে',
            'alert-type' => 'info'
        );
        return redirect()->route('admin.fiscal-years.index')->with($notification);
    }

    public function show($id){

    }
    public function edit($id)
    {
        $fiscal_year = FiscalYear::find($id);
        return view('admin.basic.edit_fiscal_year', compact('fiscal_year'));
    }

    public function update(Request $request, $id){
        $fiscal_year = FiscalYear::find($id);

        $fiscal_year->name = $request->name;
        $fiscal_year->save();
        $notification = array(
            'message' => 'অর্থবছর সফলভাবে আপডেট করা হয়েছে',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.fiscal-years.index')->with($notification);
    }

    public function delete($id){
        FiscalYear::find($id)->delete();
        $notification = array(
            'message' => 'অর্থবছর সফলভাবে ডিলেট করা হয়েছে',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.fiscal-years.index')->with($notification);
    }
}
