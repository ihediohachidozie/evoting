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
        $pin = Member::whereCiltno($request->pin)->first();

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
       // dd($request->all());

        $this->validation();
        if($this->check($request->id, $request->candidate_id, $request->office_id) == 0)
        {
            Normination::create([
                'member_id' => $request->candidate_id,
                'office_id' => $request->office_id,
                'norminating_id' => $request->norminating_id
            ])->save();

            return redirect()->route('normination.index', ['id' => $request->id]);
        }else{
            return redirect()->route('normination.index', ['id' => $request->id])->with('status', 'Member already norminated!');

        }


    }
    public function check($id, $memberid, $officeid)
    {
        return Normination::where([
            ['norminating_id', '=', $id],
            ['member_id', '=', $memberid],
            ['office_id', '=', $officeid]
            ])
            ->orWhere([
                ['norminating_id', '=', $id],
                ['member_id', '=', $memberid],
            ])
            ->count();
    }

    public function validation()
    {
        return request()->validate([
            'candidate_id' => 'required',
            'office_id' => 'required',
            'norminating_id' => 'required',

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
        Normination::find($normination->id)->delete();

        return back();
    }

    public function list()
    {
        $norminations = Normination::all();

        return view('pages.normination.list', compact('norminations'));
    }
}
