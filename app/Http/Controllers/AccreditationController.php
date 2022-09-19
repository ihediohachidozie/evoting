<?php

namespace App\Http\Controllers;

use App\Models\Vote;
use App\Models\Member;
use Illuminate\Http\Request;
use Laravel\Ui\Presets\React;
use App\Http\Controllers\VoteController;
use Illuminate\Support\Facades\Redirect;


class AccreditationController extends Controller
{
    public function showform()
    {
        return view('pages.accredition');
    }

    public function accredit(Request $request)
    {

        $member = Member::wherePin($request->pin)->first();

        $count = Member::wherePin($request->pin)->count();



        if($count != 0){

            $check = Vote::where('voter_id', $member->id)->count();

            if($check != 0){

                return redirect()->route('accreditation.form')->with('status', 'Member has already voted!');

            }
            Member::find($member->id)->update(
                ['accreditated' => 1]
            );

            return Redirect::route('votes.create', ['id' => $member->id]);

        }

        return back()->with(['status' => 'Member does not exist!']);
        # code...
    }
}
