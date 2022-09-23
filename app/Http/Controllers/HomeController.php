<?php

namespace App\Http\Controllers;

use App\Models\Vote;
use App\Models\Member;
use App\Models\Office;
use App\Models\Candidate;
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

    public function test()
    {
        $members = Member::pluck('name', 'id');
        $offices = Office::pluck('name', 'id');
        $candidates = Candidate::get();

        $data = DB::table('votes')
                ->selectRaw('count(voter_id) as Votes, member_id as Member, office_id as Office')
                ->groupBy('member_id')
                ->orderBy('office_id', 'asc')
                ->get();


            //    dd($candidates[$data[0]->Member]->image);
       // dd($members[$data[0]->Member] .' - '. $data[0]->Votes . ' Votes - '.strtoupper($offices[$data[0]->Office]) .' - '. $candidates[$data[0]->Member]->image);


        $results = [];

        foreach ($data as $item) {
            # code...
        }
/*         foreach ($candidates as $key => $value)
        {
            $votes = Vote::where('member_id', $value)->get();
            $data[$members[$value]] = count($votes) ;
            //$data['Office'] = $offices[$votes[$candidate]->office_id];

        }
 */
       // dd($data);
       return view('pages.candidate.results', compact('data', 'offices', 'members', 'candidates'));
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

        $total_votes = Vote::count();
        $n = Normination::select(DB::raw('count(member_id) as member'), 'office_id as Office')->groupBy('office_id')->pluck('member', 'Office');

        $offices = Office::pluck('name', 'id');

       # $v = Vote::get()->groupBy('member_id')->pluck('member_id', 'office_id');
        #dd($v);

        $office = [];
        $members = [];

        foreach($n as $key => $value)
        {
            array_push($office, $offices[$key]);
            array_push($members, $value);

        }

       # dd(json_encode($members));

        return view('home', compact('office', 'members', 'membersx', 'offices', 'norminated_members', 'total_norminations', 'membership', 'candidates', 'total_votes'));
    }


}
