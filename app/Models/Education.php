<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

    protected $guarded = [];

    public $table = 'educations';

    protected $primaryKey = 'id';

    public $timestamps = false;



    
}
