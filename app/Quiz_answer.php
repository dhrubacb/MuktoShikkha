<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quiz_answer extends Model
{
    //
    protected $table="quiz_answer";

    protected $guarded = ['id'];
     protected $primaryKey = 'id';

    public function quiz_question()
    {
        return $this->belongsTo(Quiz_question::class, 'id');
    }
   
}
