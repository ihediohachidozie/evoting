<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Office;
use App\Models\Candidate;
use Illuminate\Http\Request;

class AddCandidateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.candidate.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $members = Member::pluck('name', 'id');
        $offices = Office::pluck('name', 'id');
        return view('pages.candidate.create', compact('members', 'offices'));

    }

    public function validateData()
    {
        # code...
        return request()->validate([
            'member_id' => 'required',
            'office_id' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'norminationform' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validateData();

       // dd($request->all());

       $candidate = Candidate::create([
        'member_id' => $request->member_id,
        'office_id' => $request->office_id,
        'image' => $request->image->store('assets/candidates', 'public'),
        'norminationform' => $request->norminationform->store('assets/norminationforms', 'public')
    ]);

    $candidate->save();
    $image = Image::make(public_path('storage/' . $candidate->image))->fit(640, 428);
    $image->save();
    $norminationForm = Image::make(public_path('storage/' . $candidate->norminationform));
    $norminationForm->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function show(Candidate $candidate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function edit(Candidate $candidate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Candidate $candidate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Candidate $candidate)
    {
        //
    }
}
