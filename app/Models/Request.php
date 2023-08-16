<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    protected $guarded = false;

    protected $table = 'requests';
    protected $fillable = ['country', 'how_many', 'arrivals', 'leaving', 'info'];


}
