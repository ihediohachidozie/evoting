<?php

namespace App\Http\Controllers;

use App\Models\Vote;
use App\Models\Member;
use App\Models\Office;
use App\Models\Candidate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $voter_id = $request->id;
        $offices = Office::get();
        $candidates = Candidate::orderBy('office_id')->get();


        return view('pages.vote.create', compact('offices', 'candidates', 'voter_id'));
    }

    public function ballotcard(Request $request)
    {

       # $memberId = $id;
       $id = $request->id;
        return view('pages.vote.create', compact('id'));
    }

    public function statistics()
    {
        # code...
        $accreditated = Member::where('accreditated', 1)->count();
        $nonaccreditated = Member::where('accreditated', 0)->count();
        $votes = Vote::count();
        $office = Office::pluck('name', 'id');
        $elected_offices = [];
       // $vote = [];
        $candidates = Vote::select(DB::raw('count(voter_id) as Votes'), 'office_id as Office')->groupBy('office_id')->pluck('Votes', 'Office');
        $vote = Vote::get()->unique('voter_id')->count();
       // dd($voters);


        //dd(json_encode($voters));
        return view('pages.vote.statistics', compact('candidates', 'accreditated', 'nonaccreditated', 'votes', 'office', 'elected_offices', 'vote'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = $request->input();

        $check = Vote::where('voter_id', $request->voter_id)->count();

        if($check != 0){

            return redirect()->route('accreditation.form')->with('status', 'Member has already voted!');

        }
        foreach ($data as $key => $value) {
            if($key != '_token' && $key != 'voter_id'){

                $vote = new Vote();
                $vote->member_id = $value;
                $vote->voter_id = $data['voter_id'];
                $vote->office_id = $key;
                $vote->save();
            }
        }
        //

        return redirect()->route('thankyou')->with('status', 'Voting process completed');
    }


    public function thankyou()
    {
        return view('pages.vote.thankyou');
        # code...
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
