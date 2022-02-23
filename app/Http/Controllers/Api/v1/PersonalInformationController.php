<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PersonalInformation;

class PersonalInformationController extends Controller
{
    public function store(Request $request)
    {

        // return response($request, 200);

        $personalInformation = PersonalInformation::create([
            'id_code'               => $request->idCode,
            'invite_code'           => $request->inviteCode,
            'organization'          => $request->organization,
            'first_name'            => $request->personalInformation['firstName'],
            'middle_name'           => $request->personalInformation['middleName'],
            'last_name'             => $request->personalInformation['lastName'],
            'gender'                => $request->personalInformation['gender'],
            'civil_status'          => $request->personalInformation['civilStatus'],
            'birth_date'            => $request->personalInformation['birthDate'],
            'address_barangay'      => $request->address['barangay'],
            'address_city'          => $request->address['city'],
            'address_province'      => $request->address['province'],
            'address_region'        => $request->address['region'],
            'address_street'        => $request->address['street'],
            'address_zip_code'      => $request->address['zipcode'],
            'email'                 => $request->contactInformation['email'],
            'contact_number'        => $request->contactInformation['contactNumber'],
        ]);

        $data = [
            "SUCCESS",
            $personalInformation,
        ];

        return response($data, 200);
    }
}
