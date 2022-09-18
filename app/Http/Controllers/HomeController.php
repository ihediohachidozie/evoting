<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Office;
use App\Models\Normination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $norminated_members = Normination::pluck('member_id')->unique()->count();
        $candidates = Normination::with('member', 'office')->pluck('office_id', 'member_id')->unique();
        $total_norminations = Normination::count();
        $membership = Member::count();
        $membersx = Member::pluck('name', 'id');

        $n = Normination::select(DB::raw('count(member_id) as member'), 'office_id as Office')->groupBy('office_id')->pluck('member', 'Office');
      // dd($n);
        $offices = Office::pluck('name', 'id');

        //dd($candidates);
        $office = [];
        $members = [];

        foreach($n as $key => $value)
        {
            array_push($office, $offices[$key]);
            array_push($members, $value);

        }

       # dd(json_encode($members));

        return view('home', compact('office', 'members', 'membersx', 'offices', 'norminated_members', 'total_norminations', 'membership', 'candidates'));
    }
}
