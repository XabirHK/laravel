<?php

namespace App\Http\Controllers;

use App\Card;

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
}
