<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class house extends Model
{
    use HasFactory;
    protected $table='house';
    protected $primarykey ="house_no";
    public $timestamps=false;
}
