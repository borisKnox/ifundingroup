<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ApplyNow extends Model
{
    protected $fillable = ['name', 'company_type', 'loan', 'email'];

}
