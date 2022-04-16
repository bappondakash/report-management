<?php

namespace App\Http\Controllers\Basic;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Basic\Month;

class MonthController extends Controller
{
    // function for get all division
    public  function index(){
        $month = Month::all();
        return view('admin.basic.month', compact('month'));
    }

    public function create(){
        return view('admin.basic.create_month');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required'
        ]);
        $month = new Month();
        $month->name = $request->name;
        $month->save();
        $notification = array(
            'message' => 'মাস সফলভাবে তৈরী করা হয়েছে',
            'alert-type' => 'info'
        );
        return redirect()->route('admin.months.index')->with($notification);
    }

    public function show($id){

    }
    public function edit($id)
    {
        $month = Month::find($id);
        return view('admin.basic.edit_month', compact('month'));
    }

    public function update(Request $request, $id){
        $month = Month::find($id);

        $month->name = $request->name;
        $month->save();
        $notification = array(
            'message' => 'মাস সফলভাবে আপডেট করা হয়েছে',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.months.index')->with($notification);
    }

    public function delete($id){
        Month::find($id)->delete();
        $notification = array(
            'message' => 'মাস সফলভাবে ডিলেট করা হয়েছে',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.months.index')->with($notification);
    }
}
