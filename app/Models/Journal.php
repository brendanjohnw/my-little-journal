<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Journal extends Model
{
    //

    protected $table = 'journal';
    protected $primaryKey = 'entry_id';
    public $incrementing = true;
    public $timestamps = true;
    
}
