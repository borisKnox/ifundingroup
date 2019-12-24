<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HomePage extends Model
{
    protected $fillable = ['title', 'desc', 'test_name', 'test_job', 'test_graph'];
}
