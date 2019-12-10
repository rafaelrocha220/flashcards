<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Context 
use \App\Card;
use \App\Word;
use \App\Word_card;
use \App\User_card;

class userAppCards extends Controller
{
 
    public function getIndex($id){
        $card_user = User_card::where('user_id','=','0')->orderBy('ordem', 'desc')->first();
        
        $card = Card::where('id','=',$card_user->card_id)->first();        
        
        $words = Word_card::join('words','word_cards.word_id','=','words.id')->select('words.*')->get();

        return view('user.cards',[
            'card' => $card,
            'words' => $words,
            'card_user' => $card_user,
            'userLevel' => $card_user->level
        ]);
    }

    public function getResponseInput(Request $request){
        $user = $request->input('response-user');
        $app = $request->input('response-app');

        $card_user = User_card::where('user_id','=','0')->orderBy('ordem', 'desc')->first();
        
        if($user == $app):

            // Update card
            User_card::update_level($card_user);
            
            $response = [
                'redirect'  => route('app.cards',[1]),
                'type'      => 'success'
            ];
                
        else:

            $response = [
                'redirect'  => route('app.cards',[1]),
                'type'      => 'wrong'
            ];

        endif;

        return $response;
    }

    public function getResponse(Request $request){
        $user = $request->input('response-user');
        $app = $request->input('response-app');
        
        $card_user = User_card::where('user_id','=','0')->orderBy('ordem', 'desc')->first();
        
        if($user == $app):

            // Update card
            User_card::update_level($card_user);
            
            $response = [
                'redirect'  => route('app.cards',[1]),
                'type'      => 'success'
            ];
                
        else:
            $response = [
                'redirect'  => route('app.cards',[1]),
                'type'      => 'wrong'
            ];
        endif;
    
        return $response;
    }

}
