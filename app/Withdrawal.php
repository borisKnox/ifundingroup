<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Withdrawal extends Model
{
    //
    public function user()
    {
        return $this->belongsTo('App\User','userid');
    }
    public function investment()
    {
        return $this->belongsTo('App\Investment','investid');
    }
}
