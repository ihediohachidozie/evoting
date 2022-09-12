<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Office;
use App\Models\Normination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class NorminationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $id = $request->id;


        $members = Member::pluck('name', 'id');
        $offices = Office::pluck('name', 'id');
        $norminations = Normination::with('member', 'office')->where('norminating_id', $id)->get();
        //dd($norminations);
        return view('pages.normination.form', compact('members', 'offices', 'norminations', 'id'));
    }

    public function checkmember()
    {
        //dd('i m here');
        return view('pages.normination.memberaccess');
    }

    public function showform(Request $request)
    {
        $pin = Member::wherePin($request->pin)->first();

        if($pin != null){
            Member::find($pin->id)->update(
                ['accreditated' => 1]
            );

            return Redirect::route('normination.index', ['id' => $pin->id]);

        }
        $status = 'Member does not exist!';

        return back()->with(['status' => $status]);

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
    public function store(Request $request)
    {

        $this->validation();

        Normination::create([
            'member_id' => $request->candidate_id,
            'office_id' => $request->office_id,
            'norminating_id' => $request->id
        ])->save();

        return redirect()->route('normination.index', ['id' => $request->id]);

    }

    public function validation()
    {
        return request()->validate([
            'member_id' => 'required',
            'office_id' => 'required',
            'norminating_id' => 'required'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Normination  $normination
     * @return \Illuminate\Http\Response
     */
    public function show(Normination $normination)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Normination  $normination
     * @return \Illuminate\Http\Response
     */
    public function edit(Normination $normination)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Normination  $normination
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Normination $normination)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Normination  $normination
     * @return \Illuminate\Http\Response
     */
    public function destroy(Normination $normination)
    {
        //
    }
}
