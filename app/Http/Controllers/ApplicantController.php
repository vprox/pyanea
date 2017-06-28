<?php

namespace App\Http\Controllers;

use App\Applicant;
use Illuminate\Http\Request;
use Session;
class ApplicantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($klados)
    {
        $Applicant= new Applicant;
        $Applicants=$Applicant->where('klados','=',$klados)->get();
        $Applicants=$Applicants->sortBy('surname');
        return view('showapplicants', compact(['Applicants','klados']));
    }


    public function search(Request $request){
        $Applicant= new Applicant;
        $Applicant=$Applicant->where([
            ['afm', '=', $request->afm],
            ['at', '=', $request->at],
            ['klados', '=', $request->klados],
             ])->first();
       if($Applicant){
            Session::flash('success','Βρέθηκε Αναπληρωτής με τα κριτήρια Αναζήτησης');
            return view('showsearchresults',compact('Applicant'));
       }else{
            $message='Δεν βρέθηκε Αναπληρωτής με τα κριτήρια Αναζήτησης που εισάγατε!!!';
            $message2='Προσπαθήστε και πάλι!';
            Session::flash('failure',$message);
            Session::flash('failure2',$message2);
            return redirect()->back();
        }
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Applicant  $applicant
     * @return \Illuminate\Http\Response
     */
    public function show(Applicant $applicant, $afm, $at )
    {
        $today= getdate();
    
    if($today['mday']<= prothesmiaday and $today['mon']==6 and $today['year']==2017 ){
         $Applicant=$applicant->where([
            ['afm', '=', $afm],
            ['at', '=', $at]
             ])->first();
         return view('showsearchresults',compact('Applicant'));
     }
    else 
        return view ('SiteisDown');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Applicant  $applicant
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,  Applicant $applicant)
    {   
        Session::forget('success');
        Session::flash('editing','Είστε σε διαδικασία επανακαθορισμού επιλογών');
        return view('editapplicantchoices',['Applicant'=> $applicant->findorfail($request->applicant_id)
            ]);    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Applicant  $applicant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Applicant $applicant)
    {
         
         //πρέπει να γίνει έλεγχος για μοναδικές τιμές επιλογών εκτός απο το 0
        $plithos=[
                    '1' => 0,
                    '2' => 0,
                    '3' => 0,
                    '4' => 0,
                    '5' =>0,
                    '6' => 0,
                    '7' => 0,
                    '8' => 0,
                    '9' => 0,
                    '10' => 0,
                    '11' => 0,
                    '12' => 0,
                    '13' => 0,
                    '14' => 0
                ];

        $epiloges=[
                    'aathinas' => $request->aathinas,
                    'bathinas' => $request->bathinas,
                    'cathinas' => $request->cathinas,
                    'dathinas' => $request->dathinas,
                    'anatolikiattiki' => $request->anatolikiattiki,
                    'ditikiattiki' => $request->ditikiattiki,
                    'peiraias' => $request->peiraias,
                    'keddyaathinas' => $request->keddyaathinas,
                    'keddybathinas' => $request->keddybathinas,
                    'keddycathinas' => $request->keddycathinas,
                    'keddydathinas' => $request->keddydathinas,
                    'keddyanatolikiattiki' => $request->keddyanatolikiattiki,
                    'keddyditikiattiki' => $request->keddyditikiattiki,
                    'keddypeiraias' => $request->keddypeiraias
                ];

        foreach($epiloges as $epilogi)
            if($epilogi==1)
                $plithos['1']=$plithos['1']+1;
            elseif($epilogi==2)
                $plithos['2']=$plithos['2']+1;
            elseif($epilogi==3)
                $plithos['3']=$plithos['3']+1;
            elseif($epilogi==4)
                $plithos['4']=$plithos['4']+1;
            elseif($epilogi==5)
                $plithos['5']=$plithos['5']+1;
            elseif($epilogi==6)
                $plithos['6']=$plithos['6']+1;
            elseif($epilogi==7)
                $plithos['7']=$plithos['7']+1;
            elseif($epilogi==8)
                $plithos['8']=$plithos['8']+1;
            elseif($epilogi==9)
                $plithos['9']=$plithos['9']+1;
            elseif($epilogi==10)
                $plithos['10']=$plithos['10']+1;
            elseif($epilogi==11)
                $plithos['11']=$plithos['11']+1;
            elseif($epilogi==12)
                $plithos['12']=$plithos['12']+1;
            elseif($epilogi==13)
                $plithos['13']=$plithos['13']+1;
            elseif($epilogi==14)
                $plithos['14']=$plithos['14']+1;


    $thereisproblem=false;
  
        foreach($plithos as $key=>$value)
            if($value>1){
                $thereisproblem=true;
                $problematicKey=$key;
                $problematicValue=$value;
                break;
                } 
if($thereisproblem){
    session::flash('thereisproblem','Λάθος στις επιλογές σας');
    session::flash('problematicKey',$problematicKey);
    session::flash('problematicValue',$problematicValue);
    return view('errorwithchoices');
    
    
    // return redirect('editapplicantchoices')->withInput();
}
else{
    $Applicant= $applicant->findOrFail($request->Applicant_id);
   
    $Applicant->update([
                'aathinas' => $request->aathinas,
                'bathinas' => $request->bathinas,
                'cathinas' => $request->cathinas,
                'dathinas' => $request->dathinas,
                'anatolikiattiki' => $request->anatolikiattiki,
                'ditikiattiki' => $request->ditikiattiki,
                'peiraias' => $request->peiraias,
                'keddyaathinas' => $request->keddyaathinas,
                'keddybathinas' => $request->keddybathinas,
                'keddycathinas' => $request->keddycathinas,
                'keddydathinas' => $request->keddydathinas,
                'keddyanatolikiattiki' => $request->keddyanatolikiattiki,
                'keddyditikiattiki' => $request->keddyditikiattiki,
                'keddypeiraias' => $request->keddypeiraias,
                ]);

    session::flash('success','Αποθηκεύσατε με ΕΠΙΤΥΧΙΑ τις επιλογές σας');
    return redirect('show/'.$Applicant->afm.'/'.$Applicant->at);
    }
}
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Applicant  $applicant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Applicant $applicant)
    {
        //
    }
}
