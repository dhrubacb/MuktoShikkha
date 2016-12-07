<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class answer extends Model
{
    //
    
    
      protected $table="answer";
     
     protected $guarded = ['id'];
 
    protected $fillable = ['answer','ques_id','user_id'];

      public function users()
    {
        return $this->belongsTo('App\User');
    }

     public function question()
    {
        return $this->belongsTo('App\answer');
    }
}
