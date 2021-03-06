<?php

namespace App\Http\Controllers;

use App\Card;
use App\Note;
use App\User;

use Illuminate\Http\Request;
use App\Http\Requests;

class NotesController extends Controller
{
    public function addNote(Request $request, Card $card){

        $this->validate($request, [
            'body' => 'required|min:10'
            ]);
    	//$note = new Note($request->all());
    	//$note->body = $request->body;
    	//return $note;
    	//return $card;
		//$card->notes()->save($note);

    	$card->notes()->create([
    		'body'=> $request->body,
            'user_id'=>1
    		]);
        
        /*$card->addNote(
                new Note($request->all())
            );
*/
    	//return redirect('/somelink'); or

    	return back();
    }

	public function edit(Note $note){
    	return view('notes.edit', compact('note'));
    }

	public function update(Request $request, Note $note){
		//dd('hit');
    	$note->update([
    		'body'=> $request->body
    		]);
    	//return back();
    	return redirect('/cards/'.$note->card_id);

    }	
}
