<?php

namespace App\Http\Controllers\Acland;

use App\Http\Controllers\Controller;
use App\Models\Basic\Designation;
use App\Models\Basic\FiscalYear;
use App\Models\Basic\Month;
use App\Models\Basic\Report;
use App\Models\Basic\ReportType;
use App\Models\Location\Distric;
use App\Models\Location\Division;
use App\Models\Location\Upazila;
use App\Models\Office\UpazilaOffice;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Hash;
use Session;
use App\Models\User;

class AclandController extends Controller
{
    // function for get acland dashboard
    public function index(){
        return view('acland.dashboard');
    }

    // function for update profile
    public function updateProfile(){
        if(Auth::user()){
            $data['office'] = UpazilaOffice::all();
            $data['division'] = Division::all();
            $data['distric'] = Distric::all();
            $data['upazila'] = Upazila::all();
            $data['designation'] = Designation::all();
            $data['user'] = User::find(Auth::user()->id);
            if($data){
                return view('acland.update_profile', $data);
            }
        }
    }

    // check update data
    public function updateProfileStore(Request $request)
    {
        $user = User::find(Auth::user()->id);

        $user->name_bangla = $request->name_bangla;
        $user->name_english = $request->name_english;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->mobile = $request->mobile;

        if($request->file('profile')){
            $profile = $request->file('profile');
            $name_gen_profile = hexdec(uniqid());
            $img_ext_profile = strtolower($profile->getClientOriginalExtension());
            $img_name_profile = $name_gen_profile.'.'.$img_ext_profile;
            $up_location_profile = 'assets/images/users/';
            $last_img_profile = $up_location_profile.$img_name_profile;
            $profile->move($up_location_profile,$img_name_profile);
            $user->profile = $last_img_profile;
        }

        if($request->file('signature')){
            $signature = $request->file('signature');
            $name_gen = hexdec(uniqid());
            $img_ext = strtolower($signature->getClientOriginalExtension());
            $img_name = $name_gen.'.'.$img_ext;
            $up_location = 'assets/images/users/';
            $last_img = $up_location.$img_name;
            $signature->move($up_location,$img_name);
            $user->signature = $last_img;
        }
        $user->save();

        $notification = array(
            'message' => 'প্রোফাইল সফলভাবে আপডেট করা হয়েছে',
            'alet-type' => 'success'
        );

        return redirect()->route('acland.update.profile')->with($notification);
    }

    // function for user logout
    public function logout(){
        Session::flush();
        Auth::logout();

        return redirect()->route('user.login');
    }

    // function for get all pending report
    public function pendingReport()
    {
        $data['report'] = Report::all();
        $data['user'] = User::all();
        return view('acland.report.pending_report', $data);
    }

    public function reportInitial(Request $request)
    {
        $request->session()->forget('report');
        $data['fiscal_year'] = FiscalYear::all();
        $data['month'] = Month::all();
        $data['report_type'] = ReportType::all();
        $data['report'] = Report::all();

        return view('acland.report.report_initial', $data);
    }

    public function reportInitialPost(Request $request)
    {
        $validatedData = $request->validate([
            'fiscal_year' => 'required',
            'month' => 'required',
            'report_type' => 'required'
        ]);

        if(empty($request->session()->get('report'))){
            $report = new Report();
            $report->fill($validatedData);
            $request->session()->put('report', $report);
        }else{
            $report = $request->session()->get('report');
            $report->fill($validatedData);
            $report->session()->put('report', $report);
        }
        return redirect()->route('acland.report.detail');
    }

   public function reportDetail(Request $request)
   {
       $report = $request->session()->get('report');
       return view('acland.report.report_detail', compact('report', $report));
   }

   public function reportDetailPost(Request $request)
   {
       $validatedData = $request->validate([
           'column_one' => 'required',
           'column_two' => 'required',
           'column_three' => 'required',
           'column_four' => 'required',
           'column_five' => 'required',
           'column_six' => 'required',
           'column_seven' => 'required',
           'column_eight' => 'required',
           'column_nine' => 'max:255'
       ]);
       $report = $request->session()->get('report');
       $report->fill($validatedData);
       $request->session()->put('report', $report);
       return redirect()->route('acland.report.detail.preview');
   }

    public function reportDetailPreview(Request $request)
    {
        $report =$request->session()->get('report');
        return view('acland.report.report_detail_preview', compact('report', $report));
    }

    public function reportDetailPreviewPost(Request $request)
    {
        $report = $request->session()->get('report');
        return redirect()->route('acland.report.save');
    }

    public function reportSave(Request $request)
    {
        $report = $request->session()->get('report');
        return view('acland.report.report_save', compact('report', $report));
    }

    public function reportSavePost(Request $request)
    {
        $report = $request->session()->get('report');
        $info = new Report;
        $info->column_one = $report->column_one;
        $info->column_two = $report->column_two;
        $info->column_three = $report->column_three;
        $info->column_four = $report->column_four;
        $info->column_five = ($report->column_one + $report->column_two);
        $info->column_six = ($report->column_three + $report->column_four);
        $info->column_seven = $report->column_five;
        $info->column_eight = $report->column_six;
        $info->column_nine = $report->column_seven;
        $info->column_ten = ($report->column_five + $report->column_seven);
        $info->column_eleven = $report->column_eight;
        $info->column_twelve = ($report->column_six + $report->column_eight);
        $info->column_thirteen = ($report->column_one + $report->column_two)-$report->column_five;
        $info->column_fourteen = ($report->column_three + $report->column_four)-$report->column_six;
        $info->column_fifteen = $report->column_nine;
        $info->fiscal_year = $report->fiscal_year;
        $info->month = $report->month;
        $info->report_type = $report->report_type;
        $info->user_id = Auth::user()->id;
        $info->status = 0;
        $info->desk = 20;
        $info->save();
        $notification = array(
            'message' => 'রিপোর্ট সফলভাবে তৈরী করা হয়েছে',
            'alet-type' => 'success',
        );
        return redirect()->route('acland.pending.report')->with($notification);
    }
}
