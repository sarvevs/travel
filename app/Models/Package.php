<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
class Package extends Model implements TranslatableContract
{
    use Translatable;
    protected $guarded = false;
    protected $table = 'packages';
    protected $fillable = ['price', 'rate', 'image'];
    public $translatedAttributes = [ 'country' , 'description' ];
}
