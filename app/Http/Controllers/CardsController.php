<?php

namespace App\Http\Controllers;

use App\Card;
use App\Note;
use App\User;

use Illuminate\Http\Request;

use App\Http\Requests;

class CardsController extends Controller
{
    public function display(){
    	$cards = Card::all();
    	return view('cards.display', compact('cards'));
    }

    public function showSingle(Card $card){

    	//$card= Card::with('notes')->get(); one way
    	//$card= Card::with('notes.user')->find(1); 

    	//$card->load('notes.user');
    	//return $card;

    	//return $card->notes[0]; //n+1 problem will occur here is the number of loop and the nuber of quary will hit
    	return view('cards.showSingle', compact('card'));
    }

}
