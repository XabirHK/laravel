<?php

namespace App\Http\Controllers;

use App\Card;
use App\Note;

use Illuminate\Http\Request;

use App\Http\Requests;

class CardsController extends Controller
{
    public function display(){
    	$cards = Card::all();
    	return view('cards.display', compact('cards'));
    }

    public function showSingle(Card $card){
    	return view('cards.showSingle', compact('card'));
    }

    public function addNote(Request $request, Card $card){
    	$note = new Note;
    	$note->body = $request->body;
    	//return $note;
    	//return $card;

    	//$card->notes()->save($note);

    	$card->notes()->create([
    		'body'=> $request->body
    		]);

    	//return redirect('/somelink'); or

    	return back();
    }
}
