<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Card;
use \App\Word;
use \App\Word_card;

class userAppCards extends Controller
{
 
    public function getIndex(){
        

        return view('user.cards',[
            'card' => Card::where('id','=','1')->first()->word_key,
            'words' => Word_card::join('words','word_cards.word_id','=','words.id')->select('words.*')->get(),
            'userLevel' => 1
        ]);
    }

    public function getResponse(Request $request){
        $user = $request->input('response-user');
        $app = $request->input('response-app');
        
        var_dump($request->post('response-user'));

        // if($user == $app):
        //     var_dump('correto');
        // else:
        //     var_dump('incorreto');
        // endif;
    }
}
