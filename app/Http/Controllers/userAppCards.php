<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Card;
use \App\Word;
use \App\Word_card;

class userAppCards extends Controller
{
 
    public function getIndex($id){
        $card = Card::where('id','=',$id)->first()->word_key;        

        return view('user.cards',[
            'card' => $card,
            'words' => Word_card::join('words','word_cards.word_id','=','words.id')->select('words.*')->get(),
            'userLevel' => 1
        ]);
    }

    public function getResponse(Request $request){
        $user = $request->input('response-user');
        $app = $request->input('response-app');
        
        if($user == $app):
            
            return[
                'redirect'  => route('app.cards',[2]),
                'type'      => 'success'
            ];

        else:
            return[
                'redirect'  => route('app.cards',[1]),
                'type'      => 'wrong'
            ];
        endif;
    }
}
