<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quiz_question extends Model
{
    //
    protected $table="quiz_question";

    protected $guarded = ['id'];
     protected $primaryKey = 'id';

    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }
    public function exam()
    {
        return $this->belongsTo(Exam::class, 'id');
    }
       public function answers()
    {
        return $this->hasMany('App\Quiz_answer');
    }

}
