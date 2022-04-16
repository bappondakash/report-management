<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Location\Distric;
use App\Models\Location\Division;
use App\Models\Location\Upazila;
use App\Models\Office\DistricOffice;
use App\Models\Office\DivisionalOffice;
use App\Models\Office\UpazilaOffice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;
use Session;
use App\Models\User;
use App\Models\Basic\Designation;


class AdminController extends Controller
{
    // function for admin dashboard
    public function index(){
        return view('admin.dashboard');
    }

    // function for update profile
    public function updateProfile(){
        if(Auth::user()){
            $data['division'] = Division::all();
            $data['distric'] = Distric::all();
            $data['upazila'] = Upazila::all();
            $data['designation'] = Designation::all();
            $data['user'] = User::find(Auth::user()->id);
            if($data){
                return view('admin.update_profile', $data);
            }
        }
    }

    public function updateProfileStore(Request $request)
    {
        $user = User::find(Auth::user()->id);

        $user->name_bangla = $request->name_bangla;
        $user->name_english = $request->name_english;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->mobile = $request->mobile;
        $user->nidno = $request->nidno;
        $user->division_id = $request->division_id;
        $user->distric_id = $request->distric_id;
        $user->upazila_id = $request->upazila_id;
        $user->office_id = $request->office_id;
        $user->user_level = $request->user_level;

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
            'message' => 'ব্যবহারকারী সফলভাবে আপডেট করা হয়েছে',
            'alet-type' => 'success'
        );

        return redirect()->route('admin.update.profile')->with($notification);
    }

    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:users',
            'name_bangla' => 'required',
            'name_english' => 'required',
            'mobile' => 'required|unique:users',
            'email' => 'required|unique:users',
            'password' => 'required',
            'office_id' => 'required',
            'user_level' => 'required',
        ]);

        $user = New User();
        $user->name_bangla = $request->name_bangla;
        $user->name_english = $request->name_english;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->mobile = $request->mobile;
        $user->nidno = $request->nidno;
        $user->division_id = $request->division_id;
        $user->distric_id = $request->distric_id;
        $user->upazila_id = $request->upazila_id;
        $user->office_id = $request->office_id;
        $user->user_level = $request->user_level;

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
            'message' => 'ব্যবহারকারী সফলভাবে তৈরী করা হয়েছে',
            'alet-type' => 'success'
        );
        return redirect()->route('admin.users')->with($notification);
    }

    //    function for create new user
    public function createUser()
    {
        $data['division'] = Division::all();
        $data['designation'] = Designation::all();
        return view('admin.user.create_user', $data);
    }

    public function allUsers()
    {
        $data['user'] = User::all();
        $data['division'] = Division::all();
        $data['distric'] = Distric::all();
        $data['upazila'] = Upazila::all();
        $data['div_office'] = DivisionalOffice::all();
        $data['dis_office'] = DistricOffice::all();
        $data['upa_office'] = UpazilaOffice::all();
        $data['designation'] = Designation::all();
        return view('admin.user.users', $data);
    }

    public function logout(){
        Session::flush();
        Auth::logout();

        return redirect()->route('user.login');
    }

}
