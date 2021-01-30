<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Label;
use App\Models\User;

class LabelController extends Controller
{
	public function create(){
	   return view('labels.create-label');
    }

    public function getNew(){
       return view('labels.get-label');
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

    public function deleteLabel(Label $label, User $user)
    {
        //DELETE FROM labels_users WHERE label_id=$label->id AND user_id=$user->id
        dd("Funzione di cancellazione della label");
    }

    public function success(){
        return view('labels.success');
    }
}
