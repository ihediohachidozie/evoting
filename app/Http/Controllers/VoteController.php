<?php

namespace App\Http\Controllers;

use App\Models\Vote;
use App\Models\Candidate;
use Illuminate\Http\Request;

class VoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.vote.index', compact('memberid'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $id = $request->id;
        $candidates = Candidate::all();

        $chairmans = Candidate::where('office_id', 1)->get();
        $vicechairmans = Candidate::where('office_id', 2)->get();
        $branchsecretarys = Candidate::where('office_id', 3)->get();
        $assistbranchsecretarys = Candidate::where('office_id', 4)->get();
        $treasurer = Candidate::where('office_id', 5)->get();
        $financialsecretary = Candidate::where('office_id', 6)->get();
        $pro = Candidate::where('office_id', 7)->get();
        $welfareofficer = Candidate::where('office_id', 8)->get();
        $wilatrep = Candidate::where('office_id', 9)->get();
        $nextgenerationrep = Candidate::where('office_id', 10)->get();
        $aviationmoderep = Candidate::where('office_id', 11)->get();
        $maritimemoderep = Candidate::where('office_id', 12)->get();
        $railmoderep = Candidate::where('office_id', 13)->get();
        $pipelinemoderep = Candidate::where('office_id', 14)->get();
        $logisticsmoderep = Candidate::where('office_id', 15)->get();
        $roadmoderep = Candidate::where('office_id', 16)->get();


        return view('pages.vote.create', compact(
            'id', 'chairmans', 'vicechairmans', 'branchsecretarys', 'assistbranchsecretarys',
            'treasurer', 'financialsecretary', 'pro', 'welfareofficer', 'nextgenerationrep',
            'aviationmoderep', 'maritimemoderep', 'railmoderep', 'pipelinemoderep',
            'logisticsmoderep', 'roadmoderep'
        ));
    }

    public function ballotcard(Request $request)
    {

       # $memberId = $id;
       $id = $request->id;
        return view('pages.vote.create', compact('id'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request->all());
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vote  $vote
     * @return \Illuminate\Http\Response
     */
    public function show(Vote $vote)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vote  $vote
     * @return \Illuminate\Http\Response
     */
    public function edit(Vote $vote)
    {
        dd($vote);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vote  $vote
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vote $vote)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vote  $vote
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vote $vote)
    {
        //
    }
}
