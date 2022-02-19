<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PersonalInformation;

class PersonalInformationController extends Controller
{
    public function store(Request $request)
    {
        return response($request, 200);
        // return response($request->address['city'], 200);
        // return response($request->personalInformation['firstName'], 200);

    }
}
