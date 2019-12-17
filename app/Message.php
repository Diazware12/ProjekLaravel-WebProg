<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    
    public function user(){
       
        return $this->belongsTo(User::class, 'user_id_receiver');
    }
    public function userSender(){
       
        return $this->belongsTo(User::class, 'user_id_sender');
    }
}
