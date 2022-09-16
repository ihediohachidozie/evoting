<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = Member::all();
        return view('members.index', compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $member = new Member();
        return view('members.create', compact('member'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $member = $this->validateData();
            $status = '';

            if($this->checkMember($member['ciltno']) == 0)
            {

                $member['pin'] = random_int(1000, 9999);

                Member::create($member);
                $status = 'Member successfully added!';
            }
            else{
                $status = 'Member with CILT No. already exist!';
            }


            return back()->with('success', $status);

        } catch (\Throwable $th) {
            $status = 'An error occurred. Process incomplete!';
            return back()->with('success', $status);
        }

    }

    public function checkMember($id)
    {
        return Member::where('ciltno',$id)->count();
    }

    public function validateData()
    {
        # code...
        return request()->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'sometimes',
            'ciltno' => 'required',
            'membershipstatus' => 'required',
            'canvote' => 'required'

        ]);
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member)
    {

        return view('members.edit', compact('member'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Member $member)
    {

        try {
            //code...
            $data = $this->validateData();

            if ($this->checkMember($member['ciltno']) == 1 || $this->checkMember($member['ciltno']) == 0)
            {
                Member::find($member->id)->update($data);
                $status = 'Member successfully updated!';

                return redirect()->route('members.index');
            }
        } catch (\Throwable $th) {
            //throw $th;
            $status = 'An error occurred. Process incomplete!';
            return back()->with('success', $status);
        }







    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member)
    {

       # Member::find($member->id)->delete();

        return back();
    }
}
