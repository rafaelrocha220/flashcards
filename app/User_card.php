<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_card extends Model
{
    //
    protected $fillable = ['card_id','user_id','level','ordem'];

    public static function update_level($card_user){
        $card_user->level += 1;
        $card_user->save();
    }
}
