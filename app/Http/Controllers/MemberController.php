<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    public function add()
    {
       return view('member.add');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request)
    {
        $data = array(
            "name" =>  empty($request->name) === false ? $request->name : NULL,
            "gender" => empty($request->gender) === false ? $request->gender : NULL,
            "mobile" => empty($request->mobile) === false ? $request->mobile : NULL,
            "aadhar" => empty($request->aadhar) === false ? $request->aadhar : NULL,
            "village" => empty($request->village) === false ? $request->village : NULL,
            "revenue_village" => empty($request->revenue_village) === false ? $request->revenue_village : NULL,
            "survey_number" => empty($request->survey_number) === false ? $request->survey_number : NULL,
            "land_records_points" => empty($request->land_records_points) === false ? $request->land_records_points : NULL,
            "bank_account_number" => empty($request->bank_account_number) === false ? $request->bank_account_number : NULL,
            "bank_ifsc_code" => empty($request->bank_ifsc_code) === false ? $request->bank_ifsc_code : NULL,
            "bank_branch_name" => empty($request->bank_branch_name) === false ? $request->bank_branch_name : NULL,
            "bank_name" => empty($request->bank_name) === false ? $request->bank_name : NULL,
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        );
        Member::insert($data);
        return redirect()->back()->with('success', 'Member Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
