<?php

namespace App\Http\Controllers\Basic;

use App\Http\Controllers\Controller;
use App\Models\Office\DistricOffice;
use App\Models\Office\DivisionalOffice;
use App\Models\Office\UpazilaOffice;
use Illuminate\Http\Request;
use App\Models\Location\Division;
use App\Models\Location\Distric;
use App\Models\Location\Upazila;

class DropdownController extends Controller
{
    public function index()
    {
        $data['divisions'] = Division::get(['division_name', 'id']);
        return view('admin.dashboard', $data);
    }

    public function fetchDistrics(Request $request)
    {
        $data['districs'] = Distric::where('division_id', $request->division_id)->get(['distric_name', 'id']);
        return response()->json($data);
    }

    public function fetchUpazilas(Request $request)
    {
        $data['upazilas'] = Upazila::where('distric_id', $request->distric_id)->get(['upazila_name', 'id']);
        return response()->json($data);
    }

    public function fetchDivisionOffices(Request $request)
    {
        $data['divoffice'] = DivisionalOffice::where('division_id', $request->division_id)->get(['office_name', 'office_code']);
        return response()->json($data);
    }

    public function fetchDistricOffices(Request $request)
    {
        $data['disoffice'] = DistricOffice::where('distric_id', $request->distric_id)->get(['office_name', 'office_code']);
        return response()->json($data);
    }

    public function fetchUpazilaOffices(Request $request)
    {
        $data['upaoffice'] = UpazilaOffice::where('upazila_id', $request->upazila_id)->get(['office_name', 'office_code']);
        return response()->json($data);
    }
}
