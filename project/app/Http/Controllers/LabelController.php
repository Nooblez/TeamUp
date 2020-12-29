<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Label;

class LabelController extends Controller
{
	public function create(){
		return view('labels.create-label');
	}

    // public function createLabel(){
    // 	$name = 'nome Label';
    // 	$description = 'descrizione Label';7

    // 	$newLabel = new Label();
    	
    // 	$newLabel->name = $name;
    // 	$newLabel->description = $description;

    // 	$newLabel->save();

    // }
}
