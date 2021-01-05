<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Label;

class LabelController extends Controller
{
	public function create(){
	   return view('labels.create-label');
    }

    public function newLabel(Request $request){
        //inizializzo variabili
        $newLabel = new Label();

        //creo campi da inserire nel db            
        $newLabel->name = $request->input('name');
        $newLabel->description = $request->input('description');

        // $newLabel->save();
        return redirect(route('labels.success'));
    }

    public function success(){
        return view('labels.success');
    }
}
