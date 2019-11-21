<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userAppCards extends Controller
{

    private $words = [
        'Hello world' => 'Olá mundo',
        'Name' => 'Nome',
        'Date' => 'Data',
        'House' => 'Casa',
        'Tree' => 'Arvore'
    ];

    private $card = 'Hello world';


    public function getIndex(){
        return view('user.appCards',[
            'words' => $this->words,
            'card' => $this->card,
            'cardsTotal' => count($this->words)
        ]);
    }
}
