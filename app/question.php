<?php

namespace App;
 
use Illuminate\Database\Eloquent\Model;

class question extends Model
{
    protected $table="question";

    protected $guarded = ['id'];
     protected $primaryKey = 'id';

    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }

    
    public function answers()
    {
        return $this->hasMany('App\answer');
    }


}
