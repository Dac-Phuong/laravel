<?php

namespace App\Http\Controllers\page;

use App\Http\Controllers\Controller;
use App\Models\District;
use Illuminate\Http\Request;

class DistrictController extends Controller
{
    public function getDistricts(Request $request)
    {
        dd($request);
        $provinces_id = $request->input('provinces_id');
        $districts = District::where('provinces_id', $provinces_id)->get();
        return response()->json($districts);
    }
}
