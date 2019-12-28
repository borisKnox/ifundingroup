<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Investment extends Model
{
    //
    public function user()
    {
        return $this->belongsTo('App\User','userid');
    }
    public function loan()
    {
        return $this->belongsTo('App\Loan','loanid');
    }
}
