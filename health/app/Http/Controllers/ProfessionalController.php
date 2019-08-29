<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Professional;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Redirect;
use Carbon;
use EnvatoUser;


class ProfessionalController extends Controller
{

    //redirect to home
    public function index()
    {
        return view('create');    
        
    }

    // create professionals
    public function create(request $request)
    {
    //validate input from the form
        $this->validate($request,[
        'professional_name' => 'required',
        'id_number' => 'required',
        'registration_number' => 'required',
        'optionsRadios' => 'required',
        'workstation' => 'required',
        'facility' => 'required', 
    
         ]);
        
         $time = Carbon\Carbon::now();

         Professional::create(array(
            'professional_name'=>Input::get('professional_name'),
            'id_number'=>Input::get('id_number'),
            'registration_number'=>Input::get('registration_number'),
            'gender'=>Input::get('optionsRadios'),
            'workstation'=>Input::get('workstation'),
            'facility_type'=>Input::get('facility'),
            'annual_license_date'=>$time

          ));
        $requests = Professional::all(); 
        return view('user.list', ['records' => $requests])->with('message','proessional record added successfully');
      
    }

    // show  individual professional record
    public function show($id)
    {
        $requests = Professional::find($id); 
    
        return view('user.create', ['records' => $requests]);  
    }


    //update professional record
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'professional_name' => 'required',
            'id_number' => 'required',
            'registration_number' => 'required',
            'optionsRadios' => 'required',
            'workstation' => 'required',
            'facility' => 'required', 
        
             ]);
    
        $record = Professional::find($id);
        $record->professional_name =$request->input('professional_name');
        $record->id_number =$request->input('id_number');
        $record->registration_number =$request->input('registration_number');
        $record->gender =$request->input('optionsRadios');
        $record->workstation =$request->input('workstation');
        $record->facility_type =$request->input('facility');
        $record->save();
        $requests = Professional::all(); 
        return view('user.list', ['records' => $requests])->with('message','professional record updated successfuly');
        
       
       

    }

    //delete professional record
    public function delete($id)
    {
        $record = Professional::find($id);
        Professional::where('id', $id)->delete();
        $requests = Professional::all(); 

        return view('user.list', ['records' => $requests])->with('message','professional record deleted successfuly'); 
        
 
          
   
    }

    //sort professionals
    public function sort()
    {

        $requests = Professional::orderBy('facility_type')->get();  
        $now = Carbon\Carbon::now(); 
            
        return view('user.sort', ['records' => $requests,'now' => $now]);
    }
}
