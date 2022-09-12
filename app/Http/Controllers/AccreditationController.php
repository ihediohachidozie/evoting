<?php

namespace App\Http\Controllers;

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

        $pin = Member::wherePin($request->pin)->first();

        if($pin != null){
            Member::find($pin->id)->update(
                ['accreditated' => 1]
            );

            return Redirect::route('vote.create', ['id' => $pin->id]);

        }
        $status = 'Member does not exist!';

        return back()->with(['status' => $status]);
        # code...
    }
}
