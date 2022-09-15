<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Office;
use App\Models\Candidate;
use App\Models\Normination;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Redirect;

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
    public function create(Request $request)
    {
        //
        $id = $request->id;

        $count = Normination::where('member_id', $id)->get();
        if($count != null){
            if(count($count )> 1){
                $norminated = Normination::with('member', 'office')->where('member_id', $id)->get();
                return view('pages.candidate.create', compact('norminated'));
            }else{
                $status = 'You have not been norminated !';
            }
        }

        return  Redirect::route('candidates.index')->with(['status' => $status]);


    }

    public function validateData()
    {
        # code...
        return request()->validate([
            'member_id' => 'required',
            'office_id' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'norminationform' => 'required|mimes:pdf|max:2048'

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
       // dd($request->all());
        $this->validateData();


        if($this->check($request->member_id) != null && count($this->check($request->member_id)) == 0){
            $candidate = Candidate::create([
                'member_id' => $request->member_id,
                'office_id' => $request->office_id,
                'image' => $request->image->store('assets/candidates', 'public'),
                'norminationform' => $request->norminationform->store('assets/norminationforms', 'public')
            ]);

            $candidate->save();

            $fileName = time().'_'.$request->member_id.'.'.$request->norminationform->extension();

            $request->norminationform->move(public_path('assets/norminationforms'), $fileName);

            $imageName = time().'_'.$request->member_id.'.'.$request->image->extension();


            $img = Image::make($request->image)->fit(640, 428);

            $img->save('storage/'. $imageName);

            return back()->with('success','You have successfully submitted your form.');
        }else{
            return back()->with('success','You have already submitted your form.');
        }




    }
    public function showform(Request $request)
    {
        // confirm membership and normination ...

        $pin = Member::whereCiltno($request->pin)->first();

        if($pin != null){
            $count = Normination::where('member_id', $pin->id)->get();
            if($count != null){
                if(count($count )> 1){
                    return Redirect::route('candidates.create', ['id' => $pin->id]);
                }else{
                    $status = 'You have not been norminated !';
                }
            }else{
                $status = 'You have not been norminated !';
            }

        }else{

            $status = 'Member does not exist !';
        }

        return back()->with(['status' => $status]);

    }

    public function check($id)
    {
        return Candidate::where('member_id', $id)->get();
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
